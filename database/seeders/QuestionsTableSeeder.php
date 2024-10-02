<?php

namespace Database\Seeders;

use App\Enums\QuestionType;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'question_type' => QuestionType::MULTIPLE_CHOICE,
            'question_text' => 'Translate Becher',
        ]);

        Question::create([
            'question_type' => QuestionType::MULTIPLE_CHOICE,
            'question_text' => 'Translate Armbanduhr',
        ]);

        Question::create([
            'question_type' => QuestionType::MULTIPLE_CHOICE,
            'question_text' => 'Translate Waschmaschine',
        ]);
    }
}
