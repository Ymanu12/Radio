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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('video_file'); // chemin vers la vidéo
            $table->string('poster_image')->nullable(); // image d'aperçu
            $table->string('duration')->nullable(); // durée de la vidéo
            $table->date('upload_date')->nullable(); // date d'ajout
            $table->text('description')->nullable(); // facultatif
            $table->boolean('etat')->default(1); // 1 = actif, 0 = inactif
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
