@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Rol</div>
                    
                    <div class="panel-body">

                        <form action= {{ route('update_role', $role->id) }} method="post">
                            
                            <input type="hidden" value="{{$role->id}}" name="editRole">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">name Del Rol:</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $role->name }} " required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="display_name" class="col-md-4 control-label">name A Mostrar:</label>

                                <div class="col-md-6">
                                    <input id="display_name" type="text" class="form-control" name="display_name" value="{{ $role->display_name }}" required autofocus>

                                </div>
                            </div>

                            <label for="description" class="col-md-4 control-label">Descripción:</label>
                            <div class="col-md-6">
                                 <textarea rows="4" name="description" id="description" cols="72">{{ $role->description }}</textarea>
                            </div>

                            @foreach($permissions as $permission)

                                <div class="col-md-6">

                                    <label for="permisos" class="col-md-4 control-label">{{ $permission->name}}:</label>
                                    <input type="checkbox" {{ in_array($permission->id,$role_permissions)?"checked":""}} name="permissions[]" 
                                    value="{{$permission->id}}">
                                </div>

                            @endforeach
                        

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

