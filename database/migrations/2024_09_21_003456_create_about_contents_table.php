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
        Schema::create('about_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');

            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->string('image_4');
            $table->string('image_5');

            $table->json('quote');

            $table->string('title_1');
            $table->text('description_1');

            $table->string('subtitle');
            $table->string('text');

            $table->string('subtitle_1');
            $table->string('text_1');

            $table->string('subtitle_1');
            $table->string('text_1');

            $table->string('subtitle_1');
            $table->string('text_1');

            $table->json('timeline');

            $table->string('title');
            $table->text('description');

            $table->json('technology');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_contents');
    }
};
