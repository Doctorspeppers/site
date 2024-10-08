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
        Schema::create('cves', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('product_affected')->nullable();
            $table->string('cvss_score')->nullable();
            $table->string('cvss_proportion')->nullable();
            $table->string('published')->nullable();
            $table->string('updated')->nullable();
            $table->string('created_by')->nullable();



            $table->unsignedBigInteger('news_id')->nullable();

            $table->foreign('news_id')->references('id')->on('news');

            $table->string('url')->nullable(); // for futures updates
            $table->date('published_at')->nullable(); // for futures updates


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cves');
    }
};
