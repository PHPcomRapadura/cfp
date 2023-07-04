<?php
namespace Database\Seeders;

use App\Tpalimentacao;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $this->call([
            SexoTableSeeder::class,
            NivelTableSeeder::class,
            TrilhaTableSeeder::class,
            UserTableSeeder::class,
            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            TpalimentacaoTableSeeder::class
         ]);
    }
}
