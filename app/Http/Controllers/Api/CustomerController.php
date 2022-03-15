<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Http\Response;
use App\Models\User;

class CustomerController extends Controller {

    public function showAll(){
        $cust = Customer::join('users', 'users.id', '=', 'customer.user_id')->get()->paginate(5);
        return response()->json(['cust' => $cust]);
    }

    public function showCust($id){
        $cust = Customer::join('users', 'users.id', '=', 'customer.user_id')->where('cust_id', $id)->first();
        return response()->json(['cust' => $cust]);
    }


}
