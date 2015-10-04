<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Загрузка файла</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php

if ($_FILES['userfile']['error'] > 0) {
	echo "Ошибка:";

	switch ($_FILES['userfile']['error']) {
		case 1:
			echo "Размер файла больше допустимого (upload_max_filesize в php.ini)"; // MAX 2M
			break;
		case 2:
			echo "Размер файла больше допустимого (max_file_size в форме)";
			break;
		case 3:
			echo "Загружена только часть файла";
			break;
		case 4:
			echo "Файл не был загружен";
			break;
		case 6:
			echo "Загрузка невозможна: не задан временный каталог";
			break;
		case 7:
			echo "Загрузка невозможна: невозможна запись на диск";
			break;
	}

	exit();
}

if ($_FILES['userfile']['type'] != 'text/plain') {
	echo "Данный файл не является текстовым";
	exit();
}

//Указывает где сохранять файл (в папке 'uploads' )

$upfile = 'uploads/' . $_FILES['userfile']['name'];

//Проверяем, действительно файт был загружен по HTTP методом POST

if (is_uploaded_file($_FILES['userfile']['tmp_name'])) { //'is_uploaded_file' проверяем был ли файл загружен методом post
	if (! move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile)) { //'move_uploaded_file' проверяем был ли файл загружен методом post если true перемещает его в указанное место  $upfile
		echo "Невозможно переместить файл в каталог назначения";
		exit();
	}
}
else {
	echo "Возможна атака через загрузку файла!";
	exit();
}

echo '<p>Файл успешно загружен.</p>';
echo 'Имя файла: ' . $_FILES['userfile']['name'] . "<br>";

$file_content = file_get_contents($upfile); //'Содержимое файла' результат работы  'file_get_contents' 

//Вывод содержимого загруженого файла
echo "Содержимое загруженного файла: <br><hr>";

echo nl2br($file_content);



// maine типы здесь https://ru.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_MIME-%D1%82%D0%B8%D0%BF%D0%BE%D0%B2
?>
	<p><a href="upload.html">Загрузить другой файл</a></p>
</body>
</html>