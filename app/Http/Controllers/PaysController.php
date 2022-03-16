<?php

namespace App\Http\Controllers;

use App\Models\pays;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    public function index(){
        $pays = pays::all();
        
        return view('pays/index',[
        'pays'=>$pays
    ]);
    }
}
