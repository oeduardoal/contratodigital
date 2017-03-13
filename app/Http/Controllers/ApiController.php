<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class ApiController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    public function clientes(){
    	return DB::table('clientes')->get();
    }
}
