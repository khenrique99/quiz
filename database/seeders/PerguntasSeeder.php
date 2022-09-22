<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            'id'        => '1',
            'grupo'     => 'Área da Saúde',
            'image'     => 'saude.png',
        ]);
        DB::table('grupos')->insert([
            'id'        => '2',
            'grupo'     => 'Construção Civil',
            'image'     => 'construcao.png',
        ]);
        DB::table('grupos')->insert([
            'id'        => '3',
            'grupo'     => 'Inteligência Artificial',
            'image'     => 'ia.png',
        ]);
        DB::table('grupos')->insert([
            'id'        => '4',
            'grupo'     => 'Corpo de Bombeiro',
            'image'     => 'bombeiro.png',
        ]);
        DB::table('grupos')->insert([
            'id'        => '5',
            'grupo'     => 'Policial',
            'image'     => 'policial.png',
        ]);
        DB::table('grupos')->insert([
            'id'        => '9',
            'grupo'     => 'Cotidiano',
            'image'     => 'equipe.png',
        ]);
        DB::table('grupos')->insert([
            'id'        => '10',
            'grupo'     => 'Meio Ambiente',
            'image'     => 'ambiente.png',
        ]);
    }
}
