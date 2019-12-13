@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color:white;
                    background-color: cornflowerblue">HV QVISION</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{-- formulario de entrega --}}
                    <form action="{{route('envio')}}" method="post">
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-rigth">nombre Completo</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" name="nombre" class="form-control">
                            </div>    
                        </div>{{--div class form.group row --}}
                        <div class="form-group row">
                                <label for="cargo" class="col-md-4 col-form-label text-md-rigth">Cargo </label>
                                <div class="col-md-6">
                                    <input id="cargo" type="text" name="cargo" class="form-control">
                                </div>    
                        </div>{{--div cargo--}}

                        <div class="form-group row">
                                <label for="perfil" class="col-md-4 col-form-label text-md-rigth">Perfil Profesional</label>
                                <small class="col-sm-auto">
                                        Realizar un breve resumen de formación acádemica, experiencia laboral y competencias 
                                </small>
                                <div class="col-md-auto col-form-label text-md-rigth">
                                    <textarea name="perfil" id="perfil" maxlength="500"
                                    rows="5"
                                    cols="60"
                                    ></textarea>
                                </div>    
                        </div>{{--perfil profesional  --}}

                        {{--Estudios--}}
                        
                        <div class="form-group row col-lg-12">
                            
                            <table border="1" class="col-lg-10">
                                    <caption>titulo de tabla</caption>
                                <thead>
                                    <th>
                                        Nivel de estudio Superiores
                                    </th>
                                    <th>
                                        Titulo Obtenido
                                    </th>
                                    <th>
                                        Año de Finalización
                                    </th>
                                </thead>
                                
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <select class="custom-select" name="" id="">
                                                <option selected>Selecciona</option>
                                                <option value="1">tecnico</option>
                                                <option value="2"></option>
                                                <option value="3"></option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        my title
                                    </td>
                                    <td>
                                        hace rato
                                    </td>
                                </tr>
                                
                            </table>
                            <button>
                                otro estudio
                            </button>
                        </div>{{--div del table --}}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary col-lg-6">enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

