<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_medicatie_bewaking_koppelen_met_zrs' table.
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
class GsMedicatieBewakingKoppelenMetZrsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsMedicatieBewakingKoppelenMetZrsTableMap';

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
        $this->setName('gs_medicatie_bewaking_koppelen_met_zrs');
        $this->setPhpName('GsMedicatieBewakingKoppelenMetZrs');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsMedicatieBewakingKoppelenMetZrs');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addColumn('thesaurus_verwijzing_tekstmodule', 'ThesaurusVerwijzingTekstmodule', 'INTEGER', false, null, null);
        $this->addPrimaryKey('tekstmodule', 'Tekstmodule', 'INTEGER', true, null, null);
        $this->addColumn('thesaurus_verwijzing_tekstsoort', 'ThesaurusVerwijzingTekstsoort', 'INTEGER', false, null, null);
        $this->addPrimaryKey('tekstsoort', 'Tekstsoort', 'INTEGER', true, null, null);
        $this->addPrimaryKey('tekst_nivo_kode', 'TekstNivoKode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('tekstbloknummer', 'Tekstbloknummer', 'INTEGER', true, null, null);
        $this->addColumn('aanleiding', 'Aanleiding', 'INTEGER', false, null, null);
        $this->addColumn('subaanleiding', 'Subaanleiding', 'INTEGER', false, null, null);
        $this->addColumn('analyse', 'Analyse', 'INTEGER', false, null, null);
        $this->addColumn('subanalyse', 'Subanalyse', 'INTEGER', false, null, null);
        $this->addColumn('actie', 'Actie', 'INTEGER', false, null, null);
        $this->addColumn('actiegroep', 'Actiegroep', 'INTEGER', false, null, null);
        $this->addColumn('actieregel', 'Actieregel', 'INTEGER', false, null, null);
        $this->addPrimaryKey('volgnummer', 'Volgnummer', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsMedicatieBewakingKoppelenMetZrsTableMap
