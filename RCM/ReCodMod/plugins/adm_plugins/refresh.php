<?php
if ($x_stop_lp == 0 ) {
 if (strpos($msgr, $ixz.'refresh top') !== false){ 
 //$knownplayr = 0;
echo "\n[ADB] : [",$datetime, "] : ".$nickr." : ".$msgr;
$r_ch = trim($chistx);
 
try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////
    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
 	 
$i_namex = chatrr($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	
if(strpos(chatrr($nickr), $kski[1]) !== false)
  $unkwnplyersx = $i_id;	
    foreach($result as $row)
    {		
   $adm_ip  = $row['s_adm'];
   $a_grp  = $row['s_group'];
   
  $adm_ip = trim($adm_ip);
  $i_ip = trim($i_ip);
  $kski[1] = trim($kski[1]);
  $nickr = trim($nickr);   
  

   
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ip) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555)) || (array_search(strtolower($i_ip), $adminIP, true) !== false)); 
else
 $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false) || (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ip == $i_ip) && ($kski[0] == $idnum) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555))  );
    if($jjj)
	      { 
		 ++$knownplayr;
         ++$x_stop_lp;
		 
	 usleep($sleep_rcon);	 
		 
if ($game_patch == 'cod1_1.1')
rcon('say ^6 ^7'.$rfshh, '');	
   else
rcon('tell '.$i_id.' ^6 ^7'.$rfshh, '');	

//                   TOP UPDATE	

	$num = 0;


//AddToLogTOPreset("----------------TOP 100 K/D ratio - kills limit .$limm. -----------------"."\n"."Place  Player  Kills   Deaths   Skill    K/D(ratio) ");
$serveripp = '-';
		AddToLogTOPreset("<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'></head>
		<body>


<style type='text/css'>
        @media all {html {font-size: 24px;}}
		@media all and (max-width:2200px){html {font-size: 27px;}td {font-size: 18px;}}
		@media all and (max-width:1800px){html {font-size: 26px;}td {font-size: 17px;}}
		@media all and (max-width:1400px){html {font-size: 25px;}td {font-size: 16px;}}
		@media all and (max-width:1000px){html {font-size: 24px;}td {font-size: 15px;}}
		@media all and (max-width:960px){html {font-size: 23px;}td {font-size: 14px;}}
		@media all and (max-width:920px){html {font-size: 22px;}td {font-size: 13px;}}
		@media all and (max-width:880px){html {font-size: 21px;}td {font-size: 12px;}}
		@media all and (max-width:840px){html {font-size: 20px;}td {font-size: 11px;}}
		@media all and (max-width:800px){html {font-size: 19px;}td {font-size: 10px;}}
		@media all and (max-width:760px){html {font-size: 18px;}td {font-size: 10px;}}
		@media all and (max-width:720px){html {font-size: 17px;}td {font-size: 10px;}}
		@media all and (max-width:680px){html {font-size: 16px;}td {font-size: 10px;}}
		@media all and (max-width:640px){html {font-size: 15px;}td {font-size: 10px;}}
		@media all and (max-width:600px){html {font-size: 14px;}td {font-size: 10px;}}
		@media all and (max-width:560px){html {font-size: 13px;}td {font-size: 10px;}}
		@media all and (max-width:520px){html {font-size: 12px;}td {font-size: 10px;}}
        body {
          max-width:2400px;
          min-width:520px;
          line-height:1.33em;
          margin:1em;
          background-color:#f7f7f7;
          font-family:Source Sans Pro;
          color:#361800;
        }
    </style>

		<b>TOP 500 $etopx</b> - kills limit $limm - "."\n"."
<b>Server:</b> $servername /  $serveripp . $server_port / $game_patch
<br/> <b>Ratio</b> = Kills/Deaths    <b>Skill</b> = (5th Root of(Kills-Deaths) x (Kills/Deaths) x 10)
<br/> <b>Use server commands:</b> ".$ixz."skill ".$ixz."stats ".$ixz."top ".$ixz."rank ".$ixz."toprank and main ".$ixz."cmd  - system <b> ".meessagee($z_ver)."
 </b>"."\n"."

<table><td> 
<table><tr style=\"background:#333; border:4px solid #CCC;\"></font></td> 
 <td><font color='silver'><center>#</center></font></td>  
<td><font color='silver'><center>$infoocountry</center></font></td>     
 <td><font color='#cce5e5'><center>$infoonick</center></font></td>
 <td><font color='silver'><center>$infoortio</center></font></td> 
<td><font color='silver'><center>$infoosklll</center></font></td>
<td><font color='teal'><center>$infoofrag</center></font></td>
<td><font color='teal'><center>$infoodth</center></font></td>
<td><font color='teal'><center>$infoohddd</center></font></td>
<td><font color='teal'><center>$infoogrnkll</center></font></td>    
<td><font color='teal'><center>$infoosuic</center></font></td>
<td><font color='teal'><center>$infoobash</center></font></td>
<td class='ccccc'><font color='green'><center>$infooplydx</center></font></td>
</tr>");
 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   $num = 0;


    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');

   $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_kills>=$limm ORDER BY ($etopx+0) DESC LIMIT 500");
   
   
  $db3->exec("DELETE FROM x_db_play_stats WHERE id NOT IN (SELECT id FROM x_db_play_stats GROUP BY s_player||s_ratio||s_lasttime||s_kills )"); 
   
    foreach($result as $row)
    {		

++$num;

        $id       = $row['id'];
        $ipm      = $row['s_heads'];
        $pjhv     = $row['s_player'];
        $reason   = $row['s_ratio'];
        $k        = $row['s_lasttime'];
        $r        = $row['s_time'];
        $dth     = $row['s_deaths'];
        $kl      = $row['s_kills'];
        $skll     = $row['s_skill'];
        $sgeer    = $row['s_grenade'];
        $xccs     = $row['s_clear'];
        $csuicids = $row['s_suicids'];
        $cmelle   = $row['s_melle'];
        $geoo     = $row['s_geo'];
        
        $xccs = substr($xccs, 0, 22);
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

if ($kl <= 0 || $dth <= 0){  }else{	   
$skil_x = round((pow($kl-$dth,0.2)*($kl/$dth)*10));

if ($kl == 0)
$ratio_x = ($kl/1);		
	else	
$ratio_x = ($kl/$dth);  

$ratio_n = substr($ratio_x, 0,19);	
$db3->exec("UPDATE x_db_play_stats SET s_place='$num', s_skill='$skil_x', s_ratio='$ratio_n' WHERE s_player='$pjhv'");
//AddToLogTOP("[".$num."] [" . $y . "] [" . $kl . "] [" . $dth . "] [" . $slll . "] [" . $ratio_n . "] ");
$i++;

if (preg_match('/(.*?) ,/', $geoo, $matches)) 
$geoo = $matches{1};

AddToLogTOP("



<tr style=\"background:" . ($i % 2 ? '#555' : '#777') . ";\">
<td><font color='yellow'>&emsp;<b>" . $num . "&emsp;</b></font></td>
<td><font color='pink'>&emsp;<b>" . $geoo . "&emsp;</b></font></td>
<td>&emsp;<b><font color='white'>" . colorize($xccs) . "</font></b></td>
<td class='ccccc'><font color='#21d6c9'>&emsp;<b>" . substr($reason, 0, 6) . "</b>&emsp;</color></td>
<td class='ccccc'><font color='#21d6c9'>&emsp;<b> " . $skll . "</b>&emsp;</td>
<td class='ccccc'><font color='#9ff02b'>&emsp;<b>" . $kl . "</b>&emsp;</color></td>
<td class='ccccc'><font color='#9ff02b'>&emsp;<b>" . $dth . "</b>&emsp;</color></td>
<td><font color='#9ff02b' size='3'>&emsp;<b>" . $ipm . '' . "</b>&emsp;</font></td>
<td><font color='#9ff02b' size='3'>&emsp;<b>" . $sgeer . '' . "</b>&emsp;</font></td>
<td class='ccccc'><font color='#9ff02b'>&emsp;<b>" . $csuicids . "</b>&emsp;</color></td>
<td class='ccccc'><font color='#9ff02b'>&emsp;<b>" . $cmelle . "</b>&emsp;</color></td>
 <td class='ccccc'><font color='#d8e321'>&emsp;<b>" . $played . "</b>&emsp;</color></td>
</tr>");

	 
echo ' '.$num.' ';	
	}}	
	
	
	echo ' top-up   '.$tfinishh = (microtime(true) - $start);
	
AddToLogTOP("</table> 
 </td></table></body></html>"); 		
	   
}	



 }
 
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
}





 if (strpos($msgr, $ixz.'refresh banlist') !== false){ 
 //$knownplayr = 0;
echo "\n[ADB] : [",$datetime, "] : ".$nickr." : ".$msgr;
$r_ch = trim($chistx);
 
try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////
    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
 	 
$i_namex = chatrr($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	
if(strpos(chatrr($nickr), $kski[1]) !== false)
  $unkwnplyersx = $i_id;	
    foreach($result as $row)
    {		
   $adm_ip  = $row['s_adm'];
   $a_grp  = $row['s_group'];
   
  $adm_ip = trim($adm_ip);
  $i_ip = trim($i_ip);
  $kski[1] = trim($kski[1]);
  $nickr = trim($nickr);   
  

   
if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ip) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555)) || (array_search(strtolower($i_ip), $adminIP, true) !== false)); 
else
 $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false) || (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ip == $i_ip) && ($kski[0] == $idnum) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555))  );
    if($jjj)
	      { 
		 ++$knownplayr;
         ++$x_stop_lp;
		  usleep($sleep_rcon);
		  
		 if ($game_patch == 'cod1_1.1')
rcon('say ^6 ^7'.$rfshb, '');	
   else
rcon('tell '.$i_id.' ^6 ^7'.$rfshb, '');


	
// 

	$num = 0;	

$serveripp = '-';
	AddToLogbanlistreset("<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'></head><body>
	
<style type='text/css'>
        @media all {html {font-size: 24px;}}
		@media all and (max-width:2200px){html {font-size: 27px;}td {font-size: 18px;}}
		@media all and (max-width:1800px){html {font-size: 26px;}td {font-size: 17px;}}
		@media all and (max-width:1400px){html {font-size: 25px;}td {font-size: 16px;}}
		@media all and (max-width:1000px){html {font-size: 24px;}td {font-size: 15px;}}
		@media all and (max-width:960px){html {font-size: 23px;}td {font-size: 14px;}}
		@media all and (max-width:920px){html {font-size: 22px;}td {font-size: 13px;}}
		@media all and (max-width:880px){html {font-size: 21px;}td {font-size: 12px;}}
		@media all and (max-width:840px){html {font-size: 20px;}td {font-size: 11px;}}
		@media all and (max-width:800px){html {font-size: 19px;}td {font-size: 10px;}}
		@media all and (max-width:760px){html {font-size: 18px;}td {font-size: 10px;}}
		@media all and (max-width:720px){html {font-size: 17px;}td {font-size: 10px;}}
		@media all and (max-width:680px){html {font-size: 16px;}td {font-size: 10px;}}
		@media all and (max-width:640px){html {font-size: 15px;}td {font-size: 10px;}}
		@media all and (max-width:600px){html {font-size: 14px;}td {font-size: 10px;}}
		@media all and (max-width:560px){html {font-size: 13px;}td {font-size: 10px;}}
		@media all and (max-width:520px){html {font-size: 12px;}td {font-size: 10px;}}
        body {
          max-width:2400px;
          min-width:520px;
          line-height:1.33em;
          margin:1em;
          background-color:#f7f7f7;
          font-family:Source Sans Pro;
          color:#361800;
        }
    </style>	
	<b>LAST BANNED PLAYERS</b> "."\n"."

<table><td> 
<table><tr style=\"background:#333; border:4px solid #CCC;\"></font></td> 
 <td><font color='silver'><center>#ID</center></font></td>     
 <td><font color='silver'><center>City</center></font></td>    
 <td><font color='silver'><center>IP</center></font></td>    
 <td><font color='silver'><center>Player</center></font></td>
 <td class='ccccc'><font color='purple'><center>Date</center></font></td>
 <td><font color='maroon'><center>Reason</center></font></td> 
 <td><font color='teal'><center>Game</center></font></td>
 <td><font color='silver'><center>By</center></font></td>
 </tr>");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $number = 0;	
 $numberx = 0;

usleep(5000);
  $result = $db2->query("SELECT * FROM `bans` ORDER BY (id+0) DESC LIMIT 100");
$ik = 0;
   foreach($result as $row)
    {
	

  ++$numberx;
 
	$id = $row['id'];
		$ipm = $row['ip'];
		$playername1 = $row['playername'];
		$reason  = 	$row['reason'];			
                $k  = 	$row['time'];	
                $kwho  =  $row['whooo'];		
		$pcj = 	$row['patch'];	
/*
////////////////////////////////////////////////////////////////////////////////////////////////////
$SxGeo = new SxGeo($cpath . 'ReCodMod/geoip_bases/SxGeoCity_cp1251/SxGeoCity.dat');
$country_name = $SxGeo->get($ipm);
////////////////////////////////////////////////////////////////////////////////////////////////////


if (is_file($cpath . 'ReCodMod/geoip_bases/SxGeoCity_cp1251/flags/'.$country_name['country']['iso'].'.png'))
					    {
		  $cityn = '<img class="flag" src="flags/'.$country_name['country']['iso'].'.png">';
		  }else
	      {
		  $cityn = '<img class="flag" src="flags/--.png">';
		  }    
*/


$gi = geoip_open($cpath."ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat",GEOIP_STANDARD);
$record = geoip_record_by_addr($gi,$ipm);
$kjgvjhk = ($record->country_name);
if (preg_match('/(.*?) ,/', $kjgvjhk, $matches)) 
$kjgvjhk = $matches{1};
$ik++;
$colorvb=$ik%2>0? '#ccccc':'#ddd';

AddToLogbanlist("<tr style=\"background:".$colorvb.";\">
<td><font color='red' size='2'>&emsp;#".$id."</font></td>
<td><center>"
.
//$cityn
$kjgvjhk
."</center></td>
<td><font color='OliveDrab' >&emsp;<b>".substr($ipm, 0, 8).''."**</b></font></td>
<td><font color='black' >&emsp;<b>".substr($playername1, 0, 19)."</b></font></td>
<td class='ccccc'><font color='green' >&emsp;<b>".$k."</b>&emsp;</color></td>
<td class='ccccc'><font color='red' >&emsp;<b>".substr(tempban($reason), 0, 14)."</b>&emsp;</color></td>
<td class='ccccc'><font color='teal' >&emsp;<b>".$pcj."</b>&emsp;</color></td>
<td class='ccccc'><font color='black' >&emsp;<b>".$kwho."</b>&emsp;</color></td>
</tr>");
	
	}
	
	
	
	echo ' banlist   '.$tfinishh = (microtime(true) - $start);
	
AddToLogbanlist("</table> 
 </td></table>"); 

	
}
}


	
// 

	$num = 0;	

$serveripp = '-';
	AddToLogbanlistreset("<b>LAST BANNED PLAYERS</b> "."\n"."

<table><td> 
<table><tr style=\"background:#333; border:4px solid #CCC;\"></font></td> 
 <td><font color='silver'><center>#ID</center></font></td>     
 <td><font color='silver'><center>$infoocountry</center></font></td>    
 <td><font color='silver'><center>$infooip</center></font></td>    
 <td><font color='silver'><center>$infoonick</center></font></td>
 <td class='ccccc'><font color='purple'><center>$infoodate</center></font></td>
 <td><font color='maroon'><center>$infooreas</center></font></td> 
 <td><font color='teal'><center>$infoonggame</center></font></td>
 <td><font color='silver'><center>$infooby</center></font></td>
 </tr>");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $number = 0;	
 $numberx = 0;

usleep(5000);
  $result = $db2->query("SELECT * FROM `bans` ORDER BY (id+0) DESC LIMIT 500");
$ik = 0;
   foreach($result as $row)
    {
	

  ++$numberx;
 
	$id = $row['id'];
		$ipm = $row['ip'];
		$playername1 = $row['playername'];
		$reason  = 	$row['reason'];			
                $k  = 	$row['time'];	
                $kwho  =  $row['whooo'];		
		$pcj = 	$row['patch'];	
/*
////////////////////////////////////////////////////////////////////////////////////////////////////
$SxGeo = new SxGeo($cpath . 'ReCodMod/geoip_bases/SxGeoCity_cp1251/SxGeoCity.dat');
$country_name = $SxGeo->get($ipm);
////////////////////////////////////////////////////////////////////////////////////////////////////


if (is_file($cpath . 'ReCodMod/geoip_bases/SxGeoCity_cp1251/flags/'.$country_name['country']['iso'].'.png'))
					    {
		  $cityn = '<img class="flag" src="flags/'.$country_name['country']['iso'].'.png">';
		  }else
	      {
		  $cityn = '<img class="flag" src="flags/--.png">';
		  }    
*/


$gi = geoip_open($cpath."ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat",GEOIP_STANDARD);
$record = geoip_record_by_addr($gi,$ipm);
$kjgvjhk = ($record->country_name);

$ik++;
$colorvb=$ik%2>0? '#ccccc':'#ddd';

AddToLogbanlist("<tr style=\"background:".$colorvb.";\">
<td width='40px'><font color='red' size='2'>&emsp;#".$id."</font></td>
<td width='45px'><center>"
.
//$cityn
$kjgvjhk
."</center></td>
<td><font color='OliveDrab' size='2'>&emsp;<b>".substr($ipm, 0, 8).''."**</b></font></td>
<td><font color='black' size='2'>&emsp;<b>".substr($playername1, 0, 19)."</b></font></td>
<td class='ccccc'><font color='green' size='2'>&emsp;<b>".$k."</b>&emsp;</color></td>
<td class='ccccc'><font color='red' size='2'>&emsp;<b>".substr(tempban($reason), 0, 14)."</b>&emsp;</color></td>
<td class='ccccc'><font color='teal' size='2'>&emsp;<b>".$pcj."</b>&emsp;</color></td>
<td class='ccccc'><font color='black' size='2'>&emsp;<b>".$kwho."</b>&emsp;</color></td>
</tr>");
	
	}
	
	
	
	echo ' banlist   '.$tfinishh = (microtime(true) - $start);
	
AddToLogbanlist("</table> 
 </td></table></body></html>"); 	
	
 
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
}

}
?>
