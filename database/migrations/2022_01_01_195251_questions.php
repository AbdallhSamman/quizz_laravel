<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Questions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create  ('questions', function (Blueprint $table) {
            $table->id();
            $table->string("question_titel");
            $table->string("answer_one");
            $table->string("answer_two");
            $table->string("answer_three");
            $table->string("answer_four");
            $table->string("correct_answer");
            $table->unsignedBigInteger("exam_id")->nullable();
            $table->timestamps();

            $table->foreign("exam_id")
            ->references("id")
            ->on("exams")
            ->onDelete('cascade');
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
