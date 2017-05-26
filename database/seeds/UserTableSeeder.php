<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {    
        // Cria usuários admins (dados controlados)
        $this->createAdmins();
              
    }
    private function createAdmins()
    {
        User::create([
           'apelido' => 'PHP Com Rapadura',
           'git' =>  'https://github.com/PHPcomRapadura',
//Alisson precisa mudar essa foto.. path ou o que for usar.
           'foto' => 'foto',
           'cidade' => 'Fortaleza',
           'estado' => 'Ceará',
           'biografia' => 'Nossa História',
            'email' => 'admin@phpcomrapadura.org', 
            'name'  => 'ADM',
            'sexo_id'=> 2,
            'aeroporto'=> 'FOR',
            'alimentacao'=>'', 
            'password' => bcrypt('123456')
        ]);

        User::create([
           'apelido' => 'Organizador',
           'git' =>  'https://github.com/OrgPHPcomRapadura',
//Alisson precisa mudar essa foto.. path ou o que for usar.
           'foto' => 'foto',
           'cidade' => 'Fortaleza',
           'estado' => 'Ceará',
           'biografia' => 'Nossa História',
            'email' => 'comunidade@phpcomrapadura.org',
            'name'  => 'Organizador',
            'sexo_id'=> 2,
            'aeroporto'=> 'FOR',
            'alimentacao'=>'',
            'password' => bcrypt('123456')
        ]);

         User::create([
           'apelido' => 'Alisson',
           'git' =>  'https://github.com/AlissonSilvaCe',
//Alisson precisa mudar essa foto.. path ou o que for usar.
           'foto' => 'foto',
           'cidade' => 'Fortaleza',
           'estado' => 'Ceará',
           'biografia' => 'Nossa História',
            'email' => 'alisson.sousa12@gmail.com',
            'name'  => 'Alisson Silva',
            'sexo_id'=> 2,
            'aeroporto'=> 'FOR',
            'alimentacao'=>'',
            'password' => bcrypt('123456')
        ]);
        
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('User admin@phpcomrapadura.org created');
    }
}