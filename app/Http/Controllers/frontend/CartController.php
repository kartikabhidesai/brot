<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Model\Cart;
use App\Model\Product;
use App\Model\Product_size;
use App\Model\Details;

class CartController extends Controller {

    function __construct() {
        
    }

    public function cart(Request $request, $id) {
        $session = $request->session()->all();
        $items = Session::get('customerlogindata');
        if (!empty($items)) {
            $userid = $items[0]['id'];

            $objDetails = new Details();
            $data['getdetails'] = $objDetails->getdetails();
            $objCart = new Cart();
            $objCart->AddToCart($id, $userid);
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
        } else {
            $request->session()->push('cart', $id);
            return redirect('login');
        }
    }

    public function cartlist(Request $request) {
        $objDetails = new Details();
        $data['getdetails'] = $objDetails->getdetails();
        $items = Session::get('customerlogindata');
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
                'Home' => 'home',
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

            case 'addtocart':

                $data = $request->input('data');
                $items = Session::get('customerlogindata');
                $userid = $items[0]['id'];
                $quantity = $data['quantity'];
                $id = $data['id'];
                $sizeid = $data['sizeid'];
                $objCart = new Cart();
                $result = $objCart->addtocartnew($userid, $quantity, $id, $sizeid);
                if ($result) {
                    $return['redirect'] = route('cart-list');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Product already in cart';
                }
                return json_encode($return);
                break;

            case 'dashboardaddtocart':

                $items = Session::get('customerlogindata');
                $userid = $items[0]['id'];
                $data = $request->input('data');
                $id = $data['id'];
                $sizeid = $data['sizeid'];
                $data['id'] = $id;
                $data['sizeid'] = $sizeid;
                if (!empty($items)) {
                    $objCart = new Cart();
                    $result = $objCart->dashboardaddtocartnew($userid, $id, $sizeid);
                    if ($result) {
                        $return['redirect'] = route('cart-list');
                    } else {
                        $return['status'] = 'error';
                        $return['message'] = 'Product already in cart';
                    }
                } else {
                    $request->session()->push('cart', $data);
                    $return['redirect'] = 'login';
                }
                return json_encode($return);
                break;

            case 'addquantity':
                $data = $request->input('data');
                $items = Session::get('customerlogindata');
                $userid = $items[0]['id'];
                $objCart = new Cart();
                $result = $objCart->Addquantity($data, $userid);
                if ($result) {
//                    $return['status'] = 'success';
//                    $return['message'] = 'Product Quantity Edited successfully from cart.';
                    $return['redirect'] = route('cart-list');
//                } else {
//                    $return['status'] = 'error';
//                    $return['message'] = 'Soething Wrong';
                }
                return json_encode($return);
                break;
        }
    }

}
