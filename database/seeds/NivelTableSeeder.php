<?php

use App\Nivel;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

class NivelTableSeeder extends Seeder
{
    /**
     * @var Collection;
     */
    private $nivel;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createNivel();
    }

    public function createNivel()
    {

    	Nivel::create([
            'id' => 1, 
            'descricao'  => 'Iniciante',
        ]);

    	Nivel::create([
            'id' => 2, 
            'descricao'  => 'Intermediário',
        ]);

    	Nivel::create([
            'id' => 3, 
            'descricao'  => 'Avançado',
        ]);

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Nivel created');
    }
}
