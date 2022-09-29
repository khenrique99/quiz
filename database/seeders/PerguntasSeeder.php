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
        DB::table('perguntas')->insert([
            'grupo'     => '9',
            'titulo'     => 'Os invasores.',
            'pergunta'     => 'Você é maquinista de um trem e hoje é dia de manutenção na linha ferroviaria. Tem 2 colegas de trabalho realizando a manutenção na trilha da ponte, de repente seu chefe avisa que 5 invasores conseguiram entrar e foram avistados pelas câmeras no tunel. Você tem que escolher rápido, na sua frente a uma divisão de trilhos, você vai em direção ao seus colegas que estão fazendo a manutenção na ponte ou vai em direção a os invasores? Em qualquer lado que escolher, as chances se sobrevivência são quase 0% poís não há áreas de escape!',
            'resposta1'     => 'MATAR OS INVASORES',
            'resposta2'     => 'MATAR OS COLEGAS DE TRABALHO',
        ]);
        DB::table('perguntas')->insert([
            'grupo'     => '9',
            'titulo'     => 'Sua vida, suas regras!',
            'pergunta'     => 'Você é maquinista de um bonde e percebe que no centro da cidade está acontecendo um protesto sobre campanhas políticas, você está na descida e já consegue avistar a multidão, você não consegue desviar a rota e por forçar demais o bonde acaba perdendo os freios, a única saida é puxar a alavanca de emergência com que faz o bonde saia dos trilhos e a velocidade marcada no painel são de 70km/h. O que você faz?',
            'resposta1'     => 'PUXAR A ALAVANCA E REZAR PARA SOBREVIVER',
            'resposta2'     => 'DEIXAR O BONDE BATER NA MULTIDÃO, POIS A CULPA NÃO ERA SUA',
        ]);
        DB::table('perguntas')->insert([
            'grupo'     => '9',
            'titulo'     => 'O melhor amigo.',
            'pergunta'     => 'Você acabou de deixar seu melhor amigo na casa dele depois de uma festa na casa de outro amigo. Na volta para sua casa você se depara com a namorada de seu melhor amigo abraçando e beijando outro cara. O que você faz?',
            'resposta1'     => 'CONTAR PARA O MELHOR AMIGO',
            'resposta2'     => 'NÃO DIZER NADA',
        ]);
    }
}
