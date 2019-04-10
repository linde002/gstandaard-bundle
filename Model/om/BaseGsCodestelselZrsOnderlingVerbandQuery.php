<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \PDO;
use \Propel;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrsOnderlingVerband;
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrsOnderlingVerbandPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrsOnderlingVerbandQuery;

/**
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByZorgRegistratieNummerVanDeActie($order = Criteria::ASC) Order by the zorg_registratie_nummer_van_de_actie column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByZorgRegistratieNummerVanDeActiegroep($order = Criteria::ASC) Order by the zorg_registratie_nummer_van_de_actiegroep column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByZorgRegistratieNummerVanDeActieregel($order = Criteria::ASC) Order by the zorg_registratie_nummer_van_de_actieregel column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByZorgRegistratieNummerVanDeAnalyse($order = Criteria::ASC) Order by the zorg_registratie_nummer_van_de_analyse column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByZorgRegistratieNummerVanDeSubanalyse($order = Criteria::ASC) Order by the zorg_registratie_nummer_van_de_subanalyse column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByZorgRegistratieNummerVanDeAanleiding($order = Criteria::ASC) Order by the zorg_registratie_nummer_van_de_aanleiding column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByZorgRegistratieNummerVanDeSubaanleiding($order = Criteria::ASC) Order by the zorg_registratie_nummer_van_de_subaanleiding column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByTekstmodulethesaurus103($order = Criteria::ASC) Order by the tekstmodulethesaurus_103 column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByTekstmodule($order = Criteria::ASC) Order by the tekstmodule column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByTekstsoortthesaurus104($order = Criteria::ASC) Order by the tekstsoortthesaurus_104 column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByTekstsoort($order = Criteria::ASC) Order by the tekstsoort column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByTekstNivoKode($order = Criteria::ASC) Order by the tekst_nivo_kode column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByOpnemenAlsFavorietNaAanleidingEnAnalyse($order = Criteria::ASC) Order by the opnemen_als_favoriet_na_aanleiding_en_analyse column
 * @method GsCodestelselZrsOnderlingVerbandQuery orderByOpnAlsFavorietNaAanleidingAnalyseEnActie($order = Criteria::ASC) Order by the opn_als_favoriet_na_aanleiding_analyse_en_actie column
 *
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByZorgRegistratieNummerVanDeActie() Group by the zorg_registratie_nummer_van_de_actie column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByZorgRegistratieNummerVanDeActiegroep() Group by the zorg_registratie_nummer_van_de_actiegroep column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByZorgRegistratieNummerVanDeActieregel() Group by the zorg_registratie_nummer_van_de_actieregel column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByZorgRegistratieNummerVanDeAnalyse() Group by the zorg_registratie_nummer_van_de_analyse column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByZorgRegistratieNummerVanDeSubanalyse() Group by the zorg_registratie_nummer_van_de_subanalyse column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByZorgRegistratieNummerVanDeAanleiding() Group by the zorg_registratie_nummer_van_de_aanleiding column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByZorgRegistratieNummerVanDeSubaanleiding() Group by the zorg_registratie_nummer_van_de_subaanleiding column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByTekstmodulethesaurus103() Group by the tekstmodulethesaurus_103 column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByTekstmodule() Group by the tekstmodule column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByTekstsoortthesaurus104() Group by the tekstsoortthesaurus_104 column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByTekstsoort() Group by the tekstsoort column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByTekstNivoKode() Group by the tekst_nivo_kode column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByOpnemenAlsFavorietNaAanleidingEnAnalyse() Group by the opnemen_als_favoriet_na_aanleiding_en_analyse column
 * @method GsCodestelselZrsOnderlingVerbandQuery groupByOpnAlsFavorietNaAanleidingAnalyseEnActie() Group by the opn_als_favoriet_na_aanleiding_analyse_en_actie column
 *
 * @method GsCodestelselZrsOnderlingVerbandQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsCodestelselZrsOnderlingVerbandQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsCodestelselZrsOnderlingVerbandQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsCodestelselZrsOnderlingVerband findOne(PropelPDO $con = null) Return the first GsCodestelselZrsOnderlingVerband matching the query
 * @method GsCodestelselZrsOnderlingVerband findOneOrCreate(PropelPDO $con = null) Return the first GsCodestelselZrsOnderlingVerband matching the query, or a new GsCodestelselZrsOnderlingVerband object populated from the query conditions when no match is found
 *
 * @method GsCodestelselZrsOnderlingVerband findOneByBestandnummer(int $bestandnummer) Return the first GsCodestelselZrsOnderlingVerband filtered by the bestandnummer column
 * @method GsCodestelselZrsOnderlingVerband findOneByMutatiekode(int $mutatiekode) Return the first GsCodestelselZrsOnderlingVerband filtered by the mutatiekode column
 * @method GsCodestelselZrsOnderlingVerband findOneByZorgRegistratieNummerVanDeActie(int $zorg_registratie_nummer_van_de_actie) Return the first GsCodestelselZrsOnderlingVerband filtered by the zorg_registratie_nummer_van_de_actie column
 * @method GsCodestelselZrsOnderlingVerband findOneByZorgRegistratieNummerVanDeActiegroep(int $zorg_registratie_nummer_van_de_actiegroep) Return the first GsCodestelselZrsOnderlingVerband filtered by the zorg_registratie_nummer_van_de_actiegroep column
 * @method GsCodestelselZrsOnderlingVerband findOneByZorgRegistratieNummerVanDeActieregel(int $zorg_registratie_nummer_van_de_actieregel) Return the first GsCodestelselZrsOnderlingVerband filtered by the zorg_registratie_nummer_van_de_actieregel column
 * @method GsCodestelselZrsOnderlingVerband findOneByZorgRegistratieNummerVanDeAnalyse(int $zorg_registratie_nummer_van_de_analyse) Return the first GsCodestelselZrsOnderlingVerband filtered by the zorg_registratie_nummer_van_de_analyse column
 * @method GsCodestelselZrsOnderlingVerband findOneByZorgRegistratieNummerVanDeSubanalyse(int $zorg_registratie_nummer_van_de_subanalyse) Return the first GsCodestelselZrsOnderlingVerband filtered by the zorg_registratie_nummer_van_de_subanalyse column
 * @method GsCodestelselZrsOnderlingVerband findOneByZorgRegistratieNummerVanDeAanleiding(int $zorg_registratie_nummer_van_de_aanleiding) Return the first GsCodestelselZrsOnderlingVerband filtered by the zorg_registratie_nummer_van_de_aanleiding column
 * @method GsCodestelselZrsOnderlingVerband findOneByZorgRegistratieNummerVanDeSubaanleiding(int $zorg_registratie_nummer_van_de_subaanleiding) Return the first GsCodestelselZrsOnderlingVerband filtered by the zorg_registratie_nummer_van_de_subaanleiding column
 * @method GsCodestelselZrsOnderlingVerband findOneByTekstmodulethesaurus103(int $tekstmodulethesaurus_103) Return the first GsCodestelselZrsOnderlingVerband filtered by the tekstmodulethesaurus_103 column
 * @method GsCodestelselZrsOnderlingVerband findOneByTekstmodule(int $tekstmodule) Return the first GsCodestelselZrsOnderlingVerband filtered by the tekstmodule column
 * @method GsCodestelselZrsOnderlingVerband findOneByTekstsoortthesaurus104(int $tekstsoortthesaurus_104) Return the first GsCodestelselZrsOnderlingVerband filtered by the tekstsoortthesaurus_104 column
 * @method GsCodestelselZrsOnderlingVerband findOneByTekstsoort(int $tekstsoort) Return the first GsCodestelselZrsOnderlingVerband filtered by the tekstsoort column
 * @method GsCodestelselZrsOnderlingVerband findOneByTekstNivoKode(int $tekst_nivo_kode) Return the first GsCodestelselZrsOnderlingVerband filtered by the tekst_nivo_kode column
 * @method GsCodestelselZrsOnderlingVerband findOneByOpnemenAlsFavorietNaAanleidingEnAnalyse(string $opnemen_als_favoriet_na_aanleiding_en_analyse) Return the first GsCodestelselZrsOnderlingVerband filtered by the opnemen_als_favoriet_na_aanleiding_en_analyse column
 * @method GsCodestelselZrsOnderlingVerband findOneByOpnAlsFavorietNaAanleidingAnalyseEnActie(string $opn_als_favoriet_na_aanleiding_analyse_en_actie) Return the first GsCodestelselZrsOnderlingVerband filtered by the opn_als_favoriet_na_aanleiding_analyse_en_actie column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsCodestelselZrsOnderlingVerband objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsCodestelselZrsOnderlingVerband objects filtered by the mutatiekode column
 * @method array findByZorgRegistratieNummerVanDeActie(int $zorg_registratie_nummer_van_de_actie) Return GsCodestelselZrsOnderlingVerband objects filtered by the zorg_registratie_nummer_van_de_actie column
 * @method array findByZorgRegistratieNummerVanDeActiegroep(int $zorg_registratie_nummer_van_de_actiegroep) Return GsCodestelselZrsOnderlingVerband objects filtered by the zorg_registratie_nummer_van_de_actiegroep column
 * @method array findByZorgRegistratieNummerVanDeActieregel(int $zorg_registratie_nummer_van_de_actieregel) Return GsCodestelselZrsOnderlingVerband objects filtered by the zorg_registratie_nummer_van_de_actieregel column
 * @method array findByZorgRegistratieNummerVanDeAnalyse(int $zorg_registratie_nummer_van_de_analyse) Return GsCodestelselZrsOnderlingVerband objects filtered by the zorg_registratie_nummer_van_de_analyse column
 * @method array findByZorgRegistratieNummerVanDeSubanalyse(int $zorg_registratie_nummer_van_de_subanalyse) Return GsCodestelselZrsOnderlingVerband objects filtered by the zorg_registratie_nummer_van_de_subanalyse column
 * @method array findByZorgRegistratieNummerVanDeAanleiding(int $zorg_registratie_nummer_van_de_aanleiding) Return GsCodestelselZrsOnderlingVerband objects filtered by the zorg_registratie_nummer_van_de_aanleiding column
 * @method array findByZorgRegistratieNummerVanDeSubaanleiding(int $zorg_registratie_nummer_van_de_subaanleiding) Return GsCodestelselZrsOnderlingVerband objects filtered by the zorg_registratie_nummer_van_de_subaanleiding column
 * @method array findByTekstmodulethesaurus103(int $tekstmodulethesaurus_103) Return GsCodestelselZrsOnderlingVerband objects filtered by the tekstmodulethesaurus_103 column
 * @method array findByTekstmodule(int $tekstmodule) Return GsCodestelselZrsOnderlingVerband objects filtered by the tekstmodule column
 * @method array findByTekstsoortthesaurus104(int $tekstsoortthesaurus_104) Return GsCodestelselZrsOnderlingVerband objects filtered by the tekstsoortthesaurus_104 column
 * @method array findByTekstsoort(int $tekstsoort) Return GsCodestelselZrsOnderlingVerband objects filtered by the tekstsoort column
 * @method array findByTekstNivoKode(int $tekst_nivo_kode) Return GsCodestelselZrsOnderlingVerband objects filtered by the tekst_nivo_kode column
 * @method array findByOpnemenAlsFavorietNaAanleidingEnAnalyse(string $opnemen_als_favoriet_na_aanleiding_en_analyse) Return GsCodestelselZrsOnderlingVerband objects filtered by the opnemen_als_favoriet_na_aanleiding_en_analyse column
 * @method array findByOpnAlsFavorietNaAanleidingAnalyseEnActie(string $opn_als_favoriet_na_aanleiding_analyse_en_actie) Return GsCodestelselZrsOnderlingVerband objects filtered by the opn_als_favoriet_na_aanleiding_analyse_en_actie column
 */
abstract class BaseGsCodestelselZrsOnderlingVerbandQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsCodestelselZrsOnderlingVerbandQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsCodestelselZrsOnderlingVerband';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsCodestelselZrsOnderlingVerbandQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsCodestelselZrsOnderlingVerbandQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsCodestelselZrsOnderlingVerbandQuery) {
            return $criteria;
        }
        $query = new GsCodestelselZrsOnderlingVerbandQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$zorg_registratie_nummer_van_de_actie, $zorg_registratie_nummer_van_de_actiegroep, $zorg_registratie_nummer_van_de_actieregel, $zorg_registratie_nummer_van_de_analyse, $zorg_registratie_nummer_van_de_subanalyse, $zorg_registratie_nummer_van_de_aanleiding, $zorg_registratie_nummer_van_de_subaanleiding]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsCodestelselZrsOnderlingVerband|GsCodestelselZrsOnderlingVerband[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsCodestelselZrsOnderlingVerbandPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5], (string) $key[6]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 GsCodestelselZrsOnderlingVerband A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `zorg_registratie_nummer_van_de_actie`, `zorg_registratie_nummer_van_de_actiegroep`, `zorg_registratie_nummer_van_de_actieregel`, `zorg_registratie_nummer_van_de_analyse`, `zorg_registratie_nummer_van_de_subanalyse`, `zorg_registratie_nummer_van_de_aanleiding`, `zorg_registratie_nummer_van_de_subaanleiding`, `tekstmodulethesaurus_103`, `tekstmodule`, `tekstsoortthesaurus_104`, `tekstsoort`, `tekst_nivo_kode`, `opnemen_als_favoriet_na_aanleiding_en_analyse`, `opn_als_favoriet_na_aanleiding_analyse_en_actie` FROM `gs_codestelsel_zrs_onderling_verband` WHERE `zorg_registratie_nummer_van_de_actie` = :p0 AND `zorg_registratie_nummer_van_de_actiegroep` = :p1 AND `zorg_registratie_nummer_van_de_actieregel` = :p2 AND `zorg_registratie_nummer_van_de_analyse` = :p3 AND `zorg_registratie_nummer_van_de_subanalyse` = :p4 AND `zorg_registratie_nummer_van_de_aanleiding` = :p5 AND `zorg_registratie_nummer_van_de_subaanleiding` = :p6';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_INT);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_INT);
            $stmt->bindValue(':p6', $key[6], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsCodestelselZrsOnderlingVerband();
            $obj->hydrate($row);
            GsCodestelselZrsOnderlingVerbandPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5], (string) $key[6])));
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
     * @return GsCodestelselZrsOnderlingVerband|GsCodestelselZrsOnderlingVerband[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|GsCodestelselZrsOnderlingVerband[]|mixed the list of results, formatted by the current formatter
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
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING, $key[6], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the zorg_registratie_nummer_van_de_actie column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgRegistratieNummerVanDeActie(1234); // WHERE zorg_registratie_nummer_van_de_actie = 1234
     * $query->filterByZorgRegistratieNummerVanDeActie(array(12, 34)); // WHERE zorg_registratie_nummer_van_de_actie IN (12, 34)
     * $query->filterByZorgRegistratieNummerVanDeActie(array('min' => 12)); // WHERE zorg_registratie_nummer_van_de_actie >= 12
     * $query->filterByZorgRegistratieNummerVanDeActie(array('max' => 12)); // WHERE zorg_registratie_nummer_van_de_actie <= 12
     * </code>
     *
     * @param     mixed $zorgRegistratieNummerVanDeActie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByZorgRegistratieNummerVanDeActie($zorgRegistratieNummerVanDeActie = null, $comparison = null)
    {
        if (is_array($zorgRegistratieNummerVanDeActie)) {
            $useMinMax = false;
            if (isset($zorgRegistratieNummerVanDeActie['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE, $zorgRegistratieNummerVanDeActie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgRegistratieNummerVanDeActie['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE, $zorgRegistratieNummerVanDeActie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE, $zorgRegistratieNummerVanDeActie, $comparison);
    }

    /**
     * Filter the query on the zorg_registratie_nummer_van_de_actiegroep column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgRegistratieNummerVanDeActiegroep(1234); // WHERE zorg_registratie_nummer_van_de_actiegroep = 1234
     * $query->filterByZorgRegistratieNummerVanDeActiegroep(array(12, 34)); // WHERE zorg_registratie_nummer_van_de_actiegroep IN (12, 34)
     * $query->filterByZorgRegistratieNummerVanDeActiegroep(array('min' => 12)); // WHERE zorg_registratie_nummer_van_de_actiegroep >= 12
     * $query->filterByZorgRegistratieNummerVanDeActiegroep(array('max' => 12)); // WHERE zorg_registratie_nummer_van_de_actiegroep <= 12
     * </code>
     *
     * @param     mixed $zorgRegistratieNummerVanDeActiegroep The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByZorgRegistratieNummerVanDeActiegroep($zorgRegistratieNummerVanDeActiegroep = null, $comparison = null)
    {
        if (is_array($zorgRegistratieNummerVanDeActiegroep)) {
            $useMinMax = false;
            if (isset($zorgRegistratieNummerVanDeActiegroep['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP, $zorgRegistratieNummerVanDeActiegroep['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgRegistratieNummerVanDeActiegroep['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP, $zorgRegistratieNummerVanDeActiegroep['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP, $zorgRegistratieNummerVanDeActiegroep, $comparison);
    }

    /**
     * Filter the query on the zorg_registratie_nummer_van_de_actieregel column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgRegistratieNummerVanDeActieregel(1234); // WHERE zorg_registratie_nummer_van_de_actieregel = 1234
     * $query->filterByZorgRegistratieNummerVanDeActieregel(array(12, 34)); // WHERE zorg_registratie_nummer_van_de_actieregel IN (12, 34)
     * $query->filterByZorgRegistratieNummerVanDeActieregel(array('min' => 12)); // WHERE zorg_registratie_nummer_van_de_actieregel >= 12
     * $query->filterByZorgRegistratieNummerVanDeActieregel(array('max' => 12)); // WHERE zorg_registratie_nummer_van_de_actieregel <= 12
     * </code>
     *
     * @param     mixed $zorgRegistratieNummerVanDeActieregel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByZorgRegistratieNummerVanDeActieregel($zorgRegistratieNummerVanDeActieregel = null, $comparison = null)
    {
        if (is_array($zorgRegistratieNummerVanDeActieregel)) {
            $useMinMax = false;
            if (isset($zorgRegistratieNummerVanDeActieregel['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $zorgRegistratieNummerVanDeActieregel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgRegistratieNummerVanDeActieregel['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $zorgRegistratieNummerVanDeActieregel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $zorgRegistratieNummerVanDeActieregel, $comparison);
    }

    /**
     * Filter the query on the zorg_registratie_nummer_van_de_analyse column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgRegistratieNummerVanDeAnalyse(1234); // WHERE zorg_registratie_nummer_van_de_analyse = 1234
     * $query->filterByZorgRegistratieNummerVanDeAnalyse(array(12, 34)); // WHERE zorg_registratie_nummer_van_de_analyse IN (12, 34)
     * $query->filterByZorgRegistratieNummerVanDeAnalyse(array('min' => 12)); // WHERE zorg_registratie_nummer_van_de_analyse >= 12
     * $query->filterByZorgRegistratieNummerVanDeAnalyse(array('max' => 12)); // WHERE zorg_registratie_nummer_van_de_analyse <= 12
     * </code>
     *
     * @param     mixed $zorgRegistratieNummerVanDeAnalyse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByZorgRegistratieNummerVanDeAnalyse($zorgRegistratieNummerVanDeAnalyse = null, $comparison = null)
    {
        if (is_array($zorgRegistratieNummerVanDeAnalyse)) {
            $useMinMax = false;
            if (isset($zorgRegistratieNummerVanDeAnalyse['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE, $zorgRegistratieNummerVanDeAnalyse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgRegistratieNummerVanDeAnalyse['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE, $zorgRegistratieNummerVanDeAnalyse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE, $zorgRegistratieNummerVanDeAnalyse, $comparison);
    }

    /**
     * Filter the query on the zorg_registratie_nummer_van_de_subanalyse column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgRegistratieNummerVanDeSubanalyse(1234); // WHERE zorg_registratie_nummer_van_de_subanalyse = 1234
     * $query->filterByZorgRegistratieNummerVanDeSubanalyse(array(12, 34)); // WHERE zorg_registratie_nummer_van_de_subanalyse IN (12, 34)
     * $query->filterByZorgRegistratieNummerVanDeSubanalyse(array('min' => 12)); // WHERE zorg_registratie_nummer_van_de_subanalyse >= 12
     * $query->filterByZorgRegistratieNummerVanDeSubanalyse(array('max' => 12)); // WHERE zorg_registratie_nummer_van_de_subanalyse <= 12
     * </code>
     *
     * @param     mixed $zorgRegistratieNummerVanDeSubanalyse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByZorgRegistratieNummerVanDeSubanalyse($zorgRegistratieNummerVanDeSubanalyse = null, $comparison = null)
    {
        if (is_array($zorgRegistratieNummerVanDeSubanalyse)) {
            $useMinMax = false;
            if (isset($zorgRegistratieNummerVanDeSubanalyse['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE, $zorgRegistratieNummerVanDeSubanalyse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgRegistratieNummerVanDeSubanalyse['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE, $zorgRegistratieNummerVanDeSubanalyse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE, $zorgRegistratieNummerVanDeSubanalyse, $comparison);
    }

    /**
     * Filter the query on the zorg_registratie_nummer_van_de_aanleiding column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgRegistratieNummerVanDeAanleiding(1234); // WHERE zorg_registratie_nummer_van_de_aanleiding = 1234
     * $query->filterByZorgRegistratieNummerVanDeAanleiding(array(12, 34)); // WHERE zorg_registratie_nummer_van_de_aanleiding IN (12, 34)
     * $query->filterByZorgRegistratieNummerVanDeAanleiding(array('min' => 12)); // WHERE zorg_registratie_nummer_van_de_aanleiding >= 12
     * $query->filterByZorgRegistratieNummerVanDeAanleiding(array('max' => 12)); // WHERE zorg_registratie_nummer_van_de_aanleiding <= 12
     * </code>
     *
     * @param     mixed $zorgRegistratieNummerVanDeAanleiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByZorgRegistratieNummerVanDeAanleiding($zorgRegistratieNummerVanDeAanleiding = null, $comparison = null)
    {
        if (is_array($zorgRegistratieNummerVanDeAanleiding)) {
            $useMinMax = false;
            if (isset($zorgRegistratieNummerVanDeAanleiding['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING, $zorgRegistratieNummerVanDeAanleiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgRegistratieNummerVanDeAanleiding['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING, $zorgRegistratieNummerVanDeAanleiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING, $zorgRegistratieNummerVanDeAanleiding, $comparison);
    }

    /**
     * Filter the query on the zorg_registratie_nummer_van_de_subaanleiding column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgRegistratieNummerVanDeSubaanleiding(1234); // WHERE zorg_registratie_nummer_van_de_subaanleiding = 1234
     * $query->filterByZorgRegistratieNummerVanDeSubaanleiding(array(12, 34)); // WHERE zorg_registratie_nummer_van_de_subaanleiding IN (12, 34)
     * $query->filterByZorgRegistratieNummerVanDeSubaanleiding(array('min' => 12)); // WHERE zorg_registratie_nummer_van_de_subaanleiding >= 12
     * $query->filterByZorgRegistratieNummerVanDeSubaanleiding(array('max' => 12)); // WHERE zorg_registratie_nummer_van_de_subaanleiding <= 12
     * </code>
     *
     * @param     mixed $zorgRegistratieNummerVanDeSubaanleiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByZorgRegistratieNummerVanDeSubaanleiding($zorgRegistratieNummerVanDeSubaanleiding = null, $comparison = null)
    {
        if (is_array($zorgRegistratieNummerVanDeSubaanleiding)) {
            $useMinMax = false;
            if (isset($zorgRegistratieNummerVanDeSubaanleiding['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING, $zorgRegistratieNummerVanDeSubaanleiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgRegistratieNummerVanDeSubaanleiding['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING, $zorgRegistratieNummerVanDeSubaanleiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING, $zorgRegistratieNummerVanDeSubaanleiding, $comparison);
    }

    /**
     * Filter the query on the tekstmodulethesaurus_103 column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstmodulethesaurus103(1234); // WHERE tekstmodulethesaurus_103 = 1234
     * $query->filterByTekstmodulethesaurus103(array(12, 34)); // WHERE tekstmodulethesaurus_103 IN (12, 34)
     * $query->filterByTekstmodulethesaurus103(array('min' => 12)); // WHERE tekstmodulethesaurus_103 >= 12
     * $query->filterByTekstmodulethesaurus103(array('max' => 12)); // WHERE tekstmodulethesaurus_103 <= 12
     * </code>
     *
     * @param     mixed $tekstmodulethesaurus103 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByTekstmodulethesaurus103($tekstmodulethesaurus103 = null, $comparison = null)
    {
        if (is_array($tekstmodulethesaurus103)) {
            $useMinMax = false;
            if (isset($tekstmodulethesaurus103['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULETHESAURUS_103, $tekstmodulethesaurus103['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmodulethesaurus103['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULETHESAURUS_103, $tekstmodulethesaurus103['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULETHESAURUS_103, $tekstmodulethesaurus103, $comparison);
    }

    /**
     * Filter the query on the tekstmodule column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstmodule(1234); // WHERE tekstmodule = 1234
     * $query->filterByTekstmodule(array(12, 34)); // WHERE tekstmodule IN (12, 34)
     * $query->filterByTekstmodule(array('min' => 12)); // WHERE tekstmodule >= 12
     * $query->filterByTekstmodule(array('max' => 12)); // WHERE tekstmodule <= 12
     * </code>
     *
     * @param     mixed $tekstmodule The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByTekstmodule($tekstmodule = null, $comparison = null)
    {
        if (is_array($tekstmodule)) {
            $useMinMax = false;
            if (isset($tekstmodule['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULE, $tekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmodule['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULE, $tekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULE, $tekstmodule, $comparison);
    }

    /**
     * Filter the query on the tekstsoortthesaurus_104 column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstsoortthesaurus104(1234); // WHERE tekstsoortthesaurus_104 = 1234
     * $query->filterByTekstsoortthesaurus104(array(12, 34)); // WHERE tekstsoortthesaurus_104 IN (12, 34)
     * $query->filterByTekstsoortthesaurus104(array('min' => 12)); // WHERE tekstsoortthesaurus_104 >= 12
     * $query->filterByTekstsoortthesaurus104(array('max' => 12)); // WHERE tekstsoortthesaurus_104 <= 12
     * </code>
     *
     * @param     mixed $tekstsoortthesaurus104 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByTekstsoortthesaurus104($tekstsoortthesaurus104 = null, $comparison = null)
    {
        if (is_array($tekstsoortthesaurus104)) {
            $useMinMax = false;
            if (isset($tekstsoortthesaurus104['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORTTHESAURUS_104, $tekstsoortthesaurus104['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstsoortthesaurus104['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORTTHESAURUS_104, $tekstsoortthesaurus104['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORTTHESAURUS_104, $tekstsoortthesaurus104, $comparison);
    }

    /**
     * Filter the query on the tekstsoort column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstsoort(1234); // WHERE tekstsoort = 1234
     * $query->filterByTekstsoort(array(12, 34)); // WHERE tekstsoort IN (12, 34)
     * $query->filterByTekstsoort(array('min' => 12)); // WHERE tekstsoort >= 12
     * $query->filterByTekstsoort(array('max' => 12)); // WHERE tekstsoort <= 12
     * </code>
     *
     * @param     mixed $tekstsoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByTekstsoort($tekstsoort = null, $comparison = null)
    {
        if (is_array($tekstsoort)) {
            $useMinMax = false;
            if (isset($tekstsoort['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORT, $tekstsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstsoort['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORT, $tekstsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORT, $tekstsoort, $comparison);
    }

    /**
     * Filter the query on the tekst_nivo_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstNivoKode(1234); // WHERE tekst_nivo_kode = 1234
     * $query->filterByTekstNivoKode(array(12, 34)); // WHERE tekst_nivo_kode IN (12, 34)
     * $query->filterByTekstNivoKode(array('min' => 12)); // WHERE tekst_nivo_kode >= 12
     * $query->filterByTekstNivoKode(array('max' => 12)); // WHERE tekst_nivo_kode <= 12
     * </code>
     *
     * @param     mixed $tekstNivoKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByTekstNivoKode($tekstNivoKode = null, $comparison = null)
    {
        if (is_array($tekstNivoKode)) {
            $useMinMax = false;
            if (isset($tekstNivoKode['min'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKST_NIVO_KODE, $tekstNivoKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstNivoKode['max'])) {
                $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKST_NIVO_KODE, $tekstNivoKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::TEKST_NIVO_KODE, $tekstNivoKode, $comparison);
    }

    /**
     * Filter the query on the opnemen_als_favoriet_na_aanleiding_en_analyse column
     *
     * Example usage:
     * <code>
     * $query->filterByOpnemenAlsFavorietNaAanleidingEnAnalyse('fooValue');   // WHERE opnemen_als_favoriet_na_aanleiding_en_analyse = 'fooValue'
     * $query->filterByOpnemenAlsFavorietNaAanleidingEnAnalyse('%fooValue%'); // WHERE opnemen_als_favoriet_na_aanleiding_en_analyse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opnemenAlsFavorietNaAanleidingEnAnalyse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByOpnemenAlsFavorietNaAanleidingEnAnalyse($opnemenAlsFavorietNaAanleidingEnAnalyse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opnemenAlsFavorietNaAanleidingEnAnalyse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opnemenAlsFavorietNaAanleidingEnAnalyse)) {
                $opnemenAlsFavorietNaAanleidingEnAnalyse = str_replace('*', '%', $opnemenAlsFavorietNaAanleidingEnAnalyse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::OPNEMEN_ALS_FAVORIET_NA_AANLEIDING_EN_ANALYSE, $opnemenAlsFavorietNaAanleidingEnAnalyse, $comparison);
    }

    /**
     * Filter the query on the opn_als_favoriet_na_aanleiding_analyse_en_actie column
     *
     * Example usage:
     * <code>
     * $query->filterByOpnAlsFavorietNaAanleidingAnalyseEnActie('fooValue');   // WHERE opn_als_favoriet_na_aanleiding_analyse_en_actie = 'fooValue'
     * $query->filterByOpnAlsFavorietNaAanleidingAnalyseEnActie('%fooValue%'); // WHERE opn_als_favoriet_na_aanleiding_analyse_en_actie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opnAlsFavorietNaAanleidingAnalyseEnActie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function filterByOpnAlsFavorietNaAanleidingAnalyseEnActie($opnAlsFavorietNaAanleidingAnalyseEnActie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opnAlsFavorietNaAanleidingAnalyseEnActie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opnAlsFavorietNaAanleidingAnalyseEnActie)) {
                $opnAlsFavorietNaAanleidingAnalyseEnActie = str_replace('*', '%', $opnAlsFavorietNaAanleidingAnalyseEnActie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsOnderlingVerbandPeer::OPN_ALS_FAVORIET_NA_AANLEIDING_ANALYSE_EN_ACTIE, $opnAlsFavorietNaAanleidingAnalyseEnActie, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsCodestelselZrsOnderlingVerband $gsCodestelselZrsOnderlingVerband Object to remove from the list of results
     *
     * @return GsCodestelselZrsOnderlingVerbandQuery The current query, for fluid interface
     */
    public function prune($gsCodestelselZrsOnderlingVerband = null)
    {
        if ($gsCodestelselZrsOnderlingVerband) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE), $gsCodestelselZrsOnderlingVerband->getZorgRegistratieNummerVanDeActie(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP), $gsCodestelselZrsOnderlingVerband->getZorgRegistratieNummerVanDeActiegroep(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL), $gsCodestelselZrsOnderlingVerband->getZorgRegistratieNummerVanDeActieregel(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE), $gsCodestelselZrsOnderlingVerband->getZorgRegistratieNummerVanDeAnalyse(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE), $gsCodestelselZrsOnderlingVerband->getZorgRegistratieNummerVanDeSubanalyse(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING), $gsCodestelselZrsOnderlingVerband->getZorgRegistratieNummerVanDeAanleiding(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING), $gsCodestelselZrsOnderlingVerband->getZorgRegistratieNummerVanDeSubaanleiding(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
