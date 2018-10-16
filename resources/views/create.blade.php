@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">

        <form class="form-horizontal" method="POST" action="{{ url('crear_afiliado') }}">
                        {{ csrf_field() }}  
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-primary">

                    <div class="panel-heading">DATOS DE AFILIACIÓN</div>
                        <div class="panel-body">

                            <div class="col-sm-6 form-group">
                                <label for="asesor" class="col-md-4 control-label">
                                    Asesor:</label>
                                 <div class="col-md-6">
                                    <input id="asesor" type="text" class="form-control" name="asesor" required autofocus>
                                 </div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="fechaSolicitud" class="col-md-4 control-label">
                                    Fecha De Solicitud:</label>
                                 <div class="col-md-6">
                                    <input id="fechaSolicitud" type="date" class="form-control" name="fechaSolicitud" required autofocus>

                                </div>
                            </div>


                            <div class="col-sm-6 form-group">

                                {!! Form::label('eps', 'Eps:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::select('eps', $eps, array('id'=>'eps', 'required' => true)) !!}
                                </div>

                            </div>

                            <div class="col-sm-6 form-group">

                                {!! Form::label('arl', 'Arl:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::select('arl', $arl, array('id'=>'arl', 'required' => true)) !!}
                                </div>

                            </div>


                            <div class="col-sm-6 form-group">

                                {!! Form::label('caja', 'Caja:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::select('caja', $caja, array('id'=>'caja', 'required' => true)) !!}
                                </diviv>

                            </div>



                            <div class="col-sm-6 form-group">
                                <label for="afp" class="col-md-4 control-label">
                                    AFP:</label>
                                 <div class="col-md-6">
                                    <input id="afp" type="text" class="form-control" name="afp" required autofocus>
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                <label for="bdua" class="col-md-4 control-label">
                                    BDUA;</label>
                                 <div class="col-md-6">
                                    <input id="bdua" type="text" class="form-control" name="bdua" required autofocus>

                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
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
                                <input id="primerNombre" type="text" class="form-control" name="primerNombre" value="{{ old('name') }}" required autofocus>

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
                                <input id="primerApellido" type="text" class="form-control" name="primerApellido" value="{{ old('name') }}" required autofocus>

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
                                <input id="cedula" type="text" class="form-control" name="cedula"  required autofocus>
                            </div>

                        </div>
                        

                        <div class="col-sm-6 form-group">

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail:</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                <input id="fechaNacimiento" type="date" class="form-control" name="fechaNacimiento" required>

                            </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="telefono" class="col-md-4 control-label">Teléfono:</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" required>

                            </div>
                        </div>
                        
                        <div class="col-sm-6 form-group">
                            <label for="celular" class="col-md-4 control-label">Celular:</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control" name="celular" required>

                            </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="direccion" class="col-md-4 control-label">Dirección:</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" required>

                            </div>
                        </div>
                        

                        <div class="col-sm-6 form-group">

                            <label for="barrio" class="col-md-4 control-label">Barrio:</label>

                            <div class="col-md-6">
                                <input id="barrio" type="text" class="form-control" name="barrio" required>

                            </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="salario" class="col-md-4 control-label">Salario:</label>
                            <div class="col-md-6">
                                <input id="salario" type="text" class="form-control" name="salario" required>

                            </div>
                        </div>


                        <div class="col-sm-6 form-group">

                            <label for="plan" class="col-md-4 control-label">Plan:</label>
                            <div class="col-md-6">
                                <input id="plan" type="text" class="form-control" name="plan" required>

                            </div>
                        </div>
                        

                        <div class="col-sm-6 form-group">

                            <label for="actividad" class="col-md-4 control-label">Actividad Laboral:</label>
                             <div class="col-md-6">
                                <input id="actividad" type="text" class="form-control" name="actividad" required>

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
                            <label for="beprimerNombre" class="col-md-4 control-label">Nombres:</label>

                            <div class="col-md-6">
                                <input id="beprimerNombre" type="text" class="form-control" name="beprimerNombre"  required autofocus>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="beprimerApellido" class="col-md-4 control-label">Apellidos:</label>

                            <div class="col-md-6">
                                <input id="beprimerApellido" type="text" class="form-control" name="beprimerApellido" value="{{ old('name') }}" required autofocus>

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
                                <label for="pendon" class="col-md-4 control-label"><input type="radio" name="tipoIden" value="0">T.I.</label>

                                <label for="referido" class="col-md-4 control-label"><input type="radio" name="tipoIden" value="1">C.C.</label>

                                <label for="volante" class="col-md-4 control-label"><input type="radio" name="tipoIden" value="2">C.E.</label>

                                <label for="redes" class="col-md-4 control-label"><input type="radio" name="tipoIden" value="3">P.P.</label>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="numIdentificacion" class="col-md-4 control-label">Número De Identificación:</label>

                            <div class="col-md-6">
                                <input id="numIdentificacion" type="text" class="form-control" name="numIdentificacion" required autofocus>
                             </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="tipoIden" class="col-md-4 control-label">
                                Parentezco Familiar:</label>

                             <div class="radio">
                                <label for="pendon" class="col-md-4 control-label"><input type="radio" name="tipoPar" value="0">Hij@</label>

                                <label for="referido" class="col-md-4 control-label"><input type="radio" name="tipoPar" value="1">Padres</label>

                                <label for="volante" class="col-md-4 control-label"><input type="radio" name="tipoPar" value="2">Otro</label>
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
                                <input id="empresa" type="text" class="form-control" name="empresa" required autofocus>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="nit" class="col-md-4 control-label">NIT:</label>
                            <div class="col-md-6">
                                <input id="nit" type="text" class="form-control" name="nit"  required autofocus>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="direccionEmpresa" class="col-md-4 control-label"> Dirección:</label>
                            <div class="col-md-6">
                                <input id="direccionEmpresa" type="text" class="form-control" name="direccionEmpresa"  required autofocus>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                                <label for="correo" class="col-md-4 control-label">E-Mail:</label>

                                <div class="col-md-6">
                                    <input id="correo" type="text" class="form-control" name="correo" value="{{ old('correo') }}" required>

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
                                <input id="empresaTel" type="text" class="form-control" name="empresaTel"  required autofocus>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="empresaCel" class="col-md-4 control-label">Celular:</label>

                            <div class="col-md-6">
                                <input id="empresaCel" type="text" class="form-control" name="empresaCel"  required autofocus>
                            </div>

                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="responsable" class="col-md-4 control-label">Responsable:</label>

                            <div class="col-md-6">
                                <input id="responsable" type="text" class="form-control" name="responsable"  required autofocus>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="observaciones" class="col-md-4 control-label">Observación:</label>

                            <div class="col-md-6">
                                <input id="observaciones" type="text" class="form-control" name="observaciones"  required autofocus>
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

        </form>
    </div>
</div>
@endsection

