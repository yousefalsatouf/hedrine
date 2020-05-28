<?php

use App\Reference;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(HerbSeeder::class);
        $this->call(DrugSeeder::class);
        $this->call(HerbFormSeeder::class);
        $this->call(DrugFamilySeeder::class);
        $this->call(HerbHasFormSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(TargetSeeder::class);
        $this->call(TargetTypeSeeder::class);
        $this->call(ForceSeeder::class);
        $this->call(HinteractionSeeder::class);
        $this->call(EffectSeeder::class);
        $this->call(HinteractionHasEffectSeeder::class);
        $this->call(ReferenceSeeder::class);
        $this->call(HinteractionHasReferenceSeeder::class);
        $this->call(DinteractionSeeder::class);
        $this->call(DinteractionHasEffectSeeder::class);
        $this->call(DinteractionHasReferenceSeeder::class);

    }
}
