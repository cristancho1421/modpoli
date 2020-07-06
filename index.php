<?php 
require_once("include/initialize.php");  
if (!isset($_SESSION['StudentID'])) {
  # code...
  redirect('login.php');
}
$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) { 
  case 'lesson':
    $title = "Lección";
    $content = 'lesson.php';
   # code...
   break; 
  case 'exercises':
    $title = "Ejercicios";
    $content = 'exercises.php';
   # code...
   break; 
  case 'download':
    $title = "Descargas";
    $content = 'download.php';
   # code...
   break; 
  case 'about':
    $title = "Acerca De";
    $content = 'about.php';
   # code...
   break; 
  case 'playvideo':
    $title = "Reproducir Video";
    $content = 'playvideo.php';
   # code...
   break; 
  case 'viewpdf':
    $title = "Play Video";
    $content = 'viewpdf.php';
   # code...
   break; 
  case 'question':
    $title = "Preguntas";
    $content = 'question.php';
   # code...
   break; 
  case 'quizresult':
    $title = "Resultados";
    $content = 'quizresult.php';
   # code...
   break; 
   case 'quienessomos':
    $title ="Quienes Somos";
    $content = "quienessomos.php";
    # code...
  break;
  case 'lainstitucion':
    $title ="La Institucion";
    $content = "lainstitucion.php";
    # code...
  break;
  default :
    $title = "Home";
    $content    = 'home.php';
}
require_once("theme/templates.php");
?>