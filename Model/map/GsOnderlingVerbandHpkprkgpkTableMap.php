<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_onderling_verband_hpkprkgpk' table.
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
class GsOnderlingVerbandHpkprkgpkTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsOnderlingVerbandHpkprkgpkTableMap';

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
        $this->setName('gs_onderling_verband_hpkprkgpk');
        $this->setPhpName('GsOnderlingVerbandHpkprkgpk');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsOnderlingVerbandHpkprkgpk');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('handelsproduktkode', 'Handelsproduktkode', 'INTEGER', true, null, null);
        $this->addColumn('prkcode', 'Prkcode', 'INTEGER', false, null, null);
        $this->addColumn('aantal_eenheden_prk_in_hpk', 'AantalEenhedenPrkInHpk', 'DECIMAL', false, 8, null);
        $this->addColumn('generiekeproductcode', 'Generiekeproductcode', 'INTEGER', false, null, null);
        $this->addColumn('aantal_eenheden_gpk_in_prk', 'AantalEenhedenGpkInPrk', 'DECIMAL', false, 8, null);
        $this->addColumn('aantal_eenheden_gpk_in_hpk', 'AantalEenhedenGpkInHpk', 'DECIMAL', false, 8, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsOnderlingVerbandHpkprkgpkTableMap
