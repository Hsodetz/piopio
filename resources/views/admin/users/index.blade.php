@extends('layouts.master')

@section('title', 'Waynakay | Usuarios')

@section('content')

<div class="container">
  <div class="card card-primary card-outline mt-5">
    <div class="card-header">
      Listado de Usuarios     
    </div>
    <div class="card-body">
     
      <table class="table table-striped table-sm table-bordered">
        <thead>
          <tr>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Correo</th>
            <th scope="col">Nacionalidad</th>
            <th scope="col">Rol</th>
            <th colspan="3">&nbsp</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($users as $user)
          <tr>
            <td> {{ $user->name }} </td>
            <td> {{ $user->last_name }} </td>
            <td> {{ $user->email }} </td>
            <td> {{ $user->nationality }} </td>
            <td> 
              @foreach($user->role as $role)
              {{ $role->name}} 
              @endforeach
            </td>
            <td width="10px">
              @can('users.show')
                <a class="btn btn-sm btn-primary" href="{{ route('users.show', $user->id) }}"> Ver </a>
              @endcan
            </td>
            <td width="10px">
              @can('users.edit')
                <a class="btn btn-sm btn-warning" href="{{ route('users.edit', $user->id) }}"> Editar </a>
              @endcan
            </td>
            <td width="10px">
              @can('users.destroy')

                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE', 'onclick' => ' return confirm("Estas seguro?")']) !!}
                  <button class="btn btn-sm btn-danger"> Eliminar </button>
                {!! Form::close() !!}

              @endcan
            </td>
           
          </tr> 
          @endforeach

         
        
        </tbody>
      </table>

    </div>
  </div>
</div>


@stop

