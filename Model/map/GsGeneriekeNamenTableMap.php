<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_generieke_namen' table.
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
class GsGeneriekeNamenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsGeneriekeNamenTableMap';

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
        $this->setName('gs_generieke_namen');
        $this->setPhpName('GsGeneriekeNamen');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeNamen');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('generiekenaamkode', 'Generiekenaamkode', 'INTEGER', true, null, null);
        $this->addColumn('generieke_naam', 'GeneriekeNaam', 'VARCHAR', false, 255, null);
        $this->addColumn('stamnaamcode', 'Stamnaamcode', 'INTEGER', false, null, null);
        $this->addColumn('volledige_generieke_naam_kode', 'VolledigeGeneriekeNaamKode', 'INTEGER', false, null, null);
        $this->addColumn('kode_stamnaam_toegestaan', 'KodeStamnaamToegestaan', 'VARCHAR', false, 255, null);
        $this->addColumn('kode_werkzaam_bestanddeelhulpstof', 'KodeWerkzaamBestanddeelhulpstof', 'VARCHAR', false, 255, null);
        $this->addColumn('informatorium_stof_kode', 'InformatoriumStofKode', 'INTEGER', false, null, null);
        $this->addColumn('cas_nummer', 'CasNummer', 'INTEGER', false, null, null);
        $this->addColumn('bruto_formule', 'BrutoFormule', 'VARCHAR', false, 255, null);
        $this->addColumn('molekuulgewicht', 'Molekuulgewicht', 'DECIMAL', false, 12, null);
        $this->addColumn('molekuulgewicht_indicator', 'MolekuulgewichtIndicator', 'VARCHAR', false, 255, null);
        $this->addColumn('molekuulgewicht_voor_samenstelling', 'MolekuulgewichtVoorSamenstelling', 'DECIMAL', false, 12, null);
        $this->addColumn('soortelijk_gewicht', 'SoortelijkGewicht', 'DECIMAL', false, 7, null);
        $this->addColumn('voorkeurseenheid', 'Voorkeurseenheid', 'VARCHAR', false, 255, null);
        $this->addColumn('kode_rijvaardigheid', 'KodeRijvaardigheid', 'VARCHAR', false, 255, null);
        $this->addColumn('kode_vergift', 'KodeVergift', 'VARCHAR', false, 255, null);
        $this->addColumn('kode_opiumwet', 'KodeOpiumwet', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsIngegevenSamenstellingen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsIngegevenSamenstellingen', RelationMap::ONE_TO_MANY, array('generiekenaamkode' => 'generiekenaamkode', ), null, null, 'GsIngegevenSamenstellingens');
    } // buildRelations()

} // GsGeneriekeNamenTableMap
