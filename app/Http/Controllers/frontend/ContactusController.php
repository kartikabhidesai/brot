<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    function __construct() {
        
    }
    public function contactus(){
        
        $data['header'] = array(
            'title' => 'Contact Us',
            'breadcrumb' => array(
                'Home' => 'home',
                'Contact Us' => 'contactus'));
        return view("frontend.pages.contactus.contactus",$data);
    }
}
