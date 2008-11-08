<?php

function MakeDirectory($NewFolder)
{
	$path = $_ENV['TM_DIRECTORY'] . "/" . $NewFolder;
	
	if(!file_exists($path))
	{
		mkdir($path,0777);
	}
}

function CreateFile($NewFile)
{
	$path = $_ENV['TM_DIRECTORY'] . "/" . $NewFile;
	
	if(!file_exists($path))
	{
		fopen($path, "w");
	}	
}

?>