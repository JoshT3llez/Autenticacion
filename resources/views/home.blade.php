@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Novedades') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Que bueno tenerte de vuelta')}}

                    {{ Auth::user()->name }}
            </div>
            <table>
                <thead>
                    <th>Nombre</th>
                    <th>Precio</th>
                </thead>
                <tbody>
                    @foreach($libros as $lib)
                    <tr>
                        <td>{{$lib->nombre}}</td>
                        <td>{{$lib->precio}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <section>
        <img src="../images/parkk.jpg">
        <img src="{{URL::asset('images/fondo.jpg')}}">
        <img src="../images/spidex.jpg">
        <img src="{{URL::asset('images/exo.jpg')}}">
        <img src="../images/darwin.jpg">

    </section>
</div>
@endsection
