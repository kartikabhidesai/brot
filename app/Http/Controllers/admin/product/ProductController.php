<?php

namespace App\Http\Controllers\admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Subcategory;
use App\Model\Category;
use App\Model\Size;

class ProductController extends Controller
{
    function __construct() {
        
    }
    public function index(){
        
//        $objProduct = new Product();
//        $data['result'] = $objProduct->getProduct();
        $data['title'] = 'Product List | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'product.js');
        $data['funinit'] = array('Product.init()');
        $data['header'] = array(
            'title' => 'Product List',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Product List' => 'product-list'));
        return view('admin.pages.product.list', $data);
    }
    public function add(Request $request){
        
        if($request->isMethod('post')){
            
            $objProduct = new Product();
            $data['result'] = $objProduct->addProduct();
        }
        $objSubcategory = new Category();
        $data['result'] = $objSubcategory->getCategory();
        $data['title'] = 'Add Product | Brot';
        $data['css'] = array();
        $data['plugincss'] = array('select2/css/select2.css','select2/css/select2-bootstrap.min.css');
        $data['pluginjs'] = array('plugins/select2/js/select2.js','pages/select2/select2-init.js');
        $data['js'] = array('jquery.validate.min.js','ajaxfileupload.js', 'jquery.form.min.js', 'product.js');
        $data['funinit'] = array('Product.add()');
        $data['header'] = array(
            'title' => 'Add Product',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Add Product' => 'Add-product'));
        return view('admin.pages.product.add',$data);
    }
    public function ajaxaction(Request $request){
        $action = $request->input('action');
            switch ($action) {
                case 'changecategory':
                   $objSubcategory = new Subcategory();
                   $result = $objSubcategory->getSubcategorylist($request->input('id'));
                   return json_encode($result);
                    break;
                case 'changesize':
                   $objSize = new Size();
                   $result = $objSize->getSizelist($request->input('id'));
                   return json_encode($result);
                   break;
            }
    }
}
