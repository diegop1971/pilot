<x-backoffice.layouts.dashboard :title=$title>

<main role="main">
    
  <div class="container marketing">
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <p class="lead">id del movimiento: {{ $stockMovement['id'] }}</p>
        <p class="lead">Nombre del producto:{{ $stockMovement['product']['name'] }}.</p>
        <p class="lead">Tipo de movimiento: {{ $stockMovement['stock_movement_type']['movement_type'] }}</p>
        <p class="lead">Cantidad: {{ number_format($stockMovement['quantity'], 0, ',', ' ') }}</p>
        <p class="lead">Habilitado: {{ $stockMovement['enabled'] ? 'Si' : 'No'; }}</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="" class="img-fluid img-thumbnail " alt="...">
      </div>
    </div>
    <div class="mt-xl-2 mb-xl-2">
      <a href="{{ route('backoffice.stock.index') }}" class="link-primary mt-md-2 mb-md-2">{{ __('Volver') }}</a>
    </div>

    <hr class="featurette-divider">

  </div><!-- /.container -->

</main>

</x-backoffice.layouts.dashboard>