<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Model\Size;

class Size extends Model
{
     protected $table = 'size';
     public function getSize() {
         
          $result = Size::select('*')
                 ->get();   
       return $result;
     }
}
