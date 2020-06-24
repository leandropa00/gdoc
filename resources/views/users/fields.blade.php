<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargo_id', 'Cargos:') !!}
    {!! Form::select('cargos[]', $cargoItems, null, ['class' => 'form-control', 'multiple', 'data-style' => 'form-control', 'data-live-search' => 'true', 'title' => 'No has seleccionado cargos']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('select').selectpicker();
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">Cancelar</a>
</div>
