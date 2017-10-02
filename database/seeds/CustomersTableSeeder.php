<?php

use Illuminate\Database\Seeder;

use App\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = File::get('database/data/data.json');
        $json = json_decode($clientes);
          foreach($json as $obj){
            Customer::create(array(
              'nome' => $obj->firstname . " " . $obj->lastname,
              'email' => $obj->email,
              'telefone' => $obj->phonenumber,
            ));
          }
    }
}
