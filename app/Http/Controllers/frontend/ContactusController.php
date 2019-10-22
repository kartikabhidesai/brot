<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Model\Cart;
use App\Model\Details;
class ContactusController extends Controller
{
    function __construct() {
        
    }
    public function contactus(Request $request){
        
        $session = $request->session()->all();
        $objDetails = new Details();
        $data['getdetails'] = $objDetails->getdetails();
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
