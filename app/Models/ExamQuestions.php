<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestions extends Model
{
    use HasFactory;
    protected $table="exam_questions";
    protected $fillable = [
        'id',
        'exam_id',
        'question_id',
        
    ];
}
