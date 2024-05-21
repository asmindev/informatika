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
        Schema::create('tridharmas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('category', ['penelitian', 'pengabdian']);
            $table->integer('year');
            $table->string('file');
            $table->string('source')->nullable();
            $table->foreignId('lecturer_id')->references('id')->on('lecturers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tridharmas');
    }
};
