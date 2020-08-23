<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Contrat;
use App\User;


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
        $user = User::where('id', $session_id)->first();
        $contrats = Contrat::get();
        // $contrats = Contrat::where('users_id', $session_id)
        //     // ->join('users', 'contrats.id', '=', 'contrats.users_id')

        //     ->get();
        // return $contrats;
        // $devis = DB::table('')

        return view('home', [
            'user' => $user,
            'contrats' => $contrats,
        ]);
        // return view('home');
    }
    public function show(Request $request)
    {
        $session_id = Auth::user()->id;
        if ($request->type == 'auto') {
            $tupe = 'autos';
            # code...
        };
        if ($request->type == 'santé') {
            $tupe = 'santes';
            # code...
        };
        if ($request->type == 'habitation') {
            $tupe = 'habitations';
            # code...
        };
        $contrats = DB::table('contrats')->where('type', $request->type)
            ->join($tupe, $tupe . '.contrats_id', 'contrats.id')
            ->first();
        // return $tupe . '.contrats_id';
        return view('detail_contrat', [
            'contrats' => $contrats,

        ]);
    }
}
