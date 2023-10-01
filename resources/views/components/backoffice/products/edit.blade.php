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

    <form method="POST" action="{{ route('backoffice.products.update', ['id' => $product['id']]) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
    
        <label for="name">Producto:</label>
        <input type="text" name="name" id="name" placeholder="Producto" value="{{ old('name', $product['name']) }}">
        <br>
        <label for="description">Descripción:</label>
        <input type="text" name="description" id="description" placeholder="Descripción de producto" value="{{ old('description', $product['description']) }}">
        <br>
        <label for="price">Precio unitario:</label>
        <input type="text" name="price" id="price" placeholder="Precio unitario" value="{{ old('price', $product['price']) }}">
        <br>
        <label for="category_id">Categoría:</label>
        <select name="category_id" id="category_id">
            <option selected disabled>Seleccione una categoría</option>
            @foreach($categories as $category)
                <option value="{{ $category['id'] }}" @if($category['id'] == $product['category_id']) selected @endif>{{ $category['name'] }}</option>
            @endforeach
        </select>
        <br>
        <label for="enabled">Habilitado:</label>
        <input type="hidden" name="enabled" value="0">
        <input type="checkbox" name="enabled" id="enabled" value="1" {{ $product['enabled'] ? 'checked' : '' }}>
        <br>
        <button type="submit">Actualizar producto</button>
    </form>
    
    <p>
        <a href="{{ route('backoffice.products.index')}}">Regresar al listado de productos</a>
    </p>

</x-backoffice.layouts.dashboard>