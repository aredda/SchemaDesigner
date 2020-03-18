<?php

include 'env.php';

$root = $_SERVER["DOCUMENT_ROOT"] . "/$appn";

/** Auto-loading function */
function load ($directoryPath)
{
	$dir = opendir ($directoryPath);

	while (($item = readdir($dir)) !== false)
		if ( strpos ($item, ".php") )
			include_once "$directoryPath/$item";
}

load ("$root/src/utilities");
load ("$root/src/models");

$manager = new Manager ($host, $user, $pass);
