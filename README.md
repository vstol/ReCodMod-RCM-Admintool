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
+ Fun messages
+ So many another plugins....


# TO DO [RELEASE 30.DECEMBER.2016 - 20.JANUARY.2016] + new version v.4[C820]
--------------------------------------------------------------

+ Chat language translate in PM.

user can change own language translate or off !lang ru for ON !lang 1 (for messages only) for OFF !lang 0 , !lang 2 (for server messages) !lang 3 (for all)

+ New x_logs/top.html x_logs/banlist.html rework with new .css
+ All IN ONE. Old version plugins in one file. (one main cfg)
+ Cvar list, dvar list configurations.
+ First blood message.

# Updates (./ReCodMod/plugins)
--------------------------------------------------------------
+ Stats system fix. [1.December.2016]

+ !reset me - delete self from stats [12.December.2016]

+ Исправлена ошибка в поиске (badwords.cfg.php) слов на русском [17.December.2016]
+ Autoscreenshots for anticheat servers [17.December.2016]
+ New databases translate.db, sreenshots.db [17.December.2016]
+ Screenshot making for all players every 5 minutes (!xget) [17.December.2016]
+ Databases auto-backup [17.December.2016]
+ Chat logs auto-backup [17.December.2016]
+ New databases translate.db, sreenshots.db [17.December.2016]
+ Geo welcome with language tranlate in PM or public. [17.December.2016]
+ Temp ban kicker warn message update. [17.December.2016]
+ Temp ban multiplier time kicker. [17.December.2016]
+ Visit counts fix. [17.December.2016]
 
============================================================== 
#HOW INSTALL!
https://github.com/EXRecod/ReCodMod-RCM-Admintool/wiki/How-Install

==============================================================
# ALL CHAT COMMANDS!

https://github.com/EXRecod/ReCodMod-RCM-Admintool/wiki/Commands

==============================================================


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

# Support and report \\ Русский || English

Skype: larocca2012  

E-mail: la.rocca@yandex.com or la.rocca@ya.ru  

Website: http://recod.ru/forum/ 

Test help: #coP(COD1 1.1 sniper-clan.enjin.com) , KarTaL (COD1 1.5), G mAsTeR (COD4x), (COD4x nuclearwars.ru), a6pakaTa6pa (COD4x zona-ato-game.ru)
 
