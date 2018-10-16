<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;
use View;
use App\Permission;
use Redirect;
use DB;


class RoleController extends Controller
{
    
    public function index(){

     
        $roles= Role::all(); 
        return View::make('admin.role.index', compact('roles'));

    }

    public function create(){

        $permissions=Permission::all();
        return View::make('admin.role.create', compact('permissions'));
    }

    public function store(Request $request){

        $data = $request->all();

        $role = new Role;
        $role->name = $data['name'];
        $role->display_name = $data['display_name'];
        $role->description = $data['description'];

        if (!($role->save())) {

            DB::rollBack();

        }        

        
        foreach ($request->permission as $key => $value) {

            $role->attachPermission($value);
        }
        return $this->index();
    }

    public function edit($id){

        $role = Role::find($id);
        $permissions= Permission::all();


        $role_permissions = $role->permissions->pluck('id')->toArray();

        return View::make('admin.role.edit', compact('role', 'permissions', 'role_permissions'));
    }


    public function update(Request $request){

        $data = $request->all();
        $role = Role::find($data['editRole']);
        $role->name =  $data['name'];
        $role->display_name =  $data['display_name'];
        $role->description =  $data['description'];
        if(!($role->save())){
            DB::rollBack();
        }

        DB::table('permission_role')->where('role_id', $data['editRole'])->delete();
        
        foreach ($data['permissions'] as $permission) {

            $role->attachPermission($permission);
        }

        return $this->index();
    }

     public function delete($id){

        $role = Role::find($id);
        $role->delete();
        return $this->index();
    }
}
