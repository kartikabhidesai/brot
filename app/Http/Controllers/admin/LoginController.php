<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Users;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Redirect;
use Auth;
use Session;

class LoginController extends Controller
{
    protected $redirectTo = '/';
    public function __construct() {
//        parent::__construct();
//        $this->middleware('admin');
    }
    public function login(Request $request) {
        
        if (Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'user_type' => 'ADMIN'])) {

            $loginData = array(
                'fname' => Auth::guard('admin')->user()->fname,
                'lname' => Auth::guard('admin')->user()->lname,
                'mobile' => Auth::guard('admin')->user()->mobile,
                'email' => Auth::guard('admin')->user()->email,
                'id' => Auth::guard('admin')->user()->id,
                'user_type' => Auth::guard('admin')->user()->user_type,
            );
            Session::push('logindata', $loginData);
           
            return redirect('dashboard');
        } 
//        else if (Auth::guard('agencies')->attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'user_type' => 'AGENCIES'])) {
//
//            $loginData = array(
//                'fname' => Auth::guard('agencies')->user()->fname,
//                'lname' => Auth::guard('agencies')->user()->lname,
//                'mobile' => Auth::guard('agencies')->user()->mobile,
//                'email' => Auth::guard('agencies')->user()->email,
//                'id' => Auth::guard('agencies')->user()->id,
//                'user_type' => Auth::guard('agencies')->user()->user_type,
//            );
//            Session::push('logindata', $loginData);
//            return redirect('agencies-dashboard');
//        } else if (Auth::guard('user')->attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'user_type' => 'USER'])) {
//            
//           $loginData = array(
//                'fname' => Auth::guard('user')->user()->fname,
//                'lname' => Auth::guard('user')->user()->lname,
//                'mobile' => Auth::guard('user')->user()->mobile,
//                'email' => Auth::guard('user')->user()->email,
//                'id' => Auth::guard('user')->user()->id,
//                'user_type' => Auth::guard('user')->user()->user_type,
//            );
//            Session::push('logindata', $loginData);
//            return redirect('user-dashboard');
//        }
        $data['title'] = 'Brot | Login';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('login.js');
        $data['funinit'] = array('Login.init()');
        return view('admin.pages.loginpage', $data);
    }

    public function register(Request $request) {

        if ($request->isMethod('post')) {

            $bojUser = new Users();
            $bojUser = $bojUser->addUsers($request);
            if ($bojUser) {
                $return['status'] = 'success';
                $return['message'] = "Agency added Successfully!";
                $return['redirect'] = route('admin-login');
            } else {
                $return['status'] = 'error';
                $return['message'] = "Something went wrong!";
                $return['redirect'] = route('register');
            }

            echo json_encode($return);
            exit();
        }
        $data['title'] = 'register | holding';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('login.js');
        $data['funinit'] = array('Login.init()');
        return view('admin.pages.register', $data);
    }

    public function forgotpassword() {

        $data['title'] = 'forgotpassword | holding';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array('login.js');
        $data['funinit'] = array('Login.fpassword()');
        return view('admin.pages.forgotpassword', $data);
    }

    public function logout(Request $request) {
        $this->resetGuard();
        return redirect()->route('admin-login');
    }

    public function resetGuard() {
        Auth::logout();
        Auth::guard('admin')->logout();
        Auth::guard('user')->logout();
        Session::forget('logindata');
    }
}
