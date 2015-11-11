<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php include "./common/head.php"; ?>
</head>

<body>
	<div class="container_12">
		<?php include "./common/menu.php"; ?>
	
		<!-- List of Papers. -->
		<div class="grid_7">

			<h5> Publications Using PrefLib </h5>
			<p> Below is a list of papers that have made use of or directly referenced data stored here at PrefLib.  If you use our data in a paper please contact contact <a href="http://www.nickmattei.net">Nicholas Mattei</a> at nicholas<b>{dot}</b>mattei@nicta.com.au to have you papers added to the list.</p>

			<p> Additional references for individual datasets can be found on the appropriate <a href="source.php">Data by Source</a> pages.  All links below jump to Google Scholar.</p>	
		</div>
	
		<!-- Pictures and Links -->
		<div class="grid_5">
			<p>
			<img src="images/pref.png" alt="" title="" />

			<a href="http://www.nicta.com.au/category/research/optimisation/" class="center"> <h3>Supported By:</h3><img src="images/nicta.png" alt="" title="NICTA" /></a>
			</p>
		</div>
	
		<!-- Break Page... -->
		<div class="clear"></div>
		<div class="grid_12 spacer"></div>
		<div class="clear"></div>

		<!-- Papers -->
		<div class="grid_8">
			<?php include "./common/pubs.php"; ?>
		</div>

		<!-- Links -->
		<div class="grid_4">
			<h5 style=text-align:center> Links </h5>
			<?php include "./common/links.php"; ?>
		</div>

	
		<!-- Break and Footer -->
		<?php include "./common/foot.php"; ?>
	</div>
</body>
</html>