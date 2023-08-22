<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Categorie;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
   public $category_id;
    public function deleteCategory($cat_id){
        dd($cat_id);
        $this->category_id = $cat_id;
    }
    public function render()
    {
        $categories = Categorie::orderBy('id','DESC')->paginate(5);
        return view('livewire.admin.category.index',['categories' => $categories]);
    }
}
