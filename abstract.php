<?php
abstract class a{
	public $class; 
	public function message($value) /* Abstract class er vitor abstract method*/
	{
		$this->class=$value;
	}
}
class b extends a{ /*class b extends class a [Solution: a er age class dear drkar nai*/
public function message2()
	{
		echo"rokon2";
	}
}
 $obj = new b(4);
$obj->message2();
?>