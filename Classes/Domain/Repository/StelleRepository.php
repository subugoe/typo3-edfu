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

	public function initializeObject() {
		$querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
		$querySettings->setRespectStoragePage(FALSE);
	}

	/**
	 * @param array $stelle
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findStelleByLiteratureParameters($stelle) {
		$query = $this->createQuery();
		return $query->matching(
			$query->logicalAnd(
				$query->equals('bandUid', $stelle['band']),
				$query->equals('seiteStart', $stelle['seiteStart']),
				$query->equals('seiteStop', $stelle['seiteStop']),
				$query->equals('zeileStart', $stelle['zeileStart']),
				$query->equals('zeileStop', $stelle['zeileStop'])
			)
		)->execute();
	}

}

?>