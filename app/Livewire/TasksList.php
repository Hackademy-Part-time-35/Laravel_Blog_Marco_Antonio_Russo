<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use Livewire\Attributes\On;

class TasksList extends Component
{

    #[On("refreshList")]
    public function render()
    {
        return view('livewire.tasks-list', [
            "tasks" => Task::orderBy("id", "DESC")->get(),
        ]);
    }

    public function edit($id){
        $this->dispatch("editTask", $id);

    }

    public function delete($id){
        $task = Task::find($id);
        $task->delete();
        $this->dispatch("resetForm");

        session()->flash('success', 'Task eliminato');

    }

    public function checkCompleted($id){
        $task = Task::find($id);
        $task->completed = true;
        $task->save();

        session()->flash('success', 'Task completata');

    }
}
