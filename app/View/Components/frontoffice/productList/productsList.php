<?php

namespace App\View\Components\frontoffice\productList;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;

class productsList extends Component
{
    /**
     * Create a new component instance.
     */
    public $products;

    public function __construct($products)
    {
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $products = $this->products;
        
        return view('components.frontoffice.productsList.products-list', compact('products'));
    }
}
