<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function __construct() {
        
    }
    public function product(){
        
        $data['header'] = array(
            'title' => 'Product',
            'breadcrumb' => array(
                'Home' => 'home',
                'Product' => 'product'));
        return view("frontend.pages.product",$data);
    }
}
