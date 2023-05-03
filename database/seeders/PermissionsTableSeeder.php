<?php
namespace Database\Seeders;

use App\Permission;
use App\Permission_role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * @var Collection;
     */
    private $permission;

    /**
     * @var Collection;
     */
    private $permission_role;
    
    public function run()
    {
       // Caso queira rodar essa migration novamente , usar o refresh
       // Apaga toda as tabelas abaixo
    //    DB::table('permissions')->truncate();
    //    DB::table('permission_role')->truncate();

        $this->createPermissions();
        $this->createPermission_role();
    }

    private function createPermissions()
    {
        Permission::create([
            'slug'=>'users-view',
            'nome' => 'Usuários',
            'descricao'  => 'Visualiza todos os cadastro de palestrante',
        ]);
        Permission::create([
            'slug'=>'users-create',
            'nome' => 'Usuários - Cadastro',
            'descricao'  => 'Cadastro de palestrante',
        ]);
        Permission::create([
            'slug'=>'users-update',
            'nome' => 'Usuários - Edição',
            'descricao'  => 'Alterar cadastro de palestrante',
        ]);
        Permission::create([
            'slug'=>'users-delete',
            'nome' => 'Usuários - Delete',
            'descricao'  => 'Deletar cadastro de palestrante',
        ]);
        
        Permission::create([
            'slug'=>'talks-view',
            'nome' => 'Palestras',
            'descricao'  => 'Submeter palestras para os eventos',
        ]);
        Permission::create([
            'slug'=>'talks-create',
            'nome' => 'Talk',
            'descricao'  => 'Submeter palestras para os eventos',
        ]);
        
        Permission::create([
            'slug'=>'talks-update',
            'nome' => 'Edit talk', 
            'descricao'  => 'Editar Submissão de palestras para os eventos',
        ]);
        
        Permission::create([
            'slug'=>'talks-delete',
            'nome' => 'Delete talk', 
            'descricao'  => 'Excluir submissão de palestras para os eventos',
        ]);

        Permission::create([
            'slug'=>'talks-all',
            'nome' => 'Todas Palestras',
            'descricao'  => 'Vizualizar todas palestras enviadas',
        ]);
        
        Permission::create([
            'slug'=>'events-view',
            'nome' => 'Eventos',
            'descricao'  => 'Visualizar todos os Eventos',
        ]);

        Permission::create([
            'slug'=>'events-create',
            'nome' => 'Event',
            'descricao'  => 'Incluir novos eventos ADM',
        ]);

        Permission::create([
            'slug'=>'events-update',
            'nome' => 'Edit event', 
            'descricao'  => 'Editar dados dos eventos ADM',
        ]);
        
        Permission::create([
            'slug'=>'events-delete',
            'nome' => 'Delete event', 
            'descricao'  => 'Excluir eventos ADM',
        ]);
        
        //exibe uma mensagem ao finalizar
        $this->command->info('Permissions created!');
    }


    private function createPermission_role()
    {
        Permission_role::create([
            'permission_id' => 1,
            'role_id'  => 2,
        ]);
        Permission_role::create([
            'permission_id' => 9,
            'role_id'  => 2,
        ]);
        Permission_role::create([
            'permission_id' => 10,
            'role_id'  => 2,
        ]);
        Permission_role::create([
            'permission_id' => 11,
            'role_id'  => 2,
        ]);
        Permission_role::create([
            'permission_id' => 12,
            'role_id'  => 2,
        ]);
        Permission_role::create([
            'permission_id' => 13,
            'role_id'  => 2,
        ]);

        Permission_role::create([
            'permission_id' => 3,
            'role_id'  => 3,
        ]);
        Permission_role::create([
            'permission_id' => 5,
            'role_id'  => 3,
        ]);
        Permission_role::create([
            'permission_id' => 6,
            'role_id'  => 3,
        ]);
        Permission_role::create([
            'permission_id' => 7,
            'role_id'  => 3,
        ]);
        Permission_role::create([
            'permission_id' => 8,
            'role_id'  => 3,
        ]);
        
        $this->command->info('Permission_role created');
    }
}