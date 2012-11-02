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
class Tx_Edfu_Domain_Model_Position extends Tx_Extbase_DomainObject_AbstractValueObject {

	/**
	 * Start page
	 *
	 * @var integer
	 */
	protected $pageStart;

	/**
	 * End page
	 *
	 * @var integer
	 */
	protected $endPage;

	/**
	 * Start line
	 *
	 * @var integer
	 */
	protected $lineStart;

	/**
	 * End line
	 *
	 * @var integer
	 */
	protected $lineEnd;

	/**
	 * Notes
	 *
	 * @var string
	 */
	protected $note;

	/**
	 * Doubtful stop
	 *
	 * @var boolean
	 */
	protected $stopDoubtful = FALSE;

	/**
	 * Returns the pageStart
	 *
	 * @return integer $pageStart
	 */
	public function getPageStart() {
		return $this->pageStart;
	}

	/**
	 * Sets the pageStart
	 *
	 * @param integer $pageStart
	 * @return void
	 */
	public function setPageStart($pageStart) {
		$this->pageStart = $pageStart;
	}

	/**
	 * Returns the endPage
	 *
	 * @return integer $endPage
	 */
	public function getEndPage() {
		return $this->endPage;
	}

	/**
	 * Sets the endPage
	 *
	 * @param integer $endPage
	 * @return void
	 */
	public function setEndPage($endPage) {
		$this->endPage = $endPage;
	}

	/**
	 * Returns the lineStart
	 *
	 * @return integer $lineStart
	 */
	public function getLineStart() {
		return $this->lineStart;
	}

	/**
	 * Sets the lineStart
	 *
	 * @param integer $lineStart
	 * @return void
	 */
	public function setLineStart($lineStart) {
		$this->lineStart = $lineStart;
	}

	/**
	 * Returns the lineEnd
	 *
	 * @return integer $lineEnd
	 */
	public function getLineEnd() {
		return $this->lineEnd;
	}

	/**
	 * Sets the lineEnd
	 *
	 * @param integer $lineEnd
	 * @return void
	 */
	public function setLineEnd($lineEnd) {
		$this->lineEnd = $lineEnd;
	}

	/**
	 * Returns the note
	 *
	 * @return string $note
	 */
	public function getNote() {
		return $this->note;
	}

	/**
	 * Sets the note
	 *
	 * @param string $note
	 * @return void
	 */
	public function setNote($note) {
		$this->note = $note;
	}

	/**
	 * Returns the stopDoubtful
	 *
	 * @return boolean $stopDoubtful
	 */
	public function getStopDoubtful() {
		return $this->stopDoubtful;
	}

	/**
	 * Sets the stopDoubtful
	 *
	 * @param boolean $stopDoubtful
	 * @return void
	 */
	public function setStopDoubtful($stopDoubtful) {
		$this->stopDoubtful = $stopDoubtful;
	}

	/**
	 * Returns the boolean state of stopDoubtful
	 *
	 * @return boolean
	 */
	public function isStopDoubtful() {
		return $this->getStopDoubtful();
	}

}
?>