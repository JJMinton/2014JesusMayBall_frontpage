<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width" />
<title>Jesus May Ball 2014</title>
<link href="./index.css" rel="stylesheet" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="jquery.mousewheel.js"></script>
	<script src="parallax.js" type="text/javascript"></script>
</head>

<body onload="init()">
	<div id="splash" class="bodydiv" style="visibility: visible;">
		<div id="loading">
			<img id="splashImage" src="media/splash.gif" class="logo" alt="Loading..." />
			<h1 class="splash">Loading...</h1>
		</div>
	</div>

	<div id="mobile" class="mobileBody">
		<div id="mobileBody">
			<img id="mobileLogo" src="media/logo.png" class="logo" alt="Loading..." />
			<h1 class="mobileTitle">Jesus Mayball 2014</h1>
				<p>Tickets will be available for Jesus College students from the 21st of February at 8am, for a week before general release on the 28th of February at 9pm.</p>
					<h4>Standard</h4>
					<p class="snug">- £127 + £2 -</p>
					<!--<p class="snug">(SOLD OUT)</p>-->
					<p class="snug">Enjoy unlimited food drinks and entertainment!</p>
					<h4>Priority</h4>
					<p class="snug">- £143 + £2 -</p>
					<!--<p class="snug">(SOLD OUT)</p>-->
					<p class="snug">Take advantage of early entry and jump the queue!</p>
					<h4>Dining</h4>
					<p class="snug">- £164 + £2 -</p>
					<!--<p class="snug">(SOLD OUT)</p>-->
					<p class="snug">Indulge in a champagne reception and a three course meal in Jesus Hall!</p>
					<p>Book your ticket <a href="tickets">here</a>.</p>
				<br/>
				<p>Staffing applications can be found <a href="staff">here</a>.</p>
				<br/>
				<p>Ents applications can be found <a href="ents">here</a>.</p>
				<br/><br/>
				<p>Please visit our desktop site for more information.</p>
			<h1 class=""></h1>
		</div>
	</div>
	
	<div id="small" class="smallBody">
		<div id="smallBody">
			<img id="smallLogo" src="media/logo.png" class="logo" alt="Jesus Mayball 2014" />
			
			<h1 class="smallTitle">Tickets</h1>
				<p>Tickets will be available for Jesus College students from the 21st of February at 8am, for a week before general release on the 28th of February at 9pm.</p>
				<h4>Standard</h4>
				<p class="snug">- £127 + £2 -</p>
				<!--<p class="snug">(SOLD OUT)</p>-->
				<p class="snug">Enjoy unlimited food drinks and entertainment!</p>
				<h4>Priority</h4>
				<p class="snug">- £143 + £2 -</p>
				<!--<p class="snug">(SOLD OUT)</p>-->
				<p class="snug">Take advantage of early entry and jump the queue!</p>
				<h4>Dining</h4>
				<p class="snug">- £164 + £2 -</p>
				<!--<p class="snug">(SOLD OUT)</p>-->
				<p class="snug">Indulge in a champagne reception and a three course meal in Jesus Hall!</p>
				<br/>
				<p>All tickets are sold with an optional £2 charitable donation.</p>
				<p>Please see our <a id="ticketLinkToCharity" href="">charities page</a> for more information.</p>
				<p>Each student may buy up to five tickets (i.e. themselves and four guests).</p>
				<p>Reserve tickets now and pay via bank transfer.</p>
			
			<h1 class="smallTitle">Charities</h1>
				Each year Mayball goers make a small donation with each ticket purchase. These procceeds go to a selection of charities. This year Jesus College Mayball is supporting Jimmy's Cambridge and Afrinspire.

				<a href="http://www.jimmyscambridge.org.uk" target="_blank"><h2>Jimmy's Cambridge</h2></a>
				For more information please visit their website <a href="www.jimmyscambridge.org.uk" target="_blank">here</a>.

				<a href="http://www.afrinspire.org.uk" target="_blank"><h2>Afrinspire</h2></a>
				For more information please visit their website <a href="www.afrinspire.org.uk" target="_blank">here</a>.
				
			<h1 class="smallTitle">Staffing</h1>
				<p>Jesus May Ball Committee is looking for enthusiastic, hard working students to make the 16th June a spectacular night.</p>
				<p>Apply with a group of friends and we will try and ensure that you are put together. If you're interested, online applications for all staffing posts are now open!</p>
				<!--<p>Hurry, the application deadline is Sunday 24th February.</p>-->
				<!--<p>[Sorry, Applications have not yet opened. Please come back soon.]</p>
				<p>[Sorry, Applications are now closed]</p>-->
				<div class="header-link"><h2><a href="http://www.jesusmayball.com/staff">Apply here</a></h2></div>
				
			<h1 class="smallTitle">Enterntainment</h1>
				<p>The ents team will be holding auditions on the 2nd and 9th of March so sign up below.</p>
				<p>If you cannot attend any of the timetabled audition slots, you may still submit your act for consideration.</p>
				<!--<p>[Sorry, auditions are now closed.]</p>-->
				<div class="header-link"><h2><a href="http://www.jesusmayball.com/ents">Register for an audition here.</a></h2></div>
		</div>
	</div>	
	
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
function treeProperties($tree, $meanLeft, $varLeft, $meanWidth, $varWidth, $total){
	$images = array('media//tree01.png','media//tree02.png','media//tree03.png','media//tree04.png','media//tree05.png');
	$left = rand($meanLeft - $varLeft/2, $meanLeft + $varLeft/2);
	$width = rand($meanWidth - $varWidth/2, $meanWidth + $varWidth/2);
	$right = $total - $left - $width;
	echo '<div class="' . $tree . '" style="margin-left:'.$left.'px; width:'.$width.'px; margin-right:'.$right.'px;"><img src="media/tree0'.rand(1,7).'.png" class="stretch" alt="" /></div>';
}

function groveOfTrees($tree, $width, $adjustLeft, $adjustRight, $numTrees, $treeWidth, $treeVar, $margVar){
	if($numTrees < 2){
		treeProperties($tree, $adjustLeft + ($width-$adjustLeft-$adjustRight)/2, $margVar, $treeWidth, $treeVar, $width);
	}else{
		$total = ($width - $adjustLeft - $adjustRight)/($numTrees -1);
		$meanLeft = $total/2 - ($treeWidth)/2;
		treeProperties($tree, $adjustLeft, $margVar, $treeWidth, $treeVar, $total/2 + $adjustLeft);
		for($i = 2; $i < $numTrees; $i++){
			treeProperties($tree, $meanLeft, $margVar, $treeWidth, $treeVar, $total);
		}
		treeProperties($tree, $meanLeft, $margVar, $treeWidth, $treeVar, $total/2 + $adjustRight);
	}
}
?>
<div id="site" class="bodydiv" style="visibility: hidden;">
	<div id="treep1l1l" class="screen screenlayer1">
		<?php groveOfTrees("atree", 2400, 40, 350, 3, 80, 15, 300); ?>
		<?php groveOfTrees("atree", 6280, 1020, 350, 7, 80, 15, 300); ?>
		<?php groveOfTrees("atree", 6280, 1020, 350, 7, 80, 15, 300); ?>
		<?php groveOfTrees("atree", 6280, 1020, 350, 6, 80, 15, 300); ?>
		<?php groveOfTrees("atree", 6280, 1020, 350, 6, 80, 15, 300); ?>
		<?php groveOfTrees("atree", 6280, 1020, 350, 7, 80, 15, 300); ?>
		<?php groveOfTrees("atree", 2495, 1020, 40, 3, 80, 15, 300); ?>
	</div><div id="treep1l2l" class="screen screenlayer2">
		<?php groveOfTrees("atree", 3600, 40, 450, 1, 120, 23, 400); ?>
		<?php groveOfTrees("atree", 9420, 1120, 450, 3, 120, 23, 400); ?>
		<?php groveOfTrees("atree", 9420, 1120, 450, 2, 120, 23, 400); ?>
		<?php groveOfTrees("atree", 9420, 1120, 450, 2, 120, 23, 400); ?>
		<?php groveOfTrees("atree", 9420, 1120, 450, 3, 120, 23, 400); ?>
		<?php groveOfTrees("atree", 9420, 1120, 450, 2, 120, 23, 400); ?>
		<?php groveOfTrees("atree", 3743, 1120, 40, 1, 120, 23, 400); ?>
	</div><div id="treep1l3l" class="screen screenlayer3">
		<?php //groveOfTrees("atree", 7800, 40, 100, 6, 80, 15, 0); ?>
		<?php groveOfTrees("atree", 20410, 1370, 600, 2, 170, 100, 800); ?>
		<?php groveOfTrees("atree", 20410, 1370, 600, 1, 170, 100, 800); ?>
		<?php groveOfTrees("atree", 20410, 1370, 600, 1, 170, 100, 800); ?>
		<?php groveOfTrees("atree", 20410, 1370, 600, 2, 170, 100, 800); ?>
		<?php groveOfTrees("atree", 20410, 1370, 600, 1, 170, 100, 800); ?>
		<?php groveOfTrees("atree", 8109, 1370, 40, 1, 170, 100, 800); ?>
	</div>
		
	<div id="background" class="screen">
	</div>
	
	<div id="pages" class="strip">
		<div class="page" style="background: none; box-shadow: none; margin-left: 595px;">
			<div class="logo">
				<img src="media/logo.png" class="logo" alt="" />
			</div>
		</div>	

		<div class="page">
			<h1 class="title">Tickets</h1>
			<p>Tickets will be available for Jesus College students from the 21st of February at 8am, for a week before general release on the 28th of February at 9pm.</p>

			<div class="columns">
				<div id="left" class="three-column">
					<h4>Standard</h4>
					<p class="snug">- £127 + £2 -</p>
					<!--<p class="snug">(SOLD OUT)</p>-->
					<p class="snug">Enjoy unlimited food drinks and entertainment!</p>
				</div>
				<div id="center" class="three-column">
					<h4>Priority</h4>
					<p class="snug">- £143 + £2 -</p>
					<!--<p class="snug">(SOLD OUT)</p>-->
					<p class="snug">Take advantage of early entry and jump the queue!</p>
				</div>
				<div id="right" class="three-column">
					<h4>Dining</h4>
					<p class="snug">- £164 + £2 -</p>
					<!--<p class="snug">(SOLD OUT)</p>-->
					<p class="snug">Indulge in a champagne reception and a three course meal in Jesus Hall!</p>
				</div>
			</div>
			<br/>
			<br/>
			<br/>
			<p>All tickets are sold with an optional £2 charitable donation.</p>
			<p>Please see our <a id="ticketLinkToCharity" href="">charities page</a> for more information.</p>
			<p>Each student may buy up to five tickets (i.e. themselves and four guests).</p>
			<p>Reserve tickets now and pay via bank transfer.</p>
			<!--<p>* Sorry, all tickets are now sold out. If you are still interested, please add your name to the waiting list. The waiting list is only open to Jesuans until general release, when it is opened to everyone.</p>
			<p>[<a href="tickets/reserve.php">Waiting List</a>]</p>-->
			
			<div id="header-link"><h2><a>Reserve your tickets here</a></h2></div>
		</div>

		<div class="page">
			<h1 class="title">Charites</h1>
			Each year Mayball goers make a small donation with each ticket purchase. These procceeds go to a selection of charities. This year Jesus College Mayball is supporting Jimmy's Cambridge and Afrinspire.
			<div id="columns">
			<div id="left" class="two-column">
			<div class="charity-logo"><a href="http://www.jimmyscambridge.org.uk" target="_blank"><h2>Jimmy's Cambridge</h2><!--<img src="media/jimmys.png">--></a></div>
			Open 24 hours a day, 365 days a year, Jimmy’s is the only emergency accommodation provider in
			 Cambridge. Jimmy's offers a warm, welcoming environment to 20 men and women (and two dogs) who
			  would otherwise be forced to sleep rough or in inappropriate or inadequate conditions. Since
			   1995, Jimmy's has worked with over 6,000 different people.
			<br/><br/>
			For more information please visit their website <a href="www.jimmyscambridge.org.uk" target="_blank">here</a>.
			</div>
			<div id="right" class="two-column">
			<div class="charity-logo"><a href="http://www.afrinspire.org.uk" target="_blank"><h2>Afrinspire</h2><!--<img src="media/afrinspire.png">--></a></div>
			   Afrinspire supports indigenous development initiatives across East Africa through initiatives
			    ranging from the provision of education materials to financing the construction of water tanks.
			Your donations, via the May Ball Charity Fund initiative, will contribute to a new grass-roots project to
			 facilitate the building and development of a number of classrooms in a new primary school in Uganda.

			<br/><br/>
			For more information please visit their website <a href="www.afrinspire.org.uk" target="_blank">here</a>.
			</div>
			</div>
			
		</div>		

		<div class="page">
			<h1 class="title">Staffing</h1>
				<p>Want to make money in May Week and be part of a great event, working in a team? </p>
				<p>Jesus May Ball Committee is looking for enthusiastic, hard working students to make the 16th June a spectacular night.</p>
				<p>Workers will be employed in a variety of areas including food, drinks and entertainments.</p>
				<p>We don't operate a &lsquo;half-on, half-off&rsquo; employment policy like many May Balls so you have the chance to earn around &pound;65 for a night's work.</p>
				<h4>Applications</h4>
				<p>Apply with a group of friends and we will try and ensure that you are put together. If you're interested, online applications for all staffing posts are now open!</p>
				<!--<p>Hurry, the application deadline is Sunday 24th February.</p>-->
				<!--<p>[Sorry, Applications have not yet opened. Please come back soon.]</p>
				<p>[Sorry, Applications are now closed]</p>-->
			<div class="header-link"><h2><a href="http://www.jesusmayball.com/staff">Apply here</a></h2></div>
		</div>

		<div class="page">
				<h1 class="title">Entertainment Auditions</h1>
				<p>The ents team will be holding auditions on the 2nd and 9th of March so sign up below.</p>
				<p>If you cannot attend any of the timetabled audition slots, you may still submit your act for consideration.</p>
				<!--<p>[Sorry, auditions are now closed.]</p>-->
				<div class="header-link"><h2><a href="http://www.jesusmayball.com/ents">Register for an audition here.</a></h2></div>
		</div>
		
		<div class="page" style="margin-right: 595px;">
			<h1 class="title">2014 Committee</h1>
			<div id="left" class="three-column">
				<h4><a title="Email President" href="mailto:mayball-president@jesus.cam.ac.uk" >President</a></h4>
				<p class="snug">Emma Findlay</p>
				<p class="snug">Harriet Rudd-Jones</p>
				<h4><a title="Email Food" href="mailto:mayball-food@jesus.cam.ac.uk" >Food</a></h4>
				<p class="snug">Kathryn Dixon</p>
				<h4><a title="Email Drinks" href="mailto:mayball-drink@jesus.cam.ac.uk" >Drinks</a></h4>
				<p class="snug">Holly Newton</p>
				<h4><a title="Email Security" href="mailto:mayball-security@jesus.cam.ac.uk" >Security</a></h4>
				<p class="snug">Christie Bellotti</p>
				<h4><a title="Email Buildings" href="mailto:mayball-buildings@jesus.cam.ac.uk" >Buildings</a></h4>
				<p class="snug">Jamie McCann</p>
				<h4><a title="Email Tech" href="mailto:mayball-technical@jesus.cam.ac.uk" >Tech</a></h4>
				<p class="snug">George Bryan</p>
			</div>
			<div id="center" class="three-column">
				<h4><a title="Email Treasurer" href="mailto:mayball-treasurer@jesus.cam.ac.uk" >Treasurer</a></h4>
				<p class="snug">Michael Belben</p>
				<h4><a title="Email Publicity" href="mailto:mayball-publicity@jesus.cam.ac.uk" >Publicity</a></h4>
				<p class="snug">Ed Mellor</p>
				<h4><a title="Email Ents" href="mailto:mayball-ents@jesus.cam.ac.uk,mayball-main-ents@jesus.cam.ac.uk" >Main Ents</a></h4>
				<p class="snug">Guy Pearson</p>
				<h4><a title="Email Ents" href="mailto:mayball-ents@jesus.cam.ac.uk,mayball-student-ents@jesus.cam.ac.uk" >Student Ents</a></h4>
				<p class="snug">Joe Baxter</p>
				<h4><a title="Email Ents" href="mailto:mayball-ents@jesus.cam.ac.uk,mayball-nonmusic-ents@jesus.cam.ac.uk" >Non-Music Ents</a></h4>
				<p class="snug">Rachel Rees-Middleton</p>
				<h4><a title="Email Staffing" href="mailto:mayball-staffing@jesus.cam.ac.uk" >Staffing</a></h4>
				<p class="snug">Caroline Sharp</p>
				<p class="snug">Grace Healy</p>
			</div>
			<div id="right" class="three-column">
					<h4><a title="Email Secretary" href="mailto:mayball-secretary@jesus.cam.ac.uk" >Secretary</a></h4>
					<p class="snug">Alessandra Bittante</p>
					<h4><a title="Email Head of Design" href="mailto:mayball-design@jesus.cam.ac.uk" >Head of Design</a></h4>
					<p class="snug">Rian Matanky-Becker</p>
					<h4><a title="Email Design Team" href="mailto:mayball-designteam@jesus.cam.ac.uk" >Design Team</a></h4>
					<p class="snug">Danielle Holmes</p>
					<p class="snug">Jane Baxter</p>
					<p class="snug">Amy Chen-Cooper</p>
					<p class="snug">Freddie Hampel</p>
					<h4><a title="Email Ticketing" href="mailto:mayball-tickets@jesus.cam.ac.uk" >Ticketing</a></h4>
					<p class="snug">Stephen Joseph</p>
					<h4><a title="Email Technical Ticketing and Webmaster" href="mailto:" >Webmaster</a></h4>
					<p class="snug">Jeremy Minton</p>
			</div>
		</div>
	</div>
	
		<div id="footer_wrapper">
			<div id="floating-menu">			
				<a class="floating-menu-link" id="logo-link" href="">Home</a>
				<a class="floating-menu-link" id="tickets-link" href="">Tickets</a>
				<a class="floating-menu-link" id="charity-link" href="">Charities</a>
				<a class="floating-menu-link" id="staffing-link" href="">Staffing</a>
				<a class="floating-menu-link" id="entertainment-link" href="">Entertainment</a>		
				<a class="floating-menu-link" id="committee-link" href="">Committee</a>
			</div>
		</div>
	</div>
	<script>

	var st=(document.all);
	var spl=(document.all);
	var ns4=document.layers;
	var ns6=document.getElementById&&!document.all;
	var ie4=document.all;
	if (ns4){
		st=document.site;
		spl=document.splash
	}else if (ns6){
		st=document.getElementById("site").style;
		spl=document.getElementById("splash").style;
	}else if (ie4){
		st=document.all.site.style;
		spl=document.all.splash.style;
	}
	
	function init(){
		
		setTimeout(function(){
			if(ns4){st.visibility="visible";
				//spl.visibility="hidden";}
				$("#splash").fadeOut();}
			else if (ns6||ie4){st.visibility="visible";
				//spl.visibility="hidden";}
				$("#splash").fadeOut();}
			
			Ready();
			
			updateTrees();
			$('html, body').scrollLeft(pageInfo[2].start);
			pageTarget = (pageInfo[0].finish + pageInfo[0].start - $(window).width())/2;
			scrollToPage(1);//$('html, body').animate({scrollLeft: pageTarget}, 2500);
		}, 3000);
	}
	</script>
	
</body>
</html>
