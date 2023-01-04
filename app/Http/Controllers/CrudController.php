<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacos;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class CrudController extends Controller
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
    public function removeusers (Request $request, $users){
        User::destroy($users);
       return redirect()->back();
    }
    public function insereFarmaco(){
       return view('inserefarma');
    }
    public function addFarmaco (){
        return view('farmacos.adicionarfarmaco');
    }
    public function addUser (Request $request){
        $user = new User();
        $user = $user -> create($request -> all());
        return Redirect::to('/adicionarusuarios');
    }
    public function addFarming (Request $request){
        $farmacos = new Farmacos();
        $farmacos = $farmacos -> create($request -> all());
        return Redirect::to('/farma');
    }
    public function userlist (){
        $users = User::get();
        return view('cadastrarusuarios.users',['users' => $users]);    
    }
    public function editUsers (Request $request, $user_id){
        $users = User::findOrFail($user_id);
        return view('cadastrarusuarios.useredit',['users' => $users]);
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
    public function upUsers (Request $request,$usuarios){
        $data=$request->all();
        User::where('id',$usuarios)->update([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>$data['password'],
        ]);
        return Redirect::to('/users');
    }    
    public function adicionarusuarios (){
        return view('cadastrarusuarios.adicionarusuarios');
    }
}
