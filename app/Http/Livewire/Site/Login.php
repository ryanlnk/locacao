<?php

namespace App\Http\Livewire\Site;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|string|email|bail',
        'password' => 'required|string'
    ];

    public function login(){
        $credenciais = $this->validate();

        if(Auth::attempt($credenciais)){
            session()->regenerate();

            redirect()->intended(RouteServiceProvider::HOME);
        }

        $this->addError('email', trans('auth.failed'));
    }

    public function render()
    {
        return view('livewire.site.login')->layout('components.site.layouts.centralizado');
    }
}
