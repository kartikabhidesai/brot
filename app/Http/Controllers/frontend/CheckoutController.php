<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Model\Cart;
use DB;
use App\Model\Customer;
use App\Model\OrderDetails;
use App\Model\Order;
use App\Model\SendSMS;
use App\Model\Details;
use App\Model\Product_size;

class CheckoutController extends Controller {

    function __construct() {

        $this->middleware('customer');
    }

    public function checkout(Request $request) {

        $items = Session::get('customerlogindata');
        $userid = $items[0]['id'];
        if ($request->isMethod('post')) {
            $objDetails = new Details();
            $data['getdetails'] = $objDetails->getdetails();
            $objCart = new Cart();
            $cart = $objCart->getCartDetails($userid);
            $objOrderdetails = new OrderDetails();
            $result = $objOrderdetails->createOrder($request, $cart);
            if ($result) {
                $objCart = new Cart();
                $cart = $objCart->deleteOrder($userid);
                $return['status'] = 'success';
                $return['message'] = 'Thanks for Ordering.';
                $return['redirect'] = route('myorder');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'Something Wrong';
            }
            return json_encode($return);
            exit;
        }
        $objCustomer = new Customer();
        $data['customer'] = $objCustomer->getCustomer($userid);
        $objCart = new Cart();
        $data['cart'] = $objCart->getCartitem($userid);
        $data['title'] = 'Brot | Checkout';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'checkout.js');
        $data['funinit'] = array('Checkout.init()');
        $data['header'] = array(
            'title' => 'Checkout',
            'breadcrumb' => array(
                'Checkout' => 'checkout'));
        return view("frontend.pages.checkout.checkout", $data);
    }

}
