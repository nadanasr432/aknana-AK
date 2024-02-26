<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique()->comment('Format: +966xxxxxxxxx');
            $table->string('email');
            $table->text('text');
            $table->timestamps();
        });

        // Add validation to ensure the phone starts with +966
        DB::statement('ALTER TABLE contact_us ADD CONSTRAINT check_phone CHECK (phone LIKE "+966%")');
    }

    /**
     * Reverse the migrations.
     */
     public function down()
    {
        Schema::dropIfExists('contact_us');
    }
};
