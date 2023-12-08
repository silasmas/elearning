<?php

namespace App\Models;

use App\Models\User;
use App\Models\chapitre;
use App\Models\etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class formation extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user(){
        return $this->belongsToMany(User::class,'formation_users');
    }
    public function etudiant(){
        return $this->belongsToMany(etudiant::class);
    }
    public function chapitre(){
        return $this->hasMany(chapitre::class);
    }
}
