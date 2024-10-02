<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Answer::create([
            'question_id' => 1,
            'answer_text' => "Cup",
            'is_correct' => true
        ]);

        Answer::create([
            'question_id' => 1,
            'answer_text' => "Trolley",
            'is_correct' => false
        ]);

        Answer::create([
            'question_id' => 1,
            'answer_text' => "Washing machine",
            'is_correct' => false
        ]);

        Answer::create([
            'question_id' => 1,
            'answer_text' => "Watch",
            'is_correct' => false
        ]);

        // ----

        Answer::create([
            'question_id' => 2,
            'answer_text' => "Cup",
            'is_correct' => false
        ]);

        Answer::create([
            'question_id' => 2,
            'answer_text' => "Trolley",
            'is_correct' => false
        ]);

        Answer::create([
            'question_id' => 2,
            'answer_text' => "Washing machine",
            'is_correct' => false
        ]);

        Answer::create([
            'question_id' => 2,
            'answer_text' => "Watch",
            'is_correct' => true
        ]);

        // -----

        Answer::create([
            'question_id' => 3,
            'answer_text' => "Cup",
            'is_correct' => false
        ]);

        Answer::create([
            'question_id' => 3,
            'answer_text' => "Trolley",
            'is_correct' => false
        ]);

        Answer::create([
            'question_id' => 3,
            'answer_text' => "Washing machine",
            'is_correct' => true
        ]);

        Answer::create([
            'question_id' => 3,
            'answer_text' => "Watch",
            'is_correct' => false
        ]);
    }
}
