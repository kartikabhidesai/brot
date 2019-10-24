<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Subcategory;
use DB;

class Subcategory extends Model {

    protected $table = 'subcategory';

    public function addSubcategory($request) {
        $alradyExist = "";
        $count = 0;
        for ($i = 0; $i < count($request->input('subcategoryname')); $i++) {
            $sub = $request->input('subcategoryname')[$i];
            $findSubcategory = Subcategory::where('subcategoryname', $sub)
                    ->where('categoryid', $request->input('category'))
                    ->get()
                    ->toArray();

            if (!empty($findSubcategory)) {
                $count++;
                $alradyExist .= $findSubcategory[0]['subcategoryname'] . ', ';
                $result = true;
            } else {
                $objSubcategory = new Subcategory();
                $objSubcategory->categoryid = $request->input('category');
                $objSubcategory->subcategoryname = $request->input('subcategoryname')[$i];
                $objSubcategory->created_at = date("Y-m-d h:i:s");
                $objSubcategory->updated_at = date("Y-m-d h:i:s");
                $result = $objSubcategory->save();
            }
        }

        if ($result) {
            if ($count == count($request->input('subcategoryname'))) {
                $return['status'] = 'error';
                $return['message'] = 'this subcategory is already exists';
            } else {
                $return['status'] = 'success';
                $return['message'] = ($alradyExist == '') ? 'Subcategory created successfully.' : 'Subcategory created successfully But ' . $alradyExist . ' is already exist in our system';
                $return['redirect'] = route('subcategory-list');
            }
        }

        return $return;
    }

    public function getSubcategory() {

        $result = Subcategory::select(DB::raw('group_concat(subcategoryname) as names'), 'subcategory.categoryid', 'category.categoryname', 'subcategory.id', 'subcategory.subcategoryname')
                ->leftjoin('category', 'category.id', '=', 'subcategory.categoryid')
                ->groupBy('subcategory.categoryid')
                ->get();

        return $result;
    }

    public function getSubcategoryDetail($request, $id) {

        $result = Subcategory::select('subcategoryname', 'id')
                ->where('categoryid', $id)
                ->get();
        return $result;
    }

    public function editSubcategory($request, $id) {

        $result = DB::table('subcategory')->where('categoryid', $request->category)->delete();
        if ($result) {
            $alradyExist = "";
            $count = 0;
            for ($i = 0; $i < count($request->input('subcategoryname')); $i++) {
                $sub = $request->input('subcategoryname')[$i];
                $findSubcategory = Subcategory::where('subcategoryname', $sub)
                        ->where('categoryid', $request->input('category'))
                        ->get()
                        ->toArray();

                if (!empty($findSubcategory)) {
                    $count++;
                    $alradyExist .= $findSubcategory[0]['subcategoryname'] . ', ';
                    $result = true;
                } else {
                    $objSubcategory = new Subcategory();
                    $objSubcategory->categoryid = $request->input('category');
                    $objSubcategory->subcategoryname = $request->input('subcategoryname')[$i];
                    $objSubcategory->created_at = date("Y-m-d h:i:s");
                    $objSubcategory->updated_at = date("Y-m-d h:i:s");
                    $result = $objSubcategory->save();
                }
            }

            if ($result) {
                if ($count == count($request->input('subcategoryname'))) {
                    $return['status'] = 'error';
                    $return['message'] = 'this subcategory is already exists';
                } else {
                    $return['status'] = 'success';
                    $return['message'] = ($alradyExist == '') ? 'Subcategory Edited successfully.' : 'Subcategory Edited successfully But ' . $alradyExist . ' is already exist in our system';
                    $return['redirect'] = route('subcategory-list');
                }
            }
             return $return;
        } else {
             $return['status'] = 'error';
             $return['message'] = 'this subcategory is already exists';
             return $return;
        }
    }

    public function deleteCategory($data) {
        
        $result = DB::table('subcategory')->where('categoryid', $data['id'])->delete();
        return $result;
    }

    public function getSubcategorynew() {

        $result = Subcategory::select('id', 'categoryid', 'subcategoryname')
                ->get();
        return $result;
    }

    public function getSubcategorylist($id) {
        $result = Subcategory::select('subcategoryname','categoryid', 'id')
                ->where("categoryid", $id)
                ->get();
        return $result;
    }

}
