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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->longtext('abstract');
            $table->longtext('content');
            $table->date('date');
            $table->text('more');
            $table->unsignedBigInteger('news_integration_id');
            $table->boolean('highlighted')->default(false);
            $table->foreign('news_integration_id')->references('id')->on('news_integrations');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
