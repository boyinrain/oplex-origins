<?php
/*
Ceres Control Panel

This is a control pannel program for Athena and Freya
Copyright (C) 2005 by Beowulf and Nightroad

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

To contact any of the authors about special permissions send
a mail to cerescp@gmail.com

This file was generated using install.php
*/

//sql connections
$CONFIG['rag_serv']		=	'localhost';	// SQL Ragnarok Host
$CONFIG['rag_user']		=	'root';		// SQL Ragnarok User
$CONFIG['rag_pass']		=	'opl3xor1g1ns';		// SQL Ragnarok Password
$CONFIG['rag_db']			=	'oplex_origins';		// SQL Ragnarok Database name
$CONFIG['log_db']			=	'log';		// SQL Ragnarok Log Database name

$CONFIG['cp_serv']		=	'localhost';	// SQL CP Host
$CONFIG['cp_user']		=	'root';		// SQL CP User
$CONFIG['cp_pass']		=	'opl3xor1g1ns';		// SQL CP Password
$CONFIG['cp_db']			=	'oocp';			// SQL CP Database name

$CONFIG['md5_pass']		=	'1';			// Use MD5 password (enable = 1, disable = 0)
$CONFIG['safe_pass']		=	'1';			// Force the use of a safer password with size 6 and at least 2 letter and 2 numbers (enable = 1, disable = 0)

//Admin Area
$CONFIG['cp_admin']		=	'99';			// CP admin functions
$CONFIG['gm_level']		=	'70';			// CP GM funtions
$CONFIG['gm_hide']		=	'40';			// GMs this level and above will be hidden from whoisonline.php

//WOE
// sun = sunday, mon = monday, tue = tuesday, wed = wednesday, thu = thursday, fri = friday, sun = sunday
// place week_day(start_time, end_time) and a ';' between the times the freya default woe times is set as an example
// there is no limit you can place as many as you want, no spaces are needed, but using it you can understand.
$CONFIG['woe_time']		=	'tue(2100, 2300); sat(1600, 1800); ';
$CONFIG['agit_check']		=	'0';			// This WILL NOT WORK unless you installed the npc script AND you updated your ragsrvinfo table, read the installation notes for more info.

//server name, rates
$CONFIG['name']			=	'Oplex Origins';	// name of the server
$CONFIG['rate']			=	'1/1/1';		// rates of the server
date_default_timezone_set('America/Chicago');		// game server Timezone (useful if your webserver's timezone is different than game server).
$CONFIG['dynamic_info']		=	'0';			// Use info (rates) from the server itself?
$CONFIG['dynamic_name']		=	'Oplex Origins';	// The name of the server in ragsrvinfo's server name column (Used for dynamic info)
$CONFIG['show_rates']		=	'0';			// Show rates below server status?

//map,char,login servers settings
$CONFIG['accip']			=	'localhost';	// Account/Login Server IP
$CONFIG['accport']		=	'6900';		// Account/Login Server Port
$CONFIG['charip']			=	'localhost';	// Char Server IP
$CONFIG['charport']		=	'6121';		// Char Server Port
$CONFIG['mapip']			=	'localhost';	// Zone/Map Server IP
$CONFIG['mapport']		=	'5121';		// Zone/Map Server Port

//default language
$CONFIG['language']		=	'English';		// default language (remember to check if the translation exist before set)

//cp features
$CONFIG['disable_account']	=	'0';			// disable the account creation disable = 1, enable = 0
$CONFIG['email_registration']	=	'0'; //On = 1, off = 2. This requires a player to confirm their email address 
$CONFIG['auth_image']		=	'0';			// enable the verification code image, to check if it's a real person using the cp, instead of a bot (brute-force atack) - Recommended, but requires gd library (enable = 1 disable = 0)
$CONFIG['max_accounts']		=	'0';			// Max accounts allowed to be in the DB (0 = disabled)
$CONFIG['password_recover']	=	'1';			// password recover enable = 1, disable = 0
$CONFIG['reset_enable']		=	'1';			// reset position enable = 1, disable = 0
$CONFIG['reset_cost']		=	'0';		// reset position cost, disable cost = 0
$CONFIG['money_transfer']	=	'0';			// money transfer enable = 1, disable = 0
$CONFIG['money_cost']		=	'0';			// money transfer cost (100 = 1%), disable cost = 0
$CONFIG['set_slot']		=	'0';			// change char slot enable = 1, disable = 0
$CONFIG['reset_look']		=	'1';			// reset char equips and colors with error enable = 1, disable = 0
$CONFIG['marry_enable']		=	'0';			// enable marriage view and divorce
$CONFIG['donations'] = '1'; //On or off enable=1, off=0
$CONFIG['vote4points'] = '0'; //On or off enable=1, off=0
$CONFIG['changesex'] = '1'; //On or off enable=1, off=0
$CONFIG['changename'] = '1'; //On or off enable=1, off=0
$CONFIG['survivalladder'] = '1'; //On or off enable=1, off=0
$CONFIG['prison_map']		=	'op_tut01';		// Name of the map that is used as your jail (mapname.gat)

//Donation Configuration
$CONFIG['donates'] = '1'; //Enable=1 Disable=0
$CONFIG['domain'] = 'http://oplexorigins.com/'; //the domain the websites on, i.e: http://testro.com
$CONFIG['paypal_email'] = 'Xerosigma@hotmail.com'; //your paypal email login, i.e.: test@gmail.com

//About Information
$CONFIG['classlist_show']	=	'0';			// Show the class list on about.php? (disable = 0, enable = 1)

//Mail
$CONFIG['smtp_server']		=	'localhost';	// the smtp server, the cp will use to send mails
$CONFIG['smtp_port']		=	'25';			// the smtp server port
$CONFIG['smtp_mail']		=	'gamemaster@youremail.com';		// the email of the admin
$CONFIG['smtp_username']	=	'';			// the username of the smtp server
$CONFIG['smtp_password']	=	'';			// the password of the smtp server


//DO NOT MESS WITH THIS
extract($CONFIG, EXTR_PREFIX_ALL, "CONFIG");
extract($_GET, EXTR_PREFIX_ALL, "GET");
extract($_POST, EXTR_PREFIX_ALL, "POST");
extract($_SERVER, EXTR_PREFIX_ALL, "SERVER");
error_reporting(0);
?>
