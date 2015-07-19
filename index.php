<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Triantafyllos Paschaleris - Personal Website</title>
	<meta name="description" content="Personal website of Paschaleris Triantafyllos">
	<meta name="author" content="Paschaleris Triantafyllos">
	<meta name="keywords" content="web, web delevop, web design, Computer Software Engineer, Systems Analyst, create website, php, wordpress, drupal, joomla, python, django, C#, javascript, triantafyllos, paschaleris, triantafyllos paschaleris, Τριαντάφυλλος, Πασχαλέρης, Τριαντάφυλλος Πασχαλέρης, mourgolikos, mourg0s, e-psyxologos, fytoriaelias, elladosynoron, greek" />

	<meta property="og:title" content="Paschaleris Triantafyllos - Personal Website"/>
	<meta property="og:image" content="http://paschaleris.gr/_images/logo.png"/>
	<meta property="og:url" content="http://paschaleris.gr"/>
	<meta property="og:site_name" content="Paschaleris Triantafyllos - Personal Website"/>
	<meta property="og:type" content="blog"/>
	<meta property="fb:admins" content="100000190061517"/>

	<link rel="shortcut icon" type="image/x-icon" href="_images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=sans-serif">
	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<link rel="publisher" href="https://plus.google.com/115854784556081015540/posts"/>
	<link rel="author" href="https://plus.google.com/115854784556081015540/posts"/>

<?php
function statsCalc( $interval, $default="0", $measure="", $dot=false) {
	// $default is the desired value, in case date() doesn't work
	// $dot is if we want a dot "." at the output
	// $measure is the type of measurement of the output,  e.g. "K" for thousands, "L" litres, "H" for hours
	// $interval is Multimedia=24, LinesOfCode=34, Sandwiches=26, Drinks=28, GamesTV=69, Moocs=22, Lazy=246
 	// 1.391.506.876 the strtotime(date()) value will be about that large
 	//105.943 seconds is about 1.22688 days
 	//1.214.082.000 unix timestamp for 22/6/2008
	$timeint = floor((strtotime(date("Y-m-d H:i:s"))-1214082000)/(105941*$interval)); //the the number of seconds since January 1 1970 00:00:00 UTC

	// $timeint is wrong either because of unreached date() or negative value so we return the $default value
	if (is_null($timeint) or $timeint<0) {
		echo $default.$measure;
		return;
	}

	if ($dot){
		echo floor($timeint/10).".".($timeint%10).$measure; //rounding down for separating the last digit with the dot "."
	}else{
		echo $timeint.$measure;
	}
	
} ?>
<!-- php code UP here -->


	<!--[if !IE 7]>
	<style type="text/css">
		#wrap {display:table;height:100%}
	</style>
	<![endif]-->
</head>
<body>
<div id="wrap">
	<div id="content">
		<nav id="menu">
			<ul id="menu_list">
				<?php//<li id="menu_item1"><div><a class="button" href="/shortlinks"><em>My goodies!</em></a></div></li>?>
				<li id="menu_item2"><div><a class="button" href="#portfolio">Portfolio</a></div></li>
				<li id="menu_item3"><div><a class="button" href="#contact">Contact</a></div></li>
			</ul>
		</nav>

		<aside id="social-share">
		<p>Share my page on:</p><!--Για pop-up παράθυρο:  onclick="javascript:window.open(this.href,'','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=320,width=320');return false;"  ...και αφαιρώ το  target="_blank"-->
			<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fpaschaleris.gr" target="_blank">Facebook</a><br>
			<a href="https://plus.google.com/share?url=http%3A%2F%2Fpaschaleris.gr" target="_blank">Google+</a><br>
			<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fpaschaleris.gr&amp;title=Paschaleris%20Triantafyllos%20Website&amp;summary=Personal%20Website%20of%20Triantafyllos%20Paschaleris%20%20Computer%20Software%20Engineer%20and%20Systems%20Analyst%20&amp;source=http%3A%2F%2Fgr.linkedin.com%2Fin%2Fmourgolikos" target="_blank">LinkedIn</a>
  		</aside>

		<header id="title">
			<h1>Hi! I am Triantafyllos Paschaleris</h1>
			<h3>and i'm passionate with those little bytes running through our programs!<br><br><em>I'm still working on my website, but you can find some info & contact stuff below.</em></h3>			       
		</header>
		<br>
		<section id="info">
			<b>...well, who am i and what do i do on this planet?</b><br><br>
			<br>
			I spend most of my time, or i wish i spent most of my time in playing with blocks of code and analyzing how they are supposed to work.
			Rest of my time is consumed learning new technologies and tricks around Information Technology and Computers in general.<br>
			Being a Lifelong learner and a friendly Geek is... my Honor!<br><br>
			It's a common task in my daily life to help people around me understanding and using the Computer Science with the best possible way.
		</section>
		<br>
		<section id="portfolio">
			<h4>Some stuff i'm working on!</h4>
			<ul id="port_list">
				<li id="port_item1"><div><a href="http://e-psyxologos.gr" target="_blank"><img src="_images/SSFromWork/e-psyxologos_190.png" alt="e-psyxologos.gr" title="Ψυχολόγος Ελ. Ελευθέριος e-psyxologos.gr Website"></a></div></li>
				<li id="port_item2"><div><a href="http://fytoriaelias.gr" target="_blank"><img src="_images/SSFromWork/fytoriaelias_190.png" alt="fytoriaelias.gr Website" title="Φυτώρια Ελιάς Λυγερά fytoriaelias.gr Website"></a></div></li>
				<li id="port_item3"><div><a href="http://elladosynoron.gr" target="_blank"><img src="_images/SSFromWork/elladosynoron_190.png" alt="elladosynoron.gr" title="Ελλάδος Σύνορον elladosynoron.gr Website"></a></div></li>
			</ul>
		</section>
		<br>
		<section id="achievements">
			<h4>My Life Records So Far</h4>
			<ul id="ach_list">
					<li id="ach_item1" title="...feeling artistic"><div><span><?php statsCalc(20,"109"); ?></span> Multimedia Files Created</div></li>
					<li id="ach_item2" title="...keyboard abuse"><div><span><?php statsCalc(23,"5.2","K",true); ?></span> Lines Of Code Written</div></li>
					<li id="ach_item3" title="...yummy!"><div><span><?php statsCalc(19,"109"); ?></span> Sandwiches Tasted</div></li>
					<li id="ach_item4" title="...another cold drink? Yay!"><div><span><?php statsCalc(12,"81","L"); ?></span> Coffee & Beer Enjoyed</div></li>
					<li id="ach_item5" title="...relaxing time!"><div><span><?php statsCalc(63,"26"); ?></span> Games Played & TV Series Watched</div></li>
					<li id="ach_item6" title="Coursera, edX, MVA, Udemy"><div><span><?php statsCalc(16,"93","H"); ?></span> Spent on MOOCs</div></li>
					<li id="ach_item7" title="...nothing!"><div><span><?php statsCalc(243,"11","H"); ?></span> Spent Staring at the Ceiling</div></li>
			</ul>
		</section>
		<br>
		<section id="contact">
			<h4>Keep in touch</h4>
			<div>
			<img src="_images/social/set2/email.png" alt="email" title="Triantafyllos Paschaleris email" class="email_image"><span class="email" >: dev@paschaleris.gr</span>
			</div>
			<ul id="cont_list">
					<li id="cont_item1"><div><a href="http://gr.linkedin.com/in/paschaleris" target="_blank"><img src="_images/social/set2/linkedin.png" alt="LinkedΙn" title="Paschaleris Triantafyllos LinkedΙn"></a></div></li>
					<li id="cont_item2"><div><a href="http://www.facebook.com/Paschaleris" target="_blank"><img src="_images/social/set2/facebook.png" alt="Facebook" title="Paschaleris Triantafyllos Facebook"></a></div></li>
					<li id="cont_item3"><div><a href="http://www.freelancer.com/u/Mourgolikos.html" target="_blank"><img src="_images/social/set2/freelancer.png" alt="Freelancer" title="Paschaleris Triantafyllos Freelancer"></a></div></li>
					<li id="cont_item4"><div><a href="http://gplus.to/Mourgolikos" target="_blank"><img src="_images/social/set2/googleplus.png" alt="Google Plus" title="Paschaleris Triantafyllos Google Plus"></a></div></li><!--My long url is: https://plus.google.com/115854784556081015540 -->
					<li id="cont_item5"><div><a href="http://twitter.com/Mourgolikos" target="_blank"><img src="_images/social/set2/twitter.png" alt="Twitter" title="Paschaleris Triantafyllos Twitter"></a></div></li>
					<li id="cont_item6"><div><a href="http://www.pinterest.com/Mourgolikos" target="_blank"><img src="_images/social/set2/pinterest.png" alt="Pinterest" title="Paschaleris Triantafyllos Pinterest"></a></div></li>
			</ul>
		</section>
	</div>
</div>
<footer>
	<a href="http://paschaleris.gr">By Triantafyllos Paschaleris</a>
</footer>
</body>
<!-- Βρε κοιτάς που κοιτάς τον πηγαίο κώδικα, πες μου και καμιά ιδέα για την σελίδα! -->
</html>