<?php
abstract class car
{
	protected $tankval;	
	public function settankval($value)
	{
		$this->tankval=$value;
	}
	abstract public function caltankval();
}
class bmw extends car{
	public function caltankval()
	{
		return $this->tankval*17;
	}
}
class tasla extends car{
	public function caltankval()
	{
		return $this->tankval*5;
	}
}
$obj=new bmw();
$obj->settankval(5);
echo"bmw go to this range:".$obj->caltankval();
?>