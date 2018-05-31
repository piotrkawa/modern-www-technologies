<?php
  require_once(__DIR__."../../../php/content_generators/PageGenerator.php");
  require_once(__DIR__."../../../php/content_generators/SemestersGenerator.php");

  $pageGenerator = new PageGenerator;
  $cssStyles = array("../../css/reset.css",
                     "../../css/main_style.css",
                     "../../css/grid.css",
                     "../../css/semesters.css");
  $head      = $pageGenerator->generateHead("Piotr Kawa - Semestr V", $cssStyles, null);

  $contentGenerator = new SemestersGenerator;

  $mainPagePath     = "../index.php";
  $semestersPrefix  = "../../www/semesters/";
  $hobbyPath        = "../hobbies/hobbies.php";
  $imagePath        = "../../img/logo.png";

  $navbar = $contentGenerator->generateNavbar($mainPagePath, $imagePath, $semestersPrefix, $hobbyPath);

  $semesters = $contentGenerator->generateLectures(array(
    $contentGenerator->generateLecture("Kryptografia", array("\( d \cdot e \\equiv 1 \cdot (mod\\varphi(n)) \)", "Działania podstawowych szyfrów blokowych"), array("Działania najnowszych algorytmów szyfrujących", "Dokładniej poznać działanie SHA-3")),
    $contentGenerator->generateLecture("Programowanie zespołowe", array("JavaScript (ES6)", "Szacowania czasu wykonania zadania"), array("Dowodzenia zespołem", "Lepszej organizacji pracy")),
    $contentGenerator->generateLecture("Obliczenia Naukowe", array("\( rd(x) = (1 + \delta )\)", "Rozwiązywania liniowych układów"), array("Algorytmy macierzowe", "Pisania jeszcze bezpieczeniejszych numerycznie algorytmów")),
    $contentGenerator->generateLecture("Języki Formalne i Techniki Translacji", array("\( DFA = ( Q, \sum, \delta, q_{0}, F) \)", "Budowy kompilatora"), array("Poszerzonego lematu o pompowaniu", "Budowy interpretera")),
    $contentGenerator->generateLecture("Wprowadzenie do Topologii i Teorii Miar", array("\( K_{o,r} = \{p :\\rho(p,0) \lt r \}\)", "Różnych metryk"), array("Jeszcze więcej metryk", "Więcej nt. kul i sfer")),
    $contentGenerator->generateLecture("Metody Wytwarzania Oprogramowania", array("Organizować pracę i zasoby", "React Native"), array("Lepiej szacować ryzyko projektowe", "React JS"))
  ));

  $semestersWithHeader = $contentGenerator->generateSemesterWithHeader("Semestr V", "Zima 2017/2018", $semesters);

  $main   = $contentGenerator->generateMain(array($semestersWithHeader));
  $body   = $pageGenerator->generateBody(array($navbar, $main, $contentGenerator->generateFooter()));
  echo $pageGenerator-> generatePageStructure(array($head, $body));
?>
