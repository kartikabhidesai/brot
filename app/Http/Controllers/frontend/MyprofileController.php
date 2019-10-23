<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use DB;
use Session;
use Illuminate\Http\Request;
use App\Model\Details;
use App\Model\Cart;
use App\Model\Product;
use App\Model\Address;
class MyprofileController extends Controller
{
    //
    function __construct() {
        parent::__construct();
    }
    
    public function index(Request $request){
            $session = $request->session()->all();
            $data['userdetails'] = $items = Session::get('logindata');
            
            
            $userid = $items[0]['id'];
            $objCart = new Cart();
            $data['cart'] = $objCart->getCartitem($items[0]['id']);
            $data['result'] = $objCart->getCartitem($userid);
            
            $objDetails = new Details();
            $data['getdetails'] = $objDetails->getdetails();
            $data['title'] = 'Dashboard | Audible By Aabha';
            $data['css'] = array();
            $data['plugincss'] = array();
            $data['pluginjs'] = array('jquery.validate.min.js');
            $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'myprofile.js');
            $data['funinit'] = array('Myprofile.init()');
            $data['header'] = array(
               'title' => 'Product',
                'breadcrumb' => array(
                'Home' => 'home',
                'My Profile' => 'my-profile'));
            return view("frontend.pages.myprofile.myprofile", $data);
            
            
    }
    
    public function addaddress(Request $request){
            $session = $request->session()->all();
            $data['userdetails'] = $items = Session::get('logindata');
            
            $objAddress = new Address();
            $data['countrylist'] = $objAddress->countrylist();
            $userid = $items[0]['id'];
            $objCart = new Cart();
            $data['cart'] = $objCart->getCartitem($items[0]['id']);
            $data['result'] = $objCart->getCartitem($userid);
            
            $objDetails = new Details();
            $data['getdetails'] = $objDetails->getdetails();
            $data['title'] = 'Add Address | Audible By Aabha';
            $data['css'] = array();
            $data['plugincss'] = array();
            $data['pluginjs'] = array('jquery.validate.min.js');
            $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'myprofile.js');
            $data['funinit'] = array('Myprofile.add()');
            $data['header'] = array(
               'title' => 'Product',
                'breadcrumb' => array(
                'Home' => 'home',
                'My Profile' => 'my-profile',
                'Add Address'=> 'addaddress'));
            return view("frontend.pages.myprofile.addaddress", $data);
            
            
    }
    
    public function editaddress(Request $request,$id){
            $session = $request->session()->all();
            $data['userdetails'] = $items = Session::get('logindata');
            
            
            $userid = $items[0]['id'];
            $objCart = new Cart();
            $data['cart'] = $objCart->getCartitem($items[0]['id']);
            $data['result'] = $objCart->getCartitem($userid);
            
            $objDetails = new Details();
            $data['getdetails'] = $objDetails->getdetails();
            $data['title'] = 'Edit Address | Audible By Aabha';
            $data['css'] = array();
            $data['plugincss'] = array();
            $data['pluginjs'] = array('jquery.validate.min.js');
            $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'myprofile.js');
            $data['funinit'] = array('Myprofile.edit()');
            $data['header'] = array(
               'title' => 'Product',
                'breadcrumb' => array(
                'Home' => 'home',
                'My Profile' => 'my-profile',
                'Edit Address'=> 'editaddress'));
            return view("frontend.pages.myprofile.addaddress", $data);
            
            
    }
    
    
    public function ajaxAction(Request $request){
          $action = $request->input('action');
            switch ($action) {
            case 'changecountry':
                $objAddress = new Address();
                $countrylist = $objAddress->changecountry($request);
                return json_encode($countrylist);
                break;
            
            case 'statechnage':
                $objAddress = new Address();
                $countrylist = $objAddress->statechnage($request);
                return json_encode($countrylist);
                break;

            }
    }
}
