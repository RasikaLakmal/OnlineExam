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
            $table->string('estudent_id')->unique();
            $table->string('questions');
            $table->string('selected_answer');
            $table->time('completed_time');
            $table->time('sduration');
            $table->time('started_time');
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
