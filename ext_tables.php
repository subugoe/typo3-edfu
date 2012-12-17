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
			'Word' => 'list, show, new, create',
			'Place' => 'list, show, new, create',
			'Photo' => '',
			'Berlin' => '',
			'Literature' => '',
			'Position' => '',
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_edfu.xlf',
		)
	);

}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Edfu');

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_word', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_word.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_word');
$TCA['tx_edfu_domain_model_word'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_word',
		'label' => 'transliteration',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Word.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_word.gif'
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

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_place', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_place.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_place');
$TCA['tx_edfu_domain_model_place'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_place',
		'label' => 'translation',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
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
		'searchFields' => 'translation,description,position,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Place.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_place.gif'
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

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_berlin', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_berlin.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_berlin');
$TCA['tx_edfu_domain_model_berlin'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_berlin',
		'label' => 'volume',
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
		'searchFields' => 'volume,page_start,end_page,start_number,end_number,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Berlin.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_berlin.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_literature', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_literature.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_literature');
$TCA['tx_edfu_domain_model_literature'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_literature',
		'label' => 'description',
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
		'searchFields' => 'description,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Literature.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_literature.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_edfu_domain_model_position', 'EXT:edfu/Resources/Private/Language/locallang_csh_tx_edfu_domain_model_position.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_edfu_domain_model_position');
$TCA['tx_edfu_domain_model_position'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_position',
		'label' => 'page_start',
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
		'searchFields' => 'page_start,end_page,line_start,line_end,note,stop_doubtful,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Position.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_edfu_domain_model_position.gif'
	),
);

?>