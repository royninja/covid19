<?php
	header("refresh: 60; url = http://127.0.0.1/covid");
	$confirmUrl="https://api.covid19india.org/data.json";
	$confirmJson=file_get_contents($confirmUrl);
	$confirmArray=json_decode($confirmJson,true);
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
?>