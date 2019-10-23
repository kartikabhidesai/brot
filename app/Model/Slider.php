<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model {

    //
    protected $table = 'slider';

    function __construct() {
        
    }

    public function addSlider($request) {

        $objSilder = new Slider();
        if ($request->file()) {
            $image = $request->file('silderimage');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/slider/');
            $image->move($destinationPath, $name);
            $objSilder->image = $name;
        }
        $objSilder->text = $request->input('slidertext');
        $objSilder->title = $request->input('slidertitle');
        return $objSilder->save();
    }

    public function getdatatable() {
        $requestData = $_REQUEST;
        $columns = array(
            // datatable column index  => database column name
            0 => 'id',
            1 => 'image',
            2 => 'text',
            3 => 'title'
        );

        $query = Slider::from('slider');
        if (!empty($requestData['search']['value'])) {
            // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $searchVal = $requestData['search']['value'];
            $query->where(function($query) use ($columns, $searchVal, $requestData) {
                $flag = 0;
                foreach ($columns as $key => $value) {
                    $searchVal = $requestData['search']['value'];
                    if ($requestData['columns'][$key]['searchable'] == 'true') {
                        if ($flag == 0) {
                            $query->where($value, 'like', '%' . $searchVal . '%');
                            $flag = $flag + 1;
                        } else {
                            $query->orWhere($value, 'like', '%' . $searchVal . '%');
                        }
                    }
                }
            });
        }
        // print_r($requestData);exit;
        $temp = $query->orderBy($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);

        $totalData = count($temp->get());
        $totalFiltered = count($temp->get());

        $resultArr = $query->skip($requestData['start'])
                        ->take($requestData['length'])
                        ->select('id','image','text','title')->get();
        $data = array();
        
        $i = 0;
        foreach ($resultArr as $row) {
            $i++;
            $imagepatth = url("public/uploads/slider/".$row['image']);
            $actionHtml = '';
            $actionHtml .= '<center><a href="'.route('edit-silder',$row['id']).'" class="link-black text-sm" data-toggle="tooltip" data-original-title="Edit" > <i class="fa fa-edit"></i></a>';
            $actionHtml .= '<a href="#" data-toggle="modal" data-target="#deletemodal" data-image="' . $row['image'] . '"  data-id="' . $row['id'] . '" class="link-black text-sm deleteslider" data-toggle="tooltip" data-original-title="Delete" > <i class="fa fa-trash"></i></a></center>';
            $nestedData = array();
            $nestedData[] =$i;
            $nestedData[] = '<center><img height="90px" width="180px" src="'.$imagepatth.'" ></center>';
            $nestedData[] = '<center>'.$row["title"].'</center>';
            $nestedData[] = '<center>'.$row["text"].'</center>';
            $nestedData[] = $actionHtml;
            $data[] = $nestedData;
        }
        //echo "<pre>";print_r($data);exit;

        $json_data = array(
            "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );



        return $json_data;
    }

    public function silderdetails($id){
        $result = Slider::select("id","image","text","title")
                        ->where('id',$id)
                        ->get();
        return $result;
    }
    
    public function getSlider(){
        $result = Slider::select("id","image","text","title")
                        ->get();
        return $result;
    }
    
    public function editSlider($request){
        $objSilder = Slider::find($request->input('editid'));
        
        if ($request->file()) {
            $path = 'public/uploads/slider/' . $request->input('oldimage');
            if (file_exists($path)) {
                unlink($path);
            }
            $image = $request->file('silderimage');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/slider/');
            $image->move($destinationPath, $name);
            $objSilder->image = $name;
        }
        
        $objSilder->text = $request->input('slidertext');
        $objSilder->title = $request->input('slidertitle');
        return $objSilder->save();
    }
    
    
    public function deleteslider($request){
        $data=$request->input('data');
        
        $path = 'public/uploads/slider/' . $data['image'];
        if (file_exists($path)) {
            unlink($path);
        }
        $result = Slider::where('id', $data['id'])->delete();
        return $result;
    }
}
