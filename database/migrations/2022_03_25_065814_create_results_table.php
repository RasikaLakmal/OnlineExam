<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
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
            $table->string('exam_id')->nullable();
            $table->string('student_id')->nullable();
            $table->string('question')->nullable();
            $table->string('qid')->nullable();
            $table->string('selected_answer')->nullable();
            $table->string('correct_answer')->nullable();
            $table->string('c_or_w')->nullable();
            $table->integer('marks')->nullable();
            $table->string('pass')->nullable();
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
        Schema::dropIfExists('results');
    }
}
