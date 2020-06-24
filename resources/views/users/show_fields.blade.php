<div class="row form-group">
    <!-- Name Field -->
    <div class="col-sm-6">
        {!! Form::label('id', 'Id:') !!}
        <p>{{ $user->id }}</p>
    </div>
    
    <!-- Name Field -->
    <div class="col-sm-6">
        {!! Form::label('name', 'Nombre:') !!}
        <p>{{ $user->name }}</p>
    </div>
</div>

<div class="row form-group">
    <!-- Email Field -->
    <div class="col-sm-6">
        {!! Form::label('email', 'Correo:') !!}
        <p>{{ $user->email }}</p>
    </div>

    <!-- Cargo Id Field -->
    <div class="col-sm-6">
        {!! Form::label('cargo_id', 'Cargos:') !!}
        <p>
            @forelse ($user->cargos as $item)
                {{ $item->nombre }} <br>
            @empty
                Sin cargos
            @endforelse
        </p>
    </div>
</div>

<div class="row form-group">
    <!-- Created At Field -->
    <div class="col-sm-6">
        {!! Form::label('created_at', 'Creado el:') !!}
        <p>{{ date('d/m/Y - g:i A', strtotime($user->created_at)) }}</p>
    </div>

    <!-- Updated At Field -->
    <div class="col-sm-6">
        {!! Form::label('updated_at', 'Actualizado el:') !!}
        <p>{{ date('d/m/Y - g:i A', strtotime($user->updated_at)) }}</p>
    </div>    
</div>


