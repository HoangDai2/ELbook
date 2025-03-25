<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Roles;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('role')->get();
        return view('admin.user.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Roles::get();
        return view('admin.user.create', [
            'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            User::create([
                'name'=> $params['name'],
                'email'=> $params['email'],
                'password'=> $params['password'],
                'phoneNumber'=> $params['phoneNumber'],
                'address'=> $params['address'],
                'dateOfBirth'=> $params['dateOfBirth'],
                'role_id'=> $params['role'],
            ]);
        }
        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Roles::get();

        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User not found');
        }
        return view('admin.user.update', [
            'user' => $user,
            'roles' => $roles,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->isMethod('PUT')) {
            $params  = $request->except('_token','_method');
            $user = User::findOrFail($id);
            $user->update($params);
            return redirect()->route('user.index')->with('success', 'User updated successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        if($request->isMethod('DELETE'))
        {
            $user = User::find($id);
            $user->delete();
            return redirect()->route('user.index')->with('success', 'User deleted successfully');
        }
    }
}
