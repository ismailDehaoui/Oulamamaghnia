<?php

namespace App\Http\Livewire\Admin\School;

use App\Models\School;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $schools = School::orderBy('id','DESC')->paginate(5);
        return view('livewire.admin.school.index',['schools' =>$schools]);
    }
}
