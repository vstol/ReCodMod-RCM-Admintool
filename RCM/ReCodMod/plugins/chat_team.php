<?php
if ($stop_lp == 0 ) {
$x_admin = 0;


try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);	  
$sql = "SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1";
$result = $db->query($sql);



 $stat = $db->query($sql)->fetchColumn();
if($stat > 0)
{
//$vipt = (array_search($chistx, $r_adm, true) !== false);




 
    foreach($result as $row)
    {	
   $adm_ip  = $row['s_adm'];
   $a_grp  = $row['s_group'];
   
  $adm_ip = trim($adm_ip);
  $i_ipo = trim($i_ip);  
 
     if(($adm_ip == $i_ipo) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555)) || ($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false))
   {
    $x_admin = 1;
   } 
else if(($adm_ip == $i_ipo) && ($a_grp == 1))
   {
    $x_admin = 1;
   }
else if(($adm_ip == $i_ipo) && ($a_grp == 2))
   {
    $x_admin = 1;
   } 
else if(($adm_ip == $i_ipo) && ($a_grp == 3))
   {
    $x_admin = 1;
   } 
else if(($adm_ip == $i_ipo) && ($a_grp == 5))
   {
    $x_admin = 1;
   }   
else 
   {
   //
   $x_admin = 2;
   echo ' .- ';   
   }  
}

}else{

$x_admin = 2;


}
  

$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  } 













  if($x_admin == 2)
	      {	
	  
	  
try
  {

////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////	  
$db4 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db4.sqlite');	 	  

$msgr = matmat($msgr);
$parselinetxt = delxxxc($parseline); 

$x_n3 = trim(clearnamex($i_name));
$x_n4 = trim(clearnamex($nivv));

$now_is=date('YmdHis');
$fhrf=file($log_cash."/temp8.txt");
foreach ($fhrf as $flvr) {
$flmm=explode("%",$flvr);
$res3=$now_is-$flmm[1];
}
$fhrz=file($log_cash."/temp6.txt");
foreach ($fhrz as $flix) {
$flmz=explode("%",$flix);
$res2=$now_is-$flmz[1];
}
$fhr=file($log_cash."/temp5.txt");
foreach ($fhr as $flinx) {
$flmc=explode("%",$flinx);
$res1=$now_is-$flmc[1];
}
$fh=file($log_cash."/temp0.txt");
foreach ($fh as $fline) {
$flm=explode("%",$fline);
$res=$now_is-$flm[1];

  if (($flm[0]==$x_n3 && $flm[0]==$x_n4 and $res<=$flood_time 
  || $flm[0]==$x_n3 && $flm[0]==$x_n4 && $flmz[2]==$msgr and $res2<=$flood_time_cmd) && ($x_number != 1))
//if (($flm[0]==$x_n3 && $flm[0]==$x_n4 and $res<$flood_time) && ($x_number != 1))  
{ echo " FLUD "; 
usleep($sleep_rcon);
rcon('say  ^6  '. $chistx . ' "^6[^7Stop voice chat flooding or kick!^6] ^1RCM '.$z_ver.' Autokicker"', '');
AddToLog("[".$datetime."] CHAT FLOODER WARN : " . $x_n3 . " (" . $i_ip . ") ");
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> " . $x_n3 . " <font color='fuchsia'>[^7Warning by RCM '.$z_ver.' = Voice Chat Flood]</font> ");

$x_n4 = trim(clearnamex($nivv)); 	
$today=date('YmdHis');
$fh=fopen($log_cash."/temp5.txt" ,"w+");
fwrite($fh, $x_n4.'%'.$today);
fclose($fh);

$fh=fopen($log_cash."/temp8.txt" ,"w+");
fwrite($fh, $x_n4.'%'.$today.'%'.$msgr);
fclose($fh);
  if (($flm[0]==$x_n3 && $flm[0]==$x_n4 && $flmc[0]==$x_n3 and $res<=$flood_time
  || $flm[0]==$x_n3 && $flm[0]==$x_n4 && $flmm[2]==$msgr and $res2<=$flood_time_cmd) && ($x_number != 1))  
{ echo " FLUD "; 
//rcon('say  ^6  '. $chistx . ' "^1Flooding ^6[^7Stop chat flooding!^6]"', '');
 
if ($game_ac == '0'){
usleep($sleep_rcon); 
rcon('clientkick '. $i_id, '');
AddToLog("[".$datetime."] VOICE CHAT FLOODER : " . $x_n3 . " (" . $i_ip . ") ");
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> " . $x_n3 . " <font color='fuchsia'>[^7Kicked by RCM '.$z_ver.' = Voice Chat Flood]</font> ");
 ++$stop_lp; 
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED FLOOD	
	 
  $result = $db4->query("SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 1");
    foreach($result as $row)
    {
		//$pl1 = $row['x_db_name'];
		$ip1 = $row['x_db_ip'];
		$wrn = $row['x_db_warn'];	
     if (($ip1 == $i_ip) && ($wrn > $wflood))
		{	
if ($game_ac == '0'){
usleep($sleep_rcon); 
rcon('say  ^6  '. $chistx . ' ^1'.$fllddf.' ^6[^7Banned by RCM '.$z_ver.' Autokicker = Voice Chat Flood^6]', ''); 
 ++$stop_lp; 
$db4->exec("UPDATE x_db_players SET x_db_warn=x_db_warn +1 WHERE x_db_ip='{$i_ip}'");
usleep($sleep_rcon);
rcon('clientkick '. $i_id, '');}
else { usleep($sleep_rcon); rcon('akick '. $i_id.' " ^6[^7BANNED - VOICE CHAT FLOOD!^6]"', ''); }
$i_namex = aaxa($i_name);
$x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
$x_reason = 'Flood';
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk);	
$db2->exec("INSERT INTO bans (playername,ip,guid,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','','$x_reason','$datetime','$x_nickx','$game_patch')");
AddToLog("[".$datetime."] BAN WARN: (" . $i_ip . ") (" . $i_name . ")");			
	    } 
    }		
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED FLOO

}
else { 
usleep($sleep_rcon);
rcon('akick '. $i_id.' " ^6[^7Kicked by RCM '.$z_ver.' Autokicker = Voice Chat Flood^6]"', '');} 
AddToLog("[".$datetime."] CHAT FLOODER : " . $x_n3 . " (" . $i_ip . ") ");
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> " . $x_n3 . " <font color='fuchsia'>[^7Kicked by RCM '.$z_ver.' = Voice Chat Flood]</font> ");
++$stop_lp; 
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED FLOOD	
	 
  $result = $db4->query("SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 1");
    foreach($result as $row)
    {
		//$pl1 = $row['x_db_name'];
		$ip1 = $row['x_db_ip'];
		$wrn = $row['x_db_warn'];	
     if (($ip1 == $i_ip) && ($wrn > $wflood))
		{	
if ($game_ac == '0'){
usleep($sleep_rcon); 
rcon('say  ^6  '. $chistx . ' ^1'.$fllddf.' ^6[^7Banned by RCM '.$z_ver.' Autokicker = Voice Chat Flood^6]', ''); 
 ++$stop_lp; 
$db4->exec("UPDATE x_db_players SET x_db_warn=x_db_warn +1 WHERE x_db_ip='{$i_ip}'");
usleep($sleep_rcon);
rcon('clientkick '. $i_id, '');
++$stop_lp; 
}
else { usleep($sleep_rcon); rcon('akick '. $i_id.' " ^6[^7BANNED - VOICE CHAT FLOOD!^6]"', ''); }
$i_namex = aaxa($i_name);
$x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
$x_reason = 'Voice';
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_bann = explode(" / ", $tk);	
$db2->exec("INSERT INTO bans (playername,ip,guid,reason,time,whooo,patch) VALUES ('$x_bann[1]','$x_bann[2]','','$x_reason','$datetime','$x_nickx','$game_patch')");
AddToLog("[".$datetime."] BAN WARN: (" . $i_ip . ") (" . $i_name . ")");			
++$stop_lp; 	    } 
    }		
/////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$/////////WARNED FLOO

}
 ++$stop_lp; 
  ++$x_number;
}
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 ++$x_numb1;
if ($x_numb1 == 1){ 
 
$datetime = date('Y.m.d H:i:s');

$sql = "SELECT * FROM bans WHERE reason like 'Voice' LIMIT 1";
$result = $db2->query($sql);
    foreach($result as $row)
    {		
		$id = 	$row['id'];
		$playername = 	$row['playername'];
		$ip = 			$row['ip'];
		$reason  = 		$row['reason'];
		$time = 		$row['time'];
		$whooo = 		$row['whooo'];
		$ppatch = 		$row['patch'];
				
		
$minuteo = (deltimedot($datetime) - deltimedot($time));	
echo ' ooo '.$minuteo;

if ($minuteo > '1800')
	{
	

$db2->exec("DELETE FROM bans WHERE reason like 'Voice' LIMIT 1");	
$db2->exec("INSERT INTO amnistia (playername1,ip1,guid1,reason1,time1,whooo1,patch1,whounban1) VALUES ('$playername','$ip','','$reason','$time','$whooo','$ppatch','RCM 30 Minutes')");
$db4->exec("UPDATE x_db_players SET x_db_warn='0' WHERE x_db_ip='{$ip}'");

	 
	 
	 if ($x_number != 1)
		{
		usleep($sleep_rcon);
		rcon('say  ^6  ^7' . $playername. ' ^5'.$tmpbnd.' 30 Minutes^7 '.$c_unban.' ^7'.$infooreas.'^1:'.$reason.'', '');
		AddToLog("[".$datetime."] UNBAN: " . $ip . " (" . $playername . ")  reason: UnBan");					
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='orange'> ".$playername. " </font><font color='blue'>TEMPBAN 30 minutes</font><font color='black'> ".$c_unban.  " </font>Reason<font color='red'>:".$reason." </font> ");     		
		++$stop_lp; 
		++$x_number;
		echo ' bans   '.$tfinishh = (microtime(true) - $start);
		}	
	}	
 }
/// 



///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
} 
 
 
 
 
 
$result = null;
$db2 = NULL;
$db4 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }
 
 
 
 
 
 ++$stop_lp; 
 $x_admin = 0;
}}
?>
 
