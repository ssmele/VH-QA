<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Question::class, 10)
            ->create()
            # Assign variable number of answers to each question.
            ->each(function ($question){
                $question->answers()->createMany(
                    factory(App\Answer::class, rand(0, 5))->make(['question_id' => $question->id])->toArray());
            });
    }
}
