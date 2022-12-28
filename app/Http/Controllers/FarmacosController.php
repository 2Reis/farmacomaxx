<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacos;

class FarmacosController extends Controller
{
    public function index()
    {        
        $farmacos = Farmacos::get();
        return view('farma',['farmacos' => $farmacos]);
    }
    
    public function medicamentos(Request $request, $medicamento)
    {
        $farmacos = Farmacos::where("category",$medicamento)->get();
        return view('farma',['farmacos' => $farmacos]);
    }
    public function editeFarmaco (Request $request, $medicamento){
        $med = Farmacos::findOrFail($medicamento);
        return view('editefarma',['medicamento' => $med]);
    }
    public function removeFarmaco (Request $request, $medicamento){
        Farmacos::destroy($medicamento);
       return redirect()->back();
    }
    public function insereFarmaco(){
       return view('inserefarma');
    }
}