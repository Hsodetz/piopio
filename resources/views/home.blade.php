@extends('layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card card-default">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p> Estas logueado </p>
                        <p> Aqui empieza todo </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
