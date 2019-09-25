<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct() {
        
    }
    public function dashboard(){
        
        return view("frontend.pages.dashboard");
    }
}
