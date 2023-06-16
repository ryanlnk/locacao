<?php

namespace App\Http\Livewire\Admin\Carros;

use App\Models\Car;
use Livewire\Component;

class Carros extends Component
{
    public $carros;
    public $pesquisa = '';
    protected $listeners = ['deletar'];

    public function filtrarDados()
    {
        if (empty($this->pesquisa)) {
            $this->carros = Car::all();
        } else {
            $this->carros = Car::where('modelo', 'like', "%$this->pesquisa%")
                ->orWhere('modelo', 'like', "%$this->pesquisa%")
                ->orWhere('marca', 'like', "%$this->pesquisa%")
                ->orWhere('cor', 'like', "%$this->pesquisa%")
                ->get();
        }
    }

    public function deletar($id) {
        Car::destroy($id);
    }

    public function render()
    {
        $this->filtrarDados();

        return view('livewire.admin.carros.carros')->layout('components.admin.layouts.principal');
    }
}
