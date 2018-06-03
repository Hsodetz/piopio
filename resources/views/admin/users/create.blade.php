@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <div class="card card-primary card-outline mt-5">
                <div class="card-header">Registro de Usuarios</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombres</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="last_name"> Apellidos </label>
                            <input type="text" name="last_name" class="form-control">        
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-12 control-label">Confirmar Password</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="identification_document">Documento de Identificacion</label>
                            <input type="text" name="identification_document" class="form-control">
                        </div>
                      
                        <div class="form-group">
                            <select name="name" id="" class="form-control">

                                <option value=""> Seleccione la Provincia </option>
                                
                                @foreach ($provincias as $provincia)
                                    <option value="{{ $provincia->id }}"> {{ $provincia->name }} </option>
                                @endforeach
                                  
                            </select>
                        </div>

                        <div class="form-group">
                          <select name="name" id="" class="form-control">

                              <option value=""> Seleccione la ciudad </option>
                              
                              @foreach ($cities as $city)
                                  <option value="{{ $city->id }}"> {{ $city->name }} </option>
                              @endforeach
                                
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="address"> Direccion de Habitacion </label>
                          <textarea name="address" rows="2" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="phone_movil"> Telefono Movil </label>
                          <input type="tel" name="phone_movil" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="phone_house"> Telefono Domicilio </label>
                          <input type="tel" name="phone_house" class="form-control">
                        </div>

                        <hr>
                        <div class="form-group">
                          <label for="sex"> Sexo </label>
                          <br>
                          <label>
                            <input type="radio" name="sex" value="MALE"> Masculino
                          </label>
                          <label>
                            <input type="radio" name="sex" value="FEMALE"> Femenino
                          </label>
                        </div>
                        <hr>

                        <div class="form-group">
                          <label for="nationality"> Nacionalidad </label>
                          <input type="text" name="nationality" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="occupation"> Ocupacion </label>
                          <input type="text" name="occupation" class="form-control">
                        </div>

                        <hr>
                        <div class="form-group">
                          <label for="civil_status"> Estado Civil </label>
                          <br>
                          <label>
                            <input type="radio" name="civil_status" value="single"> Soltero
                          </label>
                          <label>
                            <input type="radio" name="civil_status" value="married"> Casado
                          </label>
                          <label>
                            <input type="radio" name="civil_status" value="divorced"> Divorciado
                          </label>
                        </div>
                        <hr>

                        <hr>
                        <div class="form-group">
                          <label for="role_id"> Rol </label>
                          <br>  
                          @foreach ($roles as $role)
                            <label>
                              <input type="radio" name="role_id" value="{{ $role->id }}"> {{ $role->name }}
                            </label>
                          @endforeach
                        <hr>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary float-right">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
