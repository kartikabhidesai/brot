<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Model\Cart;
use App\Model\Product;

class CartController extends Controller {

    function __construct() {

        $this->middleware('customer');
    }

    public function cart(Request $request, $id) {

        $session = $request->session()->all();
        $items = Session::get('logindata');
        $userid = $items[0]['id'];
        $objCart = new Cart();
        $objCart->AddToCart($id, $userid);
        $data['result'] = $objCart->getCartitem($userid);
        $data['title'] = 'Cart | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'cart.js');
        $data['funinit'] = array('Cart.init()');
        $data['header'] = array(
            'title' => 'Cart',
            'breadcrumb' => array(
                'Cart' => 'cart'));
        return view("frontend.pages.cart.cart", $data);
    }

    public function cartlist(Request $request) {

        $items = Session::get('logindata');
        $userid = $items[0]['id'];
        $objCart = new Cart();
        $data['result'] = $objCart->getCartitem($userid);
        $data['title'] = 'Cart | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'cart.js');
        $data['funinit'] = array('Cart.init()');
        $data['header'] = array(
            'title' => 'Cart',
            'breadcrumb' => array(
                'Cart' => 'cart'));
        return view("frontend.pages.cart.cart", $data);
    }

    function ajaxaction(Request $request) {
        $action = $request->input('action');
        switch ($action) {
            case 'deleteProduct':
                $data = $request->input('data');
                $objCart = new Cart();
                $result = $objCart->deleteProduct($data);
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Product Delete successfully from cart.';
                    $return['redirect'] = route('cart-list');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Product Not Remove';
                }

                return json_encode($return);
                break;
        }
    }

}
