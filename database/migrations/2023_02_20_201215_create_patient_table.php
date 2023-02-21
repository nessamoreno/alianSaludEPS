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
        Schema::create('patient', function (Blueprint $table) {
            $table->id();
            $table->integer('identification')->unique();
            $table->string('first_name');    
            $table->string('second_name')->nullable();
            $table->string('first_last_name');
            $table->string('second_last_name')->nullable();
            $table->date('date_of_birth');
            $table->set('gender', ['masculine', 'feminine','other']);
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient');
    }
};
