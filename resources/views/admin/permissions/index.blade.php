
@extends('layouts.master')

@section('title', 'Waynakay|Permisos')

@section('content')

<div class="container">
  <div class="card card-primary card-outline mt-5">
    <div class="card-header">
      Listado de Permisos    
      @can('permissions.create')
        <a href="{{ route('permissions.create') }}" class="badge badge-primary float-right"> Crear <i class="fas fa-plus"></i> </a>  
      @endcan 
    </div>
    <div class="card-body">
     
      <table class="table table-striped table-sm table-bordered">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th colspan="3">&nbsp</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($permissions as $permission)
          <tr>
            <td> {{ $permission->name }} </td>
            <td> {{ $permission->description }} </td>
            <td width="10px">
              @can('permissions.show')
                <a class="btn btn-sm btn-primary" href="{{ route('permissions.show', $permission->id) }}"> Ver </a>
              @endcan
            </td>
            <td width="10px">
              @can('permissions.edit')
                <a class="btn btn-sm btn-warning" href="{{ route('permissions.edit', $permission->id) }}"> Editar </a>
              @endcan
            </td>
            <td width="10px">
              @can('permissions.destroy')

                {!! Form::open(['route' => ['permissions.destroy', $permission->id], 'method' => 'DELETE', 'onclick' => ' return confirm("Estas seguro?")']) !!}
                  <button class="btn btn-sm btn-danger"> Eliminar </button>
                {!! Form::close() !!}

              @endcan
            </td>
           
          </tr> 
          @endforeach
        
        </tbody>
      </table>
      {{ $permissions->render() }}
    </div>
  </div>
</div>


@stop

