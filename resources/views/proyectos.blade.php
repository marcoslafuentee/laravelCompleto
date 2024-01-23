@extends("layouts.layout")

@section("contenido")
    <h1>Listado de proyectos</h1>
    <table>
        <tr>
            <th>Titulo</th>
            <th>web</th>
            <th>horas</th>
        </tr>
        @foreach($proyectos as $proyecto)
            <tr>
                <td>{{$proyecto->titulo}}</td>
                <td>{{$proyecto->web}}</td>
                <td>{{$proyecto->horas}}</td>
            </tr>
        @endforeach
    </table>



@endsection
@section("titulo")
    proyectos
@endsection
@section("descripcion")
        Proyecto de aprendizaje de laravel. usamos los diferentes elementos
@endsection

