<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title> harjutus-3 </title>
</head>
<body>
<h1> Muutujad </h1>

<?php
    $variable = 5;
    echo $variable;
    // Lisan veebilehitsejas parema loetavuse saamiseks reamurdmise elemendi:
    echo "<br>";
?>
<?php
    $variable = 10;
    echo $variable;
?>
<h1> Stringid </h1>
<?php echo "Hello world!"; ?>
<br>
<?php echo 'Hello world!'; ?>
<br>
<?php
    $variable = 24;
    echo $variable;
?>
<?php
    $variable = 26;
    echo $variable;
?>

<h2> Nimekirja väljastamine muutujate ja ssstringide abil </h2>

<ul>
<?php
    $student1 = "Mihkel";
    $student2 = "Heiko";
    $student3 = "Marko";
    $student4 = "Ingrid";
    $firstName = "Markus";
    $lastName = "J6emets";
    $fullName = $firstName . " " . $lastName;

    $test = "testimine";

    $age = "20";
echo "Ma olen $age-e aastane";

    echo "<li>" . $student1 . "</li>" ;
    echo "<li>" . $student2 . "</li>" ;
    echo "<li>" . $student3 . "</li>" ;
    echo "<li>" . $student4 . "</li>" ;
    echo "<li>" . $firstName . "</li>" ;
    echo "<li>" . $lastName . "</li>" ;
    echo "<li>" . $fullName . "</li>" ;
    echo "$test kas interpolatsioon töötab";
?>
</ul>


</body>
</html>