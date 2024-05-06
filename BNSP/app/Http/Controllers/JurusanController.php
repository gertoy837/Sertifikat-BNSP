<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public $jurusan;
    public function __construct()
    {
        $this->jurusan = new jurusan();
    }
    public function index()
    {
        $data = jurusan::all();
        return view('dashboard.jurusan.index', compact('data'));
    }

    public function create()
    {
        $data = jurusan::all();
        return view('dashboard/jurusan/create', compact('data'));
    }

    public function store(Request $request)
    {
        $rules = [
            'jurusan' => 'required',
        ];
        $message = [
            'required' => ':attribute Tidak boleh kosong!',
        ];
        $this->validate($request, $rules, $message);
        $this->jurusan->jurusan = $request->jurusan;
        $this->jurusan->save();

        return redirect()->route('jurusan.index');
    }

    public function show($jurusan)
    {
        //
    }

    public function edit($id)
    {
        $data = jurusan::findOrFail($id);
        return view('dashboard/jurusan/edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $user = jurusan::findOrFail($id);
        $rules = [
            'jurusan' => 'required',
        ];
        $message = [
            'required' => ':attribute Tidak boleh kosong!',
        ];
        $this->validate($request, $rules, $message);
        $user->jurusan = $request->jurusan;
        if ($user->isDirty()) {
            $user->save();
            return redirect()->route('jurusan.index');
        } else {
            return redirect()->route('jurusan.index');
        }
    }

    public function destroy($id)
    {
        $jurusan = jurusan::find($id);
        $jurusan->delete();
        return back();
    }
}
