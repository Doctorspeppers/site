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
        Schema::create('cvss', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('description');
            $table->string('url');

            $table->unsignedBigInteger('cves_id');

            $table->foreign('cves_id')->references('id')->on('cves');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cvss');
    }
};
