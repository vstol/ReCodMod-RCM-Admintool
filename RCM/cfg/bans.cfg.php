<?php 
////////////Manual ban simple ip ranges///////////////////

// Manual ip ban / Sample: IP: 111.222.333.444   add to ban 111.222 
// *Until 1000
 $rules_kick_ip_super_range = true;  // true - on , false - off
 $rules_super_range[] = '95.28';
 

// Manual Guids BAN  
// *Until 1000
 $rules_kick_guids = true;     // true - on , false - off
 $rules_guids[] = 'ugfsfighaw8hafw87ywhadawdaw33';
 $rules_guids[] = '837rgbn3thgfbnefknbhnwlrnfbjn';
 $rules_guids[] = 'leihuwioejehuhifojwe8whrjowji';

 
// Manual bad names ban / they will be kicked if $rules_kick_bad_named is enabled 
// - type them here in _lowercase_ without colors 
// *Until 1000
$rules_kick_bad_named = true;	// true - on , false - off
$rules_badname[] = 'Admin';
$rules_badname[] = 'console';
$rules_badname[] = 'LA';
$rules_badname[] = 'Server';
$rules_badname[] = 'Console';
?>