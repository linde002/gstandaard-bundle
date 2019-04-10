<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_interacties_koppeling' table.
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
class GsInteractiesKoppelingTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsInteractiesKoppelingTableMap';

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
        $this->setName('gs_interacties_koppeling');
        $this->setPhpName('GsInteractiesKoppeling');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsInteractiesKoppeling');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('gpk_code_interactiewaarschuwing_a', 'GpkCodeInteractiewaarschuwingA', 'INTEGER', true, null, null);
        $this->addPrimaryKey('gpk_code_interactiewaarschuwing_b', 'GpkCodeInteractiewaarschuwingB', 'INTEGER', true, null, null);
        $this->addPrimaryKey('interactiewaarschuwing_code', 'InteractiewaarschuwingCode', 'INTEGER', true, null, null);
        $this->addColumn('relevante_periode_na_staken_van_a_in_dagen', 'RelevantePeriodeNaStakenVanAInDagen', 'INTEGER', false, null, null);
        $this->addColumn('relevante_periode_na_staken_van_b_in_dagen', 'RelevantePeriodeNaStakenVanBInDagen', 'INTEGER', false, null, null);
        $this->addColumn('relevant_indien_a_wordt_toegevoegd_aan_b', 'RelevantIndienAWordtToegevoegdAanB', 'TINYINT', false, null, null);
        $this->addColumn('relevant_indien_b_wordt_toegevoegd_aan_a', 'RelevantIndienBWordtToegevoegdAanA', 'TINYINT', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsInteractiesKoppelingTableMap
