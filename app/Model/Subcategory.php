<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Subcategory;
use DB;

class Subcategory extends Model
{
    protected $table = 'subcategory';
    public function addSubcategory($request){
      for($i = 0 ; $i < count($request->input('subcategoryname')) ; $i++){
            $objSubcategory=  new Subcategory();
            $objSubcategory->categoryid = $request->input('category');
            $objSubcategory->subcategoryname = $request->input('subcategoryname')[$i];
            $objSubcategory->created_at = date("Y-m-d h:i:s");
            $objSubcategory->updated_at = date("Y-m-d h:i:s");
            $objSubcategory->save();
      }
//       $objSubcategory=  new Subcategory();
//       $objSubcategory->categoryid = $request->input('category');
//       $objSubcategory->subcategoryname = $request->input('subcategoryname');
//       $objSubcategory->created_at = date("Y-m-d h:i:s");
//       $objSubcategory->updated_at = date("Y-m-d h:i:s");
//       
     
       return true;
    }
    public function getSubcategory(){
        
        $result = Subcategory::select('category.categoryname','subcategory.id','subcategory.subcategoryname')
                ->leftjoin('category','category.id','=','subcategory.categoryid')
                 ->get();   
       
       return $result;
    }
    public function getSubcategoryDetail($request, $id){
      
       $result = Subcategory::select('*')
                 ->where('id',$id)
                 ->get();
       return $result;
    }
    public function editSubcategory($request, $id){
        
        $result = Subcategory::find($id);
        $result->categoryid = $request->input('category');
        $result->subcategoryname = $request->input('subcategoryname');
        $result->created_at = date('Y-m-d H:i:s');
        $result->updated_at = date('Y-m-d H:i:s');
        if ($result->save()) {
            return TRUE;
        } else {

            return FALSE;
        }   
    }
    
    public function deleteCategory($request){
        $data=$request->input('data');
       
        $result = Subcategory::find($data['id'])->delete();
    	
    	return $result;
    
    }
}
