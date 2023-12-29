<?php

namespace App\Models;

use App\Models\User;
use App\Models\examens;
use App\Models\formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class examenUser extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $dates=['created_at','updated_at'];
    public function examens(){
        return $this->belongsTo(examens::class);
    }
    public function formateur(){
        return $this->belongsTo(User::class);
    }
}
