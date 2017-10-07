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

        $random = Question::Where('question_group_id', $questionCategoryId)->get()->random(1);
        dump($random->first()->toArray());
    }
}
