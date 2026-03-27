<?php

namespace Database\Seeders;

use App\Models\FlashCard;
use Illuminate\Database\Seeder;

class FlashCardSeeder extends Seeder
{
    /**
     * Seed the application's database with B1/B2 German vocabulary.
     */
    public function run(): void
    {
        $cards = [
            // Food & Cooking
            ['german' => 'die Zutat', 'english' => 'ingredient', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'das Rezept', 'english' => 'recipe', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'die Mahlzeit', 'english' => 'meal', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'die Beilage', 'english' => 'side dish', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'die Pfanne', 'english' => 'pan', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'der Topf', 'english' => 'pot', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'braten', 'english' => 'to fry / to roast', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'kochen', 'english' => 'to cook / to boil', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'schmecken', 'english' => 'to taste', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'die Vorspeise', 'english' => 'appetizer / starter', 'category' => 'Food & Cooking', 'level' => 'B2'],
            ['german' => 'die Nachspeise', 'english' => 'dessert', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'würzen', 'english' => 'to season', 'category' => 'Food & Cooking', 'level' => 'B2'],
            ['german' => 'das Gewürz', 'english' => 'spice', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'rühren', 'english' => 'to stir', 'category' => 'Food & Cooking', 'level' => 'B2'],

            // Health & Body
            ['german' => 'die Erkältung', 'english' => 'cold (illness)', 'category' => 'Health & Body', 'level' => 'B1'],
            ['german' => 'das Fieber', 'english' => 'fever', 'category' => 'Health & Body', 'level' => 'B1'],
            ['german' => 'der Husten', 'english' => 'cough', 'category' => 'Health & Body', 'level' => 'B1'],
            ['german' => 'der Schnupfen', 'english' => 'runny nose / cold', 'category' => 'Health & Body', 'level' => 'B1'],
            ['german' => 'die Behandlung', 'english' => 'treatment', 'category' => 'Health & Body', 'level' => 'B1'],
            ['german' => 'die Untersuchung', 'english' => 'examination', 'category' => 'Health & Body', 'level' => 'B1'],
            ['german' => 'das Rezept', 'english' => 'prescription', 'category' => 'Health & Body', 'level' => 'B1'],
            ['german' => 'die Apotheke', 'english' => 'pharmacy', 'category' => 'Health & Body', 'level' => 'B1'],
            ['german' => 'sich erholen', 'english' => 'to recover', 'category' => 'Health & Body', 'level' => 'B2'],
            ['german' => 'die Sprechstunde', 'english' => 'consultation hours', 'category' => 'Health & Body', 'level' => 'B2'],
            ['german' => 'die Überweisung', 'english' => 'referral', 'category' => 'Health & Body', 'level' => 'B2'],
            ['german' => 'die Nebenwirkung', 'english' => 'side effect', 'category' => 'Health & Body', 'level' => 'B2'],
            ['german' => 'das Immunsystem', 'english' => 'immune system', 'category' => 'Health & Body', 'level' => 'B2'],
            ['german' => 'die Entzündung', 'english' => 'inflammation', 'category' => 'Health & Body', 'level' => 'B2'],

            // Work & Career
            ['german' => 'die Bewerbung', 'english' => 'application (job)', 'category' => 'Work & Career', 'level' => 'B1'],
            ['german' => 'der Lebenslauf', 'english' => 'CV / resume', 'category' => 'Work & Career', 'level' => 'B1'],
            ['german' => 'das Vorstellungsgespräch', 'english' => 'job interview', 'category' => 'Work & Career', 'level' => 'B1'],
            ['german' => 'die Stelle', 'english' => 'position / job', 'category' => 'Work & Career', 'level' => 'B1'],
            ['german' => 'der Arbeitgeber', 'english' => 'employer', 'category' => 'Work & Career', 'level' => 'B1'],
            ['german' => 'der Arbeitnehmer', 'english' => 'employee', 'category' => 'Work & Career', 'level' => 'B1'],
            ['german' => 'die Kündigung', 'english' => 'resignation / dismissal', 'category' => 'Work & Career', 'level' => 'B2'],
            ['german' => 'die Beförderung', 'english' => 'promotion', 'category' => 'Work & Career', 'level' => 'B2'],
            ['german' => 'das Gehalt', 'english' => 'salary', 'category' => 'Work & Career', 'level' => 'B1'],
            ['german' => 'die Überstunde', 'english' => 'overtime', 'category' => 'Work & Career', 'level' => 'B2'],
            ['german' => 'die Weiterbildung', 'english' => 'further education / training', 'category' => 'Work & Career', 'level' => 'B2'],
            ['german' => 'die Abteilung', 'english' => 'department', 'category' => 'Work & Career', 'level' => 'B1'],
            ['german' => 'die Frist', 'english' => 'deadline', 'category' => 'Work & Career', 'level' => 'B2'],
            ['german' => 'der Vertrag', 'english' => 'contract', 'category' => 'Work & Career', 'level' => 'B1'],

            // Housing & Home
            ['german' => 'die Wohnung', 'english' => 'apartment', 'category' => 'Housing & Home', 'level' => 'B1'],
            ['german' => 'die Miete', 'english' => 'rent', 'category' => 'Housing & Home', 'level' => 'B1'],
            ['german' => 'der Vermieter', 'english' => 'landlord', 'category' => 'Housing & Home', 'level' => 'B1'],
            ['german' => 'der Mieter', 'english' => 'tenant', 'category' => 'Housing & Home', 'level' => 'B1'],
            ['german' => 'die Nebenkosten', 'english' => 'utility costs', 'category' => 'Housing & Home', 'level' => 'B2'],
            ['german' => 'die Kaution', 'english' => 'deposit (rental)', 'category' => 'Housing & Home', 'level' => 'B2'],
            ['german' => 'der Mietvertrag', 'english' => 'lease agreement', 'category' => 'Housing & Home', 'level' => 'B2'],
            ['german' => 'umziehen', 'english' => 'to move (house)', 'category' => 'Housing & Home', 'level' => 'B1'],
            ['german' => 'einrichten', 'english' => 'to furnish / set up', 'category' => 'Housing & Home', 'level' => 'B2'],
            ['german' => 'renovieren', 'english' => 'to renovate', 'category' => 'Housing & Home', 'level' => 'B2'],
            ['german' => 'das Stockwerk', 'english' => 'floor / storey', 'category' => 'Housing & Home', 'level' => 'B1'],
            ['german' => 'der Aufzug', 'english' => 'elevator', 'category' => 'Housing & Home', 'level' => 'B1'],
            ['german' => 'die Heizung', 'english' => 'heating', 'category' => 'Housing & Home', 'level' => 'B1'],
            ['german' => 'der Strom', 'english' => 'electricity', 'category' => 'Housing & Home', 'level' => 'B1'],

            // Travel & Transport
            ['german' => 'die Fahrkarte', 'english' => 'ticket (transport)', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'der Fahrplan', 'english' => 'timetable / schedule', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'die Verspätung', 'english' => 'delay', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'umsteigen', 'english' => 'to transfer / change', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'die Haltestelle', 'english' => 'stop (bus/tram)', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'der Stau', 'english' => 'traffic jam', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'die Unterkunft', 'english' => 'accommodation', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'die Sehenswürdigkeit', 'english' => 'sight / attraction', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'die Abfahrt', 'english' => 'departure', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'die Ankunft', 'english' => 'arrival', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'das Gleis', 'english' => 'platform / track', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'die Ermäßigung', 'english' => 'discount / reduction', 'category' => 'Travel & Transport', 'level' => 'B2'],
            ['german' => 'die Durchsage', 'english' => 'announcement', 'category' => 'Travel & Transport', 'level' => 'B2'],

            // Education & Learning
            ['german' => 'die Prüfung', 'english' => 'exam', 'category' => 'Education & Learning', 'level' => 'B1'],
            ['german' => 'bestehen', 'english' => 'to pass (an exam)', 'category' => 'Education & Learning', 'level' => 'B1'],
            ['german' => 'durchfallen', 'english' => 'to fail (an exam)', 'category' => 'Education & Learning', 'level' => 'B1'],
            ['german' => 'die Kenntnisse', 'english' => 'knowledge / skills', 'category' => 'Education & Learning', 'level' => 'B2'],
            ['german' => 'die Ausbildung', 'english' => 'vocational training', 'category' => 'Education & Learning', 'level' => 'B1'],
            ['german' => 'das Studium', 'english' => 'university studies', 'category' => 'Education & Learning', 'level' => 'B1'],
            ['german' => 'der Abschluss', 'english' => 'degree / graduation', 'category' => 'Education & Learning', 'level' => 'B1'],
            ['german' => 'die Vorlesung', 'english' => 'lecture', 'category' => 'Education & Learning', 'level' => 'B1'],
            ['german' => 'das Stipendium', 'english' => 'scholarship', 'category' => 'Education & Learning', 'level' => 'B2'],
            ['german' => 'die Nachhilfe', 'english' => 'tutoring', 'category' => 'Education & Learning', 'level' => 'B2'],
            ['german' => 'sich anmelden', 'english' => 'to register / enroll', 'category' => 'Education & Learning', 'level' => 'B1'],
            ['german' => 'der Lehrplan', 'english' => 'curriculum', 'category' => 'Education & Learning', 'level' => 'B2'],

            // Shopping & Money
            ['german' => 'die Quittung', 'english' => 'receipt', 'category' => 'Shopping & Money', 'level' => 'B1'],
            ['german' => 'das Angebot', 'english' => 'offer / special deal', 'category' => 'Shopping & Money', 'level' => 'B1'],
            ['german' => 'umtauschen', 'english' => 'to exchange / return', 'category' => 'Shopping & Money', 'level' => 'B1'],
            ['german' => 'die Rechnung', 'english' => 'bill / invoice', 'category' => 'Shopping & Money', 'level' => 'B1'],
            ['german' => 'das Konto', 'english' => 'account (bank)', 'category' => 'Shopping & Money', 'level' => 'B1'],
            ['german' => 'überweisen', 'english' => 'to transfer (money)', 'category' => 'Shopping & Money', 'level' => 'B1'],
            ['german' => 'die Schulden', 'english' => 'debts', 'category' => 'Shopping & Money', 'level' => 'B2'],
            ['german' => 'sparen', 'english' => 'to save (money)', 'category' => 'Shopping & Money', 'level' => 'B1'],
            ['german' => 'ausgeben', 'english' => 'to spend', 'category' => 'Shopping & Money', 'level' => 'B1'],
            ['german' => 'die Versicherung', 'english' => 'insurance', 'category' => 'Shopping & Money', 'level' => 'B2'],
            ['german' => 'der Rabatt', 'english' => 'discount', 'category' => 'Shopping & Money', 'level' => 'B1'],
            ['german' => 'die Ratenzahlung', 'english' => 'installment payment', 'category' => 'Shopping & Money', 'level' => 'B2'],

            // Emotions & Personality
            ['german' => 'begeistert', 'english' => 'enthusiastic / excited', 'category' => 'Emotions & Personality', 'level' => 'B1'],
            ['german' => 'enttäuscht', 'english' => 'disappointed', 'category' => 'Emotions & Personality', 'level' => 'B1'],
            ['german' => 'erstaunt', 'english' => 'astonished', 'category' => 'Emotions & Personality', 'level' => 'B2'],
            ['german' => 'eifersüchtig', 'english' => 'jealous', 'category' => 'Emotions & Personality', 'level' => 'B2'],
            ['german' => 'selbstbewusst', 'english' => 'confident', 'category' => 'Emotions & Personality', 'level' => 'B2'],
            ['german' => 'zuverlässig', 'english' => 'reliable', 'category' => 'Emotions & Personality', 'level' => 'B2'],
            ['german' => 'neugierig', 'english' => 'curious', 'category' => 'Emotions & Personality', 'level' => 'B1'],
            ['german' => 'dankbar', 'english' => 'grateful', 'category' => 'Emotions & Personality', 'level' => 'B1'],
            ['german' => 'ängstlich', 'english' => 'anxious / fearful', 'category' => 'Emotions & Personality', 'level' => 'B1'],
            ['german' => 'großzügig', 'english' => 'generous', 'category' => 'Emotions & Personality', 'level' => 'B2'],
            ['german' => 'hartnäckig', 'english' => 'persistent / stubborn', 'category' => 'Emotions & Personality', 'level' => 'B2'],
            ['german' => 'empfindlich', 'english' => 'sensitive', 'category' => 'Emotions & Personality', 'level' => 'B2'],

            // Environment & Nature
            ['german' => 'die Umwelt', 'english' => 'environment', 'category' => 'Environment & Nature', 'level' => 'B1'],
            ['german' => 'der Klimawandel', 'english' => 'climate change', 'category' => 'Environment & Nature', 'level' => 'B2'],
            ['german' => 'die Verschmutzung', 'english' => 'pollution', 'category' => 'Environment & Nature', 'level' => 'B2'],
            ['german' => 'recyceln', 'english' => 'to recycle', 'category' => 'Environment & Nature', 'level' => 'B1'],
            ['german' => 'die Mülltrennung', 'english' => 'waste separation', 'category' => 'Environment & Nature', 'level' => 'B1'],
            ['german' => 'erneuerbar', 'english' => 'renewable', 'category' => 'Environment & Nature', 'level' => 'B2'],
            ['german' => 'die Nachhaltigkeit', 'english' => 'sustainability', 'category' => 'Environment & Nature', 'level' => 'B2'],
            ['german' => 'der Naturschutz', 'english' => 'nature conservation', 'category' => 'Environment & Nature', 'level' => 'B2'],
            ['german' => 'das Gewitter', 'english' => 'thunderstorm', 'category' => 'Environment & Nature', 'level' => 'B1'],
            ['german' => 'die Überschwemmung', 'english' => 'flood', 'category' => 'Environment & Nature', 'level' => 'B2'],
            ['german' => 'die Dürre', 'english' => 'drought', 'category' => 'Environment & Nature', 'level' => 'B2'],

            // Media & Technology
            ['german' => 'die Nachricht', 'english' => 'message / news', 'category' => 'Media & Technology', 'level' => 'B1'],
            ['german' => 'die Sendung', 'english' => 'broadcast / show', 'category' => 'Media & Technology', 'level' => 'B1'],
            ['german' => 'der Beitrag', 'english' => 'contribution / post', 'category' => 'Media & Technology', 'level' => 'B2'],
            ['german' => 'herunterladen', 'english' => 'to download', 'category' => 'Media & Technology', 'level' => 'B1'],
            ['german' => 'die Anwendung', 'english' => 'application (software)', 'category' => 'Media & Technology', 'level' => 'B2'],
            ['german' => 'das Passwort', 'english' => 'password', 'category' => 'Media & Technology', 'level' => 'B1'],
            ['german' => 'die Datei', 'english' => 'file', 'category' => 'Media & Technology', 'level' => 'B1'],
            ['german' => 'speichern', 'english' => 'to save / store', 'category' => 'Media & Technology', 'level' => 'B1'],
            ['german' => 'die Werbung', 'english' => 'advertising', 'category' => 'Media & Technology', 'level' => 'B1'],
            ['german' => 'die Zeitschrift', 'english' => 'magazine', 'category' => 'Media & Technology', 'level' => 'B1'],
            ['german' => 'veröffentlichen', 'english' => 'to publish', 'category' => 'Media & Technology', 'level' => 'B2'],

            // Relationships & Social
            ['german' => 'die Beziehung', 'english' => 'relationship', 'category' => 'Relationships & Social', 'level' => 'B1'],
            ['german' => 'sich verloben', 'english' => 'to get engaged', 'category' => 'Relationships & Social', 'level' => 'B2'],
            ['german' => 'sich scheiden lassen', 'english' => 'to get divorced', 'category' => 'Relationships & Social', 'level' => 'B2'],
            ['german' => 'der Nachbar', 'english' => 'neighbor', 'category' => 'Relationships & Social', 'level' => 'B1'],
            ['german' => 'die Verabredung', 'english' => 'appointment / date', 'category' => 'Relationships & Social', 'level' => 'B1'],
            ['german' => 'sich streiten', 'english' => 'to argue / quarrel', 'category' => 'Relationships & Social', 'level' => 'B1'],
            ['german' => 'sich versöhnen', 'english' => 'to reconcile', 'category' => 'Relationships & Social', 'level' => 'B2'],
            ['german' => 'vertrauen', 'english' => 'to trust', 'category' => 'Relationships & Social', 'level' => 'B1'],
            ['german' => 'die Einladung', 'english' => 'invitation', 'category' => 'Relationships & Social', 'level' => 'B1'],
            ['german' => 'die Gesellschaft', 'english' => 'society / company', 'category' => 'Relationships & Social', 'level' => 'B2'],

            // Law & Government
            ['german' => 'das Gesetz', 'english' => 'law', 'category' => 'Law & Government', 'level' => 'B2'],
            ['german' => 'der Bürger', 'english' => 'citizen', 'category' => 'Law & Government', 'level' => 'B1'],
            ['german' => 'die Wahl', 'english' => 'election / choice', 'category' => 'Law & Government', 'level' => 'B1'],
            ['german' => 'die Steuer', 'english' => 'tax', 'category' => 'Law & Government', 'level' => 'B2'],
            ['german' => 'das Amt', 'english' => 'office / authority', 'category' => 'Law & Government', 'level' => 'B1'],
            ['german' => 'der Ausweis', 'english' => 'ID card', 'category' => 'Law & Government', 'level' => 'B1'],
            ['german' => 'die Genehmigung', 'english' => 'permit / approval', 'category' => 'Law & Government', 'level' => 'B2'],
            ['german' => 'beantragen', 'english' => 'to apply for', 'category' => 'Law & Government', 'level' => 'B2'],
            ['german' => 'die Pflicht', 'english' => 'duty / obligation', 'category' => 'Law & Government', 'level' => 'B2'],
            ['german' => 'das Recht', 'english' => 'right / law', 'category' => 'Law & Government', 'level' => 'B1'],

            // Communication & Language
            ['german' => 'die Bedeutung', 'english' => 'meaning', 'category' => 'Communication', 'level' => 'B1'],
            ['german' => 'der Ausdruck', 'english' => 'expression', 'category' => 'Communication', 'level' => 'B1'],
            ['german' => 'übersetzen', 'english' => 'to translate', 'category' => 'Communication', 'level' => 'B1'],
            ['german' => 'die Aussprache', 'english' => 'pronunciation', 'category' => 'Communication', 'level' => 'B1'],
            ['german' => 'die Muttersprache', 'english' => 'mother tongue', 'category' => 'Communication', 'level' => 'B1'],
            ['german' => 'sich ausdrücken', 'english' => 'to express oneself', 'category' => 'Communication', 'level' => 'B2'],
            ['german' => 'die Verständigung', 'english' => 'communication / understanding', 'category' => 'Communication', 'level' => 'B2'],
            ['german' => 'beherrschen', 'english' => 'to master / command', 'category' => 'Communication', 'level' => 'B2'],
            ['german' => 'die Redewendung', 'english' => 'idiom / saying', 'category' => 'Communication', 'level' => 'B2'],
            ['german' => 'zusammenfassen', 'english' => 'to summarize', 'category' => 'Communication', 'level' => 'B2'],

            // Daily Routines & Household
            ['german' => 'aufräumen', 'english' => 'to tidy up', 'category' => 'Daily Life', 'level' => 'B1'],
            ['german' => 'die Wäsche', 'english' => 'laundry', 'category' => 'Daily Life', 'level' => 'B1'],
            ['german' => 'bügeln', 'english' => 'to iron', 'category' => 'Daily Life', 'level' => 'B1'],
            ['german' => 'staubsaugen', 'english' => 'to vacuum', 'category' => 'Daily Life', 'level' => 'B1'],
            ['german' => 'der Haushalt', 'english' => 'household', 'category' => 'Daily Life', 'level' => 'B1'],
            ['german' => 'abspülen', 'english' => 'to wash dishes', 'category' => 'Daily Life', 'level' => 'B1'],
            ['german' => 'einkaufen', 'english' => 'to go shopping', 'category' => 'Daily Life', 'level' => 'B1'],
            ['german' => 'die Gewohnheit', 'english' => 'habit', 'category' => 'Daily Life', 'level' => 'B2'],
            ['german' => 'der Alltag', 'english' => 'everyday life', 'category' => 'Daily Life', 'level' => 'B1'],
            ['german' => 'erledigen', 'english' => 'to take care of / complete', 'category' => 'Daily Life', 'level' => 'B2'],

            // Abstract Concepts & Verbs
            ['german' => 'sich entscheiden', 'english' => 'to decide', 'category' => 'Abstract Concepts', 'level' => 'B1'],
            ['german' => 'berücksichtigen', 'english' => 'to consider / take into account', 'category' => 'Abstract Concepts', 'level' => 'B2'],
            ['german' => 'voraussetzen', 'english' => 'to presuppose / require', 'category' => 'Abstract Concepts', 'level' => 'B2'],
            ['german' => 'beeinflussen', 'english' => 'to influence', 'category' => 'Abstract Concepts', 'level' => 'B2'],
            ['german' => 'verwirklichen', 'english' => 'to realize / accomplish', 'category' => 'Abstract Concepts', 'level' => 'B2'],
            ['german' => 'sich bemühen', 'english' => 'to make an effort', 'category' => 'Abstract Concepts', 'level' => 'B2'],
            ['german' => 'die Erfahrung', 'english' => 'experience', 'category' => 'Abstract Concepts', 'level' => 'B1'],
            ['german' => 'die Möglichkeit', 'english' => 'possibility / opportunity', 'category' => 'Abstract Concepts', 'level' => 'B1'],
            ['german' => 'die Voraussetzung', 'english' => 'requirement / prerequisite', 'category' => 'Abstract Concepts', 'level' => 'B2'],
            ['german' => 'der Zusammenhang', 'english' => 'context / connection', 'category' => 'Abstract Concepts', 'level' => 'B2'],
            ['german' => 'die Entwicklung', 'english' => 'development', 'category' => 'Abstract Concepts', 'level' => 'B1'],
            ['german' => 'die Verantwortung', 'english' => 'responsibility', 'category' => 'Abstract Concepts', 'level' => 'B2'],

            // Leisure & Hobbies
            ['german' => 'der Verein', 'english' => 'club / association', 'category' => 'Leisure & Hobbies', 'level' => 'B1'],
            ['german' => 'die Mannschaft', 'english' => 'team', 'category' => 'Leisure & Hobbies', 'level' => 'B1'],
            ['german' => 'die Veranstaltung', 'english' => 'event', 'category' => 'Leisure & Hobbies', 'level' => 'B1'],
            ['german' => 'die Ausstellung', 'english' => 'exhibition', 'category' => 'Leisure & Hobbies', 'level' => 'B2'],
            ['german' => 'die Aufführung', 'english' => 'performance', 'category' => 'Leisure & Hobbies', 'level' => 'B2'],
            ['german' => 'sich entspannen', 'english' => 'to relax', 'category' => 'Leisure & Hobbies', 'level' => 'B1'],
            ['german' => 'wandern', 'english' => 'to hike', 'category' => 'Leisure & Hobbies', 'level' => 'B1'],
            ['german' => 'die Meisterschaft', 'english' => 'championship', 'category' => 'Leisure & Hobbies', 'level' => 'B2'],
            ['german' => 'das Ergebnis', 'english' => 'result / score', 'category' => 'Leisure & Hobbies', 'level' => 'B1'],
            ['german' => 'teilnehmen', 'english' => 'to participate', 'category' => 'Leisure & Hobbies', 'level' => 'B1'],
            ['german' => 'sammeln', 'english' => 'to collect', 'category' => 'Leisure & Hobbies', 'level' => 'B1'],
            ['german' => 'der Zuschauer', 'english' => 'spectator', 'category' => 'Leisure & Hobbies', 'level' => 'B2'],
            ['german' => 'die Freizeit', 'english' => 'free time / leisure', 'category' => 'Leisure & Hobbies', 'level' => 'B1'],

            // Food & Cooking (additional)
            ['german' => 'backen', 'english' => 'to bake', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'die Scheibe', 'english' => 'slice', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'die Portion', 'english' => 'portion / serving', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'schälen', 'english' => 'to peel', 'category' => 'Food & Cooking', 'level' => 'B2'],
            ['german' => 'die Soße', 'english' => 'sauce / gravy', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'der Teig', 'english' => 'dough', 'category' => 'Food & Cooking', 'level' => 'B2'],
            ['german' => 'die Schüssel', 'english' => 'bowl', 'category' => 'Food & Cooking', 'level' => 'B1'],
            ['german' => 'das Besteck', 'english' => 'cutlery', 'category' => 'Food & Cooking', 'level' => 'B1'],

            // Health & Body (additional)
            ['german' => 'die Salbe', 'english' => 'ointment', 'category' => 'Health & Body', 'level' => 'B2'],
            ['german' => 'der Verband', 'english' => 'bandage', 'category' => 'Health & Body', 'level' => 'B1'],
            ['german' => 'die Spritze', 'english' => 'injection / syringe', 'category' => 'Health & Body', 'level' => 'B1'],
            ['german' => 'der Blutdruck', 'english' => 'blood pressure', 'category' => 'Health & Body', 'level' => 'B2'],
            ['german' => 'die Allergie', 'english' => 'allergy', 'category' => 'Health & Body', 'level' => 'B1'],
            ['german' => 'nüchtern', 'english' => 'sober / on an empty stomach', 'category' => 'Health & Body', 'level' => 'B2'],
            ['german' => 'die Krankenkasse', 'english' => 'health insurance', 'category' => 'Health & Body', 'level' => 'B1'],

            // Work & Career (additional)
            ['german' => 'die Teilzeit', 'english' => 'part-time', 'category' => 'Work & Career', 'level' => 'B1'],
            ['german' => 'die Vollzeit', 'english' => 'full-time', 'category' => 'Work & Career', 'level' => 'B1'],
            ['german' => 'der Kollege', 'english' => 'colleague', 'category' => 'Work & Career', 'level' => 'B1'],
            ['german' => 'die Besprechung', 'english' => 'meeting', 'category' => 'Work & Career', 'level' => 'B1'],
            ['german' => 'die Geschäftsreise', 'english' => 'business trip', 'category' => 'Work & Career', 'level' => 'B2'],
            ['german' => 'der Feierabend', 'english' => 'end of the workday', 'category' => 'Work & Career', 'level' => 'B1'],
            ['german' => 'der Urlaub', 'english' => 'vacation / holiday', 'category' => 'Work & Career', 'level' => 'B1'],

            // Housing & Home (additional)
            ['german' => 'der Keller', 'english' => 'basement / cellar', 'category' => 'Housing & Home', 'level' => 'B1'],
            ['german' => 'der Dachboden', 'english' => 'attic', 'category' => 'Housing & Home', 'level' => 'B2'],
            ['german' => 'die Treppe', 'english' => 'stairs', 'category' => 'Housing & Home', 'level' => 'B1'],
            ['german' => 'der Balkon', 'english' => 'balcony', 'category' => 'Housing & Home', 'level' => 'B1'],
            ['german' => 'die Garderobe', 'english' => 'wardrobe / cloakroom', 'category' => 'Housing & Home', 'level' => 'B2'],
            ['german' => 'die Steckdose', 'english' => 'power outlet', 'category' => 'Housing & Home', 'level' => 'B1'],
            ['german' => 'der Wasserhahn', 'english' => 'faucet / tap', 'category' => 'Housing & Home', 'level' => 'B2'],

            // Travel & Transport (additional)
            ['german' => 'die Reiseversicherung', 'english' => 'travel insurance', 'category' => 'Travel & Transport', 'level' => 'B2'],
            ['german' => 'die Grenze', 'english' => 'border', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'der Reisepass', 'english' => 'passport', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'das Gepäck', 'english' => 'luggage', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'die Fähre', 'english' => 'ferry', 'category' => 'Travel & Transport', 'level' => 'B2'],
            ['german' => 'der Flughafen', 'english' => 'airport', 'category' => 'Travel & Transport', 'level' => 'B1'],
            ['german' => 'die Kreuzung', 'english' => 'intersection / crossroads', 'category' => 'Travel & Transport', 'level' => 'B1'],

            // Emotions & Personality (additional)
            ['german' => 'verzweifelt', 'english' => 'desperate', 'category' => 'Emotions & Personality', 'level' => 'B2'],
            ['german' => 'stolz', 'english' => 'proud', 'category' => 'Emotions & Personality', 'level' => 'B1'],
            ['german' => 'schüchtern', 'english' => 'shy', 'category' => 'Emotions & Personality', 'level' => 'B1'],
            ['german' => 'geduldig', 'english' => 'patient', 'category' => 'Emotions & Personality', 'level' => 'B1'],
            ['german' => 'ehrgeizig', 'english' => 'ambitious', 'category' => 'Emotions & Personality', 'level' => 'B2'],
            ['german' => 'gelassen', 'english' => 'calm / composed', 'category' => 'Emotions & Personality', 'level' => 'B2'],
            ['german' => 'neidisch', 'english' => 'envious', 'category' => 'Emotions & Personality', 'level' => 'B2'],

            // Environment & Nature (additional)
            ['german' => 'die Quelle', 'english' => 'source / spring', 'category' => 'Environment & Nature', 'level' => 'B2'],
            ['german' => 'der Abfall', 'english' => 'waste / garbage', 'category' => 'Environment & Nature', 'level' => 'B1'],
            ['german' => 'der Lebensraum', 'english' => 'habitat', 'category' => 'Environment & Nature', 'level' => 'B2'],
            ['german' => 'aussterben', 'english' => 'to go extinct', 'category' => 'Environment & Nature', 'level' => 'B2'],
            ['german' => 'die Ernte', 'english' => 'harvest', 'category' => 'Environment & Nature', 'level' => 'B2'],
            ['german' => 'der Schatten', 'english' => 'shadow / shade', 'category' => 'Environment & Nature', 'level' => 'B1'],

            // Feelings & Mental States
            ['german' => 'die Langeweile', 'english' => 'boredom', 'category' => 'Feelings & Mental States', 'level' => 'B1'],
            ['german' => 'die Sehnsucht', 'english' => 'longing / yearning', 'category' => 'Feelings & Mental States', 'level' => 'B2'],
            ['german' => 'das Heimweh', 'english' => 'homesickness', 'category' => 'Feelings & Mental States', 'level' => 'B1'],
            ['german' => 'die Eifersucht', 'english' => 'jealousy', 'category' => 'Feelings & Mental States', 'level' => 'B2'],
            ['german' => 'das Mitleid', 'english' => 'pity / compassion', 'category' => 'Feelings & Mental States', 'level' => 'B2'],
            ['german' => 'die Zufriedenheit', 'english' => 'contentment / satisfaction', 'category' => 'Feelings & Mental States', 'level' => 'B2'],
            ['german' => 'erschöpft', 'english' => 'exhausted', 'category' => 'Feelings & Mental States', 'level' => 'B1'],
            ['german' => 'überrascht', 'english' => 'surprised', 'category' => 'Feelings & Mental States', 'level' => 'B1'],
            ['german' => 'erleichtert', 'english' => 'relieved', 'category' => 'Feelings & Mental States', 'level' => 'B2'],
            ['german' => 'besorgt', 'english' => 'worried / concerned', 'category' => 'Feelings & Mental States', 'level' => 'B1'],
            ['german' => 'überwältigt', 'english' => 'overwhelmed', 'category' => 'Feelings & Mental States', 'level' => 'B2'],
            ['german' => 'zuversichtlich', 'english' => 'optimistic / confident', 'category' => 'Feelings & Mental States', 'level' => 'B2'],

            // Directions & Places
            ['german' => 'die Kreuzung', 'english' => 'intersection', 'category' => 'Directions & Places', 'level' => 'B1'],
            ['german' => 'geradeaus', 'english' => 'straight ahead', 'category' => 'Directions & Places', 'level' => 'B1'],
            ['german' => 'die Umgebung', 'english' => 'surroundings / area', 'category' => 'Directions & Places', 'level' => 'B1'],
            ['german' => 'der Stadtteil', 'english' => 'district / neighborhood', 'category' => 'Directions & Places', 'level' => 'B1'],
            ['german' => 'die Innenstadt', 'english' => 'city center / downtown', 'category' => 'Directions & Places', 'level' => 'B1'],
            ['german' => 'der Vorort', 'english' => 'suburb', 'category' => 'Directions & Places', 'level' => 'B2'],
            ['german' => 'die Gegend', 'english' => 'area / region', 'category' => 'Directions & Places', 'level' => 'B1'],
            ['german' => 'die Einbahnstraße', 'english' => 'one-way street', 'category' => 'Directions & Places', 'level' => 'B2'],
            ['german' => 'der Bürgersteig', 'english' => 'sidewalk', 'category' => 'Directions & Places', 'level' => 'B1'],
            ['german' => 'die Ampel', 'english' => 'traffic light', 'category' => 'Directions & Places', 'level' => 'B1'],

            // Clothing & Appearance
            ['german' => 'anziehen', 'english' => 'to put on / to dress', 'category' => 'Clothing & Appearance', 'level' => 'B1'],
            ['german' => 'ausziehen', 'english' => 'to take off / to undress', 'category' => 'Clothing & Appearance', 'level' => 'B1'],
            ['german' => 'die Größe', 'english' => 'size', 'category' => 'Clothing & Appearance', 'level' => 'B1'],
            ['german' => 'passen', 'english' => 'to fit', 'category' => 'Clothing & Appearance', 'level' => 'B1'],
            ['german' => 'die Umkleidekabine', 'english' => 'fitting room', 'category' => 'Clothing & Appearance', 'level' => 'B2'],
            ['german' => 'der Ärmel', 'english' => 'sleeve', 'category' => 'Clothing & Appearance', 'level' => 'B2'],
            ['german' => 'der Stoff', 'english' => 'fabric / material', 'category' => 'Clothing & Appearance', 'level' => 'B2'],
            ['german' => 'gestreift', 'english' => 'striped', 'category' => 'Clothing & Appearance', 'level' => 'B2'],
            ['german' => 'kariert', 'english' => 'checkered / plaid', 'category' => 'Clothing & Appearance', 'level' => 'B2'],
            ['german' => 'der Schmuck', 'english' => 'jewelry', 'category' => 'Clothing & Appearance', 'level' => 'B1'],

            // Time & Scheduling
            ['german' => 'der Termin', 'english' => 'appointment', 'category' => 'Time & Scheduling', 'level' => 'B1'],
            ['german' => 'verschieben', 'english' => 'to postpone / to move', 'category' => 'Time & Scheduling', 'level' => 'B2'],
            ['german' => 'rechtzeitig', 'english' => 'on time / in time', 'category' => 'Time & Scheduling', 'level' => 'B1'],
            ['german' => 'die Dauer', 'english' => 'duration', 'category' => 'Time & Scheduling', 'level' => 'B2'],
            ['german' => 'voraussichtlich', 'english' => 'expected / estimated', 'category' => 'Time & Scheduling', 'level' => 'B2'],
            ['german' => 'gleichzeitig', 'english' => 'simultaneous / at the same time', 'category' => 'Time & Scheduling', 'level' => 'B2'],
            ['german' => 'allmählich', 'english' => 'gradually', 'category' => 'Time & Scheduling', 'level' => 'B2'],
            ['german' => 'inzwischen', 'english' => 'meanwhile', 'category' => 'Time & Scheduling', 'level' => 'B1'],
            ['german' => 'ständig', 'english' => 'constantly', 'category' => 'Time & Scheduling', 'level' => 'B1'],
            ['german' => 'gelegentlich', 'english' => 'occasionally', 'category' => 'Time & Scheduling', 'level' => 'B2'],
        ];

        foreach ($cards as $card) {
            FlashCard::firstOrCreate(
                ['german' => $card['german'], 'category' => $card['category']],
                $card,
            );
        }
    }
}
