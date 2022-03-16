<?php

namespace App\Http\Controllers;
use App\Models\region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function liste ($id){
        $region = region::where('pays_id',$id)->get();
        
        return view('region.index',[
        'region'=>$region
    ]);
    }
}
