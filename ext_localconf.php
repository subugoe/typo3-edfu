<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Edfu',
	array(
		'Wort' => 'list, show',
		'Gott' => 'list, show',
		'Formular' => 'list, show',
		'Place' => 'list, show',
		'Photo' => '',
		'Berlin' => '',
		'Literatur' => '',
		'Position' => '',
		
	),
	// non-cacheable actions
	array(
		'Wort' => '',
		'Gott' => '',
		'Formular' => '',
		'Place' => '',
		'Photo' => '',
		'Berlin' => '',
		'Literatur' => '',
		'Position' => '',
		
	)
);

?>