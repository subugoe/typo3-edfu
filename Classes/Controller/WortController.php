<?php
namespace Ipf\Edfu\Controller;

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
class WortController extends EdfuController {

	/**
	 * wordRepository
	 *
	 * @var \Ipf\Edfu\Domain\Repository\WortRepository
	 * @inject
	 */
	protected $wordRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$words = $this->wordRepository->findAll();
		$this->view->assign('words', $words);
	}

	/**
	 * action show
	 *
	 * @param \Ipf\Edfu\Domain\Model\Wort $word
	 * @return void
	 */
	public function showAction(\Ipf\Edfu\Domain\Model\Wort $word) {
		$this->view->assign('word', $word);
	}

}
?>