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
class Tx_Edfu_Domain_Model_Place extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Translation
	 *
	 * @var string
	 */
	protected $translation;

	/**
	 * Place description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * Position
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Edfu_Domain_Model_Position>
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
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->position = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the translation
	 *
	 * @return string $translation
	 */
	public function getTranslation() {
		return $this->translation;
	}

	/**
	 * Sets the translation
	 *
	 * @param string $translation
	 * @return void
	 */
	public function setTranslation($translation) {
		$this->translation = $translation;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Adds a Position
	 *
	 * @param Tx_Edfu_Domain_Model_Position $position
	 * @return void
	 */
	public function addPosition(Tx_Edfu_Domain_Model_Position $position) {
		$this->position->attach($position);
	}

	/**
	 * Removes a Position
	 *
	 * @param Tx_Edfu_Domain_Model_Position $positionToRemove The Position to be removed
	 * @return void
	 */
	public function removePosition(Tx_Edfu_Domain_Model_Position $positionToRemove) {
		$this->position->detach($positionToRemove);
	}

	/**
	 * Returns the position
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Edfu_Domain_Model_Position> $position
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * Sets the position
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Edfu_Domain_Model_Position> $position
	 * @return void
	 */
	public function setPosition(Tx_Extbase_Persistence_ObjectStorage $position) {
		$this->position = $position;
	}

}
?>