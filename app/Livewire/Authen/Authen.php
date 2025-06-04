<?php

namespace App\Livewire\Authen;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Authen extends Component
{
    public $username;
    public $password;
    public function render()
    {
        return view('livewire.authen.authen')->title('auth')->layout('components.layouts.auth');;
    }

    public function login()
    {
        $this->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);

        $login_type = filter_var($this->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        $user = array_merge(
            [
                $login_type => str($this->username)->squish(),
                'password' => str($this->password)->squish()
            ]
        );
        if (Auth::attempt($user)) {
            $this->redirectRoute('home');
        } else {
            // return $this->js('alerError()');
            return $this->js("alert('Failed')");
        }
    }
}
