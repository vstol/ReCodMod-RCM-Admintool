<?php  
///

if ($game_patch == 'cod1_1.1')
			$i_name1c = 22;
else if (($game_patch == 'cod2') || ($game_patch == 'cod4') || ($game_patch == 'cod5'))
                        $i_name1c = 47;
else
		        $i_name1c = 22;

if((empty($output[$i])) || ( $server_rconpass == 'my_rcon_password'))
{

$output[$i] = 0;
$player_cnt = 2;
$i_id = '';
$i_ping = '';
$i_ip = '';
$i_name = '';

$erroor = 'ERROR001';
//echo $erroor;
}else{

	$i_rcon_string = $output[$i];
	if ($i_rcon_string != '')
		{
		$pat[0] = "/^\s+/";
		$pat[1] = "/\s{2,}/";
		$pat[2] = "/\s+\$/";
		$rep[0] = "";
		$rep[1] = " ";
		$rep[2] = "";
		  $i_rcon_string = preg_replace($pat,$rep,$i_rcon_string);

		unset($tmp2);
        if (preg_match("/[[:space:]][0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}/",  $i_rcon_string, $tmp2))
            {
            $i_ip = substr($tmp2[0],1);
			} else $i_ip = '';

if ($game_patch == 'cod1_1.1')
		$i_rcon_string = explode(' ', $i_rcon_string, 15);
else if (($game_patch == 'cod2') || ($game_patch == 'cod4') || ($game_patch == 'cod5')) 
                 $i_rcon_xstring = $i_rcon_string; 
			else
				$i_rcon_string = explode(' ', $i_rcon_string, 5);
        
$i_id = $i_rcon_string[0];
if (!empty($i_rcon_string[2]))
$i_ping = $i_rcon_string[2];
else 
$i_ping = '001';
		
if ($game_patch == 'cod1_1.1')
{

if(empty($i_rcon_string[4]))
$i_rcon_string[4] = '';
 if(empty($i_rcon_string[5]))
$i_rcon_string[5] = '';
 if(empty($i_rcon_string[6]))
$i_rcon_string[6] = '';
 if(empty($i_rcon_string[7]))
$i_rcon_string[7] = '';
 if(empty($i_rcon_string[8]))
$i_rcon_string[8] = '';
 if(empty($i_rcon_string[9]))
$i_rcon_string[9] = '';
 if(empty($i_rcon_string[10]))
$i_rcon_string[10] = '';
 if(empty($i_rcon_string[11]))
$i_rcon_string[11] = '';


$i_ping = $i_rcon_string[3].' '.$i_rcon_string[4].' '.$i_rcon_string[5].' '.$i_rcon_string[6].' '.$i_rcon_string[7].' '.$i_rcon_string[8].' '.$i_rcon_string[9].' '.$i_rcon_string[10].' '.$i_rcon_string[11];
 
$fff = preg_replace("/[[:space:]][0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\:/",  '#;#;#', $i_ping);

$i_nam = explode("#;#;#", $fff);
 $i_namea = $i_nam[0];        

}

		$i_name = substr($output[$i], $i_name1c);
		$i_name = preg_replace($pat,$rep,$i_name);
		$vyk = ':';
		$tmp = stringrpos($i_name, $vyk);
		if ($tmp === false)
		    {
			$vyk = '!';
			$tmp = stringrpos($i_name, $vyk);
			  
			  
			  if ($tmp === false)
			 	{
					
				}
				else
				{
					
				if(!empty($output[$i]))
					return;	
					
				}
			
			}



	    $i_name = substr($i_name, 0, $tmp);
	    $i_name = substr($i_name, 0, stringrpos($i_name, ' '));
	    $tmp2 = stringrpos($i_name, ' ');
	    if ($tmp2 !== false)
	    	{$i_name = substr($i_name, 0, $tmp2);}
		$chistx = $i_name;
        $i_name = trim(GetPlainName($i_name));

		}
	

if ($game_patch == 'cod1_1.1'){
	
$i_name = trim(GetPlainName($i_namea));
$i_name = $i_ping;
$chistx = $i_namea;

$chistx = preg_replace("/[[:space:]][0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}/", "%%", $chistx);
if (strpos($chistx,'%%') !== false){
list($thatlinev, $nonexv) = explode('%%', $chistx);
$chistx = preg_replace("/\s[0-9]{1,3}/", "", $thatlinev);
}

$i_name = preg_replace("/[[:space:]][0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}/", "%%", $i_name);
if (strpos($i_name,'%%') !== false){
list($thatline, $nonex) = explode('%%', $i_name);
$i_name = preg_replace("/\s[0-9]{1,3}/", "", $thatline);
}


}



///NEED GET GUID  $knwguid
if (($game_patch == 'cod2') || ($game_patch == 'cod4') || ($game_patch == 'cod5')) {

$ixxx = preg_replace("/[[:space:]][0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}/", "%%", $i_rcon_xstring);

if (strpos($ixxx,'%%') !== false){
list($thatline, $nonex) = explode('%%', $ixxx);
	$thatline = substr($thatline, 0, -4);
	$cccount = substr_count($thatline, ' ');
	
	if($cccount == 4){
	list($xc_id, $xc_score, $xc_ping, $xc_guid, $xc_name) = explode( ' ', $thatline);
    }
	else if ($cccount == 5){
    list($xc_id, $xc_score, $xc_ping, $xc_guid, $xc_name ,$xc_name1) = explode( ' ', $thatline);
    $xc_name = $xc_name. ' '.$xc_name1;
	}
	else if($cccount == 6){
    list($xc_id, $xc_score, $xc_ping, $xc_guid, $xc_name ,$xc_name1,$xc_name2) = explode( ' ', $thatline);	
     $xc_name = $xc_name. ' '. $xc_name1. ' '. $xc_name2;
	 }
	else if($cccount == 7){
    list($xc_id, $xc_score, $xc_ping, $xc_guid, $xc_name ,$xc_name1,$xc_name2,$xc_name3) = explode( ' ', $thatline);
    $xc_name = $xc_name. ' '. $xc_name1. ' '. $xc_name2. ' '. $xc_name3;
	}
	else if($cccount == 8){
    list($xc_id, $xc_score, $xc_ping, $xc_guid, $xc_name ,$xc_name1,$xc_name2,$xc_name3,$xc_name4) = explode( ' ', $thatline);
    $xc_name = $xc_name. ' '. $xc_name1. ' '. $xc_name2. ' '. $xc_name3. ' '. $xc_name4;
	}
	else if($cccount == 9){
    list($xc_id, $xc_score, $xc_ping, $xc_guid, $xc_name ,$xc_name1,$xc_name2,$xc_name3,$xc_name4,$xc_name5) = explode( ' ', $thatline);
    $xc_name = $xc_name. ' '. $xc_name1. ' '. $xc_name2. ' '. $xc_name3. ' '. $xc_name4. ' '. $xc_name5;
	}
	else if($cccount == 10){
    list($xc_id, $xc_score, $xc_ping, $xc_guid, $xc_name ,$xc_name1,$xc_name2,$xc_name3,$xc_name4,$xc_name5,$xc_name6) = explode( ' ', $thatline);
	$xc_name = $xc_name. ' '. $xc_name1. ' '. $xc_name2. ' '. $xc_name3. ' '. $xc_name4. ' '. $xc_name5. ' '. $xc_name6;
	}
	else if($cccount == 11){
    list($xc_id, $xc_score, $xc_ping, $xc_guid, $xc_name ,$xc_name1,$xc_name2,$xc_name3,$xc_name4,$xc_name5,$xc_name6,$xc_name7) = explode( ' ', $thatline);
	$xc_name = $xc_name. ' '. $xc_name1. ' '. $xc_name2. ' '. $xc_name3. ' '. $xc_name4. ' '. $xc_name5. ' '. $xc_name6. ' '. $xc_name7;
	}
	else if($cccount == 12){
    list($xc_id, $xc_score, $xc_ping, $xc_guid, $xc_name ,$xc_name1,$xc_name2,$xc_name3,$xc_name4,$xc_name5,$xc_name6,$xc_name7,$xc_name8) = explode( ' ', $thatline);
	$xc_name = $xc_name. ' '. $xc_name1. ' '. $xc_name2. ' '. $xc_name3. ' '. $xc_name4. ' '. $xc_name5. ' '. $xc_name6. ' '. $xc_name7. ' '. $xc_name8;
	}
	else if($cccount == 13){
    list($xc_id, $xc_score, $xc_ping, $xc_guid, $xc_name ,$xc_name1,$xc_name2,$xc_name3,$xc_name4,$xc_name5,$xc_name6,$xc_name7,$xc_name8,$xc_name9) = explode( ' ', $thatline);
	$xc_name = $xc_name. ' '. $xc_name1. ' '. $xc_name2. ' '. $xc_name3. ' '. $xc_name4. ' '. $xc_name5. ' '. $xc_name6. ' '. $xc_name7. ' '. $xc_name8. ' '. $xc_name9;
	}
	 
        $xc_guid = str_replace('!', '', $xc_guid);
/*
        echo "ID: ". $i_id = $xc_id;  
	//echo ' Score: '.$i_score = $xc_score; 
	//echo ' Ping: '.$i_ping = $xc_ping;  
	echo ' Guid: '.$i_guid = $xc_guid; 
        echo ' IP: '.$i_ip; 
	//echo ' Nickname - '.$xc_name;
	echo ' Nick: '.$i_name;
        */
}

}



$valid_id = is_numeric($i_id);
	
if ($game_patch == 'cod1_1.1')
$valid_ping = !is_numeric($i_ping);
else
$valid_ping = is_numeric($i_ping); 	
}




	//if(empty($valid_id))
	//	return;
?>
