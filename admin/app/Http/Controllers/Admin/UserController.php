<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }
    public function update($id, Request $request){
        $request->validate([
            'first_name' => 'required'
        ]);
        $user = User::findOrFail($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->save();
        // $user->profile_photo_path = $request->profile_photo_path;
        return redirect()->route('admin.user.index');
    }
    public function pass_update($id, Request $request){
        $request->validate([
            'password' => 'required'
        ]);
        $user = User::findOrFail($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.user.index');
    }
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
