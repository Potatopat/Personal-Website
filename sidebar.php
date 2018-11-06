<div id="sidebar">
	<div id="pic">
		<!--<img src="home/images/Senior Picture.jpg">-->
	</div>
	<h1>Patrick Bartman</h1>
	<div id="social">
		<a href="mailto:me@patrickbartman.com?Subject=Saw%20Your%20Website" title="Send Me An Email At me@patrickbartman.com!"><i class="fa fa-envelope-square"></i></a>
		<a href="https://www.linkedin.com/in/pbartman" title="Connect With Me On LinkedIn!" target="_blank"><i class="fa fa-linkedin-square"></i></a>
		<a href="https://www.facebook.com/potatopat" title="Add Me On Facebook!" target="_blank"><i class="fa fa-facebook-square"></i></a>
		<a href="https://github.com/Potatopat" title="Check Out My GitHub!" target="_blank"><i class="fa fa-github-square"></i></a>
		<!-- <a href="https://devpost.com/Potatopat" title="Check Out My Devpost!" target="_blank"><div><img src="../images/devpost-stack.png"/></div></a> -->
	</div>
	<?php 
		$dow = 3;				// Wednesdays 6-8pm		// PG-13 Fall 2017
		$start_time = 18;
		$end_time = 20;
		
		$dow_2 = 3;				// Wednesdays 1-3pm		// How To Succeed At DJing Without Really Trying Fall 2017
		$start_time_2 = 13;		// TODO: change to 1:30-2:30pm
		$end_time_2 = 15;
		
		date_default_timezone_set('America/Chicago');
		$d = intval(date('N'));
		$h = intval(date('G'));
		
		if (($d == $dow && $h >= $start_time && $h < $end_time) || ($d == $dow_2 && $h >= $start_time_2 && $h < $end_time_2)) {
			echo '<iframe src="http://tunein.com/embed/player/s29558/" style="width:100%;width:calc(100% - 100px);height:100px;margin:20px 50px 0px 50px;" scrolling="no" frameborder="no"></iframe>';
		}
	?>
</div>