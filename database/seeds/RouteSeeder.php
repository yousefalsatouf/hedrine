<?php
use App\Route;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Route::create([
            'name' => 'injectable',
            
        ]);
        Route::create([
            'name' => 'per os',
        ]);
    }
}
