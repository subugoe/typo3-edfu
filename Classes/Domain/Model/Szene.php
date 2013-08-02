<?php
namespace Ipf\Edfu\Domain\Model;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Ingo Pfennigstorf <pfennigstorf@sub-goettingen.de>
 *      Goettingen State Library
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
 * ************************************************************* */

/**
 * Szene
 */
class Szene extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * @var int
	 */
	protected $nummer;

	/**
	 * @var string
	 */
	protected $beschreibung;

	/**
	 * @param string $beschreibung
	 */
	public function setBeschreibung($beschreibung) {
		$this->beschreibung = $beschreibung;
	}

	/**
	 * @return string
	 */
	public function getBeschreibung() {
		return $this->beschreibung;
	}

	/**
	 * @param int $nummer
	 */
	public function setNummer($nummer) {
		$this->nummer = $nummer;
	}

	/**
	 * @return int
	 */
	public function getNummer() {
		return $this->nummer;
	}

}