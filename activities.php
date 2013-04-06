<?php
require_once("inc/util.bft.php");
?>
<!DOCTYPE HTML>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/bft.css">
	<title>Brendan F. Taylor: Activities</title>
</head>

<body>
<div id="container">
<?php include("inc/header.php"); ?>
	<div id="nav">
<?php get_nav("Activities"); ?>
	</div>

	<div id="content">
		
		<h2>Projects</h2>
		<h3>Converted sailboat from diesel to electric drive</h3>
		<ul>
			<li>Removed existing diesel inboard</li>
			<li>Installed Electric Yacht electric drive</li>
			<li>Runs on 4 x 150 Ah deep cycle lead acid batteries</li>
			<li>Batteries recharged from solar PV panels in cockpit</li>
			<li>25 - 30 nautical miles of range</li>
		</ul>
		<table style="width: auto">
			<tr>
				<td><img height="160px" src="img/gertrude.jpg"/></td>
				<td><img height="160px" src="img/solar.jpg"/></td>
				<td><img height="160px" src="img/diesel.jpg"/></td>
				<td><img height="160px" src="img/electric.jpg"/></td>
			</tr>
		</table>
		<h3>Democranet</h3>
		<ul>
			<li>
				A web site for democratic networking, learning about political issues, discovering candidates positions
				on issues, and initiating actions that result in real outcomes
			</li>
			<li>
				Created idea for Democranet and did most of the development in PHP
			</li>
		</ul>
		<table style="width: auto; float: right">
			<tr>
				<td><img height="240px" src="img/treehouse.jpg"/></td>
			</tr>
		</table>
		<h3>Treehouse</h3>
		<ul>
			<li>Designed and built a treehouse with my daughter</li>
		</ul>
		<h2>Volunteering</h2>
		<ul>
			<li>Various tasks for 350VT.org</li>
			<li>Mentor for a student at U32 in Montpelier, Vermont through the Branching Out program</li>
		</ul>
		<h2>Sports</h2>
		<ul>
			<li>Ice hockey, sailing, biking, skiing</li>
		</ul>
	</div>
<?php include("inc/footer.php"); ?>
</div>
</body>

</html>
