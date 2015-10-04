<?php
echo <<<_END
<html><head><title>PHP-форма для загрузки файлов на сервер</title></head><body>
<form method='post' action='up.php' enctype='multipart/form-data'>
Выберите файл: <input type='file' name='filename' size='10'>
<br>
Выберите файл: <input type='file' name='filename_2' size='10'>
<br>
<input type='submit' value='Загрузить'>
</form>
_END;
if ($_FILES)
{
$name = $_FILES['filename']['name'];
$name_2 = $_FILES['filename_2']['name'];
move_uploaded_file($_FILES['filename']['tmp_name'], $name);
move_uploaded_file($_FILES['filename_2']['tmp_name'], $name_2);
if ($name and $name_2) { 
	echo "Загружаемое изображение '$name'<br><img src='$name'>";
	echo "<br>Загружаемое изображение '$name_2'<br><img src='$name_2'>";
} elseif ($name && !$name_2) {
	echo "<br>Загружаемое изображение '$name'<br><img src='$name'>";
} elseif (!$name && $name_2) {
	echo "Загружаемое изображение '$name_2'<br><img src='$name_2'>";
	}
}
echo "</body></html>";
?>