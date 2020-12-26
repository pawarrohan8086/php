<?php 

$employee =array(
 	array(1, "manish",  "saleman",   20000 ),
 	array(2, "priya",   "HR",        27386),
 	array(3, "chetan",  "developer", 234412),
 	array(4, "bharat",  "manager",   435433)

);

echo "<table border='2px'>";
foreach ($employee as list($id,$name,$post,$salary)) {
	
	echo'<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$post.'</td><td>'.$salary.'</td></tr>';

}
echo "</table>";
 ?>