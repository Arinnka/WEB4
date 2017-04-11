<?php
		$link = mysqli_connect('localhost','root','','task');
		//Проверкасоединения
	if(mysqli_connect_errno()) die('Ошибкасоединения: '.mysqli_connect_error());
	else{ 
	print(' Соединение установлено');
	//Создаем таблицу на PHP, в которую будем выводить данные
		echo '<table border="5">';
		echo '<thead>';
		echo '<tr>';
		echo '<th> Номер</th>';
		echo '<th> Название</th>';
		echo '<th> Продажа</th>';
	
		echo '</tr>';
		echo '</thead>';
		echo'<tbody>';
	//Делаем запрос к нашей БД
	$res = mysqli_query($link,"SELECT * FROM `task` ");
	//Заполняем таблицу, созданную выше
	if($res) { 
	while($row = mysqli_fetch_assoc($res)) {
		echo '<tr>';
		echo '<td>' . $row['idTask'] . '</td>';
		echo '<td>' . $row['name'] . '</td>';
		echo '<td>' . $row['sale'] . '</td>';
		echo '</tr>';	
		}
		echo '</tbody>';
		echo'</table>';
	mysqli_free_result($res); 
	//очищаем занятую память -она уже не нужна
	}
	//Закрываем соединение
	mysqli_close($link);
	}
?>
