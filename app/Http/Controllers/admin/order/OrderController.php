<?php

namespace App\Http\Controllers\admin\order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\Order;

class OrderController extends Controller {

    function __construct() {
        
    }

    public function order() {

        $objOrder = new Order();
        $data['order'] = $objOrder->getOrdernew();
        $data['title'] = 'Brot | Order';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'order.js');
        $data['funinit'] = array('Order.init()');
        $data['header'] = array(
            'title' => 'Order List',
            'breadcrumb' => array(
                'Dashboard' => 'dashboard',
                'Order' => 'order'));
        return view("admin.pages.order.order", $data);
    }

    public function ajaxaction(Request $request) {

        $orderid = $request->input('data');
        $action = $request->input('action');
        switch ($action) {
            case 'updatestatus':
                $orderid = $request->input('data');
                $objOrder = new Order();
                $result = $objOrder->changestatusOrder($orderid);
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Order Confirm successfully';
                    $return['redirect'] = route('order');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Order Not Confirm';
                }

                return json_encode($return);
                break;
                
            case 'confirmstatus':
                $orderid = $request->input('data');
                $objOrder = new Order();
                $result = $objOrder->confirmStatus($orderid);
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Order Is Ready For Delevery...';
                    $return['redirect'] = route('order');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'Order Not Confirm For Delevery';
                }

                return json_encode($return);
                break;
        }
    }
}
    