<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();

        $contrats = DB::table('users')
            ->join('contrats', 'users.id', '=', 'contrats.client_id')
            ->get();

        return view('admin/client', [
            'users' => $users,
            'contrats' => $contrats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $user=DB::table('users')
        ->where('id', $request->id)
        ->first();
        $contrats = DB::table('users')
        ->where('users.id', $request->id)
            ->join('contrats', 'contrats.users_id', 'users.id')
            ->get();
        //    return $contrats;
        return view('admin/detail', [
            'user' => $user,
            'contrats' => $contrats,
        ]);
        // return  DB::table('users')
        // ->where('users.id', $request->id)
        //     ->join('contrats', 'contrats.users_id', 'users.id')
        //     ->select('contrats.*')
        //     ->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id, Request $request)
    // {
    //     $user = DB::table('users')->where('id', $request->id)->first();
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $user = DB::table('users')
        //     ->where('id', $request->id)
        //     ->update(['active' => ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
