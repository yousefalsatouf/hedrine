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
        Target::create([
            'name' => 'CYP1A2',
            'long_name' => 'cytochrome P450 isoforme 1A2',
            'target_type_id' => 2,
            'notes' => 'Etude clinique sur 12 sujets recevant 675mg déchinacées (Mélange de 600mg de racine dechinacea angustifolia et 675mg de racine dechinacea purpurea standardisé). Etude randomisée en cross over, administration dune seule dose de warfarine après deux semaines de prétraitement déchinacées.Aucun effet sur la pharmacocinétique de la warfarine. Aucun effet sur CYP2C9. ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'CYP3A4',
            'long_name' => 'cytochrome P450 isoforme 3A4',
            'target_type_id' => 2,
            'notes' => 'Etude clinique sur 12 sujets recevant 800mg 2 fois/jour pdt 28 jours dechinacea purpura (non dosé). Pas deffet sur la pharmacocinétique du midazolam. Aucun effet sur CYP3A4. ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'CYP2C9',
            'long_name' => 'cytochrome P450 isoforme 2C9',
            'target_type_id' => 2,
            'notes' => 'Etude clinique sur 12 sujets recevant 800mg 2 fois/jour pdt 28 jours dechinacea purpura (non dosé). Pas deffet sur la pharmacocinétique du midazolam. Aucun effet sur CYP3A4.',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'CYP2C19',
            'long_name' => 'cytochrome P450 isoforme 2C19',
            'target_type_id' => 2,
            'notes' => 'Etude clinique randomisée sur 12 sujets recevant 800mg dechinacea purpurea (non standardisé) 2fois/jour durant 28 jours. Aucun effet sur la pharmacocinétique de la débrisoquinone, aucun effet sur CYP2D6. ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'CYP2D6',
            'long_name' => 'cytochrome P450 isoforme 2D6',
            'target_type_id' => 2,
            'notes' => '2 études cliniques randomisées sur 12 et 18 sujets recevant respectivement 175mg 2 fois/j pdt 28 jours et 300mg 3 fois/j pdt 14 jours de chardon-marie dosé à 80% de silymarines. Pour les deux études aucun effet sur la pharmacocinétique de la débrisoquine. Aucun effet sur CYP2D6. ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'CYP2D9',
            'long_name' => 'cytochrome P450 isoforme 2D9',
            'target_type_id' => 2,
            'notes' => 'Dans deux étude cliniques randomisées sur 18 sujets recevant respectivement 120mg 2 fois/jour durant 8 jours et 240mg 1 fois/jour durant 8 jours de ginkgo (comprimé EGb 761). Aucun effet sur la pharmacocinétique du tolbutamide. Aucun effet sur CYP2C9. ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'CYP2E1',
            'long_name' => 'cytochrome P450 isoforme 2E1',
            'target_type_id' => 2,
            'notes' => 'Etude clinique randomisée sur 12 sujets recevant 175mg 2 fois/j pdt 28 jours du chardon-marie dosé à 80% de silymarines. Aucun effet sur la pharmacocinétique de la chlorzoxazone. Aucun effet sur CYP2E1. ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'P-gp',
            'long_name' => 'P-Glycoprotein P',
            'target_type_id' => 2,
            'notes' => 'Une étude croisée a comparé chez 134 patients migraineux l’efficacité du diclofénac 100 mg seul, l’association de 100mg de diclofénac et 100 mg de caféine et le placebo. Dans le groupe placebo, 6 (14%) des 43 sujets ont rapporté un soulagement des migraine à 60 minutes, contre 12 (27%) des 45 sujets dans le groupe de gélule de diclofénac, et 19 (41%) des 46 sujets de la gélule de diclofénac et caféine. L’étude suggère que la prise concomitante du diclofénac avec la caféine a des avantages statistiquement significatifs par rapport au placebo. Note: le diclofenac seul ne diffère pas significativement par rapport au placebo, peut-être en raison des limites de taille de léchantillon. Les auteurs suggèrent un bénéfice analgésique lorsque la caféine est ajoutée au diclofénac. ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'OATP',
            'long_name' => 'Organic Anion-Transporting Polypeptide',
            'target_type_id' => 2,
            'notes' => 'Étude randomisée à double aveugle chez 9 volontaires sains. L’interaction entre le paracétamol et la caféine a été caractérisée par une diminution des taux plasmatiques de paracétamol et par une plus petite surface de laire sous la courbe du paracétamol. Ce qui indique l élimination rapide du médicament après une administration simultanée avec de la caféine.  ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'UGT',
            'long_name' => 'UDP Glucuronyl Transferase',
            'target_type_id' => 2,
            'notes' => 'Etude clinique randomisée sur 12 sujets recevant 175mg 2 fois/j pdt 28 jours du chardon-marie dosé à 80% de silymarines. Aucun effet sur la pharmacocinétique de la caféine. Aucun effet sur CYP1A2. ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'Absorption digestive',
            'long_name' => 'Risque accru de malabsorbtion par augmentation de ...',
            'target_type_id' => 2,
            'notes' => 'Étude randomisée en double aveugle chez 24 sujets. Avec administration par voie orale de 1000 mg de paracétamol, 130 mg de caféine, et une combinaison des deux, étude contrôlée contre placebo. 130 mg de caféine a légèrement augmenté le taux d absorption dune dose de 1 g de paracétamol (sans modification de la biodisponibilité). Ils ont également noté des effets analgésiques accrus et prolongés. ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'Etude Clinique (Ail+docetaxel)',
            'long_name' => 'Etude Clinique (Ail+docetaxel)',
            'target_type_id' => 4,
            'notes' => 'En moyenne, sur une période de 12 jours, l ail dim',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'Antioxydant',
            'long_name' => 'l association d un médicament anti-oxydant et d un',
            'target_type_id' => 3,
            'notes' => 'Etude clinique sur 14 sujets recevant 120mg 2 fois/jour durant 14 jours de ginkgo (capsules contenant 29,2% en glucosides de flavanols et 5,1% en lactones terpéniques). Aucun effet sur la pharmacocinétique du ritonavir. Aucun effet sur CYP3A4. ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'Statut hormonal',
            'long_name' => 'Association entre des plantes contenant des phytoe.',
            'target_type_id' => 3,
            'notes' => 'Etude clinique randomisée sur 14 sujets recevant 120mg 2 fois/jour durant 12 jours de ginkgo (capsules titrées d un minimum de 24% de glycosides de flavanols et 6% de lactones terpéniques). Aucun effet sur la pharmacocinétique du voriconazole. Aucun effet sur CYP3A4.',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'CYP1A1',
            'long_name' => 'cytochrome P450 isoforme 1A1',
            'target_type_id' => 2,
            'notes' => 'Etude clinique sur 14 sujets recevant 120mg 2 fois/jour durant 14 jours de ginkgo (capsules contenant 29,2% en glucosides de flavanols et 5,1% en lactones terpéniques). Aucun effet sur la pharmacocinétique du ritonavir. Aucun effet sur CYP3A4. ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'CYP3A5',
            'long_name' => 'cytochrome P450 isoforme 3A5',
            'target_type_id' => 2,
            'notes' => 'Dans deux étude cliniques randomisées sur 18 sujets recevant respectivement 120mg 2 fois/jour durant 8 jours et 240mg 1 fois/jour durant 8 jours de ginkgo (comprimé EGb 761). Aucun effet sur la pharmacocinétique du tolbutamide. Aucun effet sur CYP2C9.',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'CYP2C8',
            'long_name' => 'cytochrome P450 isoforme 2C8',
            'target_type_id' => 2,
            'notes' => 'Etude clinique sur 14 sujets recevant 120mg 2 fois/jour durant 14 jours de ginkgo (capsules contenant 29,2% en glucosides de flavanols et 5,1% en lactones terpéniques). Aucun effet sur la pharmacocinétique du ritonavir. Aucun effet sur CYP3A4. ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'CYP1B1',
            'long_name' => 'cytochrome P450 isoforme 1B1',
            'target_type_id' => 2,
            'notes' => 'Dans deux étude cliniques randomisées sur 18 sujets recevant respectivement 120mg 2 fois/jour durant 8 jours et 240mg 1 fois/jour durant 8 jours de ginkgo (comprimé EGb 761). Aucun effet sur la pharmacocinétique du tolbutamide. Aucun effet sur CYP2C9.',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'CYP2A6',
            'long_name' => 'cytochrome P450 isoforme 2A6',
            'target_type_id' => 2,
            'notes' => 'Etude clinique sur 14 sujets recevant 120mg 2 fois/jour durant 14 jours de ginkgo (capsules contenant 29,2% en glucosides de flavanols et 5,1% en lactones terpéniques). Aucun effet sur la pharmacocinétique du ritonavir. Aucun effet sur CYP3A4. ',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'CYP2B6',
            'long_name' => 'cytochrome P450 isoforme 2B6',
            'target_type_id' => 2,
            'notes' => 'Dans deux étude cliniques randomisées sur 18 sujets recevant respectivement 120mg 2 fois/jour durant 8 jours et 240mg 1 fois/jour durant 8 jours de ginkgo (comprimé EGb 761). Aucun effet sur la pharmacocinétique du tolbutamide. Aucun effet sur CYP2C9.',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'Etude clinique (Gui + MTX, 5FU, Gemcitabine)',
            'long_name' => 'Etude clinique multicentrique (Gui + MTX, 5FU, Gem...',
            'target_type_id' => 4,
            'notes' => 'Lutilisation concomitante de gui serait favorable...',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'Statut immunitaire',
            'long_name' => 'Association entre des plantes immunostimulantes et...',
            'target_type_id' => 3,
            'notes' => '',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'Etude clinique (Millepertuis + imatinib)',
            'long_name' => 'Etude clinique (Hypericum + imatinib)',
            'target_type_id' => 4,
            'notes' => 'Une étude chez 12 sujets sains recevant de limati..',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'Etude clinique (Pomélo+etoposide)',
            'long_name' => 'Etude clinique pilote sur 6 patients (Pomélo+etopo...)',
            'target_type_id' => 4,
            'notes' => 'Diminution de l AUC jusqu à 26% de l étoposide lor...',
            'user_id' => 2,
        ]);
        Target::create([
            'name' => 'Case Report (Orange/pomélo + Vincristine)',
            'long_name' => 'Case Report (Orange/pomélo + Vincristine)',
            'target_type_id' => 1,
            'notes' => 'Case report relatant une modification de l absorp..',
            'user_id' => 2,
        ]);

        Target::create([
            'name' => 'Etude clinique (Ail + Chlozoxazone)',
            'long_name' => 'Etude clinique (Ail + Chlozoxazone)',
            'target_type_id' => 4,
            'notes' => 'Etude clinique randomisée sur 22 sujets recevant une dose de 500 mg (huile d\'ail) 3 fois /jour durant 28 jours. Diminution de 22% du 6-hydroxychlorzoxazone dans le sérum (p=O.OO5). Inhibition du CYP2E1.',
            'user_id' => 1,
        ]);
    }
}
