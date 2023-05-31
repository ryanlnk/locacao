<?php

namespace App\Http\Livewire\Admin\Carros;

use App\Models\Car;
use Livewire\Component;

class CarrosForm extends Component
{
    public $placa;
    public $modelo;
    public $marca;
    public $ano;
    public $descricao;
    public $cor;
    public $chassi;
    public $diaria;

    public function salvar()
    {
        $carros = new Car;
        $carros->placa = $this->placa;
        $carros->modelo = $this->modelo;
        $carros->marca = $this->marca;
        $carros->ano = $this->ano;
        $carros->descricao = $this->descricao;
        $carros->cor = $this->cor;
        $carros->chassi = $this->chassi;
        $carros->diaria = $this->diaria;

        $carros->save();

        session()->flash('toast', 'Carro cadastrado com sucesso!');

        return redirect('/carros');
    }

    public function render()
    {
        return view('livewire.admin.carros.carros-form')->layout('components.admin.layouts.principal');
    }
}
