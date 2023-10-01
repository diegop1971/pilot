<x-backoffice.layouts.dashboard :title=$title>

    <p><a href="{{ route('backoffice.categories.create') }}">Crear categoria</a></p>
    
    @if(count($categories))
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Categoria</th>
                <th scope="col">Habilitado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category['id'] }}</td>
                    <td>{{ $category['name'] }}</td>
                    <td>{{ $category['enabled'] ? 'si' : 'no' }}</td>
                    <td>
                        <form action="{{ route('backoffice.categories.show', $category['id']) }}" method="GET">
                            {{ csrf_field() }}
                            <button type="submit">Ver</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('backoffice.categories.edit', $category['id']) }}" method="GET">
                            {{ csrf_field() }}
                            <button type="submit">Modificar</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('backoffice.categories.destroy', $category['id']) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p class="float-end"><a href="#">Back to top</a></p>
    @else
    <p>No hay Categorias disponibles</p>
    @endif

</x-backoffice.layouts.dashboard>