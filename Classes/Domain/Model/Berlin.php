<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 *  Sven-S. Porst <porst@sub.uni-goettingen.de>
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
class Tx_Edfu_Domain_Model_Berlin extends Tx_Extbase_DomainObject_AbstractValueObject {

	/**
	 * Volume
	 *
	 * @var integer
	 */
	protected $volume;

	/**
	 * Start page
	 *
	 * @var integer
	 */
	protected $pageStart;

	/**
	 * End page
	 *
	 * @var integer
	 */
	protected $endPage;

	/**
	 * Start number
	 *
	 * @var integer
	 */
	protected $startNumber;

	/**
	 * End Number
	 *
	 * @var integer
	 */
	protected $endNumber;

	/**
	 * Returns the volume
	 *
	 * @return integer $volume
	 */
	public function getVolume() {
		return $this->volume;
	}

	/**
	 * Sets the volume
	 *
	 * @param integer $volume
	 * @return void
	 */
	public function setVolume($volume) {
		$this->volume = $volume;
	}

	/**
	 * Returns the pageStart
	 *
	 * @return integer $pageStart
	 */
	public function getPageStart() {
		return $this->pageStart;
	}

	/**
	 * Sets the pageStart
	 *
	 * @param integer $pageStart
	 * @return void
	 */
	public function setPageStart($pageStart) {
		$this->pageStart = $pageStart;
	}

	/**
	 * Returns the endPage
	 *
	 * @return integer $endPage
	 */
	public function getEndPage() {
		return $this->endPage;
	}

	/**
	 * Sets the endPage
	 *
	 * @param integer $endPage
	 * @return void
	 */
	public function setEndPage($endPage) {
		$this->endPage = $endPage;
	}

	/**
	 * Returns the startNumber
	 *
	 * @return integer $startNumber
	 */
	public function getStartNumber() {
		return $this->startNumber;
	}

	/**
	 * Sets the startNumber
	 *
	 * @param integer $startNumber
	 * @return void
	 */
	public function setStartNumber($startNumber) {
		$this->startNumber = $startNumber;
	}

	/**
	 * Returns the endNumber
	 *
	 * @return integer $endNumber
	 */
	public function getEndNumber() {
		return $this->endNumber;
	}

	/**
	 * Sets the endNumber
	 *
	 * @param integer $endNumber
	 * @return void
	 */
	public function setEndNumber($endNumber) {
		$this->endNumber = $endNumber;
	}

}
?>