<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Cliente;

use Session;

class NovoContratoController extends Controller{

	public function __construct(){
    	$this->estados = array(
    		'AC'=>'Acre',
    		'AL'=>'Alagoas',
    		'AP'=>'Amapá',
    		'AM'=>'Amazonas',
    		'BA'=>'Bahia',
    		'CE'=>'Ceará',
    		'DF'=>'Distrito Federal',
    		'ES'=>'Espírito Santo',
    		'GO'=>'Goiás',
    		'MA'=>'Maranhão',
    		'MT'=>'Mato Grosso',
    		'MS'=>'Mato Grosso do Sul',
    		'MG'=>'Minas Gerais',
    		'PA'=>'Pará',
    		'PB'=>'Paraíba',
    		'PR'=>'Paraná',
    		'PE'=>'Pernambuco',
    		'PI'=>'Piauí',
    		'RJ'=>'Rio de Janeiro',
    		'RN'=>'Rio Grande do Norte',
    		'RS'=>'Rio Grande do Sul',
    		'RO'=>'Rondônia',
    		'RR'=>'Roraima',
    		'SC'=>'Santa Catarina',
    		'SP'=>'São Paulo',
    		'SE'=>'Sergipe',
    		'TO'=>'Tocantins'
    	);
    }


	public function index(){

		$estados = (object) $this->estados;

		return view('contrato.novo-contrato', compact('estados'));
	}

	public function save(Request $req){

		 $this->validate($req, [
			"inputRazaoSocial" => 'required',
			"inputCNPJ" => 'required',
			"inputEndereco" => "required",
			"inputCEP" => "required",
			"inputCidade" => "required",
			"inputEstado" => "required",
			"inputTelefone" => "required",
			"inputNome" => "required",
			"inputCPF" => "required",
			"inputEmail" => "required"
    	]);

		// $senha = Hash::make('secret');
		// if (Hash::check('secret', $senha)){
		// 	return "ok";
		// }else{
		// 	return "no";
		// }

		$data = $req->all();
		/*dd($data);*/
		$req->session()->put('novoContrato', true);

		// Promise para enviar email
	    Mail::send('contrato.email-contrato', $data, function($message) use ($data) {
	        $message->to($data['inputEmail']);
	        $message->subject('E-Mail Example');
	    });

	    // Insere os dados do cliente no banco de dados
		Cliente::create($data);

		return redirect('/contrato/enviado');

	}

	public function enviado(){

		if( Session::has('novoContrato') ){

			Session::forget('novoContrato');

			return view('contrato.enviado-contrato');

		}else{
			return redirect('/');
		}

	}

}
