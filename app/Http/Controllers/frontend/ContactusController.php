<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Model\Cart;

class ContactusController extends Controller
{
    function __construct() {
        
    }
    public function contactus(Request $request){
        
        $session = $request->session()->all();
        $items = Session::get('logindata');
        $objCart = new Cart();
        $data['cart'] = $objCart->getCartitem($items[0]['id']);
        $data['header'] = array(
            'title' => 'Contact Us',
            'breadcrumb' => array(
                'Home' => 'home',
                'Contact Us' => 'contactus'));
        return view("frontend.pages.contactus.contactus",$data);
    }
}
