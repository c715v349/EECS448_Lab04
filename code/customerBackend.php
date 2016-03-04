<?php
	
	echo '<link href= "style.css"
		rel= "stylesheet"
		type= "text/css" />';
		
	echo '<p class = "back">' . "Thanks for shopping, " . $_POST["username"] . "!" . '</p>';
	echo '<p class = "back">' . "Your password: " . $_POST["password"] . '</p>';
	
	echo '<p class = "receipt">' . "Your Receipt:" . '</p>';
	
	(int) $htotal = $_POST["human"];
	(int) $dtotal = $_POST["dino"];
	(int) $ftotal = $_POST["feces"];
	$stotal = 0;
	$stype = "";

	if ($_POST["shipping"] == "Free 7 day")
	{
		(int) $stotal = 0;
		$stype = "Free";
	}
	else if ($_POST["shipping"] == "$50.00 over night")
	{
		(int) $stotal = 50;
		$stype = "Express";
	}
	else if ($_POST["shipping"] == "$5.00 three day")
	{
		(int) $stotal = 5;
		$stype = "Standard";
	}
	(int) $total = ($htotal*30)+($dtotal*50)+($ftotal*10)+$stotal;
	
	echo "<table><tr><td>&nbsp;</td>". "<td>Quantity</td>". "<td>Cost Per Item</td>". "<td>Sub Total</td></tr>";
	echo "<tr><td>Human Bones</td>" . "<td>".$htotal."</td>" . "<td>"."$30.00"."</td>" . "<td>"."$".$htotal*30 .".00"."</td></tr>";
	echo "<tr><td>Dinosaur Bones</td>" . "<td>".$dtotal."</td>" . "<td>"."$50.00"."</td>" . "<td>"."$".$dtotal*50 .".00"."</td></tr>";
	echo "<tr><td>Feces</td>" . "<td>".$ftotal."</td>" . "<td>"."$10.00"."</td>" . "<td>"."$".$ftotal*10 .".00"."</td></tr>";
	echo '<tr><td>'."Shipping"."</td>" . '<td colspan = "2">'.$stype."</td>" . "<td>"."$".$stotal.".00"."</td>";
	echo '<tr><td colspan = "3">'."Total Cost"."</td>" ."<td>"."$".$total.".00"."</td>" ;
	echo '</table>';

?>
