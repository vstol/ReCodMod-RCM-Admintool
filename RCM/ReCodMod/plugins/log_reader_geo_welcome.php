<?php
//406:13 J;0;11;BLACK OPS III MASTER                          cod1_1.4
//5:37 J;02d45f0829c42b2a4460060012e5bbbe;0;^1LA^9|^7Rocca    cod4
if ($x_stop_lp == 0)
 {
if ($x_loopsv == 0)
 {
  /////////////////SD GAMETYPE TIMELIMIT FIX/////////////////					
  if ($game_patch == 'cod1_1.1')
   {
    if (empty($geosp))
      $geosp = 'fuckxD';
    if ($geosp == 'sd')
     {
      usleep($sleep_rcon);
      require $cpath . 'ReCodMod/functions/getinfo/sd_fix/sdfix.php';
      fclose($connx);
      list($vv9cl, $vv12nl, $xxkl, $xxklj, $xxvlf, $xdflt) = explode('"', $sdfix);
      if (!empty($xxklj))
        $sddth = sevenofff($xxklj);
      else
        $sddth = sevenofff($xdflt);
      echo '---' . $sddthf = $stime + ($sddth * 60) + 50;
      AddTopsdpp($sddth);
      $cron_sd = filemtime($cpath . "ReCodMod/x_cron/cron_time_sd");
      echo 'ddddddddd' . $cron_sd;
      if ($sddthf - $cron_sd < 10) //50 if server has mapvote+endmap stats
       {
        file_put_contents($cpath . "ReCodMod/x_cron/cron_time_sd", "");
        usleep($sleep_rcon);
        require $cpath . 'ReCodMod/functions/inc_functions2.php';
        for ($i = 0; $i < 1; $i++)
         {
          require $cpath . 'ReCodMod/functions/inc_functions3.php';
          usleep($sleep_rcon);
          rcon('say ^1RCM bot ^7find problem with SD timelimit, and ^1RCM ^7solve it!', '');
          usleep($sleep_rcon * 3);
          rcon('map_restart', '');
          if (!empty($db))
            $db = NULL;
          if (!empty($db1))
            $db1 = NULL;
          if (!empty($db2))
            $db2 = null;
          if (!empty($db3))
            $db3 = NULL;
          if (!empty($db4))
            $db4 = NULL;
          if (!empty($db5))
            $db5 = NULL;
          exit;
         }
       }
      else
       {
        file_put_contents($cpath . "ReCodMod/x_cron/cron_time_sd", "");
       }
     }
   }
  /////////////////SD GAMETYPE TIMELIMIT FIX/////////////////	
    $counttdot = substr_count($parseline, ';');
            if ($counttdot == 2)
    list($noon, $idk, $nickname) = explode(';', $parseline);
  else
    list($noon, $guid, $idk, $nickname) = explode(';', $parseline);
  if (empty($guid))
    $guid = 'non';
  echo '-' . $guid . '-' . $idk . '-' . $nickname;
  $x4vvv = clearnamex2($nickname);
  $date  = date('Y.m.d H.i.s');
  
  
  
  
  if (strpos($parseline, 'J;') !== false)
   {
	   
	   
    $geoxx  = 0;
    $limitj = substr_count($parseline, ';'); // 3
	
            if ($limitj == 2)
    list($noon, $idk, $nickname) = explode(';', $parseline);
  else
    list($noon, $guid, $idk, $nickname) = explode(';', $parseline);	   
	   	
	if(empty($guid))
		$guid = $nickname;
	
    if (($limitj == 3) || ($limitj == 2))
     {
      //echo "\n[CNT] : [",$datetime, "] : ".$nickr." : ".$msgr;	
      $vote_cgu = 0;
	  
	  
    try {
        ////////////////////////////
        if (empty($bannlist))
            $db2 = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db2.sqlite');
        else
            $db2 = new PDO('sqlite:' . $bannlist);
        ////////////////////////////
        if (empty($adminlists))
            $db = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db1.sqlite');
        else
            $db = new PDO('sqlite:' . $adminlists);
		$db3  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
		$db4  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db4.sqlite');
	
	  require $cpath . 'ReCodMod/functions/inc_functions2.php';
      for ($i = 0; $i < $player_cnt; $i++)
       {
        require $cpath . 'ReCodMod/functions/inc_functions3.php';
        //if ((!$valid_id) || (!$valid_ping))
        //  Continue;
       
	   
	    $x_admin = 0;
		
		
	 list($noon, $guid, $idk, $nickname) = explode(';', $parseline);	  	
		
		if(trim($idk) == trim($i_id)){
     AddToLogGUID("[" . $datetime . "] WELLCOME -" . $nickname . " : " . $guid . " : " . $i_ip . "");
	// AddToLog1clear("[" . $datetime . "] WELLCOME - " . $nickname . " : " . $guid . " : " . $i_ip . "");
    // AddToLog1("<br/>[" . $datetime . "] WELLCOME - " . $nickname . " : " . $guid . " : " . $i_ip . ""); 
			}
		
 $result = $db->query("SELECT * FROM x_db_admins WHERE s_adm='$i_ip' LIMIT 1");
        foreach ($result as $row) {
            $adm_ip = $row['s_adm'];
            $a_grp  = $row['s_group'];
            $adm_ip = trim($adm_ip);
            $i_ipo  = trim($i_ip);
            if (empty($guidn))
                $guidn = 0;
            if (($adminguidctl == 1) && (array_search(strtolower($guidn), $adminguids, true) !== false) || (array_search(strtolower($i_ip), $adminIP, true) !== false) || ($adm_ip == $i_ipo) && (($a_grp == 0) || ($a_grp == 111))) {
                $cron_time = filemtime($cpath . "ReCodMod/x_cron/cron_time");
                if (time() - $cron_time >= 60) {
                    file_put_contents($cpath . "ReCodMod/x_cron/cron_time", "");
                    ///admin is online
                    $vv = $adm_ip;
                    echo '      admin online=' . $vv;
                }
                if ($game_ac == '0') {
                } else {
                    //usleep($sleep_rcon);
                    //rcon('say ^6 ^2Admin ^6[^7'.$i_name.'^6] ^2online', '');					
                }
                $x_admin = 1;
            }
        }
        if ($x_admin == 0) {
			
//////kick guids	
if (empty($guid))
$guid = 'zzzzzzzzzz';
if ($guid != 'zzzzzzzzzz'){	
	$rules_guids[] = 'if_empty_all_lines_xD';
	if (($rules_kick_guids) && (array_search(strtolower($guid), $rules_guids, true) !== false))
	    {	
usleep($sleep_rcon);
	rcon('clientkick '. $idk.' BAN!', '');
usleep($sleep_rcon);
        rcon('clientkick '. $idk, '');
		AddToLog("[".$datetime."] MANUAL GUIDS KICK: (" . $i_ip . ") (" . $i_name . ")");	
++$x_loopsv;		//continue;
}		
	//	echo $x_addr2[0].$dati.$x_addr2[1];
}	

			
            ///GUID KICKER
            if (!empty($i_name)) {
				if ((!empty($guid)) || $guid != '0'){
                $result = $db2->query("SELECT * FROM bans WHERE guid='$guid'");
                foreach ($result as $row) {
                    $pssiblegguid = $row['guid'];
                    $reason     = $row['reason'];
                if (!empty($guid)){
					if ((!empty($pssiblegguid)) || $pssiblegguid != '0'){
                    if (strpos($guid, $pssiblegguid) !== false) {
                        if ($x_number != 1) {
                            usleep($sleep_rcon);
                            rcon('clientkick ' . $idk . ' BAN!', '');
                            usleep($sleep_rcon);
                            rcon('clientkick ' . $idk, '');
                            AddToLog("[" . $datetime . "] GUID KICK: (" . $pssiblegguid . ") (" . $reason  . ")");
                            ++$x_loopsv;
                            ++$x_number;
					}}
                    }
                }
            }
			}}			
            ///nICKNAME KICKER
            if (!empty($i_name)) {
			
				$nickname = clearnamex($nickname);
                $result = $db2->query("SELECT  * FROM bans WHERE playername='$nickname'");
                foreach ($result as $row) {
                    $playername = $row['playername'];
                    $reason     = $row['reason'];
                    $plnm       = trim($playername);
                    $i_nn       = trim(clearnamex($i_name));
					
                    if ((strpos($plnm, $nickname) !== false) || (strpos($plnm, $i_nn) !== false)) {
                        if ($x_number != 1) {
                            usleep($sleep_rcon);
                            rcon('clientkick ' . $idk . ' BAN!', '');
                            usleep($sleep_rcon);
                            rcon('clientkick ' . $idk, '');
                            AddToLog("[" . $datetime . "] BANNED NICK KICK: (" . $i_ip . ") (" . $i_name . ")");
                            ++$x_loopsv;
                            ++$x_number;
                        }
                    }
                }
            }
            /////IP KICKER
            $result = $db2->query("SELECT * FROM bans WHERE ip='$i_ip'");
            foreach ($result as $row) {
                $ipuuu       = $row['ip'];
                $playername1 = $row['playername'];
                $reason      = $row['reason'];
                if ($x_number != 1) {
                    rcon('say  ^7' . $playername1 . ' ' . $ban_ip_all . ' ^7' . $infooreas . ':^1 ' . $reason . '', '');
                    usleep($sleep_rcon);
                    rcon('clientkick ' . $idk . ' BAN! ' . $reason, '');
                    usleep($sleep_rcon);
                    rcon('clientkick ' . $idk, '');
                    AddToLog("[" . $datetime . "] BANNED IP KICK: (" . $i_ip . ") (" . $i_name . ")");
                    ++$x_loopsv;
                    ++$x_number;
                    echo ' bans   ' . $tfinishh = (microtime(true) - $start);
                    //exit;
                }
            }
            $result = $db2->query("SELECT * FROM x_words");
            foreach ($result as $row) {
                $namer = $row['z_names'];
                if ((preg_match('/' . $namer . '/si', $i_name, $namez)) && ($i_name != '')) {
                    usleep($sleep_rcon);
                    if ($game_ac == '0') {
                        usleep($sleep_rcon);
                        if (($game_patch == 'cod2') || ($game_patch == 'cod4') || ($game_patch == 'cod5'))
                            rcon('clientkick ' . $idk . ' Bad name!', '');
                        else
                            rcon('clientkick ' . $idk, '');
                    } else {
                        rcon('tell ' . $idk . ' "' . $rules_bad_name_msg . '"', '');
                        usleep($sleep_rcon);
                        rcon('akick ' . $idk . ' " ^6[^7BAD NAME^6]"', '');
                        rcon('clientkick ' . $idk, '');
                    }
                    AddToLog("[" . $datetime . "] BANNED NICK KICK: (" . $i_ip . ") (" . $i_name . ")");
                    ++$x_loopsv; //echo $namez[0];       
                    //echo ' proxod3   '.$tfinishh = (microtime(true) - $start);	
                } else {
                    // echo 'No match found';
                    //echo ' vooooooords   '.$tfinishh = (microtime(true) - $start);
                }
            }
            if (($rules_kick_bad_named) && (array_search(strtolower($i_name), $rules_badname, true) !== false) && ($i_ping != 111) && ($i_ping != '999')) {
                usleep($sleep_rcon);
                if ($game_ac == '0') {
                    usleep($sleep_rcon);
                    if (($game_patch == 'cod2') || ($game_patch == 'cod4') || ($game_patch == 'cod5'))
                        rcon('clientkick ' . $idk . ' Bad named!', '');
                    else
                        rcon('clientkick ' . $idk, '');
                } else {
                    rcon('tell ' . $idk . ' "' . $rules_bad_name_msg . '"', '');
                    usleep($sleep_rcon);
                    rcon('akick ' . $idk . ' " ^6[^7BAD NAME^6]"', '');
                    rcon('clientkick ' . $idk, '');
                }
                AddToLog("[" . $datetime . "] BANNED NICK KICK: (" . $i_ip . ") (" . $i_name . ")");
                ++$x_loopsv;
                if ($rules_msgtoall_kicked_enable) {
                    usleep($sleep_rcon);
                    rcon('say  ^7"' . $rules_msgtoall_kicked_bad_name . '"', $i_name);
                }
                //continue;
            }
            //////////////////////////////============================	 IP RANGES
            ///////////////////////////////////////////Super Range
            if (!empty($i_ip)) {
                $ldotss = substr_count($i_ip, '.'); // 3 //6	
                if ($ldotss == 3) {
                    $rules_super_range[] = '10.18.11.0-10.18.11.10';
                    $x_addr2             = explode(".", $i_ip);
                    $dati                = '.';
                    foreach ($rules_super_range as $rules_super_rang) {
                        echo '1';
						$iippl   = substr_count($i_ip, '.'); // 3	
                        $ldotss   = substr_count($rules_super_rang, '.'); // 3 //6	
                        $ldotssx  = substr_count($rules_super_rang, '*'); // 2
                        $ldotssxl = substr_count($rules_super_rang, '/'); // 1
                     if (($ldotss == 6) || ($ldotss == 3) && ($ldotssx == 2) && ($iippl == 3) || ($ldotss == 3) && ($ldotssxl == 1) && ($iippl == 3)) {
                        if ($x_loopsv == 0) {
                            if (ech(netMatch($rules_super_rang, $i_ip)) == !$fuckmatch) {
                                echo '2';
                                if ($x_loopsv == 0) {
                                    if ($rules_kick_ip_super_range) {
                                        echo '3kicked';
                                        usleep($sleep_rcon);
                                        rcon('clientkick ' . $idk . ' IP RANGE BAN!', '');
                                        usleep($sleep_rcon);
                                        rcon('clientkick ' . $idk, '');
                                        AddToLog("[" . $datetime . "] SUPER I.R. KICK: (" . $i_ip . ") (" . $i_name . ")");
                                        ++$x_loopsv; //continue;
                                    }
                                }
                            }
                        }
                    }}
                }
                //	echo $x_addr2[0].$dati.$x_addr2[1];
            }
            ///////////////////////////////////////////Simple Range
            $dat    = '.';
            $x_addr = explode(".", $i_ip);
            if (!empty($i_ip)) { 
                $result = $db2->query("SELECT * FROM x_ranges WHERE ip_ranges like '%" . $x_addr[0] . $dat . $x_addr[1] . "%'");
                $sql    = "SELECT * FROM x_ranges WHERE ip_ranges like '%" . $x_addr[0] . $dat . $x_addr[1] . "%'";
                $stat   = $db2->query($sql)->fetchColumn();
                if ($stat > 0) {
                    foreach ($result as $row) {
                        $ip_r     = $row['ip_ranges'];
                        $ldotss   = substr_count($ip_r, '.'); // 3 //6	
                        $ldotssx  = substr_count($ip_r, '*'); // 2
                        $ldotssxl = substr_count($ip_r, '/'); // 1

						$iippl   = substr_count($i_ip, '.'); // 3	
						
                        if (($ldotss == 6) || ($ldotss == 3) && ($ldotssx == 2) && ($iippl == 3) || ($ldotss == 3) && ($ldotssxl == 1) && ($iippl == 3)) {
						if ($x_loopsv == 0) {	
                            if (ech(netMatch($ip_r, $i_ip)) == !$fuckmatch) {
                                usleep($sleep_rcon);
                                rcon('clientkick ' . $idk . ' IP RANGE BAN!', '');
                                usleep($sleep_rcon);
                                rcon('clientkick ' . $idk, '');
                                AddToLog("[" . $datetime . "] I.R. KICK: (" . $i_ip . ") (" . $ip_r . ") (" . $i_name . ")");
                                ++$x_loopsv;
                                echo ' x-rangeee   ' . $tfinishh = (microtime(true) - $start);
                            }
                        }}
                    }
                }
            }
            if ($stopforumspam == 1) {
                $sql  = "SELECT * FROM x_db_admins WHERE s_group='$i_ip' and s_group='0' or s_group='2' LIMIT 1";
                $stat = $db->query($sql)->fetchColumn();
                if ($stat > 0) {
                    echo '';
                } else {
                    //////////////////////////////============================	
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, 'http://www.stopforumspam.com/api?ip=' . $i_ip);
                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($ch);
                    $pattern  = '/<appears>yes<\/appears>/';
                    if (preg_match($pattern, $response)) {
                        /* IP is listed, so we inform the user, than exit. */
                        echo 'Spammer detected ' . $i_ip . ' ';
                        usleep($sleep_rcon * 4);
                        rcon('say ^7' . $chistx . ' ^3' . $proxyxn . ' ^6[^1RCM^3bot^6]', '');
                        usleep($sleep_rcon);
                        rcon('clientkick ' . $idk . " BlackListed!", '');
                        usleep($sleep_rcon);
                        rcon('clientkick ' . $idk, '');
                        AddToLog("[" . $datetime . "] STOP SPAM FORUM KICK: (" . $i_ip . ") (" . $i_name . ")");
                        ++$x_loopsv;
                    }
                    curl_close($ch);
                    //////////////////////////////============================	
                }
            }
            ///////////////////////////////////////////////////==========================================	
            /*
            function spamzzz($string) {
            $string = str_replace("attacks:", "", $string);
            $string = str_replace("<br", "", $string);
            $string = str_replace("reports:", "", $string);
            $string = str_replace("0", "", $string);
            $string = str_replace(">", "", $string);
            $string = str_replace("/", "", $string);
            $string = str_replace(" ", "", $string);
            return $string . "";
            }
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'http://api.blocklist.de/api.php?ip='.$i_ip.'&start=1');
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            
            $respvvv = spamzzz($response);
            echo '--------'.$respvvv;
            if (is_numeric($respvvv)) {
            
            echo 'Spammer detected-2 '.$i_ip.' '; 
            usleep($sleep_rcon);
            rcon('clientkick '. $idk, '');
            AddToLog("[".$datetime."] STOP SPAM FORUM KICK-2: (" . $i_ip . ") (" . $i_name . ")");	
            }
            curl_close($ch);
            */
            ///////////////////////////////////////////////////==========================================
            $x_admin = 0;
        }
		
		
		
		
		
		
        $dropip = explode(".", $i_ip);
        $xdot   = '.';
        if ((strpos($nickname, $chistx) !== false) || (strpos($i_id, $idk) !== false))
         {
          if ( //!preg_match("/^bot\d+$/", $chistx, $tmp2n) || 
            (!empty($i_ip)) || !preg_match("/192.168/", $dropip[0] . $xdot . $dropip[1], $tmp2n) || !preg_match("/255.255/", $dropip[0] . $xdot . $dropip[1], $tmp2n) || !preg_match("/localhost/", $dropip[0] . $xdot . $dropip[1], $tmp2n) || !preg_match("/127.0.0.1/", $dropip[0] . $xdot . $dropip[1], $tmp2n))
           {
            $mdxxx   = md5(md5(md5($chistx)));
            $guidip  = $mdxxx . 'Z' . $i_ip;
            $i_namex = afdasfawf($i_name);
            $x_date  = date('Y-m-d H:i:s');
            $x_namex = clearnamex($i_name);
            //$vip     = (array_search($i_name, $r_adm, true) !== false);
            
            if (($i_ping != 111) && ($i_ping != '999'))
             {
              $i_namex = afdasfawf($i_name);
              $x_date  = date('Y-m-d H:i:s');
              $ts1     = strtotime($x_date);
    
                $sql  = "SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 1";
                $stat = $db4->query($sql)->fetchColumn();
                if ($stat > 0)
                 {
                  $result = $db4->query($sql);
                  foreach ($result as $row)
                   {
                    $ipcc   = $row['x_db_ip'];
                    $datecc = $row['x_db_date'];
                    //60 * 60 * 24 * 14  - two weeks
                    //60 * 60 * 2        - two hours
                  
                  if (empty($fast_geowelcome))
                  $fast_geowelcome = 1;
                  if ($fast_geowelcome == 1) {
                    if (empty($geosp))
                      $geosp = 'x';
                    if ($geosp == 'sd')
                      $newwtimer = (60 * 60 * 1);
                    else
                      $newwtimer = (60 * 30);
				    $ttplus = rand(0, 100);
					$newwtimer = $ttplus + $newwtimer;
                  }else{
                  	
                  $newwtimer = (60 * 2);
                  
                  }
					
                    if (abs(strtotime($datecc) - $ts1) > $newwtimer)
                     {
                      if ($x_stop_lp == 0)
                       {
                        $idcc = $row['id'];
                        if ((empty($i_ip)) || (strpos($i_ip, '192.168') !== false) || (strpos($i_ip, '255.255') !== false) || (strpos($i_ip, 'localhost') !== false) || (strpos($i_ip, '127.0.0.1') !== false))
                          $i_ip = '37.120.56.200';
                        $db4->exec("UPDATE x_db_players SET x_db_date='{$x_date}' WHERE x_db_ip='{$i_ip}'");
                        $gi     = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                        $record = geoip_record_by_addr($gi, $i_ip);
                        $xxxnnn = ($record->country_name);
                        if ($geox == 1)
                          $xxxnw = ($record->country_name . ", " . $record->city . "");
                        else
                          $xxxnw = ($record->country_name);
                        $date = date('Y.m.d H.i.s');
                        if ($x_stop_lp == 0)
                         {
                          if ($guids == 0)
                           {
                            $mdguid = md5(md5(md5($nickname)));
                            
                            $sql    = "select * FROM x_db_play_stats where s_player='$x4vvv' and s_guid = '$mdguid' limit 1";
                            $stat   = $db3->query($sql)->fetchColumn();
                            if (empty($stat))
                             {
                              $db3->exec("INSERT INTO x_db_play_stats (s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle) 
VALUES ('$x4vvv','999','1','1','0','0','0','0','$date','','','$nickname','$mdguid','$xxxnnn','0','$idk','0')");
                             }
                            else
                              $db3->exec("update x_db_play_stats set s_fall='$idk' where s_player='$x4vvv'");
                           }
                          else
                           {
                            $sql  = "select * FROM x_db_play_stats where s_player='$x4vvv' and s_guid = '$guid' limit 1";
                            $stat = $db3->query($sql)->fetchColumn();
                            if (empty($stat))
                             {
                              $db3->exec("INSERT INTO x_db_play_stats 
(s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle) 
VALUES ('$x4vvv','999','1','1','0','0','0','0','$date','','','$nickname','$guid','$xxxnnn','0','$idk','0')");
                             }
                           }
                          usleep($sleep_rcon);
                          rcon('say ^3' . $welcome_x2 . ' ^7' . $nickname . ' ^3'.$infoofrom.' ^6[^2' . $xxxnw . '^6] ^1id#' . $idcc . ' ^7' . $website . '', '');
                          ++$x_stop_lp;
                         }
                       }
                     }
                    else
                     {
                      ////echo '  Ne proshlo 5 chasov  '.$tfinishh = (microtime(true) - $start);
                      ++$x_stop_lp;
                     }
                   }
                 }
                else
                 {
                  if ($x_stop_lp == 0)
                   {
                    if ((empty($i_ip)) || (strpos($i_ip, '192.168') !== false) || (strpos($i_ip, '255.255') !== false) || (strpos($i_ip, 'localhost') !== false) || (strpos($i_ip, '127.0.0.1') !== false))
                      $i_ip = '37.120.56.200';
                    $gi     = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                    $record = geoip_record_by_addr($gi, $i_ip);
                    $xxxnnn = ($record->country_name);
                    if ($geox == 1)
                      $xxxnw = ($record->country_name . ", " . $record->city . "");
                    else
                      $xxxnw = ($record->country_name);
                    $date = date('Y.m.d H.i.s');
                    $t    = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
                    $x_ai = explode(" / ", $t);
                    if ($guids == 0)
                     {
                      $mdguid = md5(md5(md5($nickname)));
                      
                      $sql    = "select * FROM x_db_play_stats where s_player='$x4vvv' and s_guid = '$mdguid' limit 1";
                      $stat   = $db3->query($sql)->fetchColumn();
                      if (empty($stat))
                       {
                        $db3->exec("INSERT INTO x_db_play_stats (s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle) 
VALUES ('$x4vvv','999','1','1','0','0','0','0','$date','','','$nickname','$mdguid','$xxxnnn','0','$idk','0')");
                       }
                      else
                        $db3->exec("update x_db_play_stats set s_fall='$idk' where s_player='$x4vvv'");
                     }
                    else
                     {
                     
                      $sql  = "select * FROM x_db_play_stats where s_player='$x4vvv' and s_guid = '$guid' limit 1";
                      $stat = $db3->query($sql)->fetchColumn();
                      if (empty($stat))
                       {
                        $db3->exec("INSERT INTO x_db_play_stats 
(s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle) 
VALUES ('$x4vvv','999','1','1','0','0','0','0','$date','','','$nickname','$guid','$xxxnnn','0','$idk','0')");
                       }
                     }
                    $db4->exec("INSERT INTO x_db_players (x_db_name, x_db_ip, x_db_ping, x_db_date, x_db_warn)
    VALUES ('$x_ai[1]', '$x_ai[2]', '$mdxxx', '$x_date', '0')");
                    echo 'W...';
                    if ($x_stop_lp == 0)
                     {
                      usleep($sleep_rcon);
                      rcon('say ^3' . $welcome_x . ' ^7' . $nickname . ' ^3'.$infoofrom.' ^6[^2' . $xxxnw . '^6]', '');
                      ++$x_stop_lp;
                     }
                   }
                  //return;
                 }
  
             }
           }
         }
       } ///end loop
	   
	   
	   
	   
	   
        $result = null;
        $db     = NULL;
        $db2    = NULL;
		$db3    = NULL;
		$db4    = NULL;
    }
    catch (PDOException $e) {
        print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
    }	   
	   
	   
	   
	   
	   
      //ob_end_flush(); 
      echo '   =W=   ' . $tfinishh = (microtime(true) - $start);
	  
	if(empty($tfinishh))
$tfinishh = 1;	  
	  
	  if($tfinishh > 30) {
	if(!empty($db))
$db = NULL;
if(!empty($db1))
$db1 = NULL;
if(!empty($db2))
$db2 = null;
if(!empty($db3))
$db3 = NULL;
if(!empty($db4))
$db4 = NULL;
if(!empty($db5))
$db5 = NULL;
if(!empty($connect))
fclose($connect);  
	  exit;}
      //return;
     }
   }
  ///////////////////////////
  
  $zrandom  = rand(0, 8);
      if ($zrandom  == 4){
if(!empty($db))
$db = NULL;
if(!empty($db1))
$db1 = NULL;
if(!empty($db2))
$db2 = null;
if(!empty($db3))
$db3 = NULL;
if(!empty($db4))
$db4 = NULL;
if(!empty($db5))
$db5 = NULL;
if(!empty($connect))
fclose($connect);  
	  }
	  
if(empty($tfinishh))	  
	$tfinishh = 1;	  
if($tfinishh > 30) 
	exit;
 }}
?>
