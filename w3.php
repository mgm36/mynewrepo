<?php
print <<<END
<!DOCTYPE html>
<html>
<head>
</head>
<body>
Hello Monica!
END;

# Conditionals
# if, else, elseif

$tempf = 2;
$sky = "Wind";

if (($tempf >= 32) && ($tempf <= 80)) {
	echo "<p>It's not freezing, so don't worry about falling on ice.</p>";
} elseif ($tempf > 80) {
	echo "<p>Uh oh, it's hot!</p>";
} else {
	echo "It's super cold";
}

# Switch statement

switch ($sky) {
	case "A little cloudy":
		echo ":(";
		break;
	case "Sunny":
		echo ":)";
		break;
	case "Windy":
		echo ";)";
		break;
	default:
		echo "No idea";
		break;
}

$speed = 76;
$birthday = "0131";
$current_date = date("md");
$no_ticket_max = 61;
$small_ticket_max = 80;

if ($birthday==$current_date) {
	echo "It's your birthday!";
	echo "Your speed before was $speed, but it's your birthday so I changed it to: ".($speed-5)." <p>";
	echo $speed;
}

if ($speed < 61) {
	echo "No ticket!";
} elseif (($speed >= 61) && ($speed <= 80)) {
	echo "Small ticket!";
} else {
	echo "Big ticket!";
}

# while

# do while

$counter = 1;
do {
	echo "BAD BAD TOO FAST TOO FAST<br>";
	++$counter;
	if ($counter==8) {
		break;
	}
} while (($speed > 80) && ($counter < 11));

# for 

for ($counter = 1; $counter < 6; ++$counter) {
	echo "Right now \$counter is $counter <br>";
}


$change_due = 30;


# multiplication tables!


echo '<table border=1>';

# each row print a tr tag
$num_times_table = 4;

for ($c = 1;$c <= $num_times_table;++$c) {
	echo '<tr>';

	for ($inner_counter = 1;$inner_counter <= $num_times_table;++$inner_counter){
		if ($c==$inner_counter) {
			echo '<td style="color:red;">';
		} else {
			echo '<td>';
		}
		echo $c*$inner_counter;
		echo '</td>';
	}
	echo '</tr>';
}

echo '</table>';





print <<<FOOTER
</body>
</html>
FOOTER;
?>
