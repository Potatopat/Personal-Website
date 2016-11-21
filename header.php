<?php
	function getPage() {
		$page = str_replace('/index.php', '', basename($_SERVER['PHP_SELF']));
		$page = $_SERVER['PHP_SELF'];
		$suffix = ' | Patrick Bartman';
		
		if(strstr($page, 'home')) {
			return 'Patrick Bartman: Multifaceted Developer';
		}
		if(strstr($page, 'about')) {
			return 'About Me' . $suffix;
		}
		if(strstr($page, 'resume')) {
			return 'R&eacute;sum&eacute;' . $suffix;
		}
		if(strstr($page, 'portfolio')) {
			if (strstr($page, 'motorola')) {
				return 'Motorola Solutions' . $suffix;
			}
			elseif (strstr($page, 'anyspace')) {
				return 'AnySpace' . $suffix;
			}
			elseif (strstr($page, 'floodlight')) {
				return 'Floodlight Design' . $suffix;
			}
			elseif (strstr($page, 'iit')) {
				return 'Illinois Institute of Technology' . $suffix;
			}
			elseif (strstr($page, 'hdj')) {
				return 'Harry D. Jacobs High School' . $suffix;
			}
			elseif (strstr($page, 'portfolio/personal')) {
				return 'Personal' . $suffix;
			}
			else {
				return 'Portfolio' . $suffix;
			}
		}
		if(strstr($page, '2032')) {
			return 'Patrick For President: 2032' . $suffix;
		}
		return '';
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta id="viewport" name="viewport" content="width=device-width">
		<meta charset="utf-8">
		<meta name="description" content="The Personal Portfolio Site of Patrick Bartman, Multifaceted Developer.">
		<meta name="keywords" content="Patrick Bartman, Pat Bartman, Bartman, Developer, Multifacet, Multifaceted, Multi-facet, Multi-faceted, Computer Science, Computer Engineer, Computer Engineering, Programming, Java, PHP, Javascript, Web Development, CSS, jQuery, IIT, Illinois Tech, Illinois Institute of Technology, Chicago, Algonquin, Illinois, Bronzeville, Bridgeport, Full Stack, Full-Stack, Back End, Back-End, Front End, Front-End, Made With Knowledge, Hackathons" />
		<meta name="author" content="Patrick Bartman">
		<meta name="theme-color" content="#000000">
		
		<title><?php echo getPage(); ?></title>
		<link rel="shortcut icon" href="http://patrickbartman.com/images/logo.png">
		
		<!-- Facebook Meta's -->
		<meta property="og:url"					content="http://www.patrickbartman.com"/>
		<meta property="og:type"				content="profile" />
		<meta property="fb:profile_id"			content="100000105867206" /> 
		<meta property="og:title"				content="Patrick Bartman" />
		<meta property="og:description"			content="The Personal Portfolio Site of Patrick Bartman, Multifaceted Developer." />
		<meta property="og:image"				content="http://mypages.iit.edu/~pbartman/personal/images/profile-square.png" />
		<meta property="og:site_name"			content="Patrick Bartman" />
		
		<!-- Twitter Meta's -->
		<meta name="twitter:card" 				content="summary_large_image">
		<meta name="twitter:creator" 			content="@patbartman">
		<meta name="twitter:title" 				content="Patrick Bartman">
		<meta name="twitter:description" 		content="The Personal Portfolio Site of Patrick Bartman, Multifaceted Developer.">
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
		<link rel="prerender" href="http://patrickbartman.com/home"/>
		<link rel="prerender" href="http://patrickbartman.com/about-me"/>
		<link rel="prerender" href="http://patrickbartman.com/resume"/>
		<link rel="prerender" href="http://patrickbartman.com/portfolio"/>
		
		<!-- Bing Meta's -->
		<meta name="msvalidate.01" content="C8355C32D3A32ABFFE58BA82FC73629A" />
		
		<!-- GOOGLE ANALYTICS -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-84552628-1', 'auto');
		  ga('send', 'pageview');
		
		</script>
		
		<script type="application/ld+json">
			{
			  "@context": "http://schema.org",
			  "@type": "Person",
			  "url": "http://www.patrickbartman.com",
			  "email": "me@patrickbartman.com",
			  "familyName": "Bartman",
			  "givenName": "Patrick",
			  "jobTitle": "Multifaceted Developer",
			  "image": "http://mypages.iit.edu/~pbartman/personal/images/profile-square.png",
			  "name": "Patrick Bartman",
			  "description": "Multifaceted Developer",
			  "alumniOf": [{
			  	"@type": "EducationalOrganization",
			  	"name": "Illinois Institute of Technology"
			  }],
			  "contactPoint": [{
			    "@type": "ContactPoint",
			    "telephone": "+1-224-678-6145",
			    "email": "me@patrickbartman.com",
			    "name": "Patrick Bartman",
			    "url": "http://www.patrickbartman.com",
			    "image": "http://mypages.iit.edu/~pbartman/personal/images/profile-square.png"
			  }]
			}
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