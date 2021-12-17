
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/head.php'); ?>
	</head>

	<body>
		<div class="container_12">
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/menu.php'); ?>
	

&nbsp;<div class="grid_7">
<h5>CD-00001: Trip Advisor Data</h5>
<p>This dataset contains 675,069 reviews of 1,851 hotels across the world scraped from <a href="www.tripadvisor.com">Trip Advisor</a>.  The data was scraped and donated by <a href="http://sifaka.cs.uiuc.edu/~wang296/">Hongning Wang</a>.</p> <p>One file contains the numerical aspect ratings provided by the users, along with other information about the hotel.  The second file contains the text of the users review.  These reviews have been slightly modified, all excess spaces and tabs have been removed and all commas have been changed to semi-colons.</p> <p>Both files are zipped due to their size.  Both files are encoded in the <b>dat</b> format and the first line of each file explains the fields within the file.  Some of the usernames are encoded in Unicode so please be careful when parsing the files!</p>

<p><h6>Required Citations</h6><p><ul> 
<li>None.</li></ul></p>

<p><h6>Selected Citations Using This Dataset</h6><p><ul> 
<li> <a href="http://scholar.google.com/scholar?as_q=Latent+Aspect+Rating+Analysis+on+Review+Text+Data:+A+Rating+Regression+Approach">Latent Aspect Rating Analysis on Review Text Data: A Rating Regression Approach.</a> Hongning Wang, Yue Lu and Chengxiang Zhai. The 16th ACM SIGKDD Conference on Knowledge Discovery and Data Mining (KDD), 2010. </li>
<li> <a href="http://scholar.google.com/scholar?as_q=Latent+Aspect+Rating+Analysis+without+Aspect+Keyword+Supervision">Latent Aspect Rating Analysis without Aspect Keyword Supervision.</a> Hongning Wang, Yue Lu and ChengXiang Zhai. The 17th ACM SIGKDD Conference on Knowledge Discovery and Data Mining (KDD), 2011. </li>
<li> <a href="http://scholar.google.com/scholar?as_q=Judgment+Aggregation+under+Issue+Dependencies">Judgment Aggregation under Issue Dependencies.</a> Marco Costantini, Carla Groenland, and Ulle Endriss. 30th AAAI Conference on Artificial Intelligence (AAAI), 2016. </li>
</ul></p>

</div>
			<!-- Pictures and Links -->
			<div class="grid_5">
				<p>
				<img src="/images/pref.png" alt="" title="" />

				<a href="https://research.csiro.au/data61/preflib-tools-and-archive/" class="center"> <h3>Supported By:</h3><img src="/images/nicta.png" alt="" title="NICTA" /></a>
				</p>
			</div>

			<!-- Break Page... -->
			<div class="clear"></div>
			<div class="grid_12 spacer"></div>
			<div class="clear"></div>
	

<div class="grid_12"><p><ul><h5 style="text-align:center;"><a href=" /data/combinatorial/trip/trip.zip ">Download This Complete Dataset (77M).</a></h5></ul></p></div>

<!-- Break Page... -->
																		<div class="clear"></div>
																		<div class="grid_12 spacer"></div>
																		<div class="clear"></div>
														
																		<div class="grid_12">
																		<table class="DataTable">
																		<tr><th>Description</th><th>Type</th><th>Modification</th><th>File Name</th><th>File Size</th></tr>

																		 <tr><td> Ratings </td><td> <a href="/data/format.php#data">Zipped Data File</a></td> <td> Original </td> <td> <a href="/data/combinatorial/trip/CD-00001-00000001.zip" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'CD-00001-00000001.zip']);">CD-00001-00000001.zip</a> </td><td> 2.3M</td></tr> 

 <tr><td> Review Texts </td><td> <a href="/data/format.php#data">Zipped Data File</a></td> <td> Original </td> <td> <a href="/data/combinatorial/trip/CD-00001-00000002.zip" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'CD-00001-00000002.zip']);">CD-00001-00000002.zip</a> </td><td> 75M</td></tr> 


		</table>
		</div>


			<!-- Break and Footer -->
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/foot.php'); ?>
		</div>
	</body>
	</html>
	