<?php

use App\Sexo;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;


class SexoTableSeeder extends Seeder
{
    /**
     * @var Collection;
     */
    private $sexo;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createSexo();
    }

    public function createSexo()
    {

    	Sexo::create([
            'id' => 1, 
            'descricao'  => 'Masculino',
        ]);


    	Sexo::create([
            'id' => 2, 
            'descricao'  => 'Feminino',
        ]);

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Sexo created');
    }


}
