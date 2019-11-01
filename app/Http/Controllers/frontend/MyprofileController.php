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
use App\Model\Order;
use App\Model\Users;
use App\Model\Customer;

class MyprofileController extends Controller {

    //
    function __construct() {
        parent::__construct();
    }

    public function index(Request $request) {
        $session = $request->session()->all();
        $data['userdetails'] = $items = Session::get('logindata');

        $userid = $items[0]['id'];
        $objOrder = new Order();
        $data['order'] = $objOrder->getOrdercustomer($userid);
        $objCart = new Cart();
        $data['cart'] = $objCart->getCartitem($items[0]['id']);
        $data['result'] = $objCart->getCartitem($userid);
        $objAddress = new Address();
        $data['address'] = $objAddress->getAddress($userid);
        $objCustomer = new Customer();
        $data['customer'] = $objCustomer->getCustomerNew($userid);
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

    public function addaddress(Request $request) {
        $session = $request->session()->all();
        $data['userdetails'] = $items = Session::get('logindata');
        $userid = $items[0]['id'];

        if ($request->isMethod('post')) {
            $objAddress = new Address();
            $result = $objAddress->ADDaddress($request, $userid);
            if ($result) {
                $return['status'] = 'success';
                $return['message'] = 'Address created successfully.';
                $return['redirect'] = route('my-profile');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'something wrong.';
            }
            echo json_encode($return);
            exit();
        }
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
                'Add Address' => 'addaddress'));
        return view("frontend.pages.myprofile.addaddress", $data);
    }

    public function editaddress(Request $request, $id) {
        $session = $request->session()->all();
        $data['userdetails'] = $items = Session::get('logindata');
        $userid = $items[0]['id'];

        if ($request->isMethod('post')) {

            $objAddress = new Address();
            $result = $objAddress->editAddress($request, $id, $userid);
            if ($result) {
                $return['status'] = 'success';
                $return['message'] = 'Address Edited successfully.';
                $return['redirect'] = route('my-profile');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'something wrong.';
            }
            echo json_encode($return);
            exit();
        }
        $objCart = new Cart();
        $data['cart'] = $objCart->getCartitem($items[0]['id']);
        $data['result'] = $objCart->getCartitem($userid);
        $objAddress = new Address();
        $data['address'] = $objAddress->getAddressnew($id);
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
                'Edit Address' => 'edit-address'));
        return view("frontend.pages.myprofile.editaddress", $data);
    }

    public function ajaxAction(Request $request) {
        $action = $request->input('action');
        switch ($action) {
            case "deleteaddress":
                $data = $request->input('data');
                $objAddress = new Address();
                $result = $objAddress->deleteAddress($data);
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Address deleted successfully.';
                    $return['redirect'] = route('my-profile');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Addres Not Deleted';
                }

                return json_encode($return);
                break;
        }
    }

    public function updateaccount(request $request) {

        $session = $request->session()->all();
        $items = Session::get('logindata');
        $userid = $items[0]['id'];
        $objCustomer = new Customer();
        $result = $objCustomer->updateCustomer($request, $userid);
        if ($result) {
            $return['status'] = 'success';
            $return['message'] = 'Account Edited Successfully.';
            $return['redirect'] = route('my-profile');
        } else {
            $return['status'] = 'error';
            $return['message'] = 'Account Not Edited';
        }
        return json_encode($return);
    }
    
}
