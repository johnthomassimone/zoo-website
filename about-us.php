<!doctype html><html><head><meta charset="UTF-8"><title>Distract of Columbia Zoo: About Us</title>
		
<style type="text/css" media="all">@import url("/CSS & Javascript/screen.css");</style><style type="text/css" media="print">@import url("/CSS & Javascript/print.css");</style><link href="/CSS & Javascript/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css"><script src="/CSS & Javascript/SpryMenuBar.js" type="text/javascript"></script></head>
	
<script language=JavaScript> var message="Don't have the right permission."; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; }} } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false")</script><body>
	
<!-- Navagation -->
	
<div id="outerWrapper"><div id="header"></div><div id="contentWrapper"><div id="content"><ul id="MenuBar1" class="MenuBarHorizontal"><li><a href="index.php">Home</a></li><li><a href="contact.php">Contact</a></li><li><a class="MenuBarItemSubmenu">Information</a><ul><li><a href="about-us.php">About Us</a></li></ul></li><li><a class="MenuBarItemSubmenu">Animals</a><ul><li><a href="tigers.php">Tigers</a></li><li><a href="cheetahs.php">Cheetahs</a></li><li><a href="lions.php">Lions</a></li><li><a href="elephants.php">Elephants</a></li><li><a href="pandas.php">Pandas</a></li></ul></li><li></li></ul><br><h1>&nbsp;</h1><hr><br>
	
<!-- Date and Time -->
	
<?php date_default_timezone_set("America/New_York"); echo ('Today Date: '); echo date('l, F d, Y'); echo (' - Time: ');$now =new DateTime(); echo $now->format('g:i A'); echo (' (EST)');?><br><br>
	
<!-- Main Contents -->
	
<p id ="main_contents">The National Zoological Park, commonly known as the National Zoo, is one of the oldest zoos in the United States and as part<br><br><br>of the Smithsonian Institution, does not charge admission 163 acres. There are more than 400 kinds of animals. There is a fee<br><br><br>for parking in the Zoo lots. Parking Rates are $10 for the first hour and $15 for two to three hours and $20 for more than three<br><br><br>hours. If you become a member of FONZ parking is free.<br><br><br><br><strong>Hours:</strong> Friday hours 9:00 am–5:00 pm <br><br><br><strong>Address:</strong> 3001 Connecticut Ave NW, Washington, DC 20008<br><br><br><strong>Phone:</strong> (202) 633-4462<br><br><br><strong>Closest Metro Station:</strong> Woodley Park, Zoo, Adams Morgan and Cleveland Park.</p></div></div>

<!-- Copyright Information -->
	
<div id="footer"><?php $Copyright = ("©"); $Year = date("Y"); echo "$Copyright $Year John Thomas Simone All Rights Reserved.";?></div></div><script type="text/javascript">var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"/CSS & Javascript/SpryMenuBarDownHover.gif", imgRight:"/CSS & Javascript/SpryMenuBarRight.gif"});</script></body></html>