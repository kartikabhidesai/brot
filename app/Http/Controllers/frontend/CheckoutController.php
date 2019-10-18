<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Model\Cart;
use DB;
use App\Model\Checkout;
use App\Model\Customer;

class CheckoutController extends Controller
{
    function __construct() {
        
        $this->middleware('customer');
    }
    public function checkout(Request $request){
        
        if($request->isMethod('post')){
            
        }
        $items = Session::get('logindata');
        $userid = $items[0]['id'];
        $objCustomer= new Customer();
        $data['customer'] = $objCustomer->getCustomer($userid);
        $objCart = new Cart();
        $data['cart'] = $objCart->getCartitem($userid);
        $objCheckout = new Checkout();
        $data['country'] = $objCheckout->getCountry();
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
        return view("frontend.pages.checkout.checkout",$data);
    }
    function ajaxaction(Request $request) {
        $action = $request->input('action');
        switch ($action) {
            case 'getstate':
                $data = $request->input('data');
                $objCheckout = new Checkout();
                $return = $objCheckout->getState($data);
                return json_encode($return);
                break;
        case 'getcity':
            $data = $request->input('data');
            $objCheckout = new Checkout();
            $return = $objCheckout->getCity($data);
            return json_encode($return);
            break;
        }
    }
}
