<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $table = 'details';
    //
    function __construct() {
        
    }
    
    public function getdetails(){
        $result = Details::select("info","addressline1","addressline2","mobileno","email")
                        ->where("id",1)
                        ->get();
        return $result;
    }
    
    public function editDetails($request){
        $objDetails = Details::find(1);
        $objDetails->addressline1 =  $request->input("addressline1");
        $objDetails->addressline1 =  $request->input("addressline1");
        $objDetails->addressline2 =  $request->input("addressline2");
        $objDetails->mobileno =  $request->input("mobileno");
        $objDetails->email =  $request->input("email");
        $objDetails->updated_at =  date("Y-m-d h:i:s");
        return $objDetails->save();
                    
        
    }
}
