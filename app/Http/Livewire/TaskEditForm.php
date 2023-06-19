<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskEditForm extends Component
{
    public $title, $description, $status, $level;

    public Task $task;

    protected $rules = [
        'title' => 'required',
    ];

    public function mount()
    {
        $this->title = $this->task->title;
        $this->description = $this->task->description;
        $this->status = $this->task->status;
        $this->level = $this->task->level;
    }

    public function update()
    {
        $this->validate();
        $this->task->update([
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'level' => $this->level,
        ]);

        session()->flash('tasks', 'Task modificata!');

        return redirect()->route('tasks.index')->with('edit', 'Task modificata!');
    }

    public function render()
    {
        return view('livewire.task-edit-form');
    }
}
