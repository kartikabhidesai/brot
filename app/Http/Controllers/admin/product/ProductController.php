<?php

namespace App\Http\Controllers\admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;


class ProductController extends Controller
{
    public function __construct() {
        
    }

    public function newproduct(Request $request) {

        if ($request->isMethod('post')) {
           
            $objProduct = new Product();
            $result = $objProduct->addProduct($request);
            if ($result) {
                $return['status'] = 'success';
                $return['message'] = 'Record created successfully.';
                $return['redirect'] = route('Product-List');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'something will be wrong.';
            }
            echo json_encode($return);
            exit;
        }
        $data['title'] = 'New Product | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'product.js');
        $data['funinit'] = array('Product.init()');
        $data['header'] = array(
            'title' => 'Add New Product',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Add New Product' => 'Product'));
        return view('admin.pages.product.newproduct', $data);
    }

    public function viewproduct() {

        $objProduct = new Product();
        $data['result'] = $objProduct->getProduct();
        $data['title'] = 'View Product | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'product.js');
        $data['funinit'] = array('Product.init()');
        $data['header'] = array(
            'title' => 'Product List',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Product List' => 'Product-List'));
        return view('admin.pages.product.viewproduct', $data);
    }

    public function editproduct(Request $request, $id) {
        
        if ($request->isMethod('post')) {
            $objProduct = new Product();
            $result = $objProduct->editProduct($request, $id);
        }
        $data['title'] = 'Edit Product | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('product.js');
        $data['funinit'] = array('Product.init()');
        $data['header'] = array(
            'title' => 'Update Product',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Update Product' => 'Update-Product'));
        $objProduct = new Product();
        $data['result'] = $objProduct->getProductDetail($request, $id);
        return view('admin.pages.product.updateproduct', $data);
    }
    public function category() {
        
        $objProduct = new Product();
        $data['result'] = $objProduct->getProduct();
        $data['title'] = 'category | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'product.js');
        $data['funinit'] = array('Product.init()');
        $data['header'] = array(
            'title' => 'Category',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Category' => 'Category'));
        return view('admin.pages.product.viewproduct', $data);
    }
    public function subcategory() {
        
        $objProduct = new Product();
        $data['result'] = $objProduct->getProduct();
        $data['title'] = 'View Product | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'product.js');
        $data['funinit'] = array('Product.init()');
        $data['header'] = array(
            'title' => 'Sub Category',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Sub Category' => 'Sub Category'));
        return view('admin.pages.product.viewproduct', $data);
    }
    public function size() {
        
        $objProduct = new Product();
        $data['result'] = $objProduct->getProduct();
        $data['title'] = 'size | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'product.js');
        $data['funinit'] = array('Product.init()');
        $data['header'] = array(
            'title' => 'size',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'size' => 'size'));
        return view('admin.pages.product.viewproduct', $data);
    }
    public function productajaxaction(Request $request) {

        $action = $request->input('action');
        switch ($action) {
            case 'deleteProduct':
                $data = $request->input('data');
                $objProduct = new Product();
                $result = $objProduct->deleteProduct($data);
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Record deleted successfully.';
                    $return['redirect'] = route('Product-List');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Record Not Deleted';
                }

                return json_encode($return);
                break;
            case 'deleteDemo':
                $result = $this->deleteDemo($request->input('data'));
                break;
        }
    }
}
