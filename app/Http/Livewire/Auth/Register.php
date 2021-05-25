<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $surname;
    public $email;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app-auth');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:4,max:50',
            'surname' => 'required|min:4,max:50',
            'email' => 'required|email',
            'password' => 'required|between:8,20|confirmed',

        ]);
    }

    public function Register()
    {
        $this->validate([
            'name' => 'required|min:4,max:50',
            'surname' => 'required|min:4,max:50',
            'email' => 'required|email',
            'password' => 'required|between:8,20|confirmed',

        ]);
        return $this->redirect("/");

    }
}
