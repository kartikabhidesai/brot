<?php

namespace App\Http\Controllers\admin\subcategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    //
    function __construct() {
        
    }
    
    public function index(){
     
        $data['title'] = 'Sub-Category List | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'subcategory.js');
        $data['funinit'] = array('Subcategory.add()');
        $data['header'] = array(
            'title' => 'Sub-Category List',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Sub-category List' => 'Sub-category List'));
        return view('admin.pages.subcategory.list', $data);
    }
    
    public function add(){
        print_r("HELL");
    }
}
