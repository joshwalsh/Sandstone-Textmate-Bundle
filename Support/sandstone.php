<?php

require('lib/environment.php');
require('lib/file.php');
require('lib/web.php');

function RescanProject()
{
	`osascript &>/dev/null \
   		-e 'tell app "SystemUIServer" to activate'; \
 	osascript &>/dev/null \
   		-e 'tell app "TextMate" to activate' &`;
}

function ENV($Variable)
{
	$Variable = strtoupper($Variable);
	
	return $_ENV['TM_' . $Variable];
}


?>