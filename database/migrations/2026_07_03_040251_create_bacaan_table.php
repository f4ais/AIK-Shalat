<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bacaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gerakan_id')->constrained('gerakan')->cascadeOnDelete();
            $table->longText('arab');
            $table->longText('latin');
            $table->longText('terjemahan');
            $table->string('audio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bacaan');
    }
};
