<?php

namespace App\Models;

use App\Models\examens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questionresponse extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function examen()
    {
        return $this->belongsTo(examens::class);
    }
}
