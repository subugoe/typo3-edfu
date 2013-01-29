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
		'Ort' => 'list, show',
		'Photo' => '',
		'WbBerlin' => '',
		'Literatur' => '',
		'Stelle' => '',
		
	),
	// non-cacheable actions
	array(
		'Wort' => '',
		'Gott' => '',
		'Formular' => '',
		'Ort' => '',
		'Photo' => '',
		'WbBerlin' => '',
		'Literatur' => '',
		'Stelle' => '',
		
	)
);

$TYPO3_CONF_VARS['BE']['AJAX']['edfu::formularTextTyp'] = t3lib_extMgm::extPath('edfu') . 'Classes/Ajax/Formular.php:Tx_Edfu_Ajax_Formular->getTextTypSuggestions';
$TYPO3_CONF_VARS['BE']['AJAX']['edfu::formularLiteratur'] = t3lib_extMgm::extPath('edfu') . 'Classes/Ajax/Formular.php:Tx_Edfu_Ajax_Formular->getLiteraturSuggestions';

?>