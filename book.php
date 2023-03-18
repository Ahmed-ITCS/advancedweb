<?php

class book{
	private $name;
	private $author;
	private $price;
	public function __construct()
	{
		echo"contructor invoked";
	}
	public function setname($n)
	{
		$this->name = $n;
	}
	public function setauthor($n)
	{
		//echo " running";
		$this->author = $n;
	}
	public function setprice($n)
	{
		$this->price = $n;
	}
	public function getname()
	{
		return $this->name;
	}
	public function getauthor()
	{
		return $this->author;
	}
	public function getprice()
	{
		return $this->price;
	}
}

$b1 = new book();
echo "<br>";
$b1->setname("the story of randomness");
$b1->setauthor("Ahmed Khawar");
$b1->setprice(50000);
echo $b1->getname()."   ".$b1->getauthor()."   ".$b1->getprice();

?>