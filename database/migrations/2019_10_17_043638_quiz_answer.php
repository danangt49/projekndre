<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuizAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_answer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('answer_choices');
            $table->integer('quiz_id');
            $table->enum('is_answer', ['0', '1', '2', '3','4']);
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
        Schema::dropIfExists('Quiz_Answer');
    }
}
