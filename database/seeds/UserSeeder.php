<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name'=>'Eric José',
        'usuario'=>'Martínez Muentes',
        'email'=>'admin@admin.com',
        'password'=>bcrypt('123456'),
        'created_at'=>'2018-04-07 16:42:52']);
    }
}
