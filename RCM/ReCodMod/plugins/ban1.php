<?php
if ($x_loopsv == 0) {
    $x_admin = 0;
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
            ///GUID KICKER
            if (!empty($i_name)) {
                $result = $db2->query("SELECT * FROM bans");
                foreach ($result as $row) {
                    $pssiblegguid = $row['guid'];
                    $reason     = $row['reason'];
                
                    if (strpos($guid, $pssiblegguid) !== false) {
                        if ($x_number != 1) {
                            usleep($sleep_rcon);
                            rcon('clientkick ' . $idk . ' BAN!', '');
                            usleep($sleep_rcon);
                            rcon('clientkick ' . $idk, '');
                            AddToLog("[" . $datetime . "] GUID KICK: (" . $pssiblegguid . ") (" . $reason  . ")");
                            ++$x_loopsv;
                            ++$x_number;
                        }
                    }
                }
            }			
            ///nICKNAME KICKER
            if (!empty($i_name)) {
                $result = $db2->query("SELECT * FROM bans");
                foreach ($result as $row) {
                    $playername = $row['playername'];
                    $reason     = $row['reason'];
                    $plnm       = trim($playername);
                    $i_nn       = trim(clearnamex($i_name));
					$nickname = clearnamex($nickname);
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
        $result = null;
        $db     = NULL;
        $db2    = NULL;
    }
    catch (PDOException $e) {
        print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
    }
}
?>
 
