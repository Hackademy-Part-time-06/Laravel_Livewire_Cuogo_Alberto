<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskCreateForm extends Component
{
    public $title, $description;
    
    public function render()
    {
        return view('livewire.task-create-form');
    }
}
