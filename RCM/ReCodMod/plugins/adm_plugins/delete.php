<?php
if (strpos($msgr, ''.$ixz.'delete') !== false)
    { 
 $x_namex = clearnamex($i_name);
$x_nickx = clearnamex($nickr);
  $mmm = trim($x_nickx);
  $nnn = trim($x_namex);
	
 if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = (strpos($mmm, $nnn) !== false); 
else
 $jjj = ((trim($i_id) == trim($idnum)) || (strpos($mmm, $nnn) !== false));
    if($jjj){
		++$knownplayr;

$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk);
			  $newid = $i_id;
			  $newip2 = $i_ip;

	if(strpos(chatrr($nickr), $kski[1]) !== false)
  $unkwnplyersx = $i_id;
		  
try
  {
	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
   foreach($result as $row)
    { 	
   $adm_ip  = $row['s_adm'];
    $a_grph  = $row['s_group'];	
	
  $adm_ip = trim($adm_ip);
  $i_ipn = trim($newip2);
  
//////////////////GROUPS  
  if(($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false) ||($adm_ip == $i_ipn) && ($a_grph == 0) 
  || ($adm_ip == $i_ipn) && ($a_grph == 111)
   )
	      { 			    	  
		echo '---'.$i_namex.'---';
++$x_number;	
		 }
	}
		
if ($x_number > 0){
 
usleep($sleep_rcon);
 list($cmv, $numm) = explode(' ', $msgr); 
 
usleep($sleep_rcon);
if (is_numeric ($numm))	
{
	$db3  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
	$db3->query("DELETE FROM x_db_play_stats WHERE s_place='$numm' LIMIT 1");
	rcon('say ^6[^1RCM^3bot^6] ^7'.$ttdbdeleted.' - '.$numm.' '.$tttdbdltd.'', '');
}
else if (trim($numm) == 'alladmins')
{
	$db->query("DELETE FROM x_db_admins");
	rcon('tell '.$i_id.' ^6[^1RCM^3bot^6] ^7'.$admdbdeleted, '');
}	
else if (trim($numm) == 'allstats')
{
	$db3  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
	$db3->query("DELETE FROM x_db_play_stats");
	rcon('tell '.$i_id.' ^6[^1RCM^3bot^6] ^7'.$topdbdeleted, '');
}
else if (trim($numm) == 'allbans')
{
	$db2  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db2.sqlite');
	$db2->query("DELETE FROM bans");
	rcon('tell '.$i_id.' ^6[^1RCM^3bot^6] ^7'.$bandbdeleted, '');
}
else
	rcon('tell '.$i_id.' ^6[^1RCM^3bot^6] ^7'.$bandbnoob, '');
 	
	++$x_number;	
	AddToLogInfo("[".$datetime."] DELETE database: (" . $x_nickx . ") (" . $i_ip . ") (" . $msgr . ")"); 
++$x_stop_lp;
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
                    					
	}
	
$result = null;
$db3 = NULL;
$db2 = NULL;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }		
	
}	

	}
?>