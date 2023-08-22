<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalStudentPrimer = Student::where('category_id','1')->count();
        $totalStudentPreparatory = Student::where('category_id','2')->count();
        $totalStudentChilderBoy = Student::where('sexe','homme')->where('category_id','3')->count();
        $totalStudentChilderGirl = Student::where('sexe','femme')->where('category_id','3')->count();
        $totalStudentYoung = Student::where('category_id','4')->count();
        $totalStudentYoungBoy = Student::where('sexe','homme')->where('category_id','4')->count();
        $totalStudentYoungGirl = Student::where('sexe','femme')->where('category_id','4')->count();
        $totalStudentAdultMan = Student::where('sexe','homme')->where('category_id','5')->count();
        $totalStudentAdultWoman = Student::where('sexe','femem')->where('category_id','5')->count();
        return view('admin.dashboard',compact(
                                        'totalStudentPrimer',
                                        'totalStudentPreparatory',
                                        'totalStudentChilderBoy',
                                        'totalStudentChilderGirl',
                                        'totalStudentYoung',
                                        'totalStudentYoungBoy',
                                        'totalStudentYoungGirl',
                                        'totalStudentAdultMan',
                                        'totalStudentAdultWoman'
                                    ));
    }
}
