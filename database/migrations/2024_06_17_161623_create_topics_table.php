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
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curriculum_id');

            $table->string('icon');
            $table->string('title');
            $table->string('color');

            $table->timestamps();

            $table->foreign('curriculum_id')->references('id')->on('curriculums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topic');
    }
};
