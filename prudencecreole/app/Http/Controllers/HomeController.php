<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session_id = Auth::user()->id;
        $user = DB::table('users')
            ->where('id', $session_id)
            ->first();
        $contrats = DB::table('contrats')
            ->where('contrats.users_id', $session_id)
            // ->join('contrats', 'contrats.users_id', 'users.id')
            ->Join('santes', 'contrats.users_id', '=', 'santes.users_id')
            ->get();
        // return $contrats;
        // $devis = DB::table('')

        return view('home', [
            'user' => $user,
            'contrats' => $contrats,
        ]);
        // return view('home');
    }
}
