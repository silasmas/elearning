<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\examens;
use App\Models\formation;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function formation()
    {
        return $this->belongsToMany(formation::class, 'formation_users')->withPivot('evolution','user_id','formation_id','created_at', 'updated_at');
    }
    public function formations()
    {
        return $this->belongsToMany(formation::class, 'user_formaturs')->withPivot('user_id','formation_id','created_at', 'updated_at');
    }
    
    public function favorie()
    {
        return $this->hasMany(favori::class);
    }
    public function examens(){
        return $this->belongsToMany(examens::class,'examen_users')->withPivot('conclusion','user_id','examens_id','created_at', 'updated_at');
    }
}
