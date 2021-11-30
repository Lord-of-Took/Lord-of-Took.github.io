<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Таблица номеров</title>
 </head>
<body>
 <?php
$arr = [
		['name' => 'Арбузов', 'number' => 89901717171],
		['name' => 'Баранов', 'number' => 89991111111],
		['name' => 'Васильев', 'number' => 89912317191],
		['name' => 'Громыко', 'number' => 89501292908],
		['name' => 'Деникин', 'number' => 89901917191],
	];
	echo '<table>';
	foreach ($arr as $user) {
		echo '<tr>';
		
		echo "<td>{$user['name']}</td>";
		echo "<td>{$user['number']}</td>";
		
		echo '</tr>';
	}
	echo '</table>';
?>
 </body>
</html>
