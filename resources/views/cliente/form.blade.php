<label for="Nombre">Nombre </label>
  <input type="text" name="Nombre" value="{{ isset($cliente->Nombre)?$cliente->Nombre:''}}" id="Nombre">
  <br>

  <label for="Apellidos">Apellidos </label>
  <input type="text" name="Apellidos" value="{{  isset($cliente->Apellidos)?$cliente->Apellidos:''}}" id="Apellidos">
  <br>

  <label for="Rut"> Rut </label>
  <input type="text" name="Rut" value="{{  isset($cliente->Rut)?$cliente->Rut:'' }}" id="Rut">
  <br>

  <label for="Correo">Correo </label>
  <input type="text" name="Correo" value="{{  isset($cliente->Correo)?$cliente->Correo:'' }}" id="Correo">
   <br>
   <br>
  <input type="submit" value="Guardar Datos">

  <a href="{{ url('cliente/')}}"> Volver </a>