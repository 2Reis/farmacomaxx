<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacos;
use Illuminate\Support\Facades\Redirect;

class FarmacosController extends Controller
{
    public function index()
    {
        $farmacos = Farmacos::get();
        return view('farmacos.farma',['farmacos' => $farmacos]);
    }

    public function medicamentos(Request $request, $medicamento)
    {
        $farmacos = Farmacos::where("category",$medicamento)->get();
        return view('farmacos.farma',['farmacos' => $farmacos]);
    }
    public function editeFarmaco (Request $request, $medicamento){
        $med = Farmacos::findOrFail($medicamento);
        return view('farmacos.editefarma',['medicamento' => $med]);
    }
    public function removeFarmaco (Request $request, $medicamento){
        Farmacos::destroy($medicamento);
       return redirect()->back();
    }
    public function insereFarmaco(){
       return view('inserefarma');
    }
    public function addFarmaco (){
        return view('farmacos.adicionarfarmaco');
    }
    public function addFarming (Request $request){
        $farmacos = new Farmacos();
        $farmacos = $farmacos -> create($request -> all());
        return Redirect::to('/farma');
    }
    public function upFarming (Request $request,$medicamento){
        $data=$request->all();
        Farmacos::where('id',$medicamento)->update([
            'name'=>$data['name'],
            'price'=>$data['price'],
            'category'=>$data['category'],
        ]);
        return Redirect::to('/farma');
    }
    public function adicionarusuarios (){
        return view('cadastrarusuarios.adicionarusuarios');
    }
}
