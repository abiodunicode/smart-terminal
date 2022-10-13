<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portcode extends Model
{
    use HasFactory;
    protected $table = 'portcode';

    protected $fillable = [
        'code', 'name'
    ];
}
