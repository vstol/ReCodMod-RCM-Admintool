<?php
include('top-cache.php');

header('Content-Type: text/html;charset=UTF-8');
echo "<html xmlns='http://www.w3.org/1999/xhtml' lang='ru-RU'>";
    echo "<head>";
    echo "<title>TOP PLAYERS!</title>";
?>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>

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
	width:240px;
	color:#000;
	
	/* скрываем */
	display:none;
	
	/* размещаем прямо над текстом-родителем */
	bottom:101%;
	left:-460px;
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


echo ' </ul>';

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

$specialxcache = (md5($database));

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
    $db3    = new PDO('sqlite:' . $database . '');
    $dbc    = new PDO('sqlite:'. $cpath . 'cache/cache.sqlite');

 $reponse=$db3 ->query("SELECT COUNT(*) AS id FROM x_db_play_stats");
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

   /// $queryZ = $db3->query("SELECT * FROM `x_db_play_stats` WHERE s_kills>=$top_limit ORDER BY ($pagestyle+0) DESC LIMIT  $premierMessageAafficher, $number_msg_at_page");
 ?>

        <body><center>	<table>
		<?php 

echo "<center><th><b><a href='#'>" . colorize($servername) . "</a></b>  
<b><a href='#'>" . colorize($color . "TOTAL $nombre_messages PLAYERS") . "</a></b></th></center>"; ?></table>		
 
<?php
$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic Peoples Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, Peoples Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

 $fff =  0;
foreach ($countries as $x){

$query=$db3->query("SELECT COUNT(*) as count FROM x_db_play_stats WHERE s_geo='$x'");


$query->setFetchMode(PDO::FETCH_ASSOC);
$row=$query->fetch();
if(!empty($row['count'])){
 $members=$row['count'];


 $sql  = "SELECT * FROM geodb WHERE country='$x'";
$stat = $dbc->query($sql)->fetchColumn();
if (empty($stat))
{$dbc->exec("INSERT INTO geodb (country, city, icode, numbers, percents ) VALUES ('$x', '0', '0', '$members', '0');" );
 
$dataPoints[$fff]["label"] = $x;
$dataPoints[$fff]["legendText"] = $x;
$dataPoints[$fff]["y"] = $members;
}else{$dbc->exec("UPDATE geodb SET numbers='$members' WHERE country='{$x}'");

$dataPoints[$fff]["label"] = $x;
$dataPoints[$fff]["legendText"] = $x;
$dataPoints[$fff]["y"] = $members;
}

 //

++$fff;
}}

 
rsort($dataPoints);


// On ferme la requête avant d'en faire une autre
$reponse->closeCursor();
$reponse = null;

}
catch (PDOException $e) {
    print 'Exception : ' . $e->getMessage();
}
?>
 
 <div id="chartContainer"></div>
<script type="text/javascript">
    $(function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: " Geo Stats # Total: <?php echo $fff; ?> countries."
            },
            animationEnabled: true,
            legend: {
                verticalAlign: "center",
                horizontalAlign: "left",
                fontSize: 12,
                fontFamily: "Helvetica"
            },
            theme: "theme2",
            data: [
            {
                type: "pie",
                indexLabelFontFamily: "Garamond",
                indexLabelFontSize: 18,
                indexLabel: "{label} - {y}",
                startAngle: -20,
                showInLegend: true,
                toolTipContent: "{legendText} - {y}",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });
        chart.render();
    });
</script>

<?php

 echo " <br/>
<font color='black' size='3'><center><b>Powered by [RCM x4][c753] Web Stats Plugin (c) www.recod.ru</b></font>";
echo "</br></br>";
echo "</body>";
echo "</html>";
include('bottom-cache.php');
?>