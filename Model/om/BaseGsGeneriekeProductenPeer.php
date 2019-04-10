<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsNamenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsGeneriekeProductenTableMap;

abstract class BaseGsGeneriekeProductenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_generieke_producten';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeProducten';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsGeneriekeProductenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_generieke_producten.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_generieke_producten.mutatiekode';

    /** the column name for the generiekeproductcode field */
    const GENERIEKEPRODUCTCODE = 'gs_generieke_producten.generiekeproductcode';

    /** the column name for the gskcode field */
    const GSKCODE = 'gs_generieke_producten.gskcode';

    /** the column name for the farmaceutische_vorm_thesaurusnummer field */
    const FARMACEUTISCHE_VORM_THESAURUSNUMMER = 'gs_generieke_producten.farmaceutische_vorm_thesaurusnummer';

    /** the column name for the farmaceutische_vorm_code field */
    const FARMACEUTISCHE_VORM_CODE = 'gs_generieke_producten.farmaceutische_vorm_code';

    /** the column name for the toedieningsweg_thesaurusnummer field */
    const TOEDIENINGSWEG_THESAURUSNUMMER = 'gs_generieke_producten.toedieningsweg_thesaurusnummer';

    /** the column name for the toedieningsweg_code field */
    const TOEDIENINGSWEG_CODE = 'gs_generieke_producten.toedieningsweg_code';

    /** the column name for the naamnummer_volledige_gpknaam field */
    const NAAMNUMMER_VOLLEDIGE_GPKNAAM = 'gs_generieke_producten.naamnummer_volledige_gpknaam';

    /** the column name for the naamnummer_gpkstofnaam field */
    const NAAMNUMMER_GPKSTOFNAAM = 'gs_generieke_producten.naamnummer_gpkstofnaam';

    /** the column name for the ingegeven_sterkte_stofnamen field */
    const INGEGEVEN_STERKTE_STOFNAMEN = 'gs_generieke_producten.ingegeven_sterkte_stofnamen';

    /** the column name for the min_leeftijd_als_contraindicatie field */
    const MIN_LEEFTIJD_ALS_CONTRAINDICATIE = 'gs_generieke_producten.min_leeftijd_als_contraindicatie';

    /** the column name for the minleeftijd_als_ci_tekstnummer field */
    const MINLEEFTIJD_ALS_CI_TEKSTNUMMER = 'gs_generieke_producten.minleeftijd_als_ci_tekstnummer';

    /** the column name for the aantal_dagen_voorschrijfperiode field */
    const AANTAL_DAGEN_VOORSCHRIJFPERIODE = 'gs_generieke_producten.aantal_dagen_voorschrijfperiode';

    /** the column name for the tekstcode_voorschrijfperiode field */
    const TEKSTCODE_VOORSCHRIJFPERIODE = 'gs_generieke_producten.tekstcode_voorschrijfperiode';

    /** the column name for the tnnr_waarschuwing_substitutie_voorschrijven_prk field */
    const TNNR_WAARSCHUWING_SUBSTITUTIE_VOORSCHRIJVEN_PRK = 'gs_generieke_producten.tnnr_waarschuwing_substitutie_voorschrijven_prk';

    /** the column name for the waarschuwing_substitutie_en_voorschrijven_prk field */
    const WAARSCHUWING_SUBSTITUTIE_EN_VOORSCHRIJVEN_PRK = 'gs_generieke_producten.waarschuwing_substitutie_en_voorschrijven_prk';

    /** the column name for the superproduktkode field */
    const SUPERPRODUKTKODE = 'gs_generieke_producten.superproduktkode';

    /** the column name for the stamtoedieningsweg_thesaurus_58 field */
    const STAMTOEDIENINGSWEG_THESAURUS_58 = 'gs_generieke_producten.stamtoedieningsweg_thesaurus_58';

    /** the column name for the stamtoedieningsweg_code field */
    const STAMTOEDIENINGSWEG_CODE = 'gs_generieke_producten.stamtoedieningsweg_code';

    /** the column name for the atccode field */
    const ATCCODE = 'gs_generieke_producten.atccode';

    /** the column name for the basiseenheid_product_thesaurusnr field */
    const BASISEENHEID_PRODUCT_THESAURUSNR = 'gs_generieke_producten.basiseenheid_product_thesaurusnr';

    /** the column name for the basiseenheid_product_kode field */
    const BASISEENHEID_PRODUCT_KODE = 'gs_generieke_producten.basiseenheid_product_kode';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsGeneriekeProducten objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsGeneriekeProducten[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsGeneriekeProductenPeer::$fieldNames[GsGeneriekeProductenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Generiekeproductcode', 'Gskcode', 'FarmaceutischeVormThesaurusnummer', 'FarmaceutischeVormCode', 'ToedieningswegThesaurusnummer', 'ToedieningswegCode', 'NaamnummerVolledigeGpknaam', 'NaamnummerGpkstofnaam', 'IngegevenSterkteStofnamen', 'MinLeeftijdAlsContraindicatie', 'MinleeftijdAlsCiTekstnummer', 'AantalDagenVoorschrijfperiode', 'TekstcodeVoorschrijfperiode', 'TnnrWaarschuwingSubstitutieVoorschrijvenPrk', 'WaarschuwingSubstitutieEnVoorschrijvenPrk', 'Superproduktkode', 'StamtoedieningswegThesaurus58', 'StamtoedieningswegCode', 'Atccode', 'BasiseenheidProductThesaurusnr', 'BasiseenheidProductKode', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'generiekeproductcode', 'gskcode', 'farmaceutischeVormThesaurusnummer', 'farmaceutischeVormCode', 'toedieningswegThesaurusnummer', 'toedieningswegCode', 'naamnummerVolledigeGpknaam', 'naamnummerGpkstofnaam', 'ingegevenSterkteStofnamen', 'minLeeftijdAlsContraindicatie', 'minleeftijdAlsCiTekstnummer', 'aantalDagenVoorschrijfperiode', 'tekstcodeVoorschrijfperiode', 'tnnrWaarschuwingSubstitutieVoorschrijvenPrk', 'waarschuwingSubstitutieEnVoorschrijvenPrk', 'superproduktkode', 'stamtoedieningswegThesaurus58', 'stamtoedieningswegCode', 'atccode', 'basiseenheidProductThesaurusnr', 'basiseenheidProductKode', ),
        BasePeer::TYPE_COLNAME => array (GsGeneriekeProductenPeer::BESTANDNUMMER, GsGeneriekeProductenPeer::MUTATIEKODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GSKCODE, GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, GsGeneriekeProductenPeer::INGEGEVEN_STERKTE_STOFNAMEN, GsGeneriekeProductenPeer::MIN_LEEFTIJD_ALS_CONTRAINDICATIE, GsGeneriekeProductenPeer::MINLEEFTIJD_ALS_CI_TEKSTNUMMER, GsGeneriekeProductenPeer::AANTAL_DAGEN_VOORSCHRIJFPERIODE, GsGeneriekeProductenPeer::TEKSTCODE_VOORSCHRIJFPERIODE, GsGeneriekeProductenPeer::TNNR_WAARSCHUWING_SUBSTITUTIE_VOORSCHRIJVEN_PRK, GsGeneriekeProductenPeer::WAARSCHUWING_SUBSTITUTIE_EN_VOORSCHRIJVEN_PRK, GsGeneriekeProductenPeer::SUPERPRODUKTKODE, GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_CODE, GsGeneriekeProductenPeer::ATCCODE, GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_THESAURUSNR, GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_KODE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'GENERIEKEPRODUCTCODE', 'GSKCODE', 'FARMACEUTISCHE_VORM_THESAURUSNUMMER', 'FARMACEUTISCHE_VORM_CODE', 'TOEDIENINGSWEG_THESAURUSNUMMER', 'TOEDIENINGSWEG_CODE', 'NAAMNUMMER_VOLLEDIGE_GPKNAAM', 'NAAMNUMMER_GPKSTOFNAAM', 'INGEGEVEN_STERKTE_STOFNAMEN', 'MIN_LEEFTIJD_ALS_CONTRAINDICATIE', 'MINLEEFTIJD_ALS_CI_TEKSTNUMMER', 'AANTAL_DAGEN_VOORSCHRIJFPERIODE', 'TEKSTCODE_VOORSCHRIJFPERIODE', 'TNNR_WAARSCHUWING_SUBSTITUTIE_VOORSCHRIJVEN_PRK', 'WAARSCHUWING_SUBSTITUTIE_EN_VOORSCHRIJVEN_PRK', 'SUPERPRODUKTKODE', 'STAMTOEDIENINGSWEG_THESAURUS_58', 'STAMTOEDIENINGSWEG_CODE', 'ATCCODE', 'BASISEENHEID_PRODUCT_THESAURUSNR', 'BASISEENHEID_PRODUCT_KODE', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'generiekeproductcode', 'gskcode', 'farmaceutische_vorm_thesaurusnummer', 'farmaceutische_vorm_code', 'toedieningsweg_thesaurusnummer', 'toedieningsweg_code', 'naamnummer_volledige_gpknaam', 'naamnummer_gpkstofnaam', 'ingegeven_sterkte_stofnamen', 'min_leeftijd_als_contraindicatie', 'minleeftijd_als_ci_tekstnummer', 'aantal_dagen_voorschrijfperiode', 'tekstcode_voorschrijfperiode', 'tnnr_waarschuwing_substitutie_voorschrijven_prk', 'waarschuwing_substitutie_en_voorschrijven_prk', 'superproduktkode', 'stamtoedieningsweg_thesaurus_58', 'stamtoedieningsweg_code', 'atccode', 'basiseenheid_product_thesaurusnr', 'basiseenheid_product_kode', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsGeneriekeProductenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Generiekeproductcode' => 2, 'Gskcode' => 3, 'FarmaceutischeVormThesaurusnummer' => 4, 'FarmaceutischeVormCode' => 5, 'ToedieningswegThesaurusnummer' => 6, 'ToedieningswegCode' => 7, 'NaamnummerVolledigeGpknaam' => 8, 'NaamnummerGpkstofnaam' => 9, 'IngegevenSterkteStofnamen' => 10, 'MinLeeftijdAlsContraindicatie' => 11, 'MinleeftijdAlsCiTekstnummer' => 12, 'AantalDagenVoorschrijfperiode' => 13, 'TekstcodeVoorschrijfperiode' => 14, 'TnnrWaarschuwingSubstitutieVoorschrijvenPrk' => 15, 'WaarschuwingSubstitutieEnVoorschrijvenPrk' => 16, 'Superproduktkode' => 17, 'StamtoedieningswegThesaurus58' => 18, 'StamtoedieningswegCode' => 19, 'Atccode' => 20, 'BasiseenheidProductThesaurusnr' => 21, 'BasiseenheidProductKode' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'generiekeproductcode' => 2, 'gskcode' => 3, 'farmaceutischeVormThesaurusnummer' => 4, 'farmaceutischeVormCode' => 5, 'toedieningswegThesaurusnummer' => 6, 'toedieningswegCode' => 7, 'naamnummerVolledigeGpknaam' => 8, 'naamnummerGpkstofnaam' => 9, 'ingegevenSterkteStofnamen' => 10, 'minLeeftijdAlsContraindicatie' => 11, 'minleeftijdAlsCiTekstnummer' => 12, 'aantalDagenVoorschrijfperiode' => 13, 'tekstcodeVoorschrijfperiode' => 14, 'tnnrWaarschuwingSubstitutieVoorschrijvenPrk' => 15, 'waarschuwingSubstitutieEnVoorschrijvenPrk' => 16, 'superproduktkode' => 17, 'stamtoedieningswegThesaurus58' => 18, 'stamtoedieningswegCode' => 19, 'atccode' => 20, 'basiseenheidProductThesaurusnr' => 21, 'basiseenheidProductKode' => 22, ),
        BasePeer::TYPE_COLNAME => array (GsGeneriekeProductenPeer::BESTANDNUMMER => 0, GsGeneriekeProductenPeer::MUTATIEKODE => 1, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE => 2, GsGeneriekeProductenPeer::GSKCODE => 3, GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER => 4, GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE => 5, GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER => 6, GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE => 7, GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM => 8, GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM => 9, GsGeneriekeProductenPeer::INGEGEVEN_STERKTE_STOFNAMEN => 10, GsGeneriekeProductenPeer::MIN_LEEFTIJD_ALS_CONTRAINDICATIE => 11, GsGeneriekeProductenPeer::MINLEEFTIJD_ALS_CI_TEKSTNUMMER => 12, GsGeneriekeProductenPeer::AANTAL_DAGEN_VOORSCHRIJFPERIODE => 13, GsGeneriekeProductenPeer::TEKSTCODE_VOORSCHRIJFPERIODE => 14, GsGeneriekeProductenPeer::TNNR_WAARSCHUWING_SUBSTITUTIE_VOORSCHRIJVEN_PRK => 15, GsGeneriekeProductenPeer::WAARSCHUWING_SUBSTITUTIE_EN_VOORSCHRIJVEN_PRK => 16, GsGeneriekeProductenPeer::SUPERPRODUKTKODE => 17, GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_THESAURUS_58 => 18, GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_CODE => 19, GsGeneriekeProductenPeer::ATCCODE => 20, GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_THESAURUSNR => 21, GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_KODE => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'GENERIEKEPRODUCTCODE' => 2, 'GSKCODE' => 3, 'FARMACEUTISCHE_VORM_THESAURUSNUMMER' => 4, 'FARMACEUTISCHE_VORM_CODE' => 5, 'TOEDIENINGSWEG_THESAURUSNUMMER' => 6, 'TOEDIENINGSWEG_CODE' => 7, 'NAAMNUMMER_VOLLEDIGE_GPKNAAM' => 8, 'NAAMNUMMER_GPKSTOFNAAM' => 9, 'INGEGEVEN_STERKTE_STOFNAMEN' => 10, 'MIN_LEEFTIJD_ALS_CONTRAINDICATIE' => 11, 'MINLEEFTIJD_ALS_CI_TEKSTNUMMER' => 12, 'AANTAL_DAGEN_VOORSCHRIJFPERIODE' => 13, 'TEKSTCODE_VOORSCHRIJFPERIODE' => 14, 'TNNR_WAARSCHUWING_SUBSTITUTIE_VOORSCHRIJVEN_PRK' => 15, 'WAARSCHUWING_SUBSTITUTIE_EN_VOORSCHRIJVEN_PRK' => 16, 'SUPERPRODUKTKODE' => 17, 'STAMTOEDIENINGSWEG_THESAURUS_58' => 18, 'STAMTOEDIENINGSWEG_CODE' => 19, 'ATCCODE' => 20, 'BASISEENHEID_PRODUCT_THESAURUSNR' => 21, 'BASISEENHEID_PRODUCT_KODE' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'generiekeproductcode' => 2, 'gskcode' => 3, 'farmaceutische_vorm_thesaurusnummer' => 4, 'farmaceutische_vorm_code' => 5, 'toedieningsweg_thesaurusnummer' => 6, 'toedieningsweg_code' => 7, 'naamnummer_volledige_gpknaam' => 8, 'naamnummer_gpkstofnaam' => 9, 'ingegeven_sterkte_stofnamen' => 10, 'min_leeftijd_als_contraindicatie' => 11, 'minleeftijd_als_ci_tekstnummer' => 12, 'aantal_dagen_voorschrijfperiode' => 13, 'tekstcode_voorschrijfperiode' => 14, 'tnnr_waarschuwing_substitutie_voorschrijven_prk' => 15, 'waarschuwing_substitutie_en_voorschrijven_prk' => 16, 'superproduktkode' => 17, 'stamtoedieningsweg_thesaurus_58' => 18, 'stamtoedieningsweg_code' => 19, 'atccode' => 20, 'basiseenheid_product_thesaurusnr' => 21, 'basiseenheid_product_kode' => 22, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
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
        $toNames = GsGeneriekeProductenPeer::getFieldNames($toType);
        $key = isset(GsGeneriekeProductenPeer::$fieldKeys[$fromType][$name]) ? GsGeneriekeProductenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsGeneriekeProductenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsGeneriekeProductenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsGeneriekeProductenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsGeneriekeProductenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsGeneriekeProductenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::GSKCODE);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::INGEGEVEN_STERKTE_STOFNAMEN);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::MIN_LEEFTIJD_ALS_CONTRAINDICATIE);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::MINLEEFTIJD_ALS_CI_TEKSTNUMMER);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::AANTAL_DAGEN_VOORSCHRIJFPERIODE);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::TEKSTCODE_VOORSCHRIJFPERIODE);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::TNNR_WAARSCHUWING_SUBSTITUTIE_VOORSCHRIJVEN_PRK);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::WAARSCHUWING_SUBSTITUTIE_EN_VOORSCHRIJVEN_PRK);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::SUPERPRODUKTKODE);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_THESAURUS_58);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_CODE);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::ATCCODE);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_THESAURUSNR);
            $criteria->addSelectColumn(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_KODE);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.generiekeproductcode');
            $criteria->addSelectColumn($alias . '.gskcode');
            $criteria->addSelectColumn($alias . '.farmaceutische_vorm_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.farmaceutische_vorm_code');
            $criteria->addSelectColumn($alias . '.toedieningsweg_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.toedieningsweg_code');
            $criteria->addSelectColumn($alias . '.naamnummer_volledige_gpknaam');
            $criteria->addSelectColumn($alias . '.naamnummer_gpkstofnaam');
            $criteria->addSelectColumn($alias . '.ingegeven_sterkte_stofnamen');
            $criteria->addSelectColumn($alias . '.min_leeftijd_als_contraindicatie');
            $criteria->addSelectColumn($alias . '.minleeftijd_als_ci_tekstnummer');
            $criteria->addSelectColumn($alias . '.aantal_dagen_voorschrijfperiode');
            $criteria->addSelectColumn($alias . '.tekstcode_voorschrijfperiode');
            $criteria->addSelectColumn($alias . '.tnnr_waarschuwing_substitutie_voorschrijven_prk');
            $criteria->addSelectColumn($alias . '.waarschuwing_substitutie_en_voorschrijven_prk');
            $criteria->addSelectColumn($alias . '.superproduktkode');
            $criteria->addSelectColumn($alias . '.stamtoedieningsweg_thesaurus_58');
            $criteria->addSelectColumn($alias . '.stamtoedieningsweg_code');
            $criteria->addSelectColumn($alias . '.atccode');
            $criteria->addSelectColumn($alias . '.basiseenheid_product_thesaurusnr');
            $criteria->addSelectColumn($alias . '.basiseenheid_product_kode');
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
        $criteria->setPrimaryTableName(GsGeneriekeProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGeneriekeProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsGeneriekeProducten
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsGeneriekeProductenPeer::doSelect($critcopy, $con);
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
        return GsGeneriekeProductenPeer::populateObjects(GsGeneriekeProductenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsGeneriekeProductenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

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
     * @param GsGeneriekeProducten $obj A GsGeneriekeProducten object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getGeneriekeproductcode();
            } // if key === null
            GsGeneriekeProductenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsGeneriekeProducten object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsGeneriekeProducten) {
                $key = (string) $value->getGeneriekeproductcode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsGeneriekeProducten object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsGeneriekeProductenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsGeneriekeProducten Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsGeneriekeProductenPeer::$instances[$key])) {
                return GsGeneriekeProductenPeer::$instances[$key];
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
        foreach (GsGeneriekeProductenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsGeneriekeProductenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_generieke_producten
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
        if ($row[$startcol + 2] === null) {
            return null;
        }

        return (string) $row[$startcol + 2];
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

        return (int) $row[$startcol + 2];
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
        $cls = GsGeneriekeProductenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsGeneriekeProductenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsGeneriekeProductenPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsGeneriekeProducten object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsGeneriekeProductenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsGeneriekeProductenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsGeneriekeProductenPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        $criteria->setPrimaryTableName(GsGeneriekeProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGeneriekeProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsGeneriekeProductenPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsNamenRelatedByNaamnummerVolledigeGpknaam table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsNamenRelatedByNaamnummerVolledigeGpknaam(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsGeneriekeProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGeneriekeProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Stofnaam table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinStofnaam(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsGeneriekeProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGeneriekeProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related FarmaceutischeVormOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinFarmaceutischeVormOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsGeneriekeProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGeneriekeProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ToedieningswegOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinToedieningswegOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsGeneriekeProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGeneriekeProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

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
     * Selects a collection of GsGeneriekeProducten objects pre-filled with their GsAtcCodes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsGeneriekeProducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsAtcCodes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);
        }

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol = GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;
        GsAtcCodesPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsGeneriekeProductenPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsGeneriekeProductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsGeneriekeProductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsGeneriekeProductenPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsGeneriekeProducten) to $obj2 (GsAtcCodes)
                $obj2->addGsGeneriekeProducten($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsGeneriekeProducten objects pre-filled with their GsNamen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsGeneriekeProducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsNamenRelatedByNaamnummerVolledigeGpknaam(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);
        }

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol = GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;
        GsNamenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsGeneriekeProductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsGeneriekeProductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsGeneriekeProductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsNamenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsNamenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsNamenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to $obj2 (GsNamen)
                $obj2->addGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsGeneriekeProducten objects pre-filled with their GsNamen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsGeneriekeProducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinStofnaam(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);
        }

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol = GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;
        GsNamenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsGeneriekeProductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsGeneriekeProductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsGeneriekeProductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsNamenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsNamenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsNamenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to $obj2 (GsNamen)
                $obj2->addGeneriekeProducten($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsGeneriekeProducten objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsGeneriekeProducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinFarmaceutischeVormOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);
        }

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol = GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsGeneriekeProductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsGeneriekeProductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsGeneriekeProductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to $obj2 (GsThesauriTotaal)
                $obj2->addGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsGeneriekeProducten objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsGeneriekeProducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinToedieningswegOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);
        }

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol = GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsGeneriekeProductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsGeneriekeProductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsGeneriekeProductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to $obj2 (GsThesauriTotaal)
                $obj2->addGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($obj1);

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
        $criteria->setPrimaryTableName(GsGeneriekeProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGeneriekeProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsGeneriekeProductenPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

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
     * Selects a collection of GsGeneriekeProducten objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsGeneriekeProducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);
        }

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol2 = GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsGeneriekeProductenPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsGeneriekeProductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsGeneriekeProductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsGeneriekeProductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GsAtcCodes rows

            $key2 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GsAtcCodesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsAtcCodesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsAtcCodesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj2 (GsAtcCodes)
                $obj2->addGsGeneriekeProducten($obj1);
            } // if joined row not null

            // Add objects for joined GsNamen rows

            $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($obj1);
            } // if joined row not null

            // Add objects for joined GsNamen rows

            $key4 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = GsNamenPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = GsNamenPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNamenPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj4 (GsNamen)
                $obj4->addGeneriekeProducten($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key5 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = GsThesauriTotaalPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsThesauriTotaalPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key6 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = GsThesauriTotaalPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsThesauriTotaalPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj6 (GsThesauriTotaal)
                $obj6->addGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        $criteria->setPrimaryTableName(GsGeneriekeProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGeneriekeProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsNamenRelatedByNaamnummerVolledigeGpknaam table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsNamenRelatedByNaamnummerVolledigeGpknaam(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsGeneriekeProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGeneriekeProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsGeneriekeProductenPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Stofnaam table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptStofnaam(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsGeneriekeProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGeneriekeProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsGeneriekeProductenPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related FarmaceutischeVormOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptFarmaceutischeVormOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsGeneriekeProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGeneriekeProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsGeneriekeProductenPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ToedieningswegOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptToedieningswegOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsGeneriekeProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGeneriekeProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsGeneriekeProductenPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

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
     * Selects a collection of GsGeneriekeProducten objects pre-filled with all related objects except GsAtcCodes.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsGeneriekeProducten objects.
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
            $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);
        }

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol2 = GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsGeneriekeProductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsGeneriekeProductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsGeneriekeProductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsNamen rows

                $key2 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsNamenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsNamenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj2 (GsNamen)
                $obj2->addGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj3 (GsNamen)
                $obj3->addGeneriekeProducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key4 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsThesauriTotaalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsThesauriTotaalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key5 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsThesauriTotaalPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsThesauriTotaalPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsGeneriekeProducten objects pre-filled with all related objects except GsNamenRelatedByNaamnummerVolledigeGpknaam.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsGeneriekeProducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsNamenRelatedByNaamnummerVolledigeGpknaam(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);
        }

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol2 = GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsGeneriekeProductenPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsGeneriekeProductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsGeneriekeProductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsGeneriekeProductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsAtcCodes rows

                $key2 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsAtcCodesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsAtcCodesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj2 (GsAtcCodes)
                $obj2->addGsGeneriekeProducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key3 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsThesauriTotaalPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsThesauriTotaalPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj3 (GsThesauriTotaal)
                $obj3->addGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key4 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsThesauriTotaalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsThesauriTotaalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsGeneriekeProducten objects pre-filled with all related objects except Stofnaam.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsGeneriekeProducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptStofnaam(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);
        }

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol2 = GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsGeneriekeProductenPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsGeneriekeProductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsGeneriekeProductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsGeneriekeProductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsAtcCodes rows

                $key2 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsAtcCodesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsAtcCodesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj2 (GsAtcCodes)
                $obj2->addGsGeneriekeProducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key3 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsThesauriTotaalPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsThesauriTotaalPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj3 (GsThesauriTotaal)
                $obj3->addGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key4 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsThesauriTotaalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsThesauriTotaalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsGeneriekeProducten objects pre-filled with all related objects except FarmaceutischeVormOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsGeneriekeProducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptFarmaceutischeVormOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);
        }

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol2 = GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsGeneriekeProductenPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsGeneriekeProductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsGeneriekeProductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsGeneriekeProductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsAtcCodes rows

                $key2 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsAtcCodesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsAtcCodesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj2 (GsAtcCodes)
                $obj2->addGsGeneriekeProducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key4 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNamenPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNamenPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj4 (GsNamen)
                $obj4->addGeneriekeProducten($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsGeneriekeProducten objects pre-filled with all related objects except ToedieningswegOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsGeneriekeProducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptToedieningswegOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);
        }

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol2 = GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsGeneriekeProductenPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsGeneriekeProductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsGeneriekeProductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsGeneriekeProductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsAtcCodes rows

                $key2 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsAtcCodesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsAtcCodesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj2 (GsAtcCodes)
                $obj2->addGsGeneriekeProducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key4 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNamenPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNamenPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsGeneriekeProducten) to the collection in $obj4 (GsNamen)
                $obj4->addGeneriekeProducten($obj1);

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
        return Propel::getDatabaseMap(GsGeneriekeProductenPeer::DATABASE_NAME)->getTable(GsGeneriekeProductenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsGeneriekeProductenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsGeneriekeProductenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsGeneriekeProductenTableMap());
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
        return GsGeneriekeProductenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsGeneriekeProducten or Criteria object.
     *
     * @param      mixed $values Criteria or GsGeneriekeProducten object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsGeneriekeProducten object
        }


        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a GsGeneriekeProducten or Criteria object.
     *
     * @param      mixed $values Criteria or GsGeneriekeProducten object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsGeneriekeProductenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE);
            $value = $criteria->remove(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE);
            if ($value) {
                $selectCriteria->add(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsGeneriekeProductenPeer::TABLE_NAME);
            }

        } else { // $values is GsGeneriekeProducten object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_generieke_producten table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsGeneriekeProductenPeer::TABLE_NAME, $con, GsGeneriekeProductenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsGeneriekeProductenPeer::clearInstancePool();
            GsGeneriekeProductenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsGeneriekeProducten or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsGeneriekeProducten object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsGeneriekeProductenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsGeneriekeProducten) { // it's a model object
            // invalidate the cache for this single object
            GsGeneriekeProductenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsGeneriekeProductenPeer::DATABASE_NAME);
            $criteria->add(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsGeneriekeProductenPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeProductenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsGeneriekeProductenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsGeneriekeProducten object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsGeneriekeProducten $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsGeneriekeProductenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsGeneriekeProductenPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(GsGeneriekeProductenPeer::DATABASE_NAME, GsGeneriekeProductenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsGeneriekeProducten
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsGeneriekeProductenPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsGeneriekeProductenPeer::DATABASE_NAME);
        $criteria->add(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $pk);

        $v = GsGeneriekeProductenPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsGeneriekeProducten[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsGeneriekeProductenPeer::DATABASE_NAME);
            $criteria->add(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $pks, Criteria::IN);
            $objs = GsGeneriekeProductenPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsGeneriekeProductenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsGeneriekeProductenPeer::buildTableMap();

