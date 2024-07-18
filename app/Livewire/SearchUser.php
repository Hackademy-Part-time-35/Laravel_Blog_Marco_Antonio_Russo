<?php

namespace App\Livewire;

use Livewire\Component;

class SearchUser extends Component
{
    public $search;
    public function render()
    {
        return view('livewire.search-user', [
            "users" => \App\Models\User::search($this->search)
        ]);
    }

    
}
