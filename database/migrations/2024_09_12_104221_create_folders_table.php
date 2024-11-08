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
            $table->string('email');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->string('nationality');
            $table->string('neighborhood');
            $table->string('sex');
            $table->string('marital_status')->default('on hold');
            $table->string('birth_certificate');
            $table->string('identity_card');
            $table->string('latest_bulletin');
            $table->string('cover_letter')->nullable();
            $table->string('file_annex')->nullable();
            $table->string('statuts')->default('En cours');
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
