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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom')->nullable();
            $table->string('sexe')->nullable();
            $table->string('lieu')->nullable();
            $table->date('datenaissance')->nullable();
            $table->string('telephone')->nullable();
            $table->string('profession')->nullable();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->text('adresse')->nullable();
            $table->string('profil')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
