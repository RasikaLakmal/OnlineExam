<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnsweringexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answeringexams', function (Blueprint $table) {
            $table->id();
            $table->string('exam_id')->nullable();
            $table->string('student_id')->nullable();
            $table->string('question')->nullable();
            $table->string('qid')->nullable();
            $table->string('selected_answer')->nullable();
            $table->boolean('completed_orn')->nullable();
            $table->time('completed_time')->nullable();
            $table->time('duration')->nullable();
            $table->time('exam_starttime')->nullable();
            $table->time('exam_endtime')->nullable();
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
        Schema::dropIfExists('answeringexams');
    }
}
