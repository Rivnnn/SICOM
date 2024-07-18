<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.user.index')->with('success', 'User deleted successfully');
    }


    public function edit($id)
    {
        $users = user::find($id);
        $roles = Role::all();
        $data = [
            "user"   => $users,
            "roles"  => $roles
        ];
        return view('admin.user.edit', $data);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email,'. $id],
            // 'old_password' => ['required'],
            'password' => ['nullable', 'confirmed'],
            'password_confirmation' => ['nullable'],
            'role_id' => ['required', 'numeric'],
        ]);

        // $user = User::find($id);
        // $match = Hash::check($request->old_password,$user->password);

        // if($match) {
        //     $user->name = $request->input('name');
        //     $user->email = $request->input('email');
        //     if ($request->input('password')) {
        //         $user->password = Hash::make($request->input('password'));
        //     }
        //     $user->role_id = $request->input('role_id');
        //     $user->save();
        // }
        $user = User::find($id);

    // Update data pengguna
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    if ($request->input('password')) {
        $user->password = Hash::make($request->input('password'));
    }
    $user->role_id = $request->input('role_id');
    $user->save();

        return redirect()->route('admin.user.index')->with('success', 'User berhasil diupdate');
    }

    public function create()
    {
        $roles = Role::all();
        $data = [
            "roles"  => $roles
        ];
        return view('admin.user.create',$data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
            'role_id' => ['required', 'numeric'],
        ]);

        $users = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_id' => $request->input('role_id'),
        ]);

        return redirect()->route('admin.user.index')->with('success', 'User baru berhasil ditambahkan');
    }
    
}
