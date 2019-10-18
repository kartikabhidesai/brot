<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Checkout extends Model
{

    public function getCountry(){
        
        $result = DB::table('countries')->get();
        return $result;
    }
    public function getState($data){
        $result = DB::table('states')
                ->where('country_id', $data['id'])
                ->get();
        return $result;
    }
    public function getCity($data){
        $result = DB::table('cities')
                ->where('state_id', $data['id'])
                ->get();
        return $result;
    }
}
