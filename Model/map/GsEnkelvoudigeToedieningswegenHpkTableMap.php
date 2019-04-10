<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_enkelvoudige_toedieningswegen_hpk' table.
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
class GsEnkelvoudigeToedieningswegenHpkTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsEnkelvoudigeToedieningswegenHpkTableMap';

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
        $this->setName('gs_enkelvoudige_toedieningswegen_hpk');
        $this->setPhpName('GsEnkelvoudigeToedieningswegenHpk');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsEnkelvoudigeToedieningswegenHpk');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('handelsproduktkode', 'Handelsproduktkode', 'INTEGER', true, null, null);
        $this->addColumn('prkcode', 'Prkcode', 'INTEGER', false, null, null);
        $this->addColumn('toedieningswegen_thesaurusnummer', 'ToedieningswegenThesaurusnummer', 'INTEGER', false, null, null);
        $this->addPrimaryKey('enkelvoudige_toedieningsweg_itemnr', 'EnkelvoudigeToedieningswegItemnr', 'INTEGER', true, null, null);
        $this->addColumn('toedieningsweg_geregistreerd', 'ToedieningswegGeregistreerd', 'TINYINT', false, null, null);
        $this->addColumn('voorkeurstoedieningsweg_indicatie_thesaurusnummer', 'VoorkeurstoedieningswegIndicatieThesaurusnummer', 'INTEGER', false, null, null);
        $this->addColumn('voorkeurstoedieningsweg_indicatie_itemnummer', 'VoorkeurstoedieningswegIndicatieItemnummer', 'INTEGER', false, null, null);
        $this->addColumn('bron_toedieningsweg_thesaurusnummer', 'BronToedieningswegThesaurusnummer', 'INTEGER', false, null, null);
        $this->addColumn('bron_toedieningsweg_itemnummer', 'BronToedieningswegItemnummer', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsEnkelvoudigeToedieningswegenHpkTableMap
