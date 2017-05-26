<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SexoTableSeeder::class);
         $this->call(NivelTableSeeder::class);
         $this->call(TrilhaTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         $this->call(PermissionsTableSeeder::class);
    }
}
