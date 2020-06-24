@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}"/>  
@endsection

<div class="table-responsive">
    <table class="table table-striped table-bordered" id="categoria-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categoriaProductos as $categoriaProducto)
                <tr>
                    <td>{{ $categoriaProducto->id }}</td>
                    <td>{{ $categoriaProducto->nombre }}</td>
                    <td>{{ $categoriaProducto->descripcion }}</td>
                    <td>
                        {!! Form::open(['route' => ['categoriaProductos.destroy', $categoriaProducto->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('categoriaProductos.show', [$categoriaProducto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('categoriaProductos.edit', [$categoriaProducto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No hay categorías creadas</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@push('scripts')
    <script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script>
        $('#categoria-table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
        });
    </script>
@endpush