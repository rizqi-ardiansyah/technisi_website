<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Http\Response;
use App\Models\User;

class CustomerController extends Controller {

    public function createCust(CustomerRequest $request){

    }

    public function showAll(){
        $cust = Customer::select('cust_id', 'address', 'user_id')->with('user:id,name,email,phone')->get();
        return response()->json(['cust' => $cust]);
    }

    public function showCust($id){
        $cust = Customer::select('cust_id', 'address', 'user_id')->with('user:id,name,email,phone')->where('cust_id', $id)->first();
        return response()->json(['cust' => $cust]);
    }

    public function destroy($id){
        $cust = Customer::select('cust_id')->where('cust_id', $id)->first();
        $user = User::find($cust->user_id);
        $cust->delete();
        $user->delete();
        return response()->json(['message' => 'Customer deleted successfully']);
    }
}
