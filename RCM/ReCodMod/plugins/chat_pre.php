<?php
$msgr = matmat($msgr);
$x_n4 = trim(clearnamex($nivv));
$yug = mb_strtolower($msgr, 'Windows-1251');
$msgrxc = mb_strtolower($msgrx, 'Windows-1251');
$yug = matmat($yug);
$x_mat = true;

foreach($matnie as $badword)
{
	
 
/*	 	
   preg_match("/".$badword."/si", $yug, $maxb);
  //$matches = strpos($badword, $yug);
  if(count($maxb) > 0)
  {  
	$x_mat = false;
	echo" -mat- ";
  }
*/	 
	
		
preg_match_all("#\b(\w+)\b#",$msgrxc,$out);
for ($i=0; $i< count($out[0]); $i++) {
	
  if($out[0][$i] == $badword)
  {  
	$x_mat = false;
	echo " -mat- badword ".$out[0][$i]." detected ";
  }		
	
	if($x_mat != false)
{ 
if(strlen($out[0][$i]) > 3)
{
preg_match("/".$badword."/si", $out[0][$i], $maxbw);
  if(count($maxbw) > 0)
  {  
	$x_mat = false;
	echo" -sqlite3 bad word ".$out[0][$i]." detected- ";
  }	
}
}
}
} 		


$x_spam = true;
foreach($spams as $spms)
{
   preg_match("/".$spms."/si", $yug, $maxn);
  //$matches = strpos($badword, $yug);
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
  //$matches = strpos($badword, $yug);
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
	    
preg_match_all("#\b(\w+)\b#",$msgrxc,$out);

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
?>
 
	
