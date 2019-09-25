<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Model\Category;

class Category extends Model
{
    protected $table = 'category';
    public function addCategory($request){
      
       $objcategory=  new Category();
       $objcategory->categoryname = $request->input('categoryname');
       $objcategory->created_at = date("Y-m-d h:i:s");
       $objcategory->updated_at = date("Y-m-d h:i:s");
       
       return $objcategory->save();
    }
    public function getCategory(){
      
       $result = Category::select('*')
                 ->get();   
       return $result;
    }
    public function getCategoryDetail($request, $id){
      
       $result = Category::select('*')
                 ->where('id',$id)
                 ->get();   
       return $result;
    }
    public function editCategory($request, $id){
        
//        $name = '';
        $result = Category::find($id);
//        if($request->file()){
//           
//            $existImage = public_path('/uploads/inventory/').$result->holding_img;
//            if (File::exists($existImage)) { // unlink or remove previous company image from folder
//                File::delete($existImage);
//            }
//            
//            $image = $request->file('holding_img');
//            $name = 'holding_img'.time().'.'.$image->getClientOriginalExtension();
//            $destinationPath = public_path('/uploads/inventory/');
//            $image->move($destinationPath, $name);    
//            $result->holding_img = $name;
//        }
        
//        $result->fname = $request->input('fname');
//        $result->lname = $request->input('lname');
//        $result->mobile = $request->input('mobile');
        $result->categoryname = $request->input('categoryname');;
        $result->created_at = date('Y-m-d H:i:s');
        $result->updated_at = date('Y-m-d H:i:s');
        if ($result->save()) {
            return TRUE;
        } else {

            return FALSE;
        }   
    }
    public function deleteCategory($data)
    {
    	$result = DB::table("category")
                        ->delete($data['id']);
    	return $result;
    }
}
