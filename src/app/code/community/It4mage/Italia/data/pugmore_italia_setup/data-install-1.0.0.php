<?php

/**
 * The MIT License
 * 
 * Copyright (c) 2012 PUG Modena e Reggio Emilia
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
$data = array(
    'AG' => 'Agrigento',
    'AL' => 'Alessandria',
    'AN' => 'Ancona',
    'AO' => 'Aosta',
    'AR' => 'Arezzo',
    'AP' => 'Ascoli Piceno',
    'AT' => 'Asti',
    'AV' => 'Avellino',
    'BA' => 'Bari',
    'BT' => 'Barletta-Andria-Trani',
    'BL' => 'Belluno',
    'BN' => 'Benevento',
    'BG' => 'Bergamo',
    'BI' => 'Biella',
    'BO' => 'Bologna',
    'BZ' => 'Bolzano',
    'BS' => 'Brescia',
    'BR' => 'Brindisi',
    'CA' => 'Cagliari',
    'CL' => 'Caltanissetta',
    'CB' => 'Campobasso',
    'CI' => 'Carbonia-Iglesias',
    'CE' => 'Caserta',
    'CT' => 'Catania',
    'CZ' => 'Catanzaro',
    'CH' => 'Chieti',
    'CO' => 'Como',
    'CS' => 'Cosenza',
    'CR' => 'Cremona',
    'KR' => 'Crotone',
    'CN' => 'Cuneo',
    'EN' => 'Enna',
    'FM' => 'Fermo',
    'FE' => 'Ferrara',
    'FI' => 'Firenze',
    'FG' => 'Foggia',
    'FC' => 'Forlì-Cesena',
    'FR' => 'Frosinone',
    'GE' => 'Genova',
    'GO' => 'Gorizia',
    'GR' => 'Grosseto',
    'IM' => 'Imperia',
    'IS' => 'Isernia',
    'SP' => 'La Spezia',
    'AQ' => 'L\'Aquila',
    'LT' => 'Latina',
    'LE' => 'Lecce',
    'LC' => 'Lecco',
    'LI' => 'Livorno',
    'LO' => 'Lodi',
    'LU' => 'Lucca',
    'MC' => 'Macerata',
    'MN' => 'Mantova',
    'MS' => 'Massa-Carrara',
    'MT' => 'Matera',
    'ME' => 'Messina',
    'MI' => 'Milano',
    'MO' => 'Modena',
    'MB' => 'Monza e della Brianza',
    'NA' => 'Napoli',
    'NO' => 'Novara',
    'NU' => 'Nuoro',
    'OT' => 'Olbia-Tempio',
    'OR' => 'Oristano',
    'PD' => 'Padova',
    'PA' => 'Palermo',
    'PR' => 'Parma',
    'PV' => 'Pavia',
    'PG' => 'Perugia',
    'PU' => 'Pesaro e Urbino',
    'PE' => 'Pescara',
    'PC' => 'Piacenza',
    'PI' => 'Pisa',
    'PT' => 'Pistoia',
    'PN' => 'Pordenone',
    'PZ' => 'Potenza',
    'PO' => 'Prato',
    'RG' => 'Ragusa',
    'RA' => 'Ravenna',
    'RC' => 'Reggio Calabria',
    'RE' => 'Reggio Emilia',
    'RI' => 'Rieti',
    'RN' => 'Rimini',
    'RM' => 'Roma',
    'RO' => 'Rovigo',
    'SA' => 'Salerno',
    'VS' => 'Medio Campidano',
    'SS' => 'Sassari',
    'SV' => 'Savona',
    'SI' => 'Siena',
    'SR' => 'Siracusa',
    'SO' => 'Sondrio',
    'TA' => 'Taranto',
    'TE' => 'Teramo',
    'TR' => 'Terni',
    'TO' => 'Torino',
    'OG' => 'Ogliastra',
    'TP' => 'Trapani',
    'TN' => 'Trento',
    'TV' => 'Treviso',
    'TS' => 'Trieste',
    'UD' => 'Udine',
    'VA' => 'Varese',
    'VE' => 'Venezia',
    'VB' => 'Verbano-Cusio-Ossola',
    'VC' => 'Vercelli',
    'VR' => 'Verona',
    'VV' => 'Vibo Valentia',
    'VI' => 'Vicenza',
    'VT' => 'Viterbo',
);

/* @var $this Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

$region = Mage::getModel('directory/region');
/* @var $region Mage_Directory_Model_Region */

$regionTable = $installer->getTable('directory/country_region');
$regionNameTable = $installer->getTable('directory/country_region_name');

foreach ($data as $code => $name) {
    $region->loadByCode($code, 'IT');
    if ($region->getId()) {
        continue;
    }

    $bind = array(
        'country_id' => 'IT',
        'code' => $code,
        'default_name' => $name,
    );

    $installer->getConnection()->insert($regionTable, $bind);
    $regionId = $installer->getConnection()->lastInsertId($regionTable);

    $bind = array(
        'locale' => 'en_US',
        'region_id' => $regionId,
        'name' => $name,
    );

    $installer->getConnection()->insert($regionNameTable, $bind);
}

$installer->endSetup();
