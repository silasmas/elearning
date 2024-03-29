<?php

namespace App\Models;

use App\Models\User;
use App\Models\examens;
use App\Models\chapitre;
use App\Models\etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class formation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsToMany(User::class, 'formation_users')->withPivot('evolution','user_id','formation_id','created_at', 'updated_at');
    }
    public function formateur()
    {
        return $this->belongsToMany(User::class, 'user_formateurs')->withPivot('user_id','formation_id','created_at', 'updated_at');
    }
    public function etudiant()
    {
        return $this->belongsToMany(etudiant::class, 'etudiant_formation');
    }
    public function userfav()
    {
        return $this->hasMany(User::class, 'favori');
    }
    public function chapitre()
    {
        return $this->hasMany(chapitre::class);
    }
    public function examen()
    {
        return $this->hasMany(examens::class);
    }
}
