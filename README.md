# German Flash Cards

A Laravel + Livewire app for building German B1/B2 vocabulary through interactive flash cards.

## Features

- **189 curated words** at B1/B2 level across 16 everyday categories
- Type your English translation and check it, or flip the card to reveal the answer
- Smooth 3D card flip animation
- Filter by category and level (B1 / B2)
- Progress bar and score tracking per session
- Randomized card order on each session

## Categories

Abstract Concepts, Communication, Daily Life, Education & Learning, Emotions & Personality, Environment & Nature, Food & Cooking, Health & Body, Housing & Home, Law & Government, Leisure & Hobbies, Media & Technology, Relationships & Social, Shopping & Money, Travel & Transport, Work & Career

## Requirements

- PHP 8.5
- Node.js 22+
- Composer

## Setup

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run build
```

## Running

```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000).

## Tech Stack

- Laravel 13
- Livewire 4 (single-file component)
- Tailwind CSS 4
- SQLite
