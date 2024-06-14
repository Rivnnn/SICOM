<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            "user" => User::all(),
        ];

        return view('user.index', $data);
    }
    public function destroy()
    {
      
    }

    public function create()
    {
        return view('user.create');
    }

    public function edit($id)
    {
        return view('user.edit');
    }

    public function store()
    {
       
    }

    public function update()
    {
        return view('user.update');
    }
}
