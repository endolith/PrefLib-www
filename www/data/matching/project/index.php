
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/head.php'); ?>
	</head>

	<body>
		<div class="container_12">
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/menu.php'); ?>
	

&nbsp;<div class="grid_7">
<h5>MD-00003: Project Bidding Data</h5>
<p>This dataset contains bids of students over a set of projects for student/project allocations at the School of Computing Science, University of Glasgod.  Each project is supervised by an individual each with a maximum capacity of supervision.  There are 8 years worth of data in this set and with between 31 and 51 students and 56 and 155 projects. This data was kindly donated by <a href="http://www.dcs.gla.ac.uk/~davidm/">David Manlove</a> who collected this data.</p><p>In addition to the strict and incomplete preference profiles of the students we have extended the profiles with all unranked items tied at the end.  We have also posted <b>.dat</b> files containing the supervisor identifiers and capacities.  The format for the .dat files is <i>Supervisor ID, Capacity, Projects</i>; where <i>Projects</i> is a space separated list of the projects supervised by the Supervisor.  Each project has a capacity of 1 while each supervisor has a variable capacity.  In academic sessions 2007-08 and 2008-09 there were no supervisor capacities in force, thus the projects and supervisors are in 1-1 correspondence.</p>

<p><h6>Required Citations</h6><p><ul> 
<li> <a href="http://scholar.google.com/scholar?as_q=Profile-based+optimal+matchings+in+the+Student/Project+Allocation+problem">Profile-based optimal matchings in the Student/Project Allocation problem.</a> Augustine Kwanashie, Robert W. Irving, David F. Manlove, Colin T.S. Sng. <a href="http://arxiv.org/abs/1403.0751">ArXiv Preprint 1403.0751</a>, Also appeared at the 2014 Workshop on Combinatorial Algorithms, 2015. </li>
</ul></p>

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
	

<div class="grid_12"><p><ul><h5 style="text-align:center;"><a href=" /data/matching/project/project.zip ">Download This Complete Dataset (64K).</a></h5></ul></p></div>

<!-- Break Page... -->
																		<div class="clear"></div>
																		<div class="grid_12 spacer"></div>
																		<div class="clear"></div>
														 
																		<div class="grid_12">
																		<table class="DataTable">
																		<tr><th>Description</th><th>Type</th><th>Modification</th><th>File Name</th><th>File Size</th></tr>

																		 <tr><td> Capacities_Projects_07_08.txt </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000001.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000001.dat']);">MD-00003-00000001.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_07_08.txt </td><td> <a href="/data/format.php#soi">Strict Order - Incomplete List</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000001.soi" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000001.soi']);">MD-00003-00000001.soi</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_07_08.txt </td><td> <a href="/data/format.php#toc">Order with Ties - Complete List</a></td> <td> Imbued </td> <td> <a href="/data/matching/project/MD-00003-00000001.toc" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000001.toc']);">MD-00003-00000001.toc</a> </td><td> 8.0K</td></tr> 

 <tr><td> Projects_07_08.txt </td><td> <a href="/data/format.php#pwg">Pairwise Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000001.pwg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000001.pwg']);">MD-00003-00000001.pwg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_07_08.txt </td><td> <a href="/data/format.php#wmg">Weighted Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000001.wmg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000001.wmg']);">MD-00003-00000001.wmg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_07_08.txt </td><td> <a href="/data/format.php#mjg">Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000001.mjg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000001.mjg']);">MD-00003-00000001.mjg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Capacities_Projects_08_09.txt </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000002.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000002.dat']);">MD-00003-00000002.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_08_09.txt </td><td> <a href="/data/format.php#soi">Strict Order - Incomplete List</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000002.soi" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000002.soi']);">MD-00003-00000002.soi</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_08_09.txt </td><td> <a href="/data/format.php#toc">Order with Ties - Complete List</a></td> <td> Imbued </td> <td> <a href="/data/matching/project/MD-00003-00000002.toc" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000002.toc']);">MD-00003-00000002.toc</a> </td><td> 8.0K</td></tr> 

 <tr><td> Projects_08_09.txt </td><td> <a href="/data/format.php#pwg">Pairwise Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000002.pwg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000002.pwg']);">MD-00003-00000002.pwg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_08_09.txt </td><td> <a href="/data/format.php#wmg">Weighted Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000002.wmg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000002.wmg']);">MD-00003-00000002.wmg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_08_09.txt </td><td> <a href="/data/format.php#mjg">Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000002.mjg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000002.mjg']);">MD-00003-00000002.mjg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Capacities_Projects_09_10.txt </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000003.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000003.dat']);">MD-00003-00000003.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_09_10.txt </td><td> <a href="/data/format.php#soi">Strict Order - Incomplete List</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000003.soi" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000003.soi']);">MD-00003-00000003.soi</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_09_10.txt </td><td> <a href="/data/format.php#toc">Order with Ties - Complete List</a></td> <td> Imbued </td> <td> <a href="/data/matching/project/MD-00003-00000003.toc" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000003.toc']);">MD-00003-00000003.toc</a> </td><td> 12K</td></tr> 

 <tr><td> Projects_09_10.txt </td><td> <a href="/data/format.php#pwg">Pairwise Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000003.pwg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000003.pwg']);">MD-00003-00000003.pwg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_09_10.txt </td><td> <a href="/data/format.php#wmg">Weighted Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000003.wmg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000003.wmg']);">MD-00003-00000003.wmg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_09_10.txt </td><td> <a href="/data/format.php#mjg">Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000003.mjg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000003.mjg']);">MD-00003-00000003.mjg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Capacities_Projects_10_11.txt </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000004.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000004.dat']);">MD-00003-00000004.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_10_11.txt </td><td> <a href="/data/format.php#soi">Strict Order - Incomplete List</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000004.soi" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000004.soi']);">MD-00003-00000004.soi</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_10_11.txt </td><td> <a href="/data/format.php#toc">Order with Ties - Complete List</a></td> <td> Imbued </td> <td> <a href="/data/matching/project/MD-00003-00000004.toc" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000004.toc']);">MD-00003-00000004.toc</a> </td><td> 8.0K</td></tr> 

 <tr><td> Projects_10_11.txt </td><td> <a href="/data/format.php#pwg">Pairwise Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000004.pwg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000004.pwg']);">MD-00003-00000004.pwg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_10_11.txt </td><td> <a href="/data/format.php#wmg">Weighted Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000004.wmg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000004.wmg']);">MD-00003-00000004.wmg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_10_11.txt </td><td> <a href="/data/format.php#mjg">Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000004.mjg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000004.mjg']);">MD-00003-00000004.mjg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Capacities_Projects_11_12.txt </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000005.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000005.dat']);">MD-00003-00000005.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_11_12.txt </td><td> <a href="/data/format.php#soi">Strict Order - Incomplete List</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000005.soi" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000005.soi']);">MD-00003-00000005.soi</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_11_12.txt </td><td> <a href="/data/format.php#toc">Order with Ties - Complete List</a></td> <td> Imbued </td> <td> <a href="/data/matching/project/MD-00003-00000005.toc" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000005.toc']);">MD-00003-00000005.toc</a> </td><td> 12K</td></tr> 

 <tr><td> Projects_11_12.txt </td><td> <a href="/data/format.php#pwg">Pairwise Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000005.pwg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000005.pwg']);">MD-00003-00000005.pwg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_11_12.txt </td><td> <a href="/data/format.php#wmg">Weighted Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000005.wmg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000005.wmg']);">MD-00003-00000005.wmg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_11_12.txt </td><td> <a href="/data/format.php#mjg">Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000005.mjg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000005.mjg']);">MD-00003-00000005.mjg</a> </td><td> 4.0K</td></tr> 

 <tr><td> Capacities_Projects_12_13.txt </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000006.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000006.dat']);">MD-00003-00000006.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_12_13.txt </td><td> <a href="/data/format.php#soi">Strict Order - Incomplete List</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000006.soi" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000006.soi']);">MD-00003-00000006.soi</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_12_13.txt </td><td> <a href="/data/format.php#toc">Order with Ties - Complete List</a></td> <td> Imbued </td> <td> <a href="/data/matching/project/MD-00003-00000006.toc" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000006.toc']);">MD-00003-00000006.toc</a> </td><td> 20K</td></tr> 

 <tr><td> Projects_12_13.txt </td><td> <a href="/data/format.php#pwg">Pairwise Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000006.pwg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000006.pwg']);">MD-00003-00000006.pwg</a> </td><td> 8.0K</td></tr> 

 <tr><td> Projects_12_13.txt </td><td> <a href="/data/format.php#wmg">Weighted Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000006.wmg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000006.wmg']);">MD-00003-00000006.wmg</a> </td><td> 8.0K</td></tr> 

 <tr><td> Projects_12_13.txt </td><td> <a href="/data/format.php#mjg">Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000006.mjg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000006.mjg']);">MD-00003-00000006.mjg</a> </td><td> 8.0K</td></tr> 

 <tr><td> Capacities_Projects_13_14.txt </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000007.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000007.dat']);">MD-00003-00000007.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_13_14.txt </td><td> <a href="/data/format.php#soi">Strict Order - Incomplete List</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000007.soi" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000007.soi']);">MD-00003-00000007.soi</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_13_14.txt </td><td> <a href="/data/format.php#toc">Order with Ties - Complete List</a></td> <td> Imbued </td> <td> <a href="/data/matching/project/MD-00003-00000007.toc" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000007.toc']);">MD-00003-00000007.toc</a> </td><td> 28K</td></tr> 

 <tr><td> Projects_13_14.txt </td><td> <a href="/data/format.php#pwg">Pairwise Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000007.pwg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000007.pwg']);">MD-00003-00000007.pwg</a> </td><td> 8.0K</td></tr> 

 <tr><td> Projects_13_14.txt </td><td> <a href="/data/format.php#wmg">Weighted Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000007.wmg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000007.wmg']);">MD-00003-00000007.wmg</a> </td><td> 8.0K</td></tr> 

 <tr><td> Projects_13_14.txt </td><td> <a href="/data/format.php#mjg">Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000007.mjg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000007.mjg']);">MD-00003-00000007.mjg</a> </td><td> 8.0K</td></tr> 

 <tr><td> Capacities_Projects_14_15.txt </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000008.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000008.dat']);">MD-00003-00000008.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_14_15.txt </td><td> <a href="/data/format.php#soi">Strict Order - Incomplete List</a></td> <td> Original </td> <td> <a href="/data/matching/project/MD-00003-00000008.soi" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000008.soi']);">MD-00003-00000008.soi</a> </td><td> 4.0K</td></tr> 

 <tr><td> Projects_14_15.txt </td><td> <a href="/data/format.php#toc">Order with Ties - Complete List</a></td> <td> Imbued </td> <td> <a href="/data/matching/project/MD-00003-00000008.toc" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000008.toc']);">MD-00003-00000008.toc</a> </td><td> 28K</td></tr> 

 <tr><td> Projects_14_15.txt </td><td> <a href="/data/format.php#pwg">Pairwise Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000008.pwg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000008.pwg']);">MD-00003-00000008.pwg</a> </td><td> 8.0K</td></tr> 

 <tr><td> Projects_14_15.txt </td><td> <a href="/data/format.php#wmg">Weighted Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000008.wmg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000008.wmg']);">MD-00003-00000008.wmg</a> </td><td> 8.0K</td></tr> 

 <tr><td> Projects_14_15.txt </td><td> <a href="/data/format.php#mjg">Majority Graph</a></td> <td> Induced </td> <td> <a href="/data/matching/project/MD-00003-00000008.mjg" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00003-00000008.mjg']);">MD-00003-00000008.mjg</a> </td><td> 8.0K</td></tr> 


		</table>
		</div>


			<!-- Break and Footer -->
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/foot.php'); ?>	
		</div>
	</body>
	</html>
	