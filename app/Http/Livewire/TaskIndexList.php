<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskIndexList extends Component
{

    public function destroy(Task $task)
    {
        $task->delete(); 
        session()->flash('tasks', 'Task eliminata!');

        return redirect()->route('tasks.index')->with('delete', 'Task eliminata!');

    }

    public function status(Task $task)
    {
        if($task->status == false) {
            $task->status = true;
            $task->save();
            session()->flash('tasks', 'Task completata!');
            return redirect()->route('tasks.index')->with('success', 'Task completata!');
        }

        else {
            $task->status = false;
            $task->save();
            session()->flash('tasks', 'Task da fare!');
            return redirect()->route('tasks.index')->with('delete', 'Task da fare!');
        }

    }

    public function render()
    {
        $tasks = Task::orderBy('status', 'asc')->orderBy('level', 'desc')->orderBy('created_at', 'desc')->get();

        return view('livewire.task-index-list', compact('tasks'));
    }
}
