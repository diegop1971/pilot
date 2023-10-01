<x-frontoffice.layouts.app>

    <header>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Mi carrito</h1>
            <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
        </div>
    </header>
    <main role="main">    
        <div class="container">
            <div class="row">
                <div class="col-1">
                </div>
                <cart-component></cart-component>
            </div>
            <div class="row">
                <div class="col-1">
                </div>
                @if(is_null($sessionCartItems))
                    <div class="col-10 text-center border-bottom" >   
                        <h3>Tu carrito está vacío</h3>
                    </div>
                @else
                    <div class="col-9 text-center border-bottom" >   
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-8 text-center" >
                    <div class="mt-xl-2 mb-xl-2">
                        <div>
                            @if(!is_null($sessionCartItems))
                                <form method="POST" action=" {{ route('purchase.complete-purchase') }}">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-secondary">Finalizar compra</button>
                                </form>
                            @endif
                        </div>
                    </div>  
                </div>
                <div class="col-2">
                    <a href="{{ route('home') }}"><button type="button" class="btn btn-sm btn-outline-secondary mr-sm-1">Seguir comprando</button></a>
                </div>
            </div>
        </div>
    </main>    
</x-frontoffice.layouts.app>