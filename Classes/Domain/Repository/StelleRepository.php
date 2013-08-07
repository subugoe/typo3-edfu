<?php
namespace Ipf\Edfu\Domain\Repository;

	/***************************************************************
	 *  Copyright notice
	 *
	 *  (c) 2013 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
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
	 ***************************************************************/

/**
 *
 *
 * @package edfu
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class StelleRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	const TABLE_NAME = 'tx_edfu_domain_model_stelle';

	public function initializeObject() {
		//$querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
		//$querySettings->setRespectStoragePage(FALSE);
	}

	/**
	 * @param array $stelle
	 * @return array
	 */
	public function findStelleByLiteratureParameters($stelle) {

		$locations = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
				'*',
				self::TABLE_NAME,
				'zeile_start = ' . $stelle['zeileStart'] .
				' AND band_uid = ' . $stelle['bandUid'] .
				' AND seite_start = ' . $stelle['seiteStart'] .
				' AND zeile_stop = ' . $stelle['zeileStop'] .
				' AND seite_stop = ' . $stelle['seiteStop']
			);

		return $locations;
		}

	/**
	 * @param array $stelle
	 */
	public function addNewStelle($stelle) {
		$stelleData = array(
			'zeile_start' => $stelle['zeileStart'],
			'band_uid' => $stelle['bandUid'],
			'seite_start' => $stelle['seiteStart'],
			'zeile_stop' => $stelle['zeileStop'],
			'seite_stop' => $stelle['seiteStop']
		);

		return $GLOBALS['TYPO3_DB']->exec_INSERTquery(
			self::TABLE_NAME,
			$stelleData
		);
	}

}

?>