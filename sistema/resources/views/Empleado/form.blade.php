incluido en editar y crear un usuario
<label for="Nombre">Primer Nombre     </label>    <input type="text"  value="{{ $empleado->Nombre }}"  id="Nombre" name="Nombre" >           <br> 
<label for="Nombre2">Segundo Nombre    </label>    <input type="text" value="{{ $empleado->Nombre2 }}"  id="Nombre2" name="Nombre2" >            <br>        
<label for="Apellido">Primer Apellido </label>    <input type="text"  value="{{ $empleado->Apellido }}" id="Apellido" name="Apellido" ><br>
<label for="Apellido2">Segundo Apellido</label>    <input type="text" value="{{ $empleado->Apellido2 }}"  id="Apellido2" name="Apellido2" ><br>
 <label for="Fechanac">fechanac     </label>    <input type="date"    value="{{ $empleado->Fechanac }}"  id="Fechanac" name="Fechanac" ><br>
<label for="Foto">foto              </label>    <input type="file"    value="{{ $empleado->Foto }}"  id="Foto" name="Foto" ><br>
 <label for="Enviar">Envio          </label>    <input type="submit" value="Guardar Datos" ><br>
