<x-frontoffice.layouts.app>

    @guest
    @endguest
    
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Productos</h1>   
                </div>
                <x-frontoffice.productList.products-list :products="$products"/>   
            </main>
        </div>
    </div>

</x-frontoffice.layouts.app>