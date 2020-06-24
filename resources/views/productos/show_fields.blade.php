<div class="row form-group">
    <!-- Nombre Field -->
    <div class="col-sm-6">
        {!! Form::label('nombre', 'Nombre:') !!}
        <p>{{ $producto->nombre }}</p>
    </div>
    <div class="col-sm-6">
        {!! Form::label('marca', 'Marca:') !!}
        <p>{{ $producto->marca }}</p>
    <!-- Marca Field -->
    </div>
</div>

<div class="row form-group">
    <!-- Modelo Field -->
    <div class="col-sm-6">
        {!! Form::label('modelo', 'Modelo:') !!}
        <p>{{ $producto->modelo }}</p>
    </div>
    <!-- Serie Field -->
    <div class="col-sm-6">
        {!! Form::label('serie', 'Serie:') !!}
        <p>{{ $producto->serie }}</p>
    </div>
</div>

<div class="row form-group">
    <!-- Cantidad Field -->
    <div class="col-sm-6">
        {!! Form::label('cantidad', 'Cantidad:') !!}
        <p>{{ $producto->cantidad }}</p>
    </div>
    <!-- Fecha Ingreso Field -->
    <div class="col-sm-6">
        {!! Form::label('fecha_ingreso', 'Fecha Ingreso:') !!}
        <p>{{ date('d/m/Y - g:i A', strtotime($producto->fecha_ingreso)) }}</p>
    </div>
</div>

<div class="row form-group">
    <!-- Categoria Id Field -->
    <div class="col-sm-6">
        {!! Form::label('categoria_id', 'Categoria:') !!}
        <p>{{ $producto->categoria->nombre }}</p>
    </div>
    <!-- Created At Field -->
    <div class="col-sm-6">
        {!! Form::label('created_at', 'Creado el:') !!}
        <p>{{ date('d/m/Y - g:i A', strtotime($producto->created_at)) }}</p>
    </div>
</div>

<div class="row form-group">
    <!-- Updated At Field -->
    <div class="col-sm-6">
        {!! Form::label('updated_at', 'Actualizado el:') !!}
        <p>{{ date('d/m/Y - g:i A', strtotime($producto->updated_at)) }}</p>
    </div>
</div>

