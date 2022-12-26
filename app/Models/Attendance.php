<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table="attendances";
    protected $fillable = [
        'id',
        'user_id',
        'course_id',
        'day',
        'month',
        'year',
    ];
}
