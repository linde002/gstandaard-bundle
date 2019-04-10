<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_codestelsel_zrs' table.
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
class GsCodestelselZrsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsCodestelselZrsTableMap';

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
        $this->setName('gs_codestelsel_zrs');
        $this->setPhpName('GsCodestelselZrs');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsCodestelselZrs');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('soort_code', 'SoortCode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('zorg_registratie_nummer', 'ZorgRegistratieNummer', 'INTEGER', true, null, null);
        $this->addColumn('memocode_bij_zr_nummer_uniek_per_aaacod', 'MemocodeBijZrNummerUniekPerAaacod', 'VARCHAR', false, 255, null);
        $this->addColumn('omschrijving_zrnr_in_70_posities_voor_keuzemenus', 'OmschrijvingZrnrIn70PositiesVoorKeuzemenus', 'VARCHAR', false, 255, null);
        $this->addColumn('omschrijving_zrnr_in_45_posities_voor_op_etiket', 'OmschrijvingZrnrIn45PositiesVoorOpEtiket', 'VARCHAR', false, 255, null);
        $this->addColumn('tekstmodulethesaurus_103', 'Tekstmodulethesaurus103', 'INTEGER', false, null, null);
        $this->addColumn('tekstmodule', 'Tekstmodule', 'INTEGER', false, null, null);
        $this->addColumn('tekstsoortthesaurus_104', 'Tekstsoortthesaurus104', 'INTEGER', false, null, null);
        $this->addColumn('tekstsoort', 'Tekstsoort', 'INTEGER', false, null, null);
        $this->addColumn('tekst_nivo_kode', 'TekstNivoKode', 'INTEGER', false, null, null);
        $this->addColumn('datum_van_1e_opname', 'DatumVan1eOpname', 'DATE', false, null, null);
        $this->addColumn('datum_van_laatste_mutatie', 'DatumVanLaatsteMutatie', 'DATE', false, null, null);
        $this->addColumn('datum_van_inactief_maken', 'DatumVanInactiefMaken', 'DATE', false, null, null);
        $this->addColumn('thesaurusnummer', 'Thesaurusnummer', 'INTEGER', false, null, null);
        $this->addColumn('thesaurus_itemnummer', 'ThesaurusItemnummer', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsCodestelselZrsTableMap
