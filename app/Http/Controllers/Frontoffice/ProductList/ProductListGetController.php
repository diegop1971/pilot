<?php

namespace App\Http\Controllers\Frontoffice\ProductList;

use App\Http\Controllers\Controller;
use src\frontoffice\Products\Application\Find\GetVisibleEnabledProductsInActiveCategories;

class ProductListGetController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function __invoke(GetVisibleEnabledProductsInActiveCategories $productsGet)
    {
        $title = 'Welcome';

        $metaDescription = 'Welcome meta-description';
        
        $products = $productsGet->__invoke();

        $title = 'Productos';

        $data = 'datos del controlador';

        return view('components.frontoffice.productsList.products-main', compact(['title', 'metaDescription', 'products']));
    }
}
