
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/head.php'); ?>
	</head>

	<body>
		<div class="container_12">
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/menu.php'); ?>
	

&nbsp;<div class="grid_7">
<h5>MD-00004: AAMAS Bidding Data</h5>
<p>This dataset contains the bids of reviewers over papers from the <a href="http://www.aamas2015.com/en/">2015 Autonomous Agents and Multiagent Systems Conference</a>.  Inclusion in this data set was explicitly opt-in; it contains 9,817 bids of 201 reviewers over 613 papers; this represents about 40% of the actual 22,360 bids of 281 reviewers over 670 papers.</p> <p>The bidding language for these conferences is <b>yes/maybe/no/conflict</b>.  In order to make these more useful for PreLib users, we have converted them to incomplete partial orders of the form <b>{yes} > {maybe} > {no response} > {no}</b>.  The papers for which a reviewer had a conflict have been removed from their preference list.  All reviewers had different preference orderings, hence each file contains as many entries as reviewers.  We are deeply grateful to the IFAAMAS board and <a href="http://www.inf.pucrs.br/r.bordini/Rafael_Bordini/Welcome.html">Rafael Bordini</a> and <a href="https://www.cs.ox.ac.uk/people/edith.elkind/">Edith Elkind</a> for approving, coordinating, and providing this dataset.</p>

<p><h6>Required Citations</h6><p><ul> 
<li>None.</li></ul></p>

<p><h6>Selected Citations Using This Dataset</h6><p><ul> 
<li>None.</li></ul></p>

</div>
			<!-- Pictures and Links -->
			<div class="grid_5">
				<p>
				<img src="/images/pref.png" alt="" title="" />

				<a href="http://www.nicta.com.au/category/research/optimisation/" class="center"> <h3>Supported By:</h3><img src="/images/nicta.png" alt="" title="NICTA" /></a>
				</p>
			</div>
			
			<!-- Break Page... -->
			<div class="clear"></div>
			<div class="grid_12 spacer"></div>
			<div class="clear"></div>
	

<div class="grid_12"><p><ul><h5 style="text-align:center;"><a href=" /data/matching/aamas/aamas.zip ">Download This Complete Dataset (44K).</a></h5></ul></p></div>

<!-- Break Page... -->
																		<div class="clear"></div>
																		<div class="grid_12 spacer"></div>
																		<div class="clear"></div>
														 
																		<div class="grid_12">
																		<table class="DataTable">
																		<tr><th>Description</th><th>Type</th><th>Modification</th><th>File Name</th><th>File Size</th></tr>

																		 <tr><td> AAMAS 2015 </td><td> <a href="/data/format.php#toi">Order with Ties - Incomplete List</a></td> <td> Original </td> <td> <a href="/data/matching/aamas/MD-00004-00000001.toi" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00004-00000001.toi']);">MD-00004-00000001.toi</a> </td><td> 472K</td></tr> 


		</table>
		</div>


			<!-- Break and Footer -->
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/foot.php'); ?>	
		</div>
	</body>
	</html>
	