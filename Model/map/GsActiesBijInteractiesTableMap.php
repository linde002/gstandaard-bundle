<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_acties_bij_interacties' table.
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
class GsActiesBijInteractiesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsActiesBijInteractiesTableMap';

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
        $this->setName('gs_acties_bij_interacties');
        $this->setPhpName('GsActiesBijInteracties');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsActiesBijInteracties');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('interactiewaarschuwing_code', 'InteractiewaarschuwingCode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('volgnummer_actie', 'VolgnummerActie', 'INTEGER', true, null, null);
        $this->addColumn('acties_bij_interactiesthes_130', 'ActiesBijInteractiesthes130', 'INTEGER', false, null, null);
        $this->addColumn('actie_bij_interactie', 'ActieBijInteractie', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsActiesBijInteractiesTableMap
