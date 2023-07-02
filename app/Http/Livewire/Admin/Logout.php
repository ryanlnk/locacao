<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{

    public function logout(){
        Auth::logout();

        session()->invalidate();

        session()->regenerate();

        redirect('/');
    }

    public function render()
    {
        return view('livewire.admin.logout');
    }
}
