<?php
	// Forbindelse til MySQL server med mysqli metoden

	//1. Konstanter til forbindelsesdata TIL LOCALHOST
	const HOSTNAME = 'linemirellaknudsen.dk.mysql';
	const MYSQLUSER = 'linemirellaknudsen_dk_kuplen';
	const MYSQLPASS = '';
	const MYSQLDB = 'linemirellaknudsen_dk_kuplen';

	// 2. Opretteforbindelsen vi mysqli objekt
	$conn = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

		// Definere et character-set (utf 8) for forbindelsen
		$conn->set_charset('utf8');
?>