<?php

namespace App\Models;

use App\Models\formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class chapitre extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function formation(){
        return $this->belongsTo(formation::class);
    }
}
