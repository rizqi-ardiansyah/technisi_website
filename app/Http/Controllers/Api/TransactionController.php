<?php

namespace App\Http\Controllers\Api;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller {

    public function showAll(){
        $data = Transaction::select('trans_id', 'level',
        'desc', 'price', 'status', 'customer_id', 'id_technician')
        ->with('customer:cust_id,user_id')
        ->with('technician:technician_id,user_id')
        ->get();

        return response()->json(['data' => $data]);
    }

    public function showTrans($id){
        $data = Transaction::select('trans_id', 'level',
        'desc', 'price', 'status', 'customer_id', 'id_technician')
        ->with('customer:cust_id,user_id')
        ->with('technician:technician_id,user_id')
        ->where('trans_id', $id)->first();

        return response()->json(['data' => $data]);
    }

    public function destroy($id){
        $cust = Transaction::where('trans_id', '=', $id)->delete();
        return response()->json(['message' => 'Succesfully delete data']);
    }

    public function updateTrans(){

    }
}
