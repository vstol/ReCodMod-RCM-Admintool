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

  

if (isset($_POST['name']))
{
     $xname = trim($_POST['name']);  
}
else  
{
    ECHO $xname = 'error';  
EXIT;
}
 
if((strlen($xname) > 17)){
    $queryZ = $db3->query("SELECT * FROM `x_db_play_stats` WHERE s_guid like '%" . $xname . "%' LIMIT 20");
$reponse=$db3 ->query("SELECT COUNT(*) AS id FROM x_db_play_stats WHERE s_guid like '%" . $xname . "%'");
}
else
{
    $queryZ = $db3->query("SELECT * FROM `x_db_play_stats` WHERE s_player like '%" . $xname . "%' LIMIT 20");
$reponse=$db3 ->query("SELECT COUNT(*) AS id FROM x_db_play_stats WHERE s_player like '%" . $xname . "%'");
}

 $total_messages = $reponse->fetch();
$nombre_messages=$total_messages['id'];

    echo "<html xmlns='http://www.w3.org/1999/xhtml' lang='ru-RU'>";
    echo "<head>";
    echo "<title>TOP PLAYERS!</title>";
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
background:url(ccc.jpg) no-repeat;
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
 
 .tooltipxoc {
	/* задаем стиль внешнего вида */
	padding:3px;
	border:1px solid #333;
	background:red;
	width:100px;
	color:#222;
	
	/* скрываем */
	display:none;
	
	/* размещаем прямо над текстом-родителем */
	bottom:-121%;
	left:10px;
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
	left:-5px;
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
/* при наведении - показываем подсказку */
	th:hover .tooltipxoc {
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
	</style>						
	</head>			
<body><center>	<table>
		<?php echo "<center><th><b>" . colorize($servername) . "</b>  
<b>Search " . colorize($ccc . $xname) . " Player</b></th></center>"; ?>

<th><b><a href="top.php">TOP<SPAN class="tooltipxoc">BACK TO TOP</SPAN></a> </b></th>

</table>		
		<table>
                <tbody><tr>
				
<?php if(empty($nombre_messages)){
echo '<h1>Player not found</h1>';
}else{ 
?>


<th><b>#</b><SPAN class="tooltipxo">PLACE </SPAN></th>
				<th><b>Name / Guid</b></th>
				
				<th><b>Kills</b></th>
				<th><b>Deaths</b></th>
				<th><b>K/D</b></th>
				<th><b>Skill</b></th>
				
				<th><b>Head</b></th>
				<th><b>Nades</b></th>
				<th><b>Knife</b></th>
				<th><b>Suicides</b></th>
				
				
				<th><b>City</b></th>
				<th><b>Playing</b></th>
				<th><b>Last visit</b></th>

<?php 
} 
?>

</tr>				
				


<?php
 
    foreach ($queryZ as $row) {
        $id       = $row['id'];
        $ipm      = $row['s_heads'];
        $pjhv     = $row['s_player'];
        $reason   = $row['s_ratio'];
        $k        = $row['s_lasttime'];
        $r        = $row['s_time'];
        $dthh     = $row['s_deaths'];
        $kll      = $row['s_kills'];
        $skll     = $row['s_skill'];
        $sgeer    = $row['s_grenade'];
        $xccs     = $row['s_clear'];
        $csuicids = $row['s_suicids'];
        $cmelle   = $row['s_melle'];
      $pllll   = $row['s_place'];
        $geoo     = $row['s_geo'];
        $guid     = $row['s_guid'];
        $xccs     = substr($xccs, 0, 36);
        list($vv9, $vv8) = explode(' ', $r);
        $lasttime = $k;
        list($vv9g, $vv8g, $vv7g) = explode('.', $vv9);
        list($vv9g1, $vv8g1, $vv7g1) = explode('.', $vv8);
        $time      = $vv9g . '-' . $vv8g . '-' . $vv7g . ' ' . $vv9g1 . ':' . $vv8g1;
        $datetime1 = date_create($lasttime);
        $datetime2 = date_create($time);
        $interval  = date_diff($datetime1, $datetime2);
        $playedp   = $interval->format('%y years %M months %D days %H hours %I minutes');
        $played    = cleart($playedp);
        $xccs      = substr($xccs, 0, 28);
        echo "<tr style=\"background:" . ($i % 2 ? '#777' : '#999') . ";\">";
        $i++;
       
        echo "<td> " . $i . " / ".$pllll."</td>
<td>" . colorize($xccs) . "  <SPAN class='tooltipteal'>$guid</SPAN></td> 
<td >" . $kll . " <SPAN class='tooltipblue'>$kll</SPAN></td>
<td >" . $dthh . " <SPAN class='tooltipred'>$dthh</SPAN></td>
<td>" . substr($reason, 0, 6) . " <SPAN class='tooltipf'>" . substr($reason, 0, 6) . "</SPAN></td>
<td> " . $skll . " <SPAN class='tooltipf'>$skll</SPAN></td>
<td >" . $ipm . '' . "  <SPAN class='tooltipblue'>$ipm</SPAN></td>
<td >" . $sgeer . '' . "  <SPAN class='tooltipblue'>$sgeer</SPAN></td>
<td >" . $cmelle . "  <SPAN class='tooltipblue'>$cmelle</SPAN></td>
<td>" . $csuicids . "  <SPAN class='tooltipred'>$csuicids</SPAN></td>

<td> " . $geoo . " <SPAN class='tooltippurple'>$geoo</SPAN></td>

<td >" . substr($played, 0, 9) . " <SPAN class='tooltip'>$played</SPAN></td>
<td >" . substr($k, 0, 10) . "  <SPAN class='tooltipg'>$k</SPAN></td>
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

 echo "</div><br/>
<font color='black' size='3'><center><b>Powered by [RCM x4][c753] Web Stats Plugin (c) www.recod.ru</b></font>";
echo "</br></br>";
echo "</body>";
echo "</html>";
//include('bottom-cache.php');
?>
