<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_ingegeven_samenstellingen' table.
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
class GsIngegevenSamenstellingenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsIngegevenSamenstellingenTableMap';

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
        $this->setName('gs_ingegeven_samenstellingen');
        $this->setPhpName('GsIngegevenSamenstellingen');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsIngegevenSamenstellingen');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignPrimaryKey('handelsproduktkode', 'Handelsproduktkode', 'INTEGER' , 'gs_handelsproducten', 'handelsproduktkode', true, null, null);
        $this->addPrimaryKey('volgnummer', 'Volgnummer', 'INTEGER', true, null, null);
        $this->addColumn('aanduiding_werkzaamhulpstof', 'AanduidingWerkzaamhulpstof', 'VARCHAR', false, 255, null);
        $this->addForeignKey('generiekenaamkode', 'Generiekenaamkode', 'INTEGER', 'gs_generieke_namen', 'generiekenaamkode', false, null, null);
        $this->addColumn('hoeveelheid_werkzame_stof', 'HoeveelheidWerkzameStof', 'DECIMAL', false, 12, null);
        $this->addForeignKey('eenh_hvh_werkzstof_thesaurus_1', 'EenhHvhWerkzstofThesaurus1', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('eenhhoeveelheid_werkzame_stof_kode', 'EenhhoeveelheidWerkzameStofKode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('stamnaamcode', 'Stamnaamcode', 'INTEGER', false, null, null);
        $this->addForeignKey('stamtoedieningsweg_thesaurus_58', 'StamtoedieningswegThesaurus58', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('stamtoedieningsweg_code', 'StamtoedieningswegCode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsHandelsproducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::MANY_TO_ONE, array('handelsproduktkode' => 'handelsproduktkode', ), null, null);
        $this->addRelation('GsGeneriekeNamen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeNamen', RelationMap::MANY_TO_ONE, array('generiekenaamkode' => 'generiekenaamkode', ), null, null);
        $this->addRelation('EenheidHoeveelheidOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('eenh_hvh_werkzstof_thesaurus_1' => 'thesaurusnummer', 'eenhhoeveelheid_werkzame_stof_kode' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('StamtoedieningswegOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('stamtoedieningsweg_thesaurus_58' => 'thesaurusnummer', 'stamtoedieningsweg_code' => 'thesaurus_itemnummer', ), null, null);
    } // buildRelations()

} // GsIngegevenSamenstellingenTableMap
