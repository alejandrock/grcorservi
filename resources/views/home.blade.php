@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center><div class="panel-heading">BIENVENIDO</div></center>
                <div class="panel-body">

                    @if(Auth::check())

                        <div class="col-xs-12 col-sm-6 col-md-3">

                            <div class="panel panel-primary">

                                <a href="{{ url('afiliacion') }}">

                                    <div class="panel-heading">

                                        <div class="row">

                                            <div class="col-xs-2">

                                                    <i class="fa fa-id-card fa-5x" aria-hidden="true"></i>

                                            </div>

                                            <div class="col-xs-10 text-right">

                                                <div>Afiliación</div>

                                            </div>

                                        </div>

                                    </div>

                                </a>

                            </div>

                        </div>


                        <div class="col-xs-12 col-sm-6 col-md-3">

                            <div class="panel panel-primary">

                                <a href="{{'incapacidad'}}">

                                    <div class="panel-heading">

                                        <div class="row">

                                            <div class="col-xs-2">

                                                <i class="fa fa-user-md fa-5x" aria-hidden="true"></i>

                                            </div>

                                            <div class="col-xs-10 text-right">

                                                <div>Incapacidad</div>

                                            </div>


                                        </div>

                                    </div>

                                </a>

                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">

                            <div class="panel panel-primary">

                                <a href="#">

                                    <div class="panel-heading">

                                        <div class="row">

                                            <div class="col-xs-2">
                                                <i class="fa fa-users fa-5x" aria-hidden="true"></i>


                                            </div>

                                            <div class="col-xs-10 text-right">

                                                <div>Usuarios</div>

                                            </div>
                                            

                                        </div>

                                    </div>

                                </a>

                            </div>

                        </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
