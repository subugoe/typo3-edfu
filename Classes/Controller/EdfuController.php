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
class EdfuController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @var string
	 */
	protected $jQueryPath;

	/**
	 * @var \Ipf\Edfu\Service\BandService
	 * @inject
	 */
	protected $bandService;

	public function initializeAction() {
		if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('t3jquery')) {
			$this->jQueryPath = \tx_t3jquery::getJqJSBE(TRUE);
		} else {
			throw new Exception('Please create your jQuery Library using EXT:t3jquery', 1359463747);
		}
	}

}
?>