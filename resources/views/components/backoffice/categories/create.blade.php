<x-backoffice.layouts.dashboard :title=$title>

@section('content')
    <h1> Crear Categoria </h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <h6>Por favor corrige los siguientes errores</h6>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        </div>
    @endif

    <form method="POST" action=" {{ route('backoffice.categories.store') }}">
        {{ csrf_field() }}

        <input type="text" name="name" id="name" placeholder="Nombre de Categoria" value="{{ old('name') }}">
        <br>
        <label for="enabled">Habilitada:</label>
        <input type="hidden" name="enabled" value="0">
        <input type="checkbox" name="enabled" id="enabled" value="1">
        <br>
        <button type="submit">Crear categoria</button>

    </form>

    <p>
        <a href="{{ route('backoffice.categories.index') }}">Regresar al listado de categorias</a>
    </p>

</x-backoffice.layouts.dashboard>