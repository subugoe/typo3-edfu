<?php

class Tx_Edfu_Ajax_Formular {

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
		$solrConnection = t3lib_div::makeInstance('tx_solr_ConnectionManager')->getConnection($host, $port, $path);

		/** @var tx_solr_Search $search  */
		$search = t3lib_div::makeInstance('tx_solr_Search', $solrConnection);


		/** @var tx_solr_Query $query  */
	 	$query = t3lib_div::makeInstance('tx_solr_Query');
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
}