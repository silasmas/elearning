<?php

namespace App\Models;

use App\Models\formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class etudiant extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function formation(){
        return $this->belongsToMany(formation::class);
    }
}
