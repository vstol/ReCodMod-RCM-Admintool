<?php
        if(file_exists($cpath . 'ReCodMod/x_logs/g_log.log') 
        && file_exists($cpath . 'ReCodMod/x_cache/pos.txt')
	    && file_exists($cpath . 'ReCodMod/databases/db3.sqlite')){
           //echo "\n Cache files ok..\n";
	       echo ".\n";
}else{

if ((!mkdir($cpath.'ReCodMod/x_crontime/', 0777, true)) &&
(!mkdir($cpath.'ReCodMod/x_errors/', 0777, true)) &&
(!mkdir($cpath.'ReCodMod/x_logs/', 0777, true)) &&
(!mkdir($cpath.'ReCodMod/x_logs/archive/chat/', 0777, true)) &&
(!mkdir($cpath.'ReCodMod/x_cron/', 0777, true)) &&
(!mkdir($cpath.'ReCodMod/x_update/', 0777, true)) &&
(!mkdir($cpath.'ReCodMod/databases/', 0777, true)) &&
(!mkdir($cpath.'ReCodMod/x_cache/', 0777, true))) {
    echo "\n RCM was INSTALLED..\n";
}
else{
echo "\n RCM FIRST INSTALL......\n";
sleep (2);
$dir = $cpath."ReCodMod/"; 
if(!is_dir($dir)) mkdir($dir, 0777, true) ;
$dir = $cpath."ReCodMod/databases/"; 
if(!is_dir($dir)) mkdir($dir, 0777, true) ;
$dir = $cpath."ReCodMod/x_crontime/"; 
if(!is_dir($dir)) mkdir($dir, 0777, true) ;
$dir = $cpath."ReCodMod/x_errors/"; 
if(!is_dir($dir)) mkdir($dir, 0777, true) ;
$dir = $cpath."ReCodMod/x_logs/"; 
if(!is_dir($dir)) mkdir($dir, 0777, true) ;
$dir = $cpath."ReCodMod/x_logs/archive/"; 
if(!is_dir($dir)) mkdir($dir, 0777, true) ;
$dir = $cpath."ReCodMod/x_logs/archive/chat/"; 
if(!is_dir($dir)) mkdir($dir, 0777, true) ;
$dir = $cpath."ReCodMod/x_cron/"; 
if(!is_dir($dir)) mkdir($dir, 0777, true) ;
$dir = $cpath."ReCodMod/x_update/"; 
if(!is_dir($dir)) mkdir($dir, 0777, true) ;
$dir = $cpath."ReCodMod/x_cache/"; 
if(!is_dir($dir)) mkdir($dir, 0777, true) ;
 
chmod($cpath."ReCodMod/", 0777);
chmod($cpath."ReCodMod/databases/", 0777);
chmod($cpath."ReCodMod/x_crontime/", 0777);
chmod($cpath."ReCodMod/x_errors/", 0777);
chmod($cpath."ReCodMod/x_logs/", 0777);
chmod($cpath."ReCodMod/x_logs/archive/", 0777);
chmod($cpath."ReCodMod/x_logs/archive/chat/", 0777);
chmod($cpath."ReCodMod/x_cron/", 0777);
chmod($cpath."ReCodMod/x_update/", 0777);
chmod($cpath."ReCodMod/x_cache/", 0777);

echo " Install - Folders and cache files.\n";
sleep (2);
touch($cpath.'ReCodMod/x_logs/archive/chat/none.log');
touch($cpath.'ReCodMod/x_logs/g_log.log');
touch($cpath.'ReCodMod/x_logs/g_gamename.log');
touch($cpath.'ReCodMod/x_logs/g_shortversion.log');
touch($cpath.'ReCodMod/x_logs/g_servername.log');
touch($cpath.'ReCodMod/x_crontime/cron_time');
touch($cpath.'ReCodMod/x_crontime/cron_time_alba');
touch($cpath.'ReCodMod/x_crontime/cron_time_message');
touch($cpath.'ReCodMod/x_crontime/cron_time_msg');
touch($cpath.'ReCodMod/x_crontime/cron_time_players');
touch($cpath.'ReCodMod/x_crontime/cron_time_top');
touch($cpath.'ReCodMod/x_crontime/cron_time1');

touch($cpath.'ReCodMod/x_cron/cron_time');
touch($cpath.'ReCodMod/x_cron/cron_time_code');
touch($cpath.'ReCodMod/x_cron/cron_time_exec1');
touch($cpath.'ReCodMod/x_cron/cron_time_exec1z');
touch($cpath.'ReCodMod/x_cron/cron_time_kicker');
touch($cpath.'ReCodMod/x_cron/cron_time_message');
touch($cpath.'ReCodMod/x_cron/cron_time_msg');
touch($cpath.'ReCodMod/x_cron/cron_time_resttt');
touch($cpath.'ReCodMod/x_cron/cron_time_resttt2');
touch($cpath.'ReCodMod/x_cron/cron_time_sd');
touch($cpath.'ReCodMod/x_cron/cron_time_top');

touch($cpath.'ReCodMod/x_cache/filesize.log');
touch($cpath.'ReCodMod/x_cache/pos.txt');
touch($cpath.'ReCodMod/x_cache/pos2.txt');
touch($cpath.'ReCodMod/x_cache/temp.txt');
touch($cpath.'ReCodMod/x_cache/temp_gametype_vote.txt');
touch($cpath.'ReCodMod/x_cache/temp_mapvote.txt');
touch($cpath.'ReCodMod/x_cache/temp0.txt');
touch($cpath.'ReCodMod/x_cache/temp2.txt');
touch($cpath.'ReCodMod/x_cache/temp3.txt');
touch($cpath.'ReCodMod/x_cache/temp4.txt');
touch($cpath.'ReCodMod/x_cache/temp5.txt');
touch($cpath.'ReCodMod/x_cache/temp6.txt');
touch($cpath.'ReCodMod/x_cache/temp7.txt');
touch($cpath.'ReCodMod/x_cache/temp8.txt');
touch($cpath.'ReCodMod/x_cache/temp-a.txt');
touch($cpath.'ReCodMod/x_cache/temp-a2.txt');
touch($cpath.'ReCodMod/x_cache/temp-b.txt');
touch($cpath.'ReCodMod/x_cache/temp-b2.txt');
touch($cpath.'ReCodMod/x_cache/temp-c.txt');
touch($cpath.'ReCodMod/x_cache/temp-c2.txt');
touch($cpath.'ReCodMod/x_cache/temp-d.txt');
touch($cpath.'ReCodMod/x_cache/z-alba.log');
touch($cpath.'ReCodMod/x_cache/z-vote.log');
touch($cpath.'ReCodMod/x_cache/z-vote-gametype.log');
touch($cpath.'ReCodMod/x_cache/z-vote-map.log');
touch($cpath.'ReCodMod/x_update/update.log');

        if(!file_exists($cpath . 'ReCodMod/databases/db0.sqlite')){
			
  try
  {
    $db0 = new PDO('sqlite:'. $cpath . 'ReCodMod/databases/db0.sqlite');

    $db0->exec("CREATE TABLE configs (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, admin varchar(100), guid int(26), ip int(10), uid int(10), password int(10), cfg int(10), serverip int(10), serverport int(10), time int(10))"); 
	
	    $db0->exec("CREATE TABLE getss (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, e_admin varchar(100), e_guid int(26), e_nick int(50), e_ip int(10), e_uid int(10), e_geo int(10), e_counts(5), e_time int(50))"); 
		
		$db0->exec("INSERT INTO getss ( e_admin, e_guid, e_nick, e_ip, e_uid, e_geo, e_counts, e_time ) VALUES ('GODlevel999', 'u6fguhwystaywduf76drcvb', 'imhacker', '111.222.333.444','78035820','Island','7','2016.09.30');");
 
    $db0 = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }  			
		}
  if(!file_exists($cpath . 'ReCodMod/databases/db1.sqlite')){
	  
 try
  {
    $db = new PDO('sqlite:'. $cpath . 'ReCodMod/databases/db1.sqlite');

    $db->exec("CREATE TABLE x_db_admins (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, s_adm varchar(50), s_dat varchar(50), s_group varchar(10), s_guid varchar(100))"); 
	$db->exec("CREATE TABLE z_counts (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, s_dat varchar(50), z_time varchar(200))");
	$db->exec("CREATE TABLE x_cmd_kck (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, z_counts varchar(50), s_dat varchar(50), z_time varchar(100))");
	$db->exec("INSERT INTO x_cmd_kck ( z_counts, s_dat, z_time ) VALUES ('1', '201601010', '201601010');");	

    $db->exec("INSERT INTO x_db_admins (s_adm, s_dat, s_group, s_guid ) VALUES ('90.150.107.163', '2015-12-11 14:21:18', '5', '63d6695c321f8100c6f918b43d837f74');"
			  );


    $result = $db->query('SELECT * FROM x_db_admins');
    foreach($result as $row)
    {
  
     //echo "\n ".$row['s_guid']." ";
    
    }
    
	$stat = $db->query('SELECT COUNT(id) FROM x_db_admins')->fetchColumn();
   //echo '  -----------   '.$stat;
	
    $db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }	  
  }	  
   if(!file_exists($cpath . 'ReCodMod/databases/db2.sqlite')){
  try
  {
 
    $db2 = new PDO('sqlite:'. $cpath . 'ReCodMod/databases/db2.sqlite');
 
    $db2->exec("CREATE TABLE bans (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, playername varchar(100), ip varchar(100), guid varchar(100), reason varchar(100), time varchar(100), whooo varchar(100), patch varchar(10))"); 
    $db2->exec("CREATE TABLE amnistia (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, playername1 varchar(100), ip1 varchar(100), guid1 varchar(100), reason1 varchar(100), time1 varchar(100), whooo1 varchar(100), patch1 varchar(10), whounban1 varchar(90))"); 
    $db2->exec("CREATE TABLE x_ranges (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, ip_ranges varchar(100), ip_info varchar(250))");		
    $db2->exec("CREATE TABLE x_words (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, z_names varchar(200), z_words varchar(250), z_cmdlist varchar(250))");
	$db2->exec("CREATE TABLE z_counts (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, s_dat varchar(50), z_time varchar(200))");
 
    $db2->exec("INSERT INTO bans ( playername, ip, guid, reason, time, whooo, patch ) VALUES ('axaxaxaxazz23^^3#//^', '95.28.81.110', '7yfc5w87ct5nwat85cra6wt5ca6wnt5v', 'WALLHACK', '2015-12-11 14:21:18', 'LAROCCA234', '1.4');");


    $result = $db2->query('SELECT * FROM bans');
    foreach($result as $row)
    {
  
      //echo "\n ".$row['playername']." ";
    
    }
    
    $db2 = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }   
  }	
  if(!file_exists($cpath . 'ReCodMod/databases/db3.sqlite')){
	  
 try
  {
    $db3 = new PDO('sqlite:'. $cpath . 'ReCodMod/databases/db3.sqlite');

    $db3->exec("CREATE TABLE x_db_play_stats (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, s_player varchar(100), s_place int(10), s_kills int(10), s_deaths int(10), s_grenade int(10), s_skill int(10), s_ratio int(10), s_heads int(10), s_time int(10), s_lasttime varchar(50), s_city varchar(40), s_clear varchar(60), s_guid varchar(60), s_geo varchar(10), s_suicids varchar(10), s_fall varchar(10), s_melle varchar(10))"); 
 
    $db3 = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }  	
	
  }		
  
	if(!file_exists($cpath . 'ReCodMod/databases/db4.sqlite')){
	  
	  
  try
  {

    $db4 = new PDO('sqlite:'. $cpath . 'ReCodMod/databases/db4.sqlite');

    $db4->exec("CREATE TABLE x_db_players (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, x_db_name varchar(250), x_db_ip int(40), x_db_ping varchar(100), x_db_date varchar(100), x_db_warn varchar(10), x_date_reg varchar(100))"); 

	$db3->exec("CREATE TABLE x_db_play_stats (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, s_player varchar(100), s_place int(10), s_kills int(10), s_deaths int(10), s_grenade int(10), s_skill int(10), s_ratio int(10), s_heads int(10), s_time int(10), s_lasttime varchar(50), s_city varchar(40), s_clear varchar(60), s_guid varchar(60), s_geo varchar(10), s_suicids varchar(10), s_fall varchar(10), s_melle varchar(10))"); 
 	  
	  
	  
    $db4 = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }	  
	  
  }	
    if(!file_exists($cpath . 'ReCodMod/databases/db5.sqlite')){
	  
echo " Install - SQL3 Database.\n";
sleep (2);			
	
  try
  {
 
    $db5 = new PDO('sqlite:'. $cpath . 'ReCodMod/databases/db5.sqlite');

	
$i_id = '1';  
$i_name = '74th5cnjscytnchzsn7t5^4^$#$%^'; 
$i_ip = '111.222.333.444';  
$i_ping = '139';	
	
	
	if ((!empty($i_id)) && (!empty($i_name)) && (!empty($i_ip)) && (!empty($i_ping)))
	{
    
	$db5->exec("DELETE FROM playerlist");
	
	$db5->exec("CREATE TABLE playerlist (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, idnum varchar(10), name varchar(250), ip int(40), ping varchar(100))"); 

    $db5->exec("INSERT INTO playerlist ( idnum, name, ip, ping ) VALUES ('0', 'anotherjam', '111.222.333.444', '666');");	
		
	}
	 
    $db5 = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
     
		}		
		
		
echo " Install - Ok.\n";
sleep (2);
}

}
/*
if(!file_exists($cpath . 'ReCodMod/geoip_bases/MaxMD/GeoLiteCity.dat')){		
		
$zip = new ZipArchive;
$res = $zip->open($cpath . 'ReCodMod/geoip_bases/MaxMD/GeoLiteCity.zip');
if ($res === TRUE) {
  $zip->extractTo($cpath . 'ReCodMod/geoip_bases/MaxMD/');
  $zip->close();
  echo " Unzip GeoLiteCity.zip - Ok.\n";
} else {
  echo " ERROR! => Impossible unzip GeoLiteCity.zip.\n";
  sleep (100);
  exit;
}		
			
}*/
?>
