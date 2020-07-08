<?php

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
        $this->call(AtcSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UsersTableSeeder::class);
        // Drug seeder
        $this->call(DrugSeeder::class);
        $this->call(DrugFamilySeeder::class);
        // Herb seeder
        $this->call(HerbSeeder::class);
        $this->call(HerbFormSeeder::class);
        $this->call(HerbHasFormSeeder::class);
        $this->call(PostSeeder::class);
        // target seeder
        $this->call(TargetSeeder::class);
        $this->call(TargetTypeSeeder::class);
        $this->call(ForceSeeder::class);
        $this->call(EffectSeeder::class);
        $this->call(ReferenceSeeder::class);
        // Hinteraction seeder
        $this->call(HinteractionSeeder::class);
        $this->call(HinteractionHasEffectSeeder::class);
        $this->call(HinteractionHasReferenceSeeder::class);
        //Dinteraction seeder
        $this->call(DinteractionSeeder::class);
        $this->call(DinteractionHasEffectSeeder::class);
        $this->call(DinteractionHasReferenceSeeder::class);
        $this->call(RouteSeeder::class);
    }
}
