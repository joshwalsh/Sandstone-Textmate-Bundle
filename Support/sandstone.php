<?php

function Using($Library)
{
	switch (strtolower($Library))
	{
		case 'file':
			require('lib/file.php');
			break;
	}
}

function RescanProject()
{
	`osascript &>/dev/null \
   		-e 'tell app "SystemUIServer" to activate'; \
 	osascript &>/dev/null \
   		-e 'tell app "TextMate" to activate' &`;
}
?>