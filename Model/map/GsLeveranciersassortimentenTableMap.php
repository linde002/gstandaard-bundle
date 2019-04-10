<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_leveranciersassortimenten' table.
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
class GsLeveranciersassortimentenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsLeveranciersassortimentenTableMap';

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
        $this->setName('gs_leveranciersassortimenten');
        $this->setPhpName('GsLeveranciersassortimenten');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsLeveranciersassortimenten');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('assortimentsnummer', 'Assortimentsnummer', 'INTEGER', true, null, null);
        $this->addForeignKey('zinummer', 'Zinummer', 'INTEGER', 'gs_artikelen', 'zinummer', false, null, null);
        $this->addColumn('intern_artikelnummer_assorthouder', 'InternArtikelnummerAssorthouder', 'VARCHAR', false, 255, null);
        $this->addColumn('faktor_van_het_artikelnummer', 'FaktorVanHetArtikelnummer', 'DECIMAL', false, 6, null);
        $this->addColumn('omschrijving', 'Omschrijving', 'VARCHAR', false, 255, null);
        $this->addColumn('assortimentshouder', 'Assortimentshouder', 'INTEGER', false, null, null);
        $this->addColumn('datum_van_ingang', 'DatumVanIngang', 'DATE', false, null, null);
        $this->addColumn('retourtermijn', 'Retourtermijn', 'INTEGER', false, null, null);
        $this->addColumn('retouraanduiding', 'Retouraanduiding', 'VARCHAR', false, 255, null);
        $this->addColumn('retourpercentage', 'Retourpercentage', 'INTEGER', false, null, null);
        $this->addColumn('assortimentsprijs', 'Assortimentsprijs', 'DECIMAL', false, 8, null);
        $this->addColumn('opgegeven_verkoopprijs', 'OpgegevenVerkoopprijs', 'DECIMAL', false, 8, null);
        $this->addColumn('btwkode_van_assortimentshouder', 'BtwkodeVanAssortimentshouder', 'INTEGER', false, null, null);
        $this->addColumn('hoeveelheid', 'Hoeveelheid', 'DECIMAL', false, 8, null);
        $this->addColumn('eenheid', 'Eenheid', 'VARCHAR', false, 255, null);
        $this->addColumn('ean_barcode', 'EanBarcode', 'BIGINT', false, 14, null);
        $this->addColumn('hibc_barcode', 'HibcBarcode', 'VARCHAR', false, 255, null);
        $this->addColumn('minikaart_kode', 'MinikaartKode', 'INTEGER', false, null, null);
        $this->addColumn('bestelmogelijkheid', 'Bestelmogelijkheid', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsArtikelen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::MANY_TO_ONE, array('zinummer' => 'zinummer', ), null, null);
    } // buildRelations()

} // GsLeveranciersassortimentenTableMap
