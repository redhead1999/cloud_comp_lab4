<!DOCTYPE html>
<html>
<head>
	<title>Стоимость предоставляемых услуг STACK24</title>
	<meta http-equiv="Content-Type"
         content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
	header("Content-type: text/html; Charset=UTF-8;"); 
	//Создание объекта и загрузка в него документа
	$sxml = simplexml_load_file("catalog.xml");
?>	
<html>
	<head>
		<title>Стоимость предоставляемых услуг STACK24</title>
	</head>
	<body>
	<h1>Список услуг</h1>
	<table border="1" width="100%">
		<tr>
			<th>Услуга</th>
			<th>Название</th>
			<th>Год издания</th>
			<th>Цена, руб</th>
		</tr>
<?php
	//  Вывод всех книг в цикле
	foreach ($sxml->book as $book) {
		echo "<tr>";
		echo "<td>", $book->author, "</td>";
		echo "<td>", $book->title, "</td>";
		echo "<td>", $book->pubyear, "</td>";
		echo "<td>", $book->price, "</td>";
		echo "</tr>";
	}
?>
	</table>
</body>
</html>

