<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class AdminController extends Controller
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
        return view('admin/home');
    }

    public function listClients() 
    {
        $users = DB::table('users')->get();

        $contrats = DB::table('users')
            ->join('contrats', 'users.id', '=', 'contrats.user_id')
            ->get();
            
        return view('admin/client', [
            'users' => $users,
            'contrats'=>$contrats
        ]);
    }
    
    public function listRoles() 
    {
        $roles = DB::table('roles')->get();

        return view('admin/role', [
            'roles' => $roles
        ]);
    }
    
    public function listTypes() 
    {
        $types = DB::table('types')->get();
            
        return view('admin/type', [
            'types' => $types,
        ]);
    }
    
}