<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', 'Marca:') !!}
    {!! Form::text('marca', null, ['class' => 'form-control']) !!}
</div>

<!-- Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo', 'Modelo:') !!}
    {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
</div>

<!-- Serie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('serie', 'Serie:') !!}
    {!! Form::text('serie', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Ingreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_ingreso', 'Fecha Ingreso:') !!}
    {!! Form::text('fecha_ingreso', null, ['class' => 'form-control','id'=>'fecha_ingreso']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_ingreso').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'Categoría:') !!}
    {!! Form::select('categoria_id', $categoria_productoItems, null, ['class' => 'form-control', 'data-live-search' => 'true', 'title' => 'Selecciona una categoría', 'data-style' => 'form-control']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('select').selectpicker();
    </script>
@endpush

<!-- Factura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto_factura', 'Factura de compra:') !!}
    {!! Form::file('foto_factura', $categoria_productoItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Manual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto_manual', 'Manual de uso:') !!}
    {!! Form::file('foto_manual', $categoria_productoItems, null, ['class' => 'form-control']) !!}
</div>
    
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-default">Cancelar</a>
</div>