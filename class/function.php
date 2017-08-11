<?php

function shortText($text , $long)
{

	$text = $text." ";
	$text = substr($text,0,$long);
	$text = substr($text, 0 , strrpos($text, ' '));
	$text = $text."...";

	return $text;


}



?>