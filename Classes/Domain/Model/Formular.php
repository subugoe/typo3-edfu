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
class Formular extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

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
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Photo>
	 * @lazy
	 */
	protected $photos;

	/**
	 * Literature
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ipf\Edfu\Domain\Model\Literatur>
	 * @lazy
	 */
	protected $literature;

	/**
	 * Position
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
		$this->photos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->literature = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
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
	 * @param Photo $photo
	 * @return void
	 */
	public function addPhoto(Photo $photo) {
		$this->photos->attach($photo);
	}

	/**
	 * Removes a Photo
	 *
	 * @param Photo $photoToRemove The Photo to be removed
	 * @return void
	 */
	public function removePhoto(Photo $photoToRemove) {
		$this->photos->detach($photoToRemove);
	}

	/**
	 * Returns the photos
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Photo> $photos
	 */
	public function getPhotos() {
		return $this->photos;
	}

	/**
	 * Sets the photos
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Photo> $photos
	 * @return void
	 */
	public function setPhotos(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $photos) {
		$this->photos = $photos;
	}

	/**
	 * Adds a Literature
	 *
	 * @param \Ipf\Edfu\Domain\Model\Literatur $literature
	 * @return void
	 */
	public function addLiterature(\Ipf\Edfu\Domain\Model\Literatur $literature) {
		$this->literature->attach($literature);
	}

	/**
	 * Removes a Literature
	 *
	 * @param \Ipf\Edfu\Domain\Model\Literatur $literatureToRemove The Literature to be removed
	 * @return void
	 */
	public function removeLiterature(\Ipf\Edfu\Domain\Model\Literatur $literatureToRemove) {
		$this->literature->detach($literatureToRemove);
	}

	/**
	 * Returns the literature
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ipf\Edfu\Domain\Model\Literatur> $literature
	 */
	public function getLiterature() {
		return $this->literature;
	}

	/**
	 * Sets the literature
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ipf\Edfu\Domain\Model\Literatur> $literature
	 * @return void
	 */
	public function setLiterature(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $literature) {
		$this->literature = $literature;
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