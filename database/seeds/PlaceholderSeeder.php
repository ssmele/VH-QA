<?php

use Illuminate\Database\Seeder;
use App\Placeholder;

class PlaceholderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $placeholders = [
            "How do you get your protein?",
            "I wish I could go vegan but I can't live with out cheese, how do you do it?",
            "I understand meat, but why milk and eggs?",
            "Aren't we apex predators?",
            "What's wrong with \"humanely\" sourced meat?",
            "What do you season your tofu with?",
            "Silken, Firm, Extra-firm, or Super-firm?",
            "Why are you vegan?",
            "I thought cows exploded if they are not milked?"
        ];
        foreach($placeholders as $placeholder){
            Placeholder::create(['placeholder' => $placeholder]);
        }
    }
}
