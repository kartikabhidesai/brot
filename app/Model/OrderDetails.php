<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Model\Order;

class OrderDetails extends Model {

    protected $table = "order_detail";

    public function createOrder($request, $cart) {
                     
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        $orderid = substr(str_shuffle($data), 0, 6);
        $objOrderdetails = new OrderDetails();
        $objOrderdetails->orderid = $orderid;
        $objOrderdetails->firstname = $request->input('fname');
        $objOrderdetails->lastname = $request->input('lname');
        $objOrderdetails->mobile = $request->input('mobile');
        $objOrderdetails->country = $request->input('country');
        $objOrderdetails->state = $request->input('state');
        $objOrderdetails->city = $request->input('city');
        $objOrderdetails->pincode = $request->input('pincode');
        $objOrderdetails->appartment = $request->input('appartment');
        $objOrderdetails->street = $request->input('street');
        $objOrderdetails->address = $request->input('address');
        $objOrderdetails->created_at = date("Y-m-d h:i:s");
        $objOrderdetails->updated_at = date("Y-m-d h:i:s");
        $result = $objOrderdetails->save();
        if ($result) {
            for ($i = 0; $i < count($cart); $i++) {
                $objOrder = new Order();
                $objOrder->orderid = $orderid;
                $objOrder->productid = $cart[$i]->productid;
                $objOrder->userid = $cart[$i]->userid;
                $objOrder->quantity = $cart[$i]->quantity;
                $objOrder->created_at = date("Y-m-d h:i:s");
                $objOrder->updated_at = date("Y-m-d h:i:s");
                $result = $objOrder->save();
            }
        }
        return $result;
    }

}
