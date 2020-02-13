<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>

<table border="2px" width="500px" height="500px">

	
<?php

for($row = 1; $row<=8; $row++){
	
	echo "<tr bgcolor='#000000'>";

		for($column = 1; $column<=8; $column++){

			$total = $row+$column;
				
				if($total%2==0){

					echo "<td bgcolor='#ffffff'></td>";

				}
				else{
					echo "<td></td>";
				}		
	}

	"</tr>";

}

?>

</table>

</body>

</html>