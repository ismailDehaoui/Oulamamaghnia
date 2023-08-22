<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SchoolFormRequest;
use App\Models\School;
use Illuminate\Support\Facades\File;

class SchoolController extends Controller
{
    public function index(){
        // return 'School';
         return view('admin.school.index');
     }
     public function create(){
        return view('admin.school.create');
    }

    public function store(SchoolFormRequest $request){
        $validateDate =   $request->validated();
        $school = new School;
        $school->name = $validateDate['name'];
        $school->address = $validateDate['address'];
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/school/',$filename);
            $school->image = $filename;
        }
        $school->save();
        return redirect('admin/school')->with('message', 'School Added Successfully');
    }

    public function edit(School $school){
        return view('admin.school.edit',compact('school'));
    }

    public function update(SchoolFormRequest $request, $school){
        $validateDate =   $request->validated();
        $school = School::findOrFail($school);

        $school->name = $validateDate['name'];
        $school->address = $validateDate['address'];
        if($request->hasFile('image')){
            $path = 'uploads/school/'.$school->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/school/',$filename);
            $school->image = $filename;
        }

        $school->update();
        return redirect('admin/school')->with('message', 'School Updated Successfully');
    }
}
