<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $data['title'] = 'Data User';
        $data['q'] = $request->q;
        $data['rows'] = User::where('name', 'like', '%' . $request->q . '%')->get();
        return view('admin.index', $data);
    }

    public function create(Request $request)
    {
        $data['title'] = 'Tambah User';
        $data['roles'] = ['admin' => 'Admin', 'user' => 'User'];
        return view('admin.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect('admin')->with('success', 'Tambah Data Berhasil');
    }

    public function show(User $user)
    {
    }

    public function edit(User $admin)
    {
        $data['title'] = 'Ubah User';
        $data['row'] = $admin;
        $data['roles'] = ['admin' => 'Admin', 'user' => 'User'];
        return view('admin.edit', $data);
    }

    public function update(Request $request, User $admin)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        $admin->name = $request->name;
        $admin->email = $request->email;
        if ($request->password)
            $admin->password = Hash::make($request->password);
        $admin->role = $request->role;
        $admin->save();
        return redirect('admin')->with('success', 'Ubah Data Berhasil');
    }

    public function destroy(User $admin)
    {
        $admin->delete();
        return redirect('admin')->with('success', 'Hapus Data Berhasil');
    }
}
