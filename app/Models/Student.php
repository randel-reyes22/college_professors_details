<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [

        'studentNo',
        'lastname',
        'firstname',
        'middlename',
        'gender',
        'homeAddress',
        'contactNo',
        'course',
        'department',
        'year'
    ];

}
