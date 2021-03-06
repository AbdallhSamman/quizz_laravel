<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Exams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string("exam_name");
            $table->string("exam_desc");
            $table->integer("exam_num_q")->nullable();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->timestamps();

            $table->foreign("user_id")
                ->references("id")
                ->on("users")
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
        Schema::dropIfExists('exams');
    }
}
