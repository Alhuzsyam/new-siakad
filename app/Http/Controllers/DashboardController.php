<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Kelas;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $role = auth()->user()->role;
        $menu = Menu::all()->where('role', '=', $role);

        $uri = request()->segment(count(request()->segments()));
        return view('dashboard.index', [
            'menu' => $menu,
            'uri' => $uri
        ]);
    }
    public function siswa()
    {
        $kelas = Kelas::all();
        $siswa = User::orderBY('name')->where('role', '=', '0')->Paginate(5);
        $role = auth()->user()->role;
        $menu = Menu::all()->where('role', '=', $role);
        $uri = request()->segment(count(request()->segments()));
        return view('dashboard.siswa', [
            'menu' => $menu,
            'uri' => $uri,
            'siswa' => $siswa,
            'kelas' => $kelas
        ]);
    }
    public function addsiswa(Request $request)
    {
        $reqvalidate = $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'kelas' => 'required',
            'telepon' => 'required',
        ]);

        $reqvalidate['password'] = bcrypt('santri123');


        User::create($reqvalidate);
        return redirect('/siswa')->with('sucess', 'Registration sucessfuly!');
    }
    public function kelas()
    {
        $kelas = Kelas::selectRaw('count(*) as total, kelas.nama')->groupBy('kelas.nama')->join('users', 'users.kelas', '=', 'kelas.nama')->where('role', '=', '0')->paginate(8);
        // $kelas = Kelas::orderBY('nama')->paginate(3);
        $role = auth()->user()->role;
        $menu = Menu::all()->where('role', '=', $role);
        $uri = request()->segment(count(request()->segments()));
        return view('dashboard.kelas', [
            'menu' => $menu,
            'uri' => $uri,
            'kelas' => $kelas
        ]);
    }
    public function addkelas(Request $req)
    {

        $reqvalidate = $req->validate([
            'nama' => 'unique:kelas|required',
        ]);
        Kelas::create($reqvalidate);
        return redirect('/kelas')->with('sucess', 'Registration sucessfuly!');
    }
}
