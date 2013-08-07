<?php
namespace Ipf\Edfu\Ajax;

use \TYPO3\CMS\Core\Utility\GeneralUtility;

class Formular {

	/**
	 * @var string
	 */
	protected $term;

	public function __construct() {
		$this->term = filter_var($_GET['term'], FILTER_SANITIZE_STRING);
		
	}

	/**
	 * Get textType suggestions
	 *
	 * @return void
	 */
	public function getTextTypSuggestions() {

		$res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
			'DISTINCT(texttyp) as textType, texttyp',
			'tx_edfu_domain_model_formular',
			' texttyp LIKE \'%' . $this->term . '%\'',
			'',
			'',
			'25');

		$results = array();

		while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
			array_push($results, $row['textType']);
		}

		echo(json_encode($results));
	}

	/**
	 * Get literature suggestions
	 *
	 * @return void
	 */
	public function getLiteraturSuggestions() {
		$res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
					'beschreibung',
					'tx_edfu_domain_model_literatur',
					' beschreibung LIKE \'%' . $this->term . '%\'',
					'',
					'',
					'25');

		$results = array();

		while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
			array_push($results, $row['beschreibung']);
		}

		echo(json_encode($results));
	}

	/**
	 * @return void
	 */
	public function getPhotoSuggestions() {

		$host = '10.0.4.9';
		$port = '8080';
		$path = '/solr/edfu/';

		/** @var tx_solr_ConnectionManager $solrConnection  */
		$solrConnection = GeneralUtility::makeInstance('tx_solr_ConnectionManager')->getConnection($host, $port, $path);

		/** @var tx_solr_Search $search  */
		$search = GeneralUtility::makeInstance('tx_solr_Search', $solrConnection);


		/** @var tx_solr_Query $query  */
	 	$query = GeneralUtility::makeInstance('tx_solr_Query');
		$query->setQueryString('typ:formular AND photo_collection: '. $this->term);
		$query->useRawQueryString(TRUE);
		$search->search($query);

		$resultDocuments = $search->getResultDocuments();
		echo (json_encode($resultDocuments));
	}

	/**
	 * Suggestions for photos
	 */
	public function getSinglePhotoSuggestions() {
		$res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
					'filename',
					'tx_edfu_domain_model_photo',
					'filename LIKE \'' . $this->term . '%\'',
					'',
					'',
					'25');

		$results = array();

		while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
			array_push($results, $row['filename']);
		}

		echo(json_encode($results));
	}

	/**
	 * Check if stelle exists
	 */
	public function checkStelle() {
		if ($_POST) {
			$stelle = array();
			$stelle['bandUid'] = (intval($_POST['bandUid'])) + 1;
			$stelle['seiteStart'] = intval($_POST['seiteStart']);
			$stelle['seiteStop'] = intval($_POST['seiteStop']);
			$stelle['zeileStart'] = intval($_POST['zeileStart']);
			$stelle['zeileStop'] = intval($_POST['zeileStop']);
			$result = self::checkExistingStelle($stelle);
			echo json_encode($result);
		}
	}

	/**
	 * @param array $stelle
	 * @return string
	 */
	protected function checkExistingStelle($stelle) {
		/** @var \Ipf\Edfu\Domain\Repository\StelleRepository $stelleRepository */
		$stelleRepository = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('Ipf\Edfu\Domain\Repository\StelleRepository');
		return $stelleRepository->findStelleByLiteratureParameters($stelle);
	}

	/**
	 * adds a stelle to the repository
	 */
	public function addStelle() {
		if ($_POST) {
			$stelle = array();
			$stelle['bandUid'] = (intval($_POST['bandUid'])) + 1;
			$stelle['seiteStart'] = intval($_POST['seiteStart']);
			$stelle['seiteStop'] = intval($_POST['seiteStop']);
			$stelle['zeileStart'] = intval($_POST['zeileStart']);
			$stelle['zeileStop'] = intval($_POST['zeileStop']);

			/** @var \Ipf\Edfu\Domain\Repository\StelleRepository $stelleRepository */
			$stelleRepository = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('Ipf\Edfu\Domain\Repository\StelleRepository');

			echo json_encode(
				array(
					"inserted" => $stelleRepository->addNewStelle($stelle),
					"insertedId" => $GLOBALS['TYPO3_DB']->sql_insert_id()
				)
			);
		}
	}

}