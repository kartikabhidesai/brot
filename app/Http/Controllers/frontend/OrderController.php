<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\OrderDetails;
use App\Model\Order;
use App\Model\Cart;
use Session;
use DB;
use App\Model\Details;

class OrderController extends Controller
{
    function __construct() {

        $this->middleware('customer');
    }
    public function myorder() {
        $objDetails = new Details();
        $data['getdetails'] = $objDetails->getdetails();
        $items = Session::get('logindata');
        $userid = $items[0]['id'];
        $objOrder = new Order();
        $data['order'] = $objOrder->getOrder();
        $objCart = new Cart();
        $data['cart'] = $objCart->getCartitem($userid);
        $data['title'] = 'Brot | My Order';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'checkout.js');
        $data['funinit'] = array('Checkout.init()');
        $data['header'] = array(
            'title' => 'My Order',
            'breadcrumb' => array(
                'My Order' => 'myorder'));
        return view("frontend.pages.myorder.myorder", $data);
    }
}
