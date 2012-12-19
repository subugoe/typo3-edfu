<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_edfu_domain_model_stelle'] = array(
	'ctrl' => $TCA['tx_edfu_domain_model_stelle']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, band_uid, seite_start, seite_stop, zeile_start, zeile_stop, anmerkung, stop_unsicher, zerstoerung, ort',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1,band_uid, seite_start, seite_stop, zeile_start, zeile_stop, anmerkung, stop_unsicher, zerstoerung, ort, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_edfu_domain_model_stelle',
				'foreign_table_where' => 'AND tx_edfu_domain_model_stelle.pid=###CURRENT_PID### AND tx_edfu_domain_model_stelle.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'band_uid' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_stelle.band_uid',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_edfu_domain_model_band',
				//'foreign_table_where' => 'AND tx_edfu_domain_model_stelle.pid=###CURRENT_PID### AND tx_edfu_domain_model_stelle.sys_language_uid IN (-1,0)',
			),
		),
		'seite_start' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_stelle.seite_start',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'seite_stop' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_stelle.seite_stop',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zeile_start' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_stelle.zeile_start',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zeile_stop' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_stelle.zeile_stop',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_stelle.anmerkung',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 6,
				'eval' => 'trim'
			),
		),
		'stop_unsicher' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_stelle.stop_unsicher',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zerstoerung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_stelle.zerstoerung',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'ort' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_stelle.ort',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_edfu_domain_model_ort',
				'foreign_field' => 'ortsbeschreibung',
				'foreign_table_where' => ' AND sys_language_uid = 0 ORDER BY tx_edfu_domain_model_ort.ortsbeschreibung ASC',
				'MM' => 'tx_edfu_ort_stelle_mm',
				'maxitems' => 9999,
				'size'=> 10,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'both',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
	),
);

?>