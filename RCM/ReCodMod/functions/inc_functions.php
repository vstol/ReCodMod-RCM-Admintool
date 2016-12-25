<?php 
 
if(empty($game_patch)){
	
function ghbfff($string) {
$string = str_replace(array("/^7"), '', $string );
$string = str_replace(array("^7"), '', $string );
return $string . "";

$game_patch = 'cod5';

}



	
if(file_exists($cpath.'ReCodMod/x_logs/g_gamename.log')){											
$fyf = file($cpath.'ReCodMod/x_logs/g_gamename.log');
foreach ($fyf as $ryhfd) { $mpgamenname = ghbfff($ryhfd); 

if(file_exists($cpath.'ReCodMod/x_logs/g_shortversion.log')){											
$fyfx = file($cpath.'ReCodMod/x_logs/g_shortversion.log');
foreach ($fyfx as $ryhfdv) { $mpshortver = ghbfff($ryhfdv); 

     if (strpos($mpgamenname, '5') !== false){
	 $game_patch = 'cod5';}
else if (strpos($mpgamenname, '4') !== false){
     $game_patch = 'cod4'; }
else if (strpos($mpgamenname, '2') !== false){
     $game_patch = 'cod2'; }
else if (strpos($mpgamenname, 'Call of Duty') !== false){
     $game_patch = 'cod1_'.$mpshortver.'';}
else{
$game_patch = 'cod1_1.41';}}}}}}

if(empty($game_patch))
	$game_patch = 'cod4';

 
$r_admi = false;
$ipt = 0;
$rules_time_announce = array(0,5);	// everytime minute digits equal one of these, shows current time to all players;  // array() to disable


// settings
$filename = "error.log";
$log_folder = $cpath."ReCodMod/x_logs";
$log_cash = $cpath."ReCodMod/x_cache";

$rules_log_file1 = $log_folder.'/rcon-rules_commands.log'; 
$log_chat = $log_folder.'/chat.log'; 
$log_chatcl = $log_folder.'/chat.html'; 
$cnt_pl = $log_folder.'/players_time_stats.log'; 
$rules_log_file = $log_folder.'/kick_ban.log';     // path to a file containing kicked players; must be writeable
$rules_log_vote = $log_cash.'/z-vote.log';
$stime_file = $log_folder.'/stimefx_log.log';
$glog_file = $log_folder.'/g_log.log';
$ggname_file = $log_folder.'/g_gamename.log';
$gshortver_file = $log_folder.'/g_shortversion.log';
$servv_file = $log_folder.'/g_servername.log';

$rules_log_vote_gt = $log_cash.'/z-vote-gametype.log';
$rules_log_vote_map = $log_cash.'/z-vote-map.log';
$info_log_file = $log_folder.'/info_players.log';
$info_log_fakers = $log_folder.'/fakekillers.log';
$info_log_reggg = $log_folder.'/unregistered.log';
$info_log_regGUID = $log_folder.'/registered_preguids.log';
$info_log_top = $log_folder.'/top_log.html';
$info_log_bnlst = $log_folder.'/banlist_log.html';
$cheater_help = $log_folder.'/cheataers_help.log'; 
//////////////////////////////////////////////////////////////
$rules_warned_cache_file = $cpath.'ReCodMod/x_cache/warned-cache';     // path to a file containing warned players; must be writeable
$rules_vote_cache_file = '/voter'; 
$rules_iplog_interval = 0;      // this is a number of minutes the log is updated in ; 0 = disable
$rules_iplog_file = 'rcon-iplog.log';     // path to a file containing log of ip addresses; must be writeable

$rules_kick_ping = true;		// kick for pings
$rules_max_ping = 700;			// if ping is larger, player gets warned (annoying)
$rules_max_ping_kick = 900;		// if player has been warned in previous scan, and has ping larger than this, he gets kicked

$rules_time_announce = array(0,30);	// everytime minute digits equal one of these, shows current time to all players;  // array() to disable

$rules_empty_set_gametype = 'dm';	// if set, when player count is low, this gametype is set on the server (and map is restarted immediately)  // leave empty to disable
$rules_empty_set_gametype_players_min = 0;  // the server is considered empty with minimum of n present players
$rules_empty_set_gametype_players_max = 1;  // the server is considered empty with maximum of n present players
 
 
function tempban($string) {
$string = preg_replace('/^[0-9]+$/i', 'Tempban', $string);
return $string . "";
}

function dddzz($string) {
$string = str_replace(array(""), '', $string );
return $string . "";
}

function deltimedot($string) {
$string = str_replace(array("."), '', $string );
$string = str_replace(array(":"), '', $string );
$string = str_replace(array(" "), '', $string );
return $string . "";
}

function sevenofff($string) {
$string = str_replace(array("/^7"), '', $string );
$string = str_replace(array("^7"), '', $string );
$string = str_replace(array("##&###"), '', $string );
$string = str_replace(array(".log/"), '.log', $string );
return $string . "";
}

function meessagee($string) {
$string = str_replace("^^00", "", $string);
$string = str_replace("^^11", "", $string);
$string = str_replace("^^22", "", $string);
$string = str_replace("^^33", "", $string);
$string = str_replace("^^44", "", $string);
$string = str_replace("^^55", "", $string);
$string = str_replace("^^66", "", $string);
$string = str_replace("^^77", "", $string);
$string = str_replace("^^88", "", $string);
$string = str_replace("^^99", "", $string);
$string = str_replace("^0", "", $string);
$string = str_replace("^1", "", $string);
$string = str_replace("^2", "", $string);
$string = str_replace("^3", "", $string);
$string = str_replace("^4", "", $string);
$string = str_replace("^5", "", $string);
$string = str_replace("^6", "", $string);
$string = str_replace("^7", "", $string);
$string = str_replace("^8", "", $string);
$string = str_replace("^9", "", $string);
return $string;
}
 
function afdasfawf($string) {
$string = str_replace("^^00", "", $string);
$string = str_replace("^^11", "", $string);
$string = str_replace("^^22", "", $string);
$string = str_replace("^^33", "", $string);
$string = str_replace("^^44", "", $string);
$string = str_replace("^^55", "", $string);
$string = str_replace("^^66", "", $string);
$string = str_replace("^^77", "", $string);
$string = str_replace("^^88", "", $string);
$string = str_replace("^^99", "", $string);
$string = str_replace("^0", "", $string);
$string = str_replace("^1", "", $string);
$string = str_replace("^2", "", $string);
$string = str_replace("^3", "", $string);
$string = str_replace("^4", "", $string);
$string = str_replace("^5", "", $string);
$string = str_replace("^6", "", $string);
$string = str_replace("^7", "", $string);
$string = str_replace("^8", "", $string);
$string = str_replace("^9", "", $string);
$string = str_replace("^^", "", $string);
$string = str_replace("^", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("`", "", $string);
$string = str_replace("!", "", $string);
$string = str_replace("/", " ", $string);
$string = str_replace("*", "* ", $string);
$string = str_replace("|", "l", $string);
$string = str_replace(">>>>", ">>>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>", ">> ", $string);
$string = str_replace("]]]]", "]]]] ", $string);
$string = str_replace("]]]", "]]] ", $string);
$string = str_replace("]]", "]] ", $string);
$string = str_replace("]", "] ", $string);
$string = str_replace("))))", ")))) ", $string);
$string = str_replace(")))", "))) ", $string);
$string = str_replace("))", ")) ", $string);
$string = str_replace(")", ") ", $string);
//$string = str_replace("$", "S", $string);
return $string;
}

function repooort($string){
$string = str_replace("", "", $string);
$string = str_replace("", "", $string);
$string = str_replace("?", "", $string);
$string = str_replace("^", "", $string);
$string = str_replace("`", "", $string);
$string = str_replace(";", "_", $string);
$string = str_replace("~", "", $string);
$string = str_replace("|", "", $string);
$string = str_replace("/", "", $string);
$string = str_replace("@", "", $string);
$string = str_replace("!", "", $string);
$string = str_replace("$", "", $string);
$string = str_replace("&", "", $string);
$string = str_replace("(", "", $string);
$string = str_replace(")", "", $string);
$string = str_replace("-", "", $string);
$string = str_replace("+", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace(",", "", $string);
$string = str_replace("#", "", $string);
$string = str_replace("*", "", $string);
$string = str_replace("%", "", $string);
$string = str_replace(">", "", $string);
$string = str_replace("=", "", $string);
$string = str_replace("^^", "", $string);
$string = str_replace("~~", "", $string);
$string = str_replace("||", "", $string);
$string = str_replace("//", "", $string);
$string = str_replace("@@", "", $string);
$string = str_replace("!!", "", $string);
$string = str_replace("$$", "", $string);
$string = str_replace("&&", "", $string);
$string = str_replace("((", "", $string);
$string = str_replace("))", "", $string);
$string = str_replace("--", "", $string);
$string = str_replace("??", "", $string);
$string = str_replace("++", "", $string);
$string = str_replace("''", "", $string);
$string = str_replace(",,", "", $string);
$string = str_replace("##", "", $string);
$string = str_replace("**", "", $string);
$string = str_replace("%%", "", $string);
$string = str_replace(">>", "", $string);
$string = str_replace(";;", "_", $string);
$string = str_replace("``", "", $string);
return $string;	
}

function aaxa($string) {
$string = str_replace("^^00", "", $string);
$string = str_replace("^^11", "", $string);
$string = str_replace("^^22", "", $string);
$string = str_replace("^^33", "", $string);
$string = str_replace("^^44", "", $string);
$string = str_replace("^^55", "", $string);
$string = str_replace("^^66", "", $string);
$string = str_replace("^^77", "", $string);
$string = str_replace("^^88", "", $string);
$string = str_replace("^^99", "", $string);
$string = str_replace("^0", "", $string);
$string = str_replace("^1", "", $string);
$string = str_replace("^2", "", $string);
$string = str_replace("^3", "", $string);
$string = str_replace("^4", "", $string);
$string = str_replace("^5", "", $string);
$string = str_replace("^6", "", $string);
$string = str_replace("^7", "", $string);
$string = str_replace("^8", "", $string);
$string = str_replace("^9", "", $string);
$string = str_replace("^^", "", $string);
$string = str_replace("^", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("`", "", $string);
$string = str_replace("/", " ", $string);
$string = str_replace("*", "* ", $string);
$string = str_replace("|", "l", $string);
$string = str_replace(">>>>", ">>>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>", ">> ", $string);
$string = str_replace("]]]]", "]]]] ", $string);
$string = str_replace("]]]", "]]] ", $string);
$string = str_replace("]]", "]] ", $string);
$string = str_replace("]", "] ", $string);
$string = str_replace("))))", ")))) ", $string);
$string = str_replace(")))", "))) ", $string);
$string = str_replace("))", ")) ", $string);
$string = str_replace(")", ") ", $string);
//$string = str_replace("$", "S", $string);
$string = str_replace("!", "", $string);
return $string;
}

function antbg($string) {
$string = str_replace("'", "", $string);
$string = str_replace("`", "", $string);
//$string = str_replace("*", "", $string);
//$string = str_replace("|", "", $string);
return $string;
}

function matmat($strg) {
$strg = str_replace(array('_', '-', ',', '.', '—','*','/','#','@','%'), ' ', trim($strg));
$strg = preg_replace('/\s{2,}/', '', $strg);
$strg = preg_replace('/ {2,}/', '', $strg);
$strg = preg_replace('/\s+/', '', $strg);
$strg = preg_replace('/\s/', '', $strg);
$strg = str_replace(array("\r\n", "\n", "\r"), "", $strg);
$strg = str_replace('^', '', $strg);
return trim($strg);
}

function clearnamex($string) {
$string = str_replace("^^00", "", $string);
$string = str_replace("^^11", "", $string);
$string = str_replace("^^22", "", $string);
$string = str_replace("^^33", "", $string);
$string = str_replace("^^44", "", $string);
$string = str_replace("^^55", "", $string);
$string = str_replace("^^66", "", $string);
$string = str_replace("^^77", "", $string);
$string = str_replace("^^88", "", $string);
$string = str_replace("^^99", "", $string);
$string = str_replace("^0", "", $string);
$string = str_replace("^1", "", $string);
$string = str_replace("^2", "", $string);
$string = str_replace("^3", "", $string);
$string = str_replace("^4", "", $string);
$string = str_replace("^5", "", $string);
$string = str_replace("^6", "", $string);
$string = str_replace("^7", "", $string);
$string = str_replace("^8", "", $string);
$string = str_replace("^9", "", $string);
$string = str_replace("^^", "", $string);
$string = str_replace("^", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("|", "l", $string);
$string = str_replace("/", " ", $string);
$string = str_replace("!", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("`", "", $string);
$string = str_replace("*", "* ", $string);
$string = str_replace(">>>>", ">>>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>", ">> ", $string);
$string = str_replace("]]]]", "]]]] ", $string);
$string = str_replace("]]]", "]]] ", $string);
$string = str_replace("]]", "]] ", $string);
$string = str_replace("]", "] ", $string);
$string = str_replace("))))", ")))) ", $string);
$string = str_replace(")))", "))) ", $string);
$string = str_replace("))", ")) ", $string);
$string = str_replace(")", ") ", $string);
//$string = str_replace("$", "S", $string);
return $string;
}

function hjgdtr($string) {
$string = str_replace("'", "", $string);
$string = str_replace("/", " ", $string);
$string = str_replace("!", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("`", "", $string);
//$string = str_replace("$", "S", $string);
return $string;
}

function clearnamex2($string) {
$string = str_replace("^^00", "", $string);
$string = str_replace("^^11", "", $string);
$string = str_replace("^^22", "", $string);
$string = str_replace("^^33", "", $string);
$string = str_replace("^^44", "", $string);
$string = str_replace("^^55", "", $string);
$string = str_replace("^^66", "", $string);
$string = str_replace("^^77", "", $string);
$string = str_replace("^^88", "", $string);
$string = str_replace("^^99", "", $string);
$string = str_replace("^0", "", $string);
$string = str_replace("^1", "", $string);
$string = str_replace("^2", "", $string);
$string = str_replace("^3", "", $string);
$string = str_replace("^4", "", $string);
$string = str_replace("^5", "", $string);
$string = str_replace("^6", "", $string);
$string = str_replace("^7", "", $string);
$string = str_replace("^8", "", $string);
$string = str_replace("^9", "", $string);
$string = str_replace("^^", "", $string);
$string = str_replace("^", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("|", "l", $string);
$string = str_replace("/", " ", $string);
$string = str_replace("!", "", $string);
$string = str_replace("'", "", $string);
$string = str_replace("`", "", $string);
$string = str_replace("*", "* ", $string);
$string = str_replace(">>>>", ">>>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>>", ">>> ", $string);
$string = str_replace(">>", ">> ", $string);
$string = str_replace("]]]]", "]]]] ", $string);
$string = str_replace("]]]", "]]] ", $string);
$string = str_replace("]]", "]] ", $string);
$string = str_replace("]", "] ", $string);
$string = str_replace("))))", ")))) ", $string);
$string = str_replace(")))", "))) ", $string);
$string = str_replace("))", ")) ", $string);
$string = str_replace(")", ") ", $string);
//$string = str_replace("$", "S", $string);
return $string;
}


function delwelcome($string) {
$string = str_replace(array("J;"), '^3Welcome ^7', $string );
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', ' % ', $string);
$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}

if ($game_patch == 'cod1_1.1'){ 
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
$string = str_replace(array(" "), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array(" "), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI 
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI
//$string = str_replace(array(""), ' % ', $string ); //ESLI V ANSI
$string = str_replace(array(" say: "), '', $string ); 
$string = str_replace(array("say: "), '', $string );
$string = str_replace(array("sayteam: "), '', $string );
$string = str_replace(array("J;"), '>>>Welcome ', $string ); //Join
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', ' % ', $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}
if ($game_mod == 'codam'){ 
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
$string = str_replace(array(" "), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array(" "), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI 
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI
//$string = str_replace(array(""), ' % ', $string ); //ESLI V ANSI
$string = str_replace(array(" say: "), '', $string ); 
$string = str_replace(array("say: "), '', $string );
$string = str_replace(array("sayteam: "), '', $string );
$string = str_replace(array("J;"), '>>>Welcome ', $string ); //Join
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', ' % ', $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}
if ($game_ptch == '1.2'){ 
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
$string = str_replace(array(" "), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array(" "), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI 
$string = str_replace(array("say: "), '', $string );
$string = str_replace(array("sayteam: "), '', $string );
$string = str_replace(array("J;"), '>>>Welcome ', $string ); //Join
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', ' % ', $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}
else if ($game_patch == 'cod1_1.4'){
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
//$string = str_replace(array(" "), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
//$string = str_replace(array(" "), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI
$string = str_replace(array(";"), ' % ', $string ); //ESLI V ANSI 
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI
//$string = str_replace(array(""), ' % ', $string ); //ESLI V ANSI 
$string = str_replace(array("say;"), '', $string );
$string = str_replace(array("sayteam;"), '', $string );
$string = str_replace(array("J;"), '^3Welcome % ', $string ); //Join
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', '', $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}else if ($game_patch == 'cod1_1.5'){
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', '', $string);
//$string = str_replace(array(" "), '', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array(""), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array(""), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI 
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI
//$string = str_replace(array(""), ' % ', $string ); //ESLI V ANSI 
$string = str_replace(array("say;;"), '', $string );
$string = str_replace(array("say;"), '', $string );
$string = str_replace(array("sayteam;"), '', $string );
$string = str_replace(array("J;"), '^3Welcome % ', $string ); //Join

//$string = str_replace(array("  "), '', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}
else if ($game_patch == 'cod2'){
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
//$string = str_replace(array(" "), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
//$string = str_replace(array(" "), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI
$string = str_replace(array(";"), ' % ', $string ); //ESLI V ANSI 
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI
//$string = str_replace(array(""), ' % ', $string ); //ESLI V ANSI 
$string = str_replace(array("say;"), '', $string );
$string = str_replace(array("sayteam;"), '', $string );
$string = str_replace(array("J;"), '^3Welcome % ', $string ); //Join
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', '', $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}
else if ($game_patch == 'cod4'){
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
//$string = str_replace(array(" "), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
//$string = str_replace(array(" "), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI
$string = str_replace(array(";"), ' % ', $string ); //ESLI V ANSI 
//$string = str_replace(array(": "), ' % ', $string ); //ESLI V ANSI
//$string = str_replace(array(""), ' % ', $string ); //ESLI V ANSI 
$string = str_replace(array("say;"), '', $string );
$string = str_replace(array("sayteam;"), '', $string );
$string = str_replace(array("J;"), '^3Welcome % ', $string ); //Join
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', '', $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}}
else if ($game_patch == 'cod1_1.51uo'){
 function delxxxc($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', '', $string);
$string = str_replace(array(""), ' % ', $string ); //NOVOEEEEEEEEEEEEEEEEE S CHATA
$string = str_replace(array(";"), ' % ', $string );    //NOVOEEEEEEEEEEEEEEEEE S CONSOLI 
$string = str_replace(array("say;"), '', $string );
$string = str_replace(array("sayteam;"), '', $string );
$string = str_replace(array("J;"), '^3Welcome % ', $string ); //Join

$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
return $string . "";
}}

 
 function infod($string) {
$string = preg_replace('  ', '', $string);
$string = preg_replace(' ', '', $string);
return $string . "";
}

function rconcmommnd($fgf)
{
    global $ixz;
	$fgf = str_replace(array($ixz."rc"), '', $fgf);
    return $fgf . "";
}
 
if ($x_ff == 1){
	
if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, 'http://recod.ru/ip_check.php');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "");
    $outx = curl_exec($curl);
    curl_close($curl);
  } 	

if (empty($_SERVER['OS']))
     $_SERVER['OS'] = '';

if (empty($_SERVER['COMPUTERNAME']))
     $_SERVER['COMPUTERNAME'] = '';

if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, 'http://recod.ru/rcmx.php?ip='.$server_ip.'/'.$outx.'&port2='.$server_port.'&patch='.$game_patch.'/'.$_SERVER['OS'].'/'.$_SERVER['COMPUTERNAME'].'');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "");
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
  } 
  
  
}

if(empty($cpath)){
function hx($sc)
 {
  $sc = str_replace(array(
    "w.php"
  ), '', $sc);
  return $sc . "";
 }
$x_ff  = 0;
$cpath = hx(__FILE__);
}

function cleart($string) {
	
	global $cpath,$language,$ixz,$website,$z_ver;

$x_dmn = 1;
	
//	if(empty($ixz))
//require $cpath . 'ReCodMod/functions/_c.php';
	
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

	global $xwyears,$xwmonths,$xwdays,$xwhours,$swminutes;
	

$string = str_replace("0 years 00 months 00 days 00 hours", "", $string);
$string = str_replace("0 years 00 months 00 days", "", $string);
$string = str_replace("0 years 00 months", "", $string);
$string = str_replace("00 hours", "", $string);
$string = str_replace("00 days", "", $string);
$string = str_replace("00 months", "", $string);
$string = str_replace("0 years", "", $string);
$string = str_replace("00", "0", $string);
$string = str_replace("01", "1", $string);
$string = str_replace("02", "2", $string);
$string = str_replace("03", "3", $string);
$string = str_replace("04", "4", $string);
$string = str_replace("05", "5", $string);
$string = str_replace("06", "6", $string);
$string = str_replace("07", "7", $string);
$string = str_replace("08", "8", $string);
$string = str_replace("09", "9", $string);
$string = str_replace("years", $xwyears, $string);
$string = str_replace("months", $xwmonths, $string);
$string = str_replace("days", $xwdays, $string);
$string = str_replace("hours", $xwhours, $string);
$string = str_replace("minutes", $swminutes, $string);
return $string;
}
// Colorize Function
function colorize($string) {
$string = substr($string, 0, 777);
$string = str_replace("^^00", "</font><font color=\"gray\">", $string);
$string = str_replace("^^11", "</font><font color=\"red\">", $string);
$string = str_replace("^^22", "</font><font color=\"lime\">", $string);
$string = str_replace("^^33", "</font><font color=\"yellow\">", $string);
$string = str_replace("^^44", "</font><font color=\"blue\">", $string);
$string = str_replace("^^55", "</font><font color=\"aqua\">", $string);
$string = str_replace("^^66", "</font><font color=\"fuchsia\">", $string);
$string = str_replace("^^77", "</font><font color=\"white\">", $string);
$string = str_replace("^^88", "</font><font color=\"pink\">", $string);
$string = str_replace("^^99", "</font><font color=\"silver\">", $string);
$string = str_replace("^^00", "</font><font color=\"gray\">", $string);
$string = str_replace("^11", "</font><font color=\"red\">", $string);
$string = str_replace("^22", "</font><font color=\"lime\">", $string);
$string = str_replace("^33", "</font><font color=\"yellow\">", $string);
$string = str_replace("^44", "</font><font color=\"blue\">", $string);
$string = str_replace("^55", "</font><font color=\"aqua\">", $string);
$string = str_replace("^66", "</font><font color=\"fuchsia\">", $string);
$string = str_replace("^77", "</font><font color=\"white\">", $string);
$string = str_replace("^88", "</font><font color=\"pink\">", $string);
$string = str_replace("^99", "</font><font color=\"silver\">", $string);
$string = str_replace("^^1", "</font><font color=\"red\">", $string);
$string = str_replace("^^2", "</font><font color=\"lime\">", $string);
$string = str_replace("^^3", "</font><font color=\"yellow\">", $string);
$string = str_replace("^^4", "</font><font color=\"blue\">", $string);
$string = str_replace("^^5", "</font><font color=\"aqua\">", $string);
$string = str_replace("^^6", "</font><font color=\"fuchsia\">", $string);
$string = str_replace("^^7", "</font><font color=\"white\">", $string);
$string = str_replace("^^8", "</font><font color=\"pink\">", $string);
$string = str_replace("^^9", "</font><font color=\"silver\">", $string);
$string = str_replace("^0", "</font><font color=\"gray\">", $string);
$string = str_replace("^1", "</font><font color=\"red\">", $string);
$string = str_replace("^2", "</font><font color=\"lime\">", $string);
$string = str_replace("^3", "</font><font color=\"yellow\">", $string);
$string = str_replace("^4", "</font><font color=\"blue\">", $string);
$string = str_replace("^5", "</font><font color=\"aqua\">", $string);
$string = str_replace("^6", "</font><font color=\"fuchsia\">", $string);
$string = str_replace("^7", "</font><font color=\"white\">", $string);
$string = str_replace("^8", "</font><font color=\"pink\">", $string);
$string = str_replace("^9", "</font><font color=\"silver\">", $string);
$string = str_replace("^", "", $string);
return $string . "</font>";
}
	

 function delxkll($string) {
$string = preg_replace('/([0-9]+\\:[0-9]+)/', '', $string);
//$string = preg_replace('/([0-9]+\\;[0-9]+)\\;/', ' % ', $string);
//$string = str_replace("; : ;", "  %  ", $string);
$string = str_replace(array("\r\n", "\n", "\r"), "     \n", $string);
//$string = str_replace(array("\r\n", "\n", "\r", "$"), "     \n", $string);
return $string . "";
}
           function match_network ($nets, $ip) {
			    $return = false;
			    if (!is_array ($nets)) $nets = array ($nets);

			    foreach ($nets as $net) {
			        $rev = (preg_match ("/^\!/", $net)) ? true : false;
			        $net = preg_replace ("/^\!/", "", $net);

			        $ip_arr   = explode('/', $net);
			        $net_long = ip2long($ip_arr[0]);
			        $x        = ip2long($ip_arr[1]);
			        $mask     = long2ip($x) == $ip_arr[1] ? $x : 0xffffffff << (32 - $ip_arr[1]);
			        $ip_long  = ip2long($ip);

			        if ($rev) {
			            if (($ip_long & $mask) == ($net_long & $mask)) return false;
			        } else {
			            if (($ip_long & $mask) == ($net_long & $mask)) $return = true;
			        }
		    	}
		    	return $return;
				}

				
function utf8_bad_find($str)
{
    $UTF8_BAD =
        '([\x00-\x7F]'.                          # ASCII (including control chars)
        '|[\xC2-\xDF][\x80-\xBF]'.               # Non-overlong 2-byte
        '|\xE0[\xA0-\xBF][\x80-\xBF]'.           # Excluding overlongs
        '|[\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}'.    # Straight 3-byte
        '|\xED[\x80-\x9F][\x80-\xBF]'.           # Excluding surrogates
        '|\xF0[\x90-\xBF][\x80-\xBF]{2}'.        # Planes 1-3
        '|[\xF1-\xF3][\x80-\xBF]{3}'.            # Planes 4-15
        '|\xF4[\x80-\x8F][\x80-\xBF]{2}'.        # Plane 16
        '|(.{1}))';                              # Invalid byte
    $pos = 0;
    $badList = array();

    while (preg_match('/'.$UTF8_BAD.'/S', $str, $matches))
    {
        $bytes = strlen($matches[0]);

        if (isset($matches[2]))
            return $pos;

        $pos += $bytes;
        $str = substr($str,$bytes);
    }				
    return false;
}				

	
	// libs/a/a.charset.php
// (c) Yuri Popoff, Nov 2003, popoff.donetsk.ua
// A set of functions to process charsets

function _charset_count_bad($s)
{ //count "bad" symbols in russian, in windows-1251
  $r=0;
  for($i=0;$i<strlen($s);$i++)
  {
    switch($s[$i])
    {
      case 'ё':
      case 'Ё':
      case '«':
      case '»':
        break;
      default:
        $c=ord($s[$i]);
        if($c>=0x80&&$c<0xc0||$c<32)
          $r++;
    }
  }
  return $r;
}

function _charset_count_chars($s)
{ //count "good" symbols in russian, in windows-1251
  $r=0;
  for($i=0;$i<strlen($s);$i++)
  {
    $c=ord($s[$i]);
    if($c>=0xc0)
      $r++;
  }
  return $r;
}

function _charset_count_pairs($s)
{ //count "bad" pairs of chars for a string in russian, in windows-1251
  $a=array(
    0 => 'ъыь',
    1 => 'йпфэ',
    2 => 'йфэ',
    3 => 'жйпфхцщъыьэю',
    4 => 'йфщ',
    5 => 'ъыь',
    6 => 'зйтфхшщъыэя',
    7 => 'йпфхщ',
    8 => 'ъыь',
    9 => 'абжийущъыьэюя',
    10 => 'бгйпфхщъыьэюя',
    11 => 'йрцъэ',
    12 => 'джзйъ',
    13 => 'ймпъ',
    14 => 'ъыь',
    15 => 'бвгджзйхщъэю',
    16 => 'йъэ',
    17 => 'й',
    18 => 'жй',
    19 => 'ъыь',
    20 => 'бвгджзйкпхцшщъьэюя',
    21 => 'бжзйфхцчщъыьюя',
    22 => 'бгджзйлнпрстфхцчшщъьэюя',
    23 => 'бгджзйпсфхцчщъыэюя',
    24 => 'бгджзйфхшщъыэя',
    25 => 'бвгджзйклмпстфхцчшщъыэюя',
    26 => 'абвгджзийклмнопрстуфхцчшщъыьэ',
    27 => 'аофъыьэю',
    28 => 'айлрухъыьэ',
    29 => 'абежиоуцчшщъыьэю',
    30 => 'иоуфъыьэя',
    31 => 'аоуфъыьэ'
    );
  $b=array(
    0  => 'ааабавагадаеажазаиайакаланаоасатауафахацачашащаэаюаябгбмбтбхбцбчбшбщбъбьбюбявбвжвхвъвюгзгкгтгчгядддхдэеаебегееежеиеоепесеуефецещеэеюеяжбжвжлжпжржцжчжюзззсзтзшзэзюиаиеижииийиоипиуифицишищиэиюияйпйркзкмкчкшлблвлзлнлшлщмвмгмхмчмэмюнбнвнэоаовогоеожозоиойоколомооопоуофохоцошощоэоюояпмпцрзсгсдсжсзсъсэтбтгтдтзтптштщтътэуаубувужуиуйуоуууфухуцущуюуяфлфмхгхдхкхпхсхшхэцвцмцуцычвчмчрчшшршсшчщнщрщьэвэгэдэзэйэкэмэнэпэтэфэхэяюаюбювюгюдюеюжюзюйюлюмюнюпюрюхюцюшююябягядяеяжязяияйяпяряшящяюяя',
    1  => 'ааажаоапафащаэбабббвбгбдбжбзбкблбмбнбсбтбубхбцбчбшбщбъбыбьбюбявбвввгвдвжвзвквлвмвнвпврвсвтвувхвцвчвшвщвъвьвювягагбгвгггдгегзгигкглгмгнгргсгтгугчгшгядбдвдгдддждздкдлдмдндодпдрдсдтдхдцдчдшдъдыдьдэдюеаебепеуефеэеяжбжвжгжджжжкжлжмжнжожпжржсжцжчжьжюзбзвзгздзезжзззизкзлзмзнзрзсзтзузцзчзшзъзызьзэзюзяиаиэквкдкжкзккклкмкнкскткцкчкшлблвлглдлжлзлклллмлнлплслтлфлхлчлшлщмбмвмгмкмлмммнмпмрмсмтмумфмхмцмчмшмщмымьмэмюнбнвнгнднжнзнкнлнннрнснтнфнхнцнчншнщньнэоаооофохрбрвргрдржрзркрлрмрнрпрррсртрфрхрцрчршрщсбсвсгсдсжсзсмснспсрсссфсхсчсшсщсъсысьсэсютатбтвтгтдтзтитктлтмтнтптртстттутфтхтцтчтштщтътытьтэтюуоуууцущуэхгхдхехихкхлхмхнхпхрхсхтхухшхэцвцицкцмцучвчечкчлчмчнчочрчтчучшчьшвшкшлшмшншошпшршсштшушцшчшьшющощрщьъюыбыгыжыиыпырыуыцышыяьбьвьгьдьжьзькьмьньоьпьсьтьфьцьчьшьщюаюбювюгюеюжюзюйюкюмюнюпюхюцючюшющююябявягядяеяжяияйякянярясяхяцячяшяюяя',
    2  => 'аааоауафащаэбабббвбгбдбжбзбкбмбнбсбтбхбцбчбшбщбъбыбьбюбявбвввгвдвжвзвквлвмвнвпвтвувхвцвчвшвщвъвьвюгагбгвгггдгегзгигкгмгнгсгтгчгшгядбдгдддждздкдлдмдндпдсдтдхдцдчдшдъдьдэдюдяеаеиеуефеэжажбжвжгжджежжжкжлжмжнжожпжржсжужцжчжьжюзезжзззкзсзтзузцзчзшзьзэзюиуифиэквкдкжкзкккмкскткцкчкшлблвлглдлжлзлклллмлнлплслтлулфлхлчлшлщлымбмвмгмкмлмммнмпмрмсмтмумфмхмцмчмшмщмьмэмюнбнвнгнднжнзнкнлнннрнснтнфнхнцнчншнщньнэоаофоэпкпмпнпппсптпфпцпчпшпыпьпярбрвргрдржрзркрлрмрнрпрррсртрфрхрцрчршрщрьрюсбсвсгсдсжсзсиснсрсссфсцсчсшсщсъсьсэтбтвтгтдтзтктлтмтнтптстттутфтхтцтчтштщтътьтэтюубувужуиуоупуууфуцуэхахвхгхдхехихкхлхмхнхпхрхсхтхухшхэцвцицкцмчвчкчлчмчнчрчтчшчьшвшкшлшмшншпшршсштшцшчшьшющащещнщощрщущьъюъяыщьбьвьгьдьжьзькьмьньоьпьфьцьчьшьщюаюбювюгюдюеюжюзюйюкюлюмюнюпюрюсютюхюцючюшющююябявягядяеяияйяпяряцячяшяюяя',
    3  => 'ааакаоафашаэбббвбгбдбжбзбибкблбмбнбобрбсбтбубхбцбчбшбщбъбыбьбюбявбвввгвдвжвзвквлвмвнвпврвсвтвувхвцвчвшвщвъвывьвювягагбгвгггдгзгкглгмгнгогргсгтгугчгшгядбдвдгдддждздидкдлдмдндпдрдсдтдудхдцдчдшдъдыдьдэдюдяеаевегежезепеуехецечешещеэзбзвзгздзезжзззизкзлзмзнзозрзсзтзузцзчзшзъзызьзэзюзяижиуифицищиэквкдкекжкзккклкмкнкркскткцкчкшлблвлглдлжлзлклллмлнлплслтлфлхлчлшлщльмбмвмгмимкмлмммнмпмрмсмтмфмхмцмчмшмщмьмэмюмянбнвнгнднжнзнкнлнннрнснтнфнхнцнчншнщныньнэоюрбрвргрдржрзркрлрмрпрррсртрфрхрцрчршрщрьсасбсвсгсдсесжсзсислсмснспсрсссусфсхсцсчсшсщсъсысьсэсютатбтвтгтдтзтктлтмтнтптртстттфтхтцтчтштщтътытьтэувугузуиуйукуоупуууфуцуэуячвчкчлчмчнчочрчтчшчьшашвшкшлшмшншошпшршсшушцшчшьшюябявягяеяжязяияйякяляняпярясятяхяцячяшящяюяя',
    4  => 'ааазауащаэбббвбгбдбжбзбкблбмбнбсбтбубхбцбчбшбщбъбыбьбюбявбвввгвдвжвмвнвпврвсвтвхвцвчвшвщвъвьвювягбгвгггдгегзгкгмгнгсгтгугчгшгядбдгдддждздкдлдмдндпдрдсдтдхдцдчдшдъдыдьдэдюдяеуехещеэжбжвжгжджжжкжлжмжнжпжржсжцжчжьжюзбзвзгздзжзззкзлзмзрзсзтзцзчзшзъзызьзюзяигихиэквкдкжкзкккмкнкскткцкчкшлблвлглдлжлзлклллмлнлплслтлфлхлчлшлщльлюмбмвмгмкмлмммпмрмсмтмфмхмцмчмшмщмьмэмюмянбнвнгнднжнзнлнннрнснфнхнцнчншнщньнэоаофоэоюояпепкпмпнпппсптпфпцпчпшпыпьпярбрвргрдржрзркрлрмрнрпррртрфрхрцрчршрщрьсбсгсдсжсзснсрсссфсхсцсшсщсъсысьсэсюсятбтгтдтзтктлтмтнтптстттутфтхтцтчтштщтътытьтэтюудузуфхгхдхихкхлхмхнхпхрхсхтхухшхэцвцицкцмчвчкчлчмчнчочрчтчшчьшвшкшлшмшншошпшршсшцшчшьшюызыиыуыцыяьвьгьдьжьзьньоьпьсьфьцьчьшьщэгэдэзэйэлэмэпэсэтэфэхэяюаюбювюгюдюеюлюмюсютюхюцючющююябявяеяжязякяляпяряцяшяюяя',
    5  => 'аааеажазаиайаоапарасауафахацачашащаэаюаябббвбгбдбжбзбхбцбчбшбщбъвбвввгвжвпвхвщвъвюгбгвгггзгтгшдгдхдцдюеаебегедееежеиеленеоеуефещеэеюеяжбжвжжжмжчжюзсзцзшзъзэиаибидиеижииийиоириуифицичишищиэиюияйвйойхкжкзкккмкчлдлжлзлплфлхлшлщмвмрмфмхмшмэмюнжнлнфнэоаоеоиойоуочошоюояпмпппфрщсгсжсзсщсъсэсютгтдтзтптфтцтщтътэтюуауиуйуоуууфуцушущуэфмфнфсфчфыхгхкхрхтхшцвцмцучвчмчрчшшвшмшпшршцшчшющнщоэвэгэдэзэйэлэмэнэпэрэсэхэяюаюбювюгюдюеюжюзюйюкюлюмюнюпюрюхюцючюшююябягяеяжязяияйякяпяцячяшящяюяя',
    6  => 'ааабазаиаоапауафацашаэбббвбгбдбжбзбкблбмбнбрбсбтбхбцбчбшбщбъбьбюбявбвввгвдвевжвзвивквлвмвнвовпврвсвтвувхвцвчвшвщвъвывьвювягбгвгггдгегзгкгмгнгогргсгтгчгшгядбдвдгдддждздкдмдндпдрдсдтдхдцдчдшдъдэеаежеиеоеуехеэеюеяжбжвжгжджжжкжлжмжнжожпжржсжужцжчжьжюиаибиуифиэквкдкжкзккклкмкнкркскткцкчкшлблвлглдлелжлзлклллмлнлолплслтлулфлхлчлшлщлыльлюлямамбмвмгмкмлмммнмпмрмсмтмфмхмцмчмшмщмымьмэмюмянбнвнгнднжнзнкнлнннрнснтнфнхнцнчншнщньнэоаобоводожоиолооопотоуофохоцощоэоюояпапепипкпмпнпопппрпсптпупфпцпчпшпыпьпярбрвргрдржрзркрлрмрнрпрррсртрфрхрцрчршрщрырьрюрясасбсвсгсдсесжсзсислсмснсоспсрссстсусфсхсцсчсшсщсъсысьсэсюсяубувугудузумуоупуууфуцушуэцвцецицкцмцочачвчечкчлчмчнчочрчтчучшчььбьвьгьдьжьзькьмьньоьпьфьцьчьшьщюаюбювюгюдюеюжюзюйюкюмюнюпюсютюхюцючюшющюю',
    7  => 'аэбббвбгбдбжбзбкбмбнбсбтбхбцбчбшбщбъбьбюбявбвввгвдвжвзвмвпвсвтвхвцвчвшвщвъвьвюгбгвгггдгзгкгмгсгтгчгшгядбдгдддждздлдмдпдсдтдхдцдчдшдъдэдюеаегедежезеоепесеуехечещеэжбжвжгжджжжкжлжмжнжожпжржсжцжчжьжюзбзгздзезжзззизкзлзмзозсзтзузцзчзшзъзызьзэзюзяибизипифихищиэквкдкжкзккклкмкнкркскткцкчкшлблвлглдлжлзлклллмлнлплслтлфлхлчлшлщльмбмвмгмкмлмммрмсмтмфмхмцмчмшмщмьмэмюнбнвнгнднжнзнкнлнннрнснтнфнхнцнчншнщнэоаожоиоуофоцоэоюоярбрвргрдржрзркрлрмрнрпрррсртрфрхрцрчршрщрьрюсасбсвсгсдсесжсзсислсмснсоспсрссстсусфсхсцсчсшсщсъсысьсэсюсятатбтвтгтдтетзтктлтмтнтптртстттутфтхтцтчтштщтътытэтютяувугужуоуууфуцушуэцвцецицкцмчачвчкчлчмчнчочрчтчшчьшашвшешкшлшмшншошпшршсштшушцшчшьшюыдыжыиылыпытыуышыяьвьгьдьжьзьиькьньоьпьсьфьцьчьшьщэвэгэдэзэйэкэлэмэпэрэсэтэфэхэяюаюбювюгюдюеюжюзюйюкюлюнюпюрюсютюхюцючюшющююягядяжязякяпярясяхяцяшяюяя',
    8  => 'аааеажаиайаоауахачащаэаюбвбгбжбзбмбтбхбцбчбщбъбявбвввгвдвжвзвмвпвтвщвъвюгбгвгггкгсгчгядбдгдддлдпдхдчдшдъдьдэеаебееежеиекеоепеуефечешещеэеюеяжбжвжгжжжлжмжпжржцжчжьжюзззтзцзьзэзюиаибивигидиеижизииийикилиниоипитиуифихицичишищиэиюияйвйгйдйейзйкйлймйойрйфйхйчйшкдкжкзлблглжлзлмлнлплтлфлхлчлшлщмрмтмхмшмщмьмэмюнлнрншнщнэоеожоиойоооуофоцочошощоюояпмпфпцпчпьргрзрфрхрцрщрьсбсгсжсзсрсфсщсъсэтбтгтдтзтптфтхтштщтътюуаубувуеужузуиуйуоуруууфухуцушущуэуюуяфлфнфчхгхдхкхмхтхшхэцвцмчвчлчмчрчшшвшпшршсштшцшчшющощьэвэгэдэзэйэкэлэмэнэпэрэсэфэхэяюаюбювюгюдюеюжюзюйюкюмюрюсюхюцючюшююябягядяияйякярясяцячяшящ',
    9  => 'вбвввгвдвевжвзвивквлвмвнвпврвсвтвувхвцвчвшвщвъвывьвювягбгвгггдгегзгигкглгмгнгогргсгтгугчгшгядбдвдгдддздкдлдмдндпдрдсдхдцдчдшдъдыдьдэдюеаебевегедееежезеиейекемеоепесетеуефехецечешещеэеюеязбзвзгздзжзззизкзлзмзнзозрзсзтзузцзчзшзъзызьзэзюзяквкдкжкзкккмкнкркткцкчкшлблвлглдлжлклллмлнлплслтлфлхлчлшлщльлюлямбмвмгмкмммнмпмрмтмфмхмцмчмшмщмьмэмюмянбнвнгнднжнзнкнлнннрнснтнфнхнцнчнщньнэоаобоеожоиойоломооопосоуофохоцочошощоэоюояпапипкплпмпнпопппрпсптпупцпчпшпыпьпярарбрвргрдрержрзриркрлрмрнрпрррсртрурфрхрцрчршрщрырьрюрясвсгсдсесжсзслснспсрсссфсхсцсчсшсщсъсьсэсютбтвтгтдтзтктлтмтнтптттфтхтцтчтштщтътытьтэтютяфлфмфнфрфсфтфффчфыхвхгхдхехихкхлхмхнхохпхрхсхтхухшхэцвцицкцмчвчечкчлчмчнчочрчтчучшчьшвшкшлшмшншошпшршсштшцшчшьшю',
    10 => 'ааащаэвбвввгвдвжвзвквлвмвнвпврвсвтвхвцвчвшвщвъвьвювядадбдвдгдддедждздидкдлдмдндпдрдсдтдудхдцдчдшдъдыдьдэдюдяебегежеиеоеуефехецечешещеэеюеяжажбжвжгжджжжижкжлжмжнжожпжржсжужцжчжьжюзбзвзгздзжзззкзлзмзнзрзсзтзузцзчзшзъзызьзэзюзяигижицищиэиюквкдкжкзккклкмкнкркскткцкчкшлблвлглдлжлзлклллмлнлплслтлфлхлчлшлщмбмвмгмимкмлмммнмомпмрмсмтмумфмхмцмчмшмщмымьмэмюмянбнвнгнднжнзнкнлнннрнснтнфнхнцнчншнщньнэнюоаоцрбрвргрдржрзркрлрмрнрпрррсртрфрхрцрчрщрьсбсдсжсзслсмсрсссхсчсщсъсьсэсютбтвтгтдтзтктлтмтптстттфтхтцтчтштщтътьтэтюуаугужуйуоуфуцуэцацвцкцмцоцуцычачвчичкчлчмчнчочрчтчучшчьшвшкшлшмшншошпшршсштшцшчшьшю',
    11 => 'аааоафаэбббвбгбдбжбзбкблбмбсбтбхбчбшбщбъбьбюбявбвввгвдвжвзвмвпврвтвувхвцвчвшвщвъвывьвювягбгвгггдгзгкглгмгнгсгтгчгшгядбдвдгдддждздкдлдмдпдрдтдхдцдчдшдъдьдэдяеажбжвжгжджжжкжлжмжожпжржсжужцжчжьжюзбзвзгздзжзззизмзозрзсзцзчзшзъзызьзэзюзяиуиэкдкжкзкккмкскткцкчкшлблвлглдлжлзлклллмлнлплтлфлхлчлшлщмбмвмгмкмлмммнмпмрмтмумфмхмцмчмшмщмьмэмюмянбнвнгнднжнзнкнлнннрнснтнфнхнчншнщньнэнюоэоюпкплпмпнпппрпсптпфпцпчпшпьсбсвсгсдсжсзслсмснспсрсссфсхсцсчсшсщсъсысьсэсютбтвтгтдтзтитктлтмтнтптртстттфтхтцтчтштщтътьтэтютяущфифлфмфнфофрфсфтфуфффчфыхахгхдхехкхлхмхнхпхрхсхтхухшхэчвчлчмчрчтчшшашвшишкшлшмшншошпшршсштшушцшчшьшющнщощрщущьыгыдызыиырыуыцыяюаюгюеюйябяи',
    12 => 'ааабаоапауащбббвбгбдбжбзбкбмбнбсбтбхбцбчбшбщбъбьбюбявбвввгвевжвзвивквлвмвнвпврвсвтвувхвцвчвшвщвъвывьвювягагбгвгггдгегзгигкгмгогргсгтгугчгшгяеаепеуеэиаибижищиэквкдкжкзккклкмкркскткцкчкшлблвлглдлжлзлклллмлолплслтлулфлхлчлшлщлыльмбмвмгмкмлмпмрмсмтмфмхмцмчмшмщмьмэмюмянбнвнгнднжнзнкнлнннрнснтнфнхнцнчншнщньнэоапкпмпнпппспфпцпчпярбрвргрдржрзркрлрмрнрорпрррсртрфрхрцрчршрщрырьрюрясбсвсгсдсжсзслсмснспсрсссфсхсцсчсшсщсъсысэсютатбтвтгтдтзтктлтмтнтотптртстттутфтхтцтчтштщтътытьтэтютяубувуеуиуйуоуууцуэуяфлфмфнфрфсфтфффчфыхахвхгхдхехихкхлхмхнхпхрхсхтхухшхэцвцицкцмцочвчкчлчмчнчочрчтчшчьшашвшкшлшмшншошпшршсштшушцшчшьшющащнщощрщущьыбыдыжызыиыпырыуыцыщыяьбьвьгьжьзькьмьньоьпьфьцьчьшьщэвэгэдэзэйэкэлэмэпэсэтэфэхэяюаюбювюгюдюеюжюзюйюкюмюпюрюсютюхюцючюшющююябядяеяжязяйяпяряхяцяюяя',
    13 => 'ааафаэбббвбгбдбжбзбибкблбмбнбобрбсбтбхбцбчбшбщбъбыбьбюбявбвввгвдвжвзвквлвмвнвпврвсвтвхвцвчвшвщвъвывьвювягбгггзгкгмгнгчгшгядбдвдгдддздкдпдчдъдьдэдяещжбжвжгжджжжкжлжмжнжожпжржсжцжчжьжюзбзвзгздзжзззкзлзмзнзрзсзтзцзчзшзъзьзэзюзяиуиэкдкжкзкккмкскчкшлалблвлглдлелжлзлклллмлнлолплслтлулфлхлчлшлщлыльлюлянбнвнгнднжнзнкнлнннрнснфнхнцнчншнщньнэощрбрвргрдржрзркрлрмрнрпрррсртрурфрхрцрчршрщрырьрюрясгсдсжсзсрсхсчсшсщсъсьсэсюсятбтвтдтзтмтптттфтхтцтчтштщтътьтэубугузуиуоупуууфухуцуэфмфнфсфтфффчфыхахвхгхдхихкхлхмхнхпхсхтхухшхэцвцкцмчвчкчлчмчнчрчтчшчьшвшешкшлшмшншошпшршсшушцшчшьшющащещнщощрщущьыбыгыдыжызыиыкысыуыцыщыяьбьвьдьзьмьньпьфьцьчьщэвэгэдэзэйэкэлэмэнэрэсэтэфэхэяюбювюгюеюжюзюйюкюлюмюнюрюцябядяпяряц',
    14 => 'ааабавагадаеажаиайаламаоауафахацачашащаэаюаябцбювдвжвхвъвюгвгггзгкгсгчгшгядэдюеаебеееиереуефещеэеяжбжвжлжпжржсжчжюзсзтзцзчзшзъзэзюиаибиеижииийиоипиуифиэиюияйвйгйейзйпйрйфйхйшкдкжкмкцкчлфмвмгмхмшмщмэмюнхншнэоаовогоеожозоиойоломоуофошоэоюояпмпфпшсгсзсщсэтэтюуауеужуиуйуоуруууфуцушущуюуяфмфнфтфчхгхдхкхпхсхэцуцычмчрчшшршсшцшчщоэдэйэпэсэхэяюаюбювюгюжюйюкюлюмюнюпюрюхюцючюшягяеяияпяцячяшяюяя',
    15 => 'аааоаэеаебеиемеуефеэеяибиуифиэквкдкжкзккклкмкнкркскткцкчкшлблвлглдлжлзлклллмлнлплслтлфлхлчлшлщмамбмвмгмемкмлмммнмомпмрмсмтмумфмхмцмчмшмщмымьмэмюмянбнвнгнднжнзнкнлнннрнснтнфнхнцнчншнщньнэнюоапмпппрпсптпфпцпчпшпьпярбрвргрдржрзркрлрмрнрпрррсртрфрхрцрчршрщрьрюсбсвсгсдсжсзслсмснспсрсссфсхсцсчсшсщсъсьсэсюсятбтвтгтдтзтктлтмтнтптртстттфтхтцтчтштщтътьтэтютяувуеужуиуйумуоуууфуцуэуяфефлфмфнфофсфтфуфффчфыцацвцецкцмцочвчкчлчмчнчочрчтчучшчьшашвшкшлшмшншошпшршсштшцшчшьшюыбыдызыиыкыныпысыуыцычыяьбьвьгьдьжьзьиькьмьньоьпьсьтьфьцьчьшьщябявягядяеяжязяияйякямяняпяряцячяшяюяя',
    16 => 'аэбббвбгбдбжбзбкбмбтбхбцбчбшбщбъбыбьбявбвввгвдвжвзвквлвмвпврвсвтвхвцвчвшвщвъгбгвгггдгзгкгмгтгчгядбдвдгдддздкдлдпдрдтдхдчдшдъдьдэеэжбжвжгжжжлжмжожпжржсжчжьжюзбзвзгздзжзззмзрзсзтзузцзчзшзъзызьзэзюзяиэкдкжкзкккмкркцкчкшлблвлглдлжлклллмлнлплслтлфлхлчлшлщлюмбмвмгмкмммнмпмрмсмтмфмхмцмшмщмьмэмюнвнгнднжнзнкнлнннрнтнфнхнцнчншнщньнэпкпмпппсптпфпцпчпшпьрбрвргрдржрзркрлрмрнрпрррсртрфрхрцрчршрщрырьрюрясбсвсгсдсжсзслсмснсрсссфсхсцсчсшсщсъсьсэсютбтгтдтптттхтцтчтштщтътэтюувуоуууцуэфлфмфрфсфтфуфффчфыхвхгхлхрхтхшцвцкцмчвчкчмчнчочрчтчшчьшвшлшмшпшсштшцшчшьшющащнщощрщущьыиырыуыяьвьдьжьзьньоьпьфьцьчьшьщюаюбювюдюеюжюйюпюрюцююяияряц',
    17 => 'ааазаиаоащбббвбгбдбжбзбкбмбнбсбтбубхбцбчбшбщбъбьбявбвввгвдвжвзвквлвмвнвпвсвтвхвцвчвшвщвъвьвюгагбгвгггдгзгкгмгсгтгчгшгядбдгдддждздкдлдмдндпдсдтдхдцдчдшдъдыдьдэдюдяежефеэжбжвжгжджжжкжлжмжнжожпжржсжужцжчжьжюзбзвзгздзезжзззизкзлзмзнзозрзсзтзузцзчзшзъзызьзэзюзяиуищиэкдкжкзкккмкткцкчкшлблвлглдлжлзлклллмлнлплслтлфлхлчлшлщмбмвмгмкмлмммнмпмтмфмхмцмчмшмщмьмэмюнбнвнднжнзнкнлнннрнснтнфнхнцнчншнщньнэоаоэояпкпмпнпппсптпфпцпчпшпьрбрвргрдржрзркрлрмрнрпрррсртрфрхрцрчршрщрьрюрясбсгсдсжсзсссфсхсцсшсщсъсьсэсютдтзтптттфтхтштщтъуууцфлфмфнфрфсфтфуфффчфыхгхдхкхмхнхпхсхтхшхэцкцмцуцычвчкчмчнчочрчтчшчьшвшкшлшмшншпшршсшцшчшьшющащищнщощрщущьъюыбыдыжызыиыкыуыцычышыяьвьгьдьжьзьиьньоьпьсьфьцьчьшьщьяэвэгэдэзэйэлэпэсэтэфэхэяюаюбювюгюеюзюйюмюнюпютюхюцючющююябявяияйяляпяряшяюяя',
    18 => 'аааоаэбббвбгбдбебжбзбкбмбнбсбтбхбцбчбшбщбъбьбюбявбвввгвдвжвзвквмвнвпвсвтвхвцвчвшвщвъвьвюгбгвгггдгзгигкглгмгнгсгтгугчгшгядбдвдгдддждздкдлдмдндпдрдсдтдудхдцдчдшдъдьдэдюдяеуеэзбзгздзезжзззизкзлзмзнзрзсзтзузцзчзшзъзьзэзюзяквкдкжкзкккмкткцкчкшлблвлглдлжлклллмлнлплслтлфлхлчлшлщмбмвмгмкмлмммнмпмрмсмтмфмхмцмчмшмьмэмюмянбнвнгнднжнзнкнлнннрнснтнфнхнцнчншнщньнэпкпмпнпппсптпфпцпчпшпыпьпярбрвргрдржрзркрлрмрнрпрсртрфрхрцрчршрщсбсгсдсжсзспсссфсхсцсшсщсъсьсэтбтвтгтдтзтктлтмтптстттфтхтцтчтштщтътытьтэтюувууфафлфмфнфрфсфтфффчфыхгхдхехкхмхнхпхрхсхтхшхэцвцицкцмчвчкчлчмчнчочрчтчшчьшкшмшншошпшршсшцшчшьшющнщощрщущьъюъяыбыжызыиытыуыцыяьвьгьжьзьньоьпьцьчьшьщэвэгэдэзэйэлэмэпэрэсэтэфэхэяюбювюгюдюеюжюзюйюнюпюсютюхюцючющююядяеяиялярячяю',
    19 => 'ааабавагаеажаиакамаоапауафахачашащаэаюаябвбгбдбзбмбтбхбшбщбювбвввгвдвжвзвмвпврвтвувхвцвчвщвъвюгбгвгдгзгкгмгсгтгчгшгядбдгдпдхдцдчдъдэеаебегееежеиекеленеоепеуефецечещеэеюеяжвжгжмжпжржцжюзбзгзжзззтзцзшзъзэзюзяиаибивигиеижииийимиоипиуифихичишищиэиюияйгйейзйлйойпйрйфйхйцйшкдкжкзкчкшлблглжлзлмлнлплтлхлчлшлщмвмгмпмтмхмшмщмэмюнбнвнжнзнлнрнфнхнчнщнэнюняоаовогоеожоиойоломонооопоуофохоцочошощоэоюояпмпсптпфпшрзрфрхрщсбсгсдсжсзсфсхсцсчсшсщсъсэсютгтдтзтмтптфтхтцтштщтътэуаубувугудуеужузуиуйукунуоупурусутуууфухуцучушущуэуюуяфафмфнфофрфсфтфчфыхдхрхэцацвцмцоцуцычвшвшмшпшршсштшцшющрщьэвэгэдэзэйэкэмэпэфэхэяюаюбювюгюдюеюжюзюйюкюлюмюнюпюрюхюцючюшююябягядяеяжяияйякяняпярятяхяцячяшящяюяя',
    20 => 'ааадаеажаиаоапафацачащаэаюаяеаебегежезепеуефецечещеэеюивижиуифихищиэлблвлглдлжлзлклллмлнлслтлфлхлчлшлщлыльмбмвмгмимкмлмммнмпмрмсмтмфмхмцмчмшмщмьмэмюмянанбнвнгндненжнзнинкнлнннонрнснтнунфнхнцнчншнщньнэнюняоаоеожозоиооопоуофохоцочошощоэоюоярбрврдржрзркрлрмрнрпрррсртрфрхрцрчршрщрьрюрясасбсвсгсдсжсзсислсмснспсрсссусфсхсцсчсшсщсъсысьсэсюсятбтвтгтдтзтктлтмтнтптртстттфтхтцтчтштщтътэтюуаубувудуеужуиуйукулумуоупусуууфухучушущуэуяфлфмфнфрфсфтфффчфычачвчечкчлчмчнчочрчтчучшчьыбыгыдыеыжызыиыйыкылымыныпысытыуыхыцычышыщыя',
    21 => 'ааагазафацачашащвбвввгвдвевжвзвивквлвмвнвпврвсвтвувхвцвчвшвщвъвывьвювягбгвгггдгегзгигкглгмгнгргсгтгугчгшгядадбдвдгдддедждздидкдлдмдпдрдсдтдудхдцдчдшдъдыдьдэдюдяеаебегедееежезеиекелепесетеуефехецечещеэеюеяипиуифицишиэкаквкдкекжкзкиккклкмкнкскткукцкчкшлблвлглдлжлзлклллмлнлплслтлфлхлчлшлщльмбмвмгмкмлмнмпмрмсмтмфмхмцмчмшмщмьмэмюмянбнвнгнднжнзнкнлнннрнснтнфнхнцнчншнщныньнэоиоооцошоэоюояпепипкплпмпнпппсптпупфпцпчпшпыпьпярбрвргрдржрзркрлрмрнрпрррсртрфрхрцрчршрщрырясасбсвсгсдсжсзслсмснспсрсссусфсхсцсчсшсщсъсысьсэсютбтвтгтдтзтктлтмтнтптртстттфтхтцтчтштщтътьтэтюубувугузуиуйумунуоусуууфухуцучущуэуяшашвшкшлшмшншпшршсштшушцшчшьшюэвэгэдэзэйэнэрэсэфэхэя',
    22 => 'ааабавагадажазаиайакаоасауафацачашащаэвавбвввгвдвжвзвквлвмвнвовпврвсвтвувхвцвчвшвщвъвывьвювяеаебежеиефецечешещеэеяибигижиуихицичишищиэквкдкжкзккклкмкнкркскткцкчкшмбмвмгмемимкмлмммнмомпмрмсмтмумфмхмцмчмшмщмымьмэмюмяоаободоеожозоиолонооопосотоуофохоцочошощоэоюояуаубувугудуеуиукулумуоупурусутуууфухуцучушущуэуяыбывыдыжызыиыкылынырысытыуыхыцычышыщыя',
    23 => 'ааабазаоапауафацачаэвбвввгвдвжвзвивквлвмвнвпврвсвтвхвцвчвшвщвъвьвювяеаежеоеуефецещеюибидижизиоипиуифиэквкдкжкзккклкмкнкркскткцкчкшлблвлглдлжлзлклллмлнлплслтлулфлхлчлшлщлыльлюлямбмвмгмемимкмлмммнмпмрмсмтмумфмхмцмчмшмщмьмэмюмянбнвнгнднжнзнкнлнннрнснтнфнхнцнчншнщньнэнюоаобовогодоеожозоиолоооросотоуофохоцошощоэоюоярарбрвргрдржрзриркрлрмрнрорпрррсртрурфрхрцрчршрщрырьрюрятбтвтгтдтзтктлтмтнтптртстттфтхтцтчтштщтътьтэтюуауеузуиуйукуоуууфуцучуэшвшкшлшмшншошпшршсштшцшчшьшюьбьвьгьдьжьзькьмьньоьпьфьцьчьшьщ',
    24 => 'ааазаиаоауацаэвбвввгвдвжвзвквлвмвнвовпврвсвтвувхвцвчвшвщвъвьвювяеаежеоецещеэиаигидижизиииоиуицичиэкдкжкзккклкмкнкркскткцкчкшлблвлглдлжлзлклллмлнлплслтлулфлхлчлшлщльмбмвмгмемкмлмммнмомпмрмсмтмумфмхмцмчмшмщмьмэмюнбнвнгнднжнзнкнлнннрнснфнхнцнчншнщньнэоаодожозоиооохоцочошощоэоюояпепкплпмпнпппсптпупфпцпчпшпыпьпярарбрвргрдрержрзркрлрмрнрорпрррсртрфрхрцрчршрщрырьрюрясасбсвсгсдсесжсзсислсмснсоспсрссстсусфсхсцсчсшсщсъсысьсэсюсятбтвтгтдтзтктлтмтнтптстттфтхтцтчтштщтътьтэтютяувугудужузуиукунуоупуууфухуцуэуяцацвцицкцмцоцучвчечичкчлчмчнчочрчтчучшчььбьвьгьдьеьжьзькьмьньоьпьфьцьчьшьщюаюбювюгюдюеюжюзюйюкюлюмюнюпюсюхюцючюшющюю',
    25 => 'ааабажазаиаоапарауафацачашащаэеаезеуехецещеэеюеяиаибигидижизиииоирисиуифиэиюиянбнвнгнднжнзнкнлнннрнснтнфнхнцнчншнщньнэнюняоаоводоеожозоиойоколонооопоросотоуофохоцочошощоэоюоярарбрвргрдржрзркрлрмрнрорпрррсртрурфрхрцрчршрщрырьрюуаубувугудуеужузуиуйукулумуоуууфухуцучушуэуяьбьвьгьдьеьжьзьиькьмьньоьпьсьтьфьцьчьшьщья',
    26 => 'еаебевегеееиейенеоепетеуефецечещеэеюеяюаюбювюгюдюеюжюзюйюкюлюмюпюрюсюхюцючюшющююябягядяеяжяияйякямяпяхяцячяшящяюяя',
    27 => 'бббвбгбдбжбзбмбсбтбхбцбчбшбщбъбюбявбвввгвдвжвзвлвмвпврвсвтвхвцвщвъвьвювягбгвгггдгегзгкгмгсгтгугчгшдбдгдддждздкдмдпдсдтдхдцдчдшдъдыдьдэдюдяеаебевегееежеиейекеленеоепересетеуефецечешещеэеюеяжбжвжлжмжпжржсжужцжчжьжюзбздзжзззизкзмзрзсзцзчзшзъзьзэзюзяиаибивидиеижизииийикилиминиоипиритиуифихицичишищиэиюияйвйгйейзйкйлймйнйойрйсйфйхйцйчйшкдкжкзкккмкскткцкчлблвлглжлзлллмлнлплтлфлхлчлшлщлюмвмгмлмммнмрмтмфмхмцмшмщмьмэмюнбнвнгнднжнзнлнрнтнфнхнцншнщнэпмпппсптпфпцпшпырбргрдржрзрлрмрпрррсртрфрхрцрчрщсбсгсдсжсзснсрсссфсцсщсъсэсютбтгтдтзтмтптттфтхтцтчтштщтътэтюуаубувугуеузуиуйукулумунуоупурусутуууфухуцушущуэуюуяхгхдхкхмхпхрхсхухшхэцицкцмцоцуцычвчмчрчтчшчьшмшпшршсштшчшющащнщощрщьябягядяеяжязяияйякялямяняпярятяхяцячяшящяюяя',
    28 => 'бббвбгбдбжбзбкблбмбнбрбсбтбхбцбчбшбщбъбьбюбявбвввгвдвжвзвквлвмвнвпврвсвтвувхвцвчвшвщвъвьвювягбгвгггдгзгкглгмгнгргсгтгчгшгядбдвдгдддждздидкдлдмдндпдрдтдудхдцдчдъдыдьдэдюдяеаебееежеиеленеоеуехецечещеэеюеяжбжвжгжджжжижкжлжмжнжожпжржсжужцжчжьжюзбзгздзжзззлзмзрзсзтзцзчзшзъзэзюиаибивигидиеижизииийикилиниоиписитиуифичищиэиюияквкдкжкзкккмкркткцкчкшмбмвмгмкмлмммнмпмрмсмтмфмхмцмчмшмщмьмэмюнбнвнгнднжнзнкнлнннрнснтнфнхнцнчншнщньнэоаобовогодоеожозоиойоколомооопосоуофохоцочошощоэоюояпкплпмпнпопппрпспупфпцпчпшпыпьпясвсгсдсесжсзслсмснспсрсссфсхсцсчсшсщсъсьсэсютбтвтгтдтзтктлтмтптстттфтхтцтчтштщтътьтэтютяфефлфмфнфсфтфффчцвцкцмчвчкчлчмчнчрчтчшчьшвшкшлшмшншпшршсштшцшчшьшющнщощрщьюаюбювюгюдюеюжюйюлюмюнюпюрюхюцючюшююябядяеяжязяияйяляпясятяцячяшящяя',
    29 => 'вбвввгвдвжвзвквлвнвпвсвтвувхвцвчвшвщвъвывьвювягагбгвгггдгзгигкглгмгнгргсгтгугчгшгядбдждздкдлдндодпдрдсдтдудхдцдчдшдъдыдьдэдюдязазбзвзгздзжзззкзлзмзнзрзсзтзузцзчзшзъзызьзэзюзяйвйгйдйейзйкймйойпйрйтйхйцйчйшкдкекжккклкмкнкткцкчкшлблвлглдлжлзлклнлолплслтлфлхлчлшлщлылюлямвмгмкмлмнмрмсмтмфмхмцмчмшмщмымьмэмюмянанбнжнзнкнлнрнунфнхнчншнщныньнэнюняпапепкплпмпнпрпсптпупфпцпчпшпыпьпярбргрдржркрмрпрррфрхрцрчршрщрьрюрясасбсвсгсдсесжсзсислсмснсоспсрсссусфсцсчсшсщсъсысьсэсюсятбтвтгтдтзтлтмтптстттфтхтцтчтштщтътьтэтютяфафлфмфнфофрфсфтфуфчфыхвхгхдхехихкхлхмхпхрхсхтхухшхэябявягядяеяжязяияйялямяняпярясятяхяцячяшящяюяя',
    30 => 'ааабавагадаеажазаиайакаламаоапасатауафахацачашащаэаюаябббгбдбжбзбмбрбсбтбхбцбчбшбщбъбьбювавбвввгвдвжвзвквлвмвнвпврвсвтвувхвцвчвшвщвъвьвювягбгвгггдгзгигкглгмгнгргсгтгугчгшгядбдвдгдддздкдлдмдпдрдтдхдчдшдъдыдэдюеаебевегедееежезеиейекеленеоепересеуефехецечешещеэеюеяжбжвжгжджжжкжлжмжожпжржсжужцжчжьжюзбзвздзззкзлзмзрзсзтзцзчзшзъзьзэзюзяйвйгйдйейзйкйлйнйойпйрйсйтйфйхйцйчйшкдкжкзккклкмкркткцкчкшлалблвлглдлжлзлклмлнлолплслтлулфлхлчлшлщлымбмвмгмлмммнмпмрмсмтмумфмхмцмчмшмщмьмэмюмянбнвнднжнзнлнннрнснтнфнчншнщнэнюпаплпмпнпопппрпсптпупфпцпчпшпыпьпярбрвргрдржрзрлрмрррсртрфрхрцрчршрщрюсбсвсгсдсжсзслсмснспсрсссусфсхсцсчсшсщсъсэтбтвтгтдтзтлтмтптртттфтхтцтчтштщтътьтэтютяхвхгхдхкхлхмхпхрхсхтхшхэцацвцецкцмцоцуцычвчлчмчрчтчшшвшешишлшмшошпшршсштшцшчшьшющнщощрщьюаюбювюгюдюеюжюзюйюкюлюмюнюпюрюсюхюцючюшющюю',
    31 => 'бббвбгбдбебжбзбкбмбнбсбтбубхбцбчбшбщбъбыбюбявбвввгвдвжвзвмвпврвтвхвцвчвщвъвюгбгвгггдгзгмгргтгшгядбдвдгдддждздлдмдпдсдтдхдцдшдъдэеаебегееежезеиейеленеоепересеуефехецечещеэеюеяжвжгжджжжлжмжожпжржсжцжчжьжюзбздзжзззмзрзсзтзцзшзъзэзюиаибивигидиеижииийикилимиоипириситиуифихишищиэиюияйвйгйдйейзйлймйнйойпйрйфйхйчйшквкдкжкзкккмкркткцкчлблвлглдлелжлзлллмлнлплфлхлчлшлщлямвмгмммнмрмтмфмхмчмшмэмюмянбнжнзнлнрнтнфнхншнэплпмпппрпсптпфпцпшпьпярбрвргржрзрпррртрфрхрцршрщрьрюрясбсвсгсдсжсзсмспсрсссфсхсцсчсшсщсъсэсютбтгтдтзтлтмтптртттфтхтцтчтштщтътэтютяхвхгхдхехкхмхохрхсхухшхэцвцмцоцучвчлчмчрчтчшшашвшмшошпшршсштшушцшчшьшющощрщьюаюбювюгюдюеюжюзюйюкюлюмюнюпюрюхюцючюшююябявягядяеяжязяияйякяляняпярятяхяцячяшящяюяя',
    );
  $res=0;
  for($i=0;$i<strlen($s)-1;$i++)
  {
    $c1=$s[$i];
    if($c1<'а'||$c1>'я') continue;
    $c2=$s[$i+1];
    if($c2<'а'||$c2>'я') continue;
    $i1=ord($c1)-ord('а');
    if(strpos($a[$i1],$c2)!==false)
    {
      $res++;
      continue;
    }
    if($i>=strlen($s)-2) continue;
    $c3=$s[$i+2];
    if($c3<'а'||$c3>'я') continue;
    $i2=ord($c2)-ord('а');
    if(strpos($a[$i2],$c3)!==false)
    {
      $res++;
      $i++;
      continue;
    }
    $l=0;
    $r=strlen($b[$i1])/2-1;
    while($l<=$r)
    {
      $c=$l+(($r-$l)>>1);
      $ca=$b[$i1][$c*2];
      $cb=$b[$i1][$c*2+1];
      if($ca==$c2&&$cb==$c3)
      {
        $res++;
        break;
      }
      if($ca<$c2||$ca==$c2&&$cb<$c3)
        $l=$c+1;
      else
        $r=$c-1;
    }
  }
  return $res;
}

function _charset_alt_win($s)
{
  for($i=0;$i<strlen($s);$i++)
  {
    $c=ord($s[$i]);
    if($c>=0x80&&$c<=0x9f)
      $s[$i]=chr($c-0x80+0xc0);
    else if($c>=0xa0&&$c<=0xaf)
      $s[$i]=chr($c-0xa0+0xe0);
    else if($c>=0xc0&&$c<=0xdf)
      $s[$i]=chr($c-0xc0+0x80);
    else if($c>=0xf0&&$c<=0xff)
      $s[$i]=chr($c-0xf0+0xa0);
  }
  return $s;
}

function _charset_koi_win($s)
{
  $kw = array(
    //00   01   02   03   04   05   06   07   08   09   0a    0b   0c    0d   0e   0f
    0x80, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138,  139, 140,  141, 142, 143, //0x80 - 0x8f
     144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 0xbb, 156, 0xab, 158, 159, //0x90 - 0x9f
     160, 161, 162, 184, 164, 165, 166, 167, 168, 169, 170,  171, 172,  173, 174, 175, //0xa0 - 0xaf
     176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186,  187, 188,  189, 190, 191, //0xb0 - 0xbf
     254, 224, 225, 246, 228, 229, 244, 227, 245, 232, 233,  234, 235,  236, 237, 238, //0xc0 - 0xcf
     239, 255, 240, 241, 242, 243, 230, 226, 252, 251, 231,  248, 253,  249, 247, 250, //0xd0 - 0xdf
     222, 192, 193, 214, 196, 197, 212, 195, 213, 200, 201,  202, 203,  204, 205, 206, //0xe0 - 0xef
     207, 223, 208, 209, 210, 211, 198, 194, 220, 219, 199,  216, 221,  217, 215, 218  //0xf0 - 0xff
     );
  for($i=0;$i<strlen($s);$i++)
  {
    $c=ord($s[$i]);
    if($c>=128)
      $s[$i]=chr($kw[$c-128]);
  }
  return $s;
}

function _charset_utf8_win($s)
{
  $r='';
  $state=1;
  for ($i=0;$i<strlen($s);$i++)
  {
    $c=ord($s[$i]);
    switch($state)
    {
      case 1: //not a special symbol
        if($c<=127)
        {
          $r.=$s[$i];
        }
        else
        {
          if(($c>>5)==6)
          {
            $c1=$c;
            $state=2;
          }
          else
            $r.=chr(128);
        }
        break;
      case 2: //an utf-8 encoded symbol has been meet
        $new_c2=($c1&3)*64+($c&63);
        $new_c1=($c1>>2)&5;
        $new_i=$new_c1*256+$new_c2;
        switch($new_i)
        {
          case   1025: $out_c='Ё'; break;
          case   1105: $out_c='ё'; break;
          case 0x00ab: $out_c='«'; break;
          case 0x00bb: $out_c='»'; break;
          default: $out_c=chr($new_i-848);
        }
        $r.=$out_c;
        $state=1;
        break;
    }
  }
  return $r;
}

function _charset_prepare($s)
{
  $r=0;
  $k=0;
  for($i=0;$i<strlen($s)&&$r<255;$i++)
  {
    $c=ord($s[$i]);
    if($c>=0x80)
    {
      $r++;
      $k=$i;
    }
  }
  return substr($s,0,$k+1);
}

function charset_win_lowercase($s)
{
  for($i=0;$i<strlen($s);$i++)
  {
    $c=ord($s[$i]);
    if($c>=0xc0&&$c<=0xdf)
      $s[$i]=chr($c+32);
    else if($s[$i]>='A'&&$s[$i]<='Z')
      $s[$i]=chr($c+32);
  }
  return $s;
}

function charset_x_win($s)
{
// returns a string converted from a best encoding (windows-1251 or koi-8r) to windows-1251
  $sa=_charset_prepare($s);
  $s1=charset_win_lowercase($sa);
  $r1='windows-1251';

  $c1=_charset_count_chars($s1);
  $b1=_charset_count_bad($s1);
  $p1=_charset_count_pairs($s1);
  $w1=$p1*32+$b1*64-$c1;

  $s2=charset_win_lowercase(_charset_koi_win($sa));
  $w2=-$c1; //Особенность кодировки koi-8r: тот же диапазон символов, что и для windows-1251
  if($w2<$w1)
  {
    $b2=_charset_count_bad($s2);
    $w2+=64*$b2;
    if($w2<$w1)
    {
      $p2=_charset_count_pairs($s2);
      $w2+=32*$p2;
      if($w2<$w1)
      {
        $r1='koi-8r';
        $w1=$w2;
      }
    }
  }

  $s2=charset_win_lowercase(_charset_utf8_win($sa));

  $c2=_charset_count_chars($s2);
  $w2=-$c2;
  if($w2<$w1)
  {
    $b2=_charset_count_bad($s2);
    $w2+=64*$b2;
    if($w2<$w1)
    {
      $p2=_charset_count_pairs($s2);
      $w2+=32*$p2;
      if($w2<$w1)
      {
        $r1='utf';
        $w1=$w2;
      }
    }
  }

  switch($r1)
  {
    case 'alt':
      return _charset_alt_win($s);
    case 'koi-8r':
      return _charset_koi_win($s);
    case 'utf':
      return _charset_utf8_win($s);
    default:
      return $s;
  }

  return $s;
}
	
	
function rcon($sz, $zreplace='')
	{
	global $connect, $server_rconpass;
 
	if ((strpos($sz, 'tell') !== false)||(strpos($sz, 'say') !== false))
	$sz = charset_x_win($sz);
	fwrite($connect, "\xff\xff\xff\xff" . 'rcon "' . $server_rconpass . '" '.strtr($sz,array('%s'=>$zreplace)));
	$output = fread ($connect, 1);   //512
    //usleep(500*1000);
	usleep(200);
    return $output;
	}

// var_dump(rcon('pb_sv_ver'));
	
function AddToLog($s)
	{
	global $rules_log_file;
	$fp = fopen($rules_log_file, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}

	function AddToparsser($s)
	{
	global $glog_file;
	$fp = fopen($glog_file, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}

/////////
	function Prgamename($s)
	{
	global $ggname_file;
	$fp = fopen($ggname_file, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	

	function Prshortver($s)
	{
	global $gshortver_file;
	$fp = fopen($gshortver_file, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	

	function Prservv($s)
	{
	global $servv_file;
	$fp = fopen($servv_file, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
//////////
	
	function AddTopsdpp($s)
	{
	global $stime_file;
	$fp = fopen($stime_file, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
	
function AddToLogfakerz($s)
	{
	global $info_log_fakers;
	$fp = fopen($info_log_fakers, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function AddToLogInfo($s)
	{
	global $info_log_file;
	$fp = fopen($info_log_file, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function Addregggx($s)
	{
	global $info_log_reggg;
	$fp = fopen($info_log_reggg, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function AddToLogTOP($s)
	{
	global $info_log_top;
	$fp = fopen($info_log_top, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}

function AddToLogTOPreset($s)
	{
	global $info_log_top;
	$fp = fopen($info_log_top, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}

function AddToLogbanlist($s)
	{
	global $info_log_bnlst;
	$fp = fopen($info_log_bnlst, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}

function AddToLogbanlistreset($s)
	{
	global $info_log_bnlst;
	$fp = fopen($info_log_bnlst, 'w+');
    fwrite($fp, $s."\n");
    fclose($fp);
	}

function AddToLogGUID($s)
	{
	global $info_log_regGUID;
	$fp = fopen($info_log_regGUID, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function AddCheatHelp($s)
	{
	global $cheater_help;
	$fp = fopen($cheater_help, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	

function AddPlayerCnt($s)
	{
	global $cnt_pl;
	$fp = fopen($cnt_pl, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function VoteCash($s)
	{
	global $rules_log_vote;
	$fp = fopen($rules_log_vote, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
//////////////////////////////MAPVOTE	
function VoteCashMap($s)
	{
	global $rules_log_vote_map;
	$fp = fopen($rules_log_vote_map, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
function VoteCashresetMap($s)
	{
	global $rules_log_vote_map;
	$fp = fopen($rules_log_vote_map, 'w');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
//////////////////////////////MAPVOTE
//////////////////////////////GT	
function VoteCashGT($s)
	{
	global $rules_log_vote_gt;
	$fp = fopen($rules_log_vote_gt, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
function VoteCashresetGT($s)
	{
	global $rules_log_vote_gt;
	$fp = fopen($rules_log_vote_gt, 'w');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
//////////////////////////////GT
	
function FludCash($s)
	{
	global $rules_log_flud_chat;
	$fp = fopen($rules_log_flud_chat, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function FludCashreset($s)
	{
	global $rules_log_flud_chat;
	$fp = fopen($rules_log_flud_chat, 'w');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	
function VoteCashreset($s)
	{
	global $rules_log_vote;
	$fp = fopen($rules_log_vote, 'w');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
			
function AddToLog1($s)
	{
	global $log_chatcl;
	$fp = fopen($log_chatcl, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function AddToLog1clear($s)
	{
	global $log_chat;
	$fp = fopen($log_chat, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}
	
function AddToLog2($s)
	{
	global $rules_log_file2;
	$fp = fopen($rules_log_file2, 'a');
    fwrite($fp, $s."\n");
    fclose($fp);
	}	

function stringrpos($haystack,$needle,$offset=NULL)
	{
	   if (strpos($haystack,$needle,$offset) === FALSE)
	     return FALSE;

	   return strlen($haystack)
	           - strpos( strrev($haystack) , strrev($needle) , $offset)
	           - strlen($needle);
	}

function GetPlainName($name) // copied from original - IPluginCOD.php
	{

		$repname = $name;

		for($y=0; $y < 2; $y++) // Loop around a few time in case we have embedded colors!
		{
			for($x=0; $x < 10; $x++)
			{
				$repname = str_replace("^$x","",$repname);
				//$repname = str_replace("^^$x","",$repname);
			}
		}
		return $repname;
	}
	
	
$local_dir     = $cpath.'ReCodMod/x_logs/';

function do_upload($dir = 'upload')
{   
   global $conn_id, $ftp_root, $transfer_mode, $local_dir;
   $ftp_dir = preg_replace('~^'.$local_dir.'\/?~', '', $dir);
   if ($ftp_dir != '')
      echo 'Folder '. $ftp_dir . ((ftp_mkdir($conn_id, $ftp_root . $ftp_dir)) ? ' создана' : ' не создана')."\n";
   $filelist = glob(($dir!='') ? $dir.'/*' : '*');
   if ($filelist == array())
      return 0;
   foreach ($filelist as $file)
      {
      if (is_file($file))
         {
         $transfer_mode = (preg_match('~\.(htX|log)$~', $file)) ? FTP_BINARY : FTP_ASCII;
         echo 'File ' . $file . ((ftp_put($conn_id, $ftp_root . preg_replace('~^'.$local_dir.'\/~', '', $file), $file, $transfer_mode)) ? ' загружен' : ' не загружен')."\n";
         }
      else    
         do_upload($file);
      }
   return 0;   
}

function do_upload_getss($dir = 'upload')
{   
   global $conn_id, $ftp_root_getss, $transfer_mode, $local_dir_getss;
   $ftp_dir = preg_replace('~^'.$local_dir_getss.'\/?~', '', $dir);
   if ($ftp_dir != '')
      echo 'Folder '. $ftp_dir . ((ftp_mkdir($conn_id, $ftp_root_getss . $ftp_dir)) ? ' создана' : ' не создана')."\n";
   $filelist = glob(($dir!='') ? $dir.'/*' : '*');
   if ($filelist == array())
      return 0;
   foreach ($filelist as $file)
      {
      if (is_file($file))
         {
         $transfer_mode = (preg_match('~\.(gif|jpg|png)$~', $file)) ? FTP_BINARY : FTP_ASCII;
         echo 'File ' . $file . ((ftp_put($conn_id, $ftp_root_getss . preg_replace('~^'.$local_dir_getss.'\/~', '', $file), $file, $transfer_mode)) ? unlink("$file").' загружен' : ' не загружен')."\n";
         }
      else    
         do_upload_getss($file);
      }
   return 0;   
}	
	
////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
 $fuckmatch = 0;
function netMatch($network, $ip) {
    $network=trim($network);
    $orig_network = $network;
    $ip = trim($ip);
    if ($ip == $network) {
        echo "used network ($network) for ($ip)\n";
        return TRUE;
    }
    $network = str_replace(' ', '', $network);
    if (strpos($network, '*') !== FALSE) {
        if (strpos($network, '/') !== FALSE) {
            $asParts = explode('/', $network);
            $network = @ $asParts[0];
        }
        $nCount = substr_count($network, '*');
        $network = str_replace('*', '0', $network);
        if ($nCount == 1) {
            $network .= '/24';
        } else if ($nCount == 2) {
            $network .= '/16';
        } else if ($nCount == 3) {
            $network .= '/8';
        } else if ($nCount > 3) {
            return TRUE; // if *.*.*.*, then all, so matched
        }
    }

	//echo "from original network($orig_network), used network ($network) for ($ip)\n";

    $d = strpos($network, '-');
    if ($d === FALSE) {
        $ip_arr = explode('/', $network);
        if (!preg_match("@\d*\.\d*\.\d*\.\d*@", $ip_arr[0], $matches)){
            $ip_arr[0].=".0";    // Alternate form 194.1.4/24
        }
        $network_long = ip2long($ip_arr[0]);
        $x = ip2long($ip_arr[1]);
        $mask = long2ip($x) == $ip_arr[1] ? $x : (0xffffffff << (32 - $ip_arr[1]));
        $ip_long = ip2long($ip);
        return ($ip_long & $mask) == ($network_long & $mask);
    } else {
        $from = trim(ip2long(substr($network, 0, $d)));
        $to = trim(ip2long(substr($network, $d+1)));
        $ip = ip2long($ip);
        return ($ip>=$from and $ip<=$to);
    }
}

function ech($b) {
	global $fuckmatch;
    if ($b) {
		//echo "MATCHED";
		$fuckmatch = true;
    } else {
		//echo "DID NOT MATCH";
		$fuckmatch = false;
    }
}


function antimat($mat){

       global $cpath;
       include_once($cpath.'ReCodMod/functions/core/classes/antimat.class.php');
       include_once($cpath.'ReCodMod/functions/core/classes/ReflectionTypehint.php');
       include_once($cpath.'ReCodMod/functions/core/classes/UTF8.php');
        //$mat = Censure::parse($mat,'10','',true,'%CENSORED%','CP1251');
	$mat = Censure::parse($mat,'10','',true,'%CENSORED%');
      return $mat;
    }


?>


