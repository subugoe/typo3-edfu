<?php

class Tx_Edfu_Ajax_Formular {

	/**
	 * @var string
	 */
	protected $term;

	public function __construct() {
		$this->term = filter_var($_GET['term'], FILTER_SANITIZE_STRING);
		
	}

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
}