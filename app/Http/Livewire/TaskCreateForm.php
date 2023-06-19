<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskCreateForm extends Component
{
    public $title, $description, $status, $level;
    
    protected $rules = [
        'title' => 'required',
    ];

    public function store()
    {
        $this->validate();
        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'level' => $this->level,
        ]);

        session()->flash('tasks', 'Task aggiornata!');
        $this->reset(['title', 'description', 'status', 'level']);

        return redirect()->route('tasks.index')->with('success', 'Task aggiunta!');
    }

    
    public function updated($task)
    {
        $this->validateOnly($task); 
    }

    public function render()
    {
        return view('livewire.task-create-form');
    }
}
