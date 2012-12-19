<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Edfu',
	'edfu'
);

if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,
		'web', // Make module a submodule of 'web'
		'edfu', // Submodule key
		'', // Position
		array(
			'Formular' => 'list, show, new, create',
			'Gott' => 'list, show ,new, create',
			'Wort' => 'list, show, new, create',
			'Ort' => 'list, show, new, create',
			'Photo' => '',
			'WbBerlin' => '',
			'Literatur' => '',
			'Stelle' => '',
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_edfu.xlf',
		)
	);

}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Edfu');

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_wort', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_wort.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_wort');
$TCA['tx_edfu_domain_model_wort'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_wort',
		'label' => 'transliteration',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'transliteration,translation,notes,hieroglyph,berlin,position,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Wort.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_wort.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_gott', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_gott.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_gott');
$TCA['tx_edfu_domain_model_gott'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_gott',
		'label' => 'transliteration',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'transliteration,place,eponym,relation,function,position,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Gott.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_gott.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_formular', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_form.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_formular');
$TCA['tx_edfu_domain_model_formular'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_formular',
		'label' => 'transliteration',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'transliteration,uebersetzung,texttyp,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Formular.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_formular.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_ort', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_ort.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_ort');
$TCA['tx_edfu_domain_model_ort'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_ort',
		'label' => 'transliteration',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'transliteration,ortsbeschreibung',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Ort.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_ort.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_photo', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_photo.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_photo');
$TCA['tx_edfu_domain_model_photo'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_photo',
		'label' => 'filename',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'filename,year,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Photo.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_photo.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_wb_berlin', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_wb_berlin.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_wb_berlin');
$TCA['tx_edfu_domain_model_wb_berlin'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_wb_berlin',
		'label' => 'band',
		'label_alt' => 'band, seite_start, seite_stop',
		'label_alt_force' => TRUE,
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'band',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/WbBerlin.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_wb_berlin.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_literatur', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_literature.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_literatur');
$TCA['tx_edfu_domain_model_literatur'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_literatur',
		'label' => 'beschreibung',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'beschreibung,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Literatur.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_literatur.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_stelle', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_stelle.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_stelle');
$TCA['tx_edfu_domain_model_stelle'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_stelle',
		'label' => 'seite_start',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'seite_start,seite_stop,zeile_start,zeile_stop,anmerkung,stop_unsicher,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Stelle.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_stelle.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_band', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_band.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_band');
$TCA['tx_edfu_domain_model_band'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_band',
		'label' => 'nummer',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Band.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_band.gif'
	),
);


?>