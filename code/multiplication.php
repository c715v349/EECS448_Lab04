<html>
<body>
	<?php

		echo '<table>';
		for ($i = 0; $i < 101; $i++)
		{
			echo '<tr>';
			if ($i == 0)
			{
				echo "<td>&nbsp;</td>";
				for ($j = 1; $j < 101; $j++)
				{
					echo "<td>$j</td>";
				}
			}
			else
			{
				echo "<td>$i</td>";
				for ($j = 1; $j < 101; $j++)
				{
					echo '<td>' . $i*$j . '</td>';
				}
			}    
			echo '</tr>';
		}
		echo '</table>';

	?>
</body>
</html>
