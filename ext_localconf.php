<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Ipf.' . $_EXTKEY,
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

$TYPO3_CONF_VARS['BE']['AJAX']['edfu::formularTextTyp'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('edfu') . 'Classes/Ajax/Formular.php:Tx_Edfu_Ajax_Formular->getTextTypSuggestions';
$TYPO3_CONF_VARS['BE']['AJAX']['edfu::formularLiteratur'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('edfu') . 'Classes/Ajax/Formular.php:Tx_Edfu_Ajax_Formular->getLiteraturSuggestions';
$TYPO3_CONF_VARS['BE']['AJAX']['edfu::formularPhoto'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('edfu') . 'Classes/Ajax/Formular.php:Tx_Edfu_Ajax_Formular->getPhotoSuggestions';
$TYPO3_CONF_VARS['BE']['AJAX']['edfu::checkStelle'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('edfu') . 'Classes/Ajax/Formular.php:Ipf\\Edfu\\Ajax\\Formular->checkStelle';

?>