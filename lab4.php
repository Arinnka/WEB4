<?php
		$link = mysqli_connect('localhost','root','','task');
		//������������������
	if(mysqli_connect_errno()) die('����������������: '.mysqli_connect_error());
	else{ 
	print(' ���������� �����������');
	//������� ������� �� PHP, � ������� ����� �������� ������
		echo '<table border="5">';
		echo '<thead>';
		echo '<tr>';
		echo '<th> �����</th>';
		echo '<th> ��������</th>';
		echo '<th> �������</th>';
	
		echo '</tr>';
		echo '</thead>';
		echo'<tbody>';
	//������ ������ � ����� ��
	$res = mysqli_query($link,"SELECT * FROM `task` ");
	//��������� �������, ��������� ����
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
	//������� ������� ������ -��� ��� �� �����
	}
	//��������� ����������
	mysqli_close($link);
	}
?>
