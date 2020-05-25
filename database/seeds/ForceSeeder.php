<?php

use App\Force;
use Illuminate\Database\Seeder;

class ForceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Force::create( [
            'id'=>1,
            'name'=>'forte',
            'color'=>'rouge',
            'rang'=>1,
            'visible'=>1
            ] );
            
                        
            
            Force::create( [
            'id'=>2,
            'name'=>'moyenne',
            'color'=>'orange',
            'rang'=>3,
            'visible'=>1
            ] );
            
                        
            
            Force::create( [
            'id'=>3,
            'name'=>'faible',
            'color'=>'jaune',
            'rang'=>4,
            'visible'=>1
            ] );
            
                        
            
            Force::create( [
            'id'=>4,
            'name'=>'aucune',
            'color'=>'vert',
            'rang'=>5,
            'visible'=>1
            ] );
            
                        
            
            Force::create( [
            'id'=>5,
            'name'=>'inconnue',
            'color'=>'mauve',
            'rang'=>6,
            'visible'=>1
            ] );
            
                        
            
            Force::create( [
            'id'=>6,
            'name'=>'G4',
            'color'=>'rouge',
            'rang'=>1,
            'visible'=>0
            ] );
            
                        
            
            Force::create( [
            'id'=>7,
            'name'=>'G3',
            'color'=>'brun',
            'rang'=>2,
            'visible'=>0
            ] );
            
                        
            
            Force::create( [
            'id'=>8,
            'name'=>'G2',
            'color'=>'orange',
            'rang'=>3,
            'visible'=>0
            ] );
            
                        
            
            Force::create( [
            'id'=>9,
            'name'=>'G1',
            'color'=>'jaune',
            'rang'=>4,
            'visible'=>0
            ] );
            
                        
            
            Force::create( [
            'id'=>10,
            'name'=>'G0',
            'color'=>'vert',
            'rang'=>5,
            'visible'=>0
            ] );
            
                        
            
            Force::create( [
            'id'=>11,
            'name'=>'--',
            'color'=>'blanc',
            'rang'=>7,
            'visible'=>0
            ] );
    }
}
