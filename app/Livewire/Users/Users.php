<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Users extends Component
{
    public $userData = [];
    public $roleData = [];
    /** user */
    public $name;
    public $email;
    public $password;
    public $role;
    /** end user */
    public function render()
    {
        $this->userData = User::has('roles')->get();
        $this->roleData = Role::all();
        return view('livewire.users.users');
    }

    public function onModalShow()
    {
        $this->js("modalShow()");
    }
    public function onModalClose()
    {
        $this->js("modalclose()");
    }


    public function createUser()
    {
        $validate = $this->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'string']
        ]);

        $user = User::create($validate);

        $user->assignRole($this->role);

        $this->js("alert('success')");
        $this->reset();
    }
}
