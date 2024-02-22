<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id,$name){
        // return ("$id and $name");
        return view('profil')
            ->with('user', $id)
            ->with('nama', $name);
    }
}
