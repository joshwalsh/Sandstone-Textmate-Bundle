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
	$path = ProjectDirectory() . "/" . $Filespec;
	
	if (file_exists($path))
	{
		$url = "txmt://open?url=file://{$path}&line={$LineNumber}&column={$ColumnNumber}";
		OpenURL($url);
	}
}

function OpenExternal($Filespec)
{	
	if (file_exists($Filespec))
	{
		shell_exec("mate {$Filespec}");
	}
}

function MoveCursor($LineNumber = 0, $ColumnNumber = 0)
{
	$url = "txmt://open?url=file://" . CurrentFile() . "&line={$LineNumber}&column={$ColumnNumber}";
	OpenURL($url);
}

?>