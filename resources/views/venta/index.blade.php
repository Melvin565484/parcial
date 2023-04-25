Listado de mascotas

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Fecha</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($ventas as $venta)
        <tr>
            <td>{{ $venta->id }}</td>
            <td>{{ $venta->cantidad }}</td>
            <td>{{ $venta->precio }}</td>
            <td>{{ $venta->fecha }}</td>
            <td>
                <form method="POST" action="{{ url('/venta/'. $venta->id) }}">
                @csrf
                <a href="{{ url('/venta/'. $venta->id . '/edit') }}">Editar</a>
                {{ method_field('DELETE') }}
                <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar el registro?')">
                </form>
            </td>
        </tr>
        @endforeach
</tbodyt>
</table>