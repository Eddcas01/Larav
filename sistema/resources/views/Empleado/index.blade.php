Mostrar empleados

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Segundo nombre</th>
            <th>Apellido</th>
            <th>fecha de nacimiento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($emp as $empl )
        <tr>
           <td>{{ $empl->id }}</td>
           <td>{{ $empl->Foto }}</td>
           <td>{{ $empl->Nombre }}</td>
           <td>{{ $empl->Nombre2 }}</td>
           <td>{{ $empl->Apellido2 }}</td>
           <td>{{ $empl->Fechanac }}</td>
           <td>
               
           <a href="{{url('/Empleado/'.$empl->id.'/edit/')}}"> Editar </a>
          | 
               

        <form action="{{ url('/Empleado/'.$empl->id) }}" method="post">

        @csrf
        {{ method_field('DELETE') }}
        <input type="submit" onclick="return confirm('Deseas borrar los datos?')" value="Borrar">
        
        </form>

        

           </td>
        </tr>
        @endforeach 
    </tbody>
</table>