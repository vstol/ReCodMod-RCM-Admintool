<?php
$msgr = matmat($msgr);
$x_n4 = trim(clearnamex($nivv));
$yug = mb_strtolower($msgr, 'Windows-1251');
$msgrxc = mb_strtolower($msgrx, 'Windows-1251');
$yug = matmat($yug);
$x_mat = true;

  //$dtct = mb_detect_encoding($msgr);
  //if($dtct == 'UTF-8' || $dtct == 'utf-8')
	  
 echo "\n ".$player_msg = iconv("windows-1251", "utf-8", $msgr), PHP_EOL;
  $player_msg = matmat($player_msg);
  $player_msg = mb_strtolower($player_msg);
 
foreach($matnie as $badword)
{
  $bdwww = matmat($badword);
/*	 	
   preg_match("/".$bdwww."/si", $yug, $maxb);
  //$matches = strpos($bdwww, $yug);
  if(count($maxb) > 0)
  {  
	$x_mat = false;
	echo" -mat- ";
  }
*/	 
	
 ///////ENGLISH
preg_match_all("#\b(\w+)\b#",$player_msg,$out);
for ($i=0; $i< count($out[0]); $i++) {
	
  if($out[0][$i] == $bdwww)
  {  
	$x_mat = false;
	
        echo " -mat- badword ".$out[0][$i]." detected \n ".$player_msg;
 
  }	

///////RUSSIAN
if($x_mat != false)
{
preg_match_all("#\b(\[0-9а-яА-ЯёЁ]+)\b#",$player_msg,$out);
for ($i=0; $i< count($out[0]); $i++) {
	
  if($out[0][$i] == $bdwww)
  {  
	$x_mat = false;
	
        echo " -mat- badword ".$out[0][$i]." detected \n ".$player_msg;
 
  }	  
}
}
	
	if($x_mat != false)
{ 
if(strlen($out[0][$i]) > 3)
{
preg_match("/".$bdwww."/si", $out[0][$i], $maxbw);
  if(count($maxbw) > 0)
  {  
	$x_mat = false;
	//echo" -sqlite3 bad word ".$out[0][$i]." detected- ";
        echo " -mat- more 3 symbols in badword ".$out[0][$i]." detected \n ".$player_msg;
  }	
}
}
}
} 		


$x_spam = true;
foreach($spams as $spms)
{
   preg_match("/".$spms."/si", $yug, $maxn);
  //$matches = strpos($bdwww, $yug);
  if(count($maxn) > 0)
  {  
	$x_spam = false;
	echo" -spam- ";
  }
} 


$x_cry = true;
foreach($cryers as $cvr)
{
   preg_match("/".$cvr."/si", $yug, $maxj);
  //$matches = strpos($bdwww, $yug);
  if(count($maxj) > 0)
  {  
	$x_cry = false;
	echo" -cry- ";
  }
} 
if($x_spam|| $x_cry)
{
try
  {
////////////////////////////
 if (empty($bannlist))	  
$db2 = new PDO('sqlite:'.$cpath . 'ReCodMod/databases/db2.sqlite');
else
$db2 = new PDO('sqlite:'.$bannlist);
////////////////////////////

  $result = $db2->query("SELECT * FROM `x_words`");
    foreach($result as $row)
    {
$wordxx = $row['z_words'];			
  
/*	    
preg_match("/".$wordxx."/si", $yug, $maxbw);
  if(count($maxbw) > 0)
  {  
	$x_mat = false;
	echo" -sqlite3 bad word detected- ";
  }
*/	  
	    
preg_match_all("#\b(\pL+)\b#",$player_msg,$out);

for ($i=0; $i< count($out[0]); $i++) {
	
	$out[0][$i] = meessagee($out[0][$i]);
	$out[0][$i] = repooort($out[0][$i]);

  if($out[0][$i] == $wordxx)
  {  
	$x_mat = false;
	echo " -sqlite3- badword ".$out[0][$i]." detected ";	
  }	

if(strlen($wordxx) > 2)
{
if(strlen($out[0][$i]) > 3)
{
	$out[0][$i] = matmat($out[0][$i]);
preg_match("/".$wordxx."/si", $out[0][$i], $maxbw);
  if(count($maxbw) > 0)
  {  
	$x_mat = false;
	echo" -sqlite3 bad word ".$out[0][$i]." detected- ";
  }	
}
}
	    
    }
  }}
    catch (PDOException $e) {
        print ' FILE:  ' . __FILE__ . '  Exception : ' . $e->getMessage();
    }
}



if($x_mat != false){
foreach($matnie as $bdwww)
{

if (($player_msg == $bdwww) || (strpos($player_msg, $bdwww) !== false))
{

if(strlen($player_msg) > 2)
{
echo ' DETECTED WORD!!! ';
echo  $player_msg." == ".$bdwww;
$x_mat = false;
}
}
}}

?>	
