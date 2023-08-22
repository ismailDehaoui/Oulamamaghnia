<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentFormRequest;
use App\Models\Categorie;
use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index(Request $request){
        $schools = School::all();
        $categories = Categorie::all();
        $students = Student::all();
        
        return view('admin.students.index',compact('students','schools','categories'));
    
    }
    public function create(){
        $students = Student::all();
        $categories = Categorie::all();
        $schools = School::all();
        return  view('admin.students.create',compact('categories','schools'));
    }

    public function store(StudentFormRequest $request){
        $filenameI = '';
        $filenameC = '';
        $std = new Student;
        $stdC = new Student;
        $validateData = $request->validated();
        $category =  Categorie::findOrFail($validateData['category_id']);
        $school = School::findOrFail($validateData['school_id']);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filenameI = time().'.'.$ext;
            $file->move('uploads/student/',$filenameI);
        }
        if($request->hasFile('birth_certificate')){
            $file = $request->file('birth_certificate');
            $ext = $file->getClientOriginalExtension();
            $filenameC = time().'.'.$ext;
            $file->move('uploads/studentCertificate/',$filenameC);
        }
        $student =   $school->students()->create([
            'school_id'            => $validateData['school_id'],
            'category_id'          => $validateData['category_id'],
            'firstName'            => $validateData['firstName'],
            'lastName'             => $validateData['lastName'],
            'dateOfBirthday'       => $validateData['dateOfBirthday'],
            'sexe'                 => $validateData['sexe'],
            'familial_mtatus'      => $validateData['familial_mtatus'],
            'marital_mtatus'       => $validateData['marital_mtatus'],
            'father_profession'    => $validateData['father_profession'],
            'father_phone'         => $validateData['father_phone'],
            'mother_profession'    => $validateData['mother_profession'],
            'mother_phone'         => $validateData['mother_phone'],
            'malad'                => $validateData['malad'],
            'type_malade'          => $validateData['type_malade'],
            'image'                => $filenameI,
            'birth_certificate'    => $filenameC,
            'N_parties_the_Koran'  => $validateData['N_parties_the_Koran'],
            'current_party'        => $validateData['current_party'],
            'prix_abonne'          => $validateData['prix_abonne'],
            'prix_annuel'          => $validateData['prix_annuel'],
            'prix_total'           => $validateData['prix_abonne'] + $validateData['prix_annuel']
            //'sububscription_price' => 200 + $validateData['price_sub']
        ]);
        $student->save();
        return redirect('admin/student')->with('message', 'Student Added Successfully');
    }

    public function edit(Student $student){
        return view('admin.students.edit',compact('student'));
    }

    public function profil(Student $student){

        return view('admin.students.profil',['student'=>$student]);
    }

    public function update(StudentFormRequest $request, $student){
        return $student->id;
        // $validateDate =   $request->validated();
        // $student = Student::findOrFail($student);
        // $student->N_parties_the_Koran = $validateDate['N_parties_the_Koran'];
        // $student->current_party = $validateDate['current_party'];
        // $student->update();
       // return redirect('admin/student')->with('message', 'student Updated Successfully');
    }
   public function profilUpdet(StudentFormRequest $request, $student){
    
    $validateDate =   $request->validated();
    $student = Student::findOrFail($student);
    $student->N_parties_the_Koran = $validateDate['N_parties_the_Koran'];
    $student->adcurrent_partydress = $validateDate['current_party'];
    $student->update();
    return redirect('admin/student/'.$student->id.'/profil')->with('message', 'N parties the Koran & current party Updated Successfully');
   }

   public function viewInvoice(int $student){
    //$category = Categorie::findOrFail($student);
    //$school = School::findOrFail($student);
    $student = Student::findOrFail($student);
    return view('admin.invoice.generate-invoice',compact('student'));
   }
   public function generateInvoice(){

   }
}
