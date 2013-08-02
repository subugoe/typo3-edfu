<?php
namespace Ipf\Edfu\Domain\Model;

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
class WbBerlin extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * Volume
	 *
	 * @var integer
	 */
	protected $band;

	/**
	 * Start page
	 *
	 * @var integer
	 */
	protected $seiteStart;

	/**
	 * End page
	 *
	 * @var integer
	 */
	protected $seiteStop;

	/**
	 * Start number
	 *
	 * @var integer
	 */
	protected $zeileStart;

	/**
	 * End Number
	 *
	 * @var integer
	 */
	protected $zeileStop;

	/**
	 * Returns the volume
	 *
	 * @return integer $volume
	 */
	public function getBand() {
		return $this->band;
	}

	/**
	 * Sets the volume
	 *
	 * @param integer $volume
	 * @return void
	 */
	public function setBand($volume) {
		$this->band = $volume;
	}

	/**
	 * Returns the pageStart
	 *
	 * @return integer $pageStart
	 */
	public function getSeiteStart() {
		return $this->seiteStart;
	}

	/**
	 * Sets the pageStart
	 *
	 * @param integer $pageStart
	 * @return void
	 */
	public function setSeiteStart($pageStart) {
		$this->seiteStart = $pageStart;
	}

	/**
	 * Returns the endPage
	 *
	 * @return integer $endPage
	 */
	public function getSeiteStop() {
		return $this->seiteStop;
	}

	/**
	 * Sets the endPage
	 *
	 * @param integer $endPage
	 * @return void
	 */
	public function setSeiteStop($endPage) {
		$this->seiteStop = $endPage;
	}

	/**
	 * Returns the startNumber
	 *
	 * @return integer $startNumber
	 */
	public function getZeileStart() {
		return $this->zeileStart;
	}

	/**
	 * Sets the startNumber
	 *
	 * @param integer $startNumber
	 * @return void
	 */
	public function setZeileStart($startNumber) {
		$this->zeileStart = $startNumber;
	}

	/**
	 * Returns the endNumber
	 *
	 * @return integer $endNumber
	 */
	public function getZeileStop() {
		return $this->zeileStop;
	}

	/**
	 * Sets the endNumber
	 *
	 * @param integer $endNumber
	 * @return void
	 */
	public function setZeileStop($endNumber) {
		$this->zeileStop = $endNumber;
	}

}
?>