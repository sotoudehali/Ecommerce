<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function allPermissions(){
        $permissions=Permission::all();
        return view('admin.permissions.all-permission',compact('permissions'));
    }
    public function createPermission(){
       
        return view('admin.permissions.create-permission');
    }
    public function storePermission(Request $request){
        $data=$request->validate([
            'name'=>'required|string',
            'label'=>'nullable|string',
        
           ]);
        $permission=Permission::create($data);
        return to_route('all-permissions')->with('status', 'Data Saved.');

    }
    public function deletePermission($id){
        $user=Permission::find($id);
        $user->delete();
        return response()->json(['status'=>'Permission deleted successfully']);
  
  
    }

}
