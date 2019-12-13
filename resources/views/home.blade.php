@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                    <div class="container">
                        <div class="row">
                          
                          <div class="col-12">
                                      <br>
                                      <br>
                                      <br>
                                      <h3>Hoja de vida Q-Vision</h3>
                                      <br>	
                                      <h4>Por favor diligenciar los siguientes campos para completar la hoja de vida</h4>
                                      <br>
                                      <br>
                           <form name="formulario" method="post">
                                <div class="form-group">
                                  <label for="exampleInputEmail1" ><b>Nombre Completo:</b></label>
                                  <input type="text" class="form-control" name="nombre">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1"><b>Cargo:</b></label>
                                  <input type="text" class="form-control" name="cargoperfil">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1"><b>Fecha de diligenciamento:</b></label>
                                  <input type="date" class="form-control" name="fechas" min="">
                                </div>
                </div>
    </div>
</div>
@endsection
