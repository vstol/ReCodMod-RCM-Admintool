<?php
if ($x_stop_lp == 0) {
if (strpos($msgr,$ixz.'rules') !== false)
    { 

    

if (!empty($messagenm1)) {
	$messagenm1 = iconv("utf-8", "windows-1251//IGNORE", $messagenm1);
	usleep($sleep_rcon);
rcon('say '.$messagenm1.'', ''); 
}

if (!empty($messagenm2)) {
	$messagenm2 = iconv("utf-8", "windows-1251//IGNORE", $messagenm2);
	usleep($sleep_rcon);
rcon('say '.$messagenm2.'', ''); 
}

if (!empty($messagenm3)) {
	$messagenm3 = iconv("utf-8", "windows-1251//IGNORE", $messagenm3);
	usleep($sleep_rcon);
rcon('say '.$messagenm3.'', ''); 
}


++$x_stop_lp;	
						
	}
}
?>
