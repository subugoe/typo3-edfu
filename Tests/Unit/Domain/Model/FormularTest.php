<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 *  			Sven-S. Porst <porst@sub.uni-goettingen.de>
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class tx_edfu_domain_model_formular.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Edfu
 *
 * @author Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 * @author Sven-S. Porst <porst@sub.uni-goettingen.de>
 */
class Tx_Edfu_Domain_Model_FormTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var tx_edfu_domain_model_formular
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new tx_edfu_domain_model_formular();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTransliterationReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTransliterationForStringSetsTransliteration() { 
		$this->fixture->setTransliteration('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTransliteration()
		);
	}
	
	/**
	 * @test
	 */
	public function getTranslationReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTranslationForStringSetsTranslation() { 
		$this->fixture->setTranslation('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTranslation()
		);
	}
	
	/**
	 * @test
	 */
	public function getTextTypeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTextTypeForStringSetsTextType() { 
		$this->fixture->setTextType('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTextType()
		);
	}
	
	/**
	 * @test
	 */
	public function getPhotosReturnsInitialValueForObjectStorageContainingTx_Edfu_Domain_Model_Photo() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getPhotos()
		);
	}

	/**
	 * @test
	 */
	public function setPhotosForObjectStorageContainingTx_Edfu_Domain_Model_PhotoSetsPhotos() { 
		$photo = new Tx_Edfu_Domain_Model_Photo();
		$objectStorageHoldingExactlyOnePhotos = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOnePhotos->attach($photo);
		$this->fixture->setPhotos($objectStorageHoldingExactlyOnePhotos);

		$this->assertSame(
			$objectStorageHoldingExactlyOnePhotos,
			$this->fixture->getPhotos()
		);
	}
	
	/**
	 * @test
	 */
	public function addPhotoToObjectStorageHoldingPhotos() {
		$photo = new Tx_Edfu_Domain_Model_Photo();
		$objectStorageHoldingExactlyOnePhoto = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOnePhoto->attach($photo);
		$this->fixture->addPhoto($photo);

		$this->assertEquals(
			$objectStorageHoldingExactlyOnePhoto,
			$this->fixture->getPhotos()
		);
	}

	/**
	 * @test
	 */
	public function removePhotoFromObjectStorageHoldingPhotos() {
		$photo = new Tx_Edfu_Domain_Model_Photo();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($photo);
		$localObjectStorage->detach($photo);
		$this->fixture->addPhoto($photo);
		$this->fixture->removePhoto($photo);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getPhotos()
		);
	}
	
	/**
	 * @test
	 */
	public function getLiteratureReturnsInitialValueForObjectStorageContainingTx_Edfu_Domain_Model_Literature() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getLiterature()
		);
	}

	/**
	 * @test
	 */
	public function setLiteratureForObjectStorageContainingTx_Edfu_Domain_Model_LiteratureSetsLiterature() { 
		$literature = new Tx_edfu_domain_model_literatur();
		$objectStorageHoldingExactlyOneLiterature = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneLiterature->attach($literature);
		$this->fixture->setLiterature($objectStorageHoldingExactlyOneLiterature);

		$this->assertSame(
			$objectStorageHoldingExactlyOneLiterature,
			$this->fixture->getLiterature()
		);
	}
	
	/**
	 * @test
	 */
	public function addLiteratureToObjectStorageHoldingLiterature() {
		$literature = new Tx_edfu_domain_model_literatur();
		$objectStorageHoldingExactlyOneLiterature = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneLiterature->attach($literature);
		$this->fixture->addLiterature($literature);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneLiterature,
			$this->fixture->getLiterature()
		);
	}

	/**
	 * @test
	 */
	public function removeLiteratureFromObjectStorageHoldingLiterature() {
		$literature = new Tx_edfu_domain_model_literatur();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($literature);
		$localObjectStorage->detach($literature);
		$this->fixture->addLiterature($literature);
		$this->fixture->removeLiterature($literature);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getLiterature()
		);
	}
	
	/**
	 * @test
	 */
	public function getPositionReturnsInitialValueForObjectStorageContainingTx_Edfu_Domain_Model_Stelle() {
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getPosition()
		);
	}

	/**
	 * @test
	 */
	public function setPositionForObjectStorageContainingTx_Edfu_Domain_Model_StelleSetsPosition() {
		$position = new Tx_Edfu_Domain_Model_Stelle();
		$objectStorageHoldingExactlyOnePosition = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOnePosition->attach($position);
		$this->fixture->setPosition($objectStorageHoldingExactlyOnePosition);

		$this->assertSame(
			$objectStorageHoldingExactlyOnePosition,
			$this->fixture->getPosition()
		);
	}
	
	/**
	 * @test
	 */
	public function addPositionToObjectStorageHoldingPosition() {
		$position = new Tx_Edfu_Domain_Model_Stelle();
		$objectStorageHoldingExactlyOnePosition = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOnePosition->attach($position);
		$this->fixture->addPosition($position);

		$this->assertEquals(
			$objectStorageHoldingExactlyOnePosition,
			$this->fixture->getPosition()
		);
	}

	/**
	 * @test
	 */
	public function removePositionFromObjectStorageHoldingPosition() {
		$position = new Tx_Edfu_Domain_Model_Stelle();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($position);
		$localObjectStorage->detach($position);
		$this->fixture->addPosition($position);
		$this->fixture->removePosition($position);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getPosition()
		);
	}
	
}
?>