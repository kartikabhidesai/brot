<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $table = 'slider';
    function __construct() {
        
    }
    
    public function addSlider($request){
        
        $objSilder = new Slider();
        if($request->file()){
            $image = $request->file('silderimage');
            $name = time().'.'. $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/slider/');
            $image->move($destinationPath, $name);
            $objSilder->image=$name;
        }
        $objSilder->text=$request->input('slidertext');
        $objSilder->title=$request->input('slidertitle');
        return $objSilder->save();
        
    }
}
