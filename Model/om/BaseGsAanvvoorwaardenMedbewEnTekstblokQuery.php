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
use PharmaIntelligence\GstandaardBundle\Model\GsAanvvoorwaardenMedbewEnTekstblok;
use PharmaIntelligence\GstandaardBundle\Model\GsAanvvoorwaardenMedbewEnTekstblokPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAanvvoorwaardenMedbewEnTekstblokQuery;

/**
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByThesnrBewakingssoort($order = Criteria::ASC) Order by the thesnr_bewakingssoort column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByBewakingssoort($order = Criteria::ASC) Order by the bewakingssoort column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByMedicatiebewakingIdentificerendeCode($order = Criteria::ASC) Order by the medicatiebewaking_identificerende_code column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByThesaurusVerwijzingTekstmodule($order = Criteria::ASC) Order by the thesaurus_verwijzing_tekstmodule column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByTekstmodule($order = Criteria::ASC) Order by the tekstmodule column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByThesaurusVerwijzingTekstsoort($order = Criteria::ASC) Order by the thesaurus_verwijzing_tekstsoort column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByTekstsoort($order = Criteria::ASC) Order by the tekstsoort column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByTekstbloknummer($order = Criteria::ASC) Order by the tekstbloknummer column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByThesaurusverwijzingAanvullendeVoorwaarde($order = Criteria::ASC) Order by the thesaurusverwijzing_aanvullende_voorwaarde column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByMedicatiebewakingAanvullendeVoorwaarde($order = Criteria::ASC) Order by the medicatiebewaking_aanvullende_voorwaarde column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByCoderingWaarde1Alfanumeriek($order = Criteria::ASC) Order by the codering_waarde_1_alfanumeriek column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByCoderingWaarde2Numeriek($order = Criteria::ASC) Order by the codering_waarde_2_numeriek column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery orderByCoderingWaarde3Numeriek($order = Criteria::ASC) Order by the codering_waarde_3_numeriek column
 *
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByThesnrBewakingssoort() Group by the thesnr_bewakingssoort column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByBewakingssoort() Group by the bewakingssoort column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByMedicatiebewakingIdentificerendeCode() Group by the medicatiebewaking_identificerende_code column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByThesaurusVerwijzingTekstmodule() Group by the thesaurus_verwijzing_tekstmodule column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByTekstmodule() Group by the tekstmodule column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByThesaurusVerwijzingTekstsoort() Group by the thesaurus_verwijzing_tekstsoort column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByTekstsoort() Group by the tekstsoort column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByTekstbloknummer() Group by the tekstbloknummer column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByThesaurusverwijzingAanvullendeVoorwaarde() Group by the thesaurusverwijzing_aanvullende_voorwaarde column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByMedicatiebewakingAanvullendeVoorwaarde() Group by the medicatiebewaking_aanvullende_voorwaarde column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByCoderingWaarde1Alfanumeriek() Group by the codering_waarde_1_alfanumeriek column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByCoderingWaarde2Numeriek() Group by the codering_waarde_2_numeriek column
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery groupByCoderingWaarde3Numeriek() Group by the codering_waarde_3_numeriek column
 *
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsAanvvoorwaardenMedbewEnTekstblokQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOne(PropelPDO $con = null) Return the first GsAanvvoorwaardenMedbewEnTekstblok matching the query
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneOrCreate(PropelPDO $con = null) Return the first GsAanvvoorwaardenMedbewEnTekstblok matching the query, or a new GsAanvvoorwaardenMedbewEnTekstblok object populated from the query conditions when no match is found
 *
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByBestandnummer(int $bestandnummer) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the bestandnummer column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByMutatiekode(int $mutatiekode) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the mutatiekode column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByThesnrBewakingssoort(int $thesnr_bewakingssoort) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the thesnr_bewakingssoort column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByBewakingssoort(int $bewakingssoort) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the bewakingssoort column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByMedicatiebewakingIdentificerendeCode(int $medicatiebewaking_identificerende_code) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the medicatiebewaking_identificerende_code column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByThesaurusVerwijzingTekstmodule(int $thesaurus_verwijzing_tekstmodule) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the thesaurus_verwijzing_tekstmodule column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByTekstmodule(int $tekstmodule) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the tekstmodule column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByThesaurusVerwijzingTekstsoort(int $thesaurus_verwijzing_tekstsoort) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the thesaurus_verwijzing_tekstsoort column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByTekstsoort(int $tekstsoort) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the tekstsoort column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByTekstbloknummer(int $tekstbloknummer) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the tekstbloknummer column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByThesaurusverwijzingAanvullendeVoorwaarde(int $thesaurusverwijzing_aanvullende_voorwaarde) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the thesaurusverwijzing_aanvullende_voorwaarde column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByMedicatiebewakingAanvullendeVoorwaarde(int $medicatiebewaking_aanvullende_voorwaarde) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the medicatiebewaking_aanvullende_voorwaarde column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByCoderingWaarde1Alfanumeriek(string $codering_waarde_1_alfanumeriek) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the codering_waarde_1_alfanumeriek column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByCoderingWaarde2Numeriek(int $codering_waarde_2_numeriek) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the codering_waarde_2_numeriek column
 * @method GsAanvvoorwaardenMedbewEnTekstblok findOneByCoderingWaarde3Numeriek(int $codering_waarde_3_numeriek) Return the first GsAanvvoorwaardenMedbewEnTekstblok filtered by the codering_waarde_3_numeriek column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the mutatiekode column
 * @method array findByThesnrBewakingssoort(int $thesnr_bewakingssoort) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the thesnr_bewakingssoort column
 * @method array findByBewakingssoort(int $bewakingssoort) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the bewakingssoort column
 * @method array findByMedicatiebewakingIdentificerendeCode(int $medicatiebewaking_identificerende_code) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the medicatiebewaking_identificerende_code column
 * @method array findByThesaurusVerwijzingTekstmodule(int $thesaurus_verwijzing_tekstmodule) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the thesaurus_verwijzing_tekstmodule column
 * @method array findByTekstmodule(int $tekstmodule) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the tekstmodule column
 * @method array findByThesaurusVerwijzingTekstsoort(int $thesaurus_verwijzing_tekstsoort) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the thesaurus_verwijzing_tekstsoort column
 * @method array findByTekstsoort(int $tekstsoort) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the tekstsoort column
 * @method array findByTekstbloknummer(int $tekstbloknummer) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the tekstbloknummer column
 * @method array findByThesaurusverwijzingAanvullendeVoorwaarde(int $thesaurusverwijzing_aanvullende_voorwaarde) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the thesaurusverwijzing_aanvullende_voorwaarde column
 * @method array findByMedicatiebewakingAanvullendeVoorwaarde(int $medicatiebewaking_aanvullende_voorwaarde) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the medicatiebewaking_aanvullende_voorwaarde column
 * @method array findByCoderingWaarde1Alfanumeriek(string $codering_waarde_1_alfanumeriek) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the codering_waarde_1_alfanumeriek column
 * @method array findByCoderingWaarde2Numeriek(int $codering_waarde_2_numeriek) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the codering_waarde_2_numeriek column
 * @method array findByCoderingWaarde3Numeriek(int $codering_waarde_3_numeriek) Return GsAanvvoorwaardenMedbewEnTekstblok objects filtered by the codering_waarde_3_numeriek column
 */
abstract class BaseGsAanvvoorwaardenMedbewEnTekstblokQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsAanvvoorwaardenMedbewEnTekstblokQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAanvvoorwaardenMedbewEnTekstblok';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsAanvvoorwaardenMedbewEnTekstblokQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsAanvvoorwaardenMedbewEnTekstblokQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsAanvvoorwaardenMedbewEnTekstblokQuery) {
            return $criteria;
        }
        $query = new GsAanvvoorwaardenMedbewEnTekstblokQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$bewakingssoort, $medicatiebewaking_identificerende_code, $tekstmodule, $tekstsoort, $tekstbloknummer, $medicatiebewaking_aanvullende_voorwaarde, $codering_waarde_1_alfanumeriek, $codering_waarde_2_numeriek]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsAanvvoorwaardenMedbewEnTekstblok|GsAanvvoorwaardenMedbewEnTekstblok[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsAanvvoorwaardenMedbewEnTekstblokPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5], (string) $key[6], (string) $key[7]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsAanvvoorwaardenMedbewEnTekstblok A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `thesnr_bewakingssoort`, `bewakingssoort`, `medicatiebewaking_identificerende_code`, `thesaurus_verwijzing_tekstmodule`, `tekstmodule`, `thesaurus_verwijzing_tekstsoort`, `tekstsoort`, `tekstbloknummer`, `thesaurusverwijzing_aanvullende_voorwaarde`, `medicatiebewaking_aanvullende_voorwaarde`, `codering_waarde_1_alfanumeriek`, `codering_waarde_2_numeriek`, `codering_waarde_3_numeriek` FROM `gs_aanvvoorwaarden_medbew_en_tekstblok` WHERE `bewakingssoort` = :p0 AND `medicatiebewaking_identificerende_code` = :p1 AND `tekstmodule` = :p2 AND `tekstsoort` = :p3 AND `tekstbloknummer` = :p4 AND `medicatiebewaking_aanvullende_voorwaarde` = :p5 AND `codering_waarde_1_alfanumeriek` = :p6 AND `codering_waarde_2_numeriek` = :p7';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_INT);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_INT);
            $stmt->bindValue(':p6', $key[6], PDO::PARAM_STR);
            $stmt->bindValue(':p7', $key[7], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsAanvvoorwaardenMedbewEnTekstblok();
            $obj->hydrate($row);
            GsAanvvoorwaardenMedbewEnTekstblokPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5], (string) $key[6], (string) $key[7])));
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
     * @return GsAanvvoorwaardenMedbewEnTekstblok|GsAanvvoorwaardenMedbewEnTekstblok[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsAanvvoorwaardenMedbewEnTekstblok[]|mixed the list of results, formatted by the current formatter
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
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_1_ALFANUMERIEK, $key[6], Criteria::EQUAL);
        $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK, $key[7], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_1_ALFANUMERIEK, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
            $cton7 = $this->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK, $key[7], Criteria::EQUAL);
            $cton0->addAnd($cton7);
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
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the thesnr_bewakingssoort column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrBewakingssoort(1234); // WHERE thesnr_bewakingssoort = 1234
     * $query->filterByThesnrBewakingssoort(array(12, 34)); // WHERE thesnr_bewakingssoort IN (12, 34)
     * $query->filterByThesnrBewakingssoort(array('min' => 12)); // WHERE thesnr_bewakingssoort >= 12
     * $query->filterByThesnrBewakingssoort(array('max' => 12)); // WHERE thesnr_bewakingssoort <= 12
     * </code>
     *
     * @param     mixed $thesnrBewakingssoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByThesnrBewakingssoort($thesnrBewakingssoort = null, $comparison = null)
    {
        if (is_array($thesnrBewakingssoort)) {
            $useMinMax = false;
            if (isset($thesnrBewakingssoort['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESNR_BEWAKINGSSOORT, $thesnrBewakingssoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrBewakingssoort['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESNR_BEWAKINGSSOORT, $thesnrBewakingssoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESNR_BEWAKINGSSOORT, $thesnrBewakingssoort, $comparison);
    }

    /**
     * Filter the query on the bewakingssoort column
     *
     * Example usage:
     * <code>
     * $query->filterByBewakingssoort(1234); // WHERE bewakingssoort = 1234
     * $query->filterByBewakingssoort(array(12, 34)); // WHERE bewakingssoort IN (12, 34)
     * $query->filterByBewakingssoort(array('min' => 12)); // WHERE bewakingssoort >= 12
     * $query->filterByBewakingssoort(array('max' => 12)); // WHERE bewakingssoort <= 12
     * </code>
     *
     * @param     mixed $bewakingssoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByBewakingssoort($bewakingssoort = null, $comparison = null)
    {
        if (is_array($bewakingssoort)) {
            $useMinMax = false;
            if (isset($bewakingssoort['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT, $bewakingssoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bewakingssoort['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT, $bewakingssoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT, $bewakingssoort, $comparison);
    }

    /**
     * Filter the query on the medicatiebewaking_identificerende_code column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicatiebewakingIdentificerendeCode(1234); // WHERE medicatiebewaking_identificerende_code = 1234
     * $query->filterByMedicatiebewakingIdentificerendeCode(array(12, 34)); // WHERE medicatiebewaking_identificerende_code IN (12, 34)
     * $query->filterByMedicatiebewakingIdentificerendeCode(array('min' => 12)); // WHERE medicatiebewaking_identificerende_code >= 12
     * $query->filterByMedicatiebewakingIdentificerendeCode(array('max' => 12)); // WHERE medicatiebewaking_identificerende_code <= 12
     * </code>
     *
     * @param     mixed $medicatiebewakingIdentificerendeCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByMedicatiebewakingIdentificerendeCode($medicatiebewakingIdentificerendeCode = null, $comparison = null)
    {
        if (is_array($medicatiebewakingIdentificerendeCode)) {
            $useMinMax = false;
            if (isset($medicatiebewakingIdentificerendeCode['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $medicatiebewakingIdentificerendeCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($medicatiebewakingIdentificerendeCode['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $medicatiebewakingIdentificerendeCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $medicatiebewakingIdentificerendeCode, $comparison);
    }

    /**
     * Filter the query on the thesaurus_verwijzing_tekstmodule column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusVerwijzingTekstmodule(1234); // WHERE thesaurus_verwijzing_tekstmodule = 1234
     * $query->filterByThesaurusVerwijzingTekstmodule(array(12, 34)); // WHERE thesaurus_verwijzing_tekstmodule IN (12, 34)
     * $query->filterByThesaurusVerwijzingTekstmodule(array('min' => 12)); // WHERE thesaurus_verwijzing_tekstmodule >= 12
     * $query->filterByThesaurusVerwijzingTekstmodule(array('max' => 12)); // WHERE thesaurus_verwijzing_tekstmodule <= 12
     * </code>
     *
     * @param     mixed $thesaurusVerwijzingTekstmodule The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByThesaurusVerwijzingTekstmodule($thesaurusVerwijzingTekstmodule = null, $comparison = null)
    {
        if (is_array($thesaurusVerwijzingTekstmodule)) {
            $useMinMax = false;
            if (isset($thesaurusVerwijzingTekstmodule['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUS_VERWIJZING_TEKSTMODULE, $thesaurusVerwijzingTekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusVerwijzingTekstmodule['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUS_VERWIJZING_TEKSTMODULE, $thesaurusVerwijzingTekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUS_VERWIJZING_TEKSTMODULE, $thesaurusVerwijzingTekstmodule, $comparison);
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
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByTekstmodule($tekstmodule = null, $comparison = null)
    {
        if (is_array($tekstmodule)) {
            $useMinMax = false;
            if (isset($tekstmodule['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE, $tekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmodule['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE, $tekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE, $tekstmodule, $comparison);
    }

    /**
     * Filter the query on the thesaurus_verwijzing_tekstsoort column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusVerwijzingTekstsoort(1234); // WHERE thesaurus_verwijzing_tekstsoort = 1234
     * $query->filterByThesaurusVerwijzingTekstsoort(array(12, 34)); // WHERE thesaurus_verwijzing_tekstsoort IN (12, 34)
     * $query->filterByThesaurusVerwijzingTekstsoort(array('min' => 12)); // WHERE thesaurus_verwijzing_tekstsoort >= 12
     * $query->filterByThesaurusVerwijzingTekstsoort(array('max' => 12)); // WHERE thesaurus_verwijzing_tekstsoort <= 12
     * </code>
     *
     * @param     mixed $thesaurusVerwijzingTekstsoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByThesaurusVerwijzingTekstsoort($thesaurusVerwijzingTekstsoort = null, $comparison = null)
    {
        if (is_array($thesaurusVerwijzingTekstsoort)) {
            $useMinMax = false;
            if (isset($thesaurusVerwijzingTekstsoort['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUS_VERWIJZING_TEKSTSOORT, $thesaurusVerwijzingTekstsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusVerwijzingTekstsoort['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUS_VERWIJZING_TEKSTSOORT, $thesaurusVerwijzingTekstsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUS_VERWIJZING_TEKSTSOORT, $thesaurusVerwijzingTekstsoort, $comparison);
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
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByTekstsoort($tekstsoort = null, $comparison = null)
    {
        if (is_array($tekstsoort)) {
            $useMinMax = false;
            if (isset($tekstsoort['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT, $tekstsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstsoort['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT, $tekstsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT, $tekstsoort, $comparison);
    }

    /**
     * Filter the query on the tekstbloknummer column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstbloknummer(1234); // WHERE tekstbloknummer = 1234
     * $query->filterByTekstbloknummer(array(12, 34)); // WHERE tekstbloknummer IN (12, 34)
     * $query->filterByTekstbloknummer(array('min' => 12)); // WHERE tekstbloknummer >= 12
     * $query->filterByTekstbloknummer(array('max' => 12)); // WHERE tekstbloknummer <= 12
     * </code>
     *
     * @param     mixed $tekstbloknummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByTekstbloknummer($tekstbloknummer = null, $comparison = null)
    {
        if (is_array($tekstbloknummer)) {
            $useMinMax = false;
            if (isset($tekstbloknummer['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER, $tekstbloknummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstbloknummer['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER, $tekstbloknummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER, $tekstbloknummer, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzing_aanvullende_voorwaarde column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzingAanvullendeVoorwaarde(1234); // WHERE thesaurusverwijzing_aanvullende_voorwaarde = 1234
     * $query->filterByThesaurusverwijzingAanvullendeVoorwaarde(array(12, 34)); // WHERE thesaurusverwijzing_aanvullende_voorwaarde IN (12, 34)
     * $query->filterByThesaurusverwijzingAanvullendeVoorwaarde(array('min' => 12)); // WHERE thesaurusverwijzing_aanvullende_voorwaarde >= 12
     * $query->filterByThesaurusverwijzingAanvullendeVoorwaarde(array('max' => 12)); // WHERE thesaurusverwijzing_aanvullende_voorwaarde <= 12
     * </code>
     *
     * @param     mixed $thesaurusverwijzingAanvullendeVoorwaarde The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzingAanvullendeVoorwaarde($thesaurusverwijzingAanvullendeVoorwaarde = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzingAanvullendeVoorwaarde)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzingAanvullendeVoorwaarde['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE, $thesaurusverwijzingAanvullendeVoorwaarde['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzingAanvullendeVoorwaarde['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE, $thesaurusverwijzingAanvullendeVoorwaarde['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE, $thesaurusverwijzingAanvullendeVoorwaarde, $comparison);
    }

    /**
     * Filter the query on the medicatiebewaking_aanvullende_voorwaarde column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicatiebewakingAanvullendeVoorwaarde(1234); // WHERE medicatiebewaking_aanvullende_voorwaarde = 1234
     * $query->filterByMedicatiebewakingAanvullendeVoorwaarde(array(12, 34)); // WHERE medicatiebewaking_aanvullende_voorwaarde IN (12, 34)
     * $query->filterByMedicatiebewakingAanvullendeVoorwaarde(array('min' => 12)); // WHERE medicatiebewaking_aanvullende_voorwaarde >= 12
     * $query->filterByMedicatiebewakingAanvullendeVoorwaarde(array('max' => 12)); // WHERE medicatiebewaking_aanvullende_voorwaarde <= 12
     * </code>
     *
     * @param     mixed $medicatiebewakingAanvullendeVoorwaarde The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByMedicatiebewakingAanvullendeVoorwaarde($medicatiebewakingAanvullendeVoorwaarde = null, $comparison = null)
    {
        if (is_array($medicatiebewakingAanvullendeVoorwaarde)) {
            $useMinMax = false;
            if (isset($medicatiebewakingAanvullendeVoorwaarde['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $medicatiebewakingAanvullendeVoorwaarde['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($medicatiebewakingAanvullendeVoorwaarde['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $medicatiebewakingAanvullendeVoorwaarde['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $medicatiebewakingAanvullendeVoorwaarde, $comparison);
    }

    /**
     * Filter the query on the codering_waarde_1_alfanumeriek column
     *
     * Example usage:
     * <code>
     * $query->filterByCoderingWaarde1Alfanumeriek('fooValue');   // WHERE codering_waarde_1_alfanumeriek = 'fooValue'
     * $query->filterByCoderingWaarde1Alfanumeriek('%fooValue%'); // WHERE codering_waarde_1_alfanumeriek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $coderingWaarde1Alfanumeriek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByCoderingWaarde1Alfanumeriek($coderingWaarde1Alfanumeriek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($coderingWaarde1Alfanumeriek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $coderingWaarde1Alfanumeriek)) {
                $coderingWaarde1Alfanumeriek = str_replace('*', '%', $coderingWaarde1Alfanumeriek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_1_ALFANUMERIEK, $coderingWaarde1Alfanumeriek, $comparison);
    }

    /**
     * Filter the query on the codering_waarde_2_numeriek column
     *
     * Example usage:
     * <code>
     * $query->filterByCoderingWaarde2Numeriek(1234); // WHERE codering_waarde_2_numeriek = 1234
     * $query->filterByCoderingWaarde2Numeriek(array(12, 34)); // WHERE codering_waarde_2_numeriek IN (12, 34)
     * $query->filterByCoderingWaarde2Numeriek(array('min' => 12)); // WHERE codering_waarde_2_numeriek >= 12
     * $query->filterByCoderingWaarde2Numeriek(array('max' => 12)); // WHERE codering_waarde_2_numeriek <= 12
     * </code>
     *
     * @param     mixed $coderingWaarde2Numeriek The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByCoderingWaarde2Numeriek($coderingWaarde2Numeriek = null, $comparison = null)
    {
        if (is_array($coderingWaarde2Numeriek)) {
            $useMinMax = false;
            if (isset($coderingWaarde2Numeriek['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK, $coderingWaarde2Numeriek['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coderingWaarde2Numeriek['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK, $coderingWaarde2Numeriek['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK, $coderingWaarde2Numeriek, $comparison);
    }

    /**
     * Filter the query on the codering_waarde_3_numeriek column
     *
     * Example usage:
     * <code>
     * $query->filterByCoderingWaarde3Numeriek(1234); // WHERE codering_waarde_3_numeriek = 1234
     * $query->filterByCoderingWaarde3Numeriek(array(12, 34)); // WHERE codering_waarde_3_numeriek IN (12, 34)
     * $query->filterByCoderingWaarde3Numeriek(array('min' => 12)); // WHERE codering_waarde_3_numeriek >= 12
     * $query->filterByCoderingWaarde3Numeriek(array('max' => 12)); // WHERE codering_waarde_3_numeriek <= 12
     * </code>
     *
     * @param     mixed $coderingWaarde3Numeriek The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function filterByCoderingWaarde3Numeriek($coderingWaarde3Numeriek = null, $comparison = null)
    {
        if (is_array($coderingWaarde3Numeriek)) {
            $useMinMax = false;
            if (isset($coderingWaarde3Numeriek['min'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_3_NUMERIEK, $coderingWaarde3Numeriek['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coderingWaarde3Numeriek['max'])) {
                $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_3_NUMERIEK, $coderingWaarde3Numeriek['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_3_NUMERIEK, $coderingWaarde3Numeriek, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsAanvvoorwaardenMedbewEnTekstblok $gsAanvvoorwaardenMedbewEnTekstblok Object to remove from the list of results
     *
     * @return GsAanvvoorwaardenMedbewEnTekstblokQuery The current query, for fluid interface
     */
    public function prune($gsAanvvoorwaardenMedbewEnTekstblok = null)
    {
        if ($gsAanvvoorwaardenMedbewEnTekstblok) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT), $gsAanvvoorwaardenMedbewEnTekstblok->getBewakingssoort(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE), $gsAanvvoorwaardenMedbewEnTekstblok->getMedicatiebewakingIdentificerendeCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE), $gsAanvvoorwaardenMedbewEnTekstblok->getTekstmodule(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT), $gsAanvvoorwaardenMedbewEnTekstblok->getTekstsoort(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER), $gsAanvvoorwaardenMedbewEnTekstblok->getTekstbloknummer(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE), $gsAanvvoorwaardenMedbewEnTekstblok->getMedicatiebewakingAanvullendeVoorwaarde(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_1_ALFANUMERIEK), $gsAanvvoorwaardenMedbewEnTekstblok->getCoderingWaarde1Alfanumeriek(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond7', $this->getAliasedColName(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK), $gsAanvvoorwaardenMedbewEnTekstblok->getCoderingWaarde2Numeriek(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6', 'pruneCond7'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
