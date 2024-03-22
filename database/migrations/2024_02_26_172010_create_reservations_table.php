<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('entity_name');
            $table->string('email');
            $table->string('gender');
            $table->string('job_title');
            $table->unsignedBigInteger('course_id');
            $table->date('date_of_course');
            $table->timestamps();

            $table->foreign('course_id')
            ->references('id')
            ->on('courses')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
