<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //=====Display a listing of the resource=======
    public function index()
    {
        $users = User::all();
        return view('home', compact('users'));
    }

    //==========Show the form for creating a new resource.========
    public function create()
    {
        return view('adduser');
    }

    //==========Store a newly created resource in storage.===========
    public function store(Request $request)
    {
        //=======Validate From=========
        $request->validate([
            'username' => 'required|alpha',
            'useremail' => 'required|email',
            'userage' => 'required|numeric',
            'usercity' => 'required|alpha',
        ]);


        User::Create([
            'name' => $request->username,
            'email' => $request->useremail,
            'age' => $request->userage,
            'city' => $request->usercity

        ]);

        return redirect()->route('users.index')->with('status', 'New User Successfully');
    }

    //===========Display the specified resource.=============
    public function show(string $id)
    {
        $users = User::find($id);
        return view('viewuser', compact('users'));
    }

    //============ Show the form for editing the specified resource.==========
    public function edit(string $id)
    {
        $users = User::find($id);
        return view('updateuser', compact('users'));
    }

    //===========Update the specified resource in storage.===================
    public function update(Request $request, string $id)

    {
        //=======Validate From=========
        $request->validate([
            'username' => 'required|string',
            'useremail' => 'required|email',
            'userage' => 'required|numeric',
            'usercity' => 'required|alpha',
        ]);

        //------------- Second METHOD ---------------

        $user = User::where('id', $id)
            ->update([
                'name' => $request->username,
                'email' => $request->useremail,
                'age' => $request->userage,
                'city' => $request->usercity
            ]);

        return redirect()->route('users.index')->with('status', 'Updata Successfully');
    }

    //=========== Remove the specified resource from storage.===============

    public function destroy(string $id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->route('users.index')->with('status', 'Delete Successfully');
    }
}
