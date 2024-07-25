<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;

class UserComponent extends Component
{
    #[Validate]
    public $name;

    #[Validate]
    public $email;

    #[Validate]
    public $password;

    public $userId;

    public function render()
    {
        return view('livewire.user-component');
    }

    public function rules()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->userId,
        ];


        if(! $this->userId) {
            $rules['password'] = 'required';
        }

        return $rules;
    }

    public function submit(){
        $this->validate();

        if($this->userId) {
            // sono in modalità modifica

            $user = User::find($this->userId);

            $user->name = $this->name;
            $user->email = $this->email;

            if($this->password) {
                $user->password = $this->password;
            }

            $user->save();

            session()->flash('success', 'Utente modificato correttamente.');

        } else {

            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
            ]);
        }
        self::resetForm();
        $this->dispatch('user-created'); 
        session()->flash('success', 'Utente creato.');
    }

    public function resetForm(){
        $this->name = "";
        $this->email = "";
        $this->password = "";
        $this->userId = null;
    }

    #[On('user-edit')]
    public function edit(User $user)
    {
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }


}
