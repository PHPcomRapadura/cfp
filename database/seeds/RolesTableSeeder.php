<?php
use App\Role;
use App\Role_User;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * @var Collection;
     */
    private $roles;
    
    /**
     * @var Collection;
     */
    private $roles_user;
    

    public function run()
    {
        // Apaga toda as tabelas abaixo
//        DB::table('role_user')->truncate();
//        DB::table('roles')->truncate();

        $this->createRoles();
        $this->createRole_user();
    }

    private function createRoles()
    {
        Role::create([
            'perfil' => 'ADM', 
            'descricao'  => 'Perfil do Administrador do sistema',
        ]);


        Role::create([
            'perfil' => 'ORGANIZADOR', 
            'descricao'  => 'Perfil de organizador de eventos',
        ]);

        Role::create([
            'perfil' => 'PALESTRANTE', 
            'descricao'  => 'Perfil de palestrante',
        ]);

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Role created');
    }

    private function createRole_user()
    {
        Role_User::create([
            'user_id' => 1,
            'role_id'  => 1,
        ]);

        Role_User::create([
            'user_id' => 2,
            'role_id'  => 2,
        ]);

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Role_User created');
    }
}