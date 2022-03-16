<?php

namespace App\Http\Controllers;

use App\Models\entreprise;
use App\Models\quartier;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index()
    {
        
        return view('entreprise.index',[
            'entreprises' => Entreprise::with('quartier')->get()
        ]);
    }
    public function create()
    {
        $quartiers =Quartier::All();
        
        return view('entreprise/create',[
            'quartiers'=>$quartiers]);
    }
    public function store (Request $request)
    {
        $inputdata = $request->All();
        $inputdata['cotisationSocial'] = $request->has ('cotisationSocial') ? true : false ;
        $inputdata['organigramme'] = $request->has ('organigramme') ? true : false ;
        $inputdata['contratFormel'] = $request->has ('contratFormel') ? true : false ;

        Entreprise::create($request->All());
        return redirect()->route('entreprise.index');
        
    }
    public function show(Entreprise $entreprise)
    {
        return view('entreprise.show',compact('entreprise'));
    }
}