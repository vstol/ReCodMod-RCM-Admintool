<?php

if(!file_exists($cpath . 'cache/cache.sqlite')){
	  
 try
  {
    $dbc = new PDO('sqlite:'. $cpath . 'cache/cache.sqlite');

    $dbc->exec("CREATE TABLE geodb (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, country varchar(100), city varchar(100), icode varchar(100), numbers int(10), percents int(10))"); 
 
  $dbc->exec("CREATE TABLE another (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, xcountry varchar(100), xcity varchar(100), xicode varchar(100), xnumbers int(10), xpercents int(10))"); 
 
    $dbc = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }  	
	
  }

function hx($sc)
 {
  $sc = str_replace(array(
    "top-cache.php"
  ), '', $sc);
  return $sc . "";
 $sc = str_replace(array(
    "top_geo.php"
  ), '', $sc);
  return $sc . "";
 $sc = str_replace(array(
    "top.php"
  ), '', $sc);
  return $sc . "";
 $sc = str_replace(array(
    "index.php"
  ), '', $sc);
  return $sc . "";
 }
$x_ff  = 0;
$cpath = hx(__FILE__);


$curxxx = $_SERVER['SCRIPT_NAME'];

$curxxx = (md5($curxxx.$specialxcache));

if ( (isset($_GET['page'])) || (isset($_GET['style']))|| (isset($_GET['server'])) )
{
 
if ((!empty($_GET['server'])) && (!empty($_GET['style']))){
    $pager = $_GET['server']; 
 $cache_file = $pager.'_'.$_GET['style'].'_'.$curxxx;
$cache_file = $cpath.'cache/'.$cache_file.".html"; 

    }
else if ((!empty($_GET['server'])) && (!empty($_GET['page']))){
    $pager = $_GET['server']; 
 $cache_file = $pager.'_'.$_GET['page'].'_'.$curxxx;
$cache_file = $cpath.'cache/'.$cache_file.".html"; 

    }
else if (!empty($_GET['page'])){
    $cache_file = $pager = $_GET['page'];
 $cache_file = $pager.'_'.$curxxx.'_'.$curxxx;
$cache_file = $cpath.'cache/'.$cache_file.".html"; 

	} 
else if (!empty($_GET['server'])){
    $pager = $_GET['server']; 
 $cache_file = $pager.'_'.$curxxx;
$cache_file = $cpath.'cache/'.$cache_file.".html"; 

    }
else if (!empty($_POST['server'])){
    $pager = $_POST['server']; 
 $cache_file = $pager.'_'.$curxxx;
$cache_file = $cpath.'cache/'.$cache_file.".html"; 

    }else{
     $cache_file = $pager = $_GET['style'];
 $cache_file = $pager.'_'.$curxxx; 

$cache_file = $cpath.'cache/'.$cache_file.".html"; 

	 } 


 ///$cache_file = $pager;
}
else // La variable n'existe pas, c'est la première fois qu'on charge la page
{
     $file = strrchr($_SERVER["SCRIPT_NAME"], "/");// Получаем название файла
    $file = substr($file, 1); // Удаляем слеш





 $cache_file = $cpath.'/cache/'.$file.".html"; // Файл будет находиться, например, в /cache/a.php.html




}


$cache_time = 60*4; // Время жизни кэша в секундах
if (file_exists($cache_file)) {
    // Если файл с кэшем существует
    if ((time() - $cache_time) < filemtime($cache_file)) {
      // Если его время жизни ещё не прошло
      echo file_get_contents($cache_file); // Выводим содержимое файла
      exit; // Завершаем скрипт, чтобы сэкономить время на дальнейшей обработке
    }
  }
  ob_start(); // Открываем буфер для вывода, если кэша нет, или он устарел
?>

