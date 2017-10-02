<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Eduardo",
            'email' =>'eduardoalmeida258@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        
        $this->call(CustomersTableSeeder::class);
    }
}
