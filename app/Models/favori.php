<?php

namespace App\Models;

use App\Models\etudiant;
use App\Models\formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class favori extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function etudian(){
        return $this->belongsTo(User::class);
    }
    public function formation(){
        return $this->belongsTo(formation::class);
    }
}
