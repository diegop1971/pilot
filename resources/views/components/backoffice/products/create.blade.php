<x-backoffice.layouts.dashboard :title=$title>

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
    
    <form method="POST" action="{{ route('backoffice.products.store') }}">
        {{ csrf_field() }}
    
        <input type="text" name="name" id="name" placeholder="Nombre de producto" value="{{ old('name') }}" required>
        <br>
        <textarea name="description" id="description" placeholder="Descripción">{{ old('description') }}</textarea>
        <br>
        <textarea name="description_short" id="description_short" placeholder="Descripción corta" value="{{ old('description_short') }}"></textarea>
        <br>
        <input type="text" name="price" id="price" placeholder="Precio unitario" value="{{ old('price', '0') }}" min="0" required>
        <br>
        <select name="category_id" id="category_id" required>
            <option selected disabled>Seleccione una categoría</option>
            @foreach($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
            @endforeach
        </select>
        <br>
        <label for="minimum_quantity">Cantidad mínima para la venta:</label>
        <input type="number" name="minimum_quantity" id="minimum_quantity" value="{{ old('minimum_quantity', 1) }}" min="1" step="1" required>
        <br>
        <label for="low_stock_threshold">Cantidad minima limite:</label>
        <input type="number" name="low_stock_threshold" id="low_stock_threshold" value="1" {{ old('low_stock_threshold') ? 'checked' : '' }} required>
        <br>
        <label for="low_stock_alert">Alerta de cantidad minima:</label>
        <input type="checkbox" name="low_stock_alert" id="low_stock_alert" {{ old('low_stock_alert') ? 'checked' : '' }} required>
        <br>
        <label for="enabled">Producto habilitado:</label>
        <input type="hidden" name="enabled" value="0">
        <input type="checkbox" name="enabled" id="enabled" value="1" checked required>
        <br>
        <button type="submit">Crear producto</button>
    </form>
    

    <p>
        <a href="{{ route('backoffice.products.index') }}">Regresar al listado de productos</a>
    </p>

</x-backoffice.layouts.dashboard>