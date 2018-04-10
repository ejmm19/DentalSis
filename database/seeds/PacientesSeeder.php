<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use Faker\Factory as Faker;
class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      $faker = Faker::create();
      for ($i=0; $i < 40; $i++) {
        DB::table('pacientes')->insert([
          'nombre'=>$faker->firstName,
          'apellidos'=>$faker->lastName." ".$faker->lastName,
          'fecha_nacimiento'=>$faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = 'America/Bogota'),
          'sexo'=>$faker->randomElement($array = array ('M','F')),
          'celular'=>$faker->tollFreePhoneNumber,
          'correo'=>$faker->freeEmail,
          'direccion'=>$faker->address,
          'alergias'=>$faker->text($maxNbChars = 50),
          'observaciones'=>$faker->text($maxNbChars = 191)]);
      }
    }
}
