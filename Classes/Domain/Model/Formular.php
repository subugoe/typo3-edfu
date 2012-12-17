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
class Tx_Edfu_Domain_Model_Formular extends Tx_Extbase_DomainObject_AbstractEntity {

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
	protected $translation;

	/**
	 * Text type
	 *
	 * @var string
	 */
	protected $textType;

	/**
	 * Photos
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Edfu_Domain_Model_Photo>
	 * @lazy
	 */
	protected $photos;

	/**
	 * Literature
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Edfu_Domain_Model_Literature>
	 * @lazy
	 */
	protected $literature;

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
		$this->photos = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->literature = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->position = new Tx_Extbase_Persistence_ObjectStorage();
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
	 * Returns the textType
	 *
	 * @return string $textType
	 */
	public function getTextType() {
		return $this->textType;
	}

	/**
	 * Sets the textType
	 *
	 * @param string $textType
	 * @return void
	 */
	public function setTextType($textType) {
		$this->textType = $textType;
	}

	/**
	 * Adds a Photo
	 *
	 * @param Tx_Edfu_Domain_Model_Photo $photo
	 * @return void
	 */
	public function addPhoto(Tx_Edfu_Domain_Model_Photo $photo) {
		$this->photos->attach($photo);
	}

	/**
	 * Removes a Photo
	 *
	 * @param Tx_Edfu_Domain_Model_Photo $photoToRemove The Photo to be removed
	 * @return void
	 */
	public function removePhoto(Tx_Edfu_Domain_Model_Photo $photoToRemove) {
		$this->photos->detach($photoToRemove);
	}

	/**
	 * Returns the photos
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Edfu_Domain_Model_Photo> $photos
	 */
	public function getPhotos() {
		return $this->photos;
	}

	/**
	 * Sets the photos
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Edfu_Domain_Model_Photo> $photos
	 * @return void
	 */
	public function setPhotos(Tx_Extbase_Persistence_ObjectStorage $photos) {
		$this->photos = $photos;
	}

	/**
	 * Adds a Literature
	 *
	 * @param Tx_Edfu_Domain_Model_Literature $literature
	 * @return void
	 */
	public function addLiterature(Tx_Edfu_Domain_Model_Literature $literature) {
		$this->literature->attach($literature);
	}

	/**
	 * Removes a Literature
	 *
	 * @param Tx_Edfu_Domain_Model_Literature $literatureToRemove The Literature to be removed
	 * @return void
	 */
	public function removeLiterature(Tx_Edfu_Domain_Model_Literature $literatureToRemove) {
		$this->literature->detach($literatureToRemove);
	}

	/**
	 * Returns the literature
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Edfu_Domain_Model_Literature> $literature
	 */
	public function getLiterature() {
		return $this->literature;
	}

	/**
	 * Sets the literature
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Edfu_Domain_Model_Literature> $literature
	 * @return void
	 */
	public function setLiterature(Tx_Extbase_Persistence_ObjectStorage $literature) {
		$this->literature = $literature;
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