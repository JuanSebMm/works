<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function principio(){

        $users=usuario::orderBy('id','desc')-> paginate();

        return view('inicio',compact('users'));
    }

    public function Regcom(){
        return view('Regcomer');
    }
    
    public function store(Request $request){
        $a=new usuario();

        $a->nombre=$request->nombre;
        $a->nm_usuario=$request->usuario;
        $a->apellido=$request->apellido;
        $a->correo=$request->correo;
        $a->telefono=$request->telefono;
        $a->direccion=$request->direccion;
        $a->password=$request->password;

        $a->save();

        return redirect()->route('mostrar.modificar',$a);
    }
    
    public function modificar($id){

        $mod=usuario::find($id);

        return view('modificacion', compact('mod'));
    }

    public function edit($loles){

        $most=usuario::find($loles);
        return view('actu',compact('most'));
    }

    public function safe(Request $request, $most){

        $save=usuario::find($most);

        $save->nombre=$request->nombre;
        $save->nm_usuario=$request->usuario;
        $save->apellido=$request->apellido;
        $save->correo=$request->correo;
        $save->telefono=$request->telefono;
        $save->direccion=$request->direccion;
        $save->password=$request->password;

        $save->save();

        return redirect()->route('mostrar.modificar',$save);
    }




    public function contac(){
        return view('contacto');
    }
    


}
