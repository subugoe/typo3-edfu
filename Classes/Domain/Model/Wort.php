<?php
namespace Ipf\Edfu\Domain\Model;

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
class Wort extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Transliteration
	 *
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
	 * Notes
	 *
	 * @var string
	 */
	protected $anmerkung;

	/**
	 * Hieroglyph
	 *
	 * @var string
	 */
	protected $hieroglyph;

	/**
	 * Berlin dictionary
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Berlin>
	 * @lazy
	 */
	protected $berlin;

	/**
	 * Position in chassinat
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Stelle>
	 * @lazy
	 */
	protected $position;

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
		$this->berlin = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->position = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the transliteration
	 *
	 * @return string $transliteration
	 */
	public function getTransliteration() {
		return $this->transliteration;
	}

	/**
	 * Sets the transliteration
	 *
	 * @param string $transliteration
	 * @return void
	 */
	public function setTransliteration($transliteration) {
		$this->transliteration = $transliteration;
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
	 * Returns the notes
	 *
	 * @return string $notes
	 */
	public function getAnmerkung() {
		return $this->anmerkung;
	}

	/**
	 * Sets the notes
	 *
	 * @param string $anmerkung
	 * @return void
	 */
	public function setAnmerkung($anmerkung) {
		$this->anmerkung = $anmerkung;
	}

	/**
	 * Returns the hieroglyph
	 *
	 * @return string $hieroglyph
	 */
	public function getHieroglyph() {
		return $this->hieroglyph;
	}

	/**
	 * Sets the hieroglyph
	 *
	 * @param string $hieroglyph
	 * @return void
	 */
	public function setHieroglyph($hieroglyph) {
		$this->hieroglyph = $hieroglyph;
	}

	/**
	 * Adds a Berlin
	 *
	 * @param Berlin $berlin
	 * @return void
	 */
	public function addBerlin(Berlin $berlin) {
		$this->berlin->attach($berlin);
	}

	/**
	 * Removes a Berlin
	 *
	 * @param Berlin $berlinToRemove The Berlin to be removed
	 * @return void
	 */
	public function removeBerlin(Berlin $berlinToRemove) {
		$this->berlin->detach($berlinToRemove);
	}

	/**
	 * Returns the berlin
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Berlin> $berlin
	 */
	public function getBerlin() {
		return $this->berlin;
	}

	/**
	 * Sets the berlin
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Berlin> $berlin
	 * @return void
	 */
	public function setBerlin(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $berlin) {
		$this->berlin = $berlin;
	}

	/**
	 * Adds a Position
	 *
	 * @param Stelle $position
	 * @return void
	 */
	public function addPosition(Stelle $position) {
		$this->position->attach($position);
	}

	/**
	 * Removes a Position
	 *
	 * @param Stelle $positionToRemove The Position to be removed
	 * @return void
	 */
	public function removePosition(Stelle $positionToRemove) {
		$this->position->detach($positionToRemove);
	}

	/**
	 * Returns the position
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Stelle> $position
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * Sets the position
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Stelle> $position
	 * @return void
	 */
	public function setPosition(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $position) {
		$this->position = $position;
	}

}
?>