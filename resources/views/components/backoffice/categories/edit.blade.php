<x-backoffice.layouts.dashboard :title=$title>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Por favor corrige los errores debajo:</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('backoffice.categories.update') }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <input type="hidden" id="id" name="id" value="{{ $category['id'] }}">
        <input type="text" name="name" id="name" placeholder="Categoria" value="{{ old('name', $category['name']) }}">
        <br>
        <label for="enabled">Habilitada:</label>
        <input type="hidden" name="enabled" value="0">
        <input type="checkbox" name="enabled" id="enabled" value="1" {{ $category['enabled'] ? 'checked' : '' }}>
        <br>
        <button type="submit">Actualizar categoria</button>
        
    </form>
    <p>
        <a href="{{ route('backoffice.categories.index')}}">Regresar al listado de categorias</a>
    </p>

</x-backoffice.layouts.dashboard>