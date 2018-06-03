@extends('layouts.master')

@section('title', 'Permiso | Edicion')

@section('content')

<div class="container">
  <div class="card card-primary card-outline mt-5">
    <div class="card-header">
      Editar Permiso
    </div>
    <div class="card-body">
     
      {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method' => 'PUT']) !!}
        {{ csrf_field() }}

        @include('admin.permissions.partials.form')
        
      {!! Form::close() !!}
      
    </div>
  </div>
</div>

@stop