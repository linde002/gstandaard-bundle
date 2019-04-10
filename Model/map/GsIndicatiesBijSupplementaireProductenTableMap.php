<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_indicaties_bij_supplementaire_producten' table.
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
class GsIndicatiesBijSupplementaireProductenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsIndicatiesBijSupplementaireProductenTableMap';

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
        $this->setName('gs_indicaties_bij_supplementaire_producten');
        $this->setPhpName('GsIndicatiesBijSupplementaireProducten');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsIndicatiesBijSupplementaireProducten');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignPrimaryKey('zindex_nummer', 'ZindexNummer', 'INTEGER' , 'gs_artikelen', 'zinummer', true, null, null);
        $this->addPrimaryKey('indicatie_id', 'IndicatieId', 'INTEGER', true, null, null);
        $this->addColumn('tekstmodule_indicatie_id', 'TekstmoduleIndicatieId', 'INTEGER', false, null, null);
        $this->addColumn('thesaurus_nummer_soort_indicatie', 'ThesaurusNummerSoortIndicatie', 'INTEGER', false, null, null);
        $this->addColumn('soort_indicatie', 'SoortIndicatie', 'INTEGER', false, null, null);
        $this->addColumn('duiding_id', 'DuidingId', 'INTEGER', false, null, null);
        $this->addColumn('tekstmodule_duiding_id', 'TekstmoduleDuidingId', 'INTEGER', false, null, null);
        $this->addColumn('aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn', 'AanspraakOpGeneesmiddelBijIndicatieVolgensZn', 'CHAR', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsArtikelen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::MANY_TO_ONE, array('zindex_nummer' => 'zinummer', ), null, null);
    } // buildRelations()

} // GsIndicatiesBijSupplementaireProductenTableMap
