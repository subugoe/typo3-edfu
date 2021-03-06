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
class OrtController extends EdfuController {

	/**
	 * placeRepository
	 *
	 * @var \Ipf\Edfu\Domain\Repository\OrtRepository
	 * @inject
	 */
	protected $ortRepository;

	/**
	 * action list
	 * @param \Ipf\Edfu\Domain\Model\Ort $ort
	 * @dontvalidate $ort
	 * @return void
	 */
	public function listAction(\Ipf\Edfu\Domain\Model\Ort $ort = NULL) {
		$baende = $this->bandService->getBaende();
		$places = $this->ortRepository->findAll();
		$this->view
				->assign('ort', $ort)
				->assign('places', $places)
				->assign('jQuery', $this->jQueryPath)
				->assign('baende', $baende);
	}

	/**
	 * action show
	 *
	 * @param \Ipf\Edfu\Domain\Model\Ort $place
	 * @return void
	 */
	public function showAction(\Ipf\Edfu\Domain\Model\Ort $place) {
		$this->view->assign('place', $place);
	}


	/**
	 * @param \Ipf\Edfu\Domain\Model\Ort $ort
	 */
	public function createAction(\Ipf\Edfu\Domain\Model\Ort $ort) {
		$this->ortRepository->add($ort);
		$this->controllerContext->getFlashMessageQueue()->addMessage(
			new \TYPO3\CMS\Core\Messaging\FlashMessage(
				$ort->getUebersetzung() . ' gespeichert', '', \TYPO3\CMS\Core\Messaging\FlashMessage::INFO
			)
		);
		$this->forward('list');
	}

}
?>