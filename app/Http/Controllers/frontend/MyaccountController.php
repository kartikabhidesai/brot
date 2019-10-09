<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyaccountController extends Controller
{
    function __construct() {
        
    }
    public function myaccount(){
        
        
        $data['header'] = array(
            'title' => 'My Account',
            'breadcrumb' => array(
                'Home' => 'home',
                'My Account' =>'myaccount'));
        return view("frontend.pages.myaccount",$data);
    }
}
