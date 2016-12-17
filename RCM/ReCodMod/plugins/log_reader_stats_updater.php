 <?php
if ($x_stop_lp == 0)
 {
  if ((strpos($parseline, 'J;') !== false) || (strpos($parseline, 'InitGame: ') !== false) || (strpos($parseline, 'RestartGame:') !== false) || (strpos($parseline, 'L;') !== false) || (strpos($parseline, 'W;') !== false) || (strpos($parseline, '-----------------------------------') !== false))
   {
    //echo'--';
   }
  else if (strpos($parseline, 'Q;') !== false)
   {
    if ($game_patch == 'cod1_1.1')
     {
      //--------  104:46 Q;6;xxx
      list($x1e, $x2e, $x4e) = explode(';', $parseline);
      ///////////////error fix
      $counttdot = substr_count($parseline, ';');
      if ($counttdot > 2)
        $x_stop_lp = 2;
$plyr_cnt--;
      ///////////////error fix
     }
    else
     {
      //--------  4471:49Q;0;2;xxx
      ///////////////error fix
      $counttdot = substr_count($parseline, ';');
      if ($counttdot > 3)
        $x_stop_lp = 3;
      ///////////////error fix	
$plyr_cnt--;	
      list($x1e, $x2e, $x3e, $x4e) = explode(';', $parseline);
     }
    if ($x_stop_lp == 0)
     {
      if ($guids == 1)
        $guidzzz = $x2e;
	
      $x4vvv = clearnamex2($x4e);
      try
       {
        usleep(10300);
		
        $db3  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
        
		if ($guids == 0)
		$sql  = "select * FROM x_db_play_stats where s_player='$x4vvv' limit 1";
		else
		$sql  = "select * FROM x_db_play_stats where s_guid='$guidzzz' limit 1";
		
		if ($guids == 0)
        $res  = $db3->query("select * FROM x_db_play_stats where s_player='$x4vvv' limit 1");
		else
		$res  = $db3->query("select * FROM x_db_play_stats where s_guid='$guidzzz' limit 1");
		
        $stat = $db3->query($sql)->fetchColumn();
        if ($stat > 0)
         {
          foreach ($res as $row)
           {
            $ippppp = $row['s_city'];
            if ($ippppp != 0)
              $x4i = $ippppp;
            else
              $x4i = '';
            echo ' - ' . $x4i . '=====';
           }
		   if ($guids == 0)
          $sql  = "select * FROM x_db_play_stats where s_player='$x4vvv' and (s_city is null OR s_city = '') limit 1";
		  else
			$sql  = "select * FROM x_db_play_stats where s_guid='$guidzzz' and (s_city is null OR s_city = '') limit 1";
		    
          $stat = $db3->query($sql)->fetchColumn();
          if (empty($stat))
           {
            if (!empty($ippppp))
              $x4i = $ippppp;
            else
              $x4i = '';
            if (!empty($ippppp))
             {
              /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
              /////////////////////////////////////FALSE LOST CONNECT FIX GUID/////////////////////////////////////////////////
              /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
              if ($guids == 0)
                $mdguid = md5(md5(md5($x4e)));
              else
                $mdguid = $x2e;
			
			if ($guids == 0){
              $sqlTotal = $db3->prepare("SELECT SUM(s_kills) s_kills FROM x_db_play_stats WHERE s_city='$x4i'");
              $sqlTotal->execute();
              $totalResult = $sqlTotal->fetch(PDO::FETCH_NUM);
              $kilsss      = $totalResult[0];
              $sqlTotal    = $db3->prepare("SELECT SUM(s_deaths) s_deaths FROM x_db_play_stats WHERE s_city='$x4i'");
              $sqlTotal->execute();
              $totalResult = $sqlTotal->fetch(PDO::FETCH_NUM);
              $deathsss    = $totalResult[0];
              $sqlTotal    = $db3->prepare("SELECT SUM(s_grenade) s_grenade FROM x_db_play_stats WHERE s_city='$x4i'");
              $sqlTotal->execute();
              $totalResult = $sqlTotal->fetch(PDO::FETCH_NUM);
              $nadesss     = $totalResult[0];
              $sqlTotal    = $db3->prepare("SELECT SUM(s_heads) s_heads FROM x_db_play_stats WHERE s_city='$x4i'");
              $sqlTotal->execute();
              $totalResult = $sqlTotal->fetch(PDO::FETCH_NUM);
              $headsss     = $totalResult[0];
              $sqlTotal    = $db3->prepare("SELECT SUM(s_suicids) s_suicids FROM x_db_play_stats WHERE s_city='$x4i'");
              $sqlTotal->execute();
              $totalResult = $sqlTotal->fetch(PDO::FETCH_NUM);
              $suicides    = $totalResult[0];
              $sqlTotal    = $db3->prepare("SELECT SUM(s_melle) s_melle FROM x_db_play_stats WHERE s_city='$x4i'");
              $sqlTotal->execute();
              $totalResult = $sqlTotal->fetch(PDO::FETCH_NUM);
              $melles      = $totalResult[0];
              $result      = $db3->query("SELECT * FROM x_db_play_stats WHERE s_city='$x4i' ORDER BY (s_kills+0) DESC LIMIT 1");
              foreach ($result as $row)
               {
                $playername = $row['s_player'];
                $place      = $row['s_place'];
                $ipm        = $row['s_kills'];
                $iratio     = $row['s_ratio'];
                $iskill     = $row['s_skill'];
                $heads      = $row['s_heads'];
                $nades      = $row['s_grenade'];
                $lasttime   = $row['s_lasttime'];
                $timee      = $row['s_time'];
                $guid       = $row['s_guid'];
                $clc        = $row['s_clear'];
                $cgeo       = $row['s_geo'];
                echo ' - ' . $place;
                echo ' - ' . $playername;
                echo ' - ' . $lasttime;
                echo ' - ' . $timee;
                echo ' - ' . $guid;
                echo ' - ' . $clc;
                echo ' - ' . $nades;
                echo ' - ' . $heads;
                echo ' - ' . $kilsss;
                echo ' - ' . $deathsss . ' - ';
                AddToLogGUID("[" . $datetime . "] " . $x4i . " - " . $place . " P. " . $playername . " L. " . $lasttime . " T. " . $timee . " - " . $guid . " K. " . $kilsss . " D. " . $deathsss . " H. " . $heads . " G. " . $nades . " N. " . $clc . " EXIT PLAYER");
                usleep(7000);
                // DELETE DUBLICATES
                $result = $db3->query("DELETE FROM x_db_play_stats WHERE s_city='$x4i'");
                usleep(3000);
                // INSERT NEW TABLE WITHOUT IP ADRESS,        BE GOOD ADD THEIR CITY *(
                $db3->exec("INSERT INTO x_db_play_stats (s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle)  
 VALUES ('$x4vvv','$place','$kilsss','$deathsss','$nadesss','$iskill','$iratio','$headsss','$timee','$lasttime','','$clc','$mdguid','$cgeo','$suicides','','$melles')");
               
			 AddToLog1("<br/>[" . $datetime . "] ". $welcome_e . " " . $x4e . " ".$infoofrom." [" . $cgeo . "] guid# ".$mdguid."");
			 AddToLog1clear("[" . $datetime . "] ". $welcome_e . " " . $x4e . " ".$infoofrom." [" . $cgeo . "] guid# ".$mdguid.""); 
			   }			 
			   }
             }
           }
         }
 usleep(10000);
		if(!empty($db)){
$db = NULL;
echo ' db null ';}
if(!empty($db1)){
$db1 = NULL;
echo ' db1 null ';}
if(!empty($db2)){
$db2 = null;
echo ' db2 null ';}
if(!empty($db3)){
$db3 = NULL;
echo ' db3 null ';}
if(!empty($db4)){
$db4 = NULL;
echo ' db4 null ';}
if(!empty($db5)){
$db5 = NULL;
echo ' db5 null ';}
	  
       }
      catch (PDOException $e)
       {
        print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
       }
      echo '-> EXIT ' . $x4e . ' ' . $tfinishh = (microtime(true) - $start);
      ++$x_stop_lp;
	  exit;
      /////////////////////////////////
	  
     }
   }
  else
   {
    //echo'+';
     if (strpos($parseline, 'K;') !== false)
     {
		 
        $parselinetxt = delxkll($parseline);
        ///////////////error fix
        $counttdot    = substr_count($parseline, ';');
        if ($counttdot < 9)
          $x_stop_lp = 10;
        ///////////////error fix

      if ($x_stop_lp == 0)
       {
	          try
           {
            $db3  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');

        //echo '-------------';
        ///////////////////////////
        require $cpath . 'cfg/_connection.php';
        require $cpath . 'cfg/_settings.php';
        ///////////////////////////////////////////////////////////////////////////////////////////////

        /////736:04 K;6;allies;NOOB1;7;allies;NOOB2   ;mosin_nagant_mp;107;MOD_PISTOL_BULLET;torso_upper
        if (($game_patch == 'cod1_1.1') || ($game_mod == 'codam'))
         {
          list($vv1, $iddeath, $idnumb, $death, $idkill, $guidcc, $kill, $vv8, $vv9c, $modkll, $xxk) = explode(';', $parselinetxt);
         echo "\n[kill] : [", $datetime, "] : [" . $kill . " -> " . $death . "] ";
		 $hitlock = $xxk;
		 }
        else
         {
          // 2304:11 K;2310346615980522343;25;allies;XXXXXX;2310346617077157795;32;axis;Deep sadness;ak47_mp;84;MOD_RIFLE_BULLET;torso_lower
		  // 3525:07 K;2310346616976892239;26;allies;kto_to;2310346615766359811;0;axis;bizon;artillery_mp;503;MOD_SUICIDE;none
          list($vv1, $iddeath, $idnumb, $vv4, $death, $guidcc, $idkill, $vv8, $kill, $byweapon, $vv11, $modkll, $hitlock) = explode(';', $parselinetxt); 
		  echo "\n[kill] : [", $datetime, "] : [" . $kill . " -> " . $death . "]  [" . $hitlock . "]";
         }
        
	  
	  if (($guids == 1) && ($guidcc == '0') || ($guids == 1) && ($guidcc == 'allies') || ($guids == 1) && ($guidcc == 'axis'))
	  { echo "\n ALL PLAYERS OR SOME PLAYERS HAVE ZERO (0) GUID! \n"; 
        echo 'WARNING YOU USE IN cfg/_settings.php $guids = 1; but need $guids = 0;';
		echo "\n\n\n";
		sleep (30);
		exit;
	  }
	        
        /*
        $x_kill = quotemeta(htmlspecialchars($kill, ENT_QUOTES));
        $x_death = quotemeta(htmlspecialchars($death, ENT_QUOTES));
        $xc_kill = quotemeta(htmlspecialchars($kill, ENT_QUOTES));
        $xc_death = quotemeta(htmlspecialchars($death, ENT_QUOTES));
        */
        $x_kill   = clearnamex2($kill);
        $x_death  = clearnamex2($death);
        $xc_kill  = clearnamex2($kill);
        $xc_death = clearnamex2($death);
        $date     = date('Y.m.d H.i.s');
        if ($game_patch == 'cod1_1.2')
         {
          if ((strpos($hitlock, 'helmet') !== false) || (strpos($hitlock, 'head') !== false) || (strpos($modkll, 'MOD_MELEE') !== false))
           {
            require $cpath . 'ReCodMod/functions/inc_functions2.php';
            for ($i = 0; $i < $player_cnt; $i++)
             {
              require $cpath . 'ReCodMod/functions/inc_functions3.php';
              if ((!$valid_id) || (!$valid_ping))
                Continue;
              if (strpos($hitlock, 'helmet') !== false)
               {
                usleep($sleep_rcon);
                rcon('say ^6 ^3Blow up helmet by ^7' . $kill . '  ^1---> ^7 ' . $death, '');
               }
              else if (strpos($hitlock, 'head') !== false)
               {
                usleep($sleep_rcon);
                rcon('say ^6 ^3HeadShot made by ^7' . $kill . '  ^1---> ^7 ' . $death, '');
               }
              else if (strpos($modkll, 'MOD_MELEE') !== false)
               {
                usleep($sleep_rcon);
                rcon('say ^6 ^3Melee(bash) made by ^7' . $kill . '  ^1---> ^7 ' . $death, '');
               }
             }
           }
         }
        if ($kill)
         {
          $mdxxx = md5(md5(md5($kill)));
          if ($guids == 0)
           {
            $mdguid = md5(md5(md5($kill)));
           }
          else
           {
            $mdguid = $guidcc;
            $mdxxx  = $guidcc;
           }
			 
			 if(empty($protect_stats))
				 $protect_stats = 0;
			 
            if (($protect_stats == 1) && ($guids == 0))
             {
 
 
            $sql  = "select * FROM x_db_play_stats where s_player='$x_kill' and s_guid='' limit 1";
            $stat = $db3->query($sql)->fetchColumn();
            if ($stat > 0)
             {
              require $cpath . 'ReCodMod/functions/inc_functions2.php';
              for ($i = 0; $i < $player_cnt; $i++)
               {
				   if($xereg == 0){
                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                if ((!$valid_id) || (!$valid_ping))
                  Continue;
                //if (substr(trim($kill), 0, 5) == substr(trim($chistx), 0, 5)) {
                if (trim($idkill) == trim($i_id))
                 {
                  if ((empty($i_ip)) || (strpos($i_ip, '192.168') !== false) || (strpos($i_ip, '255.255') !== false) || (strpos($i_ip, 'localhost') !== false) || (strpos($i_ip, '127.0.0.1') !== false))
                    $i_ip = '37.120.56.200';
                  $forumip = $i_ip;
                  $gi      = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                  $record  = geoip_record_by_addr($gi, $i_ip);
                  $geoz    = ($record->country_name);
                  usleep(1000);
                  $db3->exec("update x_db_play_stats set s_city='$forumip', s_guid='$mdxxx', s_geo='$geoz' where s_player='$x_kill'");
                  AddToLogGUID("[" . $datetime . "] " . $x_kill . " - " . $kill . " - " . $mdxxx . " UPDATE GUID");
				  ++$xereg;
				}
				}
               }
             }

            $sql  = "select * FROM x_db_play_stats where s_player='$x_kill' limit 1";
            $stat = $db3->query($sql)->fetchColumn();
            if (empty($stat))
             {
				if($xereg == 0){ 
              usleep(1000);
              $db3->exec("INSERT INTO x_db_play_stats (s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle)  
 VALUES ('$x_kill','','','','','','','','','','$date','','$kill','','','','$idkill','')");
              AddToLogGUID("[" . $datetime . "] " . $x_kill . " - " . $kill . " - " . $mdxxx . " ADD GUID");
			  ++$xereg;
              require $cpath . 'ReCodMod/functions/inc_functions2.php';
              for ($i = 0; $i < $player_cnt; $i++)
               {
                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                if ((!$valid_id) || (!$valid_ping))
                  Continue;
                //if (substr(trim($kill), 0, 5) == substr(trim($chistx), 0, 5)) {
                if (trim($idkill) == trim($i_id))
                 {
                  $forumip = $i_ip;
                  $gi      = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                  $record  = geoip_record_by_addr($gi, $i_ip);
                  $geoz    = ($record->country_name);
                  usleep(1000);
                  $db3->exec("update x_db_play_stats set s_city='$forumip', s_guid='$mdxxx', s_geo='$geoz' where s_player='$x_kill'");
				  ++$xereg;
                  AddToLogGUID("[" . $datetime . "] " . $x_kill . " - " . $kill . " - " . $mdxxx . " UPDATE GUID");
                 }
               }
             }
				}
				
				
            $sql  = "select * FROM x_db_play_stats where s_player='$x_kill' and (s_city is null OR s_city = '') limit 1";
            $stat = $db3->query($sql)->fetchColumn();
            if ($stat > 0)
             {
              require $cpath . 'ReCodMod/functions/inc_functions2.php';
              for ($i = 0; $i < $player_cnt; $i++)
               {
                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                if ((!$valid_id) || (!$valid_ping))
                  Continue;
                if (trim($idkill) == trim($i_id))
                 {
                  if ((empty($i_ip)) || (strpos($i_ip, '192.168') !== false) || (strpos($i_ip, '255.255') !== false) || (strpos($i_ip, 'localhost') !== false) || (strpos($i_ip, '127.0.0.1') !== false))
                    $i_ip = '37.120.56.200';
                  $forumip = $i_ip;
                  $gi      = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                  $record  = geoip_record_by_addr($gi, $i_ip);
                  $geoz    = ($record->country_name);
                  usleep(1000);
                  $db3->exec("update x_db_play_stats set s_city='$forumip', s_guid='$mdxxx' where s_player='$x_kill'");
                  AddToLogGUID("[" . $datetime . "] " . $x_kill . " - " . $kill . " - " . $mdxxx . " UPDATE IP " . $forumip . " ");
                 }
               }
             }
           $zzk = rand(0, 3);
            if ($namefaker == 0)
              $zzk = 'FUCK';
            if ($zzk == '1')
             {
              require $cpath . 'ReCodMod/functions/inc_functions2.php';
              for ($i = 0; $i < $player_cnt; $i++)
               {
                require $cpath . 'ReCodMod/functions/inc_functions3.php';
                if ((!$valid_id) || (!$valid_ping))
                  Continue;
                $x_namex = clearnamex($i_name);
                $x_nickx = clearnamex($kill);
                $mmm     = substr(trim($x_nickx), 0, 5);
                $nnn     = substr(trim($x_namex), 0, 5);
                if (trim($i_id) == trim($idkill))
                 {
                  $gi      = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                  $record  = geoip_record_by_addr($gi, $i_ip);
                  $geoz    = ($record->country_name);
                  //  $sqlg  = "select * FROM x_db_play_stats where (s_guid = '$mdxxx' and s_kills>='100' and s_ratio>='2' and s_geo = '$geoz') limit 1";
                  //  $statr = $db3->query($sqlg)->fetchColumn();
                  $resultl = $db3->query("select * FROM x_db_play_stats where s_guid = '$mdxxx' limit 1");
                  foreach ($resultl as $row)
                   {
                    $guidddz = $row['s_guid'];
                    $killlz  = $row['s_kills'];
                    $ratiooz = $row['s_ratio'];
                    $geooz   = $row['s_geo'];
                   }
                  $geoz = trim($geoz);
                  if (!empty($geooz))
                    $geooz = trim($geooz);
                  if (!empty($geooz))
                   {
                    if (($geooz != $geoz) && ($ratiooz > '0') || ($geooz != $geoz) && ($ratiooz > 0))
                     {
                      if ((empty($i_ip)) || (strpos($i_ip, '192.168') !== false) || (strpos($i_ip, '255.255') !== false) || (strpos($i_ip, 'localhost') !== false) || (strpos($i_ip, '127.0.0.1') !== false))
                        $i_ip = '37.120.56.200';
                      $db4  = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db4.sqlite');
                      $sql  = "SELECT * FROM x_db_players WHERE x_db_ip='$i_ip' LIMIT 2";
                      $stat = $db4->query($sql)->fetchColumn();
                      if ($stat > 0)
                       {
                        $result = $db4->query($sql);
                        $xix    = 0;
                        foreach ($result as $row)
                         {
                          $inamekk[$xix] = $row['x_db_name'];
                          $xix++;
                         }
                        if (empty($inamekk[0]))
                         {
                          $inamekk[0] = '';
                          $ilinex0    = '';
                         }
                        else
                         {
                          $ilinex0 = ' / ';
                         }
                        if (empty($inamekk[1]))
                         {
                          $inamekk[1] = '';
                          $ilinex1    = '';
                         }
                        else
                         {
                          $ilinex1 = ' / ';
                         }
                       }
                      if ($x_stop_lpst == 0)
                       {
                        echo "\n $i_name City Name faker! \n";
                        if ($fakealert == 1)
                         {
                          usleep($sleep_rcon * 3);
                          rcon('say ^6[^1RCM^3bot^6] ^1WARNING YOU! ^7' . $inamekk[0] . $ilinex0 . $inamekk[1] . $ilinex1 . '  ^3you USED ^7' . $kill . ',  ^1WANT BAN?!', '');
                         }
                        if ($namefakerkick == 1)
                         {
                          usleep($sleep_rcon * 7);
                          rcon('kick ' . $kill . '', '');
                         }
                        if ((empty($i_ip)) || (strpos($i_ip, '192.168') !== false) || (strpos($i_ip, '255.255') !== false) || (strpos($i_ip, 'localhost') !== false) || (strpos($i_ip, '127.0.0.1') !== false))
                          $i_ip = '37.120.56.200';
                        if (empty($inamekk[0]))
                         {
                          $inamekk[0] = '';
                          $ilinex0    = '';
                         }
                        else
                         {
                          $ilinex0 = ' / ';
                         }
                        if (empty($inamekk[1]))
                         {
                          $inamekk[1] = '';
                          $ilinex1    = '';
                         }
                        else
                         {
                          $ilinex1 = ' / ';
                         }
                        AddToLogfakerz("[" . $datetime . "] WARNING!!! " . $kill . " aka " . $inamekk[0] . $ilinex0 . $inamekk[1] . $ilinex1 . " - " . $mdxxx . " - " . $i_ip . " ");
                        ++$x_stop_lpst;
                       }
                     }
                   }
                 }
               }
             }
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////					
            $sql  = "select * FROM x_db_play_stats where s_player='$x_kill' and s_guid = '$mdxxx' limit 1";
            $stat = $db3->query($sql)->fetchColumn();
            if (empty($stat))
             {
              echo 'fakekill';
              if (empty($fakealert))
                $fakealert = 1;
              if ($fakealert == 0)
               {
                $recv[0] = '1';
                $recv[1] = '2';
                $recv[2] = '3';
                $recv[3] = '4';
                $recv[4] = '5';
                $recv[5] = '6';
                $recv[6] = '7';
                $recv[7] = '8';
                $recv[8] = '9';
                $zzk     = rand(0, 8);
                if ($zzk == '4')
                 {
                  require $cpath . 'ReCodMod/functions/inc_functions2.php';
                  for ($i = 0; $i < 1; $i++)
                   {
                    require $cpath . 'ReCodMod/functions/inc_functions3.php';
                    if ((!$valid_id) || (!$valid_ping))
                      Continue;
                    //usleep($sleep_rcon*5);
                    //rcon('say ^6  ^7'.$kill.' ^3FAKE, change YOUR nickname, no $ixz.'stats update ^7$ixz.'guid: '.$mdxxx.'', '');
                    usleep($sleep_rcon);
                    rcon('say ^6  ^7' . $kill . ' ^3possible FAKEname, blocked ' . $ixz . 'stats update ^7' . $ixz . 'guid: ' . $mdxxx . '', '');
                    //usleep($sleep_rcon*5);
                    AddToLogfakerz("[" . $datetime . "] " . $kill . " - " . $mdxxx . " ");
                    //rcon('kick '.$kill.'', '');
                   }
                 }
               }
              ++$x_stop_lpst;
              //return;
             }
            else
             {
              echo 'okfrag';
              //echo $modkll;
             }
			 
			 
			 }		 
			 

          if ($x_stop_lpst == 0)
           {
            if ($kill)
             {
                if ($guids == 0)
                 {
                  $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_player='{$x_kill}' LIMIT 1");
                  foreach ($result as $row)
                   {
                    $kl   = $row['s_kills'];
                    $dth  = $row['s_deaths'];

                    if (((!empty($kl)) && (!empty($dth))) || ((!empty($kl)) && (empty($dth))) || ((empty($kl)) && (!empty($dth))))
                     {
					$ply  = $row['s_player'];
                    $slll = $row['s_skill'];
                      $skil_x = round((($kl - $dth) * ($kl / $dth) * 10));
                      if ($kl == 0)
                        $ratio_x = ($kl / 1);
                      else
                        $ratio_x = ($kl / $dth);
                      $ratio_n = substr($ratio_x, 0, 19);
                      usleep(1000);
                      $db3->exec("UPDATE x_db_play_stats SET  s_lasttime='{$dtx2}', s_skill='{$skil_x}', s_ratio='{$ratio_n}' WHERE s_player='{$x_kill}'");
                      $tfinishh = substr( (microtime(true) - $start), 0, 4);
					  if($tfinishh > 20){
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
if(is_resource($connect))
{
	if(is_resource($connect))
fclose($connect); 

}
	exit;
}
                     }
                   }
                  $sql  = "SELECT * FROM x_db_play_stats WHERE s_player='$x_kill'";
                  $stat = $db3->query($sql)->fetchColumn();
                  if ($stat > 0)
                   {
					   
                    if ((strpos($byweapon, 'grenade_') !== false) && ($death != $kill))
                      $db3->exec("UPDATE x_db_play_stats SET s_grenade=s_grenade +1 WHERE s_player='{$x_kill}'");
                    if ((strpos($hitlock, 'head') !== false) && ($death != $kill))
                      $db3->exec("UPDATE x_db_play_stats SET s_heads=s_heads +1 WHERE s_player='{$x_kill}'");
                    if ((strpos($modkll, 'MOD_MELEE') !== false) && ($death != $kill))
                      $db3->exec("UPDATE x_db_play_stats SET s_melle=s_melle +1 WHERE s_player='{$x_kill}'");
                    if (($modkll == 'MOD_SUICIDE') && ($death == $kill))
                      echo 'suicide';
                    if (($modkll != 'MOD_SUICIDE') && ($death != $kill)    
						|| (($modkll == 'MOD_SUICIDE') && ($death != $kill) && ($byweapon != 'none')))
                      $db3->exec("UPDATE x_db_play_stats SET s_kills=s_kills +1 WHERE s_player='{$x_kill}'");					  
				  
                   }
                  else
                   {
                    usleep(1000);
                    $db3->exec("INSERT INTO x_db_play_stats (s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle)  
 VALUES ('$x_kill','','','','','','','','','','$date','','$kill','','','','$idnumb','')");
                   }
                 }
                else
                 {
                  $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_guid='{$guidcc}' LIMIT 1");
                  foreach ($result as $row)
                   {
                    $kl   = $row['s_kills'];
                    $dth  = $row['s_deaths'];

               if (((!empty($kl)) && (!empty($dth))) || ((!empty($kl)) && (empty($dth))) || ((empty($kl)) && (!empty($dth))))
                     {
                    $ply  = $row['s_player'];
                    $slll = $row['s_skill'];						 
                      $skil_x = round((($kl - $dth) * ($kl / $dth) * 10));
                      if ($kl == 0)
                        $ratio_x = ($kl / 1);
                      else
                        $ratio_x = ($kl / $dth);
                      $ratio_n = substr($ratio_x, 0, 19);
                      usleep(1000);
                      $db3->exec("UPDATE x_db_play_stats SET  s_lasttime='{$dtx2}', s_skill='{$skil_x}', s_ratio='{$ratio_n}' WHERE s_guid='{$guidcc}'");
                      $tfinishh = substr( (microtime(true) - $start), 0, 4);
if($tfinishh > 20){
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
if(is_resource($connect))
{
	if(is_resource($connect))
fclose($connect); 

}
	exit;
}					  
                     }
                   }
                  $sql  = "SELECT * FROM x_db_play_stats WHERE s_guid='$guidcc'";
                  $stat = $db3->query($sql)->fetchColumn();
                  if ($stat > 0)
                   {  
                    if ((strpos($byweapon, 'grenade_') !== false) && ($iddeath != $guidcc))	
                      $db3->exec("UPDATE x_db_play_stats SET s_grenade=s_grenade +1 WHERE s_guid='{$guidcc}'");
                    if ((strpos($hitlock, 'head') !== false) && ($iddeath != $guidcc))
                      $db3->exec("UPDATE x_db_play_stats SET s_heads=s_heads +1 WHERE s_guid='{$guidcc}'");
                    if ((strpos($modkll, 'MOD_MELEE') !== false) && ($iddeath != $guidcc))
                      $db3->exec("UPDATE x_db_play_stats SET s_melle=s_melle +1 WHERE s_guid='{$guidcc}'");
                    if (($modkll == 'MOD_SUICIDE') && ($iddeath == $guidcc))
                      echo 'suicide';
                    if (($modkll != 'MOD_SUICIDE') && ($iddeath != $guidcc)    
						|| (($modkll == 'MOD_SUICIDE') && ($iddeath != $guidcc) && ($byweapon != 'none'))
					    || (($modkll == 'MOD_EXPLOSIVE') && ($iddeath != $guidcc) && ($byweapon == 'none')))
                      $db3->exec("UPDATE x_db_play_stats SET s_kills=s_kills +1 WHERE s_guid='{$guidcc}'");

                ////////////////AUTO SCREENSHOTS
				$cron_timeq=filemtime($cpath."ReCodMod/x_cron/cron_y");        
                   if (time()-$cron_timeq>=60*$auto_getss_time) {              
                      file_put_contents($cpath."ReCodMod/x_cron/cron_y","");    
	                usleep($sleep_rcon);
                   if($auto_getss == 1)	{				
					 $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_guid='{$guidcc}' LIMIT 1");
                     foreach ($result as $row)
                     {
                      $kl   = $row['s_kills'];
                      $dth  = $row['s_deaths'];  
					 }
					 
					 if(empty($dth))
						$kl = 0.000002;
					 if(empty($kl))
						$dth = 1;

					  if(($kl/$dth) > 0.49)
					  rcon('getss '. $idkill , '');
				   }else if($auto_getss == 2)	{
				  rcon('getss '. $idkill , '');
				   }
				    }
			    ////////////////AUTO SCREENSHOTS		
		             }
                  else
                   {
                    usleep(3000);
                    $db3->exec("INSERT INTO x_db_play_stats (s_player,s_place,s_kills,s_deaths,s_grenade,s_skill,s_ratio,s_heads,s_time,s_lasttime,s_city,s_clear,s_guid,s_geo, s_suicids,s_fall,s_melle)  
 VALUES ('$x_kill','','','','','','','','','','$date','','$kill','$guidcc','','','$idkill','')");
                   }
                 }

              if ($death)
               {

                  if ($guids == 0)
                   {
                    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_player='{$xc_death}' LIMIT 1");
                    foreach ($result as $row)
                     {
                      $kl   = $row['s_kills'];
                      $dth  = $row['s_deaths'];

                       if (((!empty($kl)) && (!empty($dth))) || ((!empty($kl)) && (empty($dth))) || ((empty($kl)) && (!empty($dth))))
                              {
                      $ply  = $row['s_player'];
                      $slll = $row['s_skill'];								  
								 
                        $skil_x = round((($kl - $dth) * ($kl / $dth) * 10));
                        if ($kl == 0)
                          $ratio_x = ($kl / 1);
                        else
                          $ratio_x = ($kl / $dth);
                        $ratio_n = substr($ratio_x, 0, 19);
                        usleep(1000);
                        $db3->exec("UPDATE x_db_play_stats SET s_skill='{$skil_x}', s_ratio='{$ratio_n}' WHERE s_player='{$xc_death}'");
                        $tfinishh = substr( (microtime(true) - $start), 0, 6);
 if($tfinishh > 20){
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
if(is_resource($connect))
{
	if(is_resource($connect))
fclose($connect); 

}
	exit;
}                      }
                     }
                    $sql  = "SELECT * FROM x_db_play_stats WHERE s_player='$xc_death'";
                    $stat = $db3->query($sql)->fetchColumn();
                    if ($stat > 0)
                     {					 
                      if (($modkll == 'MOD_SUICIDE') && ($kill == $death) && ($hitlock != 'none'))
                        $db3->exec("UPDATE x_db_play_stats SET s_suicids=s_suicids +1 WHERE s_player='{$xc_death}'");

				      if (($modkll != 'MOD_SUICIDE') && ($kill == $death) && ($hitlock != 'none'))
                      $db3->exec("UPDATE x_db_play_stats SET s_suicids=s_suicids +1 WHERE s_player='{$xc_death}'");
				  
				      if (($modkll == 'MOD_TRIGGER_HURT') && ($hitlock == 'none'))
                      $db3->exec("UPDATE x_db_play_stats SET s_suicids=s_suicids +1 WHERE s_player='{$xc_death}'");
				      
				      if ((($kill != $death) && ($hitlock != 'none')) 
					   || (($kill == $death) && ($hitlock != 'none'))
				        ||(($modkll == 'MOD_TRIGGER_HURT') && ($hitlock == 'none'))
						||(($modkll == 'MOD_FALLING') && ($hitlock == 'none')))
                      $db3->exec("UPDATE x_db_play_stats SET s_deaths=s_deaths +1 WHERE s_player='{$xc_death}'");				  
				  
                      echo '    ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
if($tfinishh > 20){
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
if(is_resource($connect))
{
	if(is_resource($connect))
fclose($connect); 

}
	exit;
}                     }
                    else
                     {
                      //
                     }
                   }
                  else
                   {
                    $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_guid='{$iddeath}' LIMIT 1");
                    foreach ($result as $row)
                     {
                      $kl   = $row['s_kills'];
                      $dth  = $row['s_deaths'];
                      
                  if (((!empty($kl)) && (!empty($dth))) || ((!empty($kl)) && (empty($dth))) || ((empty($kl)) && (!empty($dth))))
                     {
					  $ply  = $row['s_player'];
                      $slll = $row['s_skill']; 
						 
                        $skil_x = round((($kl - $dth) * ($kl / $dth) * 10));
                        if ($kl == 0)
                          $ratio_x = ($kl / 1);
                        else
                          $ratio_x = ($kl / $dth);
                        $ratio_n = substr($ratio_x, 0, 19);
                        usleep(1000);
                        $db3->exec("UPDATE x_db_play_stats SET s_skill='{$skil_x}', s_ratio='{$ratio_n}' WHERE s_guid='{$iddeath}'");
                        echo '    ' . substr($tfinishh = (microtime(true) - $start), 0, 6);
if($tfinishh > 20){
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
if(is_resource($connect))
{
	if(is_resource($connect))
fclose($connect); 

}
	exit;
}                       }
                     }
                    $sql  = "SELECT * FROM x_db_play_stats WHERE s_guid='$iddeath'";
                    $stat = $db3->query($sql)->fetchColumn();
                    if ($stat > 0)
                     {
		                //if (strpos($modkll, 'MOD_FALLING') !== false)
                        // $db3->exec("UPDATE x_db_play_stats SET s_fall=s_fall +1 WHERE s_guid='{$iddeath}'");
				        //if (strpos($modkll, 'MOD_MELEE') !== false) && ($iddeath != $guidcc))
                        //$db3->exec("UPDATE x_db_play_stats SET s_melle=s_melle +1 WHERE s_guid='{$iddeath}'");
				  
				  		 
			//K;02d45f0829c42b2a4460060012e5bbbe;4;;XO;02d45f0829c42b2a4460060012e5bbbe;-1;;XO;none;100000;MOD_SUICIDE;none			 
                      if ((($modkll == 'MOD_SUICIDE') && ($iddeath == $guidcc) && ($byweapon != 'none'))
					   ||(($modkll != 'MOD_SUICIDE') && ($iddeath == $guidcc) && ($byweapon != 'none')) 
				       ||(($modkll == 'MOD_EXPLOSIVE') && ($iddeath == $guidcc) && ($byweapon == 'none'))
					   ||(($modkll == 'MOD_TRIGGER_HURT') && ($byweapon == 'none')) 
					   ||(($modkll == 'MOD_FALLING') && ($byweapon == 'none')))
                   $db3->exec("UPDATE x_db_play_stats SET s_suicids=s_suicids +1 WHERE s_guid='{$iddeath}'");
 
				      if ((($iddeath != $guidcc) && ($byweapon != 'none')) 
					    ||(($iddeath == $guidcc) && ($byweapon != 'none'))
				        ||(($modkll == 'MOD_TRIGGER_HURT') && ($byweapon == 'none'))
						||(($modkll == 'MOD_EXPLOSIVE') && ($byweapon == 'none'))
						||(($modkll == 'MOD_FALLING') && ($byweapon == 'none')))
                   $db3->exec("UPDATE x_db_play_stats SET s_deaths=s_deaths +1 WHERE s_guid='{$iddeath}'");
					  
                      echo '    ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
  if($tfinishh > 20){
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
if(is_resource($connect))
{
	if(is_resource($connect))
fclose($connect); 

}
	exit;
}                   }
                    else
                     {
                      //
                     }
                   }
               }
             }
            ++$x_stop_lp;
            //return;
           }
         }
        if ($deathv !== false)
         {
          ++$x_stop_lp;
          //return;
         }
        ++$x_stop_lp;
      





 usleep(10000);
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
 
	  }
	  
if(empty($tfinishh))	  
	$tfinishh = 1;
if($tfinishh > 20){
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
if(is_resource($connect))
{
	if(is_resource($connect))
fclose($connect); 

}
	exit;
}
                 }
                catch (PDOException $e)
                 {
                  echo "\n";
                  print 'FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
                  sleep (60); exit;
                 }







	  }
     }
   }
 }
 ?>
