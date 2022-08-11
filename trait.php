<?php
trait p{
	public function php()
	{
		echo" my favourite language is php";
	}
}
trait c{
	public function cp()
	{
		echo" my favourite language is c";
	}
}

class program{
	use p;
	use c;
}
$program= new program();
$program->php();
echo"<br>";
$program->cp();

?>