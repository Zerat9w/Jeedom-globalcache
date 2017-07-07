<?php
	try {
		require_once dirname(__FILE__) . '/../../../../core/php/core.inc.php';
		include_file('core', 'authentification', 'php');

		if (!isConnect('admin')) {
			throw new Exception(__('401 - Accès non autorisé', __FILE__));
		}
		throw new Exception(__('Aucune methode correspondante à : ', __FILE__) . init('action'));
	} catch (Exception $e) {
		ajax::error(displayExeption($e), $e->getCode());
	}
?>