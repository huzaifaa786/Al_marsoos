<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'father_name',
        'gender',
        'number',
        'address',
        'email',
        'date_of_birth',
        'admission_date',
    ];
}
