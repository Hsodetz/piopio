@extends('layouts.master')

@section('title', 'Waynakay | Usuario')

@section('content')

<div class="container">
  <div class="card card-primary card-outline mt-5">
    <div class="card-header">
      Ver usuario {{ $user->name }}     
    </div>
    <div class="card-body">
     
    @foreach ($roles as $role)
      Rol {{ $role->name }}
    @endforeach
    

    </div>
  </div>
</div>
@stop

