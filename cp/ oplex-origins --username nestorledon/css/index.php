<?php
/*
Ceres Control Panel

This is a control panel program for eAthena and other Athena SQL based servers
Copyright (C) 2005 by Beowulf and Dekamaster

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
an e-mail to cerescp@gmail.com
*/
extension_loaded('mysqli')
	or die ("Mysqli extension not loaded. Please verify your PHP configuration.");

is_file("./config.php")
	or die("<a href=\"./install/install.php\">Run Installation Script</a>");
	
if(extension_loaded('eaccelerator')||extension_loaded('eaccelerator_ts')){eaccelerator_cache_page(__FILE__, 600);} else { include './cache.php';}

session_start();
include_once './config.php'; // loads config variables
include_once './query.php'; // imports queries
include_once './functions.php';

$_SESSION[$CONFIG_name.'castles'] = readcastles();
$_SESSION[$CONFIG_name.'jobs'] = readjobs();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>
<?php echo htmlformat($CONFIG_name); ?> - Ceres Control Panel (SVN)
</title>
<link rel="stylesheet" type="text/css" href="./ceres.css">
<link rel="stylesheet" href="css/system.css"type="text/css" />
<link rel="stylesheet" href="css/general.css" type="text/css" />
<link rel="stylesheet" href="css/template.css" type="text/css" />
<script type="text/javascript" language="javascript" src="ceres.js"></script>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<div id="new_div"></div>
<div id="download"><a href="http://terrachaos.com/oplex/downloads/ooinstaller.exe" target="_blank" class="style1">Download Client</a></div>
<div id="container" style="width: 1000px; background-color:#000000; position:absolute;">

<div id="topcontainer">
	<div id="top"></div>
	<div id="header"><div id="load_div" style="position:absolute; top:161px; left:790px; height:30px width:25px; visibility:hidden; background-color:#000000; color:#FFFFFF"><img src="images/loading.gif" alt="Loading..."></div></div>
	<div id="title"></div>
	<div id="tcmenu"><div id="main_menu"></div><div id="sub_menu"></div></div>
	<div id="user1"></div>
	<div id="icon"></div>
	<div id="inset"></div>
</div>

<div id="midcontainer">
	<div id="component"><div id="main_div"></div></div>
	<div id="newsflash"><div id="login_div"></div></div>
    <div id="ad1"><div id="selectlang_div"></div></div>
    <div id="ad2"><div id="status_div"></div></div>
</div>

<div id="bottomcontainer">
	<div id="legals"><div id="menu_load"></div></div>
</div>


</div>
<script>
var winl = (screen.width - 1000) / 2;
document.getElementById('container').style.left = winl +'px';
</script>

<script type="text/javascript">
	load_menu();
	LINK_ajax('motd.php', 'main_div');
	LINK_ajax('login.php', 'login_div');
	login_hide(2);
	server_status()
	LINK_ajax('selectlang.php', 'selectlang_div');
</script>

</body>
</html>
