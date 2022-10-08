<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('subject')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('student_class')->nullable();
            $table->string('academic_session')->nullable();
            $table->string('term')->nullable();
            
            $table->string('one_set_weekly_ex')->nullable();
            $table->string('take_home_ass')->nullable();
            $table->string('one_class_test')->nullable();
            $table->string('two_take_home_ass')->nullable();
            $table->string('two_set_weekly_ex')->nullable();
            $table->string('two_class_test')->nullable();
            $table->string('project')->nullable();
            $table->string('three_set_weekly_ex')->nullable();
            $table->string('exam_score')->nullable();
            $table->string('tt_score')->nullable();
            $table->string('position')->nullable();
            $table->string('class_avrg')->nullable();
            $table->string('grade')->nullable();
            $table->string('remark')->nullable();
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
};
