<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Roles::all();
        return view('admin.role.index', [
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
            $role = new Roles();
            $role->name = $params['RoleName'];
            $role->save();
            return redirect()->route('role.index');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request ,string $id)
    {
        if ($request->isMethod('DELETE')) {
            $role = Roles::find($id);
            $role->delete();
            return redirect()->route('role.index');
        }
    }
}
