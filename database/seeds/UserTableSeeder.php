<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        // Apaga toda a tabela de usuários
        DB::table('users')->truncate();
        
        // Cria usuários admins (dados controlados)
        $this->createAdmins();
              
    }
    private function createAdmins()
    {
        User::create([
            'email' => 'admin@phpcomrapadura.org', 
            'name'  => 'ADM',
            'password' => bcrypt('123456')
        ]);
        
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('User admin@phpcomrapadura.org created');

    }
}