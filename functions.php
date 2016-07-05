<?php

function print_arr($arr)
{
	echo '<div style="padding: 20px; background-color: #f4f4f4; color: #000;"><pre>';
	print_r($arr);
	echo '</pre></div>';
}

function write_file($text)
{
	$handle = fopen('output.json', 'w+');
	fputs($handle, $text);
	flose($handle);
}

?>