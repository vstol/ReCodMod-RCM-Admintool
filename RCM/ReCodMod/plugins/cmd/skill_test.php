<?php	
if ($x_stop_lp == 0 ) {
$rules_msgg_cmd = true;	 ////////
 if ((strpos($msgr, $ixz.'n ') !== false) && ($x_number != 1))
    { 
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 
	  if($kski[0] == $x_idn) 
	     {

 try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
	if($guids==1)
	$result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_guid='{$guidn}' LIMIT 1");	
	else
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_player='{$i_namex}' LIMIT 1");
 $number = 0;
    foreach($result as $row)
    {	 	
	    $kl  = 	$row['s_kills'];
		$dth = 	$row['s_deaths'];
		$ply = 	$row['s_clear'];
		$yhu = $row['s_place'];
	}	
	
$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	
	
	
if(!empty($ply))
	  {
echo '    '.$tfinishh = (microtime(true) - $start);		
++$x_stop_lp;    //return;
      }	
if ($kl <= 0 || $dth <= 0){  }else{	 	  
$skil_x = round((($kl-$dth)*($kl/$dth)*10));
$ratio_x = ($kl/$dth);

require $cpath . 'ReCodMod/functions/inc_functions2.php';
                            for ($i = 0; $i < 1; $i++) {
                                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                                if ((!$valid_id) || (!$valid_ping))
                                    Continue;	
  usleep($sleep_rcon);
  rcon("say  ^6 ^3".$ply." ^1".$infootop.": ^2".$yhu." ^1".$infoorrnk.":^2  ".$skil_x." ^1 ".$infoofrag.":^2 ".$kl." ^1".$infoortio.":^2 ".substr($ratio_x, 0,5)."  ", "");	
	++$x_number;	
	AddToLogInfo("[".$datetime."] SKILL: " . $i_ip . " (" . $x_nickx . ") (" . $msgr . ") reason: S"); 
							}
	
echo '    '.$tfinishh = (microtime(true) - $start);
}		 
	}
}

$rules_msgg_cmd = true;	 ////////
 if ((strpos($msgr, $ixz.'rank') !== false) && ($x_number != 1))
    {

echo '===========================';
	
$i_namex = afdasfawf($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	 
$na1 = trim($kski[1]);
$na2 = trim($x_nickx);
	 if($na1 == $na2) 
	     {

	$i_namex = afdasfawf($i_name);		 
		 
 

try
  {
    $db3 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db3.sqlite');
 
 	if($guids==1)
	$result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_guid='{$guidn}' LIMIT 1");	
	else
    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_player='{$i_namex}' LIMIT 1");

 	$number = 0;		
    foreach($result as $row)
    {	
		$ply = $row['s_clear'];
		$skilll = $row['s_skill'];
	}

$result = null;
$db3 = NULL;
  }
  catch(PDOException $e)
  {
    print ' FILE:  '.__FILE__.'  Exception : '.$e->getMessage();
  }	


	
require_once $cpath.'ReCodMod/functions/ranks.php';                                 


/////////// HERE SQL FOR DB-5 RANK LEVELS


require $cpath . 'ReCodMod/functions/inc_functions2.php';
                            for ($i = 0; $i < 1; $i++) {
                                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                                if ((!$valid_id) || (!$valid_ping))
                                    Continue;	
usleep($sleep_rcon);	
if (!empty($skill2))
{
rcon("say  ^6 ^3".$ply." ^1".$infoorrnk.":^2  ".$skilll." ^1".$infoorank.": ^2".$skill2." ^7||^2 ".$lbr." ^1 ".$infoolvvl.":^2 ".$lvll." ", "");
++$x_stop_lp;
}else{

rcon("say  ^6 ^1Rank error", "");
++$x_stop_lp;

}
							} 	
	++$x_number;	
	AddToLogInfo("[".$datetime."] RANK: " . $i_ip . " (" . $x_nickx . ") (" . $msgr . ") reason: S"); 
echo '    '.$tfinishh = (microtime(true) - $start);
}		 
	}

}
?>
 

