<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index(){
       // return 'categorie';
        return view('admin.category.index');
    }
    public function create(){
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request){
        $validateDate =   $request->validated();
        $category = new Categorie;
        $category->name = $validateDate['name'];
        $category->save();
        return redirect('admin/categorie')->with('message', 'Category Added Successfully');
    
    }
    public function edit(Categorie $cat){
        return view('admin.category.edit',compact('cat'));
    }

    public function update(CategoryFormRequest $request, $cat){
        $validateDate =   $request->validated();
        $cat = Categorie::findOrFail($cat);

        $cat->name = $validateDate['name'];
                $cat->update();
        return redirect('admin/categorie')->with('message', 'Category Updated Successfully');
    }
}
