<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question_group_id', 'question', 'answer_1', 'answer_2', 'answer_3', 'answer_4', 'correct_answer', 'correct_answer_condition', 'bad_answer_condition'];
}
