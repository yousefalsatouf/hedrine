    <?php

    use App\Reference;
    use Illuminate\Database\Seeder;

    class ReferenceSeeder extends Seeder
    {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Reference::create( [

    'title'=>'Clinically based evidence of drug-herb interactions: a systematic review',
    'authors'=>'Kennedy D. A.,  Seely D.',
    'year'=>2010,
    'edition'=>'Expert Opin. Drug Saf. 9(1): 79-124',
    'url'=>'http://informahealthcare.com/doi/abs/10.1517/14740330903405593',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Naringin is a Major and Selective Clinical Inhibitor of Organic Anion-Transporting Polypeptide 1A2 (OATP1A2) in Grapefruit Juice',
    'authors'=>'Bailey D. G., Dresser G. K., Leake B. F. et al. ',
    'year'=>2007,
    'edition'=>'Clin. Pharmacol. Ther. 81(4): 495-502',
    'url'=>'http://www.nature.com/clpt/journal/v81/n4/full/6100104a.html',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Dietary regulation of P-gp function and expression',
    'authors'=>'Zhang W., Han Y., Lim S. L , et al.',
    'year'=>2009,
    'edition'=>'Expert Opin. Drug Metab.Toxicol. 5(7): 789-801',
    'url'=>'http://informahealthcare.com/doi/abs/10.1517/17425250902997967',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Pharmacokinetic herb-drug interactions: are preventive screenings necessary and appropriate?',
    'authors'=>'Butterweck V., Darenforf H., Gaus W., et al.',
    'year'=>2004,
    'edition'=>'Planta Med. 70(9): 784-791',
    'url'=>'https://www.thieme-connect.com/DOI/DOI?10.1055/s-2004-827223',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [
    'title'=>'Analysis of the inhibitory potential of Ginkgo biloba, Echinacea purpurea, and Serenoa repens on the metabolic activity of cytochrome P450 3A4, 2D6, and 2C9',
    'authors'=>'Yale S. H., Glurich I.',
    'year'=>2005,
    'edition'=>'J. Altern. Complement. Med. 11(3): 433-9',
    'url'=>'http://www.liebertonline.com/doi/abs/10.1089/acm.2005.11.433',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Ginkgo biloba extract: mechanisms and clinical indications',
    'authors'=>'Diamond B. J., Shiflett S. C., Reiwel N.',
    'year'=>2000,
    'edition'=>'Arch. Phys. Med. Rehabil. 81(5): 668-78',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S0003999300900522',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Effect of methanolic extract of Cassia nigricans leaves on rat gastrointestinal tract',
    'authors'=>'Nwafor P. A., Okwuasaba F. K.',
    'year'=>2001,
    'edition'=>'Fitoterapia. 72(3): 206-14',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S0367326X00003038',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Possible drug-metabolism interactions of medicinal herbs with antiretroviral agents.',
    'authors'=>'van den Bout-van den Beukel C. J. P., Koopmans P. P., van der Ven A. J. A. M., et al. ',
    'year'=>2006,
    'edition'=>'Drug Metabolism Reviews 38(3): 477–514',
    'url'=>'http://informahealthcare.com/doi/abs/10.1080/03602530600754065%20',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Interactions between herbal and conventional medicines',
    'authors'=>'Williamson E. M.',
    'year'=>2005,
    'edition'=>'Expert Opin. Drug Saf. 4(2): 355-378',
    'url'=>'http://www.ingentaconnect.com/search/article?option1=tka&value1=Interactions+between+herbal+and+conventional+medicines.&pageSize=10&index=1',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Intestinal drug transporter expression and the impact of grapefruit juice in humans',
    'authors'=>'Glaeser H., Bailey D. G., Dresser G.K., Gregor J.C., et al.',
    'year'=>2007,
    'edition'=>'Clin. Pharmacol. Ther. 81(3): 362-370',
    'url'=>'http://www.nature.com/clpt/journal/v81/n3/full/6100056a.html',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Prediction of intestinal absorption and metabolism of pharmacologically active flavones and flavanones',
    'authors'=>'Serra H., Mendes T., Bronze M. R., Simplicio A. L.',
    'year'=>2008,
    'edition'=>'Bioorg. Med. Chem. 16: 4009–4018 ',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S096808960800045X',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'',
    'authors'=>'Perego R., Beccaglia P., Angelini M., Villa P., Cova D.',
    'year'=>1993,
    'edition'=>'Xenobiotica 23 :1345-1352',
    'url'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Mechanisms of enhanced oral availability of CYP3A4 substrates by grapefruit constituents. Decreased enterocyte CYP3A4 concentration and mechanism-based inactivation by furanocoumarins.',
    'authors'=>'Schmiedlin-Ren P., Edwards D. J., Fitzsimmons M. E., He K., et al.',
    'year'=>1997,
    'edition'=>'Drug Metab Dispos 25: 1228-1233',
    'url'=>'http://dmd.aspetjournals.org/content/25/11/1228.long',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Les plantes immunostimulantes adjuvantes de la thérapeutique antitumorale',
    'authors'=>'Goetz P.',
    'year'=>2004,
    'edition'=>'Phytothérapie 2(6) : 180-182',
    'url'=>'http://www.springerlink.com/content/h7q1r4a43gkbg0p8/',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Plantago major L. et Plantago lanceolata L. (Plantaginaceae)',
    'authors'=>'Ghedira K., Goetz P., Le Jeune R. ',
    'year'=>2008,
    'edition'=>'Phytothérapie 6: 367–371',
    'url'=>'http://link.springer.com/article/10.1007%2Fs10298-008-0350-y?LI=true#page-1',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'An in vitro evaluation of human cytochrome P450 3A4 and P-glycoprotein inhibition by garlic',
    'authors'=>'Foster B.C., Foster M.S., Vandenhoek S., Krantis A., et al.',
    'year'=>2001,
    'edition'=>'J. Pharm. Sci. 4(2): 176-84',
    'url'=>'http://www.ualberta.ca/~csps/JPPS4%282%29/B.Foster/Garlic.htm',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Cell adhesion molecule CD44: its functional roles in prostate cancer',
    'authors'=>'Iczkowski K. A.',
    'year'=>2010,
    'edition'=>'Am. J. Transl. Res. 12; 3(1): 1-7',
    'url'=>'http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2981422/?tool=pubmed',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Mechanistic understanding of the different effects of Wuzhi Tablet (Schisandra sphenanthera extract) on the absorption and first-pass intestinal and hepatic metabolism of Tacrolimus (FK506)',
    'authors'=>'Qin X.L., Bi H.C., Wang X. D.',
    'year'=>2009,
    'edition'=>'Int. J. Pharm. 389: 114-21',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S037851731000058X',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Traditional Chinese medicines Wu Wei Zi (Schisandra chinensis Baill) and Gan Cao (Glycyrrhiza uralensis Fisch) activate pregnane X receptor and increase warfarin clearance in rats',
    'authors'=>'Mu Y., Zhang J., Zhang S.',
    'year'=>2006,
    'edition'=>'J. Pharmacol. Exp. Ther. 316: 1369-77',
    'url'=>'http://jpet.aspetjournals.org/content/316/3/1369.abstract',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Piperine, a major constituent of black pepper, inhibits human P-glycoprotein and CYP3A4',
    'authors'=>'Bhardwaj R. K., Glaeser H., Becquemont L.',
    'year'=>2002,
    'edition'=>'J. Pharmacol. Exp. Ther. 302: 645-50',
    'url'=>'http://jpet.aspetjournals.org/content/302/2/645.long',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Co-administration of piperine and docetaxel results in improved anti-tumor efficacy via inhibition of CYP3A4 activity',
    'authors'=>'Makhov P., Golovine K., Canter D.',
    'year'=>2011,
    'edition'=>'Prostate Jul 27',
    'url'=>'http://onlinelibrary.wiley.com/doi/10.1002/pros.21469/abstract',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Clinical assessment of CYP2D6-mediated herb-drug interactions in humans: effects of milk thistle, black cohosh, goldenseal, kava kava, St. John\'s wort, and Echinacea',
    'authors'=>'Gurley B. J., Swain A. , Hubbard M. A.,',
    'year'=>2008,
    'edition'=>'Mol. Nutr. Food. Res. 52(7): 755-63',
    'url'=>'http://onlinelibrary.wiley.com/doi/10.1002/mnfr.200600300/abstract',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Effects of herbal supplements on drug glucuronidation. Review of clinical, animal, and in vitro studies',
    'authors'=>'Mohamed M. E., Frye R. F.',
    'year'=>2011,
    'edition'=>'Planta Med. 77(4): 311-21',
    'url'=>'https://www.thieme-connect.com/DOI/DOI?10.1055/s-0030-1250457',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Metabolism of hyperforin, the active constituent of St. John\'s wort, in human liver microsomes',
    'authors'=>'Hokkanen J., Tolonen A., Mattila S., Turpeinen M.',
    'year'=>2011,
    'edition'=>'Eur. J. Pharm. Sci. 42(3): 273-84',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S0928098710004136',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'The effects of black pepper on the intestinal absorption and hepatic metabolism of drugs',
    'authors'=>'Han H. K.',
    'year'=>2011,
    'edition'=>'Expert Opin. Drug Metab. Toxicol. 7(6): 721-9',
    'url'=>'http://informahealthcare.com/doi/abs/10.1517/17425255.2011.570332',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Simultaneous determination of the inhibitory potency of herbal extracts on the activity of six major cytochrome P450 enzymes using liquid chromatography/mass spectrometry and automated online extraction.',
    'authors'=>'Unger M., Frank A.',
    'year'=>2004,
    'edition'=>'Rapid Commun Mass Spectrom 18: 2273-81',
    'url'=>'http://onlinelibrary.wiley.com/doi/10.1002/rcm.1621/abstract',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Effect of herbal teas on hepatic drug metabolizing enzymes in rats.',
    'authors'=>'Maliakal P. P., Wanwimolruk S.',
    'year'=>2011,
    'edition'=>'J. Pharm. Pharmacol. 53: 1323-9',
    'url'=>'http://onlinelibrary.wiley.com/doi/10.1211/0022357011777819/pdf',
    'user_id'=>2,
    'validated'=>1
    ] );

    Reference::create( [

    'title'=>'The pregnane X receptor agonist St John\'s Wort has no effects on the pharmacokinetics and pharmacodynamics of repaglinide.',
    'authors'=>'Fan L., Zhou G., Guo D., Liu Y-L.',
    'year'=>2011,
    'edition'=>'Pharmacokinet 50(9): 605-611',
    'url'=>'http://adisonline.com/pharmacokinetics/pages/articleviewer.aspx?year=2011&issue=50090&article=00002&type=abstract',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Herbal interactions involving cytochrome p450 enzymes: a mini review',
    'authors'=>'Delgoda R., Westlake A. C.G.',
    'year'=>2004,
    'edition'=>'Toxicol. Rev. 23(4): 239-249',
    'url'=>'http://adisonline.com/toxicology/pages/articleviewer.aspx?year=2004&issue=23040&article=00004&type=abstract',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Cytotoxic effect of mistletoe (Viscum album L.) extract on Jurkat cells and its interaction with doxorubicin.',
    'authors'=>'Sabová l., Pilátová M., Szilagyi K., Sabo R., Mojžiš J.',
    'year'=>2010,
    'edition'=>'Phytother. Res. 24: 365–368 ',
    'url'=>'http://onlinelibrary.wiley.com/doi/10.1002/ptr.2947/abstract',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'The Licorice Root Derived Isoflavan Glabridin Inhibits the Activities of Human Cytochrome P450S 3A4, 2B6, and 2C9',
    'authors'=>'Kent U. M., Aviram M., Rosenblat M., Hollenberg P. F.',
    'year'=>2002,
    'edition'=>'Drug. Metab. Dispos. 30: 709-15',
    'url'=>'http://dmd.aspetjournals.org/content/30/6/709.full.pdf',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'An in vitro evaluation of human cytochrome P450 3A4 inhibition by selected commercial herbal extracts and tinctures.',
    'authors'=>'Budzinski J. W., Foster B. C., Vandenhoek S., et al.',
    'year'=>2000,
    'edition'=>'Phytomedicine 7: 273-82',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S0944711300800446',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Interactions of herbs with cytochrome P450.',
    'authors'=>'Zhou S., Gao Y., Huang M., Xu A., et al.',
    'year'=>2003,
    'edition'=>'Drug Metab. Rev. 35(1): 35-98',
    'url'=>'http://informahealthcare.com/doi/abs/10.1081/DMR-120018248%20',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Herb Contraindications and Drug Interactions',
    'authors'=>'Brinker F. ',
    'year'=>1998,
    'edition'=>'Herb Contraindications and Drug Interactions. 2nd ed. Sandy, OR: Eclectic Medical Publications',
    'url'=>'http://www.eclecticherb.com/emp/',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Effects of berberine on the blood concentration of cyclosporin A in renal transplanted recipients: clinical and pharmacokinetic study',
    'authors'=>'Wu X., Li Q., Xin H., Yu A., Zhong M.',
    'year'=>2005,
    'edition'=>'Eur. J. Clin. Pharmacol. 61: 567-72',
    'url'=>'http://www.springerlink.com/content/m0xq32041520887n/',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'',
    'authors'=>'Jensen G. S., Ginsberg D. J., Huerta P.',
    'year'=>2000,
    'edition'=>'e JANA 2: 50-6',
    'url'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Astragalus Root: Analytical, quality control, and therapeutic monograph. ',
    'authors'=>'Upton R, ed. ',
    'year'=>1999,
    'edition'=>'Santa Cruz, CA: American Herbal Pharmacopoeia. 1-25',
    'url'=>'',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Immunotherapy with Chinese medicinal herbs. II. Reversal of cyclophosphamide-induced immune suppression by administration of fractionated Astragalus membranaceus in vivo.',
    'authors'=>'Chu D. T., Wong W. L., Mavligit G. M.',
    'year'=>1988,
    'edition'=>'Clin. Lab. Immunol. 25: 125-9',
    'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/3260961',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Effects of Garlic on Cytochromes P450 2C9- and 3A4-Mediated Drug Metabolism in Human Hepatocytes.',
    'authors'=>'Ho B.E., Shen D.D., McCune J.S., Bui T., et al.',
    'year'=>2010,
    'edition'=>'Sci Pharm. 78(3)',
    'url'=>'http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2951329/?tool=pubmed',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Greek plant extracts exhibit selective estrogen receptor modulator (SERM)-like properties',
    'authors'=>'Kassi E., Papoutsi Z., Fokialakis N.,',
    'year'=>2004,
    'edition'=>'J. Agric. Food. Chem. 52: 6956-61 ',
    'url'=>'http://pubs.acs.org/doi/abs/10.1021/jf0400765',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Convulsive ergotism: epidemics of the serotonin syndrome?',
    'authors'=>'Eadie M. J.',
    'year'=>2003,
    'edition'=>'Lancet Neurol 2(7): 429-34',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S1474442203004393',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Alteration of the effects of cancer therapy agents on breast cancer cells by the herbal medicine black cohosh.',
    'authors'=>'Rockwell S., Liu Y., Higgins S. A.',
    'year'=>2005,
    'edition'=>'Breast Cancer Res Treat 90: 233-9',
    'url'=>'http://www.springerlink.com/content/pq0ptu1n41707743/',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Effect of fruit juices on the oral bioavailability of fexofenadine in rats',
    'authors'=>'Kamath A. V., Yao M., Zhang Y., et al.',
    'year'=>2005,
    'edition'=>'J. Pharm. Sci. 94: 233-9',
    'url'=>'http://onlinelibrary.wiley.com/doi/10.1002/jps.20231/abstract',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Pharmacokinetic profiles of anticancer herbal medicines in humans and the clinical implications',
    'authors'=>'Chen X. W., Sneed K. B., Zhou S. F.',
    'year'=>2011,
    'edition'=>'Curr. Med. Chem. 18(21): 3190-210',
    'url'=>'http://www.benthamdirect.org/pages/content.php?CMC/2011/00000018/00000021/0004C.SGM',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'The effects of ergoloid mesylates and ginkgo biloba on the pharmacokinetics of ticlopidine.',
    'authors'=>'Lu W. J., Huang J. D., Lai M. L.',
    'year'=>2006,
    'edition'=>' J. Clin. Pharmacol. 46: 628-34',
    'url'=>'http://jcp.sagepub.com/content/46/6/628.long',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'St. John\'s Wort supplements endanger the success of organ transplantation. ',
    'authors'=>'Ernst E. ',
    'year'=>2002,
    'edition'=>'Arch Surg 137: 316-9',
    'url'=>'http://archsurg.jamanetwork.com/article.aspx?articleid=212243',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Milk thistle, a herbal supplement, decreases the activity of CYP3A4 and uridine diphosphoglucuronosyl transferase in human hepatocyte cultures',
    'authors'=>'Venkataramanan R., Ramachandran V., Komoroski B. J.',
    'year'=>2000,
    'edition'=>'Drug Metab. Dispos. 28: 1270-3.',
    'url'=>'http://dmd.aspetjournals.org/content/28/11/1270.long',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Cannabis and skin diseases',
    'authors'=>'Tennstedt D., Saint-Remy A.',
    'year'=>2011,
    'edition'=>'Eur J Dermatol. 21(1): 5-11',
    'url'=>'http://www.jle.com/fr/revues/medecine/ejd/e-docs/00/04/63/DB/resume.phtml',
    'user_id'=>2,
    'validated'=>1

    ] );

    Reference::create( [

    'title'=>'Effects of grapefruit juice and orange juice on the intestinal efflux of P-glycoprotein substrates',
    'authors'=>'Tian R., Koyabu N., Takanaga H.',
    'year'=>2002,
    'edition'=>'Pharm. Res. 19: 802-9',
    'url'=>'http://www.springerlink.com/content/2cx9k3bg1p11gqp1/',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'6\'7\'-Dihydroxybergamottin contributes to the grapefruit juice effect.',
    'authors'=>'Kakar S. M., Paine M. F., Stewart P. W., Watkins P. B., ',
    'year'=>2004,
    'edition'=>'Clin Pharmacol Ther. 75(6): 569-79',
    'url'=>'http://www.nature.com/clpt/journal/v75/n6/full/clpt2004446a.html',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Medicinal cannabis does not influence the clinical pharmacokinetics of irinotecan and docetaxel.',
    'authors'=>'Engels F. K,. de Jong F. A., Sparreboom A., et al. ',
    'year'=>2007,
    'edition'=>'Oncologist 12(3): 291-300',
    'url'=>'http://theoncologist.alphamedpress.org/content/12/3/291.long',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Herbal remedies-how safe are they? A case report of polymorphic ventricular tachycardia/ventricular fibrillation induced by herbal medication used for obesity.',
    'authors'=>'Agarwal S. C., Crook J. R., Pepper C. B.',
    'year'=>2006,
    'edition'=>'Int. J. Cardiol. 106: 260-1',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S0167527305003104',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Electrocardiographic and hemodynamic effects of a multicomponent dietary supplement containing ephedra and caffeine: a randomized controlled trial',
    'authors'=>'McBride B. F., Karapanos A. K., Krudysz A., et al.',
    'year'=>2004,
    'edition'=>'JAMA 291: 216-21',
    'url'=>'http://jama.ama-assn.org/content/291/2/216.long',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Plant polyphenol curcumin significantly affects CYP1A2 and CYP2A6 activity in healthy, male Chinese volunteers',
    'authors'=>'Chen Y., Liu W. H., Chen B. L., Fan L., et al.',
    'year'=>2010,
    'edition'=>'Ann Pharmacother. 44(6): 1038-45',
    'url'=>'http://www.theannals.com/content/44/6/1038.long',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Hepatic sinusoidal-obstruction syndrome: toxicity of pyrrolizidine alkaloids',
    'authors'=>'Chojkier M.',
    'year'=>2003,
    'edition'=>'J. Hepatol.39: 437-46',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S0168827803002319',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Human liver microsomal reduction of pyrrolizidine alkaloid N-oxides to form the corresponding carcinogenic parent alkaloid.',
    'authors'=>'Wang Y. P., Yan J., Fu P. P., Chou M. W.',
    'year'=>2005,
    'edition'=>'Toxicol. Lett. 155: 411-20',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S0378427404005260',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Effects of microsomal enzyme induction on the toxicity of pyrrolizidine (Senecio) alkaloids',
    'authors'=>'White R. D., Swick R. A., Cheeke P. R., ',
    'year'=>1983,
    'edition'=>'J. Toxicol. Environ Health 12: 633-40',
    'url'=>'http://www.tandfonline.com/doi/abs/10.1080/15287398309530455',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Hepatotoxicity associated with the ingestion of Centella asiatica',
    'authors'=>'Jorge O. A., Jorge A. D.',
    'year'=>2005,
    'edition'=>'Rev. Esp. Enferm. Dig. 97: 115-24',
    'url'=>'http://www.grupoaran.com/mrmUpdate/lecturaPDFfromXML.asp?IdArt=457018&TO=RVN&Eng=1',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Assessing the clinical significance of botanical supplementation on human cytochrome P450 3A activity: comparison of a milk thistle and black cohosh product to rifampin and clarithromycin',
    'authors'=>'Gurley B., Hubbard M. A., Williams D. K., et al.',
    'year'=>2006,
    'edition'=>'J Clin Pharmacol 46: 201-13.',
    'url'=>'http://jcp.sagepub.com/content/46/2/201.long',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Spontaneous reports of assumed herbal hepatotoxicity by black cohosh: is the liver-unspecific Naranjo scale precise enough to ascertain causality?',
    'authors'=>'Teschke R., Schmidt-Taenzer W., Wolff A.',
    'year'=>2011,
    'edition'=>'Pharmacoepidemiol Drug Saf.; 20(6):567-82',
    'url'=>'http://onlinelibrary.wiley.com/doi/10.1002/pds.2127/abstract;jsessionid=0D9FF8DB1F287D0AC1E3E0B75006932F.d03t01?systemMessage=Wiley+Online+Library+will+be+disrupted+on+7+July+from+10%3A00-12%3A00+BST+%2805%3A00-07%3A00+EDT%29+for+essential+maintenance',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Hepatotoxicity of NONI juice: report of two cases',
    'authors'=>'Stadlbauer V., Fickert P., Lackner C., et al. ',
    'year'=>2005,
    'edition'=>'World J. Gastroenterol. 11: 4758-60',
    'url'=>'http://www.wjgnet.com/1007-9327/full/v11/i30/4758.htm',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Acute hepatitis induced by greater celandine (Chelidonium majus).',
    'authors'=>'Benninger J., Schneider H. T., Schuppan D., et al., ',
    'year'=>1999,
    'edition'=>'Gastroenterology 117: 1234-7',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S0016508599704105',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Hepatitis from Greater celandine (Chelidonium majus L.): review of literature and report of a new case.',
    'authors'=>'Moro P. A., Cassetti F., Giugliano G., et al., ',
    'year'=>2009,
    'edition'=>'J. Ethnopharmacol. 124(2): 328-32',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S0378874109002517',
    'user_id'=>2,
    'validated'=>1
    ] );
    Reference::create( [

    'title'=>'Assessment of intestinal absorption of vitexin-2\'\'-o-rhamnoside in hawthorn leaves flavonoids in rat using in situ and in vitro absorption models.',
    'authors'=>'Xu Y. A., Fan G., Gao S., et al.',
    'year'=>2008,
    'edition'=>'Drug Dev Ind Pharm. 34(2): 164-70',
    'url'=>'http://informahealthcare.com/doi/abs/10.1080/03639040701484668',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Inhibition of human cytochrome P450 enzymes by constituents of St. John\'s Wort, an herbal preparation used in the treatment of depression',
    'authors'=>'Obach R. S.',
    'year'=>2002,
    'edition'=>' J Pharmacol Exp Ther. 294(1): 88-95',
    'url'=>'http://jpet.aspetjournals.org/content/294/1/88.long',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Differential drug-induced mRNA expression of human CYP3A4 compared to CYP3A5, CYP3A7 and CYP3A43',
    'authors'=>'Krusekopf S., Roots I., Kleeberg U., ',
    'year'=>2003,
    'edition'=>'Eur J Pharmacol. 466(1-2): 7-12',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S001429990301481X',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Fruit juices inhibit organic anion transporting polypeptide-mediated drug uptake to decrease the oral availability of fexofenadine',
    'authors'=>'Dresser G. K., Bailey D. G., Leake B. F., et al. ',
    'year'=>2002,
    'edition'=>'Clin. Pharmacol. Ther. 71(1): 11-20',
    'url'=>'http://www.nature.com/clpt/journal/v71/n1/abs/clpt20023a.html',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Herbal remedies in the United States: potential adverse interactions with anticancer agents',
    'authors'=>'Sparreboom A., Cox M. C., Acharya M. R. , et al. ',
    'year'=>2004,
    'edition'=>'JCO 22(12): 2489-2503',
    'url'=>'http://jco.ascopubs.org/content/22/12/2489.long',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Phase II study of combined 5-fluorouracil/ Ginkgo biloba extract (GBE 761 ONC) therapy in 5-fluorouracil pretreated patients with advanced colorectal cancer',
    'authors'=>'Hauns B., Haring B., Kahler S., Mross K., Unger C.',
    'year'=>2001,
    'edition'=>'Phytother. Res. 15(1): 34-8',
    'url'=>'http://onlinelibrary.wiley.com/doi/10.1002/1099-1573%28200102%2915:1%3C34::AID-PTR755%3E3.0.CO;2-2/abstract;jsessionid=8AEA40E416856B12665D86368F8DB407.d01t01',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Mechanism-based inhibition of CYP3A4 and CYP2D6 by Indonesian medicinal plants.',
    'authors'=>'Subehan, Usia T, Iwata H, et al.',
    'year'=>2006,
    'edition'=>'J Ethnopharmacol. 105(3):449-55',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S0378874105008007',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'The induction of CYP1A2, CYP2D6 and CYP3A4 by six trade herbal products in cultured primary human hepatocytes',
    'authors'=>'Hellum BH, Hu Z, Nilsen OG.',
    'year'=>2007,
    'edition'=>'Basic Clin. Pharmacol. Toxicol. 100(1): 23-30',
    'url'=>'http://onlinelibrary.wiley.com/doi/10.1111/j.1742-7843.2007.00011.x/abstract;jsessionid=C36A11D0ABB66C6629A0E2CE8AEC729A.d02t03',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'The in vitro inhibitory potential of trade herbal products on human CYP2D6-mediated metabolism and the influence of ethanol',
    'authors'=>'Hellum BH, Nilsen OG.',
    'year'=>2007,
    'edition'=>'Basic Clin. Pharmacol. Toxicol. 101(5): 350-8',
    'url'=>'http://onlinelibrary.wiley.com/doi/10.1111/j.1742-7843.2007.00121.x/abstract',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'In vitro inhibition of human cytochrome P450-mediated metabolism of marker substrates by natural products.',
    'authors'=>'Foster BC, Vandenhoek S, Hana J',
    'year'=>2003,
    'edition'=>'Phytomedicine. 10(4): 334-42',
    'url'=>'http://www.mendeley.com/research/vitro-inhibition-human-cytochrome-p450mediated-metabolism-marker-substrates-natural-products/',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Comparison of the pharmacokinetics and pharmacodynamics of S-1 between Caucasian and East Asian patients',
    'authors'=>'Chuah B., Goh B. C., Lee S. C., Soong R., et al.',
    'year'=>2011,
    'edition'=>'Cancer Sci. 102(2): 478-83',
    'url'=>'http://onlinelibrary.wiley.com/doi/10.1111/j.1349-7006.2010.01793.x/abstract;jsessionid=AFA68A3BBEB818A8567CE5D62E5D9843.d03t04',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'The role of transporters in drug interactions.',
    'authors'=>'Endres C.J., Hsiao P., Chung F.S., Unadkat J.D.',
    'year'=>2006,
    'edition'=>'Europ. J. Pharm. Sci. 27( 5): 501-517',
    'url'=>'http://www.sciencedirect.com/science/article/pii/S0928098705003325',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Identification and exploration of herb-drug combinations used by cancer patients.',
    'authors'=>'Engdal S., Klepp O., Nilsen O.G.',
    'year'=>2009,
    'edition'=>'Integr Cancer Ther. 8(1): 29-36',
    'url'=>'http://ict.sagepub.com/content/8/1/29.long',
    'user_id'=>2,
    'validated'=>1
    ] );



    Reference::create( [

    'title'=>'Effects of herbal products on the metabolism and transport of anticancer agents.',
    'authors'=>'He S-M., Yang A-K., Li  X-T., Du Y-M., et al. ',
    'year'=>2010,
    'edition'=>'Expert Opin. Drug Metab. Toxicol. 6(10): 1195-1213',
    'url'=>'http://informahealthcare.com/doi/abs/10.1517/17425255.2010.510132',
    'user_id'=>2,
    'validated'=>1
    ] );






    }
}
