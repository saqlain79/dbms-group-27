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
        Schema::create('courseoutcomes', function (Blueprint $table) {
            $table->id();
            $table->string('co_id');
            $table->string('co_num');
            $table->string('course_id');
            $table->string('plo_id');
            $table->string('co_description_');


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
        Schema::dropIfExists('courseoutcomes');
    }
};
