<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function students(){
        return $this->hasMany(Student::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }
}
