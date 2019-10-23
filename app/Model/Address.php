<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
class Address extends Model
{
    //
     protected $table = 'address';
    public function countrylist(){
        $result = DB::table('countries')->get();
        return $result;
        
    }
    
    public function changecountry($request){
//        print_r($request->input());
//        die();
        $result = DB::table('states')
                ->where('country_id',$request->input('id'))
                ->get();
        
        return $result;
    }
    public function statechnage($request){
//        print_r($request->input());
//        die();
        $result = DB::table('cities')
                ->where('state_id',$request->input('id'))
                ->get();
        
        return $result;
    }
}
