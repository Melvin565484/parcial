
Nombre del libro:
<input type="text" name="titulo" id="titulo" value="{{ isset($libros)?$libros->titulo:'' }}" /><br />
Nombre Del Autor:
<input type="text" name="autor" id="autor" value="{{ isset($libros)?$libros->autor:'' }}" /><br />
Año de Publicacion:
<input type="date" name="añoPublicacion" id="añoPublicacion" value="{{ isset($libros)?$libros->añoPublicacion:'' }}" /><br />
INSBM:
<input type="number" name="isbm" id="inbm" value="{{ isset($libros)?$libros->isbm:'' }}" /><br />

<button type="submit">Guardar</button>