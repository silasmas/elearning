<?php

namespace App\Models;

use App\Models\User;
use App\Models\formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class userFormateur extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $dates=['created_at','updated_at'];
    public function formations(){
        return $this->belongsTo(formation::class);
    }
    public function formateur(){
        return $this->belongsTo(User::class);
    }
}
