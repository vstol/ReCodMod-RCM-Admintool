<?php


if ( (isset($_GET['page'])) || (isset($_GET['style'])))
{
    if (isset($_GET['page']))
    $pager = $_GET['page']; 
    else
    $pager = $_GET['style']; 
 $cache_file = $pager;
}
else // La variable n'existe pas, c'est la première fois qu'on charge la page
{
     $file = strrchr($_SERVER["SCRIPT_NAME"], "/");// Получаем название файла
    $file = substr($file, 1); // Удаляем слеш
   $cache_file = $file.".html"; // Файл будет находиться, например, в /cache/a.php.html
}


$cache_time = 60*$cachetime; // Время жизни кэша в секундах
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

