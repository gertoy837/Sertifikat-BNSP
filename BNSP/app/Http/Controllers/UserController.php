<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\jurusan;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $user;
    public function __construct()
    {
        $this->user = new User();
    }
    public function index()
    {
        $data = User::with('jurusan')->get();
        return view('dashboard.akun.index', compact('data'));
    }

    public function create()
    {
        $data = User::all();
        $jur = jurusan::all();
        return view('dashboard/akun/create', compact('data', 'jur'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'jurusan_id' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ];
        $message = [
            'required' => ':attribute tidak boleh kosong!',
        ];
        $this->validate($request, $rules, $message);
        $this->user->name = $request->name;
        $this->user->username = $request->username;
        $this->user->email = $request->email;
        $this->user->jurusan_id = $request->jurusan_id;
        $this->user->password = $request->password;

        $this->user->save();

        return redirect()->route('index');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        $data = User::findOrFail($id);
        $jur = jurusan::all();
        return view('dashboard/akun/edit', compact('data', 'jur'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->jurusan_id = $request->jurusan_id;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        if ($user->isDirty()) {
            $user->save();
            return redirect()->route('index');
        } else {
            return redirect()->route('index');
        }
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }
}
