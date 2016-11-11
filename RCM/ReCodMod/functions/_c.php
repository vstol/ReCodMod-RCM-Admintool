<?php
 $startc        = microtime(true);
  $stimec       = time();

$z_rcm = "RCM[v.3.4.8]";
$dtx   = "^7[14_10_2016]^5";
error_reporting(E_ALL);
ini_set("display_errors", 1);

if(!file_exists($cpath . 'ReCodMod/x_cron/cron_time_kicker')){
	
	if (!mkdir($cpath . 'ReCodMod/x_cron/', 0777, true)) {
    die('installed');
}
	touch($cpath.'ReCodMod/x_cron/cron_time_kicker');
}//else
	$crnnx = "ReCodMod/x_cron/cron_time_kicker";

 $cron_timex=filemtime($cpath.$crnnx);        
if (time()-$cron_timex>=5600) {              
    file_put_contents($cpath.$crnnx,"");     
 
function isDomainAvailible($domain)
 {
  if (!filter_var($domain, FILTER_VALIDATE_URL))
   {
    return false;
   }
  $curlInit = curl_init($domain);
  curl_setopt($curlInit, CURLOPT_CONNECTTIMEOUT, 10);
  curl_setopt($curlInit, CURLOPT_HEADER, true);
  curl_setopt($curlInit, CURLOPT_NOBODY, true);
  curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($curlInit);
  curl_close($curlInit);
  if ($response)
    return true;
  return false;
 }


if (isDomainAvailible('http://recod.ru/'))
 {
  //////////////////////////////============================	
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'http://recod.ru/rcm.php');
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $zxxm = curl_exec($ch);
  if (!empty($zxxm))
   {
    if ($z_rcm == $zxxm)
     {
      $z_rcm = $zxxm;
     }
    else
     {
      $dtx   = date('Y.m.d');
      $z_rcm = 'New ADMINTOOL updates available RCM';
      $spps  = 1555555;
     }
   }
 }
else
 {
  echo "Error 404. RCM Msterserver is offline or you closed tcp and udp ports!";
 }
echo " \n\n curl time >  " . substr($tfinishh = (microtime(true) - $startc), 0, 7);

}


$z_set       = $z_rcm . " Admintool";
$z_ver       = " " . $z_rcm . " " . $dtx . "";
$mapfix      = 'dm'; // zom - IF ZOMBIES MOD , dm - if simple mod
$v_time_gtx  = 100;
$v_time_map  = 100;
$v_time_ban  = 100;
$v_time_kick = 100;
$mistake     = '\/+[a-z]'; //regedit search for mistakes
$ax1         = 'admin';
$ax2         = 'moderator';
$ax3         = 'specialguests';
$ax4         = 'vip';
/*   Groups 
Admins - 0
Moderators - md
Clan members - 1
Vip - 2
Members - 3 (Gamers on website)
Pro player - 4
Special guests - 5
Top player - 6
Noob - 7
Worst - 8
*/
$web_con     = '1';
$rules_msgtoall_kicked_enable = true;   // notify others, that someone has been kicked
 
        class COD4xServerStatus
          {
            var $server = '127.0.0.1';
            var $port = '28960';
            var $protocol = 'udp';
            var $data = '';
            var $serverData = array();
            var $players = array();
            var $scores = array();
            var $pings = array();
            var $meta = array();
            var $timeout = 1;
            function __construct($server, $port, $timeout = 1)
              {
                $this->server  = $server;
                $this->port    = $port;
                $this->timeout = $timeout;
              }
            function getServerStatus()
              {
                $error = false;
                if (!empty($this->server) && !empty($this->port))
                  {
                    $handle = @fsockopen($this->protocol . '://' . $this->server, $this->port);
                    if ($handle)
                      {
                        socket_set_timeout($handle, 1);
                        stream_set_blocking($handle, 1);
                        stream_set_timeout($handle, 5);
                        fputs($handle, "\xFF\xFF\xFF\xFFgetstatus\x00");
                        fwrite($handle, "\xFF\xFF\xFF\xFFgetstatus\x00");
                        $this->data = fread($handle, 8192);
                        $this->meta = stream_get_meta_data($handle);
                        $counter    = 8192;
                        while (!feof($handle) && !$error && $counter < $this->meta['unread_bytes'])
                          {
                            $this->data .= fread($handle, 8192);
                            $this->meta = stream_get_meta_data($handle);
                            if ($this->meta['timed_out'])
                              {
                                $error = true;
                              }
                            $counter += 8192;
                          }
                        if ($error)
                          {
                            echo 'Request timed out.';
                            return false;
                          }
                        else
                          {
                            if (strlen(trim($this->data)) == 0)
                              {
                                echo 'No data received from server.';
                                //$serverinfo_nodata = 1;
                                return false;
                              }
                            else
                              {
                                return true;
                              }
                          }
                      }
                    else
                      {
                        echo 'Could not connect to server.';
                        //$serverinfo_nodata = 1;
                        return false;
                      }
                    fclose($handle);
                  }
              }
            function parseServerData()
              {
                $this->serverData = explode("\n", $this->data);
                $tempplayers      = array();
                for ($i = 2; $i <= sizeof($this->serverData) - 1; $i++)
                  {
                    $tempplayers[sizeof($tempplayers)] = trim($this->serverData[$i]);
                  }
                $tempdata         = array();
                $tempdata         = explode('\\', $this->serverData[1]);
                $this->serverData = array();
                foreach ($tempdata as $i => $v)
                  {
                    if (fmod($i, 2) == 1)
                      {
                        $t                    = $i + 1;
                        $this->serverData[$v] = $tempdata[$t];
                      }
                  }
                $this->serverData['sv_hostname'];
                foreach ($tempplayers as $i => $v)
                  {
                    if (strlen(trim($v)) > 1)
                      {
                        $temp                                  = explode(' ', $v);
                        $this->scores[sizeof($this->scores)]   = $temp[0];
                        $this->pings[sizeof($this->pings)]     = $temp[1];
                        $pos                                   = strpos($v, '"') + 1;
                        $endPos                                = strlen($v) - 1;
                        $this->players[sizeof($this->players)] = substr($v, $pos, $endPos - $pos);
                      }
                  }
              }
            function colorCode($string)
              {
                $string .= "^";
                $find    = array(
                    '/\^0(.*?)\^/is',
                    '/\^1(.*?)\^/is',
                    '/\^2(.*?)\^/is',
                    '/\^3(.*?)\^/is',
                    '/\^4(.*?)\^/is',
                    '/\^5(.*?)\^/is',
                    '/\^6(.*?)\^/is',
                    '/\^7(.*?)\^/is',
                    '/\^8(.*?)\^/is',
                    '/\^9(.*?)\^/is'
                );
                $replace = array(
                    '<font color="color:#000000;">$1</font>^',
                    '<font color="color:#F65A5A;">$1</font>^',
                    '<font color="color:#00F100;">$1</font>^',
                    '<font color="color:#EFEE04;">$1</font>^',
                    '<font color="color:#0F04E8;">$1</font>^',
                    '<font color="color:#04E8E7;">$1</font>^',
                    '<font color="color:#F75AF6;">$1</font>^',
                    '<font color="color:#FFFFFF;">$1</font>^',
                    '<font color="color:#7E7E7E;">$1</font>^',
                    '<font color="color:#6E3C3C;">$1</font>^'
                );
                $string  = preg_replace($find, $replace, $string);
                return substr($string, 0, strlen($string) - 1);
              }
            function returnData()
              {
                return $this->data;
              }
            function returnMeta()
              {
                return $this->meta;
              }
            function returnServerData()
              {
                return $this->serverData;
              }
            function returnPlayers()
              {
                return $this->players;
              }
            function returnPings()
              {
                return $this->pings;
              }
            function returnScores()
              {
                return $this->scores;
              }
          }
 
require $cpath . 'cfg/_connection.php';
require $cpath . 'cfg/_settings.php';

  if(empty($groups_cfg))
require $cpath . 'cfg/_groups.php';
  else
	 require $groups_cfg;


if(empty($etop))
$etopx = 's_ratio';
	
if($etop == 'kills')
	$etopx = 's_kills';
else if($etop == 'deaths')
	$etopx = 's_deaths';
else if($etop == 'suicides')
	$etopx = 's_suicids';
else if($etop == 'bash')
	$etopx = 's_melle';
else if($etop == 'knife')
	$etopx = 's_melle';
else if($etop == 'grenades')
	$etopx = 's_grenade';
else if($etop == 'skill')
	$etopx = 's_skill';
else if($etop == 'ratio')
	$etopx = 's_ratio';
else
    $etopx = 's_ratio';


if(empty($language))
$language = 'en';

if ($language == 'en')
require $cpath . 'cfg/languages/en.lng.php';
else if ($language == 'ru')
require $cpath . 'cfg/languages/ru.lng.php';
else if ($language == 'de')
require $cpath . 'cfg/languages/de.lng.php';
else if ($language == 'pl')
require $cpath . 'cfg/languages/pl.lng.php';
else if ($language == 'it')
require $cpath . 'cfg/languages/it.lng.php';
else if ($language == 'br')
require $cpath . 'cfg/languages/br.lng.php';
else if ($language == 'fr')
require $cpath . 'cfg/languages/fr.lng.php';
else if ($language == 'nl')
require $cpath . 'cfg/languages/nl.lng.php';
else
require $cpath . 'cfg/languages/en.lng.php';


$acceptplugin = 100;
if(empty($msgr))
	$msgr = 'none';

   if (strpos($serverinfo_adress, ';') !== false)
      {
        $cntnbm     = substr_count($serverinfo_adress, ';');
        $countnumbs = $cntnbm + 1;
        $xmde       = 0;
        $x          = 0;
        while ($x++ < $countnumbs)
          {
                $server_name[$xmde] = 'n/a';
                $server_mapname[$xmde] = 'n/a';
                $server_gametype[$xmde] = 'n/a';
                $servermapsinf[$xmde] = 'n/a';
                $server_max_players[$xmde]  = 'n/a';
                $server_cur_players[$xmde] = '0';
                 $server_ipp[$xmde] = '0';
                $playerzcc = '0';	
      ++$xmde;
	  }}	
			
//********************************************************
/// Register from website sync. // if login from website use 1, no from website login = 0 - this line supporting only with special RCM web plugins
$registerx      = '0';
//********************************************************
//***********************************************\ dont change it after \***********************************************
//======================================================================= Alba supported only
$game_ac        = '0'; /// With anticheat alba (1 - yes, 0 - without)
$game_ac_status = '0'; /// Kick without alba and good skill (1 - yes, 0 - without)
$game_ptch      = '---'; /// /1.2/ codx - on   another off if us codam
$game_mod       = 'NONE'; /// for /codam/ mods awe 1.2 only
//======================================================================= Alba supported only
$sleep_rcon     = 529000; ///Rcon get pause time   
$codecon        = 'http://recod.ru/RECODMOD_CONNECTOR.txt';
//***********************************************\ dont change it before\***********************************************
if(file_exists($cpath . 'ReCodMod/databases/db1.sqlite') 
	    && file_exists($cpath . 'ReCodMod/databases/db2.sqlite')
        && file_exists($cpath . 'ReCodMod/databases/db3.sqlite')
        && file_exists($cpath . 'ReCodMod/databases/db4.sqlite')){

try
 {
  ////////////////////////////	  
  $db4    = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db4.sqlite');
  ////////////////////////////
  $queryv = $db4->query("SELECT COUNT(*) as count FROM x_db_players");
  $queryv->setFetchMode(PDO::FETCH_ASSOC);
  $rowx       = $queryv->fetch();
  $db_players = $rowx['count'];
  $db4        = NULL;
  $queryv     = NULL;
 }
catch (PDOException $e)
 {
  print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
 }
 
try
 {
  ////////////////////////////
  if (empty($bannlist))
    $db2 = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db2.sqlite');
  else
    $db2 = new PDO('sqlite:' . $bannlist);
  ////////////////////////////
  $qc = $db2->query("SELECT COUNT(*) as count FROM bans");
  $qc->setFetchMode(PDO::FETCH_ASSOC);
  $ryy     = $qc->fetch();
  $xtotal_bans = $ryy['count'];
  $db2     = NULL;
  $qc      = NULL;
 }
catch (PDOException $e)
 {
  print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
 }
if (empty($xtotal_bans))
  $xtotal_bans = '0';
try
 {
  $db3    = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
  $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_kills>=$limm ORDER BY ($etopx+0) DESC LIMIT 1");
  $number = 0;
  foreach ($result as $row)
   {
    $etop_player_name = $row['s_clear'];
   }
 }
catch (PDOException $e)
 {
  print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
 }
 
usleep(9000);
$daten = date('Y-m-d');
try
 {
  $db3    = new PDO('sqlite:' . $cpath . 'ReCodMod/databases/db3.sqlite');
  $result = $db3->query("SELECT * FROM x_db_play_stats WHERE s_kills>=10 AND s_lasttime LIKE '%" . $daten . "%' ORDER BY ($etopx+0) DESC LIMIT 5");
  $number = 0;
  $i      = 0;
  foreach ($result as $row)
   {
    $playernamee[$i] = $row['s_clear'];
    $i++;
   }
  $result = null;
  $db3    = NULL;
 }
catch (PDOException $e)
 {
  print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
 }
		}
 		
if (empty($db_players))
  $db_players = '0';
		if (empty($etop_player_name))
  $etop_player_name = '['.$rfnonply.']';
if (empty($xtotal_bans))
  $xtotal_bans = '0';		
if (empty($playernamee[0]))
  $playernamee[0] = '['.$rfnonee.']';
if (empty($playernamee[1]))
  $playernamee[1] = '['.$rfnonee.']';
if (empty($playernamee[2]))
  $playernamee[2] = '['.$rfnonee.']';
if (empty($playernamee[3]))
  $playernamee[3] = '['.$rfnonee.']';
if (empty($playernamee[4]))
  $playernamee[4] = '['.$rfnonee.']';
 
function __autoloadER($settings_name)
 {
  global $cpath;
  require_once $cpath . "cfg/" . $settings_name . '.cfg.php';
 }
 
if (file_exists($cpath . 'ReCodMod/x_logs/g_servername.log'))
 {
  $f          = fopen($cpath . "ReCodMod/x_logs/g_servername.log", "r");
  $servername = fgets($f, 1024);
  $servername = trim($servername);
 }
                if (empty($cfg_bannlist))
                    require $cpath . 'cfg/bans.cfg.php';
                else
                    require $cfg_bannlist;

require $cpath . 'cfg/commands.cfg.php';
require $cpath . 'cfg/rules.cfg.php';
  if(empty($cfg_badwords))
require $cpath . 'cfg/badwords.cfg.php';
  else
	 require $cfg_badwords;
require $cpath . 'cfg/spam.cfg.php';
require $cpath . 'cfg/cryingkids.cfg.php';
require $cpath . 'cfg/messages.cfg.php';

$cmdadmin = "^3[^2!".$admcmdlist."^3]";
$cmdmoderators = "^3[^2!".$modrcmdlist."^3]";
$vipcmdlist = "^3[^2!".$admcmdlist."^3]";

require $cpath . 'cfg/maps_gametypes.cfg.php';
if (empty($kicknotingrp))
  $kicknotingrp = 1;
$admin_code1         = $ax1 . $admin_code;
$moderator_code1     = $ax2 . $moderator_code;
$specialguests_code1 = $ax3 . $specialguests_code;
$vip_code1           = $ax4 . $vip_code;
if (empty($game_patch))
 {
  
  function ghbfffm($string)
   {
    $string = str_replace(array(
      "/^7"
    ), '', $string);
    $string = str_replace(array(
      "^7"
    ), '', $string);
    return $string . "";
   }
  
  if (file_exists($cpath . 'ReCodMod/x_logs/g_gamename.log'))
   {
    $fyf = file($cpath . 'ReCodMod/x_logs/g_gamename.log');
    foreach ($fyf as $ryhfd)
     {
      $mpgamenname = ghbfffm($ryhfd);
      if (file_exists($cpath . 'ReCodMod/x_logs/g_shortversion.log'))
       {
        $fyfx = file($cpath . 'ReCodMod/x_logs/g_shortversion.log');
        foreach ($fyfx as $ryhfdv)
         {
          $mpshortver = ghbfffm($ryhfdv);
          if (strpos($mpgamenname, '5') !== false)
           {
            $game_patch = 'cod5';
           }
          else if (strpos($mpgamenname, 'Call of Duty 4') !== false)
           {
            $game_patch = 'cod4';
           }
          else if (strpos($mpgamenname, 'Call of Duty 2') !== false)
           {
            $game_patch = 'cod2';
           }
          else if (strpos($mpgamenname, 'Call of Duty') !== false)
           {
            $game_patch = 'cod1_' . $mpshortver . '';
           }
          else if (strpos($mpgamenname, 'main') !== false)
           {
            $game_patch = 'cod1_' . $mpshortver . '';
           }		   
          else
           {
            $game_patch = 'cod1_1.41';
           }
         }
       }
     }
	 if(!empty($game_patch))
	$game_patch = trim($game_patch);   
   }
 }
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
if(!empty($connect)){
if(is_resource($connect)){
fclose($connect);
echo ' rcon null ';}}
//echo '  ====>>>>>>>  ' . substr($tfinishh = (microtime(true) - $startc), 0, 7);
?>
