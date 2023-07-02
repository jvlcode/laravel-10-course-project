<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    //mass assigment
    // protected $fillable = ['name']

    // not for mass assignment
    protected $guarded = [];
}
