<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_lokale_codes_zorgverzekeraars_zspcs' table.
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
class GsLokaleCodesZorgverzekeraarsZspcsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsLokaleCodesZorgverzekeraarsZspcsTableMap';

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
        $this->setName('gs_lokale_codes_zorgverzekeraars_zspcs');
        $this->setPhpName('GsLokaleCodesZorgverzekeraarsZspcs');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsLokaleCodesZorgverzekeraarsZspcs');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('zorgverzekeraar_specifieke_prestatie_code', 'ZorgverzekeraarSpecifiekePrestatieCode', 'BIGINT', true, 11, null);
        $this->addColumn('uzovi_code_zorgverzekeraar', 'UzoviCodeZorgverzekeraar', 'BIGINT', false, 11, null);
        $this->addColumn('artikel_omschrijving', 'ArtikelOmschrijving', 'VARCHAR', false, 255, null);
        $this->addColumn('etiketnaam', 'Etiketnaam', 'VARCHAR', false, 255, null);
        $this->addColumn('memocode', 'Memocode', 'VARCHAR', false, 255, null);
        $this->addColumn('hoeveelheid', 'Hoeveelheid', 'DECIMAL', false, 8, null);
        $this->addColumn('thesaurusverwijzing_eenheid', 'ThesaurusverwijzingEenheid', 'INTEGER', false, null, null);
        $this->addColumn('eenheid', 'Eenheid', 'INTEGER', false, null, null);
        $this->addColumn('declaratieprijs', 'Declaratieprijs', 'DECIMAL', false, 8, null);
        $this->addColumn('wmg', 'Wmg', 'TINYINT', false, null, null);
        $this->addColumn('uitsluitend_voor_gecontracteerde_apotheken', 'UitsluitendVoorGecontracteerdeApotheken', 'TINYINT', false, null, null);
        $this->addColumn('tariefsoort_thesaurus_verwijzing', 'TariefsoortThesaurusVerwijzing', 'INTEGER', false, null, null);
        $this->addColumn('tariefsoort', 'Tariefsoort', 'INTEGER', false, null, null);
        $this->addColumn('begindatum', 'Begindatum', 'DATE', false, null, null);
        $this->addColumn('vervaldatum', 'Vervaldatum', 'DATE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsLokaleCodesZorgverzekeraarsZspcsTableMap
