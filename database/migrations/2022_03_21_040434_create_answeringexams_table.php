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
            $table->string('exam_id')->unique();
            $table->string('student_id')->unique();
            $table->string('question');
            $table->string('selected_answer');
            $table->boolean('completed_orn');
            $table->time('completed_time');
            $table->time('duration');
            $table->time('exam_starttime');
            $table->time('exam_endtime');
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
