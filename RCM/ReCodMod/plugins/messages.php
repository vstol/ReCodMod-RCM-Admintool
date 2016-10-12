<?php

if ($x_stop_lp == 0 ) {
$datetime = date('Y.m.d H:i:s');
 if(empty($mmmsg))
$mmmsg = rand(0,count($messages)-1);

$text=array();
for($i=0;$i<1;$i++)
    { ++$mmmsg;
      
 if((count($messages)-1) < ($mmmsg-1))
 { $mmmsg = 1;}

 $ran = count($messages)-$mmmsg;

 if($ran < 0)
 { $ran = 0;
$mmmsg = 1;}

if(!in_array($messages[$ran],$text))
{$text[]=$messages[$ran];}else{$i--;}}
foreach($text as $message) {
 
}

if(empty($message))
$message = $messages[1];

if (strpos($message, '{') !== false)
{

require $cpath . 'ReCodMod/plugins/cmd/serverinfo.php';
	 
//$cntnbm = substr_count($servers_info_messages, '%');
//           $countnumbs = $cntnbm + 1;

       $cntnbm     = substr_count($serverinfo_adress, ';');
        $countnumbs = $cntnbm + 1;	


 if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, 'http://recod.ru/ip_check.php');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "");
    $outxi = curl_exec($curl);
    curl_close($curl);
  }		
 
	$xmde = 0;   
        $x          = 0;
        while ($x++ < $countnumbs)
          {

  list($ipzc, $port) = explode(':', $server_ipp[$xmde]);

require $cpath . 'cfg/_connection.php';

if (trim($server_ip) == $ipzc)
	$server_ipp[$xmde] = $outxi.':'.$port;
			  
     $patterns = array();
$patterns[0] = '/{SERVER_IP}/';
$patterns[1] = '/{SERVER_NAME}/';
$patterns[2] = '/{SERVER_CURRENT_PLAYERS}/';
$patterns[3] = '/{SERVER_MAX_PLAYERS}/';
$patterns[4] = '/{SERVER_MAPNAME}/';
$patterns[5] = '/{SERVER_GAMETYPE}/';

$replacements = array();
$replacements[5] = $server_ipp[$xmde];
$replacements[4] = $server_name[$xmde];
$replacements[3] = $server_cur_players[$xmde];
$replacements[2] = $server_max_players[$xmde];
$replacements[1] = $server_mapname[$xmde];
$replacements[0] = $server_gametype[$xmde];
$vvv = preg_replace($patterns, $replacements, $servers_info_messages);		  
		  
			  //echo '*** '.meessagee($vvv);	
++$xmde;
	
usleep($sleep_rcon);
	rcon('say ^6^7 '.$vvv, '');
	
	         $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_exec1");
              if ($stime - $cron_time >= $msg_pause*50)
               {
                file_put_contents($cpath . "ReCodMod/x_cron/cron_time_exec1", "");
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='red'>" .meessagee($vvv)."</font>");
               }
echo " \n\n [".$datetime."] Message -> ".meessagee($vvv)." \n Paused -> ".$tfinishh = (microtime(true) - $start)." seconds \n";
++$x_stop_lp; 	

    }
}
else
{

usleep($sleep_rcon);
	rcon('say ^6 ^7'.$message, '');
	
              $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time_msg");
              if ($stime - $cron_time >= $msg_pause*50)
               {
                file_put_contents($cpath . "ReCodMod/x_cron/cron_time_msg", "");	
AddToLog1("<br/>[".$datetime."]<font color='green'> Server :</font> <font color='red'>" .meessagee($message)."</font>");
			   }

echo " \n\n [".$datetime."] Message -> ".meessagee($message)." \n Paused -> ".$tfinishh = (microtime(true) - $start)." seconds \n";
++$x_stop_lp;

 
}


}
?>
