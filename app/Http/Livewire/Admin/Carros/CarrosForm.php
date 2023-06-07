<?php

namespace App\Http\Livewire\Admin\Carros;

use App\Models\Car;
use Livewire\Component;

class CarrosForm extends Component
{
    public Car $carro;

    protected $rules = [
        'carro.placa' => 'required|string|size:8|bail',
        'carro.modelo' => 'required|string|max:50|min:2|bail',
        'carro.marca' => 'required|string|max:50|min:2||bail',
        'carro.ano' => 'required|digits:4|bail',
        'carro.descricao' => 'string|nullable|bail',
        'carro.cor' => 'required|string|max:20|min:2||bail',
        'carro.chassi' => 'required|string|max:17|min:2||bail',
        'carro.diaria' => 'required|decimal:0,2|bail',
    ];

    protected $validationAttributes = [
        'diaria' => 'diária',
        'descricao' => 'descrição'
    ];

    public function updated($nomePropriedade){
        $this->validateOnly($nomePropriedade);
    }

    public function mount(){
        $this->carro = new Car();
    }

    public function salvar()
    {
        $this->validate();
        $this->carro->save();
        session()->flash('toast', 'Carro cadastrado com sucesso!');
        return redirect('/carros');
    }

    public function render()
    {
        return view('livewire.admin.carros.carros-form')->layout('components.admin.layouts.principal');
    }
}
