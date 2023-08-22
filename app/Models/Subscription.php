<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscriptions';

    protected $fillable = [
        'student_id',
         'updated_at',
         'prix_abonne',
         'prix_annule',
         'prix_total'   
    ];

}

/**
 * $table->string('name');
 * 
 * $table->string('name');
 * $table->string('title');         
 * $table->mediumText('address');
 * $table->string('image')->nullable();
            
 * 
*  $table->unsignedBigInteger('category_id');
*   $table->unsignedBigInteger('school_id');
*   $table->string("firstName")->nullable();
*   $table->string("lastName")->nullable();
*   $table->enum("sexe",['Homme','Femme']);
*   $table->string('image');
*   $table->string('birth_certificate');
*   $table->date('dateOfBirthday');
*   $table->enum('statut',[
*   *   'يتيم الأب',
*   *   'يتيم الأم',
*   *   'يتيم الأبوين',
*   *   'الولدين مطلقين',
*   *   'عادي'
*   *  ])->default('عادي');
*   $table->boolean('malad')->nullable();
*   $table->string('type_malade')->nullable();
*   $table->string('father_profession')->nullable();
*   $table->string('mother_profession')->nullable();
*   $table->enum('statut_familly',['ميسورة','متوسطة','ضعيفة'])->default('ميسورة');
*   $table->string('father_phone')->nullable();           
*   $table->string('mother_phone')->nullable();
*   $table->integer('N_parties_the_Koran');
*   $table->integer('current_party');
*   $table->integer('prix_annule');
*   $table->integer('prix_abonne');
*   $table->integer('prix_total');
*   $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
*   $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade'); 
*/