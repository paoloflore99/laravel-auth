<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provaModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'ciao',
        'mondo'
    ];
}
