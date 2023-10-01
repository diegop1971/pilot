<?php

namespace App\View\Components\frontoffice\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCardList extends Component
{
    public $homeProducts;

    public function __construct($homeProducts)
    {
        $this->homeProducts = $homeProducts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $homeProducts = $this->homeProducts;
        return view('components.frontoffice.home.product-card-list', compact('homeProducts'));
    }
}
