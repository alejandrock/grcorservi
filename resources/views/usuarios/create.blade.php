@extends('layouts.app')
@section('content')
   
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Usuario</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="loginAttempt">
                            {{ csrf_field() }}

                            <div class="form-group">

                                {!! Form::label('empleado', 'Usuario Del Empleado:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::select('empleado', $empleados, array('id'=>'empleado', 'required' => true)) !!}
                                </div> 

                            </div>

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="col-md-4 control-label">Username:</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username">

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('fijo') ? ' has-error' : '' }}">
                                <label for="descripcion" class="col-md-4 control-label">Descripción:</label>
                                <div class="col-md-6">
                                    <textarea rows="4" name="descripcion" id="descripcion" cols="72">

                                    </textarea>

                                    @if ($errors->has('descripcion'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('descripcion') }}</strong>
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

