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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('information_types')->onDelete('cascade');
            $table->text('summary');
            $table->string('responsible_official');
            $table->string('information_responsible');
            $table->year('creation_time');
            $table->string('available_format');
            $table->string('storage_duration');
            $table->string('media_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
