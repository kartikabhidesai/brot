<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use Session;
use App\Model\Cart;
use App\Model\Details;
use App\Model\Slider;
use App\Model\Product_size;

class DashboardController extends Controller
{
    function __construct() {
        
    }
    public function dashboard(Request $request){
        
        $objSlider = new Slider();
        $data['getSlider'] = $objSlider->getSlider();
        
        
        $objDetails = new Details();
        $data['getdetails'] = $objDetails->getdetails();
        
        $objProduct = new Product();
        $data['result'] = $objProduct->getProduct();
        $session = $request->session()->all();
        $items = Session::get('customerlogindata');
        $objCart = new Cart();
        $data['cart'] = $objCart->getCartitem($items[0]['id']);
        $data['title'] = 'Dashboard | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'dashboard.js');
        $data['funinit'] = array('Dashboard.init()');
        
        return view("frontend.pages.dashboard.dashboard",$data);
    }
}