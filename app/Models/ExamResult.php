<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    use HasFactory;
    protected $table="exam_results";
    protected $fillable = [
        'id',
        'user_id',
        'exam_id',
        'questions',
        'correct',
        'wrong',
        'success',
    ];
}