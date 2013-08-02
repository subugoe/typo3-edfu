<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
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
 * Test case for class \Ipf\Edfu\Domain\Model\Ort.
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
class \Ipf\Edfu\Domain\Model\OrtTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var \Ipf\Edfu\Domain\Model\Ort
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Ipf\Edfu\Domain\Model\Ort();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTranslationReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTranslationForStringSetsTranslation() { 
		$this->fixture->setUebersetzung('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getUebersetzung()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setOrtsbeschreibung('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOrtsbeschreibung()
		);
	}
	
	/**
	 * @test
	 */
	public function getPositionReturnsInitialValueForObjectStorageContaining\Ipf\Edfu\Domain\Model\Stelle() {
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getPosition()
		);
	}

	/**
	 * @test
	 */
	public function setPositionForObjectStorageContaining\Ipf\Edfu\Domain\Model\StelleSetsPosition() {
		$position = new \Ipf\Edfu\Domain\Model\Stelle();
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
		$position = new \Ipf\Edfu\Domain\Model\Stelle();
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
		$position = new \Ipf\Edfu\Domain\Model\Stelle();
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