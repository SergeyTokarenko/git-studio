<?php

	//$object = new Point;
	$object = new Point(1, 2, 3);
	$object->Drow();
	

	//$object_2 = new Point;
	$object = new Point(4, 5, 6);
	$object->Drow();

	$object = new Point("Me", 1998, "PDF");
	$object->Drow();



	class Point
	{
		public $x;
		public $y;
		public $char;

		 function Point($x, $y, $char) {
		 	$this->_x = $x;
		 	$this->_y = $y;
		 	$this->_char = $char;
		 }

		 function Drow () {
		 	echo "Переменная x = $this->_x <br>"."Переменная y = $this->_y <br>"."Переменная char = $this->_char <br>";
		 }
	}

/*
// Создаем новый класс Coor:
class Coor {
// данные (свойства):
public $x; // или так (var $x;)
public $y; // или так (var $y;)
public $char; // или так (var $char;)

// методы:
function Getname() {
	echo "Значение переменной x = $this->_x <br>" . " Значение переменной x = $this->_y <br>" . " Значение переменной x = $this->_char <br>";
}

function Setname($x, $y, $char) {
	$this->_x = $x;
	$this->_y = $y;
	$this->_char = $char;
}

}


$object = new Coor;			// Создаем объект класса Coor:
$object->Setname(1, 2, 3); 
$object->Getname();	

$object_2 = new Coor;	
$object->Setname(4, 5, 6);   // Теперь для изменения имени используем метод Setname():
$object->Getname();			// А для доступа, как и прежде, Getname():
*/
?>