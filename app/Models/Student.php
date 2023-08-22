<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'category_id',
        'school_id',
        'firstName',
        'lastName',
        'sexe',
        'image',
        'birth_certificate',
        'dateOfBirthday',
        'statut',
        'malad',
        'type_malade',
        'father_profession',
        'mother_profession',
        'statut_familly',
        'father_phone',
        'mother_phone',
        'N_parties_the_Koran',
        'current_party',
        'prix_abonne',
        'prix_annuel',
        'prix_total'
    ];

    public function category(){
        return $this->belongsTo(Categorie::class,'category_id','id');
    }
    public function school(){
        return $this->belongsTo(School::class,'school_id','id');
    }
}
