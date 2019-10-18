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
        if(!empty($items))
        {
            $userid = $items[0]['id'];
            $objCart = new Cart();
            $objCart->AddToCart($id, $userid);
            $data['cart'] = $objCart->getCartitem($items[0]['id']);
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
        }else{
           
            $request->session()->push('cart', $id);
            return redirect('login');
        }
        
    }

    public function cartlist(Request $request) {

        $items = Session::get('logindata');
        $userid = $items[0]['id'];
        $objCart = new Cart();
        $data['cart'] = $objCart->getCartitem($userid);
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
                
            case 'addquantity':
                $data = $request->input('data');
                $objCart = new Cart();
                $items = Session::get('logindata');
                $userid = $items[0]['id'];
                $result = $objCart->Addquantity($data,$userid);
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Product Quantity Edited successfully from cart.';
                    $return['redirect'] = route('cart-list');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Soething Wrong';
                }

                return json_encode($return);
                break;
        }
    }

}
