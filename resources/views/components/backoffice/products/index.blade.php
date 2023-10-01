<x-backoffice.layouts.dashboard :title=$title>
    
  @guest
  @endguest
    <p>
        <a href="{{ route('backoffice.products.create') }}">Ingresar producto</a>
    </p>

    @auth
    @endauth  
    @if(count($products))
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Description</th>
                    <th scope="col">Description Corta</th>
                    <th scope="col">Precio unitario</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Cantidad mínima en stock</th>
                    <th scope="col">Límite de stock bajo</th>
                    <th scope="col">Alerta de stock bajo</th>
                    <th scope="col">Habilitado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['description'] }}</td>
                        <td>{{ $product['description_short'] }}</td>
                        <td>{{ $product['price'] }}</td>
                        <td>{{ $product['category']['name'] }}</td>
                        <td>{{ $product['minimum_quantity'] }}</td>
                        <td>{{ $product['low_stock_threshold'] }}</td>
                        <td>{{ $product['low_stock_alert'] }}</td>
                        <td>{{ $product['enabled'] ? 'si' : 'no' }}</td>
                        <td>
                            <form action="{{ route('backoffice.products.show', $product['id']) }}" method="GET">
                                {{ csrf_field() }}
                                <button type="submit">Ver</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('backoffice.products.edit', $product['id']) }}" method="GET">
                                {{ csrf_field() }}
                                <button type="submit">Modificar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('backoffice.products.destroy', $product['id']) }}" method="POST">
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
        <p>No hay Productos disponibles</p>
    @endif

</x-backoffice.layouts.dashboard>
