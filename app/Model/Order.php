<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Order extends Model {

    protected $table = "order";
    public function getOrder(){
        
        $result = Order::select('product.productname','product_image.image','product.price','product.description','order.orderid','order.quantity','order.status')
                ->join('product','product.id','=','order.productid')
                ->join('product_image','product_image.productid','=','product.id')
                ->get();
        return $result;
    }
}
