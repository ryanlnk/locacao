<?php

namespace App\Http\Livewire\Admin\Carros;

use App\Models\Car;
use Livewire\Component;

class Carros extends Component
{
    public $carros;

    public function render()
    {
        $this->carros = Car::all();

        return view('livewire.admin.carros.carros')->layout('components.admin.layouts.principal');
    }
}
