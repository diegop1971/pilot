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
        
    <form method="POST" action="{{ route('backoffice.stock.update', ['id' => $stockMovement['id']]) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        
        <label>Id de stock: {{ $stockMovement['id'] }}</label>
        <br>
        <label for="product_id">Producto</label>
        <select name="product_id" id="product_id">
            <option selected disabled>Seleccione un producto</option>
            @foreach($products as $product)
                <option value="{{ $stockMovement['product_id'] }}" @if($stockMovement['product_id'] == $product['id']) selected @endif>{{ $product['name'] }}</option>
            @endforeach
        </select>
        <br>
        <label for="movement_type_id">Tipo de movimiento</label>
        <select name="movement_type_id" id="movement_type_id">
            <option selected disabled>Seleccione un producto</option>
            @foreach($stockMovementTypes as $stockMovementType)
                <option value="{{ $stockMovementType['id'] }}" @if($stockMovement['movement_type_id'] == $stockMovementType['id']) selected @endif>{{ $stockMovementType['movement_type'] }}</option>
            @endforeach
        </select>
        <br>
        <label for="quantity">Cantidad</label>
        <input type="number" name="quantity" id="quantity" placeholder="Cantidad" value="{{ $stockMovement['quantity'] }}">
        <br>
        <label for="date">Fecha de ingreso</label>
        <input type="date" name="date" id="date" value="{{ date('Y-m-d', strtotime($stockMovement['date'])) }}">
        <br>
        <label for="notes">Notas</label>
        <input type="text" name="notes" id="notes" placeholder="Notas" value="{{ old('notes', $stockMovement['notes']) }}">
        <br>
        <label for="enabled">Habilitado:</label>
        <input type="hidden" name="enabled" value="0">
        <input type="checkbox" name="enabled" id="enabled" {{ intval($stockMovement['enabled']) == 1 ? 'value="1" checked' : '' }}>
        <br>
        <button type="submit">Actualizar stock</button>
    </form>
    
    <p>
        <a href="{{ route('backoffice.stock.index')}}">Regresar al listado de stock</a>
    </p>
</x-backoffice.layouts.dashboard>
