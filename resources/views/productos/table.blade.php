@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}"/>  
@endsection

<div class="table-responsive">
    <table class="table table-striped table-bordered" id="productos-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Serie</th>
                <th>Cantidad</th>
                <th>Fecha ingreso</th>
                <th>Categoría</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @forelse($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->marca }}</td>
                    <td>{{ $producto->modelo }}</td>
                    <td>{{ $producto->serie }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ date('d/m/Y', strtotime($producto->fecha_ingreso))}}</td>
                    <td>{{ $producto->categoria->nombre }}</td>
                    <td>
                        {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('productos.show', [$producto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('productos.edit', [$producto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @empty 
                <tr>
                    <td colspan="9" class="text-center">No hay productos creados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@push('scripts')
    <script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script>
        $('#productos-table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
        });
    </script>
@endpush