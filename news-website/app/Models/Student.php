<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function grade(){
        return $this->belongsTo(Grade::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }
}
