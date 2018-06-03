<div class="form-group">

{!! Form::label('name', 'Nombre del Permiso') !!}

{!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

{!! Form::label('slug', 'Slug') !!}

{!! Form::text('slug', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

{!! Form::label('description', 'Descripcion') !!}

{!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '2']) !!}

</div>


<br>
<div class="form-group">
  
  {!! Form::button('Guardar &nbsp; <i class="far fa-save"></i>', ['type' => 'submit', 'class' => 'btn btn-primary float-right']) !!}
  <a href="{{ URL::previous() }}" class="badge badge-primary"> <i class="fa fa-arrow-left"></i> Regresar </a>
  
</div>