<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Edfu',
	array(
		'Word' => 'list, show',
		'Gott' => 'list, show',
		'Formular' => 'list, show',
		'Place' => 'list, show',
		'Photo' => '',
		'Berlin' => '',
		'Literature' => '',
		'Position' => '',
		
	),
	// non-cacheable actions
	array(
		'Word' => '',
		'Gott' => '',
		'Formular' => '',
		'Place' => '',
		'Photo' => '',
		'Berlin' => '',
		'Literature' => '',
		'Position' => '',
		
	)
);

?>