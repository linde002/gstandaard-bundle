<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_bewakingen_kenmerken' table.
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
class GsBewakingenKenmerkenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsBewakingenKenmerkenTableMap';

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
        $this->setName('gs_bewakingen_kenmerken');
        $this->setPhpName('GsBewakingenKenmerken');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsBewakingenKenmerken');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('bewakingscode_ci', 'BewakingscodeCi', 'INTEGER', true, null, null);
        $this->addColumn('omschrijving_cibewaking', 'OmschrijvingCibewaking', 'VARCHAR', false, 255, null);
        $this->addColumn('thesnr_bewakingssoort', 'ThesnrBewakingssoort', 'INTEGER', false, null, null);
        $this->addColumn('bewakingssoort', 'Bewakingssoort', 'INTEGER', false, null, null);
        $this->addColumn('thesnr_folder', 'ThesnrFolder', 'INTEGER', false, null, null);
        $this->addColumn('folder', 'Folder', 'INTEGER', false, null, null);
        $this->addColumn('volgens_deskundigen_jn', 'VolgensDeskundigenJn', 'TINYINT', false, null, null);
        $this->addColumn('actie_nodig_jn', 'ActieNodigJn', 'TINYINT', false, null, null);
        $this->addColumn('datum_vastlegging_winap', 'DatumVastleggingWinap', 'INTEGER', false, null, null);
        $this->addColumn('datum_opvoer_gstandaard', 'DatumOpvoerGstandaard', 'INTEGER', false, null, null);
        $this->addColumn('datum_mutatie_gstandaard', 'DatumMutatieGstandaard', 'INTEGER', false, null, null);
        $this->addColumn('creatinine_klaring', 'CreatinineKlaring', 'INTEGER', false, null, null);
        $this->addColumn('bewaking_te_volgen_door_monitoren', 'BewakingTeVolgenDoorMonitoren', 'TINYINT', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsBewakingenKenmerkenTableMap
