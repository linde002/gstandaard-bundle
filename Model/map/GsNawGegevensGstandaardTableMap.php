<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_naw_gegevens_gstandaard' table.
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
class GsNawGegevensGstandaardTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsNawGegevensGstandaardTableMap';

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
        $this->setName('gs_naw_gegevens_gstandaard');
        $this->setPhpName('GsNawGegevensGstandaard');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsNawGegevensGstandaard');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignKey('thesaurusnummer_soort_naw', 'ThesaurusnummerSoortNaw', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignPrimaryKey('naw_soort', 'NawSoort', 'INTEGER' , 'gs_thesauri_totaal', 'thesaurus_itemnummer', true, null, null);
        $this->addPrimaryKey('naw_nummer', 'NawNummer', 'INTEGER', true, null, null);
        $this->addColumn('memocode_onderneming_3_posities_alfanumeriek', 'MemocodeOnderneming3PositiesAlfanumeriek', 'VARCHAR', false, 255, null);
        $this->addColumn('memocode_onderneming_2_posities_numeriek', 'MemocodeOnderneming2PositiesNumeriek', 'INTEGER', false, null, null);
        $this->addColumn('naam', 'Naam', 'VARCHAR', false, 255, null);
        $this->addColumn('adres', 'Adres', 'VARCHAR', false, 255, null);
        $this->addColumn('postcode', 'Postcode', 'VARCHAR', false, 255, null);
        $this->addColumn('woonplaats', 'Woonplaats', 'VARCHAR', false, 255, null);
        $this->addColumn('land', 'Land', 'VARCHAR', false, 255, null);
        $this->addColumn('postbusnummer', 'Postbusnummer', 'VARCHAR', false, 255, null);
        $this->addColumn('postcode_postbus', 'PostcodePostbus', 'VARCHAR', false, 255, null);
        $this->addColumn('telefoonnummer_ondernemer', 'TelefoonnummerOndernemer', 'VARCHAR', false, 255, null);
        $this->addColumn('faxnummer', 'Faxnummer', 'VARCHAR', false, 255, null);
        $this->addColumn('zoeknaam', 'Zoeknaam', 'VARCHAR', false, 255, null);
        $this->addColumn('land_memocode', 'LandMemocode', 'VARCHAR', false, 255, null);
        $this->addColumn('lic_nummer', 'LicNummer', 'VARCHAR', false, 255, null);
        $this->addColumn('gln_code', 'GlnCode', 'BIGINT', false, null, null);
        $this->addColumn('uzovi_code', 'UzoviCode', 'INTEGER', false, null, null);
        $this->addColumn('agb_code', 'AgbCode', 'INTEGER', false, null, null);
        $this->addColumn('reservenummer_1', 'Reservenummer1', 'INTEGER', false, null, null);
        $this->addColumn('reservenummer_2', 'Reservenummer2', 'INTEGER', false, null, null);
        $this->addColumn('slug', 'Slug', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SoortOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurusnummer_soort_naw' => 'thesaurusnummer', 'naw_soort' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('GsArtikelEigenschappen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelEigenschappen', RelationMap::ONE_TO_MANY, array('naw_nummer' => 'leverancier_nummer', ), null, null, 'GsArtikelEigenschappens');
        $this->addRelation('GsArtikelenRelatedByLeverancierKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::ONE_TO_MANY, array('naw_nummer' => 'leverancier_kode', ), null, null, 'GsArtikelensRelatedByLeverancierKode');
        $this->addRelation('GsArtikelenRelatedByImporteurKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::ONE_TO_MANY, array('naw_nummer' => 'importeur_kode', ), null, null, 'GsArtikelensRelatedByImporteurKode');
        $this->addRelation('GsArtikelenRelatedByRegistratiehouderKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::ONE_TO_MANY, array('naw_nummer' => 'registratiehouder_kode', ), null, null, 'GsArtikelensRelatedByRegistratiehouderKode');
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'sluggable' =>  array (
  'add_cleanup' => 'true',
  'slug_column' => 'slug',
  'slug_pattern' => '{Naam}',
  'replace_pattern' => '/\\W+/',
  'replacement' => '-',
  'separator' => '-',
  'permanent' => 'false',
  'scope_column' => '',
),
        );
    } // getBehaviors()

} // GsNawGegevensGstandaardTableMap
