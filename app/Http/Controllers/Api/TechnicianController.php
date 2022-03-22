<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Message;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\TechnicianRequest;
use App\Models\Technician;

class TechnicianController extends Controller {
    public function showAll(){
        $tech = Technician::select('technician_id', 'specialist_id', 'user_id', 'certification', 'address', 'photos')
        ->join('specialization', 'specialization.id_specialist', '=', 'specialist_id')
        ->with('user:id,name,email,phone')
        ->get();
        return response()->json(['data' => $tech]);
    }

    public function showTech($id){
        $tech = Technician::select('technician_id', 'specialist_id', 'user_id', 'certification', 'address', 'photos')
        ->with('user:id,name,email,phone')
        ->with('specialization:id_specialist,category')
        ->where('technician_id', $id)
        ->first();
        return response()->json(['tech' => $tech]);
    }

    public function destroy($id){
        $tech = Technician::where('technician_id', '=', $id)->first();
        $user = User::where('id', '=', $tech->technician_id)->delete();

        return response()->json(['message' => 'Succesfully delete data']);
    }

    public function updateTech(TechnicianRequest $request, UserRequest $req, $id){
        $request->validated();
        //$req->validated();
        $tech = Technician::where('cust_id', $id)->first();
        $id_ = $tech->user_id;
        $user = User::select('id', 'name', 'email', 'username', 'phone')->where('id', $tech->user_id)->first();

        if($request->hasFile('photos')){
            $path = 'assets/image/tech'.$tech->photos;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('photos');
            $ext = $file->getClientOriginalExtension();
            $img_name = time().'.'.$ext;
            $file->move('assets/image/tech', $img_name);
            $tech->photos = $img_name;
        }
        $tech->certification = $request->certification;
        $tech->address = $request->address;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->username = $req->username;
        $user->phone = $req->phone;
        $tech->save();
        $user->update();
        return response()->json(["Message"   => "Technician has successfully update"]);
    }
}
