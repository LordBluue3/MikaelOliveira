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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->integer('access');

            //title of page
            $table->string('title');


            //open graph meta tags
            $table->string('og_title');
            $table->string('og_description');
            $table->string('og_image');
            $table->string('og_url');
            $table->string('og_type');


            //twitter meta tags
            $table->string('description');
            $table->string('keywords');
            $table->string('twitter_card');
            $table->string('twitter_title');
            $table->string('twitter_description');
            $table->string('twitter_image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
