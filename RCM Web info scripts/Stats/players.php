<?php
include('top-cache.php');

header('Content-Type: text/html;charset=UTF-8');

echo "<html xmlns='http://www.w3.org/1999/xhtml' lang='ru-RU'>";
    echo "<head>";
    echo "<title>TOP PLAYERS!</title>";
?>

 
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js' type='text/javascript'></script>
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 

<style type="text/css">.cf-hidden { display: none; } .cf-invisible { visibility: hidden; }</style>

<style type="text/css">
/* latin-ext */
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 700;
  src: local('Titillium WebBold'), local('TitilliumWeb-Bold'), url(https://fonts.gstatic.com/s/titilliumweb/v4/anMUvcNT0H1YN4FII8wpr-y7CP8YvcHYdGV61pt7QTE.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 700;
  src: local('Titillium WebBold'), local('TitilliumWeb-Bold'), url(https://fonts.gstatic.com/s/titilliumweb/v4/anMUvcNT0H1YN4FII8wprxP6Eu1_xfSBSoi9uie1FdE.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
</style>
<style type="text/css">body{
background-color:#000000;
background:url(ccc.jpg) repeat;
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */

}form{white-space:nowrap;overflow:hidden;margin:0px;padding0;}input{max-width:100px;background-color:#f5f5f5;padding:5px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #ebebeb;}select{max-width:300px;background-color:#f5f5f5;padding:5px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #ebebeb;}table tr{border-bottom:1pt solid black;}table{font-family:'Titillium Web',sans-serif;min-width:800px;background-color:rgba(100,100,100,0.3);padding:5px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:20px;border:2px solid white;}table td,table th{padding:1px 5px;}table thead{text-shadow:0 1px 0 white;color:#404040;}table th{text-align:center;background-color:#808080;border-radius:5px;}table td{font-size:14px;border-bottom:1pt solid black;}table tr:hover{background-color:rgba(0,0,0,0.2);}p1{font-family:'Titillium Web',sans-serif;font-size:25px;color:white;}.button:hover{background-color:#000000}.button{background-color:#202020;padding:8px 16px;font:13px sans-serif;text-decoration:none;border:1px solid;border-color:red;color:white;cursor:pointer;}center1{position:absolute;top:50%;left:50%;margin-right:-50%;transform:translate(-50%,-50%)}a:link{color:rgba(255,255,255,0.9)}a:visited{color:rgba(255,255,255,0.8)}	}
                </style>
				
 

<style type="text/css">	 
body {
	margin:10px 0 0 10px;
}
 
 .tooltipxo {
	/* задаем стиль внешнего вида */
	padding:3px;
	border:5px solid #333;
	background:lime;
	width:80px;
	color:#222;
	
	/* скрываем */
	display:none;
	
	/* размещаем прямо над текстом-родителем */
	bottom:101%;
	left:15px;
	position:absolute;
}
 
.tooltip {
	/* задаем стиль внешнего вида */
	padding:1px;
	border:1px solid #333;
	background:MEDIUMSEAGREEN;
	width:180px;
	color:#000;
	
	/* скрываем */
	display:none;
	
	/* размещаем прямо над текстом-родителем */
	bottom:101%;
	left:-220px;
	position:absolute;
}

.tooltipg {
	/* задаем стиль внешнего вида */
	padding:1px;
	border:1px solid #333;
	background:MEDIUMSEAGREEN;
	width:240px;
	color:#000;
	
	/* скрываем */
	display:none;
	
	/* размещаем прямо над текстом-родителем */
	bottom:101%;
	left:-170px;
	position:absolute;
}

.tooltipf {
	/* задаем стиль внешнего вида */
	padding:1px;
	border:1px solid #333;
	background:yellow;
	width:98%;
	color:black;
	
	/* скрываем */
	display:none;
	
	/* размещаем прямо над текстом-родителем */
	bottom:1%;
	left:1px;
	position:absolute;
}

.tooltipblue {
	/* задаем стиль внешнего вида */
	padding:1px;
	border:1px solid #333;
	background:SLATEBLUE;
	width:98%;
	color:black;
	
	/* скрываем */
	display:none;
	
	/* размещаем прямо над текстом-родителем */
	bottom:1%;
	left:1px;
	position:absolute;
}

.tooltipteal {
	/* задаем стиль внешнего вида */
	padding:1px;
	border:1px solid #333;
	background:white;
	width:260px;
	color:black;
	
	/* скрываем */
	display:none;
	
	/* размещаем прямо над текстом-родителем */
	bottom:101%;
	left:-30px;
	position:absolute;
}

.tooltipred {
	/* задаем стиль внешнего вида */
	padding:1px;
	border:1px solid #333;
	background:INDIANRED;
	width:98%;
	color:black;
	
	/* скрываем */
	display:none;
	
	/* размещаем прямо над текстом-родителем */
	bottom:1%;
	left:1px;
	position:absolute;
}
.tooltippurple {
	/* задаем стиль внешнего вида */
	padding:1px;
	border:1px solid #333;
	background:REBECCAPURPLE;
	width:98%;
	color:white;
	
	/* скрываем */
	display:none;
	
	/* размещаем прямо над текстом-родителем */
	bottom:1%;
	left:1px;
	position:absolute;
}


	/* при наведении - показываем подсказку */
	td:hover .tooltip {
		display:block;
	}

td {
	/* обязательно, иначе подсказка уедет */
	position:relative;
}

	/* при наведении - показываем подсказку */
	tr:hover .tooltip {
		display:block;
	}

tr {
	/* обязательно, иначе подсказка уедет */
	position:relative;
}

	/* при наведении - показываем подсказку */
	th:hover .tooltipxo {
		display:block;
	}

th {
	/* обязательно, иначе подсказка уедет */
	position:relative;
}
 
 
 
	/* при наведении - показываем подсказку */
	td:hover .tooltip {
		display:block;
	}

td {
	/* обязательно, иначе подсказка уедет */
	position:relative;
}

	/* при наведении - показываем подсказку */
	tr:hover .tooltipf {
		display:block;
	}

		/* при наведении - показываем подсказку */
	tr:hover .tooltipblue {
		display:block;
	}
	
		/* при наведении - показываем подсказку */
	tr:hover .tooltipteal {
		display:block;
	}
	/* при наведении - показываем подсказку */
	tr:hover .tooltippurple {
		display:block;
	}
		/* при наведении - показываем подсказку */
	tr:hover .tooltipg {
		display:block;
	}
	/* при наведении - показываем подсказку */
	tr:hover .tooltipred {
		display:block;
	}	
tr {
	/* обязательно, иначе подсказка уедет */
	position:relative;
}

	/* при наведении - показываем подсказку */
	th:hover .tooltipf {
		display:block;
	}

a, u {
    text-decoration: none;
}
	
select {
   -webkit-appearance: none;
   -moz-appearance: none;
   appearance: none;
color: #777;
   padding: 10px;
   font-size: 16px;
   border: 1px solid #ccc;
   border-top: none;
   background: #fff;
   list-style-type: none;
   padding: 10px;
   margin: 0;
   width: 100%;
   z-index: 100;
}

select::-ms-expand { /* for IE 11 */
    display: none;
color: #777;
   padding: 10px;
   font-size: 16px;
      border: 1px solid #ccc;
   border-top: none;
   background: #eee;
   list-style-type: none;
   padding: 10px;
   margin: 0;
   width: 100%;
   z-index: 100;
}













* {box-sizing: border-box;}

nav {
  display: block;
}
ul {
  list-style: none;
  margin: 0px;
  padding: 0px;
}
a {
  text-decoration: none;
  outline: none;
}
.topmenu {
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
  position: relative;
  background: rgba(255,255,255,.8);
width: 90%;
}
.topmenu:before, .topmenu:after {
  content: "";
  display: table;
  clear: both;
}
.topmenu li {
  display: inline-block;
  position: relative;
}
.link {
  font-family: 'Exo 2', sans-serif;
  display: block;
  height: 27px;
  line-height: 27px;
  padding: 0 30px;
  font-weight: bold;
  color: #ada6ac;
  text-transform: uppercase;
  -webkit-transition: color 0.4s ease-in-out;
  -moz-transition: color 0.4s ease-in-out;
  -o-transition: color 0.4s ease-in-out;
  transition: color 0.4s ease-in-out;
}
.down:after {
  content:"\f107";
  margin-left: 8px;
  font-family: FontAwesome;
}
.link:hover {
  color: #E6855F;
}
.submenu {
  background: #444;
  border: 2px solid #003559;
  position: absolute;
  left: 0;
  visibility: hidden;
  opacity: 0;
  z-index: 10;
  width: 450px;
  -webkit-transform: perspective(600px) rotateX(-90deg);
  -moz-transform: perspective(600px) rotateX(-90deg);
  -ms-transform: perspective(600px) rotateX(-90deg);
  transform: perspective(600px) rotateX(-90deg);
  -webkit-transform-origin: 0% 0%;
  -moz-transform-origin: 0% 0%;
  -ms-transform-origin: 0% 0%;
  transform-origin: 0% 0%;
  -webkit-transition: color 0.4s ease-in-out;
  -moz-transition: color 0.4s ease-in-out;
  -o-transition: color 0.4s ease-in-out;
  transition: 0.6s ease-in-out;
}
.submenu > li {
  display: block;
}
.topmenu li:hover > .submenu{
  visibility: visible;
  opacity: 1;
  -webkit-transform: perspective(600px) rotateX(0deg);
  -moz-transform: perspective(600px) rotateX(0deg);
  -ms-transform: perspective(600px) rotateX(0deg);
  transform: perspective(600px) rotateX(0deg);
}
.submenu li a {
  display: block;
  color: #7f7f7f;
  font-size: 13px;
  line-height: 36px;
  padding: 0 5px;
  font-family: 'Kurale', serif;
}
.submenu li a:hover {
  color: #E6855F;
}

</style>						
	</head>		


<?php

include('configs.php');

  
error_reporting(E_ALL);
ini_set('display_errors', 'On');


/*
if (count($servers)>1)
	{ echo '<center><select name="server" class="dropdown" onchange="window.location=\'top.php?server=\'+this.value;">';
foreach ($servers as $i=>$n){$n = explode('%',$n,4);



		echo '<option value="'.htmlspecialchars($i).'"'.(($i == $server_id)?' selected':'').'>'.colorize(htmlspecialchars($n[2])).'</option>';


}	
echo '</select>';}
*/
echo ' <center>
 <nav>
  <ul class="topmenu">
	 
	<li>
		<a href="#" title="top players"><span class="link down">TOP PLayers</span></a>
		<ul class="submenu">

';









if (count($servers)>1)
	{ echo '<center>';
foreach ($servers as $i=>$n){$n = explode('%',$n,6);
?>
<li><a href="top.php?server=<?php echo $i; ?>"><span class="link"><?php echo colorize(htmlspecialchars($n[4])); ?></span></a></li>

<?php
		 
}	


echo ' </ul></li>';





	echo ' <li>
		<a href="#" title="top geo"><span class="link down">Top Geo</span></a>
		<ul class="submenu">';
foreach ($servers as $i=>$n){$n = explode('%',$n,6);
?>
<li><a href="top_geo.php?server=<?php echo $i; ?>"><span class="link"><?php echo colorize(htmlspecialchars($n[4])); ?></span></a></li>



<?php		 
}	
echo ' </ul>';


	echo ' <li>
		<a href="#" title="players"><span class="link down">Players</span></a>
		<ul class="submenu">';
foreach ($servers as $i=>$n){$n = explode('%',$n,6);
?>
<li><a href="players.php?server=<?php echo $i; ?>"><span class="link"><?php echo colorize(htmlspecialchars($n[4])); ?></span></a></li>



<?php		 
}	
echo ' </ul>';
 
include('configs_menu.php');	 
	 
echo '</ul></nav>
</center>';}









 
// exclude servers belonging to other users
 if (empty($_GET['server']))
$server_id = '0';
else
$server_id = (int) $_GET['server'];

 $servers[$server_id] = trim($servers[$server_id]);

$servers[$server_id] = preg_replace('/\\r\\n?|\\n/', '', $servers[$server_id]); 

list($none, $dbbanlist, $database, $dbplayers, $servername, $ipport, $color, $top_limit, $number_msg_at_page, $cachelimit) = explode('%',$servers[$server_id]);

 /*
echo '</br>-'.$database; 
echo '</br>-'.$servername; 
echo '</br>-'.$ipport; 
echo '</br>-'.$color; 
echo '</br>-'.$top_limit;
echo '</br>-'.$number_msg_at_page;
echo '</br>-'.$cachelimit;
echo '</br>';
*/



$specialxcache = (md5($dbplayers));






 

$i = 0;
function ppptt($string)
{
    $string = str_replace("-", ".", $string);
    return $string;
}
function cleart($string)
{
    $string = str_replace("0 years 00 months 00 days 00 hours", "", $string);
    $string = str_replace("0 years 00 months 00 days", "", $string);
    $string = str_replace("0 years 00 months", "", $string);
    $string = str_replace("0 years", "", $string);
    $string = str_replace("00 months", "", $string);
    $string = str_replace("00 hours", "", $string);
    $string = str_replace("00 days", "", $string);
    $string = str_replace("00 minutes", "", $string);
    $string = str_replace("0 minutes", "", $string);
    $string = str_replace("1 months", "1 month", $string);
    $string = str_replace("1 days", "1 day", $string);
    $string = str_replace("1 hours", "1 hour", $string);
    $string = str_replace("1 minutes", "1 minute", $string);
    $string = str_replace("01", "1", $string);
    $string = str_replace("02", "2", $string);
    $string = str_replace("03", "3", $string);
    $string = str_replace("04", "4", $string);
    $string = str_replace("05", "5", $string);
    $string = str_replace("06", "6", $string);
    $string = str_replace("07", "7", $string);
    $string = str_replace("08", "8", $string);
    $string = str_replace("09", "9", $string);
    return $string;
}
 
function colorize($string)
{
    $string = substr($string, 0, 777);
    $string = str_replace("^^00", "</font><font color=\"gray\">", $string);
    $string = str_replace("^^11", "</font><font color=\"red\">", $string);
    $string = str_replace("^^22", "</font><font color=\"lime\">", $string);
    $string = str_replace("^^33", "</font><font color=\"yellow\">", $string);
    $string = str_replace("^^44", "</font><font color=\"blue\">", $string);
    $string = str_replace("^^55", "</font><font color=\"aqua\">", $string);
    $string = str_replace("^^66", "</font><font color=\"fuchsia\">", $string);
    $string = str_replace("^^77", "</font><font color=\"white\">", $string);
    $string = str_replace("^^88", "</font><font color=\"pink\">", $string);
    $string = str_replace("^^99", "</font><font color=\"silver\">", $string);
    $string = str_replace("^^00", "</font><font color=\"gray\">", $string);
    $string = str_replace("^11", "</font><font color=\"red\">", $string);
    $string = str_replace("^22", "</font><font color=\"lime\">", $string);
    $string = str_replace("^33", "</font><font color=\"yellow\">", $string);
    $string = str_replace("^44", "</font><font color=\"blue\">", $string);
    $string = str_replace("^55", "</font><font color=\"aqua\">", $string);
    $string = str_replace("^66", "</font><font color=\"fuchsia\">", $string);
    $string = str_replace("^77", "</font><font color=\"white\">", $string);
    $string = str_replace("^88", "</font><font color=\"pink\">", $string);
    $string = str_replace("^99", "</font><font color=\"silver\">", $string);
    $string = str_replace("^^1", "</font><font color=\"red\">", $string);
    $string = str_replace("^^2", "</font><font color=\"lime\">", $string);
    $string = str_replace("^^3", "</font><font color=\"yellow\">", $string);
    $string = str_replace("^^4", "</font><font color=\"blue\">", $string);
    $string = str_replace("^^5", "</font><font color=\"aqua\">", $string);
    $string = str_replace("^^6", "</font><font color=\"fuchsia\">", $string);
    $string = str_replace("^^7", "</font><font color=\"white\">", $string);
    $string = str_replace("^^8", "</font><font color=\"pink\">", $string);
    $string = str_replace("^^9", "</font><font color=\"silver\">", $string);
    $string = str_replace("^0", "</font><font color=\"gray\">", $string);
    $string = str_replace("^1", "</font><font color=\"red\">", $string);
    $string = str_replace("^2", "</font><font color=\"lime\">", $string);
    $string = str_replace("^3", "</font><font color=\"yellow\">", $string);
    $string = str_replace("^4", "</font><font color=\"blue\">", $string);
    $string = str_replace("^5", "</font><font color=\"aqua\">", $string);
    $string = str_replace("^6", "</font><font color=\"fuchsia\">", $string);
    $string = str_replace("^7", "</font><font color=\"white\">", $string);
    $string = str_replace("^8", "</font><font color=\"pink\">", $string);
    $string = str_replace("^9", "</font><font color=\"silver\">", $string);
    $string = str_replace("^", "", $string);
    return $string . "</font>";
}










try {
    $db3    = new PDO('sqlite:' . $dbplayers . '');

 $reponse=$db3 ->query("SELECT COUNT(*) AS id FROM x_db_players");
$total_messages = $reponse->fetch();
$nombre_messages=$total_messages['id'];
 
 
// on détermine le nombre de pages
$nb_pages = ceil($nombre_messages / $number_msg_at_page);
         
// Maintenant, on va afficher les messages
// --------------------------------------

if (isset($_GET['page']))
{
    
//$server_id = (int) $_GET['server'];
$page = $_GET['page']; // On récupère le numéro de la page indiqué dans l'adresse (livredor.php?page=4)
}
else // La variable n'existe pas, c'est la première fois qu'on charge la page
{
    $page = 1; // On se met sur la page 1 (par défaut)
}



if (isset($_GET['style']))
{
    $pagestyle = $_GET['style']; // On récupère le numéro de la page indiqué dans l'adresse (livredor.php?page=4)
}
else // La variable n'existe pas, c'est la première fois qu'on charge la page
{
    $pagestyle = 's_ratio'; // On se met sur la page 1 (par défaut)

if($top_by == 'ratio')
$pagestyle = 's_ratio';
else if($top_by == 'kills')
$pagestyle = 's_kills';
else if($top_by == 'deaths')
$pagestyle = 's_deaths';
else if($top_by == 'heads')
$pagestyle = 's_heads';
else if($top_by == 'skill')
$pagestyle = 's_skill';
else if($top_by == 'grenade')
$pagestyle = 's_grenade';
else if($top_by == 'knife')
$pagestyle = 's_melle';
}
 


 
// On calcule le numéro du premier message qu'on prend pour le LIMIT de MySQL
$premierMessageAafficher = ($page - 1) * $number_msg_at_page;

    $queryZ = $db3->query("SELECT * FROM `x_db_players` WHERE x_db_ip ORDER BY (x_db_conn+0) DESC LIMIT  $premierMessageAafficher, $number_msg_at_page");
 ?>
    	
		
        <body>


   <body><center>	<table>
		<?php echo "<center><th><b><a href='players.php'>" . colorize($servername) . "</a></b>  
<b><a href='players.php'>" . colorize($color . "SEARCH $nombre_messages PLAYERS") . "</a></b></th></center>"; ?></table>		
		<table>
                <tbody><tr>
       <th><b>#</b><SPAN class="tooltipxo">PLACE </SPAN></th>
				<th><b>NAME/GUID</b></th>
				<th><b>IP</b></th>
                                 
				<th><b>V*</b><SPAN class="tooltipxo"> VISITED COUNTS</SPAN></th>
				<th><b>W*</b><SPAN class="tooltipxo"> WARNED BY RCM</SPAN></th>
                             
				<th><b>REGISTERED</b></th>
</tr>				
				


<?php
if($page ==1)
$fg = $number_msg_at_page = 0;
if($page > 1)
    $fg = (($page*$number_msg_at_page)-$number_msg_at_page);
    foreach ($queryZ as $row) {
        $id       = $row['id'];
   $namee      = $row['x_db_name'];
 $ipp       = $row['x_db_ip'];
$ping       = $row['x_db_ping']; 
$guid       = $row['x_db_guid']; 
$conn       = $row['x_db_conn']; 
$datee       = $row['x_db_date']; 
$warn       = $row['x_db_warn']; 
$reeg       = $row['x_date_reg'];     
 echo "<tr style=\"background:" . ($i % 2 ? '#777' : '#999') . ";\">";

if(!empty($guid))
$ping = $guid;
//echo "<tr>";
        $i++;
        $in = $i+$fg;   
	$ounttdot = substr_count($namee, '^'); 
	    if($ounttdot > 2) $lmmt = 28; else $lmmt = 20;

        echo "<td> " . $in . "&emsp; </td>
<td width='170px'>" . colorize(substr($namee, 0, $lmmt)) . "  <SPAN class='tooltipteal'>$ping</SPAN></td> 
<td >" . $ipp . " <SPAN class='tooltipblue'>" . $ipp . "</SPAN></td>


<td>" . substr($conn, 0, 6) . " <SPAN class='tooltipblue'>" . substr($conn, 0, 6) . "</SPAN></td>
 
<td >" . $warn . '' . "  <SPAN class='tooltipblue'>$warn</SPAN></td>
<td >" . $reeg . "  <SPAN class='tooltip'>$datee</SPAN></td>
</tr>";
    }
    echo "</br>";
   
    echo "</center></td></table>
</div>";
?>

<?php
 
// On ferme la requête avant d'en faire une autre
$reponse->closeCursor();
$reponse = null;

}
catch (PDOException $e) {
    print 'Exception : ' . $e->getMessage();
}
?>
 

</br><table>	<tr><td><center>			
  <form method="post" action="find_players.php">
 <p1>&nbsp; Search &nbsp; </br> </b>  
<b> &nbsp; Name: </b>  <input type="text" style="display:inline" name="name" >
<b> &nbsp; Ip: </b>  <input type="text" style="display:inline" name="ipadress" >
<b> &nbsp; Guid: </b>  <input type="text" style="display:inline" name="guiid" >
<input type="hidden" name="server" value="<?php echo $server_id;?>" />
  </br><input type="submit" value="Submit">
</form></br></center></td></tr></table>
	
<?php


// Puis on fait une boucle pour écrire les liens vers chacune des pages
if (!isset($_GET['style'])){
echo '</br> <table>
<th> Page : ';
for ($z = 1 ; $z <= $nb_pages ; $z++)
{

if (!empty($_GET['style'])){
$searchhh = $_GET['style'];

$pagger = "style='.$searchhh.'&";
}
if (empty($searchhh))
$pagger = '';




    echo '  [<a href="players.php?'.$pagger.'server='.$server_id.'&page=' . $z . '"><b><font color="white">' . $z . '</font></b></a>] ';
}}else{echo '</br>';}
?>

</th></table>

<?php
 echo " </br></br>
<font color='black' size='3'><center><b>Powered by [RCM x4][c753] Web Stats Plugin (c) www.recod.ru</b></font>";
echo "</br></br>";
echo "</body>";
echo "</html>";
include('bottom-cache.php');

?>