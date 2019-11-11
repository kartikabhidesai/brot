<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Model\Category;

class Category extends Model
{
    protected $table = 'category';
    public function addCategory($request){
      
        $findCategory = Category::where('categoryname', $request->input('categoryname'))->first();
        
        if(!empty($findCategory)) {
            return false;
        }
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
        
        $findCategory = Category::where('categoryname', $request->input('categoryname'))
                        ->where('id',"!=",$id)
                        ->first();
        
        if(!empty($findCategory)) {
            return false;
        }
        $result = Category::find($id);
        $result->categoryname = $request->input('categoryname');
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
        $result = Category::find($data['id'])->delete();
    	
    	return $result;
    }
}
