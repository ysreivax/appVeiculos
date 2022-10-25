<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Carros;

class CarrosController extends Controller
{



     
    public function FormularioCadastroCarros(){
        return view('cadastrarCarros');
    }






    public function MostrarEditarCarros(Request $request){
        //$dadosCarros = Carros::all();
        //dd($dadosCarros);

        $dadosCarros = Carros::query();
        $dadosCarros->when($request->marca,function($query, $vl){
            $query->where('marca','like','%'.$vl.'%');           
    });

        $dadosCarros = $dadosCarros->get();

        return view('editarCarros',['registrosCarros' => $dadosCarros]);
    }






    public function MostrarAlterarCarros(Carros $registrosCarros){

        return view('alterarCarro',['registrosCarros' => $registrosCarros]);
    }






    public function ApagarBancoCarros(Carros $registrosCarros){
        $registrosCarros->delete();

       return Redirect::route('editar-carros');

    }






    public function AlterarBancoCarros(Carros $registrosCarros, Request $request ){
        $banco = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required',
        ]);

            $registrosCarros->fill($banco);
            $registrosCarros->save();
            //dd($registrosCarros);

            return Redirect::route('editar-carros');
    
    }






    public function SalvarBancoCarros(Request $request){

        $dadosCarros = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required',
        ]);

        Carros::create($dadosCarros);

        return Redirect::route('home');
    
    }
}
