<?php

use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nome' => 'Amauri',
            'sobrenome' => 'Melo Junior',
            'email' => 'amaurimelojunior@gmail.com',
            'password' => bcrypt('amjsenha')
        ]);

        DB::table('receitas')->insert([
            'nome' => 'Escondidinho',
            'quantidade' => 4,
            'dificuldade' => 3,
            'criador' => 1,
        ]);

        DB::table('etapas')->insert([
            'receita' => 1,
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'mandioca',
        ]);

         DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 1,
            'descricao' => '700 g de aipim (mandioca) cozido em água e sal',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'batata inglesa',
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 2,
            'descricao' => '300 g de batata inglesa cozida em água e sal',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'manteiga',
            'derivado_leite' => true,
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 3,
            'descricao' => '1 colher de sopa de manteiga',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'creme de leite',
            'derivado_leite' => true,
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 4,
            'descricao' => '1 caixinha de creme de leite',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'cebola',
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 5,
            'descricao' => '1 cebola pequena picada ou ralada (depende do gosto da pessoa)',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'caldo de vegetais',
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 6,
            'descricao' => '1 tablete de caldo de vegetais',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'leite',
            'derivado_leite' => true,
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 7,
            'descricao' => 'Leite aos poucos',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'sal',
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 8,
            'descricao' => 'Sal a gosto',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'brocolis',
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 9,
            'descricao' => '1/2 kg de brocolis cozidos e picados',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'alho',
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 3,
            'descricao' => '2 colheres de manteiga ou de azeite',
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 10,
            'descricao' => '2 dentes de alho amassado',
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 5,
            'descricao' => '1 cebola média em rodelas',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'salsa',
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 11,
            'descricao' => '1 colher de sopa de salsa picada',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'cebolinha',
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 12,
            'descricao' => '1 colher de sopa de cebolinha picada',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'pimenta calabresa',
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 13,
            'descricao' => 'Pimenta calabresa a gosta ou pimenta-do-reino (usei a calabresa)',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'bacon',
            'derivado_carne' => true,
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 14,
            'descricao' => 'Bacon a gosto',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'catupiry',
            'derivado_leite' => true,
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 15,
            'descricao' => 'Catupiry a gosto',
        ]);

        DB::table('ingredientes')->insert([
            'nome' => 'mussarela',
            'derivado_leite' => true,
        ]);

        DB::table('etapa_ingredientes')->insert([
            'etapa' => 1,
            'ingrediente' => 16,
            'descricao' => 'Mussarela a gosto',
        ]);

        DB::table('etapa_passos')->insert([
            'etapa' => 1,
            'instrucao' => 'Passar aipim, batata e manteiga pelo espremedor de batatas (tem que ficar bem macio), formando um purê'
        ]);

        DB::table('etapa_passos')->insert([
            'etapa' => 1,
            'instrucao' => 'Misturar ao purê a cebola, o caldo de carne ou galinha, o creme de leite e se necessário colocar leite até ficar cremoso (grosso).'
        ]);

        DB::table('etapa_passos')->insert([
            'etapa' => 1,
            'instrucao' => 'Verificar o sal do purê (adicionar se achar necessário) e reservar.'
        ]);

        DB::table('etapa_passos')->insert([
            'etapa' => 1,
            'instrucao' => 'Fritar o alho, a cebola, depois colocar o brócolis cozido e picado e fritar mais um pouco, colocar a salsa e cebolinha. Reservar.'
        ]);

        DB::table('etapa_passos')->insert([
            'etapa' => 1,
            'instrucao' => 'Verificar o sal (adicionar se achar necessário) e reservar.'
        ]);

        DB::table('etapa_passos')->insert([
            'etapa' => 1,
            'instrucao' => 'Colocar metade do purê em uma forma refratária (untada com manteiga no fundo e nas laterais também), cobrindo seu fundo'
        ]);

        DB::table('etapa_passos')->insert([
            'etapa' => 1,
            'instrucao' => 'Colocar o recheio de brócolis.'
        ]);

        DB::table('etapa_passos')->insert([
            'etapa' => 1,
            'instrucao' => 'Cortar uma pontinha do saco de catupiry e espalhar por cima do recheio.'
        ]);

        DB::table('etapa_passos')->insert([
            'etapa' => 1,
            'instrucao' => 'Pode adicionar fatias de mussarela por cima do catupiry.'
        ]);

        DB::table('etapa_passos')->insert([
            'etapa' => 1,
            'instrucao' => 'Cobrir tudo com a outra metade restante do do purê'
        ]);

        DB::table('etapa_passos')->insert([
            'etapa' => 1,
            'instrucao' => 'Pode ser colocado queijo parmesão por cima também'
        ]);

        DB::table('etapa_passos')->insert([
            'etapa' => 1,
            'instrucao' => 'Levar ao forno por mais ou menos 20 minutos ou até dourar.'
        ]);
    }
}
