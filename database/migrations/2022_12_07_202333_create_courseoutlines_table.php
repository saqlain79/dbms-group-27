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
        Schema::create('courseoutlines', function (Blueprint $table) {
            $table->id();
            $table->string('outline_id');
            $table->string('course_id');
            $table->string('course_name');
            $table->string('faculty_id');
            $table->string('course_description');
            $table->string('course_objective');
            $table->string('academic_dishonesty');
            $table->string('course_content');
            $table->string('clo');
            $table->string('credit');


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
        Schema::dropIfExists('courseoutlines');
    }
};
