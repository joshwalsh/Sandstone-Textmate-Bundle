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

function OpenFile($Filespec, $LineNumber = 0, $ColumnNumber = 0)
{
	$LineNumber++;
	$ColumnNumber++;

	$path = $_ENV['TM_PROJECT_DIRECTORY'] . "/" . $Filespec;
	
	if (file_exists($path))
	{
		$url = "txmt://open?url=file://{$path}&line={$LineNumber}&column={$ColumnNumber}";
		OpenURL($url);
	}
}

?>