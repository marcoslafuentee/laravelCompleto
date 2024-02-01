@extends("layouts.layout")

@section("contenido")
    <div class="overflow-x-auto max-h-full">
        <a href="{{route('profesores.create')}}">
            <button class="btn btn-secondary ">Nuevo profesor</button>
        </a>
        <table class="overflow-x-auto table-zebra table table-xs table-pin-rows table-pin-cols">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>DNI</th>
                <th>email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($profesores as $profesor)
                <tr>
                    <td> {{$profesor->nombre}}</td>
                    <td> {{$profesor->dir}}</td>
                    <td> {{$profesor->dni}}</td>
                    <td> {{$profesor->email}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section("titulo")
    profesores
@endsection
@section("descripcion")
    Proyecto de aprendizaje de laravel. usamos los diferentes elementos
@endsection
