<?php // Script 13.2 - functions.php

	ini_set('display error', 1);
	error_reporting(E_ALL);

	function is_administrator ($name = 'Samuel', $value = 'Clemens') 
	{
		if (isset($_COOKIE[$name]) && ($_COOKIE[$name] == $value))	
		{
			return true;
		}
		else
		{
			return false;
		}
	} // End of is_administrator() function.