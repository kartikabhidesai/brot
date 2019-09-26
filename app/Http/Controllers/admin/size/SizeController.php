<?php

namespace App\Http\Controllers\admin\size;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Size;

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
}
