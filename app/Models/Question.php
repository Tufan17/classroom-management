<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table="questions";
    protected $fillable = [
        'id',
        'subject_id',
        'questionbank_id',
        'title',
        'correct',
        'A',
        'B',
        'C',
        'D',
    ];
}
