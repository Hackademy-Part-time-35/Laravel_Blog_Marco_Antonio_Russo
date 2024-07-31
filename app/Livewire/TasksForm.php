<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;

class TasksForm extends Component
{
    #[Validate]
    public $name;

    #[Validate]
    public $priority = "low";

    #[Validate]
    public bool $completed = false;

    public $taskID;
    
    public function rules(){
        return  [
            "name" => "max:100|required",
            // "priority" => "required"
        ];
    }
    public function render()
    {
        return view('livewire.tasks-form');
    }

    public function submit(){
        $this->validate();

        if($this->taskID){
            $task = Task::find($this->taskID);

            $task->name = $this->name;
            $task->priority = $this->priority;
            $task->completed = $this->completed;

            $task->save();

            session()->flash('success', 'Task modificato');


        }else{

            Task::create([
                'name' => $this->name,
                'priority' => $this->priority,
                'completed' => $this->completed,
            ]);
            
            session()->flash('success', 'Task creato');
        }
        
        self::resetForm();
        $this->dispatch("refreshList");

    }

    #[On("editTask")]
    public function edit($id){
        $task = Task::find($id);
        $this->taskID = $task->id;
        $this->name = $task->name;
        $this->priority = $task->priority;
        $this->completed = $task->completed;

    }


    #[On("resetForm")]
    public function resetForm(){
        $this->name = "";
        $this->priority = "low";
        $this->completed = false;
        $this->taskID = null;
    }
}
