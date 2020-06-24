<div class="row form-group">
    <!-- Nombre Field -->
    <div class="col-sm-6">
        {!! Form::label('Id', 'Id:') !!}
        <p>{{ $categoriaProducto->id }}</p>
    </div>
    
    <!-- Nombre Field -->
    <div class="col-sm-6">
        {!! Form::label('nombre', 'Nombre:') !!}
        <p>{{ $categoriaProducto->nombre }}</p>
    </div>
</div>

<div class="row form-group">
    <!-- Descripcion Field -->
    <div class="col-sm-6">
        {!! Form::label('descripcion', 'Descripcion:') !!}
        <p>{{ $categoriaProducto->descripcion }}</p>
    </div>

    <!-- Created At Field -->
    <div class="col-sm-6">
        {!! Form::label('created_at', 'Creado el:') !!}
        <p>{{ date('d/m/Y g:i A', strtotime($categoriaProducto->created_at)) }}</p>
    </div>
</div>

<div class="row form-group">
    <!-- Updated At Field -->
    <div class="col-sm-6">
        {!! Form::label('updated_at', 'Actualizado el:') !!}
        <p>{{ date('d/m/Y g:i A', strtotime($categoriaProducto->updated_at)) }}</p>
    </div>
</div>

