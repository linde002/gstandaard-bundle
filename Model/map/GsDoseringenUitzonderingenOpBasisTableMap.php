<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_doseringen_uitzonderingen_op_basis' table.
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
class GsDoseringenUitzonderingenOpBasisTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsDoseringenUitzonderingenOpBasisTableMap';

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
        $this->setName('gs_doseringen_uitzonderingen_op_basis');
        $this->setPhpName('GsDoseringenUitzonderingenOpBasis');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsDoseringenUitzonderingenOpBasis');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('dosisbasisnummer', 'Dosisbasisnummer', 'INTEGER', true, null, null);
        $this->addPrimaryKey('identificerend_volgnummer', 'IdentificerendVolgnummer', 'INTEGER', true, null, null);
        $this->addColumn('thesaurus_zorggroepcodering', 'ThesaurusZorggroepcodering', 'INTEGER', false, null, null);
        $this->addColumn('zorggroepcodering', 'Zorggroepcodering', 'INTEGER', false, null, null);
        $this->addColumn('icpc1nummer', 'Icpc1nummer', 'INTEGER', false, null, null);
        $this->addColumn('thesaurus_verbijzondering', 'ThesaurusVerbijzondering', 'INTEGER', false, null, null);
        $this->addColumn('verbijzondering', 'Verbijzondering', 'INTEGER', false, null, null);
        $this->addColumn('icpc2nummer', 'Icpc2nummer', 'INTEGER', false, null, null);
        $this->addColumn('icd10nummer', 'Icd10nummer', 'INTEGER', false, null, null);
        $this->addColumn('thesaurus_afwijkende_toedieningsweg', 'ThesaurusAfwijkendeToedieningsweg', 'INTEGER', false, null, null);
        $this->addColumn('toedieningsweg_code', 'ToedieningswegCode', 'INTEGER', false, null, null);
        $this->addColumn('dosiscategorienummer', 'Dosiscategorienummer', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsDoseringenUitzonderingenOpBasisTableMap
