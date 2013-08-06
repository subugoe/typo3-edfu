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
class Stelle extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ipf\Edfu\Domain\Model\Band>;
	 */
	protected $bandUid;

	/**
	 * Start page
	 *
	 * @var int
	 */
	protected $seiteStart = 0;

	/**
	 * End page
	 *
	 * @var int
	 */
	protected $seiteStop;

	/**
	 * Start line
	 *
	 * @var int
	 */
	protected $zeileStart;

	/**
	 * End line
	 *
	 * @var int
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
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ipf\Edfu\Domain\Model\Ort>;
	 */
	protected $ort;

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ipf\Edfu\Domain\Model\Ort>;
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
	 * Initializes all \TYPO3\CMS\Extbase\Persistence\ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->bandUid = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->ort = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->szene = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the pageStart
	 *
	 * @return int $pageStart
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
		return $this;
	}

	/**
	 * Returns the endPage
	 *
	 * @return int $endPage
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
		return $this;
	}

	/**
	 * Returns the lineStart
	 *
	 * @return int $lineStart
	 */
	public function getZeileStart() {
		return $this->zeileStart;
	}

	/**
	 * Sets the lineStart
	 *
	 * @param int $lineStart
	 * @return void
	 */
	public function setZeileStart($lineStart) {
		$this->zeileStart = $lineStart;
		return $this;
	}

	/**
	 * Returns the lineEnd
	 *
	 * @return int $lineEnd
	 */
	public function getZeileStop() {
		return $this->zeileStop;
	}

	/**
	 * Sets the lineEnd
	 *
	 * @param int $lineEnd
	 * @return void
	 */
	public function setZeileStop($lineEnd) {
		$this->zeileStop = $lineEnd;
		return $this;
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
		return $this;
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
		return $this;
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
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getZerstoerung() {
		return $this->zerstoerung;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $bandUid
	 */
	public function setBandUid($bandUid) {
		$this->bandUid = $bandUid;
		return $this;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getBandUid() {
		return $this->bandUid;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $ort
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
		return $this;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $szene
	 */
	public function setSzene($szene) {
		$this->szene = $szene;
		return $this;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getSzene() {
		return $this->szene;
	}

}
?>