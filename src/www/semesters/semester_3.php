<?php
  require_once(__DIR__."../../../php/PageGenerator.php");
  require_once(__DIR__."../../../php/SemestersGenerator.php");



  $pageGenerator = new PageGenerator;
  $cssStyles = array("../../css/reset.css","../../css/main_style.css","../../css/grid.css", "../../css/education.css", "../../css/education.css", "../../css/semesters_style.css");
  $head      = $pageGenerator->generateHead("Semestr III", $cssStyles, null);

  $contentGenerator = new SemestersGenerator;

  $mainPagePath     = "../index.php";
  $semestersPrefix  = "../../www/semesters/";
  $hobbyPath        = "../hobbies/hobbies.php";
  $imagePath        = "../../img/logo.png";

  $navbar = $contentGenerator->generateNavbar($mainPagePath, $imagePath, $semestersPrefix, $hobbyPath);

  $semesters = $contentGenerator->generateLectures(array(
    $contentGenerator->generateLecture("Technologia Programowania", array("Najważniejszych wzorców projektowych", "Język Java"), array("Dokładniej poznać wzorce projektowe", "Wielowątkowość w Javie")),
    $contentGenerator->generateLecture("Bazy Danych i Systemy Informacyjne", array("Algebry Relacji", "Podstaw SQL"), array("Poszerzyć wiedzę dot. SQL", "Bazy danych NoSQL")),
    $contentGenerator->generateLecture("Architektura Komputerów i Systemy Operacyjne", array("Programować w Assembly", "Działania systemu Linux"), array("Więcej nt. programowania w Assembly", "Napisać własny OS")),
    $contentGenerator->generateLecture("Metody Probablistyczne i Statystyka", array("Podstaw obliczania prawdopodobieństwa", "Kombinatoryki"), array("Grafy losowe", "Więcej nt. przestrzeni probablistycznych"))
  ));

  $semestersWithHeader = $contentGenerator->generateSemesterWithHeader("Semestr II", "2015/2016", $semesters);

  $main   = $contentGenerator->generateMain(array($semestersWithHeader));
  $body   = $pageGenerator->generateBody(array($navbar, $main));
  echo $pageGenerator-> generatePageStructure(array($head, $body));



?>
