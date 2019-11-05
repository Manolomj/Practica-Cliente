 <html lang="en">
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Laravel</title>
</head>
<body>
    <div>


    <table border="20">

    
    
      <th>Id</th>
      <th>Nombre </th>
      <th>Apellidos</th>
      <th>Correo</th>
      <th>Telefono</th>
      <th>Direccion</th>
      <th>Contraseña</th>
      <th>Fec. Nacimiento</th>
      <th>Estado civil</th>
      <th>Sueldo</th>
      <th>Ip</th>
   
    
    
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <th>{{$cliente->id}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->apellidos}}</td>
            <td>{{$cliente->correo}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->claveacceso}}</td>
            <td>{{$cliente->fechanacimiento}}</td>
            <td>{{$cliente->estadocivil}}</td>
            <td>{{$cliente->sueldoanual}}</td>
            <td>{{$cliente->ip}}</td>
            <td><a href="{{url('cliente/'.$cliente->id) }}" class="btn btn-info">Ver</a></td>
            <td><a href="{{url('cliente/'.$cliente->id.'/edit') }}" class="btn btn-success">Editar</a></td>
            <td>
                <form action="{{url('cliente/'.$cliente->id)}}" method="post" class="destroy">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
         @endforeach
    </tbody>  
    </div>
   
    </table>
    <div
    >
        <a href="{{url('cliente/create')}}" class=>Añadir</a>
        
    </div>
    
</body>
</html>

