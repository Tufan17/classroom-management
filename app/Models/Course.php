<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table="courses";
    protected $fillable = [
        'id',
        'name'
    ];

    public function subjects(){
        return $this->hasMany('App\Models\Subject','course_id','id');
    }
}
