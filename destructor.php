<?php
class destruct{
		public function __destruct()
	{
		echo"good bye";
	}
	public $name;
	public $age;
	function __construct($name,$age)
	{
		$this->name=$name;
		$this->age=$age;
		echo" name: {$this->name}<br> age:{$this->age}<br>";
	}

}
$obj=new destruct("rokon",24);
unset($obj);
?>