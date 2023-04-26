Listado de libros

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Libro</th>
            <th>Autor</th>
            <th>Año de Publicacion</th>
            <th>INSBM</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($libro as $libros)
        <tr>
            <td>{{ $libros->id }}</th>
            <td>{{ $libros->titulo }}</th>
            <td>{{ $libros->autor }}</th>
            <td>{{ $libros->añoPublicacion }}</th>
            <td>{{ $libros->isbm }}</th>
            <td>
                <form method="POST" action="{{ url('/libro/'. $libros->id) }}"
                @csrf
                <a href="{{ url('/libros/'. $libros->id).'/edit' }}">Editar</a>
                {{ method_field('DELETE')}}
                <input type="submit" value="Eliminar" onclick="return comfirm('Esta seguro de querer eliminar el registro?')">
                </form>     
            </td>
        </tr>
        @endforeach
    </tbody>
</table>