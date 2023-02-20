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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->string('description');
            $table->foreignId('patient_id')->references('id')->on('patient')->onDelete('cascade');
            $table->foreignId('doctor_id')->references('id')->on('doctor')->onDelete('cascade');
            $table->foreignId('consulting_room_id')->references('id')->on('consulting_room')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
