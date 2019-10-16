<?php

namespace App\Http\Controllers\admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Subcategory;
use App\Model\Category;
use App\Model\Size;
use App\Model\Product_image;
use App\Model\Product_size;

class ProductController extends Controller {

    function __construct() {
        
    }

    public function index() {

        $objProduct = new Product();
        $data['result'] = $objProduct->getProduct();
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

    public function add(Request $request) {

        if ($request->isMethod('post')) {

            $objProduct = new Product();
            $result = $objProduct->addProduct($request);
            echo json_encode($result);
            exit;
        }
        $objSubcategory = new Category();
        $data['result'] = $objSubcategory->getCategory();
        $data['title'] = 'Add Product | Brot';
        $data['css'] = array();
        $data['plugincss'] = array('select2/css/select2.css', 'select2/css/select2-bootstrap.min.css');
        $data['pluginjs'] = array('plugins/select2/js/select2.js', 'pages/select2/select2-init.js');
        $data['js'] = array('jquery.validate.min.js', 'ajaxfileupload.js', 'jquery.form.min.js', 'product.js');
        $data['funinit'] = array('Product.add()');
        $data['header'] = array(
            'title' => 'Add Product',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Add Product' => 'Add-product'));
        return view('admin.pages.product.add', $data);
    }

    public function edit(Request $request, $id) {
        if ($request->isMethod('post')) {

            $objProduct = new Product();
            $result = $objProduct->editproduct($request, $id);
            echo json_encode($result);
            exit;
        }
        $objSubcategory = new Category();
        $data['category'] = $objSubcategory->getCategory();
        $objProduct = new Product();
        $data['product'] = $objProduct->getProductdetails($id);
        $objProductimage = new Product_image;
        $data['image'] = $objProductimage->getProductimage($id);
        $objSubcategory = new Subcategory();
        $data['subcategory'] = $objSubcategory->getSubcategorylist($data['product'][0]->catagory);
        $objSize = new Product_size();
        $data['size'] = $objSize->getproductSizeDetailsNew($id);
        $data['title'] = 'Edit Product | Brot';
        $data['css'] = array();
        $data['plugincss'] = array('select2/css/select2.css', 'select2/css/select2-bootstrap.min.css');
        $data['pluginjs'] = array('jquery.validate.min.js', 'plugins/select2/js/select2.js', 'pages/select2/select2-init.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'product.js');
        $data['funinit'] = array('Product.edit()');
        $data['header'] = array(
            'title' => 'Edit Product',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Edit-Product' => 'product-list'));
        return view('admin.pages.product.edit', $data);
    }

    function ajaxaction(Request $request) {
        $action = $request->input('action');
        switch ($action) {
            case 'changecategory':
                $objSubcategory = new Subcategory();
                $result = $objSubcategory->getSubcategorylist($request->input('id'));
                return json_encode($result);
                break;
            case 'changesize':
                $objSize = new Size();
                $result = $objSize->getSizelist($request);
                return json_encode($result);
                break;
            case 'deleteProduct':
                $data = $request->input('data');
                $objProduct = new Product();
                $result = $objProduct->deleteProduct($data);
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Product deleted successfully.';
                    $return['redirect'] = route('product-list');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Product Not Deleted';
                }

                return json_encode($return);
                break;
        }
    }

}
