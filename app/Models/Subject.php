<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table="subjects";
    protected $fillable = [
        'id',
        'course_id',
        'name'
    ];

    public function questions(){
        return $this->hasMany('App\Models\Question','subject_id','id');
    }
}
