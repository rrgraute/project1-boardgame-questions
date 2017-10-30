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
            'bad_answer_condition' => ""
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
            'bad_answer_condition' => ""
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
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_id' => $hardCategory->id,
            'question' => "Wanneer was rotterdam getroffen door bombardementen?",
            'answer_1' => "14 mei 1943",
            'answer_2' => '14 mei 1940',
            'answer_3' => '13 mei 1940',
            'answer_4' => '5 mei 1940',
            'correct_answer' => 2,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_id' => $hardCategory->id,
            'question' => "Wat zijn de 2 officiële talen van Nederland?",
            'answer_1' => "Nederlands en Engels",
            'answer_2' => 'Nederlands en Frans',
            'answer_3' => 'Nederlands en Spaans',
            'answer_4' => 'Nederlands en Fries ',
            'correct_answer' => 4,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);

        \App\Question::create([
            'question_id' => $hardCategory->id,
            'question' => "Wat is het laagste punt van Nederland?",
            'answer_1' => "Rotterdam",
            'answer_2' => 'Amsterdam',
            'answer_3' => 'Nieuwerkerk a/d IJssel',
            'answer_4' => 'Groningen ',
            'correct_answer' => 3,
            'correct_answer_condition' => "+10 punten",
            'bad_answer_condition' => ""
        ]);


    }
}
