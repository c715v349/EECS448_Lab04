<?php
	$totalPoints = 0;
	echo "Question 1:  What is 1+1?</br>";
	echo "You answered: " . $_POST["q1"] . '</br>';
	echo "Correct answer: 2</br></br>";
	if ($_POST["q1"] == "2"){
		$totalPoints++;
	}
	echo "Question 2:  What is a cat?</br>";
	echo "You answered: " . $_POST["q2"] . '</br>';
	echo "Correct answer: feline</br></br>";
	if ($_POST["q2"] == "feline"){
		$totalPoints++;
	}
	echo "Question 3: Who is George Washington?</br>";
	echo "You answered: " . $_POST["q3"] . '</br>';
	echo "Correct answer: former president</br></br>";
	if ($_POST["q3"] == "former president"){
		$totalPoints++;
	}
	echo "Question 4: About how many taste buds do dogs have?</br>";
	echo "You answered: " . $_POST["q4"] . '</br>';
	echo "Correct answer: 1700</br></br>";
	if ($_POST["q4"] == "1700"){
		$totalPoints++;
	}
	echo "Question 5: What gets wet when drying?</br>";
	echo "You answered: " . $_POST["q5"] . '</br>';
	echo "Correct answer: towels</br></br>";
	if ($_POST["q5"] == "towels"){
		$totalPoints++;
	}	
	
	echo "You answered " . $totalPoints . " questions correctly.</br>";
	echo "Your total score percentage is " . ($totalPoints/5*100) . "%";
?>