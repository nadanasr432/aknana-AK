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
        Schema::table('ranges', function (Blueprint $table) {
            $table->string('en_title');
            $table->text('en_text');
            $table->string('ar_title');
            $table->text('ar_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ranges', function (Blueprint $table) {
            $table->dropColumn('en_title');
            $table->dropColumn('en_text');
            $table->dropColumn('ar_title');
            $table->dropColumn('ar_text');
        });
    }
};
