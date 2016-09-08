<?php

if ($x_stop_lp == 0) {
/////SUPPORT ONLY WITH PB OR COD4X LIBRARY CLIENT!
if (strpos($msgr, $ixz.'getss ') !== false)
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
  if(($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)
  || (array_search(strtolower($i_ip), $adminIP, true) !== false)
  ||($adm_ip == $i_ipn) && ($a_grph == 0) 
  || ($adm_ip == $i_ipn) && ($a_grph == 111)
  || ($adm_ip == $i_ipn) && ($a_grph == 555)
  || ($adm_ip == $i_ipn) && ($a_grph == 1)
  || ($adm_ip == $i_ipn) && ($a_grph == 2)
  || ($adm_ip == $i_ipn) && ($a_grph == 3)
  || ($adm_ip == $i_ipn) && ($a_grph == 4)
  || ($adm_ip == $i_ipn) && ($a_grph == 5)
  || ($adm_ip == $i_ipn) && ($a_grph == 6)
  || ($adm_ip == $i_ipn) && ($a_grph == 7)
  || ($adm_ip == $i_ipn) && ($a_grph == 8) )
	      { 			    	  
		echo '---'.$i_namex.'---';
++$x_number;		
		 }
	}
	
$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }		
	
}
	
if ($x_number > 0){
 try
  {
 
$db0 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db0.sqlite');

usleep($sleep_rcon);
 list($cmv, $numm) = explode(' ', $msgr); 	
rcon('getss '. $numm .'', '');
usleep($sleep_rcon);
rcon('tell '. $idnum .' ^6[^1RCM^3bot^6] ^7'.$getssj, '');
	++$x_number;

             $sql    = "select * FROM getss where e_guid='$i_guid' or e_ip = '$i_ip' limit 1";
                      $stat   = $db0->query($sql)->fetchColumn();
                      if (empty($stat))
                       {	
	
$db0->exec("INSERT INTO getss (e_admin,e_guid,e_nick,e_ip,e_uid,e_geo,e_counts,e_time)  
 VALUES ('$x_nickx','$i_guid',''$i_name',$i_ip','$i_uid','','1','$date')");
					   }
	                  else{
		
	$db0->exec("UPDATE getss SET e_counts=e_counts +1 where e_guid='$i_guid' or e_ip = '$i_ip'");
	
	                       }
	
	
	AddToLogInfo("[".$datetime."] screenshot: (" . $x_nickx . ") (" . $msgr . ")"); 

++$x_stop_lp;
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
    $sql = null;
$db0 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	                					
	}}
	
else if ((strpos($msgr, $ixz.'getss') !== false) || (strpos($msgr, $getsssc) !== false))
    { 
if ($x_stop_lp != 1){
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
  if(($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)|| ($adm_ip == $i_ipn) && ($a_grph == 0) 
  || ($adm_ip == $i_ipn) && ($a_grph == 111)
  || ($adm_ip == $i_ipn) && ($a_grph == 555)
  || ($adm_ip == $i_ipn) && ($a_grph == 1)
  || ($adm_ip == $i_ipn) && ($a_grph == 2)
  )
	      { 			    	  
		echo '---'.$i_namex.'---';
++$x_number;		
		 }
	}
	
$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }		
	
}
	
if ($x_number > 0){
 
 
 if ($game_patch == 'cod4'){
usleep($sleep_rcon*2);	
rcon('getss all', '');	
 }
 else{
	 usleep($sleep_rcon);		 	
 require $cpath.'ReCodMod/functions/inc_functions2.php';
for ($i=0; $i<$player_cnt; $i++)
	{	
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 

usleep($sleep_rcon*3);	
rcon('getss '. $i_id .'', '');
	}	 
	 
 }
AddToLogInfo("[".$datetime."] screenshot all: (" . $x_nickx . ") (" . $msgr . ")"); 	
usleep($sleep_rcon);
rcon('tell '. $idnum .' ^6[^1RCM^3bot^6] ^7'.$getssx, '');	
	
	
++$x_number;	
++$x_stop_lp;
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
                    					
	}}}
else if (strpos($msgr, $ixz.'lastgetss') !== false)
    { 

if ($x_stop_lp != 1){
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
try
  {
    	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);

$db0 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db0.sqlite');

    $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
	
	
 $sql    = "select * FROM getss where e_guid='$i_guid' or e_ip = '$i_ip' limit 1";
 $resultx = $db0->query("SELECT * FROM getss where e_guid='$i_guid' or e_ip = '$i_ip' limit 1");
                   	
	
	
   foreach($result as $row)
    { 	
   $adm_ip  = $row['s_adm'];
    $a_grph  = $row['s_group'];	
	
  $adm_ip = trim($adm_ip);
  $i_ipn = trim($newip2);
  
//////////////////GROUPS  
  if(($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)|| ($adm_ip == $i_ipn) && ($a_grph == 0) 
  || ($adm_ip == $i_ipn) && ($a_grph == 111)
  || ($adm_ip == $i_ipn) && ($a_grph == 555)
  || ($adm_ip == $i_ipn) && ($a_grph == 1)
  || ($adm_ip == $i_ipn) && ($a_grph == 2)
  )
	      { 			    	  
		echo '---'.$i_namex.'---';
++$x_number;	


  $stat   = $db0->query($sql)->fetchColumn();
                      if (empty($stat))
                       {	
	usleep($sleep_rcon);
rcon('tell '. $idnum .' ^60', '');
					   }
	                  else{
		
 foreach($resultx as $row)
    { 	
    $a_guid = $row['e_guid'];
    $a_uid  = $row['e_uid'];	
 $a_nick  = $row['e_nick'];
 $a_ip  = $row['e_ip'];
 $a_counts  = $row['e_counts'];
  

 if ($game_patch == 'cod4'){
usleep($sleep_rcon);		
AddToLogInfo("[".$datetime."] Last Screenshot: (" . $x_nickx . ") (" . $msgr . ")"); 	
usleep($sleep_rcon);
rcon('tell '. $idnum .' ^6[] ^7'.$a_guid. ' / '.$a_uid.' / '.$a_nick.' / '.$a_ip.' / '.$a_counts, '');
++$x_number;	
++$x_stop_lp;
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
                    					
	}

 
	}
	
	                       }
	
		 }
	}
	
$result = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }		
	
}
	
if ($x_number > 0){
 
 
	
	}
	}}		
	
	
	
	
	
	
	
	
	
	}	
?>

