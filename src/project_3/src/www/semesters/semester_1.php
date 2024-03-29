<?php
  require_once(__DIR__."../../../php/content_generators/PageGenerator.php");
  require_once(__DIR__."../../../php/content_generators/SemestersGenerator.php");
  require_once(__DIR__."../../../php/content_generators/CommentsGenerator.php");

  require_once("../../setup.php");
  
  $pageGenerator = new PageGenerator;
  $cssStyles = array("../../css/styles.css");  
  $jsFiles = array("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js", "../../js/comments.js", "../../js/semester_1.js");
  $head      = $pageGenerator->generateHead("Piotr Kawa - Semestr I", $cssStyles, $jsFiles);

  $contentGenerator = new SemestersGenerator;

  $mainPagePath     = "../index.php";
  $semestersPrefix  = "../../www/semesters/";
  $hobbyPath        = "../hobbies/hobbies.php";
  $imagePath        = "../../img/logo.png";

  $lectures = array(
    array("Analiza Matematyczna I", "Całkować", "Różniczkować"),
    array("Algebra z Geometrią Analityczną", "Operacje na macierzach", "Obliczenia na liczbach zespolonych"),
    array("Wstęp do Informatyki i Programowania", "Podstawowych pojęć informatycznych", "Podstaw języka C"),
    array("Logika i Struktury Formalne", "Tautologii", "Podstawowych kwantyfikatorów"));


  $navbar = $contentGenerator->generateNavbar($mainPagePath, $imagePath, $semestersPrefix, $hobbyPath);

  $semesters = $contentGenerator->generateLectures(array(
    $contentGenerator->generateLecture("Analiza Matematyczna I", array("\( \int dx = x + C \)", "Różniczkować"), array("Dokładną treść tw. Cauchy'ego", "Zastosowania całek w przemyśle")),
    $contentGenerator->generateLecture("Algebra z Geometrią Analityczną", array("Operacje na macierzach", "Obliczenia na liczbach zespolonych"), array("Lepiej rozwiązywać układy liniowe", "Ortogonalizacji")),
    $contentGenerator->generateLecture("Wstęp do Informatyki i Programowania", array("Podstawowych pojęć informatycznych", "Podstaw języka C"), array("Operacji na wskaźnikach", "Najnowszego standardu języka C")),
    $contentGenerator->generateLecture("Logika i Struktury Formalne", array("\( \\neg (p \wedge q) \\leftrightarrow (\\neg p \\vee \\neg q) \)", "Podstawowych kwantyfikatorów"), array("Struktur Formalnych", "Więcej nt. kwantyfikatorów"))
  ));

  $semestersWithHeader = $contentGenerator->generateSemesterWithHeader("Semestr I", "Zima 2015/2016", $semesters);

  $commentsSection = (new CommentsGenerator())->generateCommentsSection(5);
  $main   = $contentGenerator->generateMain(array($semestersWithHeader, $commentsSection));
  $body   = $pageGenerator->generateBody(array($navbar, $main, $contentGenerator->generateFooter()));

  echo $pageGenerator-> generatePageStructure(array($head, $body));
?>
