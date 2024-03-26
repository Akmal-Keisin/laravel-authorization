<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        return view('pages.permissions.index', [
            'permissions' => Permission::all()
        ]);
    }

    public function create()
    {
        return view('pages.permissions.create');
    }

    public function store(StorePermissionRequest $request)
    {
        try {
            Permission::create([
                'name' => $request->validated('name'),
            ]);

            return redirect()->route('permissions.index')->with([
                'success' => 'Permission created successfully'
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'error' => $th->getMessage()
            ]);
        }
    }

    public function edit(Permission $permission)
    {
        return view('pages.permissions.edit', [
            'permission' => $permission
        ]);
    }

    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        try {
            $permission->update([
                'name' => $request->validated('name'),
            ]);

            return redirect()->route('permissions.index')->with([
                'success' => 'Permission updated successfully'
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'error' => $th->getMessage()
            ]);
        }
    }

    public function destroy(Permission $permission)
    {
        try {
            $permission->delete();

            return redirect()->back()->with([
                'success' => 'Permssion deleted successfully'
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'error' => $th->getMessage()
            ]);
        }
    }
}
