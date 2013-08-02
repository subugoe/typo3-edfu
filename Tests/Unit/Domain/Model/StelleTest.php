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
 * Test case for class \Ipf\Edfu\Domain\Model\Stelle.
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
class \Ipf\Edfu\Domain\Model\StelleTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var \Ipf\Edfu\Domain\Model\Stelle
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Ipf\Edfu\Domain\Model\Stelle();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getPageStartReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSeiteStart()
		);
	}

	/**
	 * @test
	 */
	public function setPageStartForIntegerSetsPageStart() { 
		$this->fixture->setSeiteStart(12);

		$this->assertSame(
			12,
			$this->fixture->getSeiteStart()
		);
	}
	
	/**
	 * @test
	 */
	public function getEndPageReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSeiteStop()
		);
	}

	/**
	 * @test
	 */
	public function setEndPageForIntegerSetsEndPage() { 
		$this->fixture->setSeiteStop(12);

		$this->assertSame(
			12,
			$this->fixture->getSeiteStop()
		);
	}
	
	/**
	 * @test
	 */
	public function getLineStartReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZeileStart()
		);
	}

	/**
	 * @test
	 */
	public function setLineStartForIntegerSetsLineStart() { 
		$this->fixture->setZeileStart(12);

		$this->assertSame(
			12,
			$this->fixture->getZeileStart()
		);
	}
	
	/**
	 * @test
	 */
	public function getLineEndReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZeileStop()
		);
	}

	/**
	 * @test
	 */
	public function setLineEndForIntegerSetsLineEnd() { 
		$this->fixture->setZeileStop(12);

		$this->assertSame(
			12,
			$this->fixture->getZeileStop()
		);
	}
	
	/**
	 * @test
	 */
	public function getNoteReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNoteForStringSetsNote() { 
		$this->fixture->setAnmerkung('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAnmerkung()
		);
	}
	
	/**
	 * @test
	 */
	public function getStopDoubtfulReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getStopUnsicher()
		);
	}

	/**
	 * @test
	 */
	public function setStopDoubtfulForBooleanSetsStopDoubtful() { 
		$this->fixture->setStopUnsicher(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getStopUnsicher()
		);
	}
	
}
?>