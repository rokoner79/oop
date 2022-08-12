<?php
class constructor {
	public $name;
	public $id;
	public function __construct($name,$id)
	{
		$this->name=$name;
		$this->id=$id;
		echo "name is: {$this->name} id is: {$this->id}";
	}
}
 $name="rokon";
 $id=1;
 new constructor($name,$id);
?>