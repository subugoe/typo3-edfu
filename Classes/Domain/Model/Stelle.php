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
class Tx_Edfu_Domain_Model_Stelle extends Tx_Extbase_DomainObject_AbstractValueObject {

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Edfu_Domain_Model_Band>;
	 */
	protected $bandId;

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
	 * Start line
	 *
	 * @var integer
	 */
	protected $zeileStart;

	/**
	 * End line
	 *
	 * @var integer
	 */
	protected $zeileStop;

	/**
	 * Notes
	 *
	 * @var string
	 */
	protected $anmerkung;

	/**
	 * Doubtful stop
	 *
	 * @var boolean
	 */
	protected $stopUnsicher = FALSE;

	/**
	 * @var boolean
	 */
	protected $zerstoerung;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Edfu_Domain_Model_Ort>;
	 */
	protected $ort;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Edfu_Domain_Model_Ort>;
	 */
	protected $szene;
	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->bandId = new Tx_Extbase_Persistence_ObjectStorage();
		$this->ort = new Tx_Extbase_Persistence_ObjectStorage();
		$this->szene = new Tx_Extbase_Persistence_ObjectStorage();
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
	 * Returns the lineStart
	 *
	 * @return integer $lineStart
	 */
	public function getZeileStart() {
		return $this->zeileStart;
	}

	/**
	 * Sets the lineStart
	 *
	 * @param integer $lineStart
	 * @return void
	 */
	public function setZeileStart($lineStart) {
		$this->zeileStart = $lineStart;
	}

	/**
	 * Returns the lineEnd
	 *
	 * @return integer $lineEnd
	 */
	public function getZeileStop() {
		return $this->zeileStop;
	}

	/**
	 * Sets the lineEnd
	 *
	 * @param integer $lineEnd
	 * @return void
	 */
	public function setZeileStop($lineEnd) {
		$this->zeileStop = $lineEnd;
	}

	/**
	 * Returns the anmerkung
	 *
	 * @return string $note
	 */
	public function getAnmerkung() {
		return $this->anmerkung;
	}

	/**
	 * Sets the anmerkung
	 *
	 * @param string $note
	 * @return void
	 */
	public function setAnmerkung($note) {
		$this->anmerkung = $note;
	}

	/**
	 * Returns the stopDoubtful
	 *
	 * @return boolean $stopDoubtful
	 */
	public function getStopUnsicher() {
		return $this->stopUnsicher;
	}

	/**
	 * Sets the stopDoubtful
	 *
	 * @param boolean $stopDoubtful
	 * @return void
	 */
	public function setStopUnsicher($stopDoubtful) {
		$this->stopUnsicher = $stopDoubtful;
	}

	/**
	 * Returns the boolean state of stopDoubtful
	 *
	 * @return boolean
	 */
	public function isStopUnsicher() {
		return $this->getStopUnsicher();
	}

	/**
	 * @param boolean $zerstoerung
	 */
	public function setZerstoerung($zerstoerung) {
		$this->zerstoerung = $zerstoerung;
	}

	/**
	 * @return boolean
	 */
	public function getZerstoerung() {
		return $this->zerstoerung;
	}

	/**
	 * @param \Tx_Extbase_Persistence_ObjectStorage $bandId
	 */
	public function setBandId($bandId) {
		$this->bandId = $bandId;
	}

	/**
	 * @return \Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getBandId() {
		return $this->bandId;
	}

	/**
	 * @param \Tx_Extbase_Persistence_ObjectStorage $ort
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
	}

	/**
	 * @return \Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 * @param \Tx_Extbase_Persistence_ObjectStorage $szene
	 */
	public function setSzene($szene) {
		$this->szene = $szene;
	}

	/**
	 * @return \Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getSzene() {
		return $this->szene;
	}

}
?>