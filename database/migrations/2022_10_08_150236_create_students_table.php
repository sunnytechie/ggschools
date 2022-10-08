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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('student_class')->nullable();
            $table->string('academic_session')->nullable();
            $table->string('term')->nullable();

            $table->string('tt_subject_score')->nullable();
            $table->string('average_score')->nullable();
            $table->string('position')->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('students');
    }
};
