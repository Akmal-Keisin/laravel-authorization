<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('pages.roles.index', [
            'roles' => Role::all()
        ]);
    }

    public function create()
    {
        return view('pages.roles.create');
    }

    public function store(StoreRoleRequest $request)
    {
        try {
            Role::create([
                'name' => $request->validated('name'),
            ]);

            return redirect()->route('roles.index')->with([
                'success' => 'Role created successfully'
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'error' => $th->getMessage()
            ]);
        }
    }

    public function edit(Role $role)
    {
        return view('pages.roles.edit', [
            'role' => $role
        ]);
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        try {
            $role->update([
                'name' => $request->validated('name'),
            ]);

            return redirect()->route('roles.index')->with([
                'success' => 'Role updated successfully'
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'error' => $th->getMessage()
            ]);
        }
    }

    public function destroy(Role $role)
    {
        try {
            $role->delete();

            return redirect()->back()->with([
                'success' => 'Role deleted successfully'
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'error' => $th->getMessage()
            ]);
        }
    }
}
