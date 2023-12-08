<?php

use App\Models\examens;
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
        Schema::create('questionresponses', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->text('reponsevrai');
            $table->text('reponse1');
            $table->text('reponse2');
            $table->text('reponse3');
            $table->text('reponse4')->nullable();
            $table->text('reponse5')->nullable();
            $table->integer('ponderation');
            $table->foreignIdFor(examens::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionresponses');
    }
};
