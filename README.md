# ReCodMod-[RCM]-Admintool

 Admintool for (COD1, COD1:UO, COD2, COD4 & [COD4X 1.8], COD5 all patches)
(65 and more chat commands in one)

New final version RCM[V.3.x.x] working in all GNU/linux systems and Windows with supporting (PHP 5.2 <= 5.3.0, PHP 7)

This version not compactible for x2.2 version update, compactible only |RCM/ReCodMod/databases/| files(ban database, and another sql bases)

#What it has!
+ Full administrator server control with chat commands.
+ Report and support commands system, players can sent messages from game chat to Admin @mail.
 Support gmail, yahoo, yandex, and another email services for !report and !support
+ !rules - server rules list.
+ !date or !time - your date and time , time zone display
+ !kickall - kick all players
+ !logout - out from your group to user group.
+ !banall - ban all players
+ !lastban - dispplay last banned player
+ !login -password-  or !on -password-
+ Manual ip adreses / guids inserting for admins control. in cfg/_groups.php
+ Easy install, install help messages.
+ Changed message rotation
+ Full cod4x 1.7b and 1.8 admincontrol support.
+ !getss - all players screenshots
+ Ip ban tool (Example: 111.111.111.111, or range EXAMPLE cfg/bans.cfg.php
+ Ban tool with ban reasons, temp ban and more!
+ Banlist !banlist
+ UNban list!
+ Messages rotation plugin with server statistics!
+ FULL Admin control with !rc command (!rc = /rcon)
+ Make players screnshots with !getss (Anticheat server or cod4x support)
+ Geo welcome messages with player city.
+ Anonymous ip auto kicker
+ Blaclisted proxy ip adress kick
+ Bad nicknames auto kicker
+ Bad words auto kicker
+ Chat flood auto kicker
+ Fast SQLite3 database
+ Players MULTI STATS SYSTEM: Kills, Deaths, Ratio, Rank, Headshots, Suicides Skill and top places
+ Permissions 12 group system: Admin, Vip, Clan Member, Member, Noob...and more (!status chat command)
+ Log system, automatic logfilepath with chat, voting, player cheat alerts, chat flood logs and help chat logs.
+ Server system info getting !sysinfo
+ web plugin, stats, server info, chat.
+ Mapvote
+ Kick vote
+ Ban vote
+ Fun messages
+ So many another plugins....


# In new version - new commands and updates!
+ Ftp connection + send logs and screenshots to another server or website. !ftp log - sent logs !ftp getss - sent screenshots
+ !rangelist or !rlist - banned ip ranges
+ !refresh banlist , !refresh top
+ !lastban
+ !reload
+ !nextmap
+ !elist
+ language pack in cfg folder cfg/_settings.php $language = 'en';  
+ !getss - all plagers screenshots, !getss id# - for one player
+ !report !support - working with all email services and with multi email support in cfg/_groups.php
+ Messages rotation with another servers information

#HOW INSTALL!

# STEP  (only for cod1 1.1)

We need to make changes in cod1 1.1 bugged version game_mp_x86.dll (windows) and game.mp.i386.so (linux). In another versions non changes.

In fact changed : to ;

Find line say: %s: %s change to say; %s; %s

Find line sayteam: %s: %s change to sayteam; %s; %s

or download it (need register) from http://recod.ru/forum/viewtopic.php?f=35&t=90&p=712#p712

and replace in your server

 
#HOW UPDATE! 

Download last day update, unarchive .zip and replace your old files with new files! (example: RCM Update [June 27, 2016].zip)
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
==============================================================
#HOW INSTALL IN WINDOWS!

For windows need download https://github.com/EXRecod/ReCodMod-RCM-Admintool/archive/master.zip and unarchive this archive, and than
unarchive RCM-WIN_php.zip from ReCodMod-RCM-Admintool-master unarchived folder. From RCM-WIN_php.zip archive add RCM files (File go.bat and php folder) in main RCM folder.

#Need edit _connection.php for RCM AdminMod working
//Edit first this file for working

Edit this file from cfg/_connection.php

Example for windows: $mplogfile = "c:\servers\cod1\cod1.1\main\games_mp.log"

//Another two you can edit later

all_settings.php and all_groups_control.php

# All installed. Lets starting, all messages from your game server you see in RCM terminal.
Press this file ->  go.bat

--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
==============================================================

HOW INSTALL IN GNU/LINUX (DEBIAN, UBUNTU..) WITH PHP5.4.x or PHP7.x SUPPORT!
==============================================================
#Install needed php7.0 or 5 and up and modules for it( if you install php5 replace in command line php7.0 to php5)

sudo apt-add-repository ppa:ondrej/php

sudo apt-get update

sudo apt-get install php7.0 

sudo apt-get install php7.0-sqlite

sudo apt-get install php7.0-sqlite3

sudo apt-get install php7.0-curl

sudo apt-get install php7.0-mbstring

# Open temp folder
cd /tmp

# Download Admin Mod from GitHub
sudo wget https://github.com/EXRecod/ReCodMod-RCM-Admintool/archive/master.zip

# Make folders
sudo mkdir /opt/rcm/myserver

# Install zip archivator
sudo apt-get install unzip

#Unpack to folder
sudo unzip ReCodMod-RCM-Admintool-master.zip -d /tmp/

#go to unarchived folder
cd /tmp/ReCodMod-RCM-Admintool-master/

#rename RCM folder to your (myserver) name without symbols - example: NexonRifles
sudo mv RCM myserver 

#Check your renamed folder, if all ok, you can see README.md and yOur renamed folder
ls

# myserver change to your, when you changed it before
sudo cp -a myserver  /opt/rcm/

# go to myserver, when you changed it before
cd /opt/rcm/myserver/cfg/

#Need edit all_connection.php for RCM AdminMod working
//Edit first this file for working

sudo nano _connection.php

//Another two you can edit later

sudo nano _settings.php

sudo nano _groups.php

# go to myserver, when you changed it before
cd /opt/rcm/myserver/

# All installed. Lets starting, all messages from your game server you see in RCM terminal. In 
sudo sh go.sh

--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
# For RCM starting in next time, use this steps!
# 1| go to myserver
cd /opt/rcm/myserver/
# 2| Start go.sh
sudo sh go.sh

--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
==============================================================
ALL CHAT COMMANDS!
=================================================================================================================
https://github.com/EXRecod/ReCodMod-RCM-Admintool/wiki/Commands




# HIDE MESSAGES Support CoDaM CodCommands 2.3 [cod1 1.1

Open __CoDaM_CodCommands.pk3 and in file callback.gsc 

+ find

self playerMsg( level.cocoColor + "Command not found: ^7" + chatcmd[ 0 ] + " " + combineChatCommand( chatcmd, " " ));

+ add after that line - this 2 lines

printconsole("say;" + self.name+";"+chatcmd[ 0 ]+" "+ combineChatCommand( chatcmd, " " )+"\n");

logPrint("say; " + self.name + "; "+chatcmd[ 0 ]+" "+ combineChatCommand( chatcmd, " " )+"\n");

# HIDE MESSAGES b3hide FOR Call OF Duty 4 X 1.8 - Modern Warfare



+ download -> https://bitbucket.org/msgaming/cod4x_b3hide/downloads

+ b3hide.so place in  ->  call of duty 4/plugins/

+ in main server configuration   .cfg

loadplugin "b3hide"

b3Hide "1"

b3Prefix "!"

b3HideLvl "0" 


# SPECIAL INFO

In x_logs folder after install and few days work, you can find chat, stats.... logs in html format, you can use it for website.

# Support and report

Skype: larocca2012 

E-mail: la.rocca@yandex.com or la.rocca@ya.ru

Website: http://recod.ru/forum/ 

Test help: #coP (COD1 1.1) , KarTaL (COD1 1.5), G mAsTeR (COD4 x)
 
