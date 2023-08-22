<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'schools';

    protected $fillable = [
        'name',
        'address',
        'image'
    ];

    public function students(){
        return $this->hasMany(Student::class, 'school_id','id');
    }
}
