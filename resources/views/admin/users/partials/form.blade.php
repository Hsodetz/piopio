<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('name', 'Nombres') !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
      <div class="form-group">
        {!! Form::label('last_name', 'Apellidos') !!}
        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
      <div class="form-group">
        {!! Form::label('age', 'Edad') !!}
        {!! Form::number('age', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::label('identification_document', 'Documento de Identificacion') !!}
      {!! Form::text('identification_document', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::label('address', 'Direccion de Habitacion') !!}
      {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => '2']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="form-control">
      {{ Form::label('province', 'Provincias') }}
      {{ Form::select('province', $provinces, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la provincia']) }}
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-control">
      {{ Form::label('city', 'Ciudades') }}
      {{ Form::select('city', $cities, null, ['class' => 'form-control', 'placeholder' => 'Seleccione la ciudad']) }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="form-control">
      {!! Form::label('phone_movil', 'Telefono Movil') !!}
      <input type="tel" name="phone_movil" class="form-control" value="{{$user->phone_movil}}">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-control">
      {!! Form::label('phone_house', 'Telefono de domicilio') !!}
      <input type="tel" name="phone_house" class="form-control" value="{{$user->phone_house}}">
    </div>
  </div>
</div>
<p></p>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::label('nationality', 'Nacionalidad') !!}
      {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <div class="form-group">
        {!! Form::label('occupation', 'Ocupacion') !!}
        {!! Form::text('occupation', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
</div>

<hr>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <h4>Sexo</h4>
      <label>
        {!! Form::radio('sexo', 'male', ['class' => 'form-control']) !!} Masculino
      </label>
      <label>
        {!! Form::radio('sexo', 'female', ['class' => 'form-control']) !!} Femenino
      </label>
    </div>
  </div>
  <div class="col-md-6">
    <h4>Estado Civil</h4>
    <label>
      {!! Form::radio('civil_status', 'single', ['class' => 'form-control']) !!} Soltero
    </label>
    <label>
      {!! Form::radio('civil_status', 'married', ['class' => 'form-control']) !!} Casado
    </label>
    <label>
      {!! Form::radio('civil_status', 'divorced', ['class' => 'form-control']) !!} Divorciado
    </label>
  </div>
</div>
<hr>

<div class="row">
  <div class="form-group">
    <h4>Rol del Usuario</h4>
    @foreach ($roles as $role)
    <label>
      {!! Form::checkbox('roles[]', $role->id, null) !!} <span class="badge badge-info">{{ $role->name }}</span> 
      <em> {{ $role->description ?: "Sin descripcion" }} </em>
    </label>
    @endforeach
  </div>
</div>

<div class="form-group">
  {!! Form::button('Guardar &nbsp; <i class="fa fa-save"></i>', ['type' => 'submit', 'class' => 'btn btn-primary float-right']) !!}
  <a href="{{ URL::previous() }}" class="badge badge-primary"> <i class="fa fa-arrow-left"></i> Regresar </a>
</div>


 

