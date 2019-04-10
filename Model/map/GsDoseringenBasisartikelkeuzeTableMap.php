<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_doseringen_basisartikelkeuze' table.
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
class GsDoseringenBasisartikelkeuzeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsDoseringenBasisartikelkeuzeTableMap';

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
        $this->setName('gs_doseringen_basisartikelkeuze');
        $this->setPhpName('GsDoseringenBasisartikelkeuze');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsDoseringenBasisartikelkeuze');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('generiekeproductcode', 'Generiekeproductcode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('prkcode', 'Prkcode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('handelsproduktkode', 'Handelsproduktkode', 'INTEGER', true, null, null);
        $this->addColumn('thesaurus_soortdoseringscode', 'ThesaurusSoortdoseringscode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('soortdoseringscode', 'Soortdoseringscode', 'INTEGER', true, null, null);
        $this->addColumn('dosisbasisnummer', 'Dosisbasisnummer', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsDoseringenBasisartikelkeuzeTableMap
