<?php
	//add intergration for double internal links (i.e. http://mypages.iit.edu/~pbartman/personal/portfolio/floodlight/ )

	function getPage() {
		/*$url = $_SERVER['SERVER_NAME'] . dirname(__FILE__);
		$array = explode('/',$url); $count = count($array);
		return ucfirst($array[$count - 4]);*/
		$page = str_replace('/index.php', '', basename($_SERVER['PHP_SELF']));
		$page = $_SERVER['PHP_SELF'];
		if(strstr($page, 'home')) {
			return 'Home';
		}
		if(strstr($page, 'about')) {
			return 'About Me';
		}
		if(strstr($page, 'resume')) {
			return 'R&eacute;sum&eacute;';
		}
		if(strstr($page, 'portfolio')) {
			if (strstr($page, 'motorola')) {
				return 'Motorola Solutions';
			}
			elseif (strstr($page, 'anyspace')) {
				return 'AnySpace';
			}
			elseif (strstr($page, 'floodlight')) {
				return 'Floodlight Design';
			}
			elseif (strstr($page, 'iit')) {
				return 'Illinois Institute of Technology';
			}
			elseif (strstr($page, 'hdj')) {
				return 'Harry D. Jacobs High School';
			}
			elseif (strstr($page, 'portfolio/personal')) {
				return 'Personal';
			}
			else {
				return 'Portfolio';
			}
		}
		return '';
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta id="viewport" name="viewport" content="width=device-width">
		<meta charset="utf-8">
		<meta name="description" content="The Personal Portfolio Site of Patrick Bartman, Multi-faceted Developer.">
		<meta name="keywords" content="Patrick Bartman, Pat Bartman, Bartman, Developer, Computer Science, Computer Engineer, Computer Engineering, Programming, Java, PHP, Javascript, Web Development, CSS, jQuery, IIT, Illinois Tech, Illinois Institute of Technology, Chicago, Algonquin, Illinois, Bronzeville, Bridgeport, Full Stack, Full-Stack, Back End, Back-End, Front End, Front-End" />
		<meta name="author" content="Patrick Bartman">
		
		<title><?php echo getPage(); ?> | Patrick Bartman</title>
		<link rel="shortcut icon" href="http://patrickbartman.com/images/logo.png">
		
		<!-- Facebook Meta's -->
		<meta property="og:url"					content="http://www.patrickbartman.com"/>
		<meta property="og:type"				content="profile" />
		<meta property="fb:profile_id"			content="100000105867206" /> 
		<meta property="og:title"				content="Patrick Bartman" />
		<meta property="og:description"			content="The Personal Portfolio Site of Patrick Bartman, Multi-faceted Developer." />
		<meta property="og:image"				content="http://mypages.iit.edu/~pbartman/personal/images/profile-square.png" />
		<meta porperty="og:site_name"			content="Patrick Bartman" />
		
		<!-- Twitter Meta's -->
		<meta name="twitter:card" 				content="summary_large_image">
		<meta name="twitter:creator" 			content="@patbartman">
		<meta name="twitter:title" 				content="Patrick Bartman">
		<meta name="twitter:description" 		content="The Personal Portfolio Site of Patrick Bartman, Multi-faceted Developer.">
		<meta name="twitter:image" 				content="http://mypages.iit.edu/~pbartman/personal/images/profile-square.png">
	
		
		<!-- STYLE SHEETS -->
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="http://patrickbartman.com/css/style.css"/>
		<link rel="stylesheet" href="http://patrickbartman.com/computer/computer.css"/>		<!-- Only used in Portfolio -->
		
		<!-- FONTS -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab" type="text/css">			<!-- Roboto Slab -->
		<script src="https://use.fontawesome.com/349b902ea6.js"></script>		<!-- Font Awesome -->
		
		<!-- PLUGINS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
		<!-- JAVASCRIPT SCRIPTS -->
		<script src="http://patrickbartman.com/js/script.js"></script>
		<script src="js/script.js"></script>
		
		<!-- PRELOADS -->
		<!--<link rel="dns-prefetch" href="../home"/>
		<link rel="dns-prefetch" href="../about-me"/>
		<link rel="dns-prefetch" href="../portfolio"/>
		<link rel="dns-prefetch" href="../resume"/>
		
		<link rel="preconnect" href="../home"/>
		<link rel="preconnect" href="../about-me"/>
		<link rel="preconnect" href="../portfolio"/>
		<link rel="preconnect" href="../resume"/>
		
		<link rel="prefetch" href="../home"/>
		<link rel="prefetch" href="../about-me"/>
		<link rel="prefetch" href="../portfolio"/>
		<link rel="prefetch" href="../resume"/>
		
		<link rel="subresource" href="../home"/>
		<link rel="subresource" href="../about-me"/>
		<link rel="subresource" href="../portfolio"/>
		<link rel="subresource" href="../resume"/>-->
		
		<link rel="prerender" href="../home"/>
		<link rel="prerender" href="../about-me"/>
		<link rel="prerender" href="../portfolio"/>
		<link rel="prerender" href="../resume"/>
		
		
		<!-- GOOGLE ANALYTICS -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-84552628-1', 'auto');
		  ga('send', 'pageview');
		
		</script>
		
	</head>
	<body>
		<div id="header">
			<div id="tabs">
				<a href="http://patrickbartman.com/home" title="Home">Home</a>
				<a href="http://patrickbartman.com/about-me" title="About Me">About Me</a>
				<a href="http://patrickbartman.com/resume" title='R&eacute;sum&eacute;'>R&eacute;sum&eacute;</a>
				<a href="http://patrickbartman.com/portfolio" title='Portfolio'>Portfolio</a>
			</div>
		</div>
		<div id="main">
			<?php include "sidebar.php" ?>