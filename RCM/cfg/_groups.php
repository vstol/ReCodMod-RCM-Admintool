<?php

///SUPPORT MULTI EMAIL ADRESS - EXAMPLE -> $admin_email = 'my_email_accaunt@yandex.ru;ADMIN2@yahoo.com;adminname@mail.com';
$admin_email = 'my_email_accaunt@yandex.ru';   //for report sending commands! [tested with yandex.com , gmail.com and yahoo.com mail services - but you can make redirect messages to your email service]

$gmailpass = '';  //Only FOR GMAIL.COM email service need Password [without pass don't work]


// Use admin connection form http://recod.ru/code.php 1 - yes  or  0 = no
$code = 0; 

//Security code. 4 - 16 Digits or letters. x - off (don't use rcon password).
//FOR connection form http://recod.ru/code.php GIVE passwords for each needed person.
//Admins.
$admin_code = 'mysecureadminpass'; ///main password
$admin_codee[] = 'name1 mysecureadminpass'; 
$admin_codee[] = 'name2 mysecureadminpass'; 
$admin_codee[] = 'name3 mysecureadminpass'; 
$admin_codee[] = 'name4 mysecureadminpass'; 
$admin_codee[] = 'name5 mysecureadminpass';
$admin_codee[] = 'name6 mysecureadminpass'; 
$admin_codee[] = 'name7 mysecureadminpass';  
/////// not more 1000* $admin_code[] xD
//moderators.
$moderator_code = 'moderatorpassword';  ///main password
$moderator_codee[] = 'name1 moderatorsecurepassword'; 
$moderator_codee[] = 'name2 moderatorsecurepassword'; 
$moderator_codee[] = 'name3 moderatorsecurepassword'; 
$moderator_codee[] = 'name4 moderatorsecurepassword'; 
$moderator_codee[] = 'name5 moderatorsecurepassword';  
//special guests.
$specialguests_code = 'SPECIAL_GUEST_SECURE_PASSWOORD';  ///main password
$specialguests_codee[] = 'name1 specialguestsecurepassword';   
$specialguests_codee[] = 'name2 specialguestsecurepassword';
$specialguests_codee[] = 'name3 specialguestsecurepassword';
$specialguests_codee[] = 'name4 specialguestsecurepassword';
$specialguests_codee[] = 'name5 specialguestsecurepassword';
//guests
$guest = 'x';  ///main password
$eguest[] = 'name1 guestsecurepassword'; 
$eguest[] = 'name2 guestsecurepassword';  
//vip players (donators)
$vip_code = 'x'; ///main password
$vip_codee[] = 'name1 specialguestsecurepassword'; 
$vip_codee[] = 'name2 specialguestsecurepassword'; 
//clan member
$clan_member = 'x';   ///main password
$eclan_member[] = 'name1 clansecurepassword';
$eclan_member[] = 'name2 clansecurepassword';
//vip players (donators)
$topplayer = 'x';   ///main password
$etopplayer[] = 'name1 toplsecurepassword';
$etopplayer[] = 'name2 toplsecurepassword';





///ADMIN IP ADRESS FOR SERVER CONTROL
///if http://recod.ru/code.php masterserver down.
 $adminIP[] = '192.168.2.1'; //localhost ip, if you want add it
 $adminIP[] = '78.84.39.138';
 $adminIP[] = '34.67.134.22'; 
 $adminIP[] = '120.23.12.99';

  //ALTERNATIVE 7 IP'S  for !register !login or !on command for connect to control!
  //USE !logout than !register or !on
 $adminip1 = '120.23.12.99';
 $adminip2 = '120.23.12.99';
 $adminip3 = '120.23.12.99';
 $adminip4 = '120.23.12.99';
 $adminip5 = '120.23.12.99';
 $adminip6 = '120.23.12.99';
 $adminip7 = '120.23.12.99';
 
 
 
 
 
///ADMIN LIST CONTROL WITH GUID SUPPORT SERVERS. 1 = Enable, 0 = Disable / Dosn't support cod1 1.1 
//SUPPORT ONLY COD1 1.2 AND UP COD VERSIONS WITH GUIDS.
 $adminguidctl = 0;
///ADMIN LIST CONTROL WITH GUID SUPPORT SERVERS
 $adminguids[] = '02d45f0829c42b2a4460060012e5bbbe';
 $adminguids[] = '457a67c83dc08brf0a3b0966b83546c'; 
 
 //ALTERNATIVE 7 GUIDS  for !register !login or !on command for connect to control!
 //USE !logout than !register or !on
 $adminguids1 = '02d45f0829c42b2a4460060012e5bbbe';
 $adminguids2 = '457a67c83dc08brf0a3b0966b83546c';
 $adminguids3 = '457a67c83dc08brf0a3b0966b83546c';
 $adminguids4 = '457a67c83dc08brf0a3b0966b83546c';
 $adminguids5 = '457a67c83dc08brf0a3b0966b83546c';
 $adminguids6 = '457a67c83dc08brf0a3b0966b83546c';
 $adminguids7 = '457a67c83dc08brf0a3b0966b83546c';
 
?>
