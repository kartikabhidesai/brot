<?php

namespace App\Http\Controllers\admin\size;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Size;
use App\Model\Subcategory;
use App\Model\Category;

class SizeController extends Controller
{
    function __construct() {
        
    }
    public function index(){
        
        $objSize = new Size();
        $data['result'] = $objSize->getSize();
        $data['title'] = 'View Size | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'size.js');
        $data['funinit'] = array('Size.init()');
        $data['header'] = array(
            'title' => 'Size List',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Size List' => 'Size-list'));
        return view('admin.pages.size.list', $data);
    }
    public function add(){
         $objSubcategory = new Category();
        $data['result'] = $objSubcategory->getCategory();
        $data['title'] = 'Add Size | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'size.js');
        $data['funinit'] = array('Size.add()');
        $data['header'] = array(
            'title' => 'Size List',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Size List' => 'Size-list'));
        return view('admin.pages.size.add', $data);
    }
    
    
    public function ajaxaction(Request $request){
        $action = $request->input('action');
            switch ($action) {
                case 'changecategory':
                   $objSubcategory = new Subcategory();
                   $result = $objSubcategory->getSubcategorylist($request->input('id'));
                   return json_encode($result);
                    break;
                    
        }
    }
}
