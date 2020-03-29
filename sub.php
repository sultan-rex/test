<?php
 // print $boxvalue=$_POST['sel'];
 //$servername="localhost";
 $username="root";
 $password="root";

 $conn = new PDO("mysql:host=localhost;dbname=test",$username,$password);

 $sql=$conn->query("select * from employee");
 $sql->execute();
 $row=$sql->FetchAll();
echo '<pre>';
 // print_r($row);
?>
 <table>
 	<thead>
 		<td>ID</td>
 		<td>NAme</td>
 		<td>Age</td>
 	</thead>
 	<tbody>


 		<tr>
 			<td>te</td>
 			<td>df</td>
 			<td>dsf</td>
 		</tr>



 		<!-- <?php  foreach($row as $key=>$value)
 		{

 			echo '<tr>'



 			.$value['id'].'</tr>';
 		}
 		?> -->
 	</tbody>
 </table>

