<x-backoffice.layouts.dashboard :title=$title>
    <p><a href="{{ route('backoffice.stock.create') }}">Ingresar producto a stock</a></p> 
    @if(count($stocks))
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id</th>
                    <th scope="col">Id del producto</th>
                    <th scope="col">Nombre del producto</th>
                    <th scope="col">Tipo de operacion</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Fecha de operacion</th>
                    <th scope="col">Notas</th>
                    <th scope="col">Habilitado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stocks as $stock)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $stock['id'] }}</td>
                        <td>{{ $stock['product_id'] }}</td>
                        <td>{{ $stock['product']['name'] }}</td>
                        <td>{{ $stock['stock_movement_type']['movement_type'] }}</td>
                        <td>{{ $stock['quantity'] }}</td>
                        <td>{{ $stock['date'] }}</td>
                        <td>{{ $stock['notes'] }}</td>
                        <td>{{ $stock['enabled'] ? 'si' : 'no' }}</td>
                        <td>
                            <form action="{{ route('backoffice.stock.show', $stock['id']) }}" method="GET">
                                {{ csrf_field() }}
                                <button type="submit">Ver</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('backoffice.stock.edit', $stock['id']) }}" method="GET">
                                {{ csrf_field() }}
                                <button type="submit">Modificar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('backoffice.stock.destroy', $stock['id']) }}" method="POST">
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
        <p>No hay Productos cargados en stock</p>
    @endif
</x-backoffice.layouts.dashboard>