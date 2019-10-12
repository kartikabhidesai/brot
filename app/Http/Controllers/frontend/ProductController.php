<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;          

class ProductController extends Controller
{
    function __construct() {
        
    }
    public function product(){
        
        $objProduct = new Product();
        $data['result'] = $objProduct->getProduct();
        $data['title'] = 'Product | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'product.js');
        $data['funinit'] = array('Product.init()');
        $data['header'] = array(
            'title' => 'Product',
            'breadcrumb' => array(
                'Home' => 'home',
                'Product' => 'product'));
        return view("frontend.pages.product.product",$data);
    }
}
