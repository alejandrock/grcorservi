
@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Empleado</div>
                    @if (session('success'))
                        <div class="flash-message">
                            <div class="alert alert-success">
                                El Empleado, ha sido registrado correctamente en el sistema.
                            </div>
                        </div>      
                    @endif
                    @if (session('warning'))
                        <div class="flash-message">
                            <div class="alert alert-warning"">
                                El Empleado, ya se encuentra registrado en el sistema.</div>
                        </div>      
                    @endif

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action={{ route('crearEmpleado') }}>
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombres:</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                                <label for="apellido" class="col-md-4 control-label">Apellidos:</label>

                                <div class="col-md-6">
                                    <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autofocus>

                                    @if ($errors->has('apellido'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('apellido') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                                <label for="cedula" class="col-md-4 control-label">Número De Cédula:</label>

                                <div class="col-md-6">
                                    <input id="cedula" class="form-control" name="cedula" value="{{ old('cedula') }}" required>

                                    @if ($errors->has('cedula'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cedula') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
     
                                {!! Form::label('cargo', 'Cargo A Desempeñar:', ['class' => 'col-md-4 control-label']) !!} 

                                <div class="col-md-6">
                                    {!! Form::select('cargo', $cargos, array('id'=>'cargo', 'required' => true)) !!} 
                                </div> 

                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                       

                            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                <label for="direccion" class="col-md-4 control-label">Dirección:</label>

                                <div class="col-md-6">
                                    <input id="direccion" type="direccion" class="form-control" name="direccion" value="{{ old('direccion') }}" required>

                                    @if ($errors->has('direccion'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('direccion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
                                <label for="celular" class="col-md-4 control-label">Número De Celular:</label>

                                <div class="col-md-6">
                                    <input id="celular" class="form-control" name="celular" value="{{ old('celular') }}" required>

                                    @if ($errors->has('celular'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('celular') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('fijo') ? ' has-error' : '' }}">
                                <label for="fijo" class="col-md-4 control-label">Teléfono Fijo:</label>

                                <div class="col-md-6">
                                    <input id="fijo" type="fijo" class="form-control" name="fijo" value="{{ old('fijo') }}" required>

                                    @if ($errors->has('fijo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fijo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                          <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
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

