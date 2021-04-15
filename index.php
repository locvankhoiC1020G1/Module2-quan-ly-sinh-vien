<?php
include_once "Student.php";
include_once "StudentManager.php";
$student1 = new Student("khoi", "26");
$student1->addScore("1", "1", "4");
$studentManager = new StudentManager("data.json");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
</table>
</body>
</html>
