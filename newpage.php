<?php
print <<<END
<!DOCTYPE html>
<html>
<head>
</head>
<body>
Hello Monica!
END;

$first = "Monica";
$middle = "Grace";
$last = "Maceli";

$age = 39;

echo $last . ", " . $first . " " . $middle . "(" . $age . ")<p>";

$in_five = $age + 5;

$difference = 2034-date("Y");

$months = $age*12;

print "In one year you will be: ".(++$age);

print <<<FOOTER
</body>
</html>
FOOTER;
?>
