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
use PharmaIntelligence\GstandaardBundle\Model\GsNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProduct;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsPrescriptieProductQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsPrescriptieProductQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsPrescriptieProductQuery orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsPrescriptieProductQuery orderByNaamnummerPrescriptieProduct($order = Criteria::ASC) Order by the naamnummer_prescriptie_product column
 * @method GsPrescriptieProductQuery orderByGeneriekeproductcode($order = Criteria::ASC) Order by the generiekeproductcode column
 * @method GsPrescriptieProductQuery orderByThesnrRedenVoorschrijvenHpkNiveau($order = Criteria::ASC) Order by the thesnr_reden_voorschrijven_hpk_niveau column
 * @method GsPrescriptieProductQuery orderByRedenVoorschrijvenHpkNiveau($order = Criteria::ASC) Order by the reden_voorschrijven_hpk_niveau column
 * @method GsPrescriptieProductQuery orderByThesnrEmballagetype($order = Criteria::ASC) Order by the thesnr_emballagetype column
 * @method GsPrescriptieProductQuery orderByEmballagetype($order = Criteria::ASC) Order by the emballagetype column
 * @method GsPrescriptieProductQuery orderByThesnrBasiseenheidProduct($order = Criteria::ASC) Order by the thesnr_basiseenheid_product column
 * @method GsPrescriptieProductQuery orderByBasiseenheidProduct($order = Criteria::ASC) Order by the basiseenheid_product column
 * @method GsPrescriptieProductQuery orderByProductgrootteAlgemeen($order = Criteria::ASC) Order by the productgrootte_algemeen column
 * @method GsPrescriptieProductQuery orderByThesnrHulpmiddelAard($order = Criteria::ASC) Order by the thesnr_hulpmiddel_aard column
 * @method GsPrescriptieProductQuery orderByHulpmiddelAard($order = Criteria::ASC) Order by the hulpmiddel_aard column
 * @method GsPrescriptieProductQuery orderByHulpmiddelAardHoeveelheid($order = Criteria::ASC) Order by the hulpmiddel_aard_hoeveelheid column
 * @method GsPrescriptieProductQuery orderByMeervoudigProductJn($order = Criteria::ASC) Order by the meervoudig_product_jn column
 * @method GsPrescriptieProductQuery orderByThesnrRedenHulpstofIdentificerend($order = Criteria::ASC) Order by the thesnr_reden_hulpstof_identificerend column
 * @method GsPrescriptieProductQuery orderByRedenHulpstofIdentificerend($order = Criteria::ASC) Order by the reden_hulpstof_identificerend column
 * @method GsPrescriptieProductQuery orderByThesnrVerwijzingExtraKenmerk($order = Criteria::ASC) Order by the thesnr_verwijzing_extra_kenmerk column
 * @method GsPrescriptieProductQuery orderByVerwijzingExtraKenmerk($order = Criteria::ASC) Order by the verwijzing_extra_kenmerk column
 *
 * @method GsPrescriptieProductQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsPrescriptieProductQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsPrescriptieProductQuery groupByPrkcode() Group by the prkcode column
 * @method GsPrescriptieProductQuery groupByNaamnummerPrescriptieProduct() Group by the naamnummer_prescriptie_product column
 * @method GsPrescriptieProductQuery groupByGeneriekeproductcode() Group by the generiekeproductcode column
 * @method GsPrescriptieProductQuery groupByThesnrRedenVoorschrijvenHpkNiveau() Group by the thesnr_reden_voorschrijven_hpk_niveau column
 * @method GsPrescriptieProductQuery groupByRedenVoorschrijvenHpkNiveau() Group by the reden_voorschrijven_hpk_niveau column
 * @method GsPrescriptieProductQuery groupByThesnrEmballagetype() Group by the thesnr_emballagetype column
 * @method GsPrescriptieProductQuery groupByEmballagetype() Group by the emballagetype column
 * @method GsPrescriptieProductQuery groupByThesnrBasiseenheidProduct() Group by the thesnr_basiseenheid_product column
 * @method GsPrescriptieProductQuery groupByBasiseenheidProduct() Group by the basiseenheid_product column
 * @method GsPrescriptieProductQuery groupByProductgrootteAlgemeen() Group by the productgrootte_algemeen column
 * @method GsPrescriptieProductQuery groupByThesnrHulpmiddelAard() Group by the thesnr_hulpmiddel_aard column
 * @method GsPrescriptieProductQuery groupByHulpmiddelAard() Group by the hulpmiddel_aard column
 * @method GsPrescriptieProductQuery groupByHulpmiddelAardHoeveelheid() Group by the hulpmiddel_aard_hoeveelheid column
 * @method GsPrescriptieProductQuery groupByMeervoudigProductJn() Group by the meervoudig_product_jn column
 * @method GsPrescriptieProductQuery groupByThesnrRedenHulpstofIdentificerend() Group by the thesnr_reden_hulpstof_identificerend column
 * @method GsPrescriptieProductQuery groupByRedenHulpstofIdentificerend() Group by the reden_hulpstof_identificerend column
 * @method GsPrescriptieProductQuery groupByThesnrVerwijzingExtraKenmerk() Group by the thesnr_verwijzing_extra_kenmerk column
 * @method GsPrescriptieProductQuery groupByVerwijzingExtraKenmerk() Group by the verwijzing_extra_kenmerk column
 *
 * @method GsPrescriptieProductQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsPrescriptieProductQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsPrescriptieProductQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsPrescriptieProductQuery leftJoinGsGeneriekeProducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsGeneriekeProducten relation
 * @method GsPrescriptieProductQuery rightJoinGsGeneriekeProducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsGeneriekeProducten relation
 * @method GsPrescriptieProductQuery innerJoinGsGeneriekeProducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsGeneriekeProducten relation
 *
 * @method GsPrescriptieProductQuery leftJoinGsNamen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsNamen relation
 * @method GsPrescriptieProductQuery rightJoinGsNamen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsNamen relation
 * @method GsPrescriptieProductQuery innerJoinGsNamen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsNamen relation
 *
 * @method GsPrescriptieProductQuery leftJoinRedenVoorschrijvenHpkNiveauOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the RedenVoorschrijvenHpkNiveauOmschrijving relation
 * @method GsPrescriptieProductQuery rightJoinRedenVoorschrijvenHpkNiveauOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RedenVoorschrijvenHpkNiveauOmschrijving relation
 * @method GsPrescriptieProductQuery innerJoinRedenVoorschrijvenHpkNiveauOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the RedenVoorschrijvenHpkNiveauOmschrijving relation
 *
 * @method GsPrescriptieProductQuery leftJoinEmballagetypeOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmballagetypeOmschrijving relation
 * @method GsPrescriptieProductQuery rightJoinEmballagetypeOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmballagetypeOmschrijving relation
 * @method GsPrescriptieProductQuery innerJoinEmballagetypeOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the EmballagetypeOmschrijving relation
 *
 * @method GsPrescriptieProductQuery leftJoinBasiseenheidProductOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the BasiseenheidProductOmschrijving relation
 * @method GsPrescriptieProductQuery rightJoinBasiseenheidProductOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BasiseenheidProductOmschrijving relation
 * @method GsPrescriptieProductQuery innerJoinBasiseenheidProductOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the BasiseenheidProductOmschrijving relation
 *
 * @method GsPrescriptieProductQuery leftJoinHulpmiddelAardOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the HulpmiddelAardOmschrijving relation
 * @method GsPrescriptieProductQuery rightJoinHulpmiddelAardOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the HulpmiddelAardOmschrijving relation
 * @method GsPrescriptieProductQuery innerJoinHulpmiddelAardOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the HulpmiddelAardOmschrijving relation
 *
 * @method GsPrescriptieProductQuery leftJoinRedenHulpstofIdentificerendOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the RedenHulpstofIdentificerendOmschrijving relation
 * @method GsPrescriptieProductQuery rightJoinRedenHulpstofIdentificerendOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RedenHulpstofIdentificerendOmschrijving relation
 * @method GsPrescriptieProductQuery innerJoinRedenHulpstofIdentificerendOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the RedenHulpstofIdentificerendOmschrijving relation
 *
 * @method GsPrescriptieProductQuery leftJoinVerwijzingExtraKenmerkOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the VerwijzingExtraKenmerkOmschrijving relation
 * @method GsPrescriptieProductQuery rightJoinVerwijzingExtraKenmerkOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VerwijzingExtraKenmerkOmschrijving relation
 * @method GsPrescriptieProductQuery innerJoinVerwijzingExtraKenmerkOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the VerwijzingExtraKenmerkOmschrijving relation
 *
 * @method GsPrescriptieProductQuery leftJoinGsArtikelEigenschappen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsPrescriptieProductQuery rightJoinGsArtikelEigenschappen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsPrescriptieProductQuery innerJoinGsArtikelEigenschappen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelEigenschappen relation
 *
 * @method GsPrescriptieProductQuery leftJoinGsBijzondereKenmerken($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsBijzondereKenmerken relation
 * @method GsPrescriptieProductQuery rightJoinGsBijzondereKenmerken($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsBijzondereKenmerken relation
 * @method GsPrescriptieProductQuery innerJoinGsBijzondereKenmerken($relationAlias = null) Adds a INNER JOIN clause to the query using the GsBijzondereKenmerken relation
 *
 * @method GsPrescriptieProductQuery leftJoinGsHandelsproducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsPrescriptieProductQuery rightJoinGsHandelsproducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsPrescriptieProductQuery innerJoinGsHandelsproducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproducten relation
 *
 * @method GsPrescriptieProduct findOne(PropelPDO $con = null) Return the first GsPrescriptieProduct matching the query
 * @method GsPrescriptieProduct findOneOrCreate(PropelPDO $con = null) Return the first GsPrescriptieProduct matching the query, or a new GsPrescriptieProduct object populated from the query conditions when no match is found
 *
 * @method GsPrescriptieProduct findOneByBestandnummer(int $bestandnummer) Return the first GsPrescriptieProduct filtered by the bestandnummer column
 * @method GsPrescriptieProduct findOneByMutatiekode(int $mutatiekode) Return the first GsPrescriptieProduct filtered by the mutatiekode column
 * @method GsPrescriptieProduct findOneByNaamnummerPrescriptieProduct(int $naamnummer_prescriptie_product) Return the first GsPrescriptieProduct filtered by the naamnummer_prescriptie_product column
 * @method GsPrescriptieProduct findOneByGeneriekeproductcode(int $generiekeproductcode) Return the first GsPrescriptieProduct filtered by the generiekeproductcode column
 * @method GsPrescriptieProduct findOneByThesnrRedenVoorschrijvenHpkNiveau(int $thesnr_reden_voorschrijven_hpk_niveau) Return the first GsPrescriptieProduct filtered by the thesnr_reden_voorschrijven_hpk_niveau column
 * @method GsPrescriptieProduct findOneByRedenVoorschrijvenHpkNiveau(int $reden_voorschrijven_hpk_niveau) Return the first GsPrescriptieProduct filtered by the reden_voorschrijven_hpk_niveau column
 * @method GsPrescriptieProduct findOneByThesnrEmballagetype(int $thesnr_emballagetype) Return the first GsPrescriptieProduct filtered by the thesnr_emballagetype column
 * @method GsPrescriptieProduct findOneByEmballagetype(int $emballagetype) Return the first GsPrescriptieProduct filtered by the emballagetype column
 * @method GsPrescriptieProduct findOneByThesnrBasiseenheidProduct(int $thesnr_basiseenheid_product) Return the first GsPrescriptieProduct filtered by the thesnr_basiseenheid_product column
 * @method GsPrescriptieProduct findOneByBasiseenheidProduct(int $basiseenheid_product) Return the first GsPrescriptieProduct filtered by the basiseenheid_product column
 * @method GsPrescriptieProduct findOneByProductgrootteAlgemeen(string $productgrootte_algemeen) Return the first GsPrescriptieProduct filtered by the productgrootte_algemeen column
 * @method GsPrescriptieProduct findOneByThesnrHulpmiddelAard(int $thesnr_hulpmiddel_aard) Return the first GsPrescriptieProduct filtered by the thesnr_hulpmiddel_aard column
 * @method GsPrescriptieProduct findOneByHulpmiddelAard(int $hulpmiddel_aard) Return the first GsPrescriptieProduct filtered by the hulpmiddel_aard column
 * @method GsPrescriptieProduct findOneByHulpmiddelAardHoeveelheid(int $hulpmiddel_aard_hoeveelheid) Return the first GsPrescriptieProduct filtered by the hulpmiddel_aard_hoeveelheid column
 * @method GsPrescriptieProduct findOneByMeervoudigProductJn(string $meervoudig_product_jn) Return the first GsPrescriptieProduct filtered by the meervoudig_product_jn column
 * @method GsPrescriptieProduct findOneByThesnrRedenHulpstofIdentificerend(int $thesnr_reden_hulpstof_identificerend) Return the first GsPrescriptieProduct filtered by the thesnr_reden_hulpstof_identificerend column
 * @method GsPrescriptieProduct findOneByRedenHulpstofIdentificerend(int $reden_hulpstof_identificerend) Return the first GsPrescriptieProduct filtered by the reden_hulpstof_identificerend column
 * @method GsPrescriptieProduct findOneByThesnrVerwijzingExtraKenmerk(int $thesnr_verwijzing_extra_kenmerk) Return the first GsPrescriptieProduct filtered by the thesnr_verwijzing_extra_kenmerk column
 * @method GsPrescriptieProduct findOneByVerwijzingExtraKenmerk(int $verwijzing_extra_kenmerk) Return the first GsPrescriptieProduct filtered by the verwijzing_extra_kenmerk column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsPrescriptieProduct objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsPrescriptieProduct objects filtered by the mutatiekode column
 * @method array findByPrkcode(int $prkcode) Return GsPrescriptieProduct objects filtered by the prkcode column
 * @method array findByNaamnummerPrescriptieProduct(int $naamnummer_prescriptie_product) Return GsPrescriptieProduct objects filtered by the naamnummer_prescriptie_product column
 * @method array findByGeneriekeproductcode(int $generiekeproductcode) Return GsPrescriptieProduct objects filtered by the generiekeproductcode column
 * @method array findByThesnrRedenVoorschrijvenHpkNiveau(int $thesnr_reden_voorschrijven_hpk_niveau) Return GsPrescriptieProduct objects filtered by the thesnr_reden_voorschrijven_hpk_niveau column
 * @method array findByRedenVoorschrijvenHpkNiveau(int $reden_voorschrijven_hpk_niveau) Return GsPrescriptieProduct objects filtered by the reden_voorschrijven_hpk_niveau column
 * @method array findByThesnrEmballagetype(int $thesnr_emballagetype) Return GsPrescriptieProduct objects filtered by the thesnr_emballagetype column
 * @method array findByEmballagetype(int $emballagetype) Return GsPrescriptieProduct objects filtered by the emballagetype column
 * @method array findByThesnrBasiseenheidProduct(int $thesnr_basiseenheid_product) Return GsPrescriptieProduct objects filtered by the thesnr_basiseenheid_product column
 * @method array findByBasiseenheidProduct(int $basiseenheid_product) Return GsPrescriptieProduct objects filtered by the basiseenheid_product column
 * @method array findByProductgrootteAlgemeen(string $productgrootte_algemeen) Return GsPrescriptieProduct objects filtered by the productgrootte_algemeen column
 * @method array findByThesnrHulpmiddelAard(int $thesnr_hulpmiddel_aard) Return GsPrescriptieProduct objects filtered by the thesnr_hulpmiddel_aard column
 * @method array findByHulpmiddelAard(int $hulpmiddel_aard) Return GsPrescriptieProduct objects filtered by the hulpmiddel_aard column
 * @method array findByHulpmiddelAardHoeveelheid(int $hulpmiddel_aard_hoeveelheid) Return GsPrescriptieProduct objects filtered by the hulpmiddel_aard_hoeveelheid column
 * @method array findByMeervoudigProductJn(string $meervoudig_product_jn) Return GsPrescriptieProduct objects filtered by the meervoudig_product_jn column
 * @method array findByThesnrRedenHulpstofIdentificerend(int $thesnr_reden_hulpstof_identificerend) Return GsPrescriptieProduct objects filtered by the thesnr_reden_hulpstof_identificerend column
 * @method array findByRedenHulpstofIdentificerend(int $reden_hulpstof_identificerend) Return GsPrescriptieProduct objects filtered by the reden_hulpstof_identificerend column
 * @method array findByThesnrVerwijzingExtraKenmerk(int $thesnr_verwijzing_extra_kenmerk) Return GsPrescriptieProduct objects filtered by the thesnr_verwijzing_extra_kenmerk column
 * @method array findByVerwijzingExtraKenmerk(int $verwijzing_extra_kenmerk) Return GsPrescriptieProduct objects filtered by the verwijzing_extra_kenmerk column
 */
abstract class BaseGsPrescriptieProductQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsPrescriptieProductQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrescriptieProduct';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsPrescriptieProductQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsPrescriptieProductQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsPrescriptieProductQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsPrescriptieProductQuery) {
            return $criteria;
        }
        $query = new GsPrescriptieProductQuery(null, null, $modelAlias);

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
     * @return   GsPrescriptieProduct|GsPrescriptieProduct[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsPrescriptieProductPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsPrescriptieProduct A model object, or null if the key is not found
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
     * @return                 GsPrescriptieProduct A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `prkcode`, `naamnummer_prescriptie_product`, `generiekeproductcode`, `thesnr_reden_voorschrijven_hpk_niveau`, `reden_voorschrijven_hpk_niveau`, `thesnr_emballagetype`, `emballagetype`, `thesnr_basiseenheid_product`, `basiseenheid_product`, `productgrootte_algemeen`, `thesnr_hulpmiddel_aard`, `hulpmiddel_aard`, `hulpmiddel_aard_hoeveelheid`, `meervoudig_product_jn`, `thesnr_reden_hulpstof_identificerend`, `reden_hulpstof_identificerend`, `thesnr_verwijzing_extra_kenmerk`, `verwijzing_extra_kenmerk` FROM `gs_prescriptie_product` WHERE `prkcode` = :p0';
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
            $obj = new GsPrescriptieProduct();
            $obj->hydrate($row);
            GsPrescriptieProductPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsPrescriptieProduct|GsPrescriptieProduct[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsPrescriptieProduct[]|mixed the list of results, formatted by the current formatter
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
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsPrescriptieProductPeer::PRKCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsPrescriptieProductPeer::PRKCODE, $keys, Criteria::IN);
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
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::PRKCODE, $prkcode, $comparison);
    }

    /**
     * Filter the query on the naamnummer_prescriptie_product column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamnummerPrescriptieProduct(1234); // WHERE naamnummer_prescriptie_product = 1234
     * $query->filterByNaamnummerPrescriptieProduct(array(12, 34)); // WHERE naamnummer_prescriptie_product IN (12, 34)
     * $query->filterByNaamnummerPrescriptieProduct(array('min' => 12)); // WHERE naamnummer_prescriptie_product >= 12
     * $query->filterByNaamnummerPrescriptieProduct(array('max' => 12)); // WHERE naamnummer_prescriptie_product <= 12
     * </code>
     *
     * @see       filterByGsNamen()
     *
     * @param     mixed $naamnummerPrescriptieProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByNaamnummerPrescriptieProduct($naamnummerPrescriptieProduct = null, $comparison = null)
    {
        if (is_array($naamnummerPrescriptieProduct)) {
            $useMinMax = false;
            if (isset($naamnummerPrescriptieProduct['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, $naamnummerPrescriptieProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($naamnummerPrescriptieProduct['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, $naamnummerPrescriptieProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, $naamnummerPrescriptieProduct, $comparison);
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
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByGeneriekeproductcode($generiekeproductcode = null, $comparison = null)
    {
        if (is_array($generiekeproductcode)) {
            $useMinMax = false;
            if (isset($generiekeproductcode['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generiekeproductcode['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode, $comparison);
    }

    /**
     * Filter the query on the thesnr_reden_voorschrijven_hpk_niveau column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrRedenVoorschrijvenHpkNiveau(1234); // WHERE thesnr_reden_voorschrijven_hpk_niveau = 1234
     * $query->filterByThesnrRedenVoorschrijvenHpkNiveau(array(12, 34)); // WHERE thesnr_reden_voorschrijven_hpk_niveau IN (12, 34)
     * $query->filterByThesnrRedenVoorschrijvenHpkNiveau(array('min' => 12)); // WHERE thesnr_reden_voorschrijven_hpk_niveau >= 12
     * $query->filterByThesnrRedenVoorschrijvenHpkNiveau(array('max' => 12)); // WHERE thesnr_reden_voorschrijven_hpk_niveau <= 12
     * </code>
     *
     * @see       filterByRedenVoorschrijvenHpkNiveauOmschrijving()
     *
     * @param     mixed $thesnrRedenVoorschrijvenHpkNiveau The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByThesnrRedenVoorschrijvenHpkNiveau($thesnrRedenVoorschrijvenHpkNiveau = null, $comparison = null)
    {
        if (is_array($thesnrRedenVoorschrijvenHpkNiveau)) {
            $useMinMax = false;
            if (isset($thesnrRedenVoorschrijvenHpkNiveau['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, $thesnrRedenVoorschrijvenHpkNiveau['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrRedenVoorschrijvenHpkNiveau['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, $thesnrRedenVoorschrijvenHpkNiveau['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, $thesnrRedenVoorschrijvenHpkNiveau, $comparison);
    }

    /**
     * Filter the query on the reden_voorschrijven_hpk_niveau column
     *
     * Example usage:
     * <code>
     * $query->filterByRedenVoorschrijvenHpkNiveau(1234); // WHERE reden_voorschrijven_hpk_niveau = 1234
     * $query->filterByRedenVoorschrijvenHpkNiveau(array(12, 34)); // WHERE reden_voorschrijven_hpk_niveau IN (12, 34)
     * $query->filterByRedenVoorschrijvenHpkNiveau(array('min' => 12)); // WHERE reden_voorschrijven_hpk_niveau >= 12
     * $query->filterByRedenVoorschrijvenHpkNiveau(array('max' => 12)); // WHERE reden_voorschrijven_hpk_niveau <= 12
     * </code>
     *
     * @see       filterByRedenVoorschrijvenHpkNiveauOmschrijving()
     *
     * @param     mixed $redenVoorschrijvenHpkNiveau The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByRedenVoorschrijvenHpkNiveau($redenVoorschrijvenHpkNiveau = null, $comparison = null)
    {
        if (is_array($redenVoorschrijvenHpkNiveau)) {
            $useMinMax = false;
            if (isset($redenVoorschrijvenHpkNiveau['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, $redenVoorschrijvenHpkNiveau['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($redenVoorschrijvenHpkNiveau['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, $redenVoorschrijvenHpkNiveau['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, $redenVoorschrijvenHpkNiveau, $comparison);
    }

    /**
     * Filter the query on the thesnr_emballagetype column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrEmballagetype(1234); // WHERE thesnr_emballagetype = 1234
     * $query->filterByThesnrEmballagetype(array(12, 34)); // WHERE thesnr_emballagetype IN (12, 34)
     * $query->filterByThesnrEmballagetype(array('min' => 12)); // WHERE thesnr_emballagetype >= 12
     * $query->filterByThesnrEmballagetype(array('max' => 12)); // WHERE thesnr_emballagetype <= 12
     * </code>
     *
     * @see       filterByEmballagetypeOmschrijving()
     *
     * @param     mixed $thesnrEmballagetype The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByThesnrEmballagetype($thesnrEmballagetype = null, $comparison = null)
    {
        if (is_array($thesnrEmballagetype)) {
            $useMinMax = false;
            if (isset($thesnrEmballagetype['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, $thesnrEmballagetype['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrEmballagetype['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, $thesnrEmballagetype['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, $thesnrEmballagetype, $comparison);
    }

    /**
     * Filter the query on the emballagetype column
     *
     * Example usage:
     * <code>
     * $query->filterByEmballagetype(1234); // WHERE emballagetype = 1234
     * $query->filterByEmballagetype(array(12, 34)); // WHERE emballagetype IN (12, 34)
     * $query->filterByEmballagetype(array('min' => 12)); // WHERE emballagetype >= 12
     * $query->filterByEmballagetype(array('max' => 12)); // WHERE emballagetype <= 12
     * </code>
     *
     * @see       filterByEmballagetypeOmschrijving()
     *
     * @param     mixed $emballagetype The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByEmballagetype($emballagetype = null, $comparison = null)
    {
        if (is_array($emballagetype)) {
            $useMinMax = false;
            if (isset($emballagetype['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::EMBALLAGETYPE, $emballagetype['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($emballagetype['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::EMBALLAGETYPE, $emballagetype['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::EMBALLAGETYPE, $emballagetype, $comparison);
    }

    /**
     * Filter the query on the thesnr_basiseenheid_product column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrBasiseenheidProduct(1234); // WHERE thesnr_basiseenheid_product = 1234
     * $query->filterByThesnrBasiseenheidProduct(array(12, 34)); // WHERE thesnr_basiseenheid_product IN (12, 34)
     * $query->filterByThesnrBasiseenheidProduct(array('min' => 12)); // WHERE thesnr_basiseenheid_product >= 12
     * $query->filterByThesnrBasiseenheidProduct(array('max' => 12)); // WHERE thesnr_basiseenheid_product <= 12
     * </code>
     *
     * @see       filterByBasiseenheidProductOmschrijving()
     *
     * @param     mixed $thesnrBasiseenheidProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByThesnrBasiseenheidProduct($thesnrBasiseenheidProduct = null, $comparison = null)
    {
        if (is_array($thesnrBasiseenheidProduct)) {
            $useMinMax = false;
            if (isset($thesnrBasiseenheidProduct['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, $thesnrBasiseenheidProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrBasiseenheidProduct['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, $thesnrBasiseenheidProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, $thesnrBasiseenheidProduct, $comparison);
    }

    /**
     * Filter the query on the basiseenheid_product column
     *
     * Example usage:
     * <code>
     * $query->filterByBasiseenheidProduct(1234); // WHERE basiseenheid_product = 1234
     * $query->filterByBasiseenheidProduct(array(12, 34)); // WHERE basiseenheid_product IN (12, 34)
     * $query->filterByBasiseenheidProduct(array('min' => 12)); // WHERE basiseenheid_product >= 12
     * $query->filterByBasiseenheidProduct(array('max' => 12)); // WHERE basiseenheid_product <= 12
     * </code>
     *
     * @see       filterByBasiseenheidProductOmschrijving()
     *
     * @param     mixed $basiseenheidProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByBasiseenheidProduct($basiseenheidProduct = null, $comparison = null)
    {
        if (is_array($basiseenheidProduct)) {
            $useMinMax = false;
            if (isset($basiseenheidProduct['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, $basiseenheidProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($basiseenheidProduct['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, $basiseenheidProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, $basiseenheidProduct, $comparison);
    }

    /**
     * Filter the query on the productgrootte_algemeen column
     *
     * Example usage:
     * <code>
     * $query->filterByProductgrootteAlgemeen(1234); // WHERE productgrootte_algemeen = 1234
     * $query->filterByProductgrootteAlgemeen(array(12, 34)); // WHERE productgrootte_algemeen IN (12, 34)
     * $query->filterByProductgrootteAlgemeen(array('min' => 12)); // WHERE productgrootte_algemeen >= 12
     * $query->filterByProductgrootteAlgemeen(array('max' => 12)); // WHERE productgrootte_algemeen <= 12
     * </code>
     *
     * @param     mixed $productgrootteAlgemeen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByProductgrootteAlgemeen($productgrootteAlgemeen = null, $comparison = null)
    {
        if (is_array($productgrootteAlgemeen)) {
            $useMinMax = false;
            if (isset($productgrootteAlgemeen['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::PRODUCTGROOTTE_ALGEMEEN, $productgrootteAlgemeen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productgrootteAlgemeen['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::PRODUCTGROOTTE_ALGEMEEN, $productgrootteAlgemeen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::PRODUCTGROOTTE_ALGEMEEN, $productgrootteAlgemeen, $comparison);
    }

    /**
     * Filter the query on the thesnr_hulpmiddel_aard column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrHulpmiddelAard(1234); // WHERE thesnr_hulpmiddel_aard = 1234
     * $query->filterByThesnrHulpmiddelAard(array(12, 34)); // WHERE thesnr_hulpmiddel_aard IN (12, 34)
     * $query->filterByThesnrHulpmiddelAard(array('min' => 12)); // WHERE thesnr_hulpmiddel_aard >= 12
     * $query->filterByThesnrHulpmiddelAard(array('max' => 12)); // WHERE thesnr_hulpmiddel_aard <= 12
     * </code>
     *
     * @see       filterByHulpmiddelAardOmschrijving()
     *
     * @param     mixed $thesnrHulpmiddelAard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByThesnrHulpmiddelAard($thesnrHulpmiddelAard = null, $comparison = null)
    {
        if (is_array($thesnrHulpmiddelAard)) {
            $useMinMax = false;
            if (isset($thesnrHulpmiddelAard['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, $thesnrHulpmiddelAard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrHulpmiddelAard['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, $thesnrHulpmiddelAard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, $thesnrHulpmiddelAard, $comparison);
    }

    /**
     * Filter the query on the hulpmiddel_aard column
     *
     * Example usage:
     * <code>
     * $query->filterByHulpmiddelAard(1234); // WHERE hulpmiddel_aard = 1234
     * $query->filterByHulpmiddelAard(array(12, 34)); // WHERE hulpmiddel_aard IN (12, 34)
     * $query->filterByHulpmiddelAard(array('min' => 12)); // WHERE hulpmiddel_aard >= 12
     * $query->filterByHulpmiddelAard(array('max' => 12)); // WHERE hulpmiddel_aard <= 12
     * </code>
     *
     * @see       filterByHulpmiddelAardOmschrijving()
     *
     * @param     mixed $hulpmiddelAard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByHulpmiddelAard($hulpmiddelAard = null, $comparison = null)
    {
        if (is_array($hulpmiddelAard)) {
            $useMinMax = false;
            if (isset($hulpmiddelAard['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::HULPMIDDEL_AARD, $hulpmiddelAard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hulpmiddelAard['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::HULPMIDDEL_AARD, $hulpmiddelAard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::HULPMIDDEL_AARD, $hulpmiddelAard, $comparison);
    }

    /**
     * Filter the query on the hulpmiddel_aard_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByHulpmiddelAardHoeveelheid(1234); // WHERE hulpmiddel_aard_hoeveelheid = 1234
     * $query->filterByHulpmiddelAardHoeveelheid(array(12, 34)); // WHERE hulpmiddel_aard_hoeveelheid IN (12, 34)
     * $query->filterByHulpmiddelAardHoeveelheid(array('min' => 12)); // WHERE hulpmiddel_aard_hoeveelheid >= 12
     * $query->filterByHulpmiddelAardHoeveelheid(array('max' => 12)); // WHERE hulpmiddel_aard_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $hulpmiddelAardHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByHulpmiddelAardHoeveelheid($hulpmiddelAardHoeveelheid = null, $comparison = null)
    {
        if (is_array($hulpmiddelAardHoeveelheid)) {
            $useMinMax = false;
            if (isset($hulpmiddelAardHoeveelheid['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::HULPMIDDEL_AARD_HOEVEELHEID, $hulpmiddelAardHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hulpmiddelAardHoeveelheid['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::HULPMIDDEL_AARD_HOEVEELHEID, $hulpmiddelAardHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::HULPMIDDEL_AARD_HOEVEELHEID, $hulpmiddelAardHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the meervoudig_product_jn column
     *
     * Example usage:
     * <code>
     * $query->filterByMeervoudigProductJn('fooValue');   // WHERE meervoudig_product_jn = 'fooValue'
     * $query->filterByMeervoudigProductJn('%fooValue%'); // WHERE meervoudig_product_jn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $meervoudigProductJn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByMeervoudigProductJn($meervoudigProductJn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($meervoudigProductJn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $meervoudigProductJn)) {
                $meervoudigProductJn = str_replace('*', '%', $meervoudigProductJn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::MEERVOUDIG_PRODUCT_JN, $meervoudigProductJn, $comparison);
    }

    /**
     * Filter the query on the thesnr_reden_hulpstof_identificerend column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrRedenHulpstofIdentificerend(1234); // WHERE thesnr_reden_hulpstof_identificerend = 1234
     * $query->filterByThesnrRedenHulpstofIdentificerend(array(12, 34)); // WHERE thesnr_reden_hulpstof_identificerend IN (12, 34)
     * $query->filterByThesnrRedenHulpstofIdentificerend(array('min' => 12)); // WHERE thesnr_reden_hulpstof_identificerend >= 12
     * $query->filterByThesnrRedenHulpstofIdentificerend(array('max' => 12)); // WHERE thesnr_reden_hulpstof_identificerend <= 12
     * </code>
     *
     * @see       filterByRedenHulpstofIdentificerendOmschrijving()
     *
     * @param     mixed $thesnrRedenHulpstofIdentificerend The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByThesnrRedenHulpstofIdentificerend($thesnrRedenHulpstofIdentificerend = null, $comparison = null)
    {
        if (is_array($thesnrRedenHulpstofIdentificerend)) {
            $useMinMax = false;
            if (isset($thesnrRedenHulpstofIdentificerend['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, $thesnrRedenHulpstofIdentificerend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrRedenHulpstofIdentificerend['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, $thesnrRedenHulpstofIdentificerend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, $thesnrRedenHulpstofIdentificerend, $comparison);
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
     * @see       filterByRedenHulpstofIdentificerendOmschrijving()
     *
     * @param     mixed $redenHulpstofIdentificerend The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByRedenHulpstofIdentificerend($redenHulpstofIdentificerend = null, $comparison = null)
    {
        if (is_array($redenHulpstofIdentificerend)) {
            $useMinMax = false;
            if (isset($redenHulpstofIdentificerend['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, $redenHulpstofIdentificerend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($redenHulpstofIdentificerend['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, $redenHulpstofIdentificerend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, $redenHulpstofIdentificerend, $comparison);
    }

    /**
     * Filter the query on the thesnr_verwijzing_extra_kenmerk column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrVerwijzingExtraKenmerk(1234); // WHERE thesnr_verwijzing_extra_kenmerk = 1234
     * $query->filterByThesnrVerwijzingExtraKenmerk(array(12, 34)); // WHERE thesnr_verwijzing_extra_kenmerk IN (12, 34)
     * $query->filterByThesnrVerwijzingExtraKenmerk(array('min' => 12)); // WHERE thesnr_verwijzing_extra_kenmerk >= 12
     * $query->filterByThesnrVerwijzingExtraKenmerk(array('max' => 12)); // WHERE thesnr_verwijzing_extra_kenmerk <= 12
     * </code>
     *
     * @see       filterByVerwijzingExtraKenmerkOmschrijving()
     *
     * @param     mixed $thesnrVerwijzingExtraKenmerk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByThesnrVerwijzingExtraKenmerk($thesnrVerwijzingExtraKenmerk = null, $comparison = null)
    {
        if (is_array($thesnrVerwijzingExtraKenmerk)) {
            $useMinMax = false;
            if (isset($thesnrVerwijzingExtraKenmerk['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, $thesnrVerwijzingExtraKenmerk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrVerwijzingExtraKenmerk['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, $thesnrVerwijzingExtraKenmerk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, $thesnrVerwijzingExtraKenmerk, $comparison);
    }

    /**
     * Filter the query on the verwijzing_extra_kenmerk column
     *
     * Example usage:
     * <code>
     * $query->filterByVerwijzingExtraKenmerk(1234); // WHERE verwijzing_extra_kenmerk = 1234
     * $query->filterByVerwijzingExtraKenmerk(array(12, 34)); // WHERE verwijzing_extra_kenmerk IN (12, 34)
     * $query->filterByVerwijzingExtraKenmerk(array('min' => 12)); // WHERE verwijzing_extra_kenmerk >= 12
     * $query->filterByVerwijzingExtraKenmerk(array('max' => 12)); // WHERE verwijzing_extra_kenmerk <= 12
     * </code>
     *
     * @see       filterByVerwijzingExtraKenmerkOmschrijving()
     *
     * @param     mixed $verwijzingExtraKenmerk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function filterByVerwijzingExtraKenmerk($verwijzingExtraKenmerk = null, $comparison = null)
    {
        if (is_array($verwijzingExtraKenmerk)) {
            $useMinMax = false;
            if (isset($verwijzingExtraKenmerk['min'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, $verwijzingExtraKenmerk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verwijzingExtraKenmerk['max'])) {
                $this->addUsingAlias(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, $verwijzingExtraKenmerk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, $verwijzingExtraKenmerk, $comparison);
    }

    /**
     * Filter the query by a related GsGeneriekeProducten object
     *
     * @param   GsGeneriekeProducten|PropelObjectCollection $gsGeneriekeProducten The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPrescriptieProductQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsGeneriekeProducten($gsGeneriekeProducten, $comparison = null)
    {
        if ($gsGeneriekeProducten instanceof GsGeneriekeProducten) {
            return $this
                ->addUsingAlias(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, $gsGeneriekeProducten->getGeneriekeproductcode(), $comparison);
        } elseif ($gsGeneriekeProducten instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, $gsGeneriekeProducten->toKeyValue('PrimaryKey', 'Generiekeproductcode'), $comparison);
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
     * @return GsPrescriptieProductQuery The current query, for fluid interface
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
     * Filter the query by a related GsNamen object
     *
     * @param   GsNamen|PropelObjectCollection $gsNamen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPrescriptieProductQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsNamen($gsNamen, $comparison = null)
    {
        if ($gsNamen instanceof GsNamen) {
            return $this
                ->addUsingAlias(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, $gsNamen->getNaamnummer(), $comparison);
        } elseif ($gsNamen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, $gsNamen->toKeyValue('PrimaryKey', 'Naamnummer'), $comparison);
        } else {
            throw new PropelException('filterByGsNamen() only accepts arguments of type GsNamen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsNamen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function joinGsNamen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsNamen');

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
            $this->addJoinObject($join, 'GsNamen');
        }

        return $this;
    }

    /**
     * Use the GsNamen relation GsNamen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery A secondary query class using the current class as primary query
     */
    public function useGsNamenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsNamen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsNamen', '\PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPrescriptieProductQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRedenVoorschrijvenHpkNiveauOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByRedenVoorschrijvenHpkNiveauOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RedenVoorschrijvenHpkNiveauOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function joinRedenVoorschrijvenHpkNiveauOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RedenVoorschrijvenHpkNiveauOmschrijving');

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
            $this->addJoinObject($join, 'RedenVoorschrijvenHpkNiveauOmschrijving');
        }

        return $this;
    }

    /**
     * Use the RedenVoorschrijvenHpkNiveauOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useRedenVoorschrijvenHpkNiveauOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRedenVoorschrijvenHpkNiveauOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RedenVoorschrijvenHpkNiveauOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPrescriptieProductQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmballagetypeOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsPrescriptieProductPeer::EMBALLAGETYPE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByEmballagetypeOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmballagetypeOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function joinEmballagetypeOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmballagetypeOmschrijving');

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
            $this->addJoinObject($join, 'EmballagetypeOmschrijving');
        }

        return $this;
    }

    /**
     * Use the EmballagetypeOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useEmballagetypeOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEmballagetypeOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmballagetypeOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPrescriptieProductQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBasiseenheidProductOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByBasiseenheidProductOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BasiseenheidProductOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function joinBasiseenheidProductOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BasiseenheidProductOmschrijving');

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
            $this->addJoinObject($join, 'BasiseenheidProductOmschrijving');
        }

        return $this;
    }

    /**
     * Use the BasiseenheidProductOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useBasiseenheidProductOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBasiseenheidProductOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BasiseenheidProductOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPrescriptieProductQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByHulpmiddelAardOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsPrescriptieProductPeer::HULPMIDDEL_AARD, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByHulpmiddelAardOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the HulpmiddelAardOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function joinHulpmiddelAardOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('HulpmiddelAardOmschrijving');

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
            $this->addJoinObject($join, 'HulpmiddelAardOmschrijving');
        }

        return $this;
    }

    /**
     * Use the HulpmiddelAardOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useHulpmiddelAardOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinHulpmiddelAardOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'HulpmiddelAardOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPrescriptieProductQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRedenHulpstofIdentificerendOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByRedenHulpstofIdentificerendOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RedenHulpstofIdentificerendOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function joinRedenHulpstofIdentificerendOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RedenHulpstofIdentificerendOmschrijving');

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
            $this->addJoinObject($join, 'RedenHulpstofIdentificerendOmschrijving');
        }

        return $this;
    }

    /**
     * Use the RedenHulpstofIdentificerendOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useRedenHulpstofIdentificerendOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRedenHulpstofIdentificerendOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RedenHulpstofIdentificerendOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPrescriptieProductQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVerwijzingExtraKenmerkOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByVerwijzingExtraKenmerkOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VerwijzingExtraKenmerkOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function joinVerwijzingExtraKenmerkOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('VerwijzingExtraKenmerkOmschrijving');

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
            $this->addJoinObject($join, 'VerwijzingExtraKenmerkOmschrijving');
        }

        return $this;
    }

    /**
     * Use the VerwijzingExtraKenmerkOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useVerwijzingExtraKenmerkOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVerwijzingExtraKenmerkOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'VerwijzingExtraKenmerkOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsArtikelEigenschappen object
     *
     * @param   GsArtikelEigenschappen|PropelObjectCollection $gsArtikelEigenschappen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPrescriptieProductQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelEigenschappen($gsArtikelEigenschappen, $comparison = null)
    {
        if ($gsArtikelEigenschappen instanceof GsArtikelEigenschappen) {
            return $this
                ->addUsingAlias(GsPrescriptieProductPeer::PRKCODE, $gsArtikelEigenschappen->getPrk(), $comparison);
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
     * @return GsPrescriptieProductQuery The current query, for fluid interface
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
     * @return                 GsPrescriptieProductQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsBijzondereKenmerken($gsBijzondereKenmerken, $comparison = null)
    {
        if ($gsBijzondereKenmerken instanceof GsBijzondereKenmerken) {
            return $this
                ->addUsingAlias(GsPrescriptieProductPeer::PRKCODE, $gsBijzondereKenmerken->getPrkcode(), $comparison);
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
     * @return GsPrescriptieProductQuery The current query, for fluid interface
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
     * @return                 GsPrescriptieProductQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproducten($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsPrescriptieProductPeer::PRKCODE, $gsHandelsproducten->getPrkcode(), $comparison);
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
     * @return GsPrescriptieProductQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   GsPrescriptieProduct $gsPrescriptieProduct Object to remove from the list of results
     *
     * @return GsPrescriptieProductQuery The current query, for fluid interface
     */
    public function prune($gsPrescriptieProduct = null)
    {
        if ($gsPrescriptieProduct) {
            $this->addUsingAlias(GsPrescriptieProductPeer::PRKCODE, $gsPrescriptieProduct->getPrkcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
