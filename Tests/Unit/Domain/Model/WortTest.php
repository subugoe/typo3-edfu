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
 * Test case for class Tx_Edfu_Domain_Model_Wort.
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
class Tx_Edfu_Domain_Model_WortTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Edfu_Domain_Model_Wort
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Edfu_Domain_Model_Wort();
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
	public function getNotesReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNotesForStringSetsNotes() { 
		$this->fixture->setNotes('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getNotes()
		);
	}
	
	/**
	 * @test
	 */
	public function getHieroglyphReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setHieroglyphForStringSetsHieroglyph() { 
		$this->fixture->setHieroglyph('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getHieroglyph()
		);
	}
	
	/**
	 * @test
	 */
	public function getBerlinReturnsInitialValueForObjectStorageContainingTx_Edfu_Domain_Model_Berlin() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getBerlin()
		);
	}

	/**
	 * @test
	 */
	public function setBerlinForObjectStorageContainingTx_Edfu_Domain_Model_BerlinSetsBerlin() { 
		$berlin = new Tx_Edfu_Domain_Model_Berlin();
		$objectStorageHoldingExactlyOneBerlin = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneBerlin->attach($berlin);
		$this->fixture->setBerlin($objectStorageHoldingExactlyOneBerlin);

		$this->assertSame(
			$objectStorageHoldingExactlyOneBerlin,
			$this->fixture->getBerlin()
		);
	}
	
	/**
	 * @test
	 */
	public function addBerlinToObjectStorageHoldingBerlin() {
		$berlin = new Tx_Edfu_Domain_Model_Berlin();
		$objectStorageHoldingExactlyOneBerlin = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneBerlin->attach($berlin);
		$this->fixture->addBerlin($berlin);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneBerlin,
			$this->fixture->getBerlin()
		);
	}

	/**
	 * @test
	 */
	public function removeBerlinFromObjectStorageHoldingBerlin() {
		$berlin = new Tx_Edfu_Domain_Model_Berlin();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($berlin);
		$localObjectStorage->detach($berlin);
		$this->fixture->addBerlin($berlin);
		$this->fixture->removeBerlin($berlin);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getBerlin()
		);
	}
	
	/**
	 * @test
	 */
	public function getPositionReturnsInitialValueForObjectStorageContainingTx_Edfu_Domain_Model_Position() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getPosition()
		);
	}

	/**
	 * @test
	 */
	public function setPositionForObjectStorageContainingTx_Edfu_Domain_Model_PositionSetsPosition() { 
		$position = new Tx_Edfu_Domain_Model_Position();
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
		$position = new Tx_Edfu_Domain_Model_Position();
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
		$position = new Tx_Edfu_Domain_Model_Position();
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