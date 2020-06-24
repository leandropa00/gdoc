@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left"><img src="{{asset('images/logos/logoPng.png')}}" height="40px"> Editando un producto</h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'patch']) !!}

                        @include('productos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection