<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calculater extends Model
{
    protected $fillable = [
        'a',
        'b',
        'operation',
        'result'
    ];
}
