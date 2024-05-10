<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Response;

class Login extends Controller
{
    public function login(){
        return view("login");
    }

    public function home(){
        return view("home");
    }
    /**
     * Display a listing of the resource.
     */
    public function index() // read
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // create
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
