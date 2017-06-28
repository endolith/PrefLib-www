
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/head.php'); ?>
	</head>

	<body>
		<div class="container_12">
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/menu.php'); ?>
	

&nbsp;<div class="grid_7">
<h5>MD-00002: Computer Science Conference Bidding Data</h5>
<p>This dataset contains the bidding data from 3 Computer Science Conferences.  This contains the bids of all reviewers (aside a small number of opt-outs) over a subset of papers at the conference.</p> <p>The bidding language for these conferences is <b>yes/maybe/conflict</b>.  In order to make these more useful for PreLib users, we have converted them to incomplete partial orders of the form <b>{yes} > {maybe} > {no response}</b>.  The papers for which a reviewer had a conflict have been removed from their preference list.  All reviewers had different preference orderings, hence each file contains as many entries as reviewers.</p>

<p><h6>Required Citations</h6><p><ul> 
<li>None.</li></ul></p>

<p><h6>Selected Citations Using This Dataset</h6><p><ul> 
<li>None.</li></ul></p>

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
	

<div class="grid_12"><p><ul><h5 style="text-align:center;"><a href=" /data/matching/csconf/csconf.zip ">Download This Complete Dataset (12K).</a></h5></ul></p></div>

<!-- Break Page... -->
																		<div class="clear"></div>
																		<div class="grid_12 spacer"></div>
																		<div class="clear"></div>
														
																		<div class="grid_12">
																		<table class="DataTable">
																		<tr><th>Description</th><th>Type</th><th>Modification</th><th>File Name</th><th>File Size</th></tr>

																		 <tr><td> AI Conference 1 </td><td> <a href="/data/format.php#toi">Order with Ties - Incomplete List</a></td> <td> Original </td> <td> <a href="/data/matching/csconf/MD-00002-00000001.toi" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00002-00000001.toi']);">MD-00002-00000001.toi</a> </td><td> 8.0K</td></tr> 

 <tr><td> AI Conference 2 </td><td> <a href="/data/format.php#toi">Order with Ties - Incomplete List</a></td> <td> Original </td> <td> <a href="/data/matching/csconf/MD-00002-00000002.toi" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00002-00000002.toi']);">MD-00002-00000002.toi</a> </td><td> 8.0K</td></tr> 

 <tr><td> AI Conference 3 </td><td> <a href="/data/format.php#toi">Order with Ties - Incomplete List</a></td> <td> Original </td> <td> <a href="/data/matching/csconf/MD-00002-00000003.toi" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00002-00000003.toi']);">MD-00002-00000003.toi</a> </td><td> 88K</td></tr> 


		</table>
		</div>


			<!-- Break and Footer -->
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/foot.php'); ?>
		</div>
	</body>
	</html>
	