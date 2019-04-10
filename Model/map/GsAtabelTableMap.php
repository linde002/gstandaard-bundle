<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_atabel' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.PharmaIntelligence.GstandaardBundle.Model.map
 */
class GsAtabelTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsAtabelTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('gs_atabel');
        $this->setPhpName('GsAtabel');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsAtabel');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('unieknummer_per_eenheid_gebruiksadvies', 'UnieknummerPerEenheidGebruiksadvies', 'INTEGER', true, null, null);
        $this->addColumn('memocode_eenheid_gebruiksadvies', 'MemocodeEenheidGebruiksadvies', 'VARCHAR', false, 255, null);
        $this->addColumn('omschrijving_eenheid_gebruiksadvies_enkelvoud', 'OmschrijvingEenheidGebruiksadviesEnkelvoud', 'VARCHAR', false, 255, null);
        $this->addColumn('omschrijving_eenheid_gebruiksadvies_meervoud', 'OmschrijvingEenheidGebruiksadviesMeervoud', 'VARCHAR', false, 255, null);
        $this->addColumn('registratiedatum_gstandaard', 'RegistratiedatumGstandaard', 'VARCHAR', false, 255, null);
        $this->addColumn('versienummer_wcia_tabellen_eerste_opname', 'VersienummerWciaTabellenEersteOpname', 'INTEGER', false, null, null);
        $this->addColumn('versienummer_wcia_tabellen_laatste_wijziging', 'VersienummerWciaTabellenLaatsteWijziging', 'INTEGER', false, null, null);
        $this->addColumn('versienummer_wcia_tabellen_vervallen', 'VersienummerWciaTabellenVervallen', 'INTEGER', false, null, null);
        $this->addColumn('basiseenheid_product_thesaurusnr', 'BasiseenheidProductThesaurusnr', 'INTEGER', false, null, null);
        $this->addColumn('hoeveelheid_overeenkomstige_eenheid', 'HoeveelheidOvereenkomstigeEenheid', 'DECIMAL', false, 12, null);
        $this->addColumn('basiseenheid_product_kode', 'BasiseenheidProductKode', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsAtabelTableMap
