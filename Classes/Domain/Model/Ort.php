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
class Ort extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * @var string
	 */
	protected $transliteration;

	/**
	 * Translation
	 *
	 * @var string
	 */
	protected $uebersetzung;

	/**
	 * Place description
	 *
	 * @var string
	 */
	protected $ortsbeschreibung;

	/**
	 * @var string
	 */
	protected $anmerkung;

	/**
	 * Stelle
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Stelle>
	 * @lazy
	 */
	protected $stelle;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all \TYPO3\CMS\Extbase\Persistence\ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->stelle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the translation
	 *
	 * @return string $translation
	 */
	public function getUebersetzung() {
		return $this->uebersetzung;
	}

	/**
	 * Sets the translation
	 *
	 * @param string $translation
	 * @return void
	 */
	public function setUebersetzung($translation) {
		$this->uebersetzung = $translation;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getOrtsbeschreibung() {
		return $this->ortsbeschreibung;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setOrtsbeschreibung($description) {
		$this->ortsbeschreibung = $description;
	}

	/**
	 * Adds a Stelle
	 *
	 * @param Stelle $stelle
	 * @return void
	 */
	public function addStelle(Stelle $stelle) {
		$this->stelle->attach($stelle);
	}

	/**
	 * Removes a Stelle
	 *
	 * @param Stelle $stelleToRemove The Stelle to be removed
	 * @return void
	 */
	public function removeStelle(Stelle $stelleToRemove) {
		$this->stelle->detach($stelleToRemove);
	}

	/**
	 * Returns the stelle
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Stelle> $stelle
	 */
	public function getStelle() {
		return $this->stelle;
	}

	/**
	 * Sets the stelle
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Stelle> $stelle
	 * @return void
	 */
	public function setStelle(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $stelle) {
		$this->stelle = $stelle;
	}

	/**
	 * @param string $transliteration
	 */
	public function setTransliteration($transliteration) {
		$this->transliteration = $transliteration;
	}

	/**
	 * @return string
	 */
	public function getTransliteration() {
		return $this->transliteration;
	}

	/**
	 * @param string $anmerkung
	 */
	public function setAnmerkung($anmerkung) {
		$this->anmerkung = $anmerkung;
	}

	/**
	 * @return string
	 */
	public function getAnmerkung() {
		return $this->anmerkung;
	}

}
?>