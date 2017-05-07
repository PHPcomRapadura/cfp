<?php
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

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
        // Apaga toda as tabelas abaixo
        DB::table('permissions')->truncate();
        DB::table('permission_role')->truncate();

        $this->createPermissions();
        $this->createPermission_role();          
    }

    private function createPermissions()
    {
        Permission::create([
            'nome' => 'Perfil', 
            'descricao'  => 'Alterar cadastro de palestrante',
        ]);
        
        Permission::create([
            'nome' => 'Talk', 
            'descricao'  => 'Submeter palestras para os eventos',
        ]);
        
        Permission::create([
            'nome' => 'Edit talk', 
            'descricao'  => 'Editar Submissão de palestras para os eventos',
        ]);
        
        Permission::create([
            'nome' => 'Delete talk', 
            'descricao'  => 'Excluir submissão de palestras para os eventos',
        ]);
        
        Permission::create([
            'nome' => 'Event', 
            'descricao'  => 'Incluir novos eventos ADM',
        ]);
        
        Permission::create([
            'nome' => 'Edit event', 
            'descricao'  => 'Editar dados dos eventos ADM',
        ]);
        
        Permission::create([
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
            'permission_id' => 2, 
            'role_id'  => 2,
        ]);
        
        Permission_role::create([
            'permission_id' => 3, 
            'role_id'  => 2,
        ]);

        Permission_role::create([
            'permission_id' => 4, 
            'role_id'  => 2,
        ]);

        Permission_role::create([
            'permission_id' => 5, 
            'role_id'  => 1,
        ]);


        Permission_role::create([
            'permission_id' => 6, 
            'role_id'  => 1,
        ]);

        Permission_role::create([
            'permission_id' => 7, 
            'role_id'  => 1,
        ]);

        $this->command->info('Permission_role created');
    }
}