<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishedexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishedexams', function (Blueprint $table) {
            $table->id();
            $table->string('exam_id');
            $table->string('question',1500);
            $table->string('qid');
            $table->string('answer1',1500);
            $table->string('answer2',1500);
            $table->string('answer3',1500);
            $table->string('answer4',1500);
            $table->string('correct_answer');
            $table->date('exam_date')->nullable();
            $table->time('exam_starttime')->nullable();
            $table->time('exam_endtime')->nullable();
            $table->time('duration')->nullable();
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
        Schema::dropIfExists('publishedexams');
    }
}
