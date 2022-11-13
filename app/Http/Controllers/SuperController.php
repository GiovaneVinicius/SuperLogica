<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

//use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;


class SuperController extends Controller
{  
    public function cadastro(Request $request) {

        DB::table('users')->insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'zipcode' => $request->zipcode,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/');
    }
    public function home() {
        $users = DB::table('users')->get();
        return view('home', ['users' => $users]);
    }
    public function exercicio2() {
        return view('exercicio2');
    }
    public function exercicio3() {
        $query = DB::table('usuario')
        ->leftJoin('info', 'usuario.cpf', '=', 'info.cpf')
        ->get();
        return view('exercicio3', ['query' => $query]);
    }
}
