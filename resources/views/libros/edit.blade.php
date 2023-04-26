Editar registros

<form action="{{ url('/libros/'. $libros->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('libros.form')
   
</form>