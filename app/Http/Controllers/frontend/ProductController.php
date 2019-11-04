<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;  
use Session;
use App\Model\Cart;
use App\Model\Details;
use App\Model\Product_size;

class ProductController extends Controller
{
    function __construct() {
        
    }
    public function product(Request $request, $id = NULL){
        
        $session = $request->session()->all();
        $items = Session::get('customerlogindata');
        $objDetails = new Details();
        $data['getdetails'] = $objDetails->getdetails();
        
        $objCart = new Cart();
        $data['cart'] = $objCart->getCartitem($items[0]['id']);
        $objProduct = new Product();
        $data['result'] = $objProduct->getProduct($id);
        $data['cat_sub_cat'] = $objProduct->getCatSubCategory();
        $data['title'] = 'Product | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'dashboard.js');
        $data['funinit'] = array('Dashboard.init()');
        $data['header'] = array(
            'title' => 'Product',
            'breadcrumb' => array(
                'Home' => 'home',
                'Product' => 'product'));
        return view("frontend.pages.product.product",$data);
    }
    public function productdetails(Request $request, $id){
        $objDetails = new Details();
        $data['getdetails'] = $objDetails->getdetails();
        
        $objProduct = new Product();
        $data['result'] = $objProduct->getProductdetailsNew($id);
        $objSize =  new Product_size();
        $data['sizeid'] = $objSize->productsizeid($id);
        $session = $request->session()->all();
        $items = Session::get('customerlogindata');
        $objCart = new Cart();
        $data['cart'] = $objCart->getCartitem($items[0]['id']);
        $data['title'] = 'Product Details | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'product.js');
        $data['funinit'] = array('Product.init()');
        $data['header'] = array(
            'title' => 'Product Details',
            'breadcrumb' => array(
                'Home' => 'home',
                'Product Details' => 'product-details'));
        return view("frontend.pages.product.productdetails",$data);
    }
}
