<?php

/**
 * palettes manipulation;
 * Add palettes Regular
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace(
    'type',
    'type,pageDescription',
    $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']
);

/**
 * palettes manipulation;
 * Add palettes forward
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['forward'] = str_replace(
    'type',
    'type,pageDescription',
    $GLOBALS['TL_DCA']['tl_page']['palettes']['forward']
);

/**
 * palettes manipulation;
 * Add palettes redirect
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['redirect'] = str_replace(
    'type',
    'type,pageDescription',
    $GLOBALS['TL_DCA']['tl_page']['palettes']['redirect']
);

/**
 * Page Title Suffix Checkbox
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['pageDescription'] = array(
    'label'             => &$GLOBALS['TL_LANG']['tl_page']['pageDescription'],
    'inputType'         => 'textarea',
    'default'           => "",
    'exclude'           => true,
    'search'            => true,
    'eval'              => array('tl_class'=>'clr m12'),
    'sql'               => "mediumtext NULL"
);
