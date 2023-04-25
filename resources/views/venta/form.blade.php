cantidad
<input type="number" name="cantidad" id="cantidad" value="{{ isset($venta)?$venta->cantidad:''}}" /><br/>
precio
<input type="number" name="precio" id="precio" value="{{ isset($venta)?$venta->precio:''}}" /><br/>
fecha
<input type="date" name="fecha" id="fecha" value="{{ isset($venta)?$venta->fecha:''}}" /><br/>

<button type="submit">Guardar</button>