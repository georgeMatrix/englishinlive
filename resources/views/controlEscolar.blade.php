@extends('layouts.layout')
@section('contenido')

    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="col-xl-3 col-md-3 col-xs-3 offset-xl-9 offset-md-9 offset-xs-9 pl-5">
                <a class="btn btn-success" href="{{route('controlEscolar.create')}}" >NUEVO REGISTRO</a>
            </div>
            <div class="card-body">
                <div class="table-responsive content-loader">
                <table class="table table-hover table-sm table-striped">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>GRUPO</th>
                            <th>ESCOLARIDAD</th>
                            <th>NO_DE_CONTROL</th>
                            <th>CICLO_ESCOLAR</th>
                            <th>EDAD</th>
                            <th>INCORPORADOS</th>
                            <th>SEXO</th>
                            <th>NIVEL</th>
                            <th>MAESTRO</th>
                            <th>HORARIO_SEP</th>
                            <th>CURP</th>
                            <th>HORARIO</th>
                            <th>MODULOS_ACREDITADOS</th>
                            <th>NOMBRE_COMPLETO</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{$registro->id}}</td>
                            <td>{{$registro->grupo}}</td>
                            <td>{{$registro->escolaridad}}</td>
                            <td>{{$registro->noControl}}</td>
                            <td>{{$registro->cicloEscolar}}</td>
                            <td>{{$registro->edad}}</td>
                            <td>{{$registro->incorporados}}</td>
                            <td>{{$registro->sexo}}</td>
                            <td>{{$registro->nivelesMethod->nombre}}</td>
                            <td>{{$registro->maestro}}</td>
                            <td>{{$registro->horarioSep}}</td>
                            <td>{{$registro->curp}}</td>
                            <td>{{$registro->horario}}</td>
                            <td>{{$registro->modulosAcreditados}}</td>
                            <td>{{$registro->nombreCompleto}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                    {{$registros->render()}}
                </div>
            </div>
        </div>
    </div>

@endsection