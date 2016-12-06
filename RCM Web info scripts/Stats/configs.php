<?php

/* 
How to make configs
$servers[] = '
%/..../...db2.sqlite   #bans database
%/..../...db3.sqlite   #stats database
%/..../...db4.sqlite   #players database
%^3[RECOD]xxx^7        #server name
%193.12.33.01:28960    #server ip and port
%^5                    #special color for header
%500                   #player kill limits for shown in top
%20                    #players shown limit in the page
%5';                   #cache time (minutes) freeze page 5 minutes.(for fast work and CPU save)

*/

 $top_by = 'ratio'; //ratio, kills, deaths, heads, skill, grenade, knife.


//SERVER 1
$servers[] = '
%/media/Windows/Game_Servers/RCM/COD1_1_4_RO_SQL3/ReCodMod/databases/db2.sqlite
%/media/Windows/Game_Servers/RCM/COD1_1_4_RO_SQL3/ReCodMod/databases/db3.sqlite
%/media/Windows/Game_Servers/RCM/COD1_1_4_RO_SQL3/ReCodMod/databases/db4.sqlite
%^3[CRACKED]Rifles^7|recod.ru 1.4
%193.12.33.01:28960
%^5 
%500 
%20
%5';

 

//SERVER 2
$servers[] = '
%/media/Windows/Game_Servers/RCM/COD1_1_4_AW_SQL3/ReCodMod/databases/db2.sqlite
%/media/Windows/Game_Servers/RCM/COD1_1_4_AW_SQL3/ReCodMod/databases/db3.sqlite
%/media/Windows/Game_Servers/RCM/COD1_1_4_AW_SQL3/ReCodMod/databases/db4.sqlite
%^3[RECOD]AW^7|recod.ru 1.4
%193.12.33.01:28961
%^5 
%500 
%20
%5';


//SERVER 3
$servers[] = '
%/media/Windows/Game_Servers/RCM/COD4-original/ReCodMod/databases/db2.sqlite 
%/media/Windows/Game_Servers/RCM/COD4-original/ReCodMod/databases/db3.sqlite
%/media/Windows/Game_Servers/RCM/COD4-original/ReCodMod/databases/db4.sqlite
%#RECOD.RU|Classic DM 
%193.12.33.01:28962
%^5 
%500 
%20
%5';


