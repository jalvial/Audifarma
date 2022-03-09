mostrar la lista de empleados
<a href="{{ url('cliente/create')}}"> Registrar Cliente</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Rut</th>
            <th>Correo</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $cliente as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->Nombre}}</td>
            <td>{{$cliente->Apellidos}}</td>
            <td>{{$cliente->Rut}}</td>
            <td>{{$cliente->Correo}}</td>
            <td>{{$cliente->id}}</td>
            <td>
                
            <a href="{{ url('/cliente/'.$cliente->id.'/edit') }}">
                Editar
            </a>
               | 
            <form action="{{ url('/cliente/'.$cliente->id)}}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿ quieres Borrar?')"
             value="Borrar">

            </form>
        
        
            </td>
        </tr>
        @endforeach
    </tbody>
</table>