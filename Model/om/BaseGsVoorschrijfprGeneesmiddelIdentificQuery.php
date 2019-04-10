<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappen;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerken;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentific;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprIdentificerendeVelden;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfproducten;

/**
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByNaamstoevoeging($order = Criteria::ASC) Order by the naamstoevoeging column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByGeneriekeproductcode($order = Criteria::ASC) Order by the generiekeproductcode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByEmballagetypeKode($order = Criteria::ASC) Order by the emballagetype_kode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByBasiseenheidProductKode($order = Criteria::ASC) Order by the basiseenheid_product_kode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByHpkgrootteAlgemeen($order = Criteria::ASC) Order by the hpkgrootte_algemeen column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByHulpmiddelAard1Kode($order = Criteria::ASC) Order by the hulpmiddel_aard_1_kode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByHulpmiddelHoeveelheid1($order = Criteria::ASC) Order by the hulpmiddel_hoeveelheid_1 column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByHulpmiddelAard2Kode($order = Criteria::ASC) Order by the hulpmiddel_aard_2_kode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByHulpmiddelHoeveelheid2($order = Criteria::ASC) Order by the hulpmiddel_hoeveelheid_2 column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByKodeMeervoudigprodukt($order = Criteria::ASC) Order by the kode_meervoudigprodukt column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByHpkgrootteVerbandlengte($order = Criteria::ASC) Order by the hpkgrootte_verbandlengte column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByHpkgrootteVerbandbreedte($order = Criteria::ASC) Order by the hpkgrootte_verbandbreedte column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByHpkgrootteIud($order = Criteria::ASC) Order by the hpkgrootte_iud column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByRedenHulpstofIdentificerend($order = Criteria::ASC) Order by the reden_hulpstof_identificerend column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByInstant($order = Criteria::ASC) Order by the instant column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery orderByExtraKenmerkTbvVoorschrijven($order = Criteria::ASC) Order by the extra_kenmerk_tbv_voorschrijven column
 *
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByPrkcode() Group by the prkcode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByNaamstoevoeging() Group by the naamstoevoeging column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByGeneriekeproductcode() Group by the generiekeproductcode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByEmballagetypeKode() Group by the emballagetype_kode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByBasiseenheidProductKode() Group by the basiseenheid_product_kode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByHpkgrootteAlgemeen() Group by the hpkgrootte_algemeen column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByHulpmiddelAard1Kode() Group by the hulpmiddel_aard_1_kode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByHulpmiddelHoeveelheid1() Group by the hulpmiddel_hoeveelheid_1 column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByHulpmiddelAard2Kode() Group by the hulpmiddel_aard_2_kode column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByHulpmiddelHoeveelheid2() Group by the hulpmiddel_hoeveelheid_2 column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByKodeMeervoudigprodukt() Group by the kode_meervoudigprodukt column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByHpkgrootteVerbandlengte() Group by the hpkgrootte_verbandlengte column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByHpkgrootteVerbandbreedte() Group by the hpkgrootte_verbandbreedte column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByHpkgrootteIud() Group by the hpkgrootte_iud column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByRedenHulpstofIdentificerend() Group by the reden_hulpstof_identificerend column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByInstant() Group by the instant column
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery groupByExtraKenmerkTbvVoorschrijven() Group by the extra_kenmerk_tbv_voorschrijven column
 *
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery leftJoinGsGeneriekeProducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsGeneriekeProducten relation
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery rightJoinGsGeneriekeProducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsGeneriekeProducten relation
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery innerJoinGsGeneriekeProducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsGeneriekeProducten relation
 *
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery leftJoinGsArtikelEigenschappen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery rightJoinGsArtikelEigenschappen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery innerJoinGsArtikelEigenschappen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelEigenschappen relation
 *
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery leftJoinGsBijzondereKenmerken($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsBijzondereKenmerken relation
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery rightJoinGsBijzondereKenmerken($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsBijzondereKenmerken relation
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery innerJoinGsBijzondereKenmerken($relationAlias = null) Adds a INNER JOIN clause to the query using the GsBijzondereKenmerken relation
 *
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery leftJoinGsHandelsproducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery rightJoinGsHandelsproducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery innerJoinGsHandelsproducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproducten relation
 *
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery leftJoinGsVoorschrijfprIdentificerendeVelden($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsVoorschrijfprIdentificerendeVelden relation
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery rightJoinGsVoorschrijfprIdentificerendeVelden($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsVoorschrijfprIdentificerendeVelden relation
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery innerJoinGsVoorschrijfprIdentificerendeVelden($relationAlias = null) Adds a INNER JOIN clause to the query using the GsVoorschrijfprIdentificerendeVelden relation
 *
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery leftJoinGsVoorschrijfproducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsVoorschrijfproducten relation
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery rightJoinGsVoorschrijfproducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsVoorschrijfproducten relation
 * @method GsVoorschrijfprGeneesmiddelIdentificQuery innerJoinGsVoorschrijfproducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsVoorschrijfproducten relation
 *
 * @method GsVoorschrijfprGeneesmiddelIdentific findOne(PropelPDO $con = null) Return the first GsVoorschrijfprGeneesmiddelIdentific matching the query
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneOrCreate(PropelPDO $con = null) Return the first GsVoorschrijfprGeneesmiddelIdentific matching the query, or a new GsVoorschrijfprGeneesmiddelIdentific object populated from the query conditions when no match is found
 *
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByBestandnummer(int $bestandnummer) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the bestandnummer column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByMutatiekode(int $mutatiekode) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the mutatiekode column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByNaamstoevoeging(string $naamstoevoeging) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the naamstoevoeging column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByGeneriekeproductcode(int $generiekeproductcode) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the generiekeproductcode column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByEmballagetypeKode(int $emballagetype_kode) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the emballagetype_kode column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByBasiseenheidProductKode(int $basiseenheid_product_kode) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the basiseenheid_product_kode column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByHpkgrootteAlgemeen(string $hpkgrootte_algemeen) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the hpkgrootte_algemeen column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByHulpmiddelAard1Kode(int $hulpmiddel_aard_1_kode) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the hulpmiddel_aard_1_kode column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByHulpmiddelHoeveelheid1(int $hulpmiddel_hoeveelheid_1) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the hulpmiddel_hoeveelheid_1 column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByHulpmiddelAard2Kode(int $hulpmiddel_aard_2_kode) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the hulpmiddel_aard_2_kode column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByHulpmiddelHoeveelheid2(int $hulpmiddel_hoeveelheid_2) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the hulpmiddel_hoeveelheid_2 column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByKodeMeervoudigprodukt(string $kode_meervoudigprodukt) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the kode_meervoudigprodukt column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByHpkgrootteVerbandlengte(string $hpkgrootte_verbandlengte) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the hpkgrootte_verbandlengte column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByHpkgrootteVerbandbreedte(string $hpkgrootte_verbandbreedte) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the hpkgrootte_verbandbreedte column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByHpkgrootteIud(string $hpkgrootte_iud) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the hpkgrootte_iud column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByRedenHulpstofIdentificerend(int $reden_hulpstof_identificerend) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the reden_hulpstof_identificerend column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByInstant(string $instant) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the instant column
 * @method GsVoorschrijfprGeneesmiddelIdentific findOneByExtraKenmerkTbvVoorschrijven(int $extra_kenmerk_tbv_voorschrijven) Return the first GsVoorschrijfprGeneesmiddelIdentific filtered by the extra_kenmerk_tbv_voorschrijven column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the mutatiekode column
 * @method array findByPrkcode(int $prkcode) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the prkcode column
 * @method array findByNaamstoevoeging(string $naamstoevoeging) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the naamstoevoeging column
 * @method array findByGeneriekeproductcode(int $generiekeproductcode) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the generiekeproductcode column
 * @method array findByEmballagetypeKode(int $emballagetype_kode) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the emballagetype_kode column
 * @method array findByBasiseenheidProductKode(int $basiseenheid_product_kode) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the basiseenheid_product_kode column
 * @method array findByHpkgrootteAlgemeen(string $hpkgrootte_algemeen) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the hpkgrootte_algemeen column
 * @method array findByHulpmiddelAard1Kode(int $hulpmiddel_aard_1_kode) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the hulpmiddel_aard_1_kode column
 * @method array findByHulpmiddelHoeveelheid1(int $hulpmiddel_hoeveelheid_1) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the hulpmiddel_hoeveelheid_1 column
 * @method array findByHulpmiddelAard2Kode(int $hulpmiddel_aard_2_kode) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the hulpmiddel_aard_2_kode column
 * @method array findByHulpmiddelHoeveelheid2(int $hulpmiddel_hoeveelheid_2) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the hulpmiddel_hoeveelheid_2 column
 * @method array findByKodeMeervoudigprodukt(string $kode_meervoudigprodukt) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the kode_meervoudigprodukt column
 * @method array findByHpkgrootteVerbandlengte(string $hpkgrootte_verbandlengte) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the hpkgrootte_verbandlengte column
 * @method array findByHpkgrootteVerbandbreedte(string $hpkgrootte_verbandbreedte) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the hpkgrootte_verbandbreedte column
 * @method array findByHpkgrootteIud(string $hpkgrootte_iud) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the hpkgrootte_iud column
 * @method array findByRedenHulpstofIdentificerend(int $reden_hulpstof_identificerend) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the reden_hulpstof_identificerend column
 * @method array findByInstant(string $instant) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the instant column
 * @method array findByExtraKenmerkTbvVoorschrijven(int $extra_kenmerk_tbv_voorschrijven) Return GsVoorschrijfprGeneesmiddelIdentific objects filtered by the extra_kenmerk_tbv_voorschrijven column
 */
abstract class BaseGsVoorschrijfprGeneesmiddelIdentificQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsVoorschrijfprGeneesmiddelIdentificQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'default';
        }
        if (null === $modelName) {
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfprGeneesmiddelIdentific';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsVoorschrijfprGeneesmiddelIdentificQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsVoorschrijfprGeneesmiddelIdentificQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsVoorschrijfprGeneesmiddelIdentificQuery) {
            return $criteria;
        }
        $query = new GsVoorschrijfprGeneesmiddelIdentificQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsVoorschrijfprGeneesmiddelIdentific|GsVoorschrijfprGeneesmiddelIdentific[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 GsVoorschrijfprGeneesmiddelIdentific A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByPrkcode($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 GsVoorschrijfprGeneesmiddelIdentific A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `prkcode`, `naamstoevoeging`, `generiekeproductcode`, `emballagetype_kode`, `basiseenheid_product_kode`, `hpkgrootte_algemeen`, `hulpmiddel_aard_1_kode`, `hulpmiddel_hoeveelheid_1`, `hulpmiddel_aard_2_kode`, `hulpmiddel_hoeveelheid_2`, `kode_meervoudigprodukt`, `hpkgrootte_verbandlengte`, `hpkgrootte_verbandbreedte`, `hpkgrootte_iud`, `reden_hulpstof_identificerend`, `instant`, `extra_kenmerk_tbv_voorschrijven` FROM `gs_voorschrijfpr_geneesmiddel_identific` WHERE `prkcode` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsVoorschrijfprGeneesmiddelIdentific();
            $obj->hydrate($row);
            GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return GsVoorschrijfprGeneesmiddelIdentific|GsVoorschrijfprGeneesmiddelIdentific[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|GsVoorschrijfprGeneesmiddelIdentific[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the bestandnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByBestandnummer(1234); // WHERE bestandnummer = 1234
     * $query->filterByBestandnummer(array(12, 34)); // WHERE bestandnummer IN (12, 34)
     * $query->filterByBestandnummer(array('min' => 12)); // WHERE bestandnummer >= 12
     * $query->filterByBestandnummer(array('max' => 12)); // WHERE bestandnummer <= 12
     * </code>
     *
     * @param     mixed $bestandnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::BESTANDNUMMER, $bestandnummer, $comparison);
    }

    /**
     * Filter the query on the mutatiekode column
     *
     * Example usage:
     * <code>
     * $query->filterByMutatiekode(1234); // WHERE mutatiekode = 1234
     * $query->filterByMutatiekode(array(12, 34)); // WHERE mutatiekode IN (12, 34)
     * $query->filterByMutatiekode(array('min' => 12)); // WHERE mutatiekode >= 12
     * $query->filterByMutatiekode(array('max' => 12)); // WHERE mutatiekode <= 12
     * </code>
     *
     * @param     mixed $mutatiekode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the prkcode column
     *
     * Example usage:
     * <code>
     * $query->filterByPrkcode(1234); // WHERE prkcode = 1234
     * $query->filterByPrkcode(array(12, 34)); // WHERE prkcode IN (12, 34)
     * $query->filterByPrkcode(array('min' => 12)); // WHERE prkcode >= 12
     * $query->filterByPrkcode(array('max' => 12)); // WHERE prkcode <= 12
     * </code>
     *
     * @param     mixed $prkcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $prkcode, $comparison);
    }

    /**
     * Filter the query on the naamstoevoeging column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamstoevoeging('fooValue');   // WHERE naamstoevoeging = 'fooValue'
     * $query->filterByNaamstoevoeging('%fooValue%'); // WHERE naamstoevoeging LIKE '%fooValue%'
     * </code>
     *
     * @param     string $naamstoevoeging The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByNaamstoevoeging($naamstoevoeging = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($naamstoevoeging)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $naamstoevoeging)) {
                $naamstoevoeging = str_replace('*', '%', $naamstoevoeging);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::NAAMSTOEVOEGING, $naamstoevoeging, $comparison);
    }

    /**
     * Filter the query on the generiekeproductcode column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneriekeproductcode(1234); // WHERE generiekeproductcode = 1234
     * $query->filterByGeneriekeproductcode(array(12, 34)); // WHERE generiekeproductcode IN (12, 34)
     * $query->filterByGeneriekeproductcode(array('min' => 12)); // WHERE generiekeproductcode >= 12
     * $query->filterByGeneriekeproductcode(array('max' => 12)); // WHERE generiekeproductcode <= 12
     * </code>
     *
     * @see       filterByGsGeneriekeProducten()
     *
     * @param     mixed $generiekeproductcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByGeneriekeproductcode($generiekeproductcode = null, $comparison = null)
    {
        if (is_array($generiekeproductcode)) {
            $useMinMax = false;
            if (isset($generiekeproductcode['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generiekeproductcode['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode, $comparison);
    }

    /**
     * Filter the query on the emballagetype_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByEmballagetypeKode(1234); // WHERE emballagetype_kode = 1234
     * $query->filterByEmballagetypeKode(array(12, 34)); // WHERE emballagetype_kode IN (12, 34)
     * $query->filterByEmballagetypeKode(array('min' => 12)); // WHERE emballagetype_kode >= 12
     * $query->filterByEmballagetypeKode(array('max' => 12)); // WHERE emballagetype_kode <= 12
     * </code>
     *
     * @param     mixed $emballagetypeKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByEmballagetypeKode($emballagetypeKode = null, $comparison = null)
    {
        if (is_array($emballagetypeKode)) {
            $useMinMax = false;
            if (isset($emballagetypeKode['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::EMBALLAGETYPE_KODE, $emballagetypeKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($emballagetypeKode['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::EMBALLAGETYPE_KODE, $emballagetypeKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::EMBALLAGETYPE_KODE, $emballagetypeKode, $comparison);
    }

    /**
     * Filter the query on the basiseenheid_product_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByBasiseenheidProductKode(1234); // WHERE basiseenheid_product_kode = 1234
     * $query->filterByBasiseenheidProductKode(array(12, 34)); // WHERE basiseenheid_product_kode IN (12, 34)
     * $query->filterByBasiseenheidProductKode(array('min' => 12)); // WHERE basiseenheid_product_kode >= 12
     * $query->filterByBasiseenheidProductKode(array('max' => 12)); // WHERE basiseenheid_product_kode <= 12
     * </code>
     *
     * @param     mixed $basiseenheidProductKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByBasiseenheidProductKode($basiseenheidProductKode = null, $comparison = null)
    {
        if (is_array($basiseenheidProductKode)) {
            $useMinMax = false;
            if (isset($basiseenheidProductKode['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::BASISEENHEID_PRODUCT_KODE, $basiseenheidProductKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($basiseenheidProductKode['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::BASISEENHEID_PRODUCT_KODE, $basiseenheidProductKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::BASISEENHEID_PRODUCT_KODE, $basiseenheidProductKode, $comparison);
    }

    /**
     * Filter the query on the hpkgrootte_algemeen column
     *
     * Example usage:
     * <code>
     * $query->filterByHpkgrootteAlgemeen(1234); // WHERE hpkgrootte_algemeen = 1234
     * $query->filterByHpkgrootteAlgemeen(array(12, 34)); // WHERE hpkgrootte_algemeen IN (12, 34)
     * $query->filterByHpkgrootteAlgemeen(array('min' => 12)); // WHERE hpkgrootte_algemeen >= 12
     * $query->filterByHpkgrootteAlgemeen(array('max' => 12)); // WHERE hpkgrootte_algemeen <= 12
     * </code>
     *
     * @param     mixed $hpkgrootteAlgemeen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByHpkgrootteAlgemeen($hpkgrootteAlgemeen = null, $comparison = null)
    {
        if (is_array($hpkgrootteAlgemeen)) {
            $useMinMax = false;
            if (isset($hpkgrootteAlgemeen['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_ALGEMEEN, $hpkgrootteAlgemeen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hpkgrootteAlgemeen['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_ALGEMEEN, $hpkgrootteAlgemeen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_ALGEMEEN, $hpkgrootteAlgemeen, $comparison);
    }

    /**
     * Filter the query on the hulpmiddel_aard_1_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByHulpmiddelAard1Kode(1234); // WHERE hulpmiddel_aard_1_kode = 1234
     * $query->filterByHulpmiddelAard1Kode(array(12, 34)); // WHERE hulpmiddel_aard_1_kode IN (12, 34)
     * $query->filterByHulpmiddelAard1Kode(array('min' => 12)); // WHERE hulpmiddel_aard_1_kode >= 12
     * $query->filterByHulpmiddelAard1Kode(array('max' => 12)); // WHERE hulpmiddel_aard_1_kode <= 12
     * </code>
     *
     * @param     mixed $hulpmiddelAard1Kode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByHulpmiddelAard1Kode($hulpmiddelAard1Kode = null, $comparison = null)
    {
        if (is_array($hulpmiddelAard1Kode)) {
            $useMinMax = false;
            if (isset($hulpmiddelAard1Kode['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_1_KODE, $hulpmiddelAard1Kode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hulpmiddelAard1Kode['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_1_KODE, $hulpmiddelAard1Kode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_1_KODE, $hulpmiddelAard1Kode, $comparison);
    }

    /**
     * Filter the query on the hulpmiddel_hoeveelheid_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByHulpmiddelHoeveelheid1(1234); // WHERE hulpmiddel_hoeveelheid_1 = 1234
     * $query->filterByHulpmiddelHoeveelheid1(array(12, 34)); // WHERE hulpmiddel_hoeveelheid_1 IN (12, 34)
     * $query->filterByHulpmiddelHoeveelheid1(array('min' => 12)); // WHERE hulpmiddel_hoeveelheid_1 >= 12
     * $query->filterByHulpmiddelHoeveelheid1(array('max' => 12)); // WHERE hulpmiddel_hoeveelheid_1 <= 12
     * </code>
     *
     * @param     mixed $hulpmiddelHoeveelheid1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByHulpmiddelHoeveelheid1($hulpmiddelHoeveelheid1 = null, $comparison = null)
    {
        if (is_array($hulpmiddelHoeveelheid1)) {
            $useMinMax = false;
            if (isset($hulpmiddelHoeveelheid1['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_1, $hulpmiddelHoeveelheid1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hulpmiddelHoeveelheid1['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_1, $hulpmiddelHoeveelheid1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_1, $hulpmiddelHoeveelheid1, $comparison);
    }

    /**
     * Filter the query on the hulpmiddel_aard_2_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByHulpmiddelAard2Kode(1234); // WHERE hulpmiddel_aard_2_kode = 1234
     * $query->filterByHulpmiddelAard2Kode(array(12, 34)); // WHERE hulpmiddel_aard_2_kode IN (12, 34)
     * $query->filterByHulpmiddelAard2Kode(array('min' => 12)); // WHERE hulpmiddel_aard_2_kode >= 12
     * $query->filterByHulpmiddelAard2Kode(array('max' => 12)); // WHERE hulpmiddel_aard_2_kode <= 12
     * </code>
     *
     * @param     mixed $hulpmiddelAard2Kode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByHulpmiddelAard2Kode($hulpmiddelAard2Kode = null, $comparison = null)
    {
        if (is_array($hulpmiddelAard2Kode)) {
            $useMinMax = false;
            if (isset($hulpmiddelAard2Kode['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_2_KODE, $hulpmiddelAard2Kode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hulpmiddelAard2Kode['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_2_KODE, $hulpmiddelAard2Kode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_2_KODE, $hulpmiddelAard2Kode, $comparison);
    }

    /**
     * Filter the query on the hulpmiddel_hoeveelheid_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByHulpmiddelHoeveelheid2(1234); // WHERE hulpmiddel_hoeveelheid_2 = 1234
     * $query->filterByHulpmiddelHoeveelheid2(array(12, 34)); // WHERE hulpmiddel_hoeveelheid_2 IN (12, 34)
     * $query->filterByHulpmiddelHoeveelheid2(array('min' => 12)); // WHERE hulpmiddel_hoeveelheid_2 >= 12
     * $query->filterByHulpmiddelHoeveelheid2(array('max' => 12)); // WHERE hulpmiddel_hoeveelheid_2 <= 12
     * </code>
     *
     * @param     mixed $hulpmiddelHoeveelheid2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByHulpmiddelHoeveelheid2($hulpmiddelHoeveelheid2 = null, $comparison = null)
    {
        if (is_array($hulpmiddelHoeveelheid2)) {
            $useMinMax = false;
            if (isset($hulpmiddelHoeveelheid2['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_2, $hulpmiddelHoeveelheid2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hulpmiddelHoeveelheid2['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_2, $hulpmiddelHoeveelheid2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_2, $hulpmiddelHoeveelheid2, $comparison);
    }

    /**
     * Filter the query on the kode_meervoudigprodukt column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeMeervoudigprodukt('fooValue');   // WHERE kode_meervoudigprodukt = 'fooValue'
     * $query->filterByKodeMeervoudigprodukt('%fooValue%'); // WHERE kode_meervoudigprodukt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeMeervoudigprodukt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByKodeMeervoudigprodukt($kodeMeervoudigprodukt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeMeervoudigprodukt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeMeervoudigprodukt)) {
                $kodeMeervoudigprodukt = str_replace('*', '%', $kodeMeervoudigprodukt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::KODE_MEERVOUDIGPRODUKT, $kodeMeervoudigprodukt, $comparison);
    }

    /**
     * Filter the query on the hpkgrootte_verbandlengte column
     *
     * Example usage:
     * <code>
     * $query->filterByHpkgrootteVerbandlengte(1234); // WHERE hpkgrootte_verbandlengte = 1234
     * $query->filterByHpkgrootteVerbandlengte(array(12, 34)); // WHERE hpkgrootte_verbandlengte IN (12, 34)
     * $query->filterByHpkgrootteVerbandlengte(array('min' => 12)); // WHERE hpkgrootte_verbandlengte >= 12
     * $query->filterByHpkgrootteVerbandlengte(array('max' => 12)); // WHERE hpkgrootte_verbandlengte <= 12
     * </code>
     *
     * @param     mixed $hpkgrootteVerbandlengte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByHpkgrootteVerbandlengte($hpkgrootteVerbandlengte = null, $comparison = null)
    {
        if (is_array($hpkgrootteVerbandlengte)) {
            $useMinMax = false;
            if (isset($hpkgrootteVerbandlengte['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDLENGTE, $hpkgrootteVerbandlengte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hpkgrootteVerbandlengte['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDLENGTE, $hpkgrootteVerbandlengte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDLENGTE, $hpkgrootteVerbandlengte, $comparison);
    }

    /**
     * Filter the query on the hpkgrootte_verbandbreedte column
     *
     * Example usage:
     * <code>
     * $query->filterByHpkgrootteVerbandbreedte(1234); // WHERE hpkgrootte_verbandbreedte = 1234
     * $query->filterByHpkgrootteVerbandbreedte(array(12, 34)); // WHERE hpkgrootte_verbandbreedte IN (12, 34)
     * $query->filterByHpkgrootteVerbandbreedte(array('min' => 12)); // WHERE hpkgrootte_verbandbreedte >= 12
     * $query->filterByHpkgrootteVerbandbreedte(array('max' => 12)); // WHERE hpkgrootte_verbandbreedte <= 12
     * </code>
     *
     * @param     mixed $hpkgrootteVerbandbreedte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByHpkgrootteVerbandbreedte($hpkgrootteVerbandbreedte = null, $comparison = null)
    {
        if (is_array($hpkgrootteVerbandbreedte)) {
            $useMinMax = false;
            if (isset($hpkgrootteVerbandbreedte['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDBREEDTE, $hpkgrootteVerbandbreedte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hpkgrootteVerbandbreedte['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDBREEDTE, $hpkgrootteVerbandbreedte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDBREEDTE, $hpkgrootteVerbandbreedte, $comparison);
    }

    /**
     * Filter the query on the hpkgrootte_iud column
     *
     * Example usage:
     * <code>
     * $query->filterByHpkgrootteIud('fooValue');   // WHERE hpkgrootte_iud = 'fooValue'
     * $query->filterByHpkgrootteIud('%fooValue%'); // WHERE hpkgrootte_iud LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hpkgrootteIud The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByHpkgrootteIud($hpkgrootteIud = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hpkgrootteIud)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hpkgrootteIud)) {
                $hpkgrootteIud = str_replace('*', '%', $hpkgrootteIud);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_IUD, $hpkgrootteIud, $comparison);
    }

    /**
     * Filter the query on the reden_hulpstof_identificerend column
     *
     * Example usage:
     * <code>
     * $query->filterByRedenHulpstofIdentificerend(1234); // WHERE reden_hulpstof_identificerend = 1234
     * $query->filterByRedenHulpstofIdentificerend(array(12, 34)); // WHERE reden_hulpstof_identificerend IN (12, 34)
     * $query->filterByRedenHulpstofIdentificerend(array('min' => 12)); // WHERE reden_hulpstof_identificerend >= 12
     * $query->filterByRedenHulpstofIdentificerend(array('max' => 12)); // WHERE reden_hulpstof_identificerend <= 12
     * </code>
     *
     * @param     mixed $redenHulpstofIdentificerend The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByRedenHulpstofIdentificerend($redenHulpstofIdentificerend = null, $comparison = null)
    {
        if (is_array($redenHulpstofIdentificerend)) {
            $useMinMax = false;
            if (isset($redenHulpstofIdentificerend['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::REDEN_HULPSTOF_IDENTIFICEREND, $redenHulpstofIdentificerend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($redenHulpstofIdentificerend['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::REDEN_HULPSTOF_IDENTIFICEREND, $redenHulpstofIdentificerend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::REDEN_HULPSTOF_IDENTIFICEREND, $redenHulpstofIdentificerend, $comparison);
    }

    /**
     * Filter the query on the instant column
     *
     * Example usage:
     * <code>
     * $query->filterByInstant('fooValue');   // WHERE instant = 'fooValue'
     * $query->filterByInstant('%fooValue%'); // WHERE instant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $instant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByInstant($instant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($instant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $instant)) {
                $instant = str_replace('*', '%', $instant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::INSTANT, $instant, $comparison);
    }

    /**
     * Filter the query on the extra_kenmerk_tbv_voorschrijven column
     *
     * Example usage:
     * <code>
     * $query->filterByExtraKenmerkTbvVoorschrijven(1234); // WHERE extra_kenmerk_tbv_voorschrijven = 1234
     * $query->filterByExtraKenmerkTbvVoorschrijven(array(12, 34)); // WHERE extra_kenmerk_tbv_voorschrijven IN (12, 34)
     * $query->filterByExtraKenmerkTbvVoorschrijven(array('min' => 12)); // WHERE extra_kenmerk_tbv_voorschrijven >= 12
     * $query->filterByExtraKenmerkTbvVoorschrijven(array('max' => 12)); // WHERE extra_kenmerk_tbv_voorschrijven <= 12
     * </code>
     *
     * @param     mixed $extraKenmerkTbvVoorschrijven The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function filterByExtraKenmerkTbvVoorschrijven($extraKenmerkTbvVoorschrijven = null, $comparison = null)
    {
        if (is_array($extraKenmerkTbvVoorschrijven)) {
            $useMinMax = false;
            if (isset($extraKenmerkTbvVoorschrijven['min'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::EXTRA_KENMERK_TBV_VOORSCHRIJVEN, $extraKenmerkTbvVoorschrijven['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($extraKenmerkTbvVoorschrijven['max'])) {
                $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::EXTRA_KENMERK_TBV_VOORSCHRIJVEN, $extraKenmerkTbvVoorschrijven['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::EXTRA_KENMERK_TBV_VOORSCHRIJVEN, $extraKenmerkTbvVoorschrijven, $comparison);
    }

    /**
     * Filter the query by a related GsGeneriekeProducten object
     *
     * @param   GsGeneriekeProducten|PropelObjectCollection $gsGeneriekeProducten The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsGeneriekeProducten($gsGeneriekeProducten, $comparison = null)
    {
        if ($gsGeneriekeProducten instanceof GsGeneriekeProducten) {
            return $this
                ->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE, $gsGeneriekeProducten->getGeneriekeproductcode(), $comparison);
        } elseif ($gsGeneriekeProducten instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE, $gsGeneriekeProducten->toKeyValue('PrimaryKey', 'Generiekeproductcode'), $comparison);
        } else {
            throw new PropelException('filterByGsGeneriekeProducten() only accepts arguments of type GsGeneriekeProducten or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsGeneriekeProducten relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function joinGsGeneriekeProducten($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsGeneriekeProducten');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsGeneriekeProducten');
        }

        return $this;
    }

    /**
     * Use the GsGeneriekeProducten relation GsGeneriekeProducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery A secondary query class using the current class as primary query
     */
    public function useGsGeneriekeProductenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsGeneriekeProducten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsGeneriekeProducten', '\PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery');
    }

    /**
     * Filter the query by a related GsArtikelEigenschappen object
     *
     * @param   GsArtikelEigenschappen|PropelObjectCollection $gsArtikelEigenschappen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelEigenschappen($gsArtikelEigenschappen, $comparison = null)
    {
        if ($gsArtikelEigenschappen instanceof GsArtikelEigenschappen) {
            return $this
                ->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $gsArtikelEigenschappen->getPrk(), $comparison);
        } elseif ($gsArtikelEigenschappen instanceof PropelObjectCollection) {
            return $this
                ->useGsArtikelEigenschappenQuery()
                ->filterByPrimaryKeys($gsArtikelEigenschappen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsArtikelEigenschappen() only accepts arguments of type GsArtikelEigenschappen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelEigenschappen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function joinGsArtikelEigenschappen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelEigenschappen');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsArtikelEigenschappen');
        }

        return $this;
    }

    /**
     * Use the GsArtikelEigenschappen relation GsArtikelEigenschappen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelEigenschappenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelEigenschappen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelEigenschappen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery');
    }

    /**
     * Filter the query by a related GsBijzondereKenmerken object
     *
     * @param   GsBijzondereKenmerken|PropelObjectCollection $gsBijzondereKenmerken  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsBijzondereKenmerken($gsBijzondereKenmerken, $comparison = null)
    {
        if ($gsBijzondereKenmerken instanceof GsBijzondereKenmerken) {
            return $this
                ->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $gsBijzondereKenmerken->getPrkcode(), $comparison);
        } elseif ($gsBijzondereKenmerken instanceof PropelObjectCollection) {
            return $this
                ->useGsBijzondereKenmerkenQuery()
                ->filterByPrimaryKeys($gsBijzondereKenmerken->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsBijzondereKenmerken() only accepts arguments of type GsBijzondereKenmerken or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsBijzondereKenmerken relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function joinGsBijzondereKenmerken($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsBijzondereKenmerken');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsBijzondereKenmerken');
        }

        return $this;
    }

    /**
     * Use the GsBijzondereKenmerken relation GsBijzondereKenmerken object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerkenQuery A secondary query class using the current class as primary query
     */
    public function useGsBijzondereKenmerkenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsBijzondereKenmerken($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsBijzondereKenmerken', '\PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerkenQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproducten($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $gsHandelsproducten->getPrkcode(), $comparison);
        } elseif ($gsHandelsproducten instanceof PropelObjectCollection) {
            return $this
                ->useGsHandelsproductenQuery()
                ->filterByPrimaryKeys($gsHandelsproducten->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsHandelsproducten() only accepts arguments of type GsHandelsproducten or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproducten relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function joinGsHandelsproducten($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproducten');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsHandelsproducten');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproducten relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproducten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproducten', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsVoorschrijfprIdentificerendeVelden object
     *
     * @param   GsVoorschrijfprIdentificerendeVelden|PropelObjectCollection $gsVoorschrijfprIdentificerendeVelden  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsVoorschrijfprIdentificerendeVelden($gsVoorschrijfprIdentificerendeVelden, $comparison = null)
    {
        if ($gsVoorschrijfprIdentificerendeVelden instanceof GsVoorschrijfprIdentificerendeVelden) {
            return $this
                ->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $gsVoorschrijfprIdentificerendeVelden->getPrkcode(), $comparison);
        } elseif ($gsVoorschrijfprIdentificerendeVelden instanceof PropelObjectCollection) {
            return $this
                ->useGsVoorschrijfprIdentificerendeVeldenQuery()
                ->filterByPrimaryKeys($gsVoorschrijfprIdentificerendeVelden->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsVoorschrijfprIdentificerendeVelden() only accepts arguments of type GsVoorschrijfprIdentificerendeVelden or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsVoorschrijfprIdentificerendeVelden relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function joinGsVoorschrijfprIdentificerendeVelden($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsVoorschrijfprIdentificerendeVelden');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsVoorschrijfprIdentificerendeVelden');
        }

        return $this;
    }

    /**
     * Use the GsVoorschrijfprIdentificerendeVelden relation GsVoorschrijfprIdentificerendeVelden object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprIdentificerendeVeldenQuery A secondary query class using the current class as primary query
     */
    public function useGsVoorschrijfprIdentificerendeVeldenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsVoorschrijfprIdentificerendeVelden($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsVoorschrijfprIdentificerendeVelden', '\PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprIdentificerendeVeldenQuery');
    }

    /**
     * Filter the query by a related GsVoorschrijfproducten object
     *
     * @param   GsVoorschrijfproducten|PropelObjectCollection $gsVoorschrijfproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsVoorschrijfproducten($gsVoorschrijfproducten, $comparison = null)
    {
        if ($gsVoorschrijfproducten instanceof GsVoorschrijfproducten) {
            return $this
                ->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $gsVoorschrijfproducten->getPrkcode(), $comparison);
        } elseif ($gsVoorschrijfproducten instanceof PropelObjectCollection) {
            return $this
                ->useGsVoorschrijfproductenQuery()
                ->filterByPrimaryKeys($gsVoorschrijfproducten->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsVoorschrijfproducten() only accepts arguments of type GsVoorschrijfproducten or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsVoorschrijfproducten relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function joinGsVoorschrijfproducten($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsVoorschrijfproducten');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsVoorschrijfproducten');
        }

        return $this;
    }

    /**
     * Use the GsVoorschrijfproducten relation GsVoorschrijfproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsVoorschrijfproductenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsVoorschrijfproducten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsVoorschrijfproducten', '\PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfproductenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsVoorschrijfprGeneesmiddelIdentific $gsVoorschrijfprGeneesmiddelIdentific Object to remove from the list of results
     *
     * @return GsVoorschrijfprGeneesmiddelIdentificQuery The current query, for fluid interface
     */
    public function prune($gsVoorschrijfprGeneesmiddelIdentific = null)
    {
        if ($gsVoorschrijfprGeneesmiddelIdentific) {
            $this->addUsingAlias(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $gsVoorschrijfprGeneesmiddelIdentific->getPrkcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
