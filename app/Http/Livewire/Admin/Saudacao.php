<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Saudacao extends Component
{

    public $nome;

    public function render()
    {
        $usuario = Auth::user();

        $this->nome = $usuario->name;

        return view('livewire.admin.saudacao');
    }
}
