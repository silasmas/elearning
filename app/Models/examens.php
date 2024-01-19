<?php

namespace App\Models;

use App\Models\questionresponse;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examens extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $dates = ['created_at', 'updated_at'];
    public function etudian()
    {
        return $this->belongsToMany(User::class, "examen_users")->withPivot('conclusion', 'user_id', 'examens_id', 'created_at', 'updated_at');
    }
    public function question()
    {
        return $this->hasMany(questionresponse::class);
    }
}
