<?php

namespace App\Http\Controllers;

use App\Ship;
use App\UserShip;
use Illuminate\Http\Request;

class UserShipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.ships.index', [
            'ships' => Ship::all(),
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserShip $userShip
     * @return \Illuminate\Http\Response
     */
    public function show(UserShip $userShip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserShip $userShip
     * @return \Illuminate\Http\Response
     */
    public function edit(UserShip $userShip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\UserShip $userShip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserShip $userShip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserShip $userShip
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserShip $userShip)
    {
        //
    }
}
