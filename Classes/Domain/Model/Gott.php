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
class Gott extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Transliteration
	 *
	 * @var string
	 */
	protected $transliteration;

	/**
	 * Place
	 *
	 * @var string
	 */
	protected $place;

	/**
	 * Eponym
	 *
	 * @var string
	 */
	protected $eponym;

	/**
	 * Relation
	 *
	 * @var string
	 */
	protected $relation;

	/**
	 * Function
	 *
	 * @var string
	 */
	protected $function;

	/**
	 * Position
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
	 * Returns the place
	 *
	 * @return string $place
	 */
	public function getPlace() {
		return $this->place;
	}

	/**
	 * Sets the place
	 *
	 * @param string $place
	 * @return void
	 */
	public function setPlace($place) {
		$this->place = $place;
	}

	/**
	 * Returns the eponym
	 *
	 * @return string $eponym
	 */
	public function getEponym() {
		return $this->eponym;
	}

	/**
	 * Sets the eponym
	 *
	 * @param string $eponym
	 * @return void
	 */
	public function setEponym($eponym) {
		$this->eponym = $eponym;
	}

	/**
	 * Returns the relation
	 *
	 * @return string $relation
	 */
	public function getRelation() {
		return $this->relation;
	}

	/**
	 * Sets the relation
	 *
	 * @param string $relation
	 * @return void
	 */
	public function setRelation($relation) {
		$this->relation = $relation;
	}

	/**
	 * Returns the function
	 *
	 * @return string $function
	 */
	public function getFunction() {
		return $this->function;
	}

	/**
	 * Sets the function
	 *
	 * @param string $function
	 * @return void
	 */
	public function setFunction($function) {
		$this->function = $function;
	}

	/**
	 * Adds a Position
	 *
	 * @param Stelle $position
	 * @return void
	 */
	public function addPosition(Stelle $position) {
		$this->stelle->attach($position);
	}

	/**
	 * Removes a Position
	 *
	 * @param Stelle $positionToRemove The Position to be removed
	 * @return void
	 */
	public function removePosition(Stelle $positionToRemove) {
		$this->stelle->detach($positionToRemove);
	}

	/**
	 * Returns the position
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Stelle> $position
	 */
	public function getStelle() {
		return $this->stelle;
	}

	/**
	 * Sets the position
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Stelle> $stelle
	 * @return void
	 */
	public function setStelle(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $stelle) {
		$this->stelle = $stelle;
	}

}
?>