<?php
namespace Ipf\Edfu\Service;
/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Ingo Pfennigstorf <pfennigstorf@sub-goettingen.de>
 *      Goettingen State Library
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * Description 
 */
class BandService {

	/**
	 * Name of the table
	 */
	const TABLE_NAME = 'tx_edfu_domain_model_band';

	/**
	 * @var array
	 */
	protected $baende;

	/**
	 * @param $baende
	 * @return void
	 */
	public function setBaende($baende) {
		$this->baende = $baende;
	}

	/**
	 * @return array
	 */
	public function getBaende() {

		$query = $GLOBALS['TYPO3_DB']->exec_SELECTQuery(
			'*',
			self::TABLE_NAME,
			'deleted = 0 AND hidden = 0'
		);

		$baende = array();

		while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($query)) {
			array_push($baende, $row['uid']);
		}

		$this->setBaende($baende);

		return $this->baende;
	}

}