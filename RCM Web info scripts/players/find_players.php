<?php
include('configs.php');
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//include('top-cache.php');
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
header('Content-Type: text/html;charset=UTF-8');
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
    $db3    = new PDO('sqlite:' . $dbsqlite3 . '');

  

if ((isset($_POST['name'])) && (!empty($_POST['name'])))
{
      $xname1 = trim($_POST['name']); 
 $queryZ = $db3->query("SELECT * FROM `x_db_players` WHERE x_db_name like '%" . $xname1 . "%' LIMIT 800");
$reponse=$db3 ->query("SELECT COUNT(*) AS id FROM x_db_players WHERE x_db_name like '%" . $xname1 . "%'"); 
}
if ((isset($_POST['ipadress'])) && (!empty($_POST['ipadress'])))
{
      $xname = trim($_POST['ipadress']); 
 $queryZ = $db3->query("SELECT * FROM `x_db_players` WHERE x_db_ip like '%" . $xname . "%' LIMIT 800");
$reponse=$db3 ->query("SELECT COUNT(*) AS id FROM x_db_players WHERE x_db_ip like '%" . $xname . "%'"); 
}
if ((isset($_POST['guiid'])) && (!empty($_POST['guiid'])))
{
  $xname3 = trim($_POST['guiid']); 
 $queryZ = $db3->query("SELECT * FROM `x_db_players` WHERE x_db_guid like '%" . $xname3 . "%' LIMIT 800");
$reponse=$db3 ->query("SELECT COUNT(*) AS id FROM x_db_players WHERE x_db_guid like '%" . $xname3 . "%'"); 
}
if ((empty($_POST['guiid'])) && (empty($_POST['name'])) && (empty($_POST['ipadress'])))  
{
    ECHO $xname = 'empty line!!! ERROR!!!!!';  
EXIT;
}
 
 $total_messages = $reponse->fetch();
$nombre_messages=$total_messages['id'];

if(empty($nombre_messages)){
if ((isset($_POST['guiid'])) && (!empty($_POST['guiid'])))
{
     $xname3 = trim($_POST['guiid']); 
 $queryZ = $db3->query("SELECT * FROM `x_db_players` WHERE x_db_ping like '%" . $xname3 . "%' LIMIT 800");
$reponse=$db3 ->query("SELECT COUNT(*) AS id FROM x_db_players WHERE x_db_ping like '%" . $xname3 . "%'"); 

$total_messages = $reponse->fetch();
$nombre_messages=$total_messages['id'];
}
}
    echo "<html xmlns='http://www.w3.org/1999/xhtml' lang='ru-RU'>";
    echo "<head>";
    echo "<title>SEARCH PLAYERS!</title>";
?>
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
	left:-190px;
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
	</style>						
	</head>				
  <body><center>	<table>
		<?php echo "<center><th><b><a href='players.php'>" . colorize($servername) . "</a></b>  
<b><a href='players.php'>" . colorize($ccc . "SEARCH $nombre_messages PLAYERS") . "</a></b></th></center>"; ?></table>		
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
//echo "<tr>";
	    if(!empty($guid))
$ping = $guid;
        $i++;
      
	$ounttdot = substr_count($namee, '^'); 
	    if($ounttdot > 2) $lmmt = 28; else $lmmt = 20;

        echo "<td> " . $i . "&emsp; </td>
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


 
 
// On ferme la requête avant d'en faire une autre
$reponse->closeCursor();
$reponse = null;

}
catch (PDOException $e) {
    print 'Exception : ' . $e->getMessage();
}
?>
 

 
	
<?php
 echo " <br/>
<font color='black' size='3'><center><b>Powered by [RCM x4][c753] Web Stats Plugin (c) www.recod.ru</b></font>";
echo "</br></br>";
echo "</body>";
echo "</html>";
//include('bottom-cache.php');
?>
