@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left"><img src="{{asset('images/logos/logoPng.png')}}" height="40px"> Visualizando un cargo</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('cargos.show_fields')
                    <a href="{{ route('cargos.index') }}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
