<?php

function MakeDirectory($NewFolder)
{
	$path = ENV('directory') . "/" . $NewFolder;
	
	if(!file_exists($path))
	{
		mkdir($path,0777);
	}
}

function CreateFile($NewFile)
{
	$path = ENV('directory') . "/" . $NewFile;
	
	if(!file_exists($path))
	{
		fopen($path, "w");
	}	
}

function OpenFile($Filespec, $LineNumber = 0, $ColumnNumber = 0)
{
	$LineNumber++;
	$ColumnNumber++;

	$path = ENV('project_directory') . "/" . $Filespec;
	
	if (file_exists($path))
	{
		$url = "txmt://open?url=file://{$path}&line={$LineNumber}&column={$ColumnNumber}";
		OpenURL($url);
	}
}

?>