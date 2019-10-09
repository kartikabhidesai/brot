<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;

class DashboardController extends Controller
{
    function __construct() {
        
    }
    public function dashboard(){
        
        $objProduct = new Product();
        $data['result'] = $objProduct->getProduct();
        $data['title'] = 'Dashboard | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'dashboard.js');
        $data['funinit'] = array('Dashboard.init()');
        $data['header'] = array(
            'title' => 'HOME',
            'breadcrumb' => array(
                'Home' => 'home'));
        return view("frontend.pages.dashboard",$data);
    }
    public function login(){
        
        $data['header'] = array(
            'title' => 'HOME',
            'breadcrumb' => array(
                'Home' => 'home'));
        return view("frontend.pages.login",$data);
    }
    public function checkout(){
        
        $data['header'] = array(
            'title' => 'Checkout',
            'breadcrumb' => array(
                'Checkout' => 'checkout'));
        return view("frontend.pages.checkout",$data);
    }
    public function cart(){
        
        $objProduct = new Product();
        $data['result'] = $objProduct->getProduct();
        $data['title'] = 'Dashboard | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'cart.js');
        $data['funinit'] = array('Cart.init()');
        $data['header'] = array(
            'title' => 'Cart',
            'breadcrumb' => array(
                'Cart' => 'cart'));
        return view("frontend.pages.cart",$data);
    }
}
