#
# Table structure for table 'tx_edfu_domain_model_wort'
#
CREATE TABLE `tx_edfu_domain_model_wort` (
		`uid` INT(11) NOT NULL AUTO_INCREMENT,
		`pid` INT(11) DEFAULT '0' NOT NULL,
		`transliteration` TEXT NOT NULL,
		`weiteres` TEXT,
		`uebersetzung` TEXT,
		`anmerkung` TEXT,
		`hieroglyph` VARCHAR(255) DEFAULT NULL,
		`wb_berlin_uid` INT(11) DEFAULT NULL,
		`tstamp` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`crdate` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`cruser_id` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`deleted` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`hidden` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`starttime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`endtime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`t3ver_oid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_id` INT(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_label` VARCHAR(255) NOT NULL DEFAULT '',
		`t3ver_state` TINYINT(4) NOT NULL DEFAULT '0',
		`t3ver_stage` INT(11) NOT NULL DEFAULT '0',
		`t3ver_count` INT(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` INT(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` INT(11) NOT NULL DEFAULT '0',
		`t3_origuid` INT(11) NOT NULL DEFAULT '0',
		`sys_language_uid` INT(11) NOT NULL DEFAULT '0',
		`l10n_parent` INT(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` MEDIUMBLOB,
		PRIMARY KEY (`uid`),
		KEY `fk_wort_berlin1_idx` (`wb_berlin_uid`)
);

#
# Table structure for table 'tx_edfu_domain_model_gott'
#
CREATE TABLE `tx_edfu_domain_model_gott` (
		`uid` INT(11) NOT NULL AUTO_INCREMENT,
		`pid` INT(11) DEFAULT '0' NOT NULL,
		`transliteration` TEXT NOT NULL,
		`ort` TEXT,
		`eponym` TEXT,
		`beziehung` TEXT,
		`funktion` TEXT,
		`tstamp` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`crdate` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`cruser_id` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`deleted` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`hidden` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`starttime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`endtime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`t3ver_oid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_id` INT(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_label` VARCHAR(255) NOT NULL DEFAULT '',
		`t3ver_state` TINYINT(4) NOT NULL DEFAULT '0',
		`t3ver_stage` INT(11) NOT NULL DEFAULT '0',
		`t3ver_count` INT(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` INT(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` INT(11) NOT NULL DEFAULT '0',
		`t3_origuid` INT(11) NOT NULL DEFAULT '0',
		`sys_language_uid` INT(11) NOT NULL DEFAULT '0',
		`l10n_parent` INT(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` MEDIUMBLOB,
		PRIMARY KEY (`uid`)
);


CREATE TABLE `tx_edfu_domain_model_formular` (
		`uid` INT(11) NOT NULL AUTO_INCREMENT,
		`pid` INT(11) DEFAULT '0' NOT NULL,
		`stelle_uid` INT(11) NOT NULL,
		`transliteration` TEXT NOT NULL,
		`uebersetzung` TEXT,
		`texttyp` TEXT,
		`tstamp` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`crdate` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`cruser_id` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`deleted` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`hidden` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`starttime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`endtime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`t3ver_oid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_id` INT(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_label` VARCHAR(255) NOT NULL DEFAULT '',
		`t3ver_state` TINYINT(4) NOT NULL DEFAULT '0',
		`t3ver_stage` INT(11) NOT NULL DEFAULT '0',
		`t3ver_count` INT(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` INT(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` INT(11) NOT NULL DEFAULT '0',
		`t3_origuid` INT(11) NOT NULL DEFAULT '0',
		`sys_language_uid` INT(11) NOT NULL DEFAULT '0',
		`l10n_parent` INT(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` MEDIUMBLOB,
		PRIMARY KEY (`uid`),
		KEY `fk_FL_belegstelle1_idx` (`stelle_uid`)
);


#
# Table structure for table 'tx_edfu_domain_model_ort'
#
CREATE TABLE tx_edfu_domain_model_ort (

		uid INT(11) NOT NULL AUTO_INCREMENT,
		pid INT(11) DEFAULT '0' NOT NULL,

		`transliteration` TEXT NOT NULL,
		`uebersetzung` TEXT,
		`ortsbeschreibung` TEXT,
		`anmerkung` TEXT,
		`description` TEXT NOT NULL,
		`stelle` INT(11) UNSIGNED DEFAULT '0' NOT NULL,

		tstamp INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		crdate INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		cruser_id INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		deleted TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
		hidden TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
		starttime INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		endtime INT(11) UNSIGNED DEFAULT '0' NOT NULL,

		t3ver_oid INT(11) DEFAULT '0' NOT NULL,
		t3ver_id INT(11) DEFAULT '0' NOT NULL,
		t3ver_wsid INT(11) DEFAULT '0' NOT NULL,
		t3ver_label VARCHAR(255) DEFAULT '' NOT NULL,
		t3ver_state TINYINT(4) DEFAULT '0'  NOT NULL,
		t3ver_stage INT(11) DEFAULT '0' NOT NULL,
		t3ver_count INT(11) DEFAULT '0' NOT NULL,
		t3ver_tstamp INT(11) DEFAULT '0' NOT NULL,
		t3ver_move_id INT(11) DEFAULT '0' NOT NULL,

		sorting INT(11) DEFAULT '0' NOT NULL,
		t3_origuid INT(11) DEFAULT '0' NOT NULL,
		sys_language_uid INT(11) DEFAULT '0' NOT NULL,
		l10n_parent INT(11) DEFAULT '0' NOT NULL,
		l10n_diffsource MEDIUMBLOB,

		PRIMARY KEY (uid),
		KEY parent (pid),
		KEY t3ver_oid (t3ver_oid, t3ver_wsid),
		KEY language (l10n_parent, sys_language_uid)

);

#
# Table structure for table 'tx_edfu_domain_model_photo'
#
CREATE TABLE tx_edfu_domain_model_photo (

		uid INT(11) NOT NULL AUTO_INCREMENT,
		pid INT(11) DEFAULT '0' NOT NULL,

		filename VARCHAR(255) DEFAULT '' NOT NULL,
		year INT(11) DEFAULT '0' NOT NULL,

		tstamp INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		crdate INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		cruser_id INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		deleted TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
		hidden TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
		starttime INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		endtime INT(11) UNSIGNED DEFAULT '0' NOT NULL,

		t3ver_oid INT(11) DEFAULT '0' NOT NULL,
		t3ver_id INT(11) DEFAULT '0' NOT NULL,
		t3ver_wsid INT(11) DEFAULT '0' NOT NULL,
		t3ver_label VARCHAR(255) DEFAULT '' NOT NULL,
		t3ver_state TINYINT(4) DEFAULT '0'  NOT NULL,
		t3ver_stage INT(11) DEFAULT '0' NOT NULL,
		t3ver_count INT(11) DEFAULT '0' NOT NULL,
		t3ver_tstamp INT(11) DEFAULT '0' NOT NULL,
		t3ver_move_id INT(11) DEFAULT '0' NOT NULL,

		t3_origuid INT(11) DEFAULT '0' NOT NULL,
		sys_language_uid INT(11) DEFAULT '0' NOT NULL,
		l10n_parent INT(11) DEFAULT '0' NOT NULL,
		l10n_diffsource MEDIUMBLOB,

		PRIMARY KEY (uid),
		KEY parent (pid),
		KEY t3ver_oid (t3ver_oid, t3ver_wsid),
		KEY language (l10n_parent, sys_language_uid)

);

#
# Table structure for table 'tx_edfu_domain_model_wb_berlin'
#
CREATE TABLE `tx_edfu_domain_model_wb_berlin` (
		`uid` INT(11) NOT NULL AUTO_INCREMENT,
		`pid` INT(11) DEFAULT '0' NOT NULL,
		`band` INT(11) DEFAULT NULL,
		`seite_start` INT(11) DEFAULT NULL,
		`zeile_start` INT(11) DEFAULT NULL,
		`seite_stop` INT(11) DEFAULT NULL,
		`zeile_stop` INT(11) DEFAULT NULL,
		`zweifel` TINYINT(4) DEFAULT NULL,
		`tstamp` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`crdate` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`cruser_id` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`deleted` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`hidden` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`starttime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`endtime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`t3ver_oid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_id` INT(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_label` VARCHAR(255) NOT NULL DEFAULT '',
		`t3ver_state` TINYINT(4) NOT NULL DEFAULT '0',
		`t3ver_stage` INT(11) NOT NULL DEFAULT '0',
		`t3ver_count` INT(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` INT(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` INT(11) NOT NULL DEFAULT '0',
		`t3_origuid` INT(11) NOT NULL DEFAULT '0',
		`sys_language_uid` INT(11) NOT NULL DEFAULT '0',
		`l10n_parent` INT(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` MEDIUMBLOB,
		PRIMARY KEY (`uid`)
);

#
# Table structure for table 'tx_edfu_domain_model_literatur'
#
CREATE TABLE `tx_edfu_domain_model_literatur` (
		`uid` INT(11) NOT NULL AUTO_INCREMENT,
		`pid` INT(11) DEFAULT '0' NOT NULL,
		`beschreibung` TEXT,
		`tstamp` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`crdate` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`cruser_id` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`deleted` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`hidden` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`starttime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`endtime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`t3ver_oid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_id` INT(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_label` VARCHAR(255) NOT NULL DEFAULT '',
		`t3ver_state` TINYINT(4) NOT NULL DEFAULT '0',
		`t3ver_stage` INT(11) NOT NULL DEFAULT '0',
		`t3ver_count` INT(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` INT(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` INT(11) NOT NULL DEFAULT '0',
		`t3_origuid` INT(11) NOT NULL DEFAULT '0',
		`sys_language_uid` INT(11) NOT NULL DEFAULT '0',
		`l10n_parent` INT(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` MEDIUMBLOB,
		PRIMARY KEY (`uid`)
);


#
# Table structure for table 'tx_edfu_domain_model_stelle'
#
CREATE TABLE `tx_edfu_domain_model_stelle` (
		`uid` INT(11) NOT NULL AUTO_INCREMENT,
		`pid` INT(11) DEFAULT '0' NOT NULL,
		`band_uid` INT(11) NOT NULL,
		`seite_start` INT(11) DEFAULT NULL,
		`zeile_start` INT(11) DEFAULT NULL,
		`seite_stop` INT(11) DEFAULT NULL,
		`zeile_stop` INT(11) DEFAULT NULL,
		`anmerkung` TEXT,
		`stop_unsicher` TINYINT(4) DEFAULT NULL,
		`zerstoerung` TINYINT(4) DEFAULT NULL,
		`ort` INT(11) DEFAULT NULL,
		`szene` INT(11) DEFAULT NULL,
		`tstamp` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`crdate` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`cruser_id` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`deleted` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`hidden` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`starttime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`endtime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`t3ver_oid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_id` INT(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_label` VARCHAR(255) NOT NULL DEFAULT '',
		`t3ver_state` TINYINT(4) NOT NULL DEFAULT '0',
		`t3ver_stage` INT(11) NOT NULL DEFAULT '0',
		`t3ver_count` INT(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` INT(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` INT(11) NOT NULL DEFAULT '0',
		`t3_origuid` INT(11) NOT NULL DEFAULT '0',
		`sys_language_uid` INT(11) NOT NULL DEFAULT '0',
		`l10n_parent` INT(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` MEDIUMBLOB,
		PRIMARY KEY (`uid`),
		KEY `fk_belegstelle_band1_idx` (`band_uid`)
);

CREATE TABLE `tx_edfu_domain_model_band` (
		`uid` INT(11) NOT NULL AUTO_INCREMENT,
		`pid` INT(11) DEFAULT '0' NOT NULL,
		`nummer` INT(11) DEFAULT NULL,
		`freigegeben` TINYINT(4) DEFAULT NULL,
		`tstamp` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`crdate` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`cruser_id` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`deleted` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`hidden` TINYINT(4) UNSIGNED NOT NULL DEFAULT '0',
		`starttime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`endtime` INT(11) UNSIGNED NOT NULL DEFAULT '0',
		`t3ver_oid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_id` INT(11) NOT NULL DEFAULT '0',
		`t3ver_wsid` INT(11) NOT NULL DEFAULT '0',
		`t3ver_label` VARCHAR(255) NOT NULL DEFAULT '',
		`t3ver_state` TINYINT(4) NOT NULL DEFAULT '0',
		`t3ver_stage` INT(11) NOT NULL DEFAULT '0',
		`t3ver_count` INT(11) NOT NULL DEFAULT '0',
		`t3ver_tstamp` INT(11) NOT NULL DEFAULT '0',
		`t3ver_move_id` INT(11) NOT NULL DEFAULT '0',
		`t3_origuid` INT(11) NOT NULL DEFAULT '0',
		`sys_language_uid` INT(11) NOT NULL DEFAULT '0',
		`l10n_parent` INT(11) NOT NULL DEFAULT '0',
		`l10n_diffsource` MEDIUMBLOB,
		PRIMARY KEY (`uid`)
);

CREATE TABLE `tx_edfu_domain_model_szene` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
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
# Table structure for table 'tx_edfu_word_berlin_mm'
#
CREATE TABLE tx_edfu_word_berlin_mm (
		uid_local INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		uid_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_edfu_word_position_mm'
#
CREATE TABLE tx_edfu_word_position_mm (
		uid_local INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		uid_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_edfu_god_position_mm'
#
CREATE TABLE tx_edfu_god_position_mm (
		uid_local INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		uid_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_edfu_form_photo_mm'
#
CREATE TABLE tx_edfu_form_photo_mm (
		uid_local INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		uid_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_edfu_form_literature_mm'
#
CREATE TABLE tx_edfu_form_literature_mm (
		uid_local INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		uid_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_edfu_form_position_mm'
#
CREATE TABLE tx_edfu_form_position_mm (
		uid_local INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		uid_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_edfu_place_position_mm'
#
CREATE TABLE tx_edfu_place_position_mm (
		uid_local INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		uid_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		sorting_foreign INT(11) UNSIGNED DEFAULT '0' NOT NULL,

		KEY uid_local (uid_local),
		KEY uid_foreign (uid_foreign)
);