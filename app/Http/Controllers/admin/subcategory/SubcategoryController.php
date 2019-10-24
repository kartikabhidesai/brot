<?php

namespace App\Http\Controllers\admin\subcategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Subcategory;
use App\Model\Category;

class SubcategoryController extends Controller
{
    function __construct() {
        
    }
    
    public function index(){
     
        $objSubcategory = new Subcategory();
        $data['result'] = $objSubcategory->getSubcategory();
        $data['title'] = 'Sub Category List | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'subcategory.js');
        $data['funinit'] = array('Subcategory.init()');
        $data['header'] = array(
            'title' => 'Sub Category List',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Sub category List' => 'Sub category List'));
        return view('admin.pages.subcategory.list', $data);
    }
    
    public function add(Request $request){
        
        if ($request->isMethod('post')) {
           
            $objSubcategory = new Subcategory();
            $result = $objSubcategory->addSubcategory($request);
            echo json_encode($result); exit;
        }
        $data['title'] = 'New Sub category | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'subcategory.js');
        $data['funinit'] = array('Subcategory.add()');
        $data['header'] = array(
            'title' => 'Add New Sub category',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Add New Sub category' => 'Add-subcategory'));
        $objSubcategory = new Category();
        $data['result'] = $objSubcategory->getCategory();
        return view('admin.pages.subcategory.addsubcategory', $data);
    }
    public function editsubcategory(Request $request, $id){
        
        if ($request->isMethod('post')) {
            
            $objSubcategory = new Subcategory();
            $result = $objSubcategory->editSubcategory($request, $id);
            echo json_encode($result);
            exit;
        }
        $data['title'] = 'Edit Sub Category | Brot';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'subcategory.js');
        $data['funinit'] = array('Subcategory.edit()');
        $data['header'] = array(
            'title' => 'Update Sub Category',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Update Sub Category' => 'edit-subcategory'));
        $objcategory = new Category();
        $data['result1'] = $objcategory->getCategory();
        $objSubcategory = new Subcategory();
        $data['result'] = $objSubcategory->getSubcategoryDetail($request, $id);
        $data['id'] = $id;
        return view('admin.pages.subcategory.updatesubcategory', $data);
    }
    
    public function ajaxaction(Request $request){
         $action = $request->input('action');
            switch ($action) {
                case 'deleteSubcategory':
                    $data = $request->input('data');
                    $objSubCategory = new Subcategory();
                    $result = $objSubCategory->deleteCategory($data);  
                    if ($result) {
                        $return['status'] = 'success';
                        $return['message'] = 'Subcategory deleted successfully.';
                        $return['redirect'] = route('subcategory-list');
                    } else {
                        $return['status'] = 'error';
                        $return['message'] = 'Subcategory Not Deleted';
                    }

                    return json_encode($return);
                    break;
            
        }
    }
}
