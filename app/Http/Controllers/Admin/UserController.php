<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function allUsers(){
        $users=User::all();
        return view('admin.users.all-users',compact('users'));
        
    }
    public function createUser(){
        return view('admin.users.create-user');
        
    }
    public function storeUser(Request $request){
        
        $validated=$request->validate([
         'name'=>'required|string|max:255',
         'email'=>'required|string|email|max:255|unique:users',
         'phone'=>'required|max:255|unique:users',
         'address'=>'string|max:255',
         'password'=>'required|string|min:8|confirmed',

        ]);
      $user=User::create($validated);
      if($request->has('verify')){
        $user->markEmailAsVerified();
      }
      return to_route('all-users');
        
    }
    public function deleteUser($id){
      $user=User::find($id);
      $user->delete();
      return response()->json(['status'=>'category deleted successfully']);


  }

  public function editUser(User $user){
        
    return view('admin.users.edit-user',compact('user'));

 }
 public function updateUser(Request $request,User $user)
 {
    
     
     if ($request->get('password') == '' || $request->get('password_confirmation') == '') {
      $user->update($request->except(['password','password_confirmation']));
  } else {
    $user->name = $request['name'];
    $user->email = $request['email'];
    $user->name = $request['phone'];
    $user->name = $request['address'];
    $user->password = $request['password'];
  }

    $user->update();
  if($request->has('verify')){
    $user->markEmailAsVerified();
  }
     Session::flash('statuscode', 'success');

     return redirect('admin/all-users')->with('status', 'Data Update.');

 }
}
