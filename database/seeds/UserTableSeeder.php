<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
//        // Apaga toda a tabela de usuários
//        DB::table('users')->truncate();
        
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
            'password' => bcrypt('123456')
        ]);
        User::create([
           'apelido' => 'Thiago Dionizio',
           'git' =>  'https://github.com/thiagodionizio',
//Alisson precisa mudar essa foto.. path ou o que for usar.
           'foto' => 'foto',
           'cidade' => 'Fortaleza',
           'estado' => 'Ceará',
           'biografia' => 'Nossa História',
            'email' => 'thiago.o.dionizio@gmail.com',
            'name'  => 'ADM',
            'password' => bcrypt('123456')
        ]);
        
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('User admin@phpcomrapadura.org created');

    }
}