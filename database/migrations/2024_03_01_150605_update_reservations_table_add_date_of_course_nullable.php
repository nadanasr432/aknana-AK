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
               Schema::table('reservations', function (Blueprint $table) {
            $table->date('date_of_course')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Revert the changes if needed
        Schema::table('reservations', function (Blueprint $table) {
            $table->date('date_of_course')->nullable(false)->change();
        });
    }

};
