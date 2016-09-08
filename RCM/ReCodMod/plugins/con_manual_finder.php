<?php
if ($x_loopsv == 0 ) {
	
if (empty($guid))
$guid = 'zzzzzzzzzz';

if ($guid = 'zzzzzzzzzz')		
	{

//echo ' con_manual_finder.php error';

}else{	
	$rules_guids[] = 'if_empty_all_lines_xD';
	if (($$rules_kick_guids) && (array_search(strtolower($guid), $rules_guids, true) !== false))
	    {	
	   
 	require $cpath . 'ReCodMod/functions/inc_functions2.php';
      for ($i = 0; $i < 1; $i++)
       {
        require $cpath . 'ReCodMod/functions/inc_functions3.php';

usleep($sleep_rcon);
if (($game_patch == 'cod2') || ($game_patch == 'cod4') || ($game_patch == 'cod5'))
	rcon('clientkick '. $idk.' BAN!', '');
else
        rcon('clientkick '. $idk, '');
	   }
	$x_kik = 3;
 
		AddToLog("[".$datetime."] MANUAL GUIDS KICK: (" . $i_ip . ") (" . $i_name . ")");	
++$x_loopsv;		//continue;
}else{ }		
	//	echo $x_addr2[0].$dati.$x_addr2[1];
}	
	
	
	if ($x_kik == 0 ) {
		
		
try
               {
                $db2  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db2.sqlite');		
	
	require $cpath . 'ReCodMod/functions/inc_functions2.php';
      for ($i = 0; $i < $player_cnt; $i++)
       {
        require $cpath . 'ReCodMod/functions/inc_functions3.php';
        if ((!$valid_id) || (!$valid_ping))
          Continue;
//////////////////////////////============================	 IP RANGES
///////////////////////////////////////////Super Range


if ($i_ip == '')		
	{echo ' ban1 error';}else{	
	$rules_super_range[] = '000.000';
	$x_addr2 = explode(".", $i_ip); 
	$dati = '.';
	if (($rules_kick_ip_super_range) && (array_search(strtolower($x_addr2[0].$dati.$x_addr2[1]), $rules_super_range, true) !== false))
	    {
	//rcon('kick '. $i_name, '');	
	  usleep($sleep_rcon);
if ($game_ac == '0'){ 
usleep($sleep_rcon);
if (($game_patch == 'cod2') || ($game_patch == 'cod4') || ($game_patch == 'cod5'))
	rcon('clientkick '. $i_id.' BAN!', '');
else
        rcon('clientkick '. $i_id, '');
}
else { rcon('akick '. $i_id.' " ^6[^7BANNED^6]"', ''); rcon('clientkick '. $i_id, '');}
		AddToLog("[".$datetime."] SUPER I.R. KICK: (" . $i_ip . ") (" . $i_name . ")");	
++$x_loopsv;		//continue;
}else{ }		
	//	echo $x_addr2[0].$dati.$x_addr2[1];
}

///////////////////////////////////////////Simple Range
$dat = '.';
		$x_addr = explode(".", $i_ip); 

if ($i_ip == '')		
	{echo ' ban1 error';}else{
	


  $result = $db2->query("SELECT * FROM x_ranges WHERE ip_ranges='$x_addr[0].$dat.$x_addr[1]'");
    foreach($result as $row)
    {	
		$ip_r = $row['ip_ranges'];
		//rcon('kick '. $i_name, '');	
		  usleep($sleep_rcon);
if ($game_ac == '0'){ rcon('clientkick '. $i_id, '');}
else { rcon('akick '. $i_id.' " ^6[^7BANNED^6]"', ''); rcon('clientkick '. $i_id, '');}	
        AddToLog("[".$datetime."] I.R. KICK: (" . $i_ip . ") (" . $i_name . ")");		
++$x_loopsv;		echo ' x-rangeee   '.$tfinishh = (microtime(true) - $start);	
	}
	
}	
	
}	

               }
              catch (PDOException $e)
               {
                print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
               }	

}

}				 
?>
 

