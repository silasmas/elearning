<?php

namespace App\Models;

use App\Models\etudiant;
use App\Models\formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class etudiantFormation extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $dates=['created_at','updated_at'];
    public function formation(){
        return $this->belongsTo(formation::class,'etudiant_formations');
    }
    public function etudiant(){
        return $this->belongsTo(etudiant::class,'etudiant_formations');
    }
}
