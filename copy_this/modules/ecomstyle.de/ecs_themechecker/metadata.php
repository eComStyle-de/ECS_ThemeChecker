<?php
/**
 * @link      http://www.ecomstyle.de
 * @package   main
 * @copyright (C) ecomstyle.de 2013
 * @version 1.0
 */

	$aModule = array(
		'id'          => 'ecs-themechecker',
        'title'        => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>ThemeChecker</i>',
		'description' => 'Ermittelt das aktive Theme.<br>Kann ab Shopversion 4.7.5 deaktiviert oder entfernt werden.',
   
		'thumbnail'   => 'ecomstyle.png',
		'version'     => '1.0',
		'author'      => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
		'email'       => 'info@ecomstyle.de',
		'url'         => 'http://ecomstyle.de',
		'extend'      => array(
			'oxviewconfig' => 'ecomstyle.de/ecs_themechecker/extend/oxviewconfig_getactivetheme',
		),
   'templates' => array(
    ),
    'files' => array(
    ),
    'blocks' => array(
     ),
    'settings' => array(  
    ),
);
?>
