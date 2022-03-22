<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDraftedexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('draftedexams', function (Blueprint $table) {
            $table->id();
            $table->string('exam_id')->unique();
            $table->string('question',1500);
            $table->string('answer1',1500);
            $table->string('answer2',1500);
            $table->string('answer3',1500);
            $table->string('answer4',1500);
            $table->string('correct_answer');
            $table->date('exam_date');
            $table->time('exam_starttime');
            $table->time('exam_endtime');
            $table->time('duration');
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
        Schema::dropIfExists('draftedexams');
    }
}
