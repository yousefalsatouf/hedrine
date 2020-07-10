<?php

use App\Dinteraction;
use Illuminate\Database\Seeder;

class DinteractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dinteraction::create( [
            'id'=>1,
            'drug_id'=>59,
            'target_id'=>13,
            'force_id'=>1,
            'notes'=>'Le dégarélix est un antagoniste sélectif de l\'hormone entraînant la libération de gonadotrophines (GnRH). Il se fixe de façon compétitive et réversible sur les récepteurs GnRH de l\'hypophyse, entraînant ainsi rapidement une réduction de la libération des gonadotrophines, hormone lutéinisante (LH) et hormone folliculostimulante (FSH), et donc de la sécrétion de testostérone (T) par les testicules.',
            'user_id'=>2
            ] );
            
                        
            
            Dinteraction::create( [
            'id'=>2,
            'drug_id'=>60,
            'target_id'=>13,
            'force_id'=>1,
            'notes'=>'anti-androgène',
            'user_id'=>2
            ] );
            
                        
            
            Dinteraction::create( [
            'id'=>3,
            'drug_id'=>61,
            'target_id'=>13,
            'force_id'=>1,
            'notes'=>'L\'acétate de cyprotérone est un progestatif de synthèse antiandrogène antigonadotrope.',
            'user_id'=>2
            ] );
            
                        
            
            Dinteraction::create( [
            'id'=>4,
            'drug_id'=>62,
            'target_id'=>13,
            'force_id'=>1,
            'notes'=>'Le flutamide est un anti-androgène pur non stéroïdien. Il agit en bloquant les récepteurs androgéniques prostatiques.\r\n\r\nLe flutamide est dépourvu d\'action sur les hormones gonadotropes et corticosurrénaliennes.',
            'user_id'=>2
            ] );
            
                        
            
            Dinteraction::create( [
            'id'=>5,
            'drug_id'=>63,
            'target_id'=>13,
            'force_id'=>1,
            'notes'=>'Anti-androgène pas de risque d\'interaction avec un phyto-oestrogene',
            'user_id'=>2
            ] );
            
                        
            
            Dinteraction::create( [
            'id'=>6,
            'drug_id'=>64,
            'target_id'=>13,
            'force_id'=>1,
            'notes'=>'Le fulvestrant est un antagoniste compétitif des récepteurs aux estrogènes (RE) avec une affinité comparable à l\'estradiol. Le fulvestrant bloque les actions trophiques des estrogènes sans posséder une quelconque activité agoniste partielle (de type estrogène).',
            'user_id'=>2
            ] );
            
                        
            
            Dinteraction::create( [
            'id'=>7,
            'drug_id'=>65,
            'target_id'=>13,
            'force_id'=>1,
            'notes'=>'Anti-estrogène par inhibition compétitive de la liaison de l\'estradiol avec ses récepteurs. ',
            'user_id'=>2
            ] );
            
                        
            
            

            Dinteraction::create( [
                'id'=>8,
                'drug_id'=>452,
                'target_id'=>13,
                'force_id'=>1,
                'notes'=>'Le torémifène est un dérivé non-stéroïde du triphényléthylène. Comme les autres composés de cette famille, le tamoxifène et le clomifène, le torémifène se lie aux récepteurs aux estrogènes.',
                'user_id'=>2
                ] );
            
        
    }
}
