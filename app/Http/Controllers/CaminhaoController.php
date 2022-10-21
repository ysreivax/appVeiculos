<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Caminhao;

class CaminhaoController extends Controller
{
    public function FormularioCadastro(){
        return view('cadastrarCaminhao');
    }

    public function MostrarEditarCaminhao(){

        $dadosCaminhao = Caminhao::all();
        //dd($dadosCaminhao);

        return view('editarCaminhao',['registrosCaminhao' => $dadosCaminhao]);
    }

    public function MostrarAlterarCaminhao(Caminhao $registrosCaminhoes){

        return view('alterarCaminhao',['registrosCaminhoes' => $registrosCaminhoes]);
    }

    
    public function ApagarBancoCaminhao(Caminhao $registrosCaminhoes){
        $registrosCaminhoes->delete();

       return Redirect::route('editar-caminhao');

    }


    public function SalvarBanco(Request $request){

        $dadosCaminhao = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required',
        ]);

        Caminhao::create($dadosCaminhao);

        return Redirect::route('home');
    
    }
    

}
