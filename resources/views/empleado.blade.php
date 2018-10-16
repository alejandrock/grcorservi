@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">

        <form class="form-horizontal" method="POST" action="{{ url('mail') }}">
                        {{ csrf_field() }}  
          

            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-primary">
                    <div class="panel-heading">DATOS PERSONALES</div>
                        <div class="panel-body">
                        
                            <div class="col-sm-6 form-group">
                                
                                <label for="primerNombre" class="col-md-4 control-label">Nombres:</label>
                                <div class="col-md-6">
                                    <input id="primerNombre" type="text" class="form-control" name="primerNombre" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <label for="email" class="col-md-4 control-label">E-Mail:</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <label for="descripcion" class="col-md-4 control-label">Descripción:</label>

                                    <div class="col-md-6">
                                        <input id="descripcion" type="textarea" class="form-control" name="descripcion" value="{{ old('email') }}" required>

                                    </div>

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

