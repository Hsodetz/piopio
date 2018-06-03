@extends('layouts.master')

@section('title', 'Permisos | Registro')

@section('content')

<div class="container">
  <div class="card card-primary card-outline mt-5">
    <div class="card-header">
      Registro de Permisos
    </div>
    <div class="card-body">
     
      {!! Form::open(['route' => 'permissions.store', 'method' => 'POST']) !!}
        {{ csrf_field() }}

        @include('admin.permissions.partials.form')
        
      {!! Form::close() !!}
      
    </div>
  </div>
</div>

@stop
