<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $easyCategory = \App\QuestionGroup::create([
            'name' => 'Makkelijk'
        ]);

        $hardCategory = \App\QuestionGroup::create([
            'name' => 'Moeilijk'
        ]);


        \App\Question::create([
            'question_id' => $easyCategory->id,
            'question' => "Van wanneer tot wanneer was de 2e wereldoorlog?",
            'answer_1' => "1940 - 1945",
            'answer_2' => '1945 - 1950',
            'answer_3' => '1930 - 1935',
            'answer_4' => '1940 - 1945',
            'correct_answer' => 1,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => "-5 punten"
        ]);

        \App\Question::create([
            'question_id' => $easyCategory->id,
            'question' => "Wanneer is de koning jarig?",
            'answer_1' => "28 April",
            'answer_2' => '27 Juni',
            'answer_3' => '27 April',
            'answer_4' => '30 April',
            'correct_answer' => 3,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => "-5 punten"
        ]);

        \App\Question::create([
            'question_id' => $easyCategory->id,
            'question' => "Uit hoeveel provincies bestaat Nederland?",
            'answer_1' => "10",
            'answer_2' => '5',
            'answer_3' => '11',
            'answer_4' => '12',
            'correct_answer' => 4,
            'correct_answer_condition' => "+5 punten",
            'bad_answer_condition' => "-5 punten"
        ]);

    }
}
