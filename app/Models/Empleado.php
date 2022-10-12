<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'full_name',
        'job_position',
        'age',
        'birthday',
    ];
}
