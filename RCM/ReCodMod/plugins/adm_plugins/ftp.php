<?php

if (strpos($msgr, $ixz.'ftp log') !== false){
////////////////////////////////////Change gametype
 
$i_namex = chatrr($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	
	
	
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
    $a_grp  = $row['s_group'];
	
  $adm_ip = trim($adm_ip);
  $i_ipn = trim($i_ip);
  $kski[1] = trim($kski[1]);
  $nickr = trim($nickr);   

if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ipn) && (($a_grp == 0) || ($a_grp == 111))|| (array_search(strtolower($i_ip), $adminIP, true) !== false)); 
else
 $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ip == $i_ipn) && ($kski[1] == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111)));
    if($jjj)
	      {	
	  ++$knownplayr;	  

 for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
 

if ($x_number == 0){	
	
usleep($sleep_rcon);

///RCM LOGS
$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, $ftp_login, $ftp_password);
if (!$conn_id || !$login_result){
   //exit("Не удалось установить соединение с FTP сервером!\nПопытка подключения к серверу $ftp_server!");
rcon('tell '.$i_id.' ^6 ^3'.$senterror, ''); exit;}
else{
   //echo "Установлено соединение с FTP сервером $ftp_server";
rcon('tell '.$i_id.' ^6 ^3'.$sentft, '');	}
ftp_pasv($conn_id, true);
do_upload($local_dir);
ftp_close($conn_id);	
	
usleep($sleep_rcon);
	rcon('tell '.$i_id.' ^6 ^3'.$sentokkk, '');	
 
	AddToLog("[".$datetime."] FTP LOGS: (" . $i_ipn . ") (" . $i_id . ") BY: (" . $x_nickx . ") ");    
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> Admin sent to ftp server log file");
	++$x_return;
	++$x_number;
	}else{
++$x_number;
++$x_return;	
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
 

if (strpos($msgr, $ixz.'ftp getss') !== false){
////////////////////////////////////Change gametype
  
 
$i_namex = chatrr($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	
	
	
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
    $a_grp  = $row['s_group'];
	
  $adm_ip = trim($adm_ip);
  $i_ipn = trim($i_ip);
  $kski[1] = trim($kski[1]);
  $nickr = trim($nickr);   

if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = ((strpos(chatrr($nickr), $kski[1]) !== false) && ($adm_ip == $i_ipn) && (($a_grp == 0) || ($a_grp == 111))|| (array_search(strtolower($i_ip), $adminIP, true) !== false)); 
else
 $jjj = (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false)|| (array_search(strtolower($i_ip), $adminIP, true) !== false)||($adm_ip == $i_ipn) && ($kski[1] == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111)));
    if($jjj)
	      {	
	  ++$knownplayr;	  

 for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
 

if ($x_number == 0){	
	
usleep($sleep_rcon);

$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, $ftp_login, $ftp_password);
if (!$conn_id || !$login_result){
   //exit("Не удалось установить соединение с FTP сервером!\nПопытка подключения к серверу $ftp_server!");
rcon('tell '.$i_id.' ^6 ^3'.$senterror, ''); exit;}
else{
   //echo "Установлено соединение с FTP сервером $ftp_server";
rcon('tell '.$i_id.' ^6 ^3'.$sentft, '');	}
ftp_pasv($conn_id, true);
do_upload_getss($local_dir_getss);
ftp_close($conn_id);	
	
usleep($sleep_rcon);
	rcon('tell '.$i_id.' ^6 ^3'.$sentokkk, '');	
 
	AddToLog("[".$datetime."] FTP LOGS: (" . $i_ipn . ") (" . $i_id . ") BY: (" . $x_nickx . ") ");    
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> Admin sent to ftp server image files");
	++$x_return;
	++$x_number;
	}else{
++$x_number;
++$x_return;	
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
?>
 
