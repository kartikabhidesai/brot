<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Model\Users;

class Customer extends Model {

    protected $table = "customer";

    public function addCustomer($request) {

        $findCustomername = Customer::where('email', $request->input('email'))->first();
        if (!empty($findCustomername)) {
            $return['status'] = 'error';
            $return['message'] = 'This Email is already exists';
        } else {
            $bojUser = new Users();
            $bojUser->user_type = "CUSTOMER";
            $bojUser->fname = $request->input('fname');
            $bojUser->lname = $request->input('lname');
            $bojUser->email = $request->input('email');
            $bojUser->mobile = $request->input('mobile');
            $bojUser->password = Hash::make($request->input('password'));
            $bojUser->created_at = date("Y-m-d h:i:s");
            $bojUser->updated_at = date("Y-m-d h:i:s");
            $result = $bojUser->save();
            $lastid = $bojUser->id;
            if ($result) {
                $objCustomer = new Customer();
                $objCustomer->userid = $lastid;
                $objCustomer->fname = $request->input('fname');
                $objCustomer->lname = $request->input('lname');
                $objCustomer->mobile = $request->input('mobile');
                $objCustomer->email = $request->input('email');
                $objCustomer->created_at = date("Y-m-d h:i:s");
                $objCustomer->updated_at = date("Y-m-d h:i:s");
                $result = $objCustomer->save();
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = "Register Successfully!";
                    $return['redirect'] = route('login');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = "Something went wrong!";
                    $return['redirect'] = route('front-register');
                }
            }
        }
        return $return;
    }

    public function getCustomer($userid) {

        $result = Customer::select('*')
                ->where('id', $userid)
                ->get();
        return $result;
    }

}
