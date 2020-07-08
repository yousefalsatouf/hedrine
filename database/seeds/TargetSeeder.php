<?php

use App\Target;
use Illuminate\Database\Seeder;

class TargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Target::create( [
            'id'=>1,
            'name'=>'CYP1A2',
            'long_name'=>'cytochrome P450 isoforme 1A2',
            'target_type_id'=>2,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>2,
            'name'=>'CYP3A4',
            'long_name'=>'cytochrome P450 isoforme 3A4',
            'target_type_id'=>2,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>3,
            'name'=>'CYP2C9',
            'long_name'=>'cytochrome P450 isoforme 2C9',
            'target_type_id'=>2,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>4,
            'name'=>'CYP2C19',
            'long_name'=>'cytochrome P450 isoforme  2C19',
            'target_type_id'=>2,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>5,
            'name'=>'CYP2D6',
            'long_name'=>'cytochrome P450 isoforme 2D6',
            'target_type_id'=>2,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>6,
            'name'=>'CYP2D9',
            'long_name'=>'cytochrome P450 isoforme 2D9',
            'target_type_id'=>2,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>7,
            'name'=>'CYP2E1',
            'long_name'=>'cytochrome P450 isoforme 2E1',
            'target_type_id'=>2,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>8,
            'name'=>'P-gp',
            'long_name'=>'P-Glycoprotein P',
            'target_type_id'=>2,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>9,
            'name'=>'OATP',
            'long_name'=>'Organic Anion-Transporting Polypeptide',
            'target_type_id'=>2,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>10,
            'name'=>'UGT',
            'long_name'=>'UDP Glucuronyl Transferase',
            'target_type_id'=>2,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>11,
            'name'=>'Absorption digestive',
            'long_name'=>'Risque accru de malabsorbtion par augmentation de la mobilité gastro-intestinale',
            'target_type_id'=>2,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>61,
            'name'=>'Etude Clinique (Ail+docetaxel)',
            'long_name'=>'Etude Clinique (Ail+docetaxel)',
            'target_type_id'=>4,
            'notes'=>'En moyenne, sur une période de 12 jours, l\'ail diminue la clairance du docétaxel chez uniquement chez les patients porteurs d\'un allèle CYP3A5 * 1A. Mais pas d\'IM si pas de modification de l\'activité du CYP 3A5.',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>62,
            'name'=>'Antioxydant',
            'long_name'=>'l\'association d\'un médicament anti-oxydant et d\'une plante antioxydante est déconseillée',
            'target_type_id'=>3,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>13,
            'name'=>'Statut hormonal',
            'long_name'=>'Association entre des plantes contenant des phytoestrogenes et un hormonothérapie est théoriquement déconseillée',
            'target_type_id'=>3,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>14,
            'name'=>'CYP1A1',
            'long_name'=>'cytochrome P450 isoforme 1A1',
            'target_type_id'=>2,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            Target::create( [
            'id'=>15,
            'name'=>'CYP3A5',
            'long_name'=>'cytochrome P450 isoforme 3A5',
            'target_type_id'=>2,
            'notes'=>'',
            'user_id'=>2
            ] );
            
                        
            
            
            
    }
}
