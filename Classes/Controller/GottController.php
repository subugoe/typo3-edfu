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
class Tx_Edfu_Controller_GottController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * godRepository
	 *
	 * @var Tx_Edfu_Domain_Repository_GottRepository
	 * @inject
	 */
	protected $gottRepository;

	/**
	 * @var Tx_Edfu_Domain_Model_Position
	 * @inject
	 */
	protected $position;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$gods = $this->gottRepository->findAll();
		$this->view
				->assign('gods', $gods)
				->assign('position', $this->position);
	}

	/**
	 * action show
	 *
	 * @param Tx_Edfu_Domain_Model_Gott $god
	 * @return void
	 */
	public function showAction(Tx_Edfu_Domain_Model_Gott $god) {
		$this->view->assign('god', $god);
	}

}
?>