<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

class pacienteController extends Controller
{
    public function cadastroShow()
    {
    	return view('paciente/index');
    }

    public function consultaShow()
    {
    	$dados = Paciente::all();
    	return view('paciente/consulta',compact('dados'));
    }

    public function salvaCadastro(Request $request)
    {
    	$dados = $request->all();
    	Paciente::create($dados);

    	return redirect()->back()->with('mensagem','Registro Salvo!');

    }

}
