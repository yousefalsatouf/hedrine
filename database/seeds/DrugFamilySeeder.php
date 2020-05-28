<?php

use Illuminate\Database\Seeder;
use App\DrugFamily;

class DrugFamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Drugfamily::create( [
            
            'name'=>'L - ANTINEOPLASIQUES ET IMMUNOMODULATEURS '
            ] );
            
            
                        
            Drugfamily::create( [
            
            'name'=>'autre'
            ] );
            
            
                        
            Drugfamily::create( [
            
            'name'=>'N - SYSTEME NERVEUX '
            ] );
            
            
                        
            Drugfamily::create( [
          
            'name'=>'C - SYSTEME CARDIOVASCULAIRE '
            ] );
            
            
                        
            Drugfamily::create( [
           
            'name'=>'P - ANTIPARASITAIRES, INSECTICIDES '
            ] );
            
            
                        
            Drugfamily::create( [
          
            'name'=>'J - ANTIINFECTIEUX GENERAUX A USAGE SYSTEMIQUE '
            ] );
            
            
                        
            Drugfamily::create( [
            
            'name'=>'A - VOIES DIGESTIVES ET METABOLISME '
            ] );
            
            
                        
            Drugfamily::create( [
           
            'name'=>'B - SANG ET ORGANES HEMATOPOIETIQUES '
            ] );
            
            
                        
            Drugfamily::create( [
           
            'name'=>'D - MEDICAMENTS DERMATOLOGIQUES '
            ] );
            
            
                        
            Drugfamily::create( [
            
            'name'=>'G - SYSTEME GENITO URINAIRE ET HORMONES SEXUELLES '
            ] );
            
            
                        
            Drugfamily::create( [
          
            'name'=>'H - HORMONES SYSTEMIQUES, HORMONES SEXUELLES EXCLUES '
            ] );
            
            
                        
            Drugfamily::create( [
          
            'name'=>'M - MUSCLE ET SQUELETTE '
            ] );
            
            
                        
            Drugfamily::create( [
            
            'name'=>'R - SYSTEME RESPIRATOIRE '
            ] );
            
            
                        
            Drugfamily::create( [
           
            'name'=>'S - ORGANES SENSORIELS '
            ] );
            
            
                        
            Drugfamily::create( [
          
            'name'=>'V - DIVERS '
            ] );
            
            
    }
}
