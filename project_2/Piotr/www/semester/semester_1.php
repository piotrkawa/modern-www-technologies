<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>PHP intro</title>
  <!-- <link rel="stylesheet" href="css/intro.css"> -->
  <link rel="stylesheet" type="text/css" href="../../css/main_style.css">
  <link rel="stylesheet" type="text/css" href="../../css/grid.css">
  <link rel="stylesheet" type="text/css" href="../../css/education.css">
  <link rel="stylesheet" type="text/css" href="../../css/semesters_style.css">
</head>

<body>
<div id="container">
<?php
  require_once(__DIR__."/../../php/SemestersGenerator.php");

  $generator = new SemestersGenerator;
  $lecturesNames = array("Analiza Matematyczna I", "Algebra z Geometrią Analityczną", "Wstęp do Informatyki i Programowania", "Logika i Struktury Formalne");

  $lectures = array();
  array_push($lectures, $generator->renderLecture("Analiza Matematyczna I", ":)", ":)"));


  echo $generator->renderNavbar();
  echo $generator->renderMain($lectures[0]);

?>
<br>
</div>
</body>
</html>
