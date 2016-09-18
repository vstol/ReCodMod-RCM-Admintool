<?php
if ($x_stop_lp == 0) {
    if ((strpos($msgr, $ixz . 'ban') !== false) || (strpos($msgr, $ixz . 'kick') !== false) || (strpos($msgr, $ixz . 'tban') !== false)) {
        echo '-';
    } else {
        if ((strpos($msgr, 'report') !== false) && ($x_number != 1) || (strpos($msgr, 'support') !== false)) {
            if ((strpos($msgr, 'support ') !== false) || (strpos($msgr, 'report ') !== false))
                list($x_cmd, $x_idn) = explode(' ', $msgr); // !s 5 ( 5 = id)
            else
                $x_idn = '';
            if ($x_idn == '') {
                $x_namex = clearnamex($i_name);
                $x_nickx = clearnamex($nickr);
                $mmm     = trim($x_nickx);
                $nnn     = trim($x_namex);
                if (strpos($mmm, $nnn) !== false)
                    $iprepp = $i_ip;
                if (empty($iprepp))
                    $iprepp = $guidn;
                if ((trim($i_id) == trim($idnum)) || (strpos($mmm, $nnn) !== false)) {
                    if (strpos($msgr, $ixz) !== false) {
                        if ((strpos($msgr, 'report') !== false) || (strpos($msgr, 'support') !== false)) {
                            if ((strpos($msgr, " ") !== false) || (strpos($msgr, "  ") !== false)) {
                                if ($x_stop_lp == 0) {
                                    if (strpos($admin_email, ';') !== false) {
                                        $cntnbm     = substr_count($admin_email, ';');
                                        $countnumbs = $cntnbm + 1;
                                        $rotxv      = 0;
                                        $x          = 0;
										 $admin_emaill = explode(';', $admin_email);
										  $servernamex = preg_replace('/\s{2,}/', '_', $servernamex);
$servernamex = preg_replace('/ {2,}/', '_', $servernamex);
$servernamex = preg_replace('/\s+/', '_', $servernamex);
$servernamex = preg_replace('/\s/', '_', $servernamex);
$servernamex = str_replace(array("\r\n", "\n", "\r"), "_", $servernamex);
                                            $servernamex = str_replace("#", "_", $servernamex);
                                            $servernamex = str_replace("!", "_", $servernamex);
                                            $servernamex = str_replace("?", "_", $servernamex);
                                            $servernamex = str_replace("|", "_", $servernamex);
                                            $servernamex = str_replace("/", "_", $servernamex);
                                        while ($x++ < $countnumbs) {
                                            usleep($sleep_rcon);
                                            echo '--' . $server_ip;
                                            echo '--' . $server_port;
                                            echo '--' . $nickr;
                                            echo '--' . $i_ip;
                                            echo '--'.$admin_emaill[$rotxv];										
                                            $msgrn       = str_replace(" ", "_", $msgr);
                                            echo '--------->' . $msgrn;
                                            if (empty($servernamex))
                                                $servernamex = $server_ip;
											usleep($sleep_rcon);
										$servernamex = afdasfawf(repooort($servernamex));
                                            if ($curl = curl_init()) {
                                                curl_setopt($curl, CURLOPT_URL, 'http://recod.ru/cod_report_master/codsender.php?emailz=' . $admin_emaill[$rotxv] . '&mpass=' . $gmailpass . '&sended=' . repooort($nickrn) . '%' . repooort($msgrn) . '&userip=' . $iprepp . '&serverip=' . matmat($servernamex) . ':' . $server_port);
                                                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                                curl_setopt($curl, CURLOPT_POST, true);
                                                curl_setopt($curl, CURLOPT_POSTFIELDS, "");
                                                $out = curl_exec($curl);
                                                echo $out;
                                                curl_close($curl);
                                            }
                                            //TEST LINE   http://recod.ru/cod_report_master/codsender.php?emailz=yaeriks@yandex.ru&mpass=p&sended=pLAYER999%i have probleeem&userip=111.222.333.444&serverip=192.40.23.21:29000
                                            
                                            if((!empty($idnum)) || ($idnum != 'false'))
											rcon('tell '.$idnum.' ^1' . $reppport, '');
										    else	
                                            rcon('say ^1' . $reppport, '');
										
                                            $message = AddCheatHelp("[" . $datetime . "] CHEATER ALARM: " . $i_ip . " (" . $nickr . ") (" . $msgr . ")");
                                            ++$x_number;
                                            echo '  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
                                            ++$x_stop_lp; //return;
                                            ++$rotxv;
                                        }
                                    } else {

                                    if ($x_stop_lp == 0) {
									   echo '--' . $server_ip;
                                        echo '--' . $server_port;
                                        echo '--' . $nickr;
                                        echo '--' . $i_ip;
                                        echo '--';
										 $servernamex = preg_replace('/\s{2,}/', '_', $servernamex);
$servernamex = preg_replace('/ {2,}/', '_', $servernamex);
$servernamex = preg_replace('/\s+/', '_', $servernamex);
$servernamex = preg_replace('/\s/', '_', $servernamex);
$servernamex = str_replace(array("\r\n", "\n", "\r"), "_", $servernamex);
                                            $servernamex = str_replace("#", "_", $servernamex);
                                            $servernamex = str_replace("!", "_", $servernamex);
                                            $servernamex = str_replace("?", "_", $servernamex);
                                            $servernamex = str_replace("|", "_", $servernamex);
                                            $servernamex = str_replace("/", "_", $servernamex);
                                        $msgrn       = str_replace(" ", "_", $msgr);
                                        echo '--------->' . $msgrn;
                                        if (empty($servernamex))
                                            $servernamex = $server_ip;
                                        if ($curl = curl_init()) {
                                            curl_setopt($curl, CURLOPT_URL, 'http://recod.ru/cod_report_master/codsender.php?emailz=' . $admin_email . '&mpass=' . $gmailpass . '&sended=' . repooort($nickrn) . '%' . repooort($msgrn) . '&userip=' . $iprepp . '&serverip=' . repooort($servernamex) . ':' . $server_port);
                                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                            curl_setopt($curl, CURLOPT_POST, true);
                                            curl_setopt($curl, CURLOPT_POSTFIELDS, "");
                                            $out = curl_exec($curl);
                                            echo $out;
                                            curl_close($curl);
                                        }
                                        //TEST LINE   http://recod.ru/cod_report_master/codsender.php?emailz=yaeriks@yandex.ru&mpass=&sended=pLAYER999%i have probleeem&userip=111.222.333.444&serverip=192.40.23.21:29000
                                        usleep($sleep_rcon);
                                        if((!empty($idnum)) || ($idnum != 'false'))
											rcon('tell '.$idnum.' ^1' . $reppport, '');
										    else	
                                            rcon('say ^1' . $reppport, '');
                                        $message = AddCheatHelp("[" . $datetime . "] CHEATER ALARM: " . $i_ip . " (" . $nickr . ") (" . $msgr . ")");
                                        ++$x_number;
                                        echo '  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
                                        ++$x_stop_lp; //return;
									}
                                    }
                                }
                            }
                        }
                    }
                }
            } else {
                $x_namex = clearnamex($i_name);
                $x_nickx = clearnamex($nickr);
                $mmm     = trim($x_nickx);
                $nnn     = trim($x_namex);
                if (strpos($mmm, $nnn) !== false)
                    $iprepp = $i_ip;
                if (empty($iprepp))
                    $iprepp = $guidn;
                $i_namex = afdasfawf($i_name);
                if ($x_idn) {
                    if (strpos($msgr, $ixz) !== false) {
                        if ((strpos($msgr, 'report') !== false) || (strpos($msgr, 'support') !== false)) {
                            if ((strpos($msgr, ' ') !== false) || (strpos($msgr, '  ') !== false)) {
                                if ($x_stop_lp == 0) {
                                    if (strpos($admin_email, ';') !== false) {
                                        $cntnbm     = substr_count($admin_email, ';');
                                        $countnumbs = $cntnbm + 1;
                                        $rotxv      = 0;
                                        $x          = 0;
										$admin_emaill = explode(';', $admin_email);
 $servernamex = preg_replace('/\s{2,}/', '_', $servernamex);
$servernamex = preg_replace('/ {2,}/', '_', $servernamex);
$servernamex = preg_replace('/\s+/', '_', $servernamex);
$servernamex = preg_replace('/\s/', '_', $servernamex);
$servernamex = str_replace(array("\r\n", "\n", "\r"), "_", $servernamex);
                                            $servernamex = str_replace("#", "_", $servernamex);
                                            $servernamex = str_replace("!", "_", $servernamex);
                                            $servernamex = str_replace("?", "_", $servernamex);
                                            $servernamex = str_replace("|", "_", $servernamex);
                                            $servernamex = str_replace("/", "_", $servernamex);										
                                        while ($x++ < $countnumbs) {
                                            usleep($sleep_rcon);
                                            echo '--' . $server_ip;
                                            echo '--' . $server_port;
                                            echo '--' . $nickr;
                                            echo '--' . $i_ip;
                                            echo '--'.$admin_emaill[$rotxv];
                                            $msgrn       = str_replace(" ", "_", $msgr);
                                            $nickrn      = str_replace(" ", "_", $nickr);
 
                                            echo '--------->' . $msgrn;
                                            if (empty($servernamex))
                                                $servernamex = $server_ip;
											usleep($sleep_rcon);
											
                                            if ($curl = curl_init()) {
                                                curl_setopt($curl, CURLOPT_URL, 'http://recod.ru/cod_report_master/codsender.php?emailz=' . $admin_emaill[$rotxv] . '&mpass=' . $gmailpass . '&sended=' . repooort($nickrn) . '%' . repooort($msgrn) . '&userip=' . $iprepp . '&serverip=' . repooort($servernamex) . ':' . $server_port);
                                                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                                curl_setopt($curl, CURLOPT_POST, true);
                                                curl_setopt($curl, CURLOPT_POSTFIELDS, "");
                                                $out = curl_exec($curl);
                                                echo $out;
                                                curl_close($curl);
                                            }
											
                                            if((!empty($idnum)) || ($idnum != 'false'))
											rcon('tell '.$idnum.' ^1' . $reppport . '', '');
										    else	
                                            rcon('say ^1' . $reppport . '', '');
										   
											AddToLogInfo("[" . $datetime . "] REPORTED: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");
                                            ++$x_number;
                                            echo '  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
                                            ++$x_stop_lp; //return;
                                            ++$rotxv;
                                        }
                                    } else {
                                        echo '--' . $server_ip;
                                        echo '--' . $server_port;
                                        echo '--' . $nickr;
                                        echo '--' . $i_ip;
                                        echo '--';
                                        $msgrn       = str_replace(" ", "_", $msgr);
                                        $nickrn      = str_replace(" ", "_", $nickr);
 $servernamex = preg_replace('/\s{2,}/', '_', $servernamex);
$servernamex = preg_replace('/ {2,}/', '_', $servernamex);
$servernamex = preg_replace('/\s+/', '_', $servernamex);
$servernamex = preg_replace('/\s/', '_', $servernamex);
$servernamex = str_replace(array("\r\n", "\n", "\r"), "_", $servernamex);
                                            $servernamex = str_replace("#", "_", $servernamex);
                                            $servernamex = str_replace("!", "_", $servernamex);
                                            $servernamex = str_replace("?", "_", $servernamex);
                                            $servernamex = str_replace("|", "_", $servernamex);
                                            $servernamex = str_replace("/", "_", $servernamex);
                                        echo '--------->' . $msgrn;
                                        if (empty($servernamex))
                                            $servernamex = $server_ip;
                                        if ($curl = curl_init()) {
                                            curl_setopt($curl, CURLOPT_URL, 'http://recod.ru/cod_report_master/codsender.php?emailz=' . $admin_email . '&mpass=' . $gmailpass . '&sended=' . repooort($nickrn) . '%' . repooort($msgrn) . '&userip=' . $iprepp . '&serverip=' . repooort($servernamex) . ':' . $server_port);
                                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                            curl_setopt($curl, CURLOPT_POST, true);
                                            curl_setopt($curl, CURLOPT_POSTFIELDS, "");
                                            $out = curl_exec($curl);
                                            echo $out;
                                            curl_close($curl);
                                        }
                                        usleep($sleep_rcon);
                                            if((!empty($idnum)) || ($idnum != 'false'))
											rcon('tell '.$idnum.' ^1' . $reppport . '', '');
										    else	
                                            rcon('say ^1' . $reppport . '', '');
                                        AddToLogInfo("[" . $datetime . "] REPORTED: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ") reason: G+id");
                                        ++$x_number;
                                        echo '  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
                                        ++$x_stop_lp; //return;	  
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } else if ((strpos($msgr, 'chea') !== false) && ($x_number != 1) || (strpos($msgr, 'wallhack') !== false) && ($x_number != 1) || (strpos($msgr, 'haker') !== false) && ($x_number != 1) || (strpos($msgr, 'hack') !== false) && ($x_number != 1) || (strpos($msgr, 'aimbot') !== false) && ($x_number != 1)) {
            usleep($sleep_rcon);
            rcon('say ^6 ^1' . $pppanix, '');
            AddToLogInfo("[" . $datetime . "] REPORTED: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ")");
            ++$x_number;
            echo '  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
            ++$x_stop_lp; //return;		
        } else if ((strpos($msgr, 'admin') !== false) && ($x_number != 1)) {
            usleep($sleep_rcon);
            rcon('say ^6 ^1' . $adminppp, '');
            AddToLogInfo("[" . $datetime . "] REPORTED: " . $i_ip . " (" . $x_namex . ") (" . $msgr . ")");
            ++$x_number;
            echo '  ' . substr($tfinishh = (microtime(true) - $start), 0, 7);
            ++$x_stop_lp; //return;		
        }
    }
}
?>
 
