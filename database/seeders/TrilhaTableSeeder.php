<?php
namespace Database\Seeders;

use App\Trilha;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;


class TrilhaTableSeeder extends Seeder
{
    /**
     * @var Collection;
     */
    private $trilha;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTrilha();
    }

    public function createTrilha()
    {

    	Trilha::create([
            'id' => 1, 
            'descricao'  => 'Boas práticas',
        ]);

    	Trilha::create([
            'id' => 2, 
            'descricao'  => 'Frameworks',
        ]);

    	Trilha::create([
            'id' => 3, 
            'descricao'  => 'Segurança',
        ]);


    	Trilha::create([
            'id' => 4, 
            'descricao'  => 'CMS',
        ]);


    	Trilha::create([
            'id' => 5, 
            'descricao'  => 'Casos de uso',
        ]);


    	Trilha::create([
            'id' => 6, 
            'descricao'  => 'Testes',
        ]);


    	Trilha::create([
            'id' => 7, 
            'descricao'  => 'Versionamento',
        ]);


    	Trilha::create([
            'id' => 8, 
            'descricao'  => 'Devops',
        ]);

    	Trilha::create([
            'id' => 9, 
            'descricao'  => 'Ferramentas',
        ]);

    	Trilha::create([
            'id' => 10, 
            'descricao'  => 'Motivação',
        ]);


        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Trilha created');
    }


}
