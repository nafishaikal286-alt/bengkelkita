<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
    'nama_panggilan',
    'negara',
    'tanggal_lahir',
    'kode_negara',
    'no_hp',
    'email',
    'password',
    'role'
];


    protected $hidden = [
        'password',
    ];
}
