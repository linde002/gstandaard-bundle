<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_relatie_tussen_zinummer_hibc' table.
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
class GsRelatieTussenZinummerHibcTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsRelatieTussenZinummerHibcTableMap';

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
        $this->setName('gs_relatie_tussen_zinummer_hibc');
        $this->setPhpName('GsRelatieTussenZinummerHibc');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatieTussenZinummerHibc');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignPrimaryKey('zinummer', 'Zinummer', 'INTEGER' , 'gs_artikelen', 'zinummer', true, null, null);
        $this->addColumn('hibcbarcode', 'Hibcbarcode', 'VARCHAR', false, 255, null);
        $this->addColumn('handelsproduktkode', 'Handelsproduktkode', 'VARCHAR', false, 255, null);
        $this->addColumn('identificatie_nummer', 'IdentificatieNummer', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsArtikelen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::MANY_TO_ONE, array('zinummer' => 'zinummer', ), null, null);
    } // buildRelations()

} // GsRelatieTussenZinummerHibcTableMap
