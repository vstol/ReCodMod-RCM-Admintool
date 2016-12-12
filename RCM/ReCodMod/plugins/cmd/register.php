<?php
if (strpos($msgr, $ixz.'register') !== false)
    { 	

  if ($x_stop_lp == 0 ) {
$i_namex = afdasfawf($i_name);	
   	 
$na1    = trim(clearnamex($i_name));
        $na2     = trim(clearnamex($nickr));

  if(empty($foridnum))
		  $foridnum = $i_id;

	  
if ($game_patch != 'cod1_1.1') {

ECHO '-'.$idnum;
ECHO '-'.$i_id;
ECHO '-'.$guidn;



	 if((trim($idnum) == trim($i_id) && ($guidn == $adminguids1)) 
     || (trim($idnum) == trim($i_id) && ($guidn == $adminguids2))
     || (trim($idnum) == trim($i_id) && ($guidn == $adminguids3))
	 || (trim($idnum) == trim($i_id) && ($guidn == $adminguids4))
	 || (trim($idnum) == trim($i_id) && ($guidn == $adminguids5))
	 || (trim($idnum) == trim($i_id) && ($guidn == $adminguids6))
	 || (trim($idnum) == trim($i_id) && ($guidn == $adminguids7))
	 || (trim($idnum) == trim($i_id) && ($i_ip == $adminip1)) 
     || (trim($idnum) == trim($i_id) && ($i_ip == $adminip2))
     || (trim($idnum) == trim($i_id) && ($i_ip == $adminip3))
	 || (trim($idnum) == trim($i_id) && ($i_ip == $adminip4))
	 || (trim($idnum) == trim($i_id) && ($i_ip == $adminip5))
	 || (trim($idnum) == trim($i_id) && ($i_ip == $adminip6))
	 || (trim($idnum) == trim($i_id) && ($i_ip == $adminip7))
 )
	     {
	
try
  {
    	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);

   $sql =  "SELECT * FROM `x_db_admins` WHERE s_adm='$i_ip' limit 1";
 		
    $statt = $db->query($sql)->fetchColumn();

                    if ($statt > 0) {  
usleep($sleep_rcon*2);
if ($game_patch != 'cod1_1.1')
rcon('tell '.$i_id.' ^6 ^3'.$loggistopk, '');
else
	rcon('say ^6 ^3'.$loggistopk, '');
++$x_stop_lp;	
}else{
usleep($sleep_rcon*2);
if ($game_patch != 'cod1_1.1')
rcon('say ^6 ^3'.$loggran.' ^7'.$chistx.' ^3'.$loggistopkk, '');	
				
	$date = date('Y.m.d H.i.s');					
if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '0', 'no')") > 0) {
echo "Created IN DATABASE.". "\n"; 
++$x_stop_lp;						
						
					}
		}
$sql = null;
$db = NULL;
$stat = null;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }		
	
}	

}	  
	  
	  
	  
	  
	 if((strpos($na1,$na2) !== false) || ((trim($foridnum) == trim($idnum)) && (trim($foridnum) == trim($i_id))))
	     {
	
try
  {
  	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);

   $sql =  "SELECT * FROM `x_db_admins` WHERE s_adm='$i_ip' limit 1";
 		
    $statt = $db->query($sql)->fetchColumn();

                    if ($statt > 0) {  
usleep($sleep_rcon*2);
rcon('tell '.$i_id.' ^6 ^3'.$loggistopk, '');
++$x_stop_lp;	
}else{
usleep($sleep_rcon*2);
rcon('say ^6 ^3'.$loggran.' ^7'.$chistx.' ^3'.$loggmemb, '');	
				
	$date = date('Y.m.d H.i.s');					
if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '3', 'no')") > 0) {
echo "Created IN DATABASE.". "\n"; 
++$x_stop_lp;						
						
					}
		}
$sql = null;
$db = NULL;
$stat = null;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }		
	
}	




}
}	



if (strpos($msgr, $ixz.'logout') !== false)
    { 	
  if ($x_stop_lp == 0 ) {
$i_namex = afdasfawf($i_name);	
$mmm     = trim(clearnamex($i_name));
        $nnn     = trim(clearnamex($nickr));

  if(empty($foridnum))
		  $foridnum = $i_id;


			  if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
$jjj = (strpos($mmm, $nnn) !== false); 
else
 $jjj = (((trim($foridnum) == trim($idnum)) && (trim($foridnum) == trim($i_id))) || (trim($i_id) == trim($idnum)) || (strpos($mmm, $nnn) !== false));
    if($jjj){
usleep($sleep_rcon*2);	
try
  {
  	   if (empty($adminlists))	  
$db = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db1.sqlite');
else
$db = new PDO('sqlite:'.$adminlists);
   $db->exec("DELETE FROM x_db_admins WHERE s_adm='$i_ip'");
  
if ($game_patch == 'cod1_1.1')
rcon('say ^6 ^3'.$loggran.' ^7'.$chistx.' ^3'.$loggplayer, '');
else
rcon('tell '.$i_id.' ^6 ^3'.$loggran.' ^7'.$chistx.' ^3'.$loggplayer, '');				

					
$sql = null;
$db = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }		
	
}	
 
}
}	


if (strpos($msgr, $ixz.'reset me') !== false)
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

if(!empty($guidn))
	$nothnkjdk = $guidn;
else
	$nothnkjdk = $chistx.'pfffffffff';
		  
try
  {
 if ($x_number > 0){
usleep($sleep_rcon);
  
	$db3  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
	$db3->query("DELETE FROM x_db_play_stats WHERE s_guid = '$nothnkjdk' limit 1");
	rcon('tell '.$idnum.' ^6[^1RCM^3bot^6] ^7OK!', '');
 
	++$x_number;	
	AddToLogInfo("[".$datetime."] DELETE self user: (" . $nothnkjdk . ") (" . $idnum . ") (" . $msgr . ")"); 
++$x_stop_lp;
echo '  '.substr($tfinishh = (microtime(true) - $start),0,7);
                    					
 } 
 
$db3 = NULL;
 
 
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }		
	
}	

	}

?>
 

