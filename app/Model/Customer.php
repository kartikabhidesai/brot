<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Customer;
use DB;
use File;
use Illuminate\Support\Facades\Hash;

class Product extends Model
{
    protected $table = 'product';
    public function addProduct($request){
       
        $name = '';
        if($request->file()){
            $image = $request->file('holding_img');
            $name = 'holding_img'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/inventory/');
            $image->move($destinationPath, $name);    
        }
       $objProduct=  new Product();
       $objProduct->fname = $request->input('fname');
       $objProduct->lname = $request->input('lname');
       $objProduct->mobile = $request->input('mobile');
       $objProduct->address = $request->input('address');
       $objProduct->created_at = date("Y-m-d h:i:s");
       $objProduct->updated_at = date("Y-m-d h:i:s");
       
       return $objProduct->save();
    }
    public function getProduct(){
       
       $result = Product::select('*')
                 ->get();   
       return $result;
    }
    public function getProductDetail($request, $id){

        $result = Product::select('*')
                 ->where('id',$id)
                 ->get();   
       return $result;
    }
    
    public function editProduct($request, $id){
        
        $name = '';
        $result = Product::find($id);
        if($request->file()){
           
            $existImage = public_path('/uploads/inventory/').$result->holding_img;
            if (File::exists($existImage)) { // unlink or remove previous company image from folder
                File::delete($existImage);
            }
            
            $image = $request->file('holding_img');
            $name = 'holding_img'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/inventory/');
            $image->move($destinationPath, $name);    
            $result->holding_img = $name;
        }
        
        $result->fname = $request->input('fname');
        $result->lname = $request->input('lname');
        $result->mobile = $request->input('mobile');
        $result->address = $request->input('address');;
        $result->created_at = date('Y-m-d H:i:s');
        $result->updated_at = date('Y-m-d H:i:s');
        if ($result->save()) {
            return TRUE;
        } else {

            return FALSE;
        }   
    }
    public function deleteProduct($data)
    {
    	$result = DB::table("product")
                        ->delete($data['id']);
    	return $result;
    }
    
//    public function Agencies($request)
//    {
//    	$objProduct=  new Product();
//        $objProduct->firstname = $request->input('firstname');
//        $objProduct->lastname = $request->input('lastname');
//        $objProduct->email = $request->input('email');
//        $objProduct->mobile = $request->input('mobile');
//        $objProduct->password = Hash::make($request->input('password'));
//        $objProduct->created_at = date("Y-m-d h:i:s");
//        $objProduct->updated_at = date("Y-m-d h:i:s");
//       
//       return $objProduct->save();
//    }
}
