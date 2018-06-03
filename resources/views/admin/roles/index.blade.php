
@extends('layouts.master')

@section('title', 'Roles')

@section('content')

<div class="container">
  <div class="card card-primary card-outline mt-5">
    <div class="card-header">
      Listado de Roles    
      @can('roles.create')
        <a href="{{ route('roles.create') }}" class="badge badge-primary float-right"> Crear <i class="fas fa-plus"></i> </a>  
      @endcan 
    </div>
    <div class="card-body">
     
      <table class="table table-striped table-sm table-bordered">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Especial</th>
            <th colspan="3">&nbsp</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($roles as $role)
          <tr>
            <td> {{ $role->name }} </td>
            <td> {{ $role->description }} </td>
            <td> {{ $role->special }} </td>
            <td width="10px">
              @can('roles.show')
                <a class="btn btn-sm btn-primary" href="{{ route('roles.show', $role->id) }}"> Ver </a>
              @endcan
            </td>
            <td width="10px">
              @can('roles.edit')
                <a class="btn btn-sm btn-warning" href="{{ route('roles.edit', $role->id) }}"> Editar </a>
              @endcan
            </td>
            <td width="10px">
              @can('roles.destroy')

                {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE', 'onclick' => ' return confirm("Estas seguro?")']) !!}
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

