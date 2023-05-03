<?php
namespace Database\Seeders;

use App\Tpalimentacao;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;


class TpalimentacaoTableSeeder extends Seeder
{
    /**
     * @var Collection;
     */
    private $tpalimentacao;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTpalimentacao();
    }

    public function createTpalimentacao()
    {

    	Tpalimentacao::create([
            'id' => 1, 
            'descricao'  => 'Não',
        ]);

    	Tpalimentacao::create([
            'id' => 2, 
            'descricao'  => 'Vegano',
        ]);

    	Tpalimentacao::create([
            'id' => 3, 
            'descricao'  => 'Vegetariano',
        ]);

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Tpalimentacao created');
    }
}
