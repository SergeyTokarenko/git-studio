<?php 

if (isset($_GET['submit'])) {
	$name = strip_tags($_GET['name']);
	$surname = strip_tags($_GET['surname']);
}

//$color = $_GET['color'];



if(empty($name)) {
	$name = 'Гость';
echo <<<END
<h1>Hello</h1>


Здравствуй: $name.

<form action="" method="GET">
	<input type="text" name="name" placeholder="Введите имя"><br>
	<input type="text" name="surname" placeholder="Введите Фамилию"><br>
	<input type="submit"  name="submit" value="Отправить">
</form>

END;
}

else {
echo <<<END
<h1>Hello</h1>
Здравствуй: $name $surname.
<br>
END;

?>
	Что бы вернуться нажмите на  <a href=' <?php  echo  $_SERVER['PHP_SELF']; ?>'>ссылку</a>
<?php

}



/*
 $b = array('name' => Sergey, 
 			'surname' => Tokarenko,
 			'ear' => 17
 			);
 
 print_r($b);


$array = array(100 => 0, "color" => "red", "img" => "photo");
print_r(array_keys($array));

echo "<br>";

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

echo "<br>";

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));


echo '<hr>';

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4, 'black' => 5);
$array2 = array('green' => 6, 'blue' => 7, 'yellow' => 8, 'cyan'   => 9, 'black' => 10);

var_dump(array_intersect_key($array1, $array2));
*/
?>