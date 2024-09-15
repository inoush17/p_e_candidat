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
        Schema::create('folders', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->string('nationality');
            $table->string('sex')->nullable();
            $table->string('marital_status')->default('on hold');
            $table->string('birth_certificate')->nullable();
            $table->string('identity_card')->nullable();
            $table->string('latest_bulletin')->nullable();
            $table->string('cover_letter')->nullable();
            $table->string('file_annex')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folders');
    }
};
