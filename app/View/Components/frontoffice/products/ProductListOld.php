<?php

namespace App\View\Components\frontoffice\products;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Log;

class ProductListOld extends Component
{
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
        
        return view('components.frontoffice.productsList.product-list', compact('products'));
    }
}
