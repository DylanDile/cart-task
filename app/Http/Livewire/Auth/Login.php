<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app-auth');
    }

    public function updated($field)
    {
        $this->validateOnly($field,[
            'email'=> 'required|email',
            'password' => 'required|min:6,max:15'
        ]);
    }

    public function login()
    {
        $this->validate([
            'email'=> 'required|email',
            'password' => 'required|min:6,max:15'
        ]);
        return $this->redirect("/");

    }


}
