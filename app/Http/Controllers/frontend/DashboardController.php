<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use Session;
use App\Model\Cart;
use App\Model\Details;

class DashboardController extends Controller
{
    function __construct() {
        
    }
    public function dashboard(Request $request){
        
        $objDetails = new Details();
        $data['getdetails'] = $objDetails->getdetails();
        $objProduct = new Product();
        $data['result'] = $objProduct->getProduct();
        $data['men'] = $objProduct->getcollection(1);
        $data['women'] = $objProduct->getcollection(2);
        $data['kids'] = $objProduct->getcollection(3);
        $session = $request->session()->all();
        $items = Session::get('logindata');
        $objCart = new Cart();
        $data['cart'] = $objCart->getCartitem($items[0]['id']);
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
        return view("frontend.pages.dashboard.dashboard",$data);
    }
}