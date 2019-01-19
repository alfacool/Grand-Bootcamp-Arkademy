<?php
include 'config.php';

$sql = "CREATE TABLE persons ( 
			id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			name VARCHAR(30) NOT NULL)";
$conn->query($sql);
$sql = "INSERT INTO persons (id ,name)
		VALUES 
		('1','nurhadi'),
		('2','aldo'),
		('3','dodi')";
$conn->query($sql);
$sql = "CREATE TABLE hobbies ( 
			id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			person_id INT(3) UNSIGNED,
			name VARCHAR(30) NOT NULL,
			FOREIGN KEY (person_id) REFERENCES persons(id)
			)ENGINE=INNODB";
$conn->query($sql);
$sql = "INSERT INTO hobbies (id ,person_id,name)
		VALUES 
		('1','1','Bird watching'),
		('2','1','Martial arts'),
		('3','2','Hiking'),
		('4','1','Archery'),
		('5','2','Beekeeping'),
		('6','3','Book restoration')";
$conn->query($sql);


$sql = "SELECT persons.id as person_id, persons.name as name, hobbies.name as person_hobbies FROM hobbies
	INNER JOIN persons on (hobbies.id=persons.id)
	GROUP BY name";
$stmt = $conn->prepare($sql);
$stmt->execute();
echo'<table border="1" >'; 
while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
echo'
	<tr>
	<td>'. $row['person_id'] .'</td>
	<td>'. $row['name'] .'</td>
	<td rowspan="">'. $row['person_hobbies'] .'</td></tr>';	
	
}
echo'

	</table>';


?>