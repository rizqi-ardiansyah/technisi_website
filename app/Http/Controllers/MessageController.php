<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller {

    public function index(){
        $cust = User::where('id_role', '=', 2)->orderBy('id', 'DESC')->get();
        $tech = User::where('id_role', '=', 3)->orderBy('id', 'DESC')->get();

        if(auth()->user()->id_role == 2){
            return view('message.index', compact('cust'));
        } else if(auth()->user()->id_role == 3){
            return view('message.index', compact('tech'));
        }
    }

    public function show($id){
        if(auth()->user()->id_role > 3){
            abort(404);
        }

        $sender = User::findOrFail($id);

        $users = User::with(['message' => function($query) use ($id){
            $query->where('sender_id', '=', $id)->orWhere('receiver_id', '=', $id);
        }])
        ->where('id_role', '=', 2)
        ->orWhere('id_role', '=', 3)
        ->get();

        return view('livewire.message-show', compact('sender', 'users'));
    }
}
