@extends('layouts.master')

@section('title', 'Usuarios | Edicion')

@section('content')

<div class="container">
  <div class="card card-primary card-outline mt-5">
    <div class="card-header">
      Editar Usuario
    </div>
    <div class="card-body">
     
      {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
        {{ csrf_field() }}

        @include('admin.users.partials.form')
        
      {!! Form::close() !!}
      
    </div>
  </div>
</div>

@stop