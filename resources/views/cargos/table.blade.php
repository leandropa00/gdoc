@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}"/>  
@endsection

<div class="table-responsive">
    <table class="table table-striped table-bordered" id="cargos-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cargos as $cargo)
                <tr>
                    <td>{{ $cargo->id }}</td>
                    <td>{{ $cargo->nombre }}</td>
                    <td>
                        {!! Form::open(['route' => ['cargos.destroy', $cargo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('cargos.show', [$cargo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('cargos.edit', [$cargo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No hay cargos creados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@push('scripts')
    <script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script>
        $('#cargos-table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
        });
    </script>
@endpush