<?php

function SelectedText()
{
	return ENV('selected_text');
}

function LineNumber()
{
	// Make line number 0 based
	return ENV('line_number') - 1;
}

function ColumnNumber()
{
	// Make column number 0 based
	return ENV('column_number') - 1;
}

function ProjectDirectory()
{
	return ENV('project_directory');
}

function CurrentFile()
{
	return ENV('filepath');
}

?>