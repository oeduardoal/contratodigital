<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Servicos;
use PDF;

class PainelController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	$clientes = Cliente::where('status', 0)->get();

    	return view('painel.index', compact('clientes'));
    }

    public function adicionarServicos($id){
    	$cliente = Cliente::find($id);
        $servicos = Servicos::get();
        
    	return view('painel.adicionar-servicos', compact('cliente', 'servicos'));
    }

    public function cancelarContrato($id){
    	$cliente = Cliente::find($id);
		$cliente->status = 2;
		$cliente->save();

		return redirect('/a/painel');
    }
}
