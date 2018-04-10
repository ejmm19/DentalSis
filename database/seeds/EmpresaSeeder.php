<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      DB::table('empresa')->insert([
                'nombre' => 'Denti Oral',
                'slogan' => 'Lo hacemos por usted',
                'imagen' => 'img/logo-array.png',
                'nit' => '123435678-9',
                'celular' => '3203213012',
                'telefono' => '1234567',
                'created_at' =>'2018-04-07 00:00:00' ]);
    }
}
