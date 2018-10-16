@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        {!! Form::open(['url' => 'actualizar_afiliado', 'method' => 'post']) !!}

            <input type="hidden" value="{{$afiliado->id}}" name="afiliadoId">

            {{ csrf_field() }}  

            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-primary">

                    <div class="panel-heading">DATOS DE AFILIACIÓN</div>
                        <div class="panel-body">

                            <div class="col-sm-4 form-group">

                                {!! Form::label('asesor', 'Asesores:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::select('asesor', $asesores, array('id'=>'asesor',  'required' => true)) !!}

                                 </div>

                            </div>


                            <div class="col-sm-4 form-group">
                                <label for="fechaSolicitud" class="col-md-4 control-label">
                                    Fecha De Solicitudsss:</label>
                                 <div class="col-md-6">
                                    <input id="fechaSolicitud" type="date" class="form-control" name="fechaSolicitud" value= {{$afiliadoRegistro->fecha_afiliacion}} required autofocus>

                                </div>
                            </div> 

                            <div class="col-sm-4 form-group">

                                {!! Form::label('eps', 'Eps:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::select('eps', $eps, array('id'=>'eps', 'required' => true)) !!}
                                </div>

                            </div>
                        </div>

                        <div class="panel-body">


                            <div class="col-sm-4 form-group">

                                {!! Form::label('arl', 'Arl:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-4">
                                    {!! Form::select('arl', $arl, array('id'=>'arl', 'required' => true)) !!}
                                </div>

                            </div>


                            <div class="col-sm-4 form-group">

                                {!! Form::label('caja', 'Caja:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::select('caja', $caja, array('id'=>'caja', 'required' => true)) !!}
                                </div>

                            </div>

                                
                            <div class="col-sm-4 form-group">
                                <label for="afp" class="col-md-4 control-label">
                                    AFP:</label>
                                 <div class="col-md-4">
                                    <input id="afp" type="text" class="form-control" name="afp" value= {{$afiliadoRegistro->id_afp}} required autofocus>
                                </div>
                            </div>

                              
                        </div>

                        <div class="panel-body">

                            <div class="col-sm-4 form-group">
                                <label for="bdua" class="col-md-4 control-label">
                                    BDUA:</label>
                                 <div class="col-md-6">
                                    <input id="bdua" type="text" class="form-control" name="bdua" value={{$afiliadoRegistro->bdua}} >

                                </div>
                            </div>

                            <div class="col-sm-4 form-group">
                                <label for="recibo" class="col-md-4 control-label">
                                    Recibo:</label>
                                    <input id="recibo" type="file">

                            </div>  
                        </div>
                            
                </div>
            </div>

            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-primary">
                    <div class="panel-heading">DATOS PERSONALES</div>
                    <div class="panel-body">
                        
                        <div class="col-sm-6 form-group">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="primerNombre" class="col-md-4 control-label">Nombres:</label>

                            <div class="col-md-6">
                                <input id="primerNombre" type="text" class="form-control" name="primerNombre" value="{{ $afiliado->primer_nombre ." ". $afiliado->segundo_nombre }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="primerApellido" class="col-md-4 control-label">Apellidos:</label>

                            <div class="col-md-6">
                                <input id="primerApellido" type="text" class="form-control" name="primerApellido" value="{{ $afiliado->primer_apellido." ". $afiliado->segundo_apellido}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            </div>
                        </div>


                        <div class="col-sm-6 form-group">
                            
                            <label for="cedula" class="col-md-4 control-label">Cédula:</label>
                            <div class="col-md-6">
                                <input id="cedula" type="text" class="form-control" name="cedula"  value="{{ $afiliado->cedula }}"required autofocus>
                            </div>

                        </div>
                        

                        <div class="col-sm-6 form-group">

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail:</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $afiliado->email }}"" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="fechaNacimiento" class="col-md-4 control-label">Fecha De Nacimiento:</label>

                            <div class="col-md-6">
                                <input id="fechaNacimiento" type="date" class="form-control" name="fechaNacimiento"  value="{{ $afiliado->fecha_nacimiento }}"  required>

                            </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="telefono" class="col-md-4 control-label">Teléfonoemp:</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono"
                                value="{{ $afiliadoTelefono->telefono_fijo }}" required>

                            </div>
                        </div>
                        
                        <div class="col-sm-6 form-group">
                            <label for="celular" class="col-md-4 control-label">Celular:</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control" name="celular" 
                                value="{{ $afiliadoCelular->telefono_celular }}" required>

                            </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="direccion" class="col-md-4 control-label">Dirección:</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value = "{{ $afiliado->direccion }}"required>

                            </div>
                        </div>
                        

                        <div class="col-sm-6 form-group">

                            <label for="barrio" class="col-md-4 control-label">Barrio:</label>

                            <div class="col-md-6">
                                <input id="barrio" type="text" class="form-control" name="barrio" value = "{{ $afiliado->barrio }}" required>

                            </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="salario" class="col-md-4 control-label">Salario:</label>
                            <div class="col-md-6">
                                <input id="salario" type="text" class="form-control" name="salario" value = "{{ $afiliado->salario }}" required>

                            </div>
                        </div>


                        <div class="col-sm-6 form-group">

                            <label for="plan" class="col-md-4 control-label">Plan:</label>
                            <div class="col-md-6">
{{--                                 @foreach($afiliadoPlanes as $value)
 --}}
                                    <input id="plan" type="text" class="form-control" name="plan" {{-- value="{{$value->nombre}}" --}}required >
{{--                                 @endforeach
 --}}
                            </div>
                        </div>
                        

                        <div class="col-sm-6 form-group">

                            <label for="actividad" class="col-md-4 control-label">Actividad Laboral:</label>
                             <div class="col-md-6">
                                <input id="actividad" type="text" class="form-control" name="actividad" value = "{{ $afiliado->actividad }}" required>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-primary">
                    <div class="panel-heading">BENEFICIARIOS</div>
                    <div class="panel-body">
                        
                        <div class="col-sm-6 form-group">
                            <label for="beprimerNombre" class="col-md-4 control-label" >Nombres:</label>


                            <div class="col-md-6">

                                @foreach($afiliado->beneficiario as $beneficiario)

                                <input id="beprimerNombre" type="text" class="form-control" name="beprimerNombre" value="{{ $beneficiario->primer_nombre ." ". $beneficiario->segundo_nombre }}"  required autofocus>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="beprimerApellido" class="col-md-4 control-label">Apellidos:</label>


                            <div class="col-md-6">
                                @foreach($afiliado->beneficiario as $beneficiario)

                                <input id="beprimerApellido" type="text" class="form-control" name="beprimerApellido" value="{{ $beneficiario->primer_apellido ." ". $beneficiario->segundo_apellido}}" required autofocus>
                                @endforeach

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            </div>
                        </div>

                         <div class="col-sm-6 form-group">

                            <label for="tipoIden" class="col-md-4 control-label">
                                Tipo De Identificación:</label>


                             <div class="radio">
                                <div class="col-sm-2 form-group">

                                    <label for="pendon" class="col-md-4 control-label"><input type="radio" name="tipoIden" value="0">T.I.</label>
                                </div>
                                <div class="col-sm-2 form-group">

                                    <label for="referido" class="col-md-4 control-label"><input type="radio" name="tipoIden" value="1">C.C.</label>
                                </div>
                                 <div class="col-sm-2 form-group">


                                    <label for="volante" class="col-md-4 control-label"><input type="radio" name="tipoIden" value="2">C.E.</label>
                                </div>
                                <div class="col-sm-2 form-group">

                                    <label for="redes" class="col-md-4 control-label"><input type="radio" name="tipoIden" value="3">P.P.</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="numIdentificacion" class="col-md-4 control-label">Número De Identificación:</label>

                            @foreach($afiliado->beneficiario as $beneficiario)

                            <div class="col-md-6">
                                <input id="numIdentificacion" type="text" class="form-control" name="numIdentificacion"  value="{{ $beneficiario->id_identificacion }}" required autofocus>
                             </div>
                             @endforeach
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="tipoIden" class="col-md-4 control-label">
                                Parentezco Familiar:</label>

                             <div class="radio">
                                <div class="col-sm-2 form-group">
                                    <label for="pendon" class="col-md-4 control-label"><input type="radio" name="tipoPar" value="0">Hij@</label>
                                </div>
                                <div class="col-sm-2 form-group">
                                    <label for="referido" class="col-md-4 control-label"><input type="radio" name="tipoPar" value="1">Padres</label>
                                </div>

                                <div class="col-sm-2 form-group">
                                    <label for="volante" class="col-md-4 control-label"><input type="radio" name="tipoPar" value="2">Otro</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-primary">
                    <div class="panel-heading">EMPRESA</div>
                    <div class="panel-body">
                        
                        <div class="col-sm-6 form-group">
                            <label for="empresa" class="col-md-4 control-label">Empresa:</label>

                            <div class="col-md-6">
                                <input id="empresa" type="text" class="form-control" name="empresa" value= "{{ $afiliado->registroAfiliacion->empresa->nombre }} "required autofocus>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="nit" class="col-md-4 control-label">NIT:</label>
                            <div class="col-md-6">
                                <input id="nit" type="text" class="form-control" name="nit"  required value="{{$afiliado->registroAfiliacion->empresa->nit}}" autofocus>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="direccionEmpresa" class="col-md-4 control-label"> Dirección:</label>
                            <div class="col-md-6">
                                <input id="direccionEmpresa" type="text" class="form-control" name="direccionEmpresa" value="{{$afiliado->registroAfiliacion->empresa->nit}}"  required autofocus>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                                <label for="correo" class="col-md-4 control-label">E-Mail:</label>

                                <div class="col-md-6">
                                    <input id="correo" type="text" class="form-control" name="correo" value="{{$afiliado->registroAfiliacion->empresa->correo}}" required>

                                    @if ($errors->has('correo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('correo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="empresaTel" class="col-md-4 control-label">Teléfono:</label>
                            <div class="col-md-6">
                                <input id="empresaTel" type="text" class="form-control" name="empresaTel"  value="{{ $empresaTelefono->telefono_fijo }}" required autofocus>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="empresaCel" class="col-md-4 control-label">Celular:</label>

                            <div class="col-md-6">
                                <input id="empresaCel" type="text" class="form-control" name="empresaCel" value="{{ $empresaCelular->telefono_celular }}" required autofocus>
                            </div>

                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="responsable" class="col-md-4 control-label">Responsable:</label>

                            <div class="col-md-6">
                                <input id="responsable" type="text" class="form-control" name="responsable" value="{{ $afiliado->registroAfiliacion->empresa->responsable }}"  required autofocus>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="observaciones" class="col-md-4 control-label">Observación:</label>

                            <div class="col-md-6">
                                <input id="observaciones" type="text" class="form-control" name="observaciones"  value="{{$afiliado->registroAfiliacion->empresa->observaciones}}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                     </div>
                </div>
            </div>

        {!! Form::close() !!}
    </div>
</div>
@endsection

