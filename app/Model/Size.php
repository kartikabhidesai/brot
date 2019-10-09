<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Model\Size;

class Size extends Model {

    protected $table = 'size';

    public function getSize() {

        $result = Size::select(DB::raw('group_concat(size) as names'), 'category.categoryname', 'subcategory.subcategoryname', 'size.id', 'size.categoryid')
                ->leftjoin('category', 'category.id', '=', 'size.categoryid')
                ->leftjoin('subcategory', 'subcategory.id', '=', 'size.subcategoryid')
                ->groupBy('size.subcategoryid')
                ->get();
        return $result;
    }

    public function addSize($request) {
        $alradyExist = "";
        $count = 0;
        for ($i = 0; $i < count($request->input('size')); $i++) {
            $sub = $request->input('size')[$i];
            $findSize = Size::where('size', $sub)
                    ->where('categoryid', $request->input('category'))
                    ->where('subcategoryid', $request->input('subcategory'))
                    ->get()
                    ->toArray();

            if (!empty($findSize)) {
                $count++;
                $alradyExist .= $findSize[0]['size'] . ', ';
                $result = true;
            } else {
                $objSize = new Size();
                $objSize->categoryid = $request->input('category');
                $objSize->subcategoryid = $request->input('subcategory');
                $objSize->size = $request->input('size')[$i];
                $objSize->created_at = date("Y-m-d h:i:s");
                $objSize->updated_at = date("Y-m-d h:i:s");
                $result = $objSize->save();
            }
        }

        if ($result) {
            if ($count == count($request->input('size'))) {
                $return['status'] = 'error';
                $return['message'] = 'this ' . $alradyExist . '  size is already exists';
            } else {
                $return['status'] = 'success';
                $return['message'] = ($alradyExist == '') ? 'size created successfully.' : 'size created successfully But ' . $alradyExist . ' is already exist in our system';
                $return['redirect'] = route('Size-list');
            }
        }
        
        return $return;
    }

    public function getSizeDetails($id) {

        $result = Size::select('size.categoryid', 'size.subcategoryid', 'size.size', 'size.id','product_size.quantity')
                ->leftjoin('product_size','product_size.size','=','size.id')
                ->where('categoryid', $id)
                ->get();
       
        return $result;
    }

    public function editsize($request, $id) {
       
        $result = DB::table('size')->where('categoryid', $request->category)->delete();
        if ($result) {
            $alradyExist = "";
            $count = 0;
            for ($i = 0; $i < count($request->input('size')); $i++) {
                $sub = $request->input('size')[$i];
                $findSize =Size::where('size', $sub)
                            ->where('categoryid', $request->input('category'))
                            ->where('subcategoryid', $request->input('subcategory'))
                            ->get()
                            ->toArray();

                if (!empty($findSize)) {
                    $count++;
                    $alradyExist .= $findSize[0]['size'] . ', ';
                    $result = true;
                } else {
                    $objSize = new Size();
                    $objSize->id = $id;
                    $objSize->categoryid = $request->input('category');
                    $objSize->subcategoryid = $request->input('subcategory');
                    $objSize->size = $request->input('size')[$i];
                    $objSize->created_at = date("Y-m-d h:i:s");
                    $objSize->updated_at = date("Y-m-d h:i:s");
                    $result = $objSize->save();
                }
            }

            if ($result) {
                if ($count == count($request->input('size'))) {
                    $return['status'] = 'error';
                    $return['message'] = 'this Size is already exists';
                } else {
                    $return['status'] = 'success';
                    $return['message'] = ($alradyExist == '') ? 'Size Edited successfully.' : 'Size Edited successfully But ' . $alradyExist . ' is already exist in our system';
                    $return['redirect'] = route('Size-list');
                }
            }
            return $return;
        } else {
            $return['status'] = 'error';
            $return['message'] = 'this size is already exists';
            return $return;
        }
    }

    public function deleteSize($data) {
        $result = DB::table('size')->where('categoryid', $data['id'])->delete();
        return $result;
    }

    public function getSizelist($request) {
        $result = Size::select('size', 'id')
                ->where("subcategoryid", $request->input('subcategory'))
                ->where("categoryid", $request->input('category'))
                ->get();
        return $result;
    }

}
