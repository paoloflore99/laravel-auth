<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Project extends Model
// {
//     use HasFactory;

//     protected $casts = [

//         'date' => 'detetime'
//     ];

//     protected $fillable = [

//         'title',
//         'img',
//         'description'
//         'date',
//         'programming_languages',

//     ];
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';

    protected $casts = [
        'dete' => 'datetime'
    ];

    protected $fillable = [
        'title',
        'img',
        'description',
        'dete',
        'programming_languages',
    ];
}