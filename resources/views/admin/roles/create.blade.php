@extends('layouts.master')

@section('title', 'Rol | Registro')

@section('content')

<div class="container">
  <div class="card card-primary card-outline mt-5">
    <div class="card-header">
      Registro de Roles
    </div>
    <div class="card-body">
     
      {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
        {{ csrf_field() }}

        @include('admin.roles.partials.form')
        
      {!! Form::close() !!}
      
    </div>
  </div>
</div>

@stop
