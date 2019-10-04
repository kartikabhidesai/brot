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
<<<<<<< HEAD
=======

>>>>>>> 52c451f30ef3bc81c83ff0122a41770b61163467
    public function __construct() {

        $this->middleware(function ($request, $next) {
            if (!empty(Auth()->guard('admin')->user())) {
                $this->loginUser = Auth()->guard('admin')->user();
            }
            return $next($request);
        });
<<<<<<< HEAD
        
        
=======
>>>>>>> 52c451f30ef3bc81c83ff0122a41770b61163467
    }
}
