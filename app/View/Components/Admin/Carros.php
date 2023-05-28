<?php

namespace App\View\Components\Admin;

use App\Models\Car;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Carros extends Component
{

    public $carros;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->carros = Car::all();

        return view('components.admin.carros');
    }
}
