<?php

use App\Models\etudiant;
use App\Models\formation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('ponderation');
            $table->time('temps_debut');
            $table->time('temps_fin');
            $table->foreignIdFor(etudiant::class);
            $table->foreignIdFor(formation::class);
            $table->integer('resultat')->nullable();
            $table->text('description')->nullable();
            $table->string('conclusion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examens');
    }
};
