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
    
    <form method="POST" action="{{ route('backoffice.stock.store') }}">
        {{ csrf_field() }}
    
        <label for="stockProductName">Nombre del producto</label>
        <select name="stockProductId" id="stockProductName">
            <option selected disabled>Seleccione un producto</option>
            @foreach($products as $product)
                <option value="{{ $product['id'] }}">{{ $product['name'] }}</option>
            @endforeach
        </select>

        <br>
        <label for="stockMovementTypeName">Tipo de movimiento</label>
        <select name="stockMovementTypeId" id="stockMovementTypeName">
            <option selected disabled>Seleccione el tipo de movimiento</option>
            @foreach($stockMovementTypes as $stockMovementType)
                <option value="{{ $stockMovementType['id'] }}">{{ $stockMovementType['movement_type'] }}</option>
            @endforeach
        </select>
        <br>
        <label for="stockQuantity">Cantidad</label>
        <input type="number" name="stockQuantity" id="stockQuantity" placeholder="Cantidad" value="{{ old('stockQuantity') }}">
        <br>
        <label for="stockDate">Fecha de ingresos</label>
        <input type="date" name="stockDate" id="stockDate" placeholder="Fecha de ingreso" value="{{ old('stockDate') }}">
        <br>
        <label for="stockNotes">Notas</label>
        <input type="text" name="stockNotes" id="stockNotes" placeholder="Notas" value="{{ old('stockNotes') }}">
        <br>
        <label for="stockEnabled">Habilitado:</label>
        <input type="hidden" name="stockEnabled" value="0">
        <input type="checkbox" name="stockEnabled" id="stockEnabled" value="1">
        <br>
        <button type="submit">Ingresar</button>
    </form>
    
    <p>
        <a href="{{ route('backoffice.stock.index') }}">Regresar al listado de stock</a>
    </p>

</x-backoffice.layouts.dashboard>