<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normal extends Model
{
    use HasFactory;

    protected $fillable = [
        'normal_id',
    ];

    protected $table = 'normal';
}
