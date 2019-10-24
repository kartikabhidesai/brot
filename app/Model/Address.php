<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Address extends Model {

    protected $table = 'address';

    public function ADDaddress($request, $userid) {

        $objAddress = new Address();
        $objAddress->userid = $userid;
        $objAddress->type = $request->input('addresstype');
        $objAddress->houseno = $request->input('houseno');
        $objAddress->line1 = $request->input('addressline1');
        $objAddress->line2 = $request->input('addressline2');
        $objAddress->country = $request->input('country');
        $objAddress->state = $request->input('state');
        $objAddress->city = $request->input('city');
        $objAddress->pincode = $request->input('pincode');
        $objAddress->mobileno = $request->input('mobileno');
        $objAddress->altmobileno = $request->input('altmobileno');
        $objAddress->email = $request->input('email');
        $objAddress->created_at = date("Y-m-d h:i:s");
        $objAddress->updated_at = date("Y-m-d h:i:s");
        return $objAddress->save();
    }

    public function getAddress($userid) {

        $result = Address::select('type', 'houseno', 'line1', 'line2', 'country', 'state', 'city', 'pincode', 'mobileno', 'altmobileno', 'email', 'id')
                ->where('userid', $userid)
                ->get();
        return $result;
    }

    public function getAddressnew($id) {

        $result = Address::select('type', 'houseno', 'line1', 'line2', 'country', 'state', 'city', 'pincode', 'mobileno', 'altmobileno', 'email', 'id')
                ->where('id', $id)
                ->get();
        return $result;
    }

    public function editAddress($request, $id, $userid) {
        
        $findaddress = Address::where('id', $id)->delete();
        if($findaddress){
            $objAddress = new Address();
            $objAddress->userid = $userid;
            $objAddress->type = $request->input('addresstype');
            $objAddress->houseno = $request->input('houseno');
            $objAddress->line1 = $request->input('addressline1');
            $objAddress->line2 = $request->input('addressline2');
            $objAddress->country = $request->input('country');
            $objAddress->state = $request->input('state');
            $objAddress->city = $request->input('city');
            $objAddress->pincode = $request->input('pincode');
            $objAddress->mobileno = $request->input('mobileno');
            $objAddress->altmobileno = $request->input('altmobileno');
            $objAddress->email = $request->input('email');
            $objAddress->updated_at = date("Y-m-d h:i:s");
            return $objAddress->save();
        }else{
            return false;
        }
    }

    public function deleteAddress($data){

        $result = DB::table('address')->where('id', $data['id'])->delete();
        return $result;
    }
}
