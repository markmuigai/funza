<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('substrand_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['pending', 'in_progress', 'overdue', 'complete']);
            $table->date('started_on')->nullable();
            $table->date('ended_at')->nullable();
            $table->boolean('complete')->nullable();
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
        Schema::dropIfExists('lesson_plans');
    }
}
