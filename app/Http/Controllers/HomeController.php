<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $role = auth()->user()->role;
        $menu = Menu::all()->where('role', '=', $role);
        $uri = request()->segment(count(request()->segments()));
        return view('layouts.main', [
            'menu' => $menu,
            'uri' => $uri
        ]);
    }
}
