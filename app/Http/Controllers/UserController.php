<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

    public function manageUser() {

        $users = User::paginate(10);
        return view('admin.user.manageUser', ['userDetail' => $users]);
    }

    public function editUser($id) {
//        $users=User::all();
//        $users=User::simplePaginate(10);
        $userById = User::where('id', $id)->first();
        return view('admin.user.editUser', ['userById' => $userById]);
    }

    public function addUser() {

        return view('admin.user.addUser');
    }

    public function storeUser(Request $request) {
        $roles = implode(",", $request->role);
        User::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $roles,
        ]);
        return redirect('/user/add')->with('message', 'User Information Added Successfully');
    }

    public function updateUser(Request $request) {

        $user = User::find($request->userId);
        $roles = implode(",", $request->role);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $roles;
        $user->address = $request->address;
        $user->save();
        return redirect('/user/manage')->with('message', 'User Information Update Successfully');
    }

    public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();
        return redirect('/user/manage')->with('message', 'User Information Delete Successfully');
    }

}
