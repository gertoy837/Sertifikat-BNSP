<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class AboutController extends Controller
{
    public function index($id)
    {
        $data = User::FindOrFail($id);
        return view('user/profile', compact('data'));
    }

    public function home()
    {
        return view('user/index');
    }

    public function about()
    {
        return view('user/about');
    }
}
