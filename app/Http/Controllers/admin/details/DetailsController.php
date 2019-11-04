<?php

namespace App\Http\Controllers\admin\details;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Details;
class DetailsController extends Controller
{
    //
    function __construct() {
        parent::__construct();
        $this->middleware('admin');
    }
    
    public function index(Request $request){
        $objDetails = new Details();
        $data['details'] = $objDetails->getdetails();
        if($request->isMethod('post')){
           
           $objDetails = new Details();
           $result = $objDetails->editDetails($request);
           if ($result) {
                $return['status'] = 'success';
                $return['message'] = 'Details updated successfully.';
                $return['redirect'] = route('details');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'Category already exist.';
            }
            echo json_encode($return);
            exit;
        }
        $data['title'] = 'Audible By Aabha | Details';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'details.js');
        $data['funinit'] = array('Details.init()');
        $data['header'] = array(
            'title' => 'Details',
            'breadcrumb' => array(
                'Details' => 'Details'));
        return view("admin.pages.details.details", $data);
    }
}
