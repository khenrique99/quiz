<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'tipo_usuario' => '99',
            'name' => 'Kelvin Henrique Ferreira',
            'idade' => '19990217',
            'email' => 'kelvin5henri@gmail.com',
            'password' => '$2y$10$qLzqTOG4tdfFJwhpd2VJWOxVsaN56vr5Oo7gh7G03NXqiY/.bXLwi',
        ]);
        DB::table('users')->insert([
            'tipo_usuario' => '99',
            'name' => 'Guilherme Abel',
            'idade' => '20020123',
            'email' => 'guilhermeabel.contato@gmail.com',
            'password' => '$2y$10$qLzqTOG4tdfFJwhpd2VJWOxVsaN56vr5Oo7gh7G03NXqiY/.bXLwi',
        ]);
    }
}
