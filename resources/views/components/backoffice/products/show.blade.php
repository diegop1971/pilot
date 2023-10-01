<x-backoffice.layouts.dashboard :title=$title>

    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">{{ $product['name'] }}.</h2>
        <p>{{ $product['category']['name'] }}</p>
        <p class="lead">{{ $product['description'] }}</p>
        <h1><span class="text-danger">$ {{ number_format($product['price'], 0, ',', ' ') }}.</span></h1>
        <p class="lead">Habilitado: {{ $product['enabled'] ? 'Si' : 'No'; }}</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="" class="img-fluid img-thumbnail " alt="...">
      </div>
    </div>
    <div class="mt-xl-2 mb-xl-2">
      <a href="{{ route('backoffice.products.index') }}" class="link-primary mt-md-2 mb-md-2">{{ __('Volver') }}</a>
    </div>

    <hr class="featurette-divider">

</x-backoffice.layouts.dashboard>