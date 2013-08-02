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
 * Test case for class \Ipf\Edfu\Domain\Model\Gott.
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
class \Ipf\Edfu\Domain\Model\GottTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var \Ipf\Edfu\Domain\Model\Gott
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Ipf\Edfu\Domain\Model\Gott();
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
	public function getPlaceReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPlaceForStringSetsPlace() { 
		$this->fixture->setPlace('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPlace()
		);
	}
	
	/**
	 * @test
	 */
	public function getEponymReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEponymForStringSetsEponym() { 
		$this->fixture->setEponym('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEponym()
		);
	}
	
	/**
	 * @test
	 */
	public function getRelationReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setRelationForStringSetsRelation() { 
		$this->fixture->setRelation('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getRelation()
		);
	}
	
	/**
	 * @test
	 */
	public function getFunctionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFunctionForStringSetsFunction() { 
		$this->fixture->setFunction('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFunction()
		);
	}
	
	/**
	 * @test
	 */
	public function getPositionReturnsInitialValueForObjectStorageContaining\Ipf\Edfu\Domain\Model\Stelle() {
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getStelle()
		);
	}

	/**
	 * @test
	 */
	public function setPositionForObjectStorageContaining\Ipf\Edfu\Domain\Model\StelleSetsPosition() {
		$position = new \Ipf\Edfu\Domain\Model\Stelle();
		$objectStorageHoldingExactlyOnePosition = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOnePosition->attach($position);
		$this->fixture->setStelle($objectStorageHoldingExactlyOnePosition);

		$this->assertSame(
			$objectStorageHoldingExactlyOnePosition,
			$this->fixture->getStelle()
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
			$this->fixture->getStelle()
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
			$this->fixture->getStelle()
		);
	}
	
}
?>