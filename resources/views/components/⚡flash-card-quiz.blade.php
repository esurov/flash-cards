<?php

use App\Models\FlashCard;
use Livewire\Component;

new class extends Component {
    public ?FlashCard $card = null;
    public string $answer = '';
    public bool $isFlipped = false;
    public bool $isCorrect = false;
    public string $selectedCategory = '';
    public string $selectedLevel = '';
    public int $cardIndex = 0;
    public int $totalCards = 0;
    public int $correctCount = 0;
    public int $attemptedCount = 0;

    /** @var array<int> */
    public array $cardIds = [];

    public function mount(): void
    {
        $this->loadCards();
    }

    public function loadCards(): void
    {
        $query = FlashCard::query();

        if ($this->selectedCategory) {
            $query->where('category', $this->selectedCategory);
        }

        if ($this->selectedLevel) {
            $query->where('level', $this->selectedLevel);
        }

        $this->cardIds = $query->inRandomOrder()->pluck('id')->all();
        $this->totalCards = count($this->cardIds);
        $this->cardIndex = 0;
        $this->correctCount = 0;
        $this->attemptedCount = 0;
        $this->loadCurrentCard();
    }

    public function loadCurrentCard(): void
    {
        $this->isFlipped = false;
        $this->isCorrect = false;
        $this->answer = '';

        if ($this->cardIndex < $this->totalCards) {
            $this->card = FlashCard::find($this->cardIds[$this->cardIndex]);
        } else {
            $this->card = null;
        }
    }

    public function checkAnswer(): void
    {
        if (! $this->card || $this->isFlipped) {
            return;
        }

        $this->isFlipped = true;
        $this->attemptedCount++;

        $userAnswer = mb_strtolower(trim($this->answer));
        $correctAnswers = array_map(
            fn (string $a): string => mb_strtolower(trim($a)),
            preg_split('/[\/,]/', $this->card->english)
        );

        $this->isCorrect = in_array($userAnswer, $correctAnswers);

        if ($this->isCorrect) {
            $this->correctCount++;
        }
    }

    public function showAnswer(): void
    {
        if (! $this->card || $this->isFlipped) {
            return;
        }

        $this->isFlipped = true;
        $this->attemptedCount++;
    }

    public function nextCard(): void
    {
        $this->cardIndex++;
        $this->loadCurrentCard();
    }

    public function restart(): void
    {
        $this->loadCards();
    }

    public function updatedSelectedCategory(): void
    {
        $this->loadCards();
    }

    public function updatedSelectedLevel(): void
    {
        $this->loadCards();
    }

    /**
     * @return array<string, mixed>
     */
    public function with(): array
    {
        return [
            'categories' => FlashCard::distinct()->pluck('category')->sort()->values(),
            'levels' => FlashCard::distinct()->pluck('level')->sort()->values(),
        ];
    }
}
?>

<div class="flex min-h-screen flex-col items-center px-4 pt-8">
    <div class="w-full max-w-lg">
        {{-- Header --}}
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800">German Flash Cards</h1>
            <p class="mt-1 text-gray-500">B1/B2 Vocabulary Builder</p>
        </div>

        {{-- Filters --}}
        <div class="mb-6 flex gap-3">
            <select
                wire:model.live="selectedCategory"
                class="flex-1 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 shadow-sm focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400 focus:outline-none"
            >
                <option value="">All Categories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category }}">{{ $category }}</option>
                @endforeach
            </select>
            <select
                wire:model.live="selectedLevel"
                class="w-24 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 shadow-sm focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400 focus:outline-none"
            >
                <option value="">All</option>
                @foreach ($levels as $level)
                    <option value="{{ $level }}">{{ $level }}</option>
                @endforeach
            </select>
        </div>

        {{-- Progress --}}
        @if ($totalCards > 0)
            <div class="mb-4 flex items-center justify-between text-sm text-gray-500">
                <span>Card {{ min($cardIndex + 1, $totalCards) }} of {{ $totalCards }}</span>
                @if ($attemptedCount > 0)
                    <span class="font-medium text-indigo-600">{{ $correctCount }}/{{ $attemptedCount }} correct</span>
                @endif
            </div>
            <div class="mb-6 h-1.5 w-full overflow-hidden rounded-full bg-gray-200">
                <div
                    class="h-full rounded-full bg-indigo-500 transition-all duration-500"
                    style="width: {{ $totalCards > 0 ? ($cardIndex / $totalCards) * 100 : 0 }}%"
                ></div>
            </div>
        @endif

        @if ($card)
            {{-- Flash Card --}}
            <div class="perspective mb-6 h-44" x-data="{ flipped: @entangle('isFlipped') }">
                <div
                    class="card-inner relative h-full w-full transition-transform duration-600"
                    :class="flipped ? 'rotate-y-180' : ''"
                >
                    {{-- Front --}}
                    <div class="card-face absolute inset-0 flex flex-col items-center justify-center rounded-2xl border border-gray-100 bg-white p-8 shadow-lg backface-hidden">
                        <span class="mb-2 inline-block rounded-full bg-indigo-50 px-3 py-1 text-xs font-medium text-indigo-600">
                            {{ $card->level }} &middot; {{ $card->category }}
                        </span>
                        <span class="text-center text-3xl font-bold text-gray-800">{{ $card->german }}</span>
                    </div>

                    {{-- Back --}}
                    <div class="card-face absolute inset-0 flex flex-col items-center justify-center rounded-2xl border border-gray-100 p-8 shadow-lg backface-hidden rotate-y-180
                        {{ $isCorrect ? 'bg-emerald-50' : 'bg-amber-50' }}">
                        <span class="mb-2 text-center text-lg text-gray-500">{{ $card->german }}</span>
                        <span class="text-center text-3xl font-bold {{ $isCorrect ? 'text-emerald-700' : 'text-amber-700' }}">
                            {{ $card->english }}
                        </span>
                        @if ($answer && ! $isCorrect)
                            <span class="mt-2 text-sm text-red-400">Your answer: {{ $answer }}</span>
                        @endif
                        @if ($card->example_sentence)
                            <span class="mt-2 text-xs italic text-gray-500">&ldquo;{{ $card->example_sentence }}&rdquo;</span>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Input & Actions (fixed height to prevent layout shift) --}}
            <div class="h-28">
                @if (! $isFlipped)
                    <form wire:submit="checkAnswer" class="flex gap-3">
                        <input
                            type="text"
                            wire:model="answer"
                            placeholder="Type English translation..."
                            x-init="$el.focus()"
                            class="flex-1 rounded-xl border border-gray-200 bg-white px-4 py-3 text-gray-800 shadow-sm placeholder:text-gray-400 focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400 focus:outline-none"
                        />
                        <button
                            type="submit"
                            class="rounded-xl bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 focus:outline-none"
                        >
                            Check
                        </button>
                        <button
                            type="button"
                            wire:click="showAnswer"
                            class="rounded-xl border border-gray-200 bg-white px-5 py-3 text-sm font-medium text-gray-600 shadow-sm transition hover:bg-gray-50 focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 focus:outline-none"
                        >
                            Show Answer
                        </button>
                    </form>
                @else
                    <button
                        wire:click="nextCard"
                        x-init="$el.focus()"
                        class="w-full rounded-xl bg-indigo-600 py-3 font-medium text-white shadow-sm transition hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 focus:outline-none"
                    >
                        Next Card
                    </button>
                @endif
            </div>

        @elseif ($totalCards > 0)
            {{-- Completed --}}
            <div class="rounded-2xl border border-gray-100 bg-white p-10 text-center shadow-lg">
                <div class="mb-4 text-5xl">&#127881;</div>
                <h2 class="text-2xl font-bold text-gray-800">Session Complete!</h2>
                <p class="mt-2 text-gray-500">
                    You got <span class="font-semibold text-indigo-600">{{ $correctCount }}</span>
                    out of <span class="font-semibold">{{ $attemptedCount }}</span> correct.
                </p>
                <button
                    wire:click="restart"
                    class="mt-6 rounded-xl bg-indigo-600 px-8 py-3 font-medium text-white shadow-sm transition hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 focus:outline-none"
                >
                    Start Again
                </button>
            </div>
        @else
            <div class="rounded-2xl border border-gray-100 bg-white p-10 text-center shadow-lg">
                <p class="text-gray-500">No cards found. Try a different filter.</p>
            </div>
        @endif
    </div>
</div>
