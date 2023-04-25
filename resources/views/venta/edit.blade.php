Editar ventas

<form action="{{ url('/venta/'. $venta->id) }}" method="POST">
@csrf
{{ method_field('PUT') }}
@include('venta.form')
</form>