<?php

use App\Models\etudiant;
use App\Models\formation;
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
        Schema::create('etudiant_formations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(etudiant::class);
            $table->foreignIdFor(formation::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant_formations');
    }
};
