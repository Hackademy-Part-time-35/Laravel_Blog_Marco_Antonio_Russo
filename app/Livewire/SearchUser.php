<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\User;
class SearchUser extends Component
{
    public $search;

    
    #[On('user-created')]
    public function render()
    {
        return view('livewire.search-user', [
            "users" => User::search($this->search)
        ]);
    }

    public function edit($userId)
    {
        $this->dispatch('user-edit', $userId);
    }
    public function delete(User $user)
    {
    
        $user->delete();
        session()->flash('success', 'Utente eliminato.');

    }
}
