<?php
use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'description' => 'Administrateur',
        ]);
        Role::create([
            'name' => 'publisher',
            'description' => 'Responsable de la publication',
        ]);
        Role::create([
            'name' => 'editor',
            'description' => 'Editeur',
        ]);
        Role::create([
            'name' => 'lector',
            'description' => 'Lector',
        ]);
    }
}
