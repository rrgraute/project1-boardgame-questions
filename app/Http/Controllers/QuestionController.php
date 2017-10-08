<?php

namespace App\Http\Controllers;

use App\Question;
use App\QuestionGroup;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $this->_data['questionCategories'] = QuestionGroup::all();
        return view('questions.question')->with($this->_data);
    }

    public function getQuestion($questionCategoryId)
    {

        $random = Question::Where('question_group_id', $questionCategoryId)->get()->random(1)->first();

        $question = [
            'question' => $random->question,
            'answers' => [
                '1' => $random->answer_1,
                '2' => $random->answer_2,
                '3' => $random->answer_3,
                '4' => $random->answer_4
            ],
            'correctAnswer' => $random->correct_answer,
            'correctAnswerCondition' => $random->correct_answer_condition,
            'badAnswerCondition' => $random->bad_answer_condition
        ];

        return response()->json($question);
    }
}