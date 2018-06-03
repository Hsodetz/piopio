@extends('layouts.master')

@section('title', 'Rol | Edicion')

@section('content')

<div class="container">
  <div class="card card-primary card-outline mt-5">
    <div class="card-header">
      Editar Role
    </div>
    <div class="card-body">
     
      {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT']) !!}
        {{ csrf_field() }}

        @include('admin.roles.partials.form')
        
      {!! Form::close() !!}
      
    </div>
  </div>
</div>

@stop