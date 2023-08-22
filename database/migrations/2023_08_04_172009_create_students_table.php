<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('school_id');
            $table->string("firstName")->nullable();
            $table->string("lastName")->nullable();
            $table->enum("sexe",['Homme','Femme']);
            $table->string('image');
            $table->string('birth_certificate');
            $table->date('dateOfBirthday');
            $table->enum('statut',[
                    'يتيم الأب',
                    'يتيم الأم',
                    'يتيم الأبوين',
                    'الولدين مطلقين',
                    'عادي'
                         ])->default('عادي');
            $table->boolean('malad')->nullable();
            $table->string('type_malade')->nullable();
            $table->string('father_profession')->nullable();
            $table->string('mother_profession')->nullable();
            $table->enum('statut_familly',['ميسورة','متوسطة','ضعيفة'])->default('ميسورة');
            $table->string('father_phone')->nullable();           
            $table->string('mother_phone')->nullable();
            $table->integer('N_parties_the_Koran');
            $table->integer('current_party');
            $table->integer('prix_annuel');
            $table->integer('prix_abonne');
            $table->integer('prix_total');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
