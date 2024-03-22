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
        Schema::table('courses', function (Blueprint $table) {
            $table->json('professor_name')->nullable()->change();
            $table->json('time_duration')->nullable()->change();
            $table->json('location')->nullable()->change();
            $table->json('name')->change();
            $table->json('date_of_course')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
          
        });
    }
};
