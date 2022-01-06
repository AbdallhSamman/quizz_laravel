<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Results extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('exam_name')->nullable();
            $table->string('mark')->nullable();
            $table->string('correct_answer')->nullable();
            $table->string('wrong_answer')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger("exam_id")->nullable();
            $table->unsignedBigInteger("user_id")->nullable();


            $table->foreign("user_id")
            ->references("id")
            ->on("users")
            ->onDelete('cascade');

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
        //
    }
}
