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
        // Create GRUPOS
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

        // CREATE HISTORIA COTIDIANO
        DB::table('perguntas')->insert([
            'grupo'     => '9',
            'titulo'     => 'Toda a ajuda é Bem-Vinda.',
            'pergunta'     => 'Você está caminhando em um domingo de manhã no parque de sua cidade quando de repente, você avista duas pessoas, uma criança (7 anos) e um mendigo (53 anos). Ambos estão morrendo de fome e não comem nada a dias... Você só tem dinheiro pra comprar um lanche. Para quem você escolhe dar o lanche?',
            'resposta1'     => 'DAR O LANCHE PARA A CRIANÇA',
            'resposta2'     => 'DAR O LANCHE PARA O MENDIGO',
        ]);
        DB::table('perguntas')->insert([
            'grupo'     => '9',
            'titulo'     => 'Uma escolha... Várias consequências.',
            'pergunta'     => 'Você é gerente em uma empresa e se depara com uma situação delicada. Existem dois funcionários que estão prestes a serem promovidos mas que ainda não sabem da notícia, porém você precisa escolher somente um para o cargo. João e Marcelo fazem as mesmas atividades, porém Marcelo trabalha há 10 anos na empresa e está desanimado por falta de reconhecimento, já João trabalha há 3 anos e está entregando os resultados mais do que o esperado. Para quem você decide dar a promoção?',
            'resposta1'     => 'DAR A PROMOÇÃO PARA MARCELO',
            'resposta2'     => 'DAR A PROMOÇÃO PARA JOÃO',
        ]);
    }
}
