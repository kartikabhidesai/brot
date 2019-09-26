<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Model\Size;

class Size extends Model
{
     protected $table = 'size';
     public function getSize() {
         
        $result = Size::select('category.categoryname','subcategory.subcategoryname','size.size','size.id')
                ->leftjoin('category','category.id','=','size.categoryid')
                ->leftjoin('subcategory','subcategory.id','=','size.subcategoryid')
                ->get();   
       return $result;
     }
     
     public function addSize($request){
         for($i = 0 ; $i < count($request->input('size')) ; $i++){
            $objSize=  new Size();
            $objSize->categoryid = $request->input('category');
            $objSize->subcategoryid = $request->input('subcategory');
            $objSize->size = $request->input('size')[$i];
            $objSize->created_at = date("Y-m-d h:i:s");
            $objSize->updated_at = date("Y-m-d h:i:s");
            $objSize->save();
        }
        return true;
     }
     
     
}
