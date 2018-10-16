@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Rol</div>
                    
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action={{ route('rol_store') }}>
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">name Del Rol:</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"  required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="display_name" class="col-md-4 control-label">name A Mostrar:</label>

                                <div class="col-md-6">
                                    <input id="display_name" type="text" class="form-control" name="display_name"  required autofocus>

                                </div>
                            </div>

                            <label for="description" class="col-md-4 control-label">Descripción:</label>
                            <div class="col-md-6">
                                 <textarea rows="4" name="description" id="description" cols="72">

                                </textarea>
                            </div>

                            <label for="permisos" class="col-md-4 control-label">Permisos:</label>
                            <div class="col-md-6">
                                @foreach($permissions as $permission)
                                    <input type="checkbox" class="form-control" name="permission[]" id="permission" value="{{$permission->id}}"> {{$permission->name}}
                                @endforeach
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Crear Rol
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

