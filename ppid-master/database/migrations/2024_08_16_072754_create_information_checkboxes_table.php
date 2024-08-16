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
        Schema::create('information_checkboxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('information_id')->constrained()->onDelete('cascade');
            $table->string('label');
            $table->boolean('checked')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information_checkboxes');
    }
};
