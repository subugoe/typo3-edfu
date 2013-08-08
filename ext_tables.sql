#
# Table structure for table 'tx_edfu_domain_model_wort'
#
CREATE TABLE `tx_edfu_domain_model_wort` (
		`uid` int(11) NOT NULL auto_increment,
		`pid` int(11) DEFAULT '0' NOT NULL,
		`transliteration` text NOT NULL,
		`weiteres` text,
		`uebersetzung` text,
		`anmerkung` text,
		`hieroglyph` varchar(255) DEFAULT NULL,
		`wb_berlin_uid` int(11) DEFAULT NULL,
		`tstamp` int(11) unsigned NOT NULL DEFAULT '0',
		`crdate` int(11) unsigned NOT NULL DEFAULT '0',
		`cruser_id` int(11) unsigned NOT NULL DEFAULT '0',
		`deleted` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`hidden` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`starttime` int(11) unsigned NOT NULL DEFAULT '0',
		`endtime` int(11) unsigned NOT NULL DEFAULT '0',
		`t3ver_oid` int(11) NOT NULL DEFAULT '0',
		`t3ver_id` int(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` int(11) NOT NULL DEFAULT '0',
		`t3ver_label` varchar(255) NOT NULL DEFAULT '',
		`t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
		`t3ver_stage` int(11) NOT NULL DEFAULT '0',
		`t3ver_count` int(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` int(11) NOT NULL DEFAULT '0',
		`t3_origuid` int(11) NOT NULL DEFAULT '0',
		`sys_language_uid` int(11) NOT NULL DEFAULT '0',
		`l10n_parent` int(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` mediumblob,
		PRIMARY KEY (`uid`),
		KEY `fk_wort_berlin1_idx` (`wb_berlin_uid`)
);

#
# Table structure for table 'tx_edfu_domain_model_gott'
#
CREATE TABLE `tx_edfu_domain_model_gott` (
		`uid` int(11) NOT NULL auto_increment,
		`pid` int(11) DEFAULT '0' NOT NULL,
		`transliteration` text NOT NULL,
		`ort` text,
		`eponym` text,
		`beziehung` text,
		`funktion` text,
		`tstamp` int(11) unsigned NOT NULL DEFAULT '0',
		`crdate` int(11) unsigned NOT NULL DEFAULT '0',
		`cruser_id` int(11) unsigned NOT NULL DEFAULT '0',
		`deleted` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`hidden` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`starttime` int(11) unsigned NOT NULL DEFAULT '0',
		`endtime` int(11) unsigned NOT NULL DEFAULT '0',
		`t3ver_oid` int(11) NOT NULL DEFAULT '0',
		`t3ver_id` int(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` int(11) NOT NULL DEFAULT '0',
		`t3ver_label` varchar(255) NOT NULL DEFAULT '',
		`t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
		`t3ver_stage` int(11) NOT NULL DEFAULT '0',
		`t3ver_count` int(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` int(11) NOT NULL DEFAULT '0',
		`t3_origuid` int(11) NOT NULL DEFAULT '0',
		`sys_language_uid` int(11) NOT NULL DEFAULT '0',
		`l10n_parent` int(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` mediumblob,
		PRIMARY KEY (`uid`)
);


CREATE TABLE `tx_edfu_domain_model_formular` (
		`uid` int(11) NOT NULL auto_increment,
		`pid` int(11) DEFAULT '0' NOT NULL,
		`stelle_uid` int(11) NOT NULL,
		`transliteration` text NOT NULL,
		`uebersetzung` text,
		`texttyp` text,
		`tstamp` int(11) unsigned NOT NULL DEFAULT '0',
		`crdate` int(11) unsigned NOT NULL DEFAULT '0',
		`cruser_id` int(11) unsigned NOT NULL DEFAULT '0',
		`deleted` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`hidden` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`starttime` int(11) unsigned NOT NULL DEFAULT '0',
		`endtime` int(11) unsigned NOT NULL DEFAULT '0',
		`t3ver_oid` int(11) NOT NULL DEFAULT '0',
		`t3ver_id` int(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` int(11) NOT NULL DEFAULT '0',
		`t3ver_label` varchar(255) NOT NULL DEFAULT '',
		`t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
		`t3ver_stage` int(11) NOT NULL DEFAULT '0',
		`t3ver_count` int(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` int(11) NOT NULL DEFAULT '0',
		`t3_origuid` int(11) NOT NULL DEFAULT '0',
		`sys_language_uid` int(11) NOT NULL DEFAULT '0',
		`l10n_parent` int(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` mediumblob,
		PRIMARY KEY (`uid`),
		KEY `fk_FL_belegstelle1_idx` (`stelle_uid`)
);


#
# Table structure for table 'tx_edfu_domain_model_ort'
#
CREATE TABLE tx_edfu_domain_model_ort (

		uid int(11) NOT NULL auto_increment,
		pid int(11) DEFAULT '0' NOT NULL,

		`transliteration` text NOT NULL,
		`uebersetzung` text,
		`ortsbeschreibung` text,
		`anmerkung` text,
		`description` text NOT NULL,
		`stelle` int(11) unsigned DEFAULT '0' NOT NULL,

		tstamp int(11) unsigned DEFAULT '0' NOT NULL,
		crdate int(11) unsigned DEFAULT '0' NOT NULL,
		cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
		deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
		hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
		starttime int(11) unsigned DEFAULT '0' NOT NULL,
		endtime int(11) unsigned DEFAULT '0' NOT NULL,

		t3ver_oid int(11) DEFAULT '0' NOT NULL,
		t3ver_id int(11) DEFAULT '0' NOT NULL,
		t3ver_wsid int(11) DEFAULT '0' NOT NULL,
		t3ver_label varchar(255) DEFAULT '' NOT NULL,
		t3ver_state tinyint(4) DEFAULT '0'  NOT NULL,
		t3ver_stage int(11) DEFAULT '0' NOT NULL,
		t3ver_count int(11) DEFAULT '0' NOT NULL,
		t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
		t3ver_move_id int(11) DEFAULT '0' NOT NULL,

		sorting int(11) DEFAULT '0' NOT NULL,
		t3_origuid int(11) DEFAULT '0' NOT NULL,
		sys_language_uid int(11) DEFAULT '0' NOT NULL,
		l10n_parent int(11) DEFAULT '0' NOT NULL,
		l10n_diffsource mediumblob,

		PRIMARY KEY (uid),
		KEY parent (pid),
		KEY t3ver_oid (t3ver_oid, t3ver_wsid),
		KEY language (l10n_parent, sys_language_uid)

);

#
# Table structure for table 'tx_edfu_domain_model_photo'
#
CREATE TABLE tx_edfu_domain_model_photo (

		uid int(11) NOT NULL auto_increment,
		pid int(11) DEFAULT '0' NOT NULL,

		filename varchar(255) DEFAULT '' NOT NULL,
		year int(11) DEFAULT '0' NOT NULL,

		tstamp int(11) unsigned DEFAULT '0' NOT NULL,
		crdate int(11) unsigned DEFAULT '0' NOT NULL,
		cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
		deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
		hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
		starttime int(11) unsigned DEFAULT '0' NOT NULL,
		endtime int(11) unsigned DEFAULT '0' NOT NULL,

		t3ver_oid int(11) DEFAULT '0' NOT NULL,
		t3ver_id int(11) DEFAULT '0' NOT NULL,
		t3ver_wsid int(11) DEFAULT '0' NOT NULL,
		t3ver_label varchar(255) DEFAULT '' NOT NULL,
		t3ver_state tinyint(4) DEFAULT '0'  NOT NULL,
		t3ver_stage int(11) DEFAULT '0' NOT NULL,
		t3ver_count int(11) DEFAULT '0' NOT NULL,
		t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
		t3ver_move_id int(11) DEFAULT '0' NOT NULL,

		t3_origuid int(11) DEFAULT '0' NOT NULL,
		sys_language_uid int(11) DEFAULT '0' NOT NULL,
		l10n_parent int(11) DEFAULT '0' NOT NULL,
		l10n_diffsource mediumblob,

		PRIMARY KEY (uid),
		KEY parent (pid),
		KEY t3ver_oid (t3ver_oid, t3ver_wsid),
		KEY language (l10n_parent, sys_language_uid)

);

#
# Table structure for table 'tx_edfu_domain_model_wb_berlin'
#
CREATE TABLE `tx_edfu_domain_model_wb_berlin` (
		`uid` int(11) NOT NULL auto_increment,
		`pid` int(11) DEFAULT '0' NOT NULL,
		`band` int(11) DEFAULT NULL,
		`seite_start` int(11) DEFAULT NULL,
		`zeile_start` int(11) DEFAULT NULL,
		`seite_stop` int(11) DEFAULT NULL,
		`zeile_stop` int(11) DEFAULT NULL,
		`zweifel` tinyint(4) DEFAULT NULL,
		`tstamp` int(11) unsigned NOT NULL DEFAULT '0',
		`crdate` int(11) unsigned NOT NULL DEFAULT '0',
		`cruser_id` int(11) unsigned NOT NULL DEFAULT '0',
		`deleted` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`hidden` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`starttime` int(11) unsigned NOT NULL DEFAULT '0',
		`endtime` int(11) unsigned NOT NULL DEFAULT '0',
		`t3ver_oid` int(11) NOT NULL DEFAULT '0',
		`t3ver_id` int(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` int(11) NOT NULL DEFAULT '0',
		`t3ver_label` varchar(255) NOT NULL DEFAULT '',
		`t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
		`t3ver_stage` int(11) NOT NULL DEFAULT '0',
		`t3ver_count` int(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` int(11) NOT NULL DEFAULT '0',
		`t3_origuid` int(11) NOT NULL DEFAULT '0',
		`sys_language_uid` int(11) NOT NULL DEFAULT '0',
		`l10n_parent` int(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` mediumblob,
		PRIMARY KEY (`uid`)
);

#
# Table structure for table 'tx_edfu_domain_model_literatur'
#
CREATE TABLE `tx_edfu_domain_model_literatur` (
		`uid` int(11) NOT NULL auto_increment,
		`pid` int(11) DEFAULT '0' NOT NULL,
		`beschreibung` text,
		`tstamp` int(11) unsigned NOT NULL DEFAULT '0',
		`crdate` int(11) unsigned NOT NULL DEFAULT '0',
		`cruser_id` int(11) unsigned NOT NULL DEFAULT '0',
		`deleted` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`hidden` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`starttime` int(11) unsigned NOT NULL DEFAULT '0',
		`endtime` int(11) unsigned NOT NULL DEFAULT '0',
		`t3ver_oid` int(11) NOT NULL DEFAULT '0',
		`t3ver_id` int(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` int(11) NOT NULL DEFAULT '0',
		`t3ver_label` varchar(255) NOT NULL DEFAULT '',
		`t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
		`t3ver_stage` int(11) NOT NULL DEFAULT '0',
		`t3ver_count` int(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` int(11) NOT NULL DEFAULT '0',
		`t3_origuid` int(11) NOT NULL DEFAULT '0',
		`sys_language_uid` int(11) NOT NULL DEFAULT '0',
		`l10n_parent` int(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` mediumblob,
		PRIMARY KEY (`uid`)
);


#
# Table structure for table 'tx_edfu_domain_model_stelle'
#
CREATE TABLE `tx_edfu_domain_model_stelle` (
		`uid` int(11) NOT NULL auto_increment,
		`pid` int(11) DEFAULT '0' NOT NULL,
		`band_uid` int(11) NOT NULL,
		`seite_start` int(11) DEFAULT NULL,
		`zeile_start` int(11) DEFAULT NULL,
		`seite_stop` int(11) DEFAULT NULL,
		`zeile_stop` int(11) DEFAULT NULL,
		`anmerkung` text,
		`stop_unsicher` tinyint(4) DEFAULT NULL,
		`zerstoerung` tinyint(4) DEFAULT NULL,
		`ort` int(11) DEFAULT NULL,
		`szene` int(11) DEFAULT NULL,
		`tstamp` int(11) unsigned NOT NULL DEFAULT '0',
		`crdate` int(11) unsigned NOT NULL DEFAULT '0',
		`cruser_id` int(11) unsigned NOT NULL DEFAULT '0',
		`deleted` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`hidden` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`starttime` int(11) unsigned NOT NULL DEFAULT '0',
		`endtime` int(11) unsigned NOT NULL DEFAULT '0',
		`t3ver_oid` int(11) NOT NULL DEFAULT '0',
		`t3ver_id` int(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` int(11) NOT NULL DEFAULT '0',
		`t3ver_label` varchar(255) NOT NULL DEFAULT '',
		`t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
		`t3ver_stage` int(11) NOT NULL DEFAULT '0',
		`t3ver_count` int(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` int(11) NOT NULL DEFAULT '0',
		`t3_origuid` int(11) NOT NULL DEFAULT '0',
		`sys_language_uid` int(11) NOT NULL DEFAULT '0',
		`l10n_parent` int(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` mediumblob,
		PRIMARY KEY (`uid`),
		KEY `fk_belegstelle_band1_idx` (`band_uid`)
);

CREATE TABLE `tx_edfu_domain_model_band` (
		`uid` int(11) NOT NULL auto_increment,
		`pid` int(11) DEFAULT '0' NOT NULL,
		`nummer` int(11) DEFAULT NULL,
		`freigegeben` tinyint(4) DEFAULT NULL,
		`tstamp` int(11) unsigned NOT NULL DEFAULT '0',
		`crdate` int(11) unsigned NOT NULL DEFAULT '0',
		`cruser_id` int(11) unsigned NOT NULL DEFAULT '0',
		`deleted` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`hidden` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`starttime` int(11) unsigned NOT NULL DEFAULT '0',
		`endtime` int(11) unsigned NOT NULL DEFAULT '0',
		`t3ver_oid` int(11) NOT NULL DEFAULT '0',
		`t3ver_id` int(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` int(11) NOT NULL DEFAULT '0',
		`t3ver_label` varchar(255) NOT NULL DEFAULT '',
		`t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
		`t3ver_stage` int(11) NOT NULL DEFAULT '0',
		`t3ver_count` int(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` int(11) NOT NULL DEFAULT '0',
		`t3_origuid` int(11) NOT NULL DEFAULT '0',
		`sys_language_uid` int(11) NOT NULL DEFAULT '0',
		`l10n_parent` int(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` mediumblob,
		PRIMARY KEY (`uid`)
);

CREATE TABLE `tx_edfu_domain_model_szene` (
		`uid` int(11) NOT NULL auto_increment,
		`pid` int(11) NOT NULL,
		`nummer` int(11) DEFAULT NULL,
		`beschreibung` text,
		`tstamp` int(11) unsigned NOT NULL DEFAULT '0',
		`crdate` int(11) unsigned NOT NULL DEFAULT '0',
		`cruser_id` int(11) unsigned NOT NULL DEFAULT '0',
		`deleted` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`hidden` tinyint(4) unsigned NOT NULL DEFAULT '0',
		`starttime` int(11) unsigned NOT NULL DEFAULT '0',
		`endtime` int(11) unsigned NOT NULL DEFAULT '0',
		`t3ver_oid` int(11) NOT NULL DEFAULT '0',
		`t3ver_id` int(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` int(11) NOT NULL DEFAULT '0',
		`t3ver_label` varchar(255) NOT NULL DEFAULT '',
		`t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
		`t3ver_stage` int(11) NOT NULL DEFAULT '0',
		`t3ver_count` int(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` int(11) NOT NULL DEFAULT '0',
		`t3_origuid` int(11) NOT NULL DEFAULT '0',
		`sys_language_uid` int(11) NOT NULL DEFAULT '0',
		`l10n_parent` int(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` mediumblob,
		PRIMARY KEY (`uid`)
);


#
# Table structure for table 'tx_edfu_wort_berlin_mm'
#
CREATE TABLE tx_edfu_wort_berlin_mm (
		uid_local int(11) unsigned DEFAULT '0' NOT NULL,
		uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
		sorting int(11) unsigned DEFAULT '0' NOT NULL,
		sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_edfu_wort_stelle_mm'
#
CREATE TABLE tx_edfu_wort_stelle_mm (
		uid_local int(11) unsigned DEFAULT '0' NOT NULL,
		uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
		sorting int(11) unsigned DEFAULT '0' NOT NULL,
		sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_edfu_gott_stelle_mm'
#
CREATE TABLE tx_edfu_gott_stelle_mm (
		uid_local int(11) unsigned DEFAULT '0' NOT NULL,
		uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
		sorting int(11) unsigned DEFAULT '0' NOT NULL,
		sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_edfu_form_photo_mm'
#
CREATE TABLE tx_edfu_form_photo_mm (
		uid_local int(11) unsigned DEFAULT '0' NOT NULL,
		uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
		sorting int(11) unsigned DEFAULT '0' NOT NULL,
		sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_edfu_form_literature_mm'
#
CREATE TABLE tx_edfu_form_literature_mm (
		uid_local int(11) unsigned DEFAULT '0' NOT NULL,
		uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
		sorting int(11) unsigned DEFAULT '0' NOT NULL,
		sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_edfu_formular_stelle_mm'
#
CREATE TABLE tx_edfu_formular_stelle_mm (
		uid_local int(11) unsigned DEFAULT '0' NOT NULL,
		uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
		sorting int(11) unsigned DEFAULT '0' NOT NULL,
		sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_edfu_ort_stelle_mm'
#
CREATE TABLE tx_edfu_ort_stelle_mm (
		uid_local int(11) unsigned DEFAULT '0' NOT NULL,
		uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
		sorting int(11) unsigned DEFAULT '0' NOT NULL,
		sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);