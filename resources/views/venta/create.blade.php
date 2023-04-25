Nuevo Registro de ventas
<form action="{{ url('/venta') }}" method="POST">
    @csrf
    @include('venta.form')
</form>