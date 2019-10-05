<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Auth;
use App;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $loginUser;
    public function __construct() {

        $this->middleware(function ($request, $next) {
            if (!empty(Auth()->guard('admin')->user())) {
                $this->loginUser = Auth()->guard('admin')->user();
            }
            return $next($request);
        });
        
        
    }
}
