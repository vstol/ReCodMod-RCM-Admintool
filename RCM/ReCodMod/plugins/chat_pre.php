<?php
$msgr    = matmat($msgr);
$x_n4    = trim(clearnamex($nivv));
$yug     = mb_strtolower($msgr, 'Windows-1251');
$msgrxc  = mb_strtolower($msgrx, 'Windows-1251');
$yug     = matmat($yug);
$x_mat   = true;
//$dtct = mb_detect_encoding($msgr);
//if($dtct == 'UTF-8' || $dtct == 'utf-8')
$pl_msg  = iconv("windows-1251", "utf-8", $msgr), PHP_EOL;
$pl_msg  = mb_strtolower($pl_msg);
$yesorno = antimat($pl_msg);
if (strpos($yesorno, '%CENSORED%') !== false) {
    $x_mat = false;
    echo "\n " . $pl_msg;
    echo " ALARM %CENSORED%";
}
$player_msg = matmat($player_msg);
foreach ($matnie as $badword) {
    $bdwww = matmat($badword);
    ///////ENGLISH
    preg_match_all("#\b(\w+)\b#", $pl_msg, $out);
    for ($i = 0; $i < count($out[0]); $i++) {
        if ($out[0][$i] == $bdwww) {
            $x_mat = false;
            echo " -mat- badword " . $out[0][$i] . " detected \n " . $pl_msg;
        }
    }
    ///////RUSSIAN  REGXP 1
    if ($x_mat != false) {
        preg_match_all("#\b(\[0-9а-яА-ЯёЁ]+)\b#", $pl_msg, $out);
        for ($i = 0; $i < count($out[0]); $i++) {
            if ($out[0][$i] == $bdwww) {
                $x_mat = false;
                echo "\n RUSSIAN  REGXP 1 " . $out[0][$i] . " detected  " . $pl_msg;
            }
            if ($x_mat != false) {
                if (strlen($out[0][$i]) > 3) {
                    preg_match("/" . $bdwww . "/si", $out[0][$i], $maxbw);
                    if (count($maxbw) > 0) {
                        $x_mat = false;
                        //echo" -sqlite3 bad word ".$out[0][$i]." detected- ";
                        echo "\n -mat- more 3 symbols in badword " . $out[0][$i] . " detected  " . $pl_msg;
                    }
                }
            }
        }
    }
    $fjk = 0;
    ///////RUSSIAN  REGXP 2
    if ($x_mat != false) {
        preg_match_all('/[^\W\d][\w]*/', $pl_msg, $hhm);
        for ($z = 0; $z < count($hhm[0]); $z++) {
            if ($hhm[0][$z] == $bdwww) {
                $x_mat = false;
                echo "\n RUSSIAN  REGXP 2 " . $hhm[0][$z] . " detected  " . $pl_msg;
            }
            if ($x_mat != false) {
                if (strlen($hhm[0][$z]) == 1) {
                    ++$fjk;
                    if ($fjk > 5) {
                        if (strpos($player_msg, $bdwww) !== false) {
                            echo ' DETECTED WORD!!! ';
                            echo $player_msg . " == " . $bdwww;
                            $x_mat = false;
                        }
                    }
                }
            }
        }
    }
}
$x_spam = true;
foreach ($spams as $spms) {
    preg_match("/" . $spms . "/si", $yug, $maxn);
    //$matches = strpos($bdwww, $yug);
    if (count($maxn) > 0) {
        $x_spam = false;
        echo " -spam- ";
    }
}
$x_cry = true;
foreach ($cryers as $cvr) {
    preg_match("/" . $cvr . "/si", $yug, $maxj);
    //$matches = strpos($bdwww, $yug);
    if (count($maxj) > 0) {
        $x_cry = false;
        echo " -cry- ";
    }
}
if ($x_spam || $x_cry) {
    try {
        ////////////////////////////
        if (empty($bannlist))
            $db2 = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db2.sqlite');
        else
            $db2 = new PDO('sqlite:' . $bannlist);
        ////////////////////////////
        $result = $db2->query("SELECT * FROM `x_words`");
        foreach ($result as $row) {
            $wordxx = $row['z_words'];
            /*	    
            preg_match("/".$wordxx."/si", $yug, $maxbw);
            if(count($maxbw) > 0)
            {  
            $x_mat = false;
            echo" -sqlite3 bad word detected- ";
            }
            */
            preg_match_all("#\b(\pL+)\b#", $pl_msg, $out);
            for ($i = 0; $i < count($out[0]); $i++) {
                $out[0][$i] = meessagee($out[0][$i]);
                $out[0][$i] = repooort($out[0][$i]);
                if ($out[0][$i] == $wordxx) {
                    $x_mat = false;
                    echo " -sqlite3- badword " . $out[0][$i] . " detected ";
                }
                if (strlen($wordxx) > 2) {
                    if (strlen($out[0][$i]) > 3) {
                        $out[0][$i] = matmat($out[0][$i]);
                        preg_match("/" . $wordxx . "/si", $out[0][$i], $maxbw);
                        if (count($maxbw) > 0) {
                            $x_mat = false;
                            echo " -sqlite3 bad word " . $out[0][$i] . " detected- ";
                        }
                    }
                }
            }
        }
    }
    catch (PDOException $e) {
        print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
    }
}
?>	
