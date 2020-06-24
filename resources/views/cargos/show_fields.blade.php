<div class="row form-group">
    <!-- Nombre Field -->
    <div class="col-sm-6">
        {!! Form::label('Id', 'Id:') !!}
        <p>{{ $cargo->id }}</p>
    </div>

    <!-- Nombre Field -->
    <div class="col-sm-6">
        {!! Form::label('nombre', 'Nombre:') !!}
        <p>{{ $cargo->nombre }}</p>
    </div>    
</div>

<div class="row form-group">
    <!-- Created At Field -->
    <div class="col-sm-6">
        {!! Form::label('created_at', 'Creado el:') !!}
        <p>{{ date('d/m/Y g:i A', strtotime($cargo->created_at)) }}</p>
    </div>
    
    <!-- Updated At Field -->
    <div class="col-sm-6">
        {!! Form::label('updated_at', 'Actualizado el:') !!}
        <p>{{ date('d/m/Y g:i A', strtotime($cargo->updated_at)) }}</p>
    </div>
</div>

