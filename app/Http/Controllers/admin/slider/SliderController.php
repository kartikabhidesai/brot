<?php

namespace App\Http\Controllers\admin\slider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Slider;
class SliderController extends Controller
{
    //
    function __construct() {
        parent::__construct();
        $this->middleware('admin');
    }
    
    public function index(Request $request){
        
            $data['title'] = 'Audible By Aabha | Slider';
            $data['css'] = array();
            $data['plugincss'] = array('datatables/plugins/bootstrap/dataTables.bootstrap4.min.css');
            $data['pluginjs'] = array('jquery.validate.min.js');
            $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'slider.js','plugins/datatables/jquery.dataTables.min.js','plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js');
            $data['funinit'] = array('Slider.init()');
            $data['header'] = array(
                'title' => 'Silder List',
                'breadcrumb' => array(
                    'Slider List' => 'Slider List'));
            return view("admin.pages.slider.slider", $data); 
    }
    
    public function add(Request $request){
            
            if($request->isMethod('post')){
               $objSilder = new Slider();
               $result = $objSilder->addSlider($request);
               if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Slider image successfully added.';
                    $return['redirect'] = route('slider');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong';
                }
                echo json_encode($return);
                exit;
            }
            $data['title'] = 'Audible By Aabha | Add New Slider';
            $data['css'] = array();
            $data['plugincss'] = array();
            $data['pluginjs'] = array('jquery.validate.min.js');
            $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'slider.js');
            $data['funinit'] = array('Slider.add()');
            $data['header'] = array(
                'title' => 'Add New Silder',
                'breadcrumb' => array(
                    'Slider List' => 'slider',
                    'Add Slider' => 'Add New Slider'));
            return view("admin.pages.slider.add", $data); 
    }
    
    public function edit(Request $request,$id){
            $objSilder = new Slider();
            $data['silderdetails'] = $objSilder->silderdetails($id);
            if($request->isMethod('post')){
               $objSilder = new Slider();
               $result = $objSilder->editSlider($request);
               if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Slider image successfully edited.';
                    $return['redirect'] = route('slider');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong';
                }
                echo json_encode($return);
                exit;
            }
            $data['title'] = 'Audible By Aabha | Edit Slider';
            $data['css'] = array();
            $data['plugincss'] = array();
            $data['pluginjs'] = array('jquery.validate.min.js');
            $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'slider.js');
            $data['funinit'] = array('Slider.edit()');
            $data['header'] = array(
                'title' => 'Edit Silder',
                'breadcrumb' => array(
                    'Slider List' => 'slider',
                    'Edit Slider' => 'Edit Slider'));
            return view("admin.pages.slider.edit", $data); 
    }
    
    public function ajaxAction(Request $request){
          $action = $request->input('action');

        switch ($action) {
            case 'getdatatable':
                $objSlider = new Slider();
                $list = $objSlider->getdatatable();
                echo json_encode($list);
                break;
            case 'deleteslider':
                $objSlider = new Slider();
                $result = $objSlider->deleteslider($request);
                
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Slider image successfully deleted.';
                    $return['redirect'] = route('slider');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Something goes to wrong';
                }
                echo json_encode($return);
                break;
        }
    }
}
