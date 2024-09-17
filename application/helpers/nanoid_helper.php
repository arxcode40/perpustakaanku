<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('nanoid'))
{
	function nanoid($e = 21)
	{
		$a = 'useandom-26T198340PX75pxJACKVERYMINDBUSHWOLF_GQZbfghjklqvwyzrict';
		$t = '';

		for ($n = 0; $n < $e; $n++)
		{
			$r = random_int(0, 63);
			$t .= $a[63 & $r];
		}

		return $t;
	}
}
