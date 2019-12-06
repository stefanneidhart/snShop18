<?php

/**
 * @TODO LICENCE HERE
 */
/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id' => 'snShop18',
    'title' => array(
	'de' => 'Ab 18 Abfrage',
	'en' => 'Ab 18 Abfrage',
    ),
    'description' => array(
	'de' => '<h2>Ab 18 Abfrage</h2>',
	'en' => '<h2>Ab 18 Abfrage</h2>',
    ),
    'thumbnail' => '',
    'version' => '1.0.0',
    'author' => 'Stefan Neidhart',
    'url' => 'https://www.stefanneidhart.de',
    'email' => 'info@stefanneidhart.de',
    'extend' => array(
	//	\OxidEsales\Eshop\Core\ViewConfig::class => \sn\snShop18\Core\ViewConfig::class,
	\OxidEsales\Eshop\Core\ViewConfig::class => \sn\snShop18\Core\ViewConfig::class,
    ),
    'controllers' => array(
    //'Ab18Controller' => \sn\snShop18\Controller\Admin\Ab18Controller::class,
    ),
    'files' => array(),
    'templates' => array(
    ),
    'blocks' => array(
	array(
	    'template' => 'layout/footer.tpl',
	    'block' => 'ab18block',
	    'file' => 'views/blocks/ab18Message.tpl'),
    )
);
