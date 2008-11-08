<?php

require('lib/environment.php');
require('lib/file.php');
require('lib/web.php');

function RescanProject()
{
	`rescan_project`;
}

function ENV($Variable)
{
	$Variable = strtoupper($Variable);
	
	return $_ENV['TM_' . $Variable];
}

?>