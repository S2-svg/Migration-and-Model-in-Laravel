<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Prompts\Table;

class ClassModel extends Model
{
    protected $table = 'classes';
    protected $fillable = ['name', 'description'];

    public function studentClasses(){
        return $this->hasMany(StudentClass::class);

    }

    public function teacherClassSubject(){
        return $this->hasMany(TeacherClassSubject::class);
    }
}
