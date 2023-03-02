<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserIndex extends Component
{
    public $search = '';
    public $username;
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $userId;
    public $editMode =false;
    protected $rules = [
        'username' => 'required',
        'firstName' => 'required',
        'lastName' => 'required',
        'password' => 'required',
        'email' => 'required|email',
    ];


    public function storeUser()
    {
        $this->validate();

        User::create([
           'username' =>  $this->username,
           'first_name' =>  $this->firstName,
           'last_name' =>  $this->lastName,
           'email' =>  $this->email,
           'password' =>  Hash::make($this->password),
       ]);
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' => '#userModal', 'actionModal' => 'hide']);
        session()->flash('user-message', 'User successfully created');
    }

    public function showUserModal()
    {
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' => '#userModal', 'actionModal' => 'show']);
    }

    public function render()
    {
        $users = User::paginate(5);
        if (strlen($this->search) > 2) {
            $users = User::where('username', 'like', "%{$this->search}%")->paginate(5);
        }
        return view('livewire.users.user-index', [
            'users' => $users
        ])
                 ->layout('layouts.main');
    }


}
