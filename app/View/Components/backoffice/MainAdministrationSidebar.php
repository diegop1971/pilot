<?php

namespace App\View\Components\backoffice;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainAdministrationSidebar extends Component
{
    public $products;

    public function __construct($products)
    {
        $this->products = $products;
    }

    public function render(): View|Closure|string
    {

        $this->products = $this->products . ' + logica de la clase';

        return view('components.backoffice.main-administration-sidebar');

    }
}
