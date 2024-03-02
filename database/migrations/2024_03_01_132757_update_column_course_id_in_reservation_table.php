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
      Schema::table('reservations', function (Blueprint $table)  {

       // Add unique constraint to ensure only 100 reservations per course
        $table->unique(['course_id', 'gender'], 'unique_course_gender_counts');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservation', function (Blueprint $table) {
            //
        });
    }
};
