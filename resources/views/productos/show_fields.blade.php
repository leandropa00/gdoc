<div class="row form-group">
    <!-- Nombre Field -->
    <div class="col-sm-6">
        {!! Form::label('id', 'Id:') !!}
        <p>{{ $producto->id }}</p>
    </div>
    <!-- Nombre Field -->
    <div class="col-sm-6">
        {!! Form::label('nombre', 'Nombre:') !!}
        <p>{{ $producto->nombre }}</p>
    </div>
</div>

<div class="row form-group">
    <div class="col-sm-6">
        {!! Form::label('marca', 'Marca:') !!}
        <p>{{ $producto->marca }}</p>
    <!-- Marca Field -->
    </div>

    <!-- Modelo Field -->
    <div class="col-sm-6">
        {!! Form::label('modelo', 'Modelo:') !!}
        <p>{{ $producto->modelo }}</p>
    </div>
</div>

<div class="row form-group">
    <!-- Serie Field -->
    <div class="col-sm-6">
        {!! Form::label('serie', 'Serie:') !!}
        <p>{{ $producto->serie }}</p>
    </div>

    <!-- Cantidad Field -->
    <div class="col-sm-6">
        {!! Form::label('cantidad', 'Cantidad:') !!}
        <p>{{ $producto->cantidad }}</p>
    </div>
</div>

<div class="row form-group">
    <!-- Fecha Ingreso Field -->
    <div class="col-sm-6">
        {!! Form::label('fecha_ingreso', 'Fecha Ingreso:') !!}
        <p>{{ date('d/m/Y - g:i A', strtotime($producto->fecha_ingreso)) }}</p>
    </div>

    <!-- Categoria Id Field -->
    <div class="col-sm-6">
        {!! Form::label('categoria_id', 'Categoria:') !!}
        <p>{{ $producto->categoria->nombre }}</p>
    </div>
</div>

<div class="row form-group">
    <!-- Fecha Ingreso Field -->
    <div class="col-sm-6">
        {!! Form::label('foto_factura', 'Factura de compra:') !!}
        <p>{{ $producto->foto_factura ?? 'Sin factura de compra '}}</p>
    </div>

    <!-- Categoria Id Field -->
    <div class="col-sm-6">
        {!! Form::label('foto_manual', 'Manual de uso:') !!}
        <p>{{ $producto->foto_manual ?? 'Sin manual de uso'}}</p>
    </div>
</div>

<div class="row form-group">
    <!-- Created At Field -->
    <div class="col-sm-6">
        {!! Form::label('created_at', 'Creado el:') !!}
        <p>{{ date('d/m/Y - g:i A', strtotime($producto->created_at)) }}</p>
    </div>

    <!-- Updated At Field -->
    <div class="col-sm-6">
        {!! Form::label('updated_at', 'Actualizado el:') !!}
        <p>{{ date('d/m/Y - g:i A', strtotime($producto->updated_at)) }}</p>
    </div>
</div>

