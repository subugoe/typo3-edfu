<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_edfu_domain_model_ort'] = array(
	'ctrl' => $TCA['tx_edfu_domain_model_ort']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden, transliteration,uebersetzung, ortsbeschreibung, anmerkung, stelle',
	),
	'types' => array(
		'1' => array('showitem' => 'hidden;;1, transliteration, uebersetzung, ortsbeschreibung, anmerkung, position, stelle, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_edfu_domain_model_ort',
				'foreign_table_where' => 'AND tx_edfu_domain_model_ort.pid=###CURRENT_PID### AND tx_edfu_domain_model_ort.sys_language_uid IN (-1,0)',
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
		'transliteration' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_ort.transliteration',
			'config' => array(
				'type' => 'input',
				'size' => 40,
				'eval' => 'trim'
			),
		),
		'uebersetzung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_ort.translation',
			'config' => array(
				'type' => 'input',
				'size' => 40,
				'eval' => 'trim'
			),
		),
		'ortsbeschreibung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_ort.ortsbeschreibung',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 6,
				'eval' => 'trim'
			),
		),
		'anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_ort.anmerkung',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 6,
				'eval' => 'trim'
			),
		),
		'stelle' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:edfu/Resources/Private/Language/locallang_db.xlf:tx_edfu_domain_model_ort.stelle',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_edfu_domain_model_stelle',
				'foreign_field' => 'seite_start',
				'foreign_table_where' => ' AND sys_language_uid = 0 ORDER BY tx_edfu_domain_model_stelle.seite_start ASC',
				'MM' => 'tx_edfu_ort_stelle_mm',
				'maxitems' => 9999,
				'size' => 10,
				'wizards' => array(
					'suggest' => array(
						'type' => 'suggest',
						'maxItemsInResultList' => 25,
					),
				),
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