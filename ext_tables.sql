#
# Table structure for table 'tx_edfu_domain_model_word'
#
CREATE TABLE tx_edfu_domain_model_word (

		uid INT(11) NOT NULL AUTO_INCREMENT,
		pid INT(11) DEFAULT '0' NOT NULL,

		transliteration TEXT NOT NULL,
		translation TEXT NOT NULL,
		notes TEXT NOT NULL,
		hieroglyph VARCHAR(255) DEFAULT '' NOT NULL,
		berlin INT(11) UNSIGNED DEFAULT '0' NOT NULL,
		position INT(11) UNSIGNED DEFAULT '0' NOT NULL,

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
# Table structure for table 'tx_edfu_domain_model_place'
#
CREATE TABLE tx_edfu_domain_model_place (

		uid INT(11) NOT NULL AUTO_INCREMENT,
		pid INT(11) DEFAULT '0' NOT NULL,

		translation TEXT NOT NULL,
		description TEXT NOT NULL,
		position INT(11) UNSIGNED DEFAULT '0' NOT NULL,

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
# Table structure for table 'tx_edfu_domain_model_berlin'
#
CREATE TABLE tx_edfu_domain_model_berlin (

		uid INT(11) NOT NULL AUTO_INCREMENT,
		pid INT(11) DEFAULT '0' NOT NULL,

		volume INT(11) DEFAULT '0' NOT NULL,
		page_start INT(11) DEFAULT '0' NOT NULL,
		end_page INT(11) DEFAULT '0' NOT NULL,
		start_number INT(11) DEFAULT '0' NOT NULL,
		end_number INT(11) DEFAULT '0' NOT NULL,

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
# Table structure for table 'tx_edfu_domain_model_literatur'
#
CREATE TABLE `tx_edfu_domain_model_literatur` (
		`uid` INT(11) NOT NULL,
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
# Table structure for table 'tx_edfu_domain_model_position'
#
CREATE TABLE tx_edfu_domain_model_position (

		uid INT(11) NOT NULL AUTO_INCREMENT,
		pid INT(11) DEFAULT '0' NOT NULL,

		page_start INT(11) DEFAULT '0' NOT NULL,
		end_page INT(11) DEFAULT '0' NOT NULL,
		line_start INT(11) DEFAULT '0' NOT NULL,
		line_end INT(11) DEFAULT '0' NOT NULL,
		note TEXT NOT NULL,
		stop_doubtful TINYINT(1) UNSIGNED DEFAULT '0' NOT NULL,

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