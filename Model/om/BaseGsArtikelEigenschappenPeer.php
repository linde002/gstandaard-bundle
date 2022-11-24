<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsArtikelEigenschappenTableMap;

abstract class BaseGsArtikelEigenschappenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_artikel_eigenschappen';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelEigenschappen';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsArtikelEigenschappenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 32;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 32;

    /** the column name for the zindex_nummer field */
    const ZINDEX_NUMMER = 'gs_artikel_eigenschappen.zindex_nummer';

    /** the column name for the verpakkings_hoeveelheid field */
    const VERPAKKINGS_HOEVEELHEID = 'gs_artikel_eigenschappen.verpakkings_hoeveelheid';

    /** the column name for the verpakkings_hoeveelheid_omschrijving field */
    const VERPAKKINGS_HOEVEELHEID_OMSCHRIJVING = 'gs_artikel_eigenschappen.verpakkings_hoeveelheid_omschrijving';

    /** the column name for the hoofdverpakking_omschrijving field */
    const HOOFDVERPAKKING_OMSCHRIJVING = 'gs_artikel_eigenschappen.hoofdverpakking_omschrijving';

    /** the column name for the deelverpakking_omschrijving field */
    const DEELVERPAKKING_OMSCHRIJVING = 'gs_artikel_eigenschappen.deelverpakking_omschrijving';

    /** the column name for the basiseenheid_omschrijving field */
    const BASISEENHEID_OMSCHRIJVING = 'gs_artikel_eigenschappen.basiseenheid_omschrijving';

    /** the column name for the inkoophoeveelheid_omschrijving field */
    const INKOOPHOEVEELHEID_OMSCHRIJVING = 'gs_artikel_eigenschappen.inkoophoeveelheid_omschrijving';

    /** the column name for the hpk field */
    const HPK = 'gs_artikel_eigenschappen.hpk';

    /** the column name for the prk field */
    const PRK = 'gs_artikel_eigenschappen.prk';

    /** the column name for the gpk field */
    const GPK = 'gs_artikel_eigenschappen.gpk';

    /** the column name for the atc field */
    const ATC = 'gs_artikel_eigenschappen.atc';

    /** the column name for the etiket_naam field */
    const ETIKET_NAAM = 'gs_artikel_eigenschappen.etiket_naam';

    /** the column name for the merk_naam field */
    const MERK_NAAM = 'gs_artikel_eigenschappen.merk_naam';

    /** the column name for the hpk_naam field */
    const HPK_NAAM = 'gs_artikel_eigenschappen.hpk_naam';

    /** the column name for the prk_naam field */
    const PRK_NAAM = 'gs_artikel_eigenschappen.prk_naam';

    /** the column name for the gpk_naam field */
    const GPK_NAAM = 'gs_artikel_eigenschappen.gpk_naam';

    /** the column name for the stof_naam field */
    const STOF_NAAM = 'gs_artikel_eigenschappen.stof_naam';

    /** the column name for the atc_naam field */
    const ATC_NAAM = 'gs_artikel_eigenschappen.atc_naam';

    /** the column name for the leverancier_nummer field */
    const LEVERANCIER_NUMMER = 'gs_artikel_eigenschappen.leverancier_nummer';

    /** the column name for the leverancier_naam field */
    const LEVERANCIER_NAAM = 'gs_artikel_eigenschappen.leverancier_naam';

    /** the column name for the is_zvz field */
    const IS_ZVZ = 'gs_artikel_eigenschappen.is_zvz';

    /** the column name for the is_dwg field */
    const IS_DWG = 'gs_artikel_eigenschappen.is_dwg';

    /** the column name for the artikelnummer_fabrikant field */
    const ARTIKELNUMMER_FABRIKANT = 'gs_artikel_eigenschappen.artikelnummer_fabrikant';

    /** the column name for the toedieningsvorm field */
    const TOEDIENINGSVORM = 'gs_artikel_eigenschappen.toedieningsvorm';

    /** the column name for the toedieningsweg field */
    const TOEDIENINGSWEG = 'gs_artikel_eigenschappen.toedieningsweg';

    /** the column name for the farmaceutische_vorm field */
    const FARMACEUTISCHE_VORM = 'gs_artikel_eigenschappen.farmaceutische_vorm';

    /** the column name for the productgroep field */
    const PRODUCTGROEP = 'gs_artikel_eigenschappen.productgroep';

    /** the column name for the primaire_werkzame_stof_naam field */
    const PRIMAIRE_WERKZAME_STOF_NAAM = 'gs_artikel_eigenschappen.primaire_werkzame_stof_naam';

    /** the column name for the primaire_werkzame_stof_eenheid field */
    const PRIMAIRE_WERKZAME_STOF_EENHEID = 'gs_artikel_eigenschappen.primaire_werkzame_stof_eenheid';

    /** the column name for the primaire_werkzame_stof_hoeveelheid field */
    const PRIMAIRE_WERKZAME_STOF_HOEVEELHEID = 'gs_artikel_eigenschappen.primaire_werkzame_stof_hoeveelheid';

    /** the column name for the meest_recente_aip field */
    const MEEST_RECENTE_AIP = 'gs_artikel_eigenschappen.meest_recente_aip';

    /** the column name for the emballage_naam field */
    const EMBALLAGE_NAAM = 'gs_artikel_eigenschappen.emballage_naam';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsArtikelEigenschappen objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsArtikelEigenschappen[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsArtikelEigenschappenPeer::$fieldNames[GsArtikelEigenschappenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ZindexNummer', 'VerpakkingsHoeveelheid', 'VerpakkingsHoeveelheidOmschrijving', 'HoofdverpakkingOmschrijving', 'DeelverpakkingOmschrijving', 'BasiseenheidOmschrijving', 'InkoophoeveelheidOmschrijving', 'Hpk', 'Prk', 'Gpk', 'Atc', 'EtiketNaam', 'MerkNaam', 'HpkNaam', 'PrkNaam', 'GpkNaam', 'StofNaam', 'AtcNaam', 'LeverancierNummer', 'LeverancierNaam', 'IsZvz', 'IsDwg', 'ArtikelnummerFabrikant', 'Toedieningsvorm', 'Toedieningsweg', 'FarmaceutischeVorm', 'Productgroep', 'PrimaireWerkzameStofNaam', 'PrimaireWerkzameStofEenheid', 'PrimaireWerkzameStofHoeveelheid', 'MeestRecenteAip', 'EmballageNaam', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('zindexNummer', 'verpakkingsHoeveelheid', 'verpakkingsHoeveelheidOmschrijving', 'hoofdverpakkingOmschrijving', 'deelverpakkingOmschrijving', 'basiseenheidOmschrijving', 'inkoophoeveelheidOmschrijving', 'hpk', 'prk', 'gpk', 'atc', 'etiketNaam', 'merkNaam', 'hpkNaam', 'prkNaam', 'gpkNaam', 'stofNaam', 'atcNaam', 'leverancierNummer', 'leverancierNaam', 'isZvz', 'isDwg', 'artikelnummerFabrikant', 'toedieningsvorm', 'toedieningsweg', 'farmaceutischeVorm', 'productgroep', 'primaireWerkzameStofNaam', 'primaireWerkzameStofEenheid', 'primaireWerkzameStofHoeveelheid', 'meestRecenteAip', 'emballageNaam', ),
        BasePeer::TYPE_COLNAME => array (GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID, GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID_OMSCHRIJVING, GsArtikelEigenschappenPeer::HOOFDVERPAKKING_OMSCHRIJVING, GsArtikelEigenschappenPeer::DEELVERPAKKING_OMSCHRIJVING, GsArtikelEigenschappenPeer::BASISEENHEID_OMSCHRIJVING, GsArtikelEigenschappenPeer::INKOOPHOEVEELHEID_OMSCHRIJVING, GsArtikelEigenschappenPeer::HPK, GsArtikelEigenschappenPeer::PRK, GsArtikelEigenschappenPeer::GPK, GsArtikelEigenschappenPeer::ATC, GsArtikelEigenschappenPeer::ETIKET_NAAM, GsArtikelEigenschappenPeer::MERK_NAAM, GsArtikelEigenschappenPeer::HPK_NAAM, GsArtikelEigenschappenPeer::PRK_NAAM, GsArtikelEigenschappenPeer::GPK_NAAM, GsArtikelEigenschappenPeer::STOF_NAAM, GsArtikelEigenschappenPeer::ATC_NAAM, GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsArtikelEigenschappenPeer::LEVERANCIER_NAAM, GsArtikelEigenschappenPeer::IS_ZVZ, GsArtikelEigenschappenPeer::IS_DWG, GsArtikelEigenschappenPeer::ARTIKELNUMMER_FABRIKANT, GsArtikelEigenschappenPeer::TOEDIENINGSVORM, GsArtikelEigenschappenPeer::TOEDIENINGSWEG, GsArtikelEigenschappenPeer::FARMACEUTISCHE_VORM, GsArtikelEigenschappenPeer::PRODUCTGROEP, GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_NAAM, GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_EENHEID, GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_HOEVEELHEID, GsArtikelEigenschappenPeer::MEEST_RECENTE_AIP, GsArtikelEigenschappenPeer::EMBALLAGE_NAAM, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ZINDEX_NUMMER', 'VERPAKKINGS_HOEVEELHEID', 'VERPAKKINGS_HOEVEELHEID_OMSCHRIJVING', 'HOOFDVERPAKKING_OMSCHRIJVING', 'DEELVERPAKKING_OMSCHRIJVING', 'BASISEENHEID_OMSCHRIJVING', 'INKOOPHOEVEELHEID_OMSCHRIJVING', 'HPK', 'PRK', 'GPK', 'ATC', 'ETIKET_NAAM', 'MERK_NAAM', 'HPK_NAAM', 'PRK_NAAM', 'GPK_NAAM', 'STOF_NAAM', 'ATC_NAAM', 'LEVERANCIER_NUMMER', 'LEVERANCIER_NAAM', 'IS_ZVZ', 'IS_DWG', 'ARTIKELNUMMER_FABRIKANT', 'TOEDIENINGSVORM', 'TOEDIENINGSWEG', 'FARMACEUTISCHE_VORM', 'PRODUCTGROEP', 'PRIMAIRE_WERKZAME_STOF_NAAM', 'PRIMAIRE_WERKZAME_STOF_EENHEID', 'PRIMAIRE_WERKZAME_STOF_HOEVEELHEID', 'MEEST_RECENTE_AIP', 'EMBALLAGE_NAAM', ),
        BasePeer::TYPE_FIELDNAME => array ('zindex_nummer', 'verpakkings_hoeveelheid', 'verpakkings_hoeveelheid_omschrijving', 'hoofdverpakking_omschrijving', 'deelverpakking_omschrijving', 'basiseenheid_omschrijving', 'inkoophoeveelheid_omschrijving', 'hpk', 'prk', 'gpk', 'atc', 'etiket_naam', 'merk_naam', 'hpk_naam', 'prk_naam', 'gpk_naam', 'stof_naam', 'atc_naam', 'leverancier_nummer', 'leverancier_naam', 'is_zvz', 'is_dwg', 'artikelnummer_fabrikant', 'toedieningsvorm', 'toedieningsweg', 'farmaceutische_vorm', 'productgroep', 'primaire_werkzame_stof_naam', 'primaire_werkzame_stof_eenheid', 'primaire_werkzame_stof_hoeveelheid', 'meest_recente_aip', 'emballage_naam', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsArtikelEigenschappenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ZindexNummer' => 0, 'VerpakkingsHoeveelheid' => 1, 'VerpakkingsHoeveelheidOmschrijving' => 2, 'HoofdverpakkingOmschrijving' => 3, 'DeelverpakkingOmschrijving' => 4, 'BasiseenheidOmschrijving' => 5, 'InkoophoeveelheidOmschrijving' => 6, 'Hpk' => 7, 'Prk' => 8, 'Gpk' => 9, 'Atc' => 10, 'EtiketNaam' => 11, 'MerkNaam' => 12, 'HpkNaam' => 13, 'PrkNaam' => 14, 'GpkNaam' => 15, 'StofNaam' => 16, 'AtcNaam' => 17, 'LeverancierNummer' => 18, 'LeverancierNaam' => 19, 'IsZvz' => 20, 'IsDwg' => 21, 'ArtikelnummerFabrikant' => 22, 'Toedieningsvorm' => 23, 'Toedieningsweg' => 24, 'FarmaceutischeVorm' => 25, 'Productgroep' => 26, 'PrimaireWerkzameStofNaam' => 27, 'PrimaireWerkzameStofEenheid' => 28, 'PrimaireWerkzameStofHoeveelheid' => 29, 'MeestRecenteAip' => 30, 'EmballageNaam' => 31, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('zindexNummer' => 0, 'verpakkingsHoeveelheid' => 1, 'verpakkingsHoeveelheidOmschrijving' => 2, 'hoofdverpakkingOmschrijving' => 3, 'deelverpakkingOmschrijving' => 4, 'basiseenheidOmschrijving' => 5, 'inkoophoeveelheidOmschrijving' => 6, 'hpk' => 7, 'prk' => 8, 'gpk' => 9, 'atc' => 10, 'etiketNaam' => 11, 'merkNaam' => 12, 'hpkNaam' => 13, 'prkNaam' => 14, 'gpkNaam' => 15, 'stofNaam' => 16, 'atcNaam' => 17, 'leverancierNummer' => 18, 'leverancierNaam' => 19, 'isZvz' => 20, 'isDwg' => 21, 'artikelnummerFabrikant' => 22, 'toedieningsvorm' => 23, 'toedieningsweg' => 24, 'farmaceutischeVorm' => 25, 'productgroep' => 26, 'primaireWerkzameStofNaam' => 27, 'primaireWerkzameStofEenheid' => 28, 'primaireWerkzameStofHoeveelheid' => 29, 'meestRecenteAip' => 30, 'emballageNaam' => 31, ),
        BasePeer::TYPE_COLNAME => array (GsArtikelEigenschappenPeer::ZINDEX_NUMMER => 0, GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID => 1, GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID_OMSCHRIJVING => 2, GsArtikelEigenschappenPeer::HOOFDVERPAKKING_OMSCHRIJVING => 3, GsArtikelEigenschappenPeer::DEELVERPAKKING_OMSCHRIJVING => 4, GsArtikelEigenschappenPeer::BASISEENHEID_OMSCHRIJVING => 5, GsArtikelEigenschappenPeer::INKOOPHOEVEELHEID_OMSCHRIJVING => 6, GsArtikelEigenschappenPeer::HPK => 7, GsArtikelEigenschappenPeer::PRK => 8, GsArtikelEigenschappenPeer::GPK => 9, GsArtikelEigenschappenPeer::ATC => 10, GsArtikelEigenschappenPeer::ETIKET_NAAM => 11, GsArtikelEigenschappenPeer::MERK_NAAM => 12, GsArtikelEigenschappenPeer::HPK_NAAM => 13, GsArtikelEigenschappenPeer::PRK_NAAM => 14, GsArtikelEigenschappenPeer::GPK_NAAM => 15, GsArtikelEigenschappenPeer::STOF_NAAM => 16, GsArtikelEigenschappenPeer::ATC_NAAM => 17, GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER => 18, GsArtikelEigenschappenPeer::LEVERANCIER_NAAM => 19, GsArtikelEigenschappenPeer::IS_ZVZ => 20, GsArtikelEigenschappenPeer::IS_DWG => 21, GsArtikelEigenschappenPeer::ARTIKELNUMMER_FABRIKANT => 22, GsArtikelEigenschappenPeer::TOEDIENINGSVORM => 23, GsArtikelEigenschappenPeer::TOEDIENINGSWEG => 24, GsArtikelEigenschappenPeer::FARMACEUTISCHE_VORM => 25, GsArtikelEigenschappenPeer::PRODUCTGROEP => 26, GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_NAAM => 27, GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_EENHEID => 28, GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_HOEVEELHEID => 29, GsArtikelEigenschappenPeer::MEEST_RECENTE_AIP => 30, GsArtikelEigenschappenPeer::EMBALLAGE_NAAM => 31, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ZINDEX_NUMMER' => 0, 'VERPAKKINGS_HOEVEELHEID' => 1, 'VERPAKKINGS_HOEVEELHEID_OMSCHRIJVING' => 2, 'HOOFDVERPAKKING_OMSCHRIJVING' => 3, 'DEELVERPAKKING_OMSCHRIJVING' => 4, 'BASISEENHEID_OMSCHRIJVING' => 5, 'INKOOPHOEVEELHEID_OMSCHRIJVING' => 6, 'HPK' => 7, 'PRK' => 8, 'GPK' => 9, 'ATC' => 10, 'ETIKET_NAAM' => 11, 'MERK_NAAM' => 12, 'HPK_NAAM' => 13, 'PRK_NAAM' => 14, 'GPK_NAAM' => 15, 'STOF_NAAM' => 16, 'ATC_NAAM' => 17, 'LEVERANCIER_NUMMER' => 18, 'LEVERANCIER_NAAM' => 19, 'IS_ZVZ' => 20, 'IS_DWG' => 21, 'ARTIKELNUMMER_FABRIKANT' => 22, 'TOEDIENINGSVORM' => 23, 'TOEDIENINGSWEG' => 24, 'FARMACEUTISCHE_VORM' => 25, 'PRODUCTGROEP' => 26, 'PRIMAIRE_WERKZAME_STOF_NAAM' => 27, 'PRIMAIRE_WERKZAME_STOF_EENHEID' => 28, 'PRIMAIRE_WERKZAME_STOF_HOEVEELHEID' => 29, 'MEEST_RECENTE_AIP' => 30, 'EMBALLAGE_NAAM' => 31, ),
        BasePeer::TYPE_FIELDNAME => array ('zindex_nummer' => 0, 'verpakkings_hoeveelheid' => 1, 'verpakkings_hoeveelheid_omschrijving' => 2, 'hoofdverpakking_omschrijving' => 3, 'deelverpakking_omschrijving' => 4, 'basiseenheid_omschrijving' => 5, 'inkoophoeveelheid_omschrijving' => 6, 'hpk' => 7, 'prk' => 8, 'gpk' => 9, 'atc' => 10, 'etiket_naam' => 11, 'merk_naam' => 12, 'hpk_naam' => 13, 'prk_naam' => 14, 'gpk_naam' => 15, 'stof_naam' => 16, 'atc_naam' => 17, 'leverancier_nummer' => 18, 'leverancier_naam' => 19, 'is_zvz' => 20, 'is_dwg' => 21, 'artikelnummer_fabrikant' => 22, 'toedieningsvorm' => 23, 'toedieningsweg' => 24, 'farmaceutische_vorm' => 25, 'productgroep' => 26, 'primaire_werkzame_stof_naam' => 27, 'primaire_werkzame_stof_eenheid' => 28, 'primaire_werkzame_stof_hoeveelheid' => 29, 'meest_recente_aip' => 30, 'emballage_naam' => 31, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = GsArtikelEigenschappenPeer::getFieldNames($toType);
        $key = isset(GsArtikelEigenschappenPeer::$fieldKeys[$fromType][$name]) ? GsArtikelEigenschappenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsArtikelEigenschappenPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, GsArtikelEigenschappenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsArtikelEigenschappenPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. GsArtikelEigenschappenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsArtikelEigenschappenPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::ZINDEX_NUMMER);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID_OMSCHRIJVING);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::HOOFDVERPAKKING_OMSCHRIJVING);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::DEELVERPAKKING_OMSCHRIJVING);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::BASISEENHEID_OMSCHRIJVING);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::INKOOPHOEVEELHEID_OMSCHRIJVING);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::HPK);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::PRK);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::GPK);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::ATC);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::ETIKET_NAAM);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::MERK_NAAM);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::HPK_NAAM);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::PRK_NAAM);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::GPK_NAAM);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::STOF_NAAM);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::ATC_NAAM);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::LEVERANCIER_NAAM);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::IS_ZVZ);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::IS_DWG);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::ARTIKELNUMMER_FABRIKANT);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::TOEDIENINGSVORM);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::TOEDIENINGSWEG);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::FARMACEUTISCHE_VORM);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::PRODUCTGROEP);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_NAAM);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_EENHEID);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_HOEVEELHEID);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::MEEST_RECENTE_AIP);
            $criteria->addSelectColumn(GsArtikelEigenschappenPeer::EMBALLAGE_NAAM);
        } else {
            $criteria->addSelectColumn($alias . '.zindex_nummer');
            $criteria->addSelectColumn($alias . '.verpakkings_hoeveelheid');
            $criteria->addSelectColumn($alias . '.verpakkings_hoeveelheid_omschrijving');
            $criteria->addSelectColumn($alias . '.hoofdverpakking_omschrijving');
            $criteria->addSelectColumn($alias . '.deelverpakking_omschrijving');
            $criteria->addSelectColumn($alias . '.basiseenheid_omschrijving');
            $criteria->addSelectColumn($alias . '.inkoophoeveelheid_omschrijving');
            $criteria->addSelectColumn($alias . '.hpk');
            $criteria->addSelectColumn($alias . '.prk');
            $criteria->addSelectColumn($alias . '.gpk');
            $criteria->addSelectColumn($alias . '.atc');
            $criteria->addSelectColumn($alias . '.etiket_naam');
            $criteria->addSelectColumn($alias . '.merk_naam');
            $criteria->addSelectColumn($alias . '.hpk_naam');
            $criteria->addSelectColumn($alias . '.prk_naam');
            $criteria->addSelectColumn($alias . '.gpk_naam');
            $criteria->addSelectColumn($alias . '.stof_naam');
            $criteria->addSelectColumn($alias . '.atc_naam');
            $criteria->addSelectColumn($alias . '.leverancier_nummer');
            $criteria->addSelectColumn($alias . '.leverancier_naam');
            $criteria->addSelectColumn($alias . '.is_zvz');
            $criteria->addSelectColumn($alias . '.is_dwg');
            $criteria->addSelectColumn($alias . '.artikelnummer_fabrikant');
            $criteria->addSelectColumn($alias . '.toedieningsvorm');
            $criteria->addSelectColumn($alias . '.toedieningsweg');
            $criteria->addSelectColumn($alias . '.farmaceutische_vorm');
            $criteria->addSelectColumn($alias . '.productgroep');
            $criteria->addSelectColumn($alias . '.primaire_werkzame_stof_naam');
            $criteria->addSelectColumn($alias . '.primaire_werkzame_stof_eenheid');
            $criteria->addSelectColumn($alias . '.primaire_werkzame_stof_hoeveelheid');
            $criteria->addSelectColumn($alias . '.meest_recente_aip');
            $criteria->addSelectColumn($alias . '.emballage_naam');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return GsArtikelEigenschappen
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsArtikelEigenschappenPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return GsArtikelEigenschappenPeer::populateObjects(GsArtikelEigenschappenPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param GsArtikelEigenschappen $obj A GsArtikelEigenschappen object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getZindexNummer();
            } // if key === null
            GsArtikelEigenschappenPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A GsArtikelEigenschappen object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsArtikelEigenschappen) {
                $key = (string) $value->getZindexNummer();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsArtikelEigenschappen object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsArtikelEigenschappenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsArtikelEigenschappen Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsArtikelEigenschappenPeer::$instances[$key])) {
                return GsArtikelEigenschappenPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (GsArtikelEigenschappenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsArtikelEigenschappenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_artikel_eigenschappen
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = GsArtikelEigenschappenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsArtikelEigenschappenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsArtikelEigenschappenPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (GsArtikelEigenschappen object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsArtikelEigenschappenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsArtikelEigenschappenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsArtikelEigenschappenPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsArtikelen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsArtikelen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsHandelsproducten table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsHandelsproducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsNawGegevensGstandaard table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsNawGegevensGstandaard(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsPrescriptieProduct table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsPrescriptieProduct(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsGeneriekeProducten table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsGeneriekeProducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsAtcCodes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsAtcCodes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of GsArtikelEigenschappen objects pre-filled with their GsArtikelen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelEigenschappen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsArtikelen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);
        }

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;
        GsArtikelenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelEigenschappenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelEigenschappenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelEigenschappenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to $obj2 (GsArtikelen)
                // one to one relationship
                $obj1->setGsArtikelen($obj2);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelEigenschappen objects pre-filled with their GsHandelsproducten objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelEigenschappen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsHandelsproducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);
        }

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;
        GsHandelsproductenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelEigenschappenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelEigenschappenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelEigenschappenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to $obj2 (GsHandelsproducten)
                $obj2->addGsArtikelEigenschappen($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelEigenschappen objects pre-filled with their GsNawGegevensGstandaard objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelEigenschappen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsNawGegevensGstandaard(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);
        }

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;
        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelEigenschappenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelEigenschappenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelEigenschappenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to $obj2 (GsNawGegevensGstandaard)
                $obj2->addGsArtikelEigenschappen($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelEigenschappen objects pre-filled with their GsPrescriptieProduct objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelEigenschappen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsPrescriptieProduct(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);
        }

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;
        GsPrescriptieProductPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelEigenschappenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelEigenschappenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelEigenschappenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to $obj2 (GsPrescriptieProduct)
                $obj2->addGsArtikelEigenschappen($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelEigenschappen objects pre-filled with their GsGeneriekeProducten objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelEigenschappen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsGeneriekeProducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);
        }

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;
        GsGeneriekeProductenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelEigenschappenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelEigenschappenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelEigenschappenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsGeneriekeProductenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to $obj2 (GsGeneriekeProducten)
                $obj2->addGsArtikelEigenschappen($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelEigenschappen objects pre-filled with their GsAtcCodes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelEigenschappen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsAtcCodes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);
        }

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;
        GsAtcCodesPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelEigenschappenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelEigenschappenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelEigenschappenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsAtcCodesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsAtcCodesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsAtcCodesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to $obj2 (GsAtcCodes)
                $obj2->addGsArtikelEigenschappen($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of GsArtikelEigenschappen objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelEigenschappen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);
        }

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelEigenschappenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelEigenschappenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelEigenschappenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GsArtikelen rows

            $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj2 (GsArtikelen)
                $obj1->setGsArtikelen($obj2);
            } // if joined row not null

            // Add objects for joined GsHandelsproducten rows

            $key3 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = GsHandelsproductenPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = GsHandelsproductenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsHandelsproductenPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj3 (GsHandelsproducten)
                $obj3->addGsArtikelEigenschappen($obj1);
            } // if joined row not null

            // Add objects for joined GsNawGegevensGstandaard rows

            $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addGsArtikelEigenschappen($obj1);
            } // if joined row not null

            // Add objects for joined GsPrescriptieProduct rows

            $key5 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = GsPrescriptieProductPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsPrescriptieProductPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj5 (GsPrescriptieProduct)
                $obj5->addGsArtikelEigenschappen($obj1);
            } // if joined row not null

            // Add objects for joined GsGeneriekeProducten rows

            $key6 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = GsGeneriekeProductenPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj6 (GsGeneriekeProducten)
                $obj6->addGsArtikelEigenschappen($obj1);
            } // if joined row not null

            // Add objects for joined GsAtcCodes rows

            $key7 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = GsAtcCodesPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = GsAtcCodesPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsAtcCodesPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj7 (GsAtcCodes)
                $obj7->addGsArtikelEigenschappen($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsArtikelen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsArtikelen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsHandelsproducten table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsHandelsproducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsNawGegevensGstandaard table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsNawGegevensGstandaard(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsPrescriptieProduct table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsPrescriptieProduct(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsGeneriekeProducten table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsGeneriekeProducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsAtcCodes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsAtcCodes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelEigenschappenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of GsArtikelEigenschappen objects pre-filled with all related objects except GsArtikelen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelEigenschappen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsArtikelen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);
        }

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelEigenschappenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelEigenschappenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelEigenschappenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsHandelsproducten rows

                $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key3 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj3 (GsNawGegevensGstandaard)
                $obj3->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsPrescriptieProduct rows

                $key4 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsPrescriptieProductPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsPrescriptieProductPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj4 (GsPrescriptieProduct)
                $obj4->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsGeneriekeProducten rows

                $key5 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsGeneriekeProductenPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj5 (GsGeneriekeProducten)
                $obj5->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsAtcCodes rows

                $key6 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsAtcCodesPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsAtcCodesPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj6 (GsAtcCodes)
                $obj6->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelEigenschappen objects pre-filled with all related objects except GsHandelsproducten.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelEigenschappen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsHandelsproducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);
        }

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelEigenschappenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelEigenschappenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelEigenschappenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsArtikelen rows

                $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj2 (GsArtikelen)
                $obj1->setGsArtikelen($obj2);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key3 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj3 (GsNawGegevensGstandaard)
                $obj3->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsPrescriptieProduct rows

                $key4 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsPrescriptieProductPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsPrescriptieProductPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj4 (GsPrescriptieProduct)
                $obj4->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsGeneriekeProducten rows

                $key5 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsGeneriekeProductenPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj5 (GsGeneriekeProducten)
                $obj5->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsAtcCodes rows

                $key6 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsAtcCodesPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsAtcCodesPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj6 (GsAtcCodes)
                $obj6->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelEigenschappen objects pre-filled with all related objects except GsNawGegevensGstandaard.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelEigenschappen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsNawGegevensGstandaard(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);
        }

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelEigenschappenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelEigenschappenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelEigenschappenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsArtikelen rows

                $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj2 (GsArtikelen)
                $obj1->setGsArtikelen($obj2);

            } // if joined row is not null

                // Add objects for joined GsHandelsproducten rows

                $key3 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsHandelsproductenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsHandelsproductenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj3 (GsHandelsproducten)
                $obj3->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsPrescriptieProduct rows

                $key4 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsPrescriptieProductPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsPrescriptieProductPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj4 (GsPrescriptieProduct)
                $obj4->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsGeneriekeProducten rows

                $key5 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsGeneriekeProductenPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj5 (GsGeneriekeProducten)
                $obj5->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsAtcCodes rows

                $key6 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsAtcCodesPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsAtcCodesPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj6 (GsAtcCodes)
                $obj6->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelEigenschappen objects pre-filled with all related objects except GsPrescriptieProduct.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelEigenschappen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsPrescriptieProduct(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);
        }

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelEigenschappenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelEigenschappenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelEigenschappenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsArtikelen rows

                $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj2 (GsArtikelen)
                $obj1->setGsArtikelen($obj2);

            } // if joined row is not null

                // Add objects for joined GsHandelsproducten rows

                $key3 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsHandelsproductenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsHandelsproductenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj3 (GsHandelsproducten)
                $obj3->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsGeneriekeProducten rows

                $key5 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsGeneriekeProductenPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj5 (GsGeneriekeProducten)
                $obj5->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsAtcCodes rows

                $key6 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsAtcCodesPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsAtcCodesPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj6 (GsAtcCodes)
                $obj6->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelEigenschappen objects pre-filled with all related objects except GsGeneriekeProducten.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelEigenschappen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsGeneriekeProducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);
        }

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelEigenschappenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelEigenschappenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelEigenschappenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsArtikelen rows

                $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj2 (GsArtikelen)
                $obj1->setGsArtikelen($obj2);

            } // if joined row is not null

                // Add objects for joined GsHandelsproducten rows

                $key3 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsHandelsproductenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsHandelsproductenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj3 (GsHandelsproducten)
                $obj3->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsPrescriptieProduct rows

                $key5 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsPrescriptieProductPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsPrescriptieProductPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj5 (GsPrescriptieProduct)
                $obj5->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsAtcCodes rows

                $key6 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsAtcCodesPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsAtcCodesPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj6 (GsAtcCodes)
                $obj6->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelEigenschappen objects pre-filled with all related objects except GsAtcCodes.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelEigenschappen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsAtcCodes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelEigenschappenPeer::DATABASE_NAME);
        }

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::PRK, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsArtikelEigenschappenPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelEigenschappenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelEigenschappenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelEigenschappenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsArtikelen rows

                $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj2 (GsArtikelen)
                $obj1->setGsArtikelen($obj2);

            } // if joined row is not null

                // Add objects for joined GsHandelsproducten rows

                $key3 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsHandelsproductenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsHandelsproductenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj3 (GsHandelsproducten)
                $obj3->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsPrescriptieProduct rows

                $key5 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsPrescriptieProductPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsPrescriptieProductPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj5 (GsPrescriptieProduct)
                $obj5->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

                // Add objects for joined GsGeneriekeProducten rows

                $key6 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsGeneriekeProductenPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelEigenschappen) to the collection in $obj6 (GsGeneriekeProducten)
                $obj6->addGsArtikelEigenschappen($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(GsArtikelEigenschappenPeer::DATABASE_NAME)->getTable(GsArtikelEigenschappenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsArtikelEigenschappenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsArtikelEigenschappenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsArtikelEigenschappenTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return GsArtikelEigenschappenPeer::OM_CLASS;
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsArtikelEigenschappen
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsArtikelEigenschappenPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsArtikelEigenschappenPeer::DATABASE_NAME);
        $criteria->add(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $pk);

        $v = GsArtikelEigenschappenPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsArtikelEigenschappen[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsArtikelEigenschappenPeer::DATABASE_NAME);
            $criteria->add(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $pks, Criteria::IN);
            $objs = GsArtikelEigenschappenPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsArtikelEigenschappenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsArtikelEigenschappenPeer::buildTableMap();

