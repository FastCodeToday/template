<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        /* if  (Gate::denies('show-permissions', $permissions)){

             abort(403, 'Sorry, but no sorry');
         }*/

        return view('profile.index');
    }
}
