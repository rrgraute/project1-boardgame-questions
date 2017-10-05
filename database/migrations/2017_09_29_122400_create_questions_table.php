<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_group_id');
            $table->string("question");
            $table->string("answer_1");
            $table->string("answer_2");
            $table->string("answer_3")->nullable();
            $table->string("answer_4")->nullable();
            $table->integer("correct_answer");
            $table->string("correct_answer_condition");
            $table->string("bad_answer_condition");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
