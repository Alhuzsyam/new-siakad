<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role;
        $menu = Menu::all()->where('role', '=', $role);
        return view('profile.index', [
            'menu' => $menu,
        ]);
    }
}
