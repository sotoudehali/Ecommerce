<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function allRoles(){
        $roles=Role::all();
        return view('admin.Roles.all-role',compact('roles'));
    }
    public function createRole(){
       $permissions=Permission::all();
        return view('admin.roles.create-role',compact('permissions'));
    }
    public function storeRole(Request $request){
        $data=$request->validate([
            'name'=>'required|string',
            'label'=>'nullable|string',
            'permissions'=>'required'
        
           ]);
        $role=Role::create($data);
        $role->permissions()->sync($data['permissions']);
        return to_route('all-roles')->with('status', 'Data Saved.');

    }
    public function deleteRole($id){
        $role=Role::find($id);
        $role->delete();
        return response()->json(['status'=>'Role deleted successfully']);
  
  
    }
}
