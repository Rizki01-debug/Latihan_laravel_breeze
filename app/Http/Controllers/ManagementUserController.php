<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ManagementUserRequest;
use Illuminate\Support\Facades\Hash;

class ManagementUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $users = User::with('role')->paginate(10);
    return view('pages.management-user.index', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $roles = \App\Models\Role::all();
    return view('pages.management-user.create', compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ManagementUserRequest $request)
    {
    User::create([
        'username' => $request->username,
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role_id' => $request->role_id,
    ]);

    return redirect()->route('management-user.index')->with('success', 'User berhasil ditambahkan');
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
    $user = User::findOrFail($id);
    $roles = \App\Models\Role::all();
    return view('pages.management-user.edit', compact('user', 'roles'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $user = User::findOrFail($id);

    $request->validate([
        'username' => 'required|string|max:50|unique:users,username,'.$user->id,
        'name' => 'required|string|max:100',
        'email' => 'required|email|unique:users,email,'.$user->id,
        'role_id' => 'required|exists:roles,id',
    ]);

    $data = $request->only(['username', 'name', 'email', 'role_id']);
    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->password);
    }

    $user->update($data);

    return redirect()->route('management-user.index')->with('success', 'User berhasil diperbarui');
    }   


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('management-user.index')->with('success', 'User berhasil dihapus');
    }

}
