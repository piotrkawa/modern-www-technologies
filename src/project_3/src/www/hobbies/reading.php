<?php
  require_once(__DIR__."../../../php/content_generators/PageGenerator.php");
  require_once(__DIR__."../../../php/content_generators/ReadingGenerator.php");
  require_once(__DIR__."/../../php/content_generators/CommentsGenerator.php");
  require_once(__DIR__."/../../php/database_utilities/CommentsUtility.php");
  require_once("../../setup.php");

  $pageGenerator = new PageGenerator;
  $cssStyles = array("../../css/styles.css");
  $jsFiles = array("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js", "../../js/imageLoadUtility.js", "../../js/comments.js", "../../js/reading.js");
  $head      = $pageGenerator->generateHead("Piotr Kawa - Czytanie", $cssStyles, $jsFiles);

  $contentGenerator = new ReadingGenerator;
  $mainPagePath     = "../index.php";
  $semestersPrefix  = "../../www/semesters/";
  $hobbyPath        = "hobbies.php";
  $imagePath        = "../../img/logo.png";

  $navbar = $contentGenerator->generateNavbar($mainPagePath, $imagePath, $semestersPrefix, $hobbyPath);

  $panorama = $contentGenerator->generatePanorama("Czytanie", "../../img/reading_bg_low_res.png");

  $year2018 = $contentGenerator->generateYear("2018",
                                              array(
                                                $contentGenerator->generateBookPanel("Gynvael Coldwind", "../../img/zrozumiec_programowanie.png", "Książka, która powinna znajdować się w biblioteczce każdego programisty. Idealna dla początkujących jako wprowadzanie, dobre przypomnienie podstawowych faktów dla zaawansowanych. "),
                                                $contentGenerator->generateBookPanel("Scott Ian", "../../img/anthrax.png", "Autobiografia lidera Anthrax - zespołu należącego do Wielkiej Czwórki Thrash Metalu. Ciekawe historie opisujące powstanie jednych z najbardziej ikonicznych albumów thrash metalu. ")
                                              ));

  $year2017 = $contentGenerator->generateYear("2017",
                                              array(
                                                $contentGenerator->generateBookPanel("Gang Of Four", "../../img/gang_of_four.png", "Wymyślanie koła na nowo może być ciekawe, ale z punktu biznesowego jest stratą czasu. Warto uczyć się od najlepszych i stosować do dobrych, wielokrotnie sprawdzonych rozwiązań. "),
                                                $contentGenerator->generateBookPanel("Maurycy Nowakowski", "../../img/riverside.png", "Autobiografia lidera Anthrax - zespołu należącego do Wielkiej Czwórki Thrash Metalu. Ciekawe historie opisujące powstanie jednych z najbardziej ikonicznych albumów thrash metalu. ")
                                              ));

  $year2016 = $contentGenerator->generateYear("2016",
                                              array(
                                                $contentGenerator->generateBookPanel("Robert C. Martin", "../../img/clean_code.png", "Czasy tworzenia oprogramowania przez jedną osobę odeszły. Zapoznanie się z zasadami pisania kodu, który inni są w stanie łatwo zrozumieć, jest wymogiem bycia dobrym programistą. "),
                                                $contentGenerator->generateBookPanel("Herman Melville", "../../img/moby_dick.png", "Pogoń za białym kaszalotem czyli szaleństwo, okaleczenie oraz zemsta. Jednej z perełek literatury światowej, którą każdy powinien poznać.")
                                              ));

  $yearsSection = $contentGenerator->generateYearsSection(array($year2018, $year2017, $year2016));
  $commentsSection = (new CommentsGenerator)->generateCommentsSection(2);
  $main   = $contentGenerator->generateMain(array($panorama, $yearsSection, $commentsSection));
  $body   = $pageGenerator->generateBody(array($navbar, $main, $contentGenerator->generateFooter()));
  echo $pageGenerator-> generatePageStructure(array($head,$body));
?>
