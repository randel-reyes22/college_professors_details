<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [

        'professor_id',
        'lastname',
        'firstname',
        'middlename',
        'gender',
        'homeAddress',
        'contactNo',
        'department',
    ];

}
