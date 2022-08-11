<?php
class a{
	public static function welcome()
	{
		echo "Welcome to our site1";
	}
	public function welcome2()
	{
		self::welcome();
	}
	}
	$var = new a();
	$var->welcome2();

?>