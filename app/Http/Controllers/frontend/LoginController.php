<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\Customer;
use Redirect;
use Session;

class LoginController extends Controller {

    protected $redirectTo = '/';

    function __construct() {
        
    }

    public function login(Request $request) {
        if ($request->isMethod('post')) {
            if (Auth::guard('customer')->attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'user_type' => 'CUSTOMER'])) {
                $loginData = array(
                    'fname' => Auth::guard('customer')->user()->fname,
                    'lname' => Auth::guard('customer')->user()->lname,
                    'mobile' => Auth::guard('customer')->user()->mobile,
                    'email' => Auth::guard('customer')->user()->email,
                    'id' => Auth::guard('customer')->user()->id,
                    'user_type' => Auth::guard('customer')->user()->user_type,
                );
                Session::push('logindata', $loginData);
                $return['status'] = 'success';
                $return['message'] = "Well Done login Successfully!";
                $return['redirect'] = route('front-dashboard');
            } else {
                $return['status'] = 'error';
                $return['message'] = "Invaild Id Or Password";
            }
            echo json_encode($return);
            exit();
        }
        $data['title'] = 'Brot Customer | Login';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js','login.js');
        $data['funinit'] = array('Login.add()');
        $data['header'] = array(
            'title' => 'Login',
            'breadcrumb' => array(
                'login' => 'login'));
        return view('frontend.pages.login.login', $data);
    }

    public function register(Request $request) {

        if ($request->isMethod('post')) {

            $objCustomer = new Customer();
            $result = $objCustomer->addCustomer($request);
            if ($result) {
                $return['status'] = 'success';
                $return['message'] = "Register Successfully!";
                $return['redirect'] = route('login');
            } else {
                $return['status'] = 'error';
                $return['message'] = "Something went wrong!";
                $return['redirect'] = route('front-register');
            }

            echo json_encode($return);
            exit();
        }
        $data['title'] = 'Brot Customer | Login';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js','login.js');
        $data['funinit'] = array('Login.init()');
        $data['header'] = array(
            'title' => 'Register',
            'breadcrumb' => array(
                'Register' => 'register'));
        return view("frontend.pages.login.register", $data);
    }
}
