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
class Tx_Edfu_Controller_OrtController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * placeRepository
	 *
	 * @var Tx_Edfu_Domain_Repository_OrtRepository
	 * @inject
	 */
	protected $ortRepository;

	/**
	 * @var Tx_Edfu_Service_BandService
	 * @inject
	 */
	protected $bandService;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {

		$baende = $this->bandService->getBaende();
		$places = $this->ortRepository->findAll();
		$this->view
				->assign('places', $places)
				->assign('baende', $baende)
				->assign('position', $this->position);
	}

	/**
	 * action show
	 *
	 * @param Tx_Edfu_Domain_Model_Ort $place
	 * @return void
	 */
	public function showAction(Tx_Edfu_Domain_Model_Ort $place) {
		$this->view->assign('place', $place);
	}

}
?>