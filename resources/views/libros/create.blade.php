Nuevo registro de libro:
<form action="{{ url('/libros') }}" method="POST">
    @csrf
    @include('libros.form')
   
</form>