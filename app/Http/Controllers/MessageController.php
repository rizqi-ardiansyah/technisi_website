<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller {

    public function index(){
        $cust = User::where('id_role', '=', 2)->orderBy('id', 'DESC')->get();
        $tech = User::where('id_role', '=', 3)->orderBy('id', 'DESC')->get();

        return view('message.index', compact('cust', 'tech'));
    }

    public function show($id){

    }
}
