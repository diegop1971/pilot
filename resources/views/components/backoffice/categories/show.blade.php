<x-backoffice.layouts.dashboard :title=$title>

  <hr class="featurette-divider">
  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h1 class="featurette-heading">{{ $category['name'] }}</h1>
      <p class="lead">Habilitado: {{ $category['enabled'] ? 'Si' : 'No' }}</p>
      <div class="mt-xl-2 mb-xl-2">
        <a href="{{ route('backoffice.categories.index') }}" class="link-primary mt-md-2 mb-md-2">{{ __('Volver') }}</a>
      </div>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="" class="img-fluid img-thumbnail " alt="...">
    </div>
  </div>

  <hr class="featurette-divider">

</x-backoffice.layouts.dashboard>