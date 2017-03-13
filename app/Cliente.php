<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
		protected $fillable = [
			"inputRazaoSocial", "inputCNPJ","inputEndereco", "inputCEP","inputCidade","inputEstado","inputTelefone","inputNome","inputCPF","inputEmail"
    	];
}