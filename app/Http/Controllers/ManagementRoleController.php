<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class ManagementRoleController extends Controller
{
    public function index()
    {
        $roles = Role::paginate(10);
        return view('pages.management-role.index', compact('roles'));
    }

    public function create()
    {
        return view('pages.management-role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:50|unique:roles,name',
            'display_name' => 'required|string|max:100',
            'description'  => 'nullable|string',
        ]);

        Role::create($request->all());

        return redirect()->route('management-role.index')
                         ->with('success', 'Role berhasil ditambahkan');
    }

    public function edit(Role $management_role)
    {
        return view('pages.management-role.edit', compact('management_role'));
    }

    public function update(Request $request, Role $management_role)
    {
        $request->validate([
            'name'         => 'required|string|max:50|unique:roles,name,' . $management_role->id,
            'display_name' => 'required|string|max:100',
            'description'  => 'nullable|string',
        ]);

        $management_role->update($request->all());

        return redirect()->route('management-role.index')
                         ->with('success', 'Role berhasil diupdate');
    }

    public function destroy(Role $management_role)
    {
        $management_role->delete();

        return redirect()->route('management-role.index')
                         ->with('success', 'Role berhasil dihapus');
    }
}
