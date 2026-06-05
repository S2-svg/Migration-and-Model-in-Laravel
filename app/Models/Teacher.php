<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['first_name', 'last_name','email', 'phone_number', 'profile', 'password'];
    protected $hidden = ['password'];

    public function teacherClassSubject(){
        return $this->hasMany(TeacherClassSubject::class);
    }
}
