<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller {

    public function index(){
        $cust = User::where('id_role', '=', 2)->orderBy('id', 'DESC')->get();
        $tech = User::where('id_role', '=', 3)->orderBy('id', 'DESC')->get();
        $messages = Message::where('receiver', auth()->id())->orderBy('msg_id', 'DESC')->get();
        if(auth()->user()->id_role == 2 || auth()->user()->id_role == 3){
            return view('livewire.message-index', [
                'cust' => $cust,
                'message' => $messages,
                'tech' => $tech,
                'title' => 'Message'
            ]);
        }
    }

    public function show($id){
        if(auth()->user()->id_role > 3){
            abort(404);
        }

        $sender = User::findOrFail($id);

        if (auth()->user()->id_role == 2 || auth()->user()->id_role == 3) {
            $message = Message::where('user_id', auth()->id())->orWhere('receiver', auth()->id())->orderBy('id', 'DESC')->get();
        }

        $users = User::with(['message' => function($query) use ($id){
            $query->where('sender_id', '=', $id)->orWhere('receiver_id', '=', $id);
        }])
        ->where('id_role', '=', 2)
        ->orWhere('id_role', '=', 3)
        ->get();

        return view('livewire.message-show', [
            'message' => $message,
            'sender' => $sender,
            'users' => $users
        ]);
    }
}
