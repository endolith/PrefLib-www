
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/head.php'); ?>
	</head>

	<body>
		<div class="container_12">
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/menu.php'); ?>
	

&nbsp;<div class="grid_7">
<h5>MD-00001: Kidney Data</h5>
<p>This dataset contains 310 instances of synthetic kidney donor pools.  The data was generated using a state of the art donor pool generation method (described in Saidman et al., Increasing the opportunity of live kidney donation by matching for two-and three-way exchanges. Transplantation 81(5), 2006) and was donated by <a href="http://www.cs.cmu.edu/~dickerson">John Dickerson.</a>  John has recently posted his generation as well as his exchange solving code online; it is available <a href="https://github.com/JohnDickerson/KidneyExchange">here</a>.</p> <p> The dataset consists of 10 randomly generated instances of  kidney exchanges with 16, 32, 64, 128, 256, 512, 1024, 2048 patients and, as a percentage of the pool, altruists at 0%, 5%, 10%, and 15% for a total of 310 data files.  The main components use the <b>wmd</b> data format described in the <a href=” http://www.preflib.org/format.php”>Data Formats</a> page.  Each edge has a source and multiple destinations to represent the patients that can receive a kidney from the source.  All edges have weight 1 unless they connect from a patient to an altruist (who does not need a kidney), which have weight 0. </p> <p> There is a <b>dat</b> file associated with each kidney exchange datafile.  This file contains some extra fields that may be of interest to researchers.  Specifically, the file contains the following files: <b>Pair</b> index number of the pair in the corresponding wmd file.; <b>Patient</b> the blood type of the person needing the kidney; <b>Donor</b> the blood type of the person donating the kidney; <b>Wife-P?</b> 1 if the person needing the kidney is the wife of the donor; <b>%Pra</b> denotes the panel reactive antibody level of the patient, discretized into three levels; <b>Out-Deg</b> the number of nodes in the wmd file that can receive a kidney from this donor; <b>Altruist</b>1 if the corresponding pair is an altruist.</p>

<p><h6>Required Citations</h6><p><ul> 
<li> <a href="http://scholar.google.com/scholar?as_q=Optimizing+Kidney+Exchange+with+Transplant+Chains:+Theory+and+Reality">Optimizing Kidney Exchange with Transplant Chains: Theory and Reality.</a> John P. Dickerson, Ariel D. Procaccia, Tuomas Sandholm. Proceedings of AAMAS, 2012. </li>
</ul></p>

<p><h6>Selected Citations Using This Dataset</h6><p><ul> 
<li> <a href="http://scholar.google.com/scholar?as_q=Failure-Aware+Kidney+Exchange">Failure-Aware Kidney Exchange.</a> John P. Dickerson, Ariel D. Procaccia, Tuomas Sandholm. Proceedings of EC, 2013. </li>
<li> <a href="http://scholar.google.com/scholar?as_q=Dynamic+Matching+via+Weighted+Myopia+with+Application+to+Kidney+Exchange">Dynamic Matching via Weighted Myopia with Application to Kidney Exchange.</a> John P. Dickerson, Ariel D. Procaccia, Tuomas Sandholm. Proceedings of AAAI, 2012. </li>
<li> <a href="http://scholar.google.com/scholar?as_q=Price+of+Fairness+in+Kidney+Exchange">Price of Fairness in Kidney Exchange.</a> John P. Dickerson, Ariel D. Procaccia, Tuomas Sandholm. Proceedings of AAMAS, 2014. </li>
</ul></p>

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
	

<div class="grid_12"><p><ul><h5 style="text-align:center;"><a href=" /data/matching/kidney/kidney.zip ">Download This Complete Dataset (195M).</a></h5></ul></p></div>

<!-- Break Page... -->
																		<div class="clear"></div>
																		<div class="grid_12 spacer"></div>
																		<div class="clear"></div>
														 
																		<div class="grid_12">
																		<table class="DataTable">
																		<tr><th>Description</th><th>Type</th><th>Modification</th><th>File Name</th><th>File Size</th></tr>

																		 <tr><td> Kidney Matching - 16 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000001.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000001.wmd']);">MD-00001-00000001.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000001.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000001.dat']);">MD-00001-00000001.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000002.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000002.wmd']);">MD-00001-00000002.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000002.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000002.dat']);">MD-00001-00000002.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000003.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000003.wmd']);">MD-00001-00000003.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000003.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000003.dat']);">MD-00001-00000003.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000004.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000004.wmd']);">MD-00001-00000004.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000004.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000004.dat']);">MD-00001-00000004.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000005.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000005.wmd']);">MD-00001-00000005.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000005.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000005.dat']);">MD-00001-00000005.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000006.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000006.wmd']);">MD-00001-00000006.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000006.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000006.dat']);">MD-00001-00000006.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000007.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000007.wmd']);">MD-00001-00000007.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000007.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000007.dat']);">MD-00001-00000007.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000008.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000008.wmd']);">MD-00001-00000008.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000008.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000008.dat']);">MD-00001-00000008.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000009.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000009.wmd']);">MD-00001-00000009.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000009.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000009.dat']);">MD-00001-00000009.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000010.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000010.wmd']);">MD-00001-00000010.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000010.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000010.dat']);">MD-00001-00000010.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000011.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000011.wmd']);">MD-00001-00000011.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000011.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000011.dat']);">MD-00001-00000011.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000012.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000012.wmd']);">MD-00001-00000012.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000012.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000012.dat']);">MD-00001-00000012.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000013.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000013.wmd']);">MD-00001-00000013.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000013.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000013.dat']);">MD-00001-00000013.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000014.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000014.wmd']);">MD-00001-00000014.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000014.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000014.dat']);">MD-00001-00000014.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000015.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000015.wmd']);">MD-00001-00000015.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000015.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000015.dat']);">MD-00001-00000015.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000016.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000016.wmd']);">MD-00001-00000016.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000016.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000016.dat']);">MD-00001-00000016.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000017.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000017.wmd']);">MD-00001-00000017.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000017.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000017.dat']);">MD-00001-00000017.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000018.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000018.wmd']);">MD-00001-00000018.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000018.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000018.dat']);">MD-00001-00000018.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000019.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000019.wmd']);">MD-00001-00000019.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000019.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000019.dat']);">MD-00001-00000019.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000020.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000020.wmd']);">MD-00001-00000020.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000020.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000020.dat']);">MD-00001-00000020.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 2 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000021.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000021.wmd']);">MD-00001-00000021.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 2 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000021.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000021.dat']);">MD-00001-00000021.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 2 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000022.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000022.wmd']);">MD-00001-00000022.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 2 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000022.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000022.dat']);">MD-00001-00000022.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 2 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000023.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000023.wmd']);">MD-00001-00000023.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 2 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000023.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000023.dat']);">MD-00001-00000023.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 2 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000024.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000024.wmd']);">MD-00001-00000024.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 2 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000024.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000024.dat']);">MD-00001-00000024.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 2 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000025.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000025.wmd']);">MD-00001-00000025.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 2 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000025.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000025.dat']);">MD-00001-00000025.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 2 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000026.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000026.wmd']);">MD-00001-00000026.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 2 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000026.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000026.dat']);">MD-00001-00000026.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 2 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000027.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000027.wmd']);">MD-00001-00000027.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 2 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000027.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000027.dat']);">MD-00001-00000027.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 2 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000028.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000028.wmd']);">MD-00001-00000028.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 2 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000028.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000028.dat']);">MD-00001-00000028.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 2 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000029.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000029.wmd']);">MD-00001-00000029.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 2 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000029.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000029.dat']);">MD-00001-00000029.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 pairs with 2 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000030.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000030.wmd']);">MD-00001-00000030.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 16 with 2 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000030.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000030.dat']);">MD-00001-00000030.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000031.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000031.wmd']);">MD-00001-00000031.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000031.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000031.dat']);">MD-00001-00000031.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000032.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000032.wmd']);">MD-00001-00000032.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000032.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000032.dat']);">MD-00001-00000032.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000033.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000033.wmd']);">MD-00001-00000033.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000033.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000033.dat']);">MD-00001-00000033.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000034.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000034.wmd']);">MD-00001-00000034.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000034.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000034.dat']);">MD-00001-00000034.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000035.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000035.wmd']);">MD-00001-00000035.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000035.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000035.dat']);">MD-00001-00000035.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000036.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000036.wmd']);">MD-00001-00000036.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000036.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000036.dat']);">MD-00001-00000036.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000037.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000037.wmd']);">MD-00001-00000037.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000037.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000037.dat']);">MD-00001-00000037.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000038.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000038.wmd']);">MD-00001-00000038.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000038.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000038.dat']);">MD-00001-00000038.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000039.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000039.wmd']);">MD-00001-00000039.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000039.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000039.dat']);">MD-00001-00000039.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000040.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000040.wmd']);">MD-00001-00000040.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000040.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000040.dat']);">MD-00001-00000040.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000041.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000041.wmd']);">MD-00001-00000041.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000041.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000041.dat']);">MD-00001-00000041.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000042.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000042.wmd']);">MD-00001-00000042.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000042.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000042.dat']);">MD-00001-00000042.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000043.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000043.wmd']);">MD-00001-00000043.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000043.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000043.dat']);">MD-00001-00000043.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000044.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000044.wmd']);">MD-00001-00000044.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000044.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000044.dat']);">MD-00001-00000044.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000045.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000045.wmd']);">MD-00001-00000045.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000045.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000045.dat']);">MD-00001-00000045.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000046.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000046.wmd']);">MD-00001-00000046.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000046.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000046.dat']);">MD-00001-00000046.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000047.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000047.wmd']);">MD-00001-00000047.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000047.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000047.dat']);">MD-00001-00000047.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000048.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000048.wmd']);">MD-00001-00000048.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000048.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000048.dat']);">MD-00001-00000048.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000049.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000049.wmd']);">MD-00001-00000049.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000049.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000049.dat']);">MD-00001-00000049.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 1 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000050.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000050.wmd']);">MD-00001-00000050.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 1 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000050.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000050.dat']);">MD-00001-00000050.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000051.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000051.wmd']);">MD-00001-00000051.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000051.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000051.dat']);">MD-00001-00000051.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000052.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000052.wmd']);">MD-00001-00000052.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000052.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000052.dat']);">MD-00001-00000052.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000053.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000053.wmd']);">MD-00001-00000053.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000053.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000053.dat']);">MD-00001-00000053.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000054.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000054.wmd']);">MD-00001-00000054.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000054.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000054.dat']);">MD-00001-00000054.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000055.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000055.wmd']);">MD-00001-00000055.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000055.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000055.dat']);">MD-00001-00000055.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000056.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000056.wmd']);">MD-00001-00000056.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000056.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000056.dat']);">MD-00001-00000056.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000057.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000057.wmd']);">MD-00001-00000057.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000057.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000057.dat']);">MD-00001-00000057.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000058.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000058.wmd']);">MD-00001-00000058.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000058.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000058.dat']);">MD-00001-00000058.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000059.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000059.wmd']);">MD-00001-00000059.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000059.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000059.dat']);">MD-00001-00000059.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000060.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000060.wmd']);">MD-00001-00000060.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000060.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000060.dat']);">MD-00001-00000060.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 4 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000061.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000061.wmd']);">MD-00001-00000061.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 4 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000061.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000061.dat']);">MD-00001-00000061.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 4 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000062.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000062.wmd']);">MD-00001-00000062.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 4 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000062.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000062.dat']);">MD-00001-00000062.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 4 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000063.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000063.wmd']);">MD-00001-00000063.wmd</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 4 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000063.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000063.dat']);">MD-00001-00000063.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 4 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000064.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000064.wmd']);">MD-00001-00000064.wmd</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 4 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000064.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000064.dat']);">MD-00001-00000064.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 4 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000065.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000065.wmd']);">MD-00001-00000065.wmd</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 4 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000065.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000065.dat']);">MD-00001-00000065.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 4 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000066.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000066.wmd']);">MD-00001-00000066.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 4 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000066.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000066.dat']);">MD-00001-00000066.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 4 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000067.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000067.wmd']);">MD-00001-00000067.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 4 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000067.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000067.dat']);">MD-00001-00000067.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 4 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000068.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000068.wmd']);">MD-00001-00000068.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 4 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000068.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000068.dat']);">MD-00001-00000068.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 4 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000069.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000069.wmd']);">MD-00001-00000069.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 4 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000069.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000069.dat']);">MD-00001-00000069.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 pairs with 4 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000070.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000070.wmd']);">MD-00001-00000070.wmd</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 32 with 4 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000070.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000070.dat']);">MD-00001-00000070.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000071.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000071.wmd']);">MD-00001-00000071.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000071.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000071.dat']);">MD-00001-00000071.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000072.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000072.wmd']);">MD-00001-00000072.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000072.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000072.dat']);">MD-00001-00000072.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000073.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000073.wmd']);">MD-00001-00000073.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000073.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000073.dat']);">MD-00001-00000073.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000074.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000074.wmd']);">MD-00001-00000074.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000074.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000074.dat']);">MD-00001-00000074.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000075.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000075.wmd']);">MD-00001-00000075.wmd</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 64 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000075.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000075.dat']);">MD-00001-00000075.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000076.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000076.wmd']);">MD-00001-00000076.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000076.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000076.dat']);">MD-00001-00000076.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000077.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000077.wmd']);">MD-00001-00000077.wmd</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 64 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000077.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000077.dat']);">MD-00001-00000077.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000078.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000078.wmd']);">MD-00001-00000078.wmd</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 64 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000078.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000078.dat']);">MD-00001-00000078.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000079.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000079.wmd']);">MD-00001-00000079.wmd</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 64 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000079.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000079.dat']);">MD-00001-00000079.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000080.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000080.wmd']);">MD-00001-00000080.wmd</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 64 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000080.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000080.dat']);">MD-00001-00000080.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000081.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000081.wmd']);">MD-00001-00000081.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000081.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000081.dat']);">MD-00001-00000081.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000082.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000082.wmd']);">MD-00001-00000082.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000082.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000082.dat']);">MD-00001-00000082.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000083.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000083.wmd']);">MD-00001-00000083.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000083.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000083.dat']);">MD-00001-00000083.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000084.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000084.wmd']);">MD-00001-00000084.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000084.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000084.dat']);">MD-00001-00000084.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000085.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000085.wmd']);">MD-00001-00000085.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000085.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000085.dat']);">MD-00001-00000085.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000086.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000086.wmd']);">MD-00001-00000086.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000086.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000086.dat']);">MD-00001-00000086.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000087.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000087.wmd']);">MD-00001-00000087.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000087.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000087.dat']);">MD-00001-00000087.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000088.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000088.wmd']);">MD-00001-00000088.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000088.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000088.dat']);">MD-00001-00000088.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000089.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000089.wmd']);">MD-00001-00000089.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000089.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000089.dat']);">MD-00001-00000089.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 3 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000090.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000090.wmd']);">MD-00001-00000090.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 3 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000090.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000090.dat']);">MD-00001-00000090.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000091.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000091.wmd']);">MD-00001-00000091.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000091.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000091.dat']);">MD-00001-00000091.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000092.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000092.wmd']);">MD-00001-00000092.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000092.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000092.dat']);">MD-00001-00000092.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000093.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000093.wmd']);">MD-00001-00000093.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000093.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000093.dat']);">MD-00001-00000093.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000094.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000094.wmd']);">MD-00001-00000094.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000094.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000094.dat']);">MD-00001-00000094.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000095.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000095.wmd']);">MD-00001-00000095.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000095.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000095.dat']);">MD-00001-00000095.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000096.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000096.wmd']);">MD-00001-00000096.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000096.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000096.dat']);">MD-00001-00000096.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000097.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000097.wmd']);">MD-00001-00000097.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000097.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000097.dat']);">MD-00001-00000097.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000098.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000098.wmd']);">MD-00001-00000098.wmd</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 64 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000098.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000098.dat']);">MD-00001-00000098.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000099.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000099.wmd']);">MD-00001-00000099.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000099.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000099.dat']);">MD-00001-00000099.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000100.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000100.wmd']);">MD-00001-00000100.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000100.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000100.dat']);">MD-00001-00000100.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 9 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000101.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000101.wmd']);">MD-00001-00000101.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 9 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000101.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000101.dat']);">MD-00001-00000101.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 9 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000102.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000102.wmd']);">MD-00001-00000102.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 9 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000102.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000102.dat']);">MD-00001-00000102.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 9 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000103.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000103.wmd']);">MD-00001-00000103.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 9 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000103.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000103.dat']);">MD-00001-00000103.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 9 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000104.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000104.wmd']);">MD-00001-00000104.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 9 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000104.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000104.dat']);">MD-00001-00000104.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 9 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000105.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000105.wmd']);">MD-00001-00000105.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 9 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000105.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000105.dat']);">MD-00001-00000105.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 9 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000106.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000106.wmd']);">MD-00001-00000106.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 9 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000106.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000106.dat']);">MD-00001-00000106.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 9 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000107.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000107.wmd']);">MD-00001-00000107.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 9 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000107.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000107.dat']);">MD-00001-00000107.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 9 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000108.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000108.wmd']);">MD-00001-00000108.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 9 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000108.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000108.dat']);">MD-00001-00000108.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 9 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000109.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000109.wmd']);">MD-00001-00000109.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 9 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000109.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000109.dat']);">MD-00001-00000109.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 64 pairs with 9 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000110.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000110.wmd']);">MD-00001-00000110.wmd</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 64 with 9 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000110.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000110.dat']);">MD-00001-00000110.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000111.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000111.wmd']);">MD-00001-00000111.wmd</a> </td><td> 36K</td></tr> 

 <tr><td> Kidney Matching - 128 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000111.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000111.dat']);">MD-00001-00000111.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000112.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000112.wmd']);">MD-00001-00000112.wmd</a> </td><td> 40K</td></tr> 

 <tr><td> Kidney Matching - 128 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000112.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000112.dat']);">MD-00001-00000112.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000113.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000113.wmd']);">MD-00001-00000113.wmd</a> </td><td> 32K</td></tr> 

 <tr><td> Kidney Matching - 128 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000113.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000113.dat']);">MD-00001-00000113.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000114.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000114.wmd']);">MD-00001-00000114.wmd</a> </td><td> 36K</td></tr> 

 <tr><td> Kidney Matching - 128 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000114.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000114.dat']);">MD-00001-00000114.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000115.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000115.wmd']);">MD-00001-00000115.wmd</a> </td><td> 36K</td></tr> 

 <tr><td> Kidney Matching - 128 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000115.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000115.dat']);">MD-00001-00000115.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000116.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000116.wmd']);">MD-00001-00000116.wmd</a> </td><td> 32K</td></tr> 

 <tr><td> Kidney Matching - 128 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000116.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000116.dat']);">MD-00001-00000116.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000117.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000117.wmd']);">MD-00001-00000117.wmd</a> </td><td> 32K</td></tr> 

 <tr><td> Kidney Matching - 128 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000117.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000117.dat']);">MD-00001-00000117.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000118.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000118.wmd']);">MD-00001-00000118.wmd</a> </td><td> 36K</td></tr> 

 <tr><td> Kidney Matching - 128 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000118.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000118.dat']);">MD-00001-00000118.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000119.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000119.wmd']);">MD-00001-00000119.wmd</a> </td><td> 36K</td></tr> 

 <tr><td> Kidney Matching - 128 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000119.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000119.dat']);">MD-00001-00000119.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000120.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000120.wmd']);">MD-00001-00000120.wmd</a> </td><td> 36K</td></tr> 

 <tr><td> Kidney Matching - 128 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000120.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000120.dat']);">MD-00001-00000120.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000121.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000121.wmd']);">MD-00001-00000121.wmd</a> </td><td> 44K</td></tr> 

 <tr><td> Kidney Matching - 128 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000121.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000121.dat']);">MD-00001-00000121.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000122.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000122.wmd']);">MD-00001-00000122.wmd</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 128 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000122.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000122.dat']);">MD-00001-00000122.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000123.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000123.wmd']);">MD-00001-00000123.wmd</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 128 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000123.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000123.dat']);">MD-00001-00000123.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000124.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000124.wmd']);">MD-00001-00000124.wmd</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 128 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000124.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000124.dat']);">MD-00001-00000124.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000125.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000125.wmd']);">MD-00001-00000125.wmd</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 128 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000125.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000125.dat']);">MD-00001-00000125.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000126.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000126.wmd']);">MD-00001-00000126.wmd</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 128 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000126.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000126.dat']);">MD-00001-00000126.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000127.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000127.wmd']);">MD-00001-00000127.wmd</a> </td><td> 44K</td></tr> 

 <tr><td> Kidney Matching - 128 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000127.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000127.dat']);">MD-00001-00000127.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000128.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000128.wmd']);">MD-00001-00000128.wmd</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 128 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000128.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000128.dat']);">MD-00001-00000128.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000129.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000129.wmd']);">MD-00001-00000129.wmd</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 128 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000129.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000129.dat']);">MD-00001-00000129.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 6 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000130.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000130.wmd']);">MD-00001-00000130.wmd</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 128 with 6 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000130.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000130.dat']);">MD-00001-00000130.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000131.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000131.wmd']);">MD-00001-00000131.wmd</a> </td><td> 56K</td></tr> 

 <tr><td> Kidney Matching - 128 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000131.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000131.dat']);">MD-00001-00000131.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000132.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000132.wmd']);">MD-00001-00000132.wmd</a> </td><td> 56K</td></tr> 

 <tr><td> Kidney Matching - 128 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000132.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000132.dat']);">MD-00001-00000132.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000133.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000133.wmd']);">MD-00001-00000133.wmd</a> </td><td> 56K</td></tr> 

 <tr><td> Kidney Matching - 128 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000133.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000133.dat']);">MD-00001-00000133.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000134.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000134.wmd']);">MD-00001-00000134.wmd</a> </td><td> 60K</td></tr> 

 <tr><td> Kidney Matching - 128 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000134.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000134.dat']);">MD-00001-00000134.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000135.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000135.wmd']);">MD-00001-00000135.wmd</a> </td><td> 56K</td></tr> 

 <tr><td> Kidney Matching - 128 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000135.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000135.dat']);">MD-00001-00000135.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000136.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000136.wmd']);">MD-00001-00000136.wmd</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 128 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000136.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000136.dat']);">MD-00001-00000136.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000137.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000137.wmd']);">MD-00001-00000137.wmd</a> </td><td> 56K</td></tr> 

 <tr><td> Kidney Matching - 128 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000137.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000137.dat']);">MD-00001-00000137.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000138.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000138.wmd']);">MD-00001-00000138.wmd</a> </td><td> 60K</td></tr> 

 <tr><td> Kidney Matching - 128 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000138.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000138.dat']);">MD-00001-00000138.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000139.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000139.wmd']);">MD-00001-00000139.wmd</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 128 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000139.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000139.dat']);">MD-00001-00000139.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000140.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000140.wmd']);">MD-00001-00000140.wmd</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 128 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000140.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000140.dat']);">MD-00001-00000140.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 19 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000141.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000141.wmd']);">MD-00001-00000141.wmd</a> </td><td> 68K</td></tr> 

 <tr><td> Kidney Matching - 128 with 19 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000141.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000141.dat']);">MD-00001-00000141.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 19 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000142.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000142.wmd']);">MD-00001-00000142.wmd</a> </td><td> 68K</td></tr> 

 <tr><td> Kidney Matching - 128 with 19 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000142.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000142.dat']);">MD-00001-00000142.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 19 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000143.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000143.wmd']);">MD-00001-00000143.wmd</a> </td><td> 72K</td></tr> 

 <tr><td> Kidney Matching - 128 with 19 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000143.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000143.dat']);">MD-00001-00000143.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 19 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000144.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000144.wmd']);">MD-00001-00000144.wmd</a> </td><td> 72K</td></tr> 

 <tr><td> Kidney Matching - 128 with 19 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000144.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000144.dat']);">MD-00001-00000144.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 19 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000145.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000145.wmd']);">MD-00001-00000145.wmd</a> </td><td> 68K</td></tr> 

 <tr><td> Kidney Matching - 128 with 19 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000145.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000145.dat']);">MD-00001-00000145.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 19 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000146.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000146.wmd']);">MD-00001-00000146.wmd</a> </td><td> 72K</td></tr> 

 <tr><td> Kidney Matching - 128 with 19 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000146.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000146.dat']);">MD-00001-00000146.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 19 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000147.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000147.wmd']);">MD-00001-00000147.wmd</a> </td><td> 72K</td></tr> 

 <tr><td> Kidney Matching - 128 with 19 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000147.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000147.dat']);">MD-00001-00000147.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 19 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000148.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000148.wmd']);">MD-00001-00000148.wmd</a> </td><td> 68K</td></tr> 

 <tr><td> Kidney Matching - 128 with 19 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000148.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000148.dat']);">MD-00001-00000148.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 19 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000149.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000149.wmd']);">MD-00001-00000149.wmd</a> </td><td> 72K</td></tr> 

 <tr><td> Kidney Matching - 128 with 19 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000149.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000149.dat']);">MD-00001-00000149.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 128 pairs with 19 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000150.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000150.wmd']);">MD-00001-00000150.wmd</a> </td><td> 72K</td></tr> 

 <tr><td> Kidney Matching - 128 with 19 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000150.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000150.dat']);">MD-00001-00000150.dat</a> </td><td> 4.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000151.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000151.wmd']);">MD-00001-00000151.wmd</a> </td><td> 152K</td></tr> 

 <tr><td> Kidney Matching - 256 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000151.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000151.dat']);">MD-00001-00000151.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000152.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000152.wmd']);">MD-00001-00000152.wmd</a> </td><td> 156K</td></tr> 

 <tr><td> Kidney Matching - 256 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000152.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000152.dat']);">MD-00001-00000152.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000153.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000153.wmd']);">MD-00001-00000153.wmd</a> </td><td> 144K</td></tr> 

 <tr><td> Kidney Matching - 256 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000153.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000153.dat']);">MD-00001-00000153.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000154.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000154.wmd']);">MD-00001-00000154.wmd</a> </td><td> 144K</td></tr> 

 <tr><td> Kidney Matching - 256 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000154.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000154.dat']);">MD-00001-00000154.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000155.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000155.wmd']);">MD-00001-00000155.wmd</a> </td><td> 168K</td></tr> 

 <tr><td> Kidney Matching - 256 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000155.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000155.dat']);">MD-00001-00000155.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000156.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000156.wmd']);">MD-00001-00000156.wmd</a> </td><td> 156K</td></tr> 

 <tr><td> Kidney Matching - 256 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000156.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000156.dat']);">MD-00001-00000156.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000157.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000157.wmd']);">MD-00001-00000157.wmd</a> </td><td> 152K</td></tr> 

 <tr><td> Kidney Matching - 256 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000157.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000157.dat']);">MD-00001-00000157.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000158.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000158.wmd']);">MD-00001-00000158.wmd</a> </td><td> 148K</td></tr> 

 <tr><td> Kidney Matching - 256 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000158.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000158.dat']);">MD-00001-00000158.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000159.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000159.wmd']);">MD-00001-00000159.wmd</a> </td><td> 140K</td></tr> 

 <tr><td> Kidney Matching - 256 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000159.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000159.dat']);">MD-00001-00000159.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000160.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000160.wmd']);">MD-00001-00000160.wmd</a> </td><td> 160K</td></tr> 

 <tr><td> Kidney Matching - 256 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000160.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000160.dat']);">MD-00001-00000160.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000161.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000161.wmd']);">MD-00001-00000161.wmd</a> </td><td> 192K</td></tr> 

 <tr><td> Kidney Matching - 256 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000161.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000161.dat']);">MD-00001-00000161.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000162.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000162.wmd']);">MD-00001-00000162.wmd</a> </td><td> 184K</td></tr> 

 <tr><td> Kidney Matching - 256 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000162.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000162.dat']);">MD-00001-00000162.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000163.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000163.wmd']);">MD-00001-00000163.wmd</a> </td><td> 200K</td></tr> 

 <tr><td> Kidney Matching - 256 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000163.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000163.dat']);">MD-00001-00000163.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000164.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000164.wmd']);">MD-00001-00000164.wmd</a> </td><td> 196K</td></tr> 

 <tr><td> Kidney Matching - 256 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000164.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000164.dat']);">MD-00001-00000164.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000165.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000165.wmd']);">MD-00001-00000165.wmd</a> </td><td> 204K</td></tr> 

 <tr><td> Kidney Matching - 256 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000165.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000165.dat']);">MD-00001-00000165.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000166.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000166.wmd']);">MD-00001-00000166.wmd</a> </td><td> 188K</td></tr> 

 <tr><td> Kidney Matching - 256 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000166.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000166.dat']);">MD-00001-00000166.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000167.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000167.wmd']);">MD-00001-00000167.wmd</a> </td><td> 188K</td></tr> 

 <tr><td> Kidney Matching - 256 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000167.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000167.dat']);">MD-00001-00000167.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000168.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000168.wmd']);">MD-00001-00000168.wmd</a> </td><td> 192K</td></tr> 

 <tr><td> Kidney Matching - 256 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000168.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000168.dat']);">MD-00001-00000168.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000169.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000169.wmd']);">MD-00001-00000169.wmd</a> </td><td> 200K</td></tr> 

 <tr><td> Kidney Matching - 256 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000169.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000169.dat']);">MD-00001-00000169.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 12 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000170.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000170.wmd']);">MD-00001-00000170.wmd</a> </td><td> 184K</td></tr> 

 <tr><td> Kidney Matching - 256 with 12 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000170.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000170.dat']);">MD-00001-00000170.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000171.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000171.wmd']);">MD-00001-00000171.wmd</a> </td><td> 228K</td></tr> 

 <tr><td> Kidney Matching - 256 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000171.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000171.dat']);">MD-00001-00000171.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000172.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000172.wmd']);">MD-00001-00000172.wmd</a> </td><td> 248K</td></tr> 

 <tr><td> Kidney Matching - 256 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000172.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000172.dat']);">MD-00001-00000172.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000173.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000173.wmd']);">MD-00001-00000173.wmd</a> </td><td> 236K</td></tr> 

 <tr><td> Kidney Matching - 256 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000173.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000173.dat']);">MD-00001-00000173.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000174.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000174.wmd']);">MD-00001-00000174.wmd</a> </td><td> 228K</td></tr> 

 <tr><td> Kidney Matching - 256 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000174.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000174.dat']);">MD-00001-00000174.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000175.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000175.wmd']);">MD-00001-00000175.wmd</a> </td><td> 240K</td></tr> 

 <tr><td> Kidney Matching - 256 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000175.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000175.dat']);">MD-00001-00000175.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000176.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000176.wmd']);">MD-00001-00000176.wmd</a> </td><td> 220K</td></tr> 

 <tr><td> Kidney Matching - 256 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000176.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000176.dat']);">MD-00001-00000176.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000177.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000177.wmd']);">MD-00001-00000177.wmd</a> </td><td> 232K</td></tr> 

 <tr><td> Kidney Matching - 256 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000177.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000177.dat']);">MD-00001-00000177.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000178.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000178.wmd']);">MD-00001-00000178.wmd</a> </td><td> 252K</td></tr> 

 <tr><td> Kidney Matching - 256 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000178.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000178.dat']);">MD-00001-00000178.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000179.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000179.wmd']);">MD-00001-00000179.wmd</a> </td><td> 236K</td></tr> 

 <tr><td> Kidney Matching - 256 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000179.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000179.dat']);">MD-00001-00000179.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000180.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000180.wmd']);">MD-00001-00000180.wmd</a> </td><td> 232K</td></tr> 

 <tr><td> Kidney Matching - 256 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000180.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000180.dat']);">MD-00001-00000180.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 38 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000181.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000181.wmd']);">MD-00001-00000181.wmd</a> </td><td> 280K</td></tr> 

 <tr><td> Kidney Matching - 256 with 38 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000181.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000181.dat']);">MD-00001-00000181.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 38 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000182.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000182.wmd']);">MD-00001-00000182.wmd</a> </td><td> 288K</td></tr> 

 <tr><td> Kidney Matching - 256 with 38 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000182.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000182.dat']);">MD-00001-00000182.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 38 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000183.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000183.wmd']);">MD-00001-00000183.wmd</a> </td><td> 296K</td></tr> 

 <tr><td> Kidney Matching - 256 with 38 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000183.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000183.dat']);">MD-00001-00000183.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 38 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000184.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000184.wmd']);">MD-00001-00000184.wmd</a> </td><td> 284K</td></tr> 

 <tr><td> Kidney Matching - 256 with 38 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000184.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000184.dat']);">MD-00001-00000184.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 38 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000185.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000185.wmd']);">MD-00001-00000185.wmd</a> </td><td> 276K</td></tr> 

 <tr><td> Kidney Matching - 256 with 38 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000185.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000185.dat']);">MD-00001-00000185.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 38 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000186.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000186.wmd']);">MD-00001-00000186.wmd</a> </td><td> 280K</td></tr> 

 <tr><td> Kidney Matching - 256 with 38 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000186.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000186.dat']);">MD-00001-00000186.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 38 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000187.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000187.wmd']);">MD-00001-00000187.wmd</a> </td><td> 288K</td></tr> 

 <tr><td> Kidney Matching - 256 with 38 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000187.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000187.dat']);">MD-00001-00000187.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 38 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000188.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000188.wmd']);">MD-00001-00000188.wmd</a> </td><td> 280K</td></tr> 

 <tr><td> Kidney Matching - 256 with 38 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000188.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000188.dat']);">MD-00001-00000188.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 38 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000189.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000189.wmd']);">MD-00001-00000189.wmd</a> </td><td> 288K</td></tr> 

 <tr><td> Kidney Matching - 256 with 38 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000189.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000189.dat']);">MD-00001-00000189.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 256 pairs with 38 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000190.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000190.wmd']);">MD-00001-00000190.wmd</a> </td><td> 304K</td></tr> 

 <tr><td> Kidney Matching - 256 with 38 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000190.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000190.dat']);">MD-00001-00000190.dat</a> </td><td> 8.0K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000191.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000191.wmd']);">MD-00001-00000191.wmd</a> </td><td> 668K</td></tr> 

 <tr><td> Kidney Matching - 512 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000191.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000191.dat']);">MD-00001-00000191.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000192.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000192.wmd']);">MD-00001-00000192.wmd</a> </td><td> 684K</td></tr> 

 <tr><td> Kidney Matching - 512 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000192.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000192.dat']);">MD-00001-00000192.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000193.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000193.wmd']);">MD-00001-00000193.wmd</a> </td><td> 604K</td></tr> 

 <tr><td> Kidney Matching - 512 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000193.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000193.dat']);">MD-00001-00000193.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000194.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000194.wmd']);">MD-00001-00000194.wmd</a> </td><td> 644K</td></tr> 

 <tr><td> Kidney Matching - 512 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000194.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000194.dat']);">MD-00001-00000194.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000195.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000195.wmd']);">MD-00001-00000195.wmd</a> </td><td> 644K</td></tr> 

 <tr><td> Kidney Matching - 512 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000195.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000195.dat']);">MD-00001-00000195.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000196.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000196.wmd']);">MD-00001-00000196.wmd</a> </td><td> 612K</td></tr> 

 <tr><td> Kidney Matching - 512 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000196.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000196.dat']);">MD-00001-00000196.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000197.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000197.wmd']);">MD-00001-00000197.wmd</a> </td><td> 636K</td></tr> 

 <tr><td> Kidney Matching - 512 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000197.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000197.dat']);">MD-00001-00000197.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000198.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000198.wmd']);">MD-00001-00000198.wmd</a> </td><td> 624K</td></tr> 

 <tr><td> Kidney Matching - 512 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000198.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000198.dat']);">MD-00001-00000198.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000199.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000199.wmd']);">MD-00001-00000199.wmd</a> </td><td> 616K</td></tr> 

 <tr><td> Kidney Matching - 512 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000199.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000199.dat']);">MD-00001-00000199.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000200.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000200.wmd']);">MD-00001-00000200.wmd</a> </td><td> 600K</td></tr> 

 <tr><td> Kidney Matching - 512 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000200.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000200.dat']);">MD-00001-00000200.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000201.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000201.wmd']);">MD-00001-00000201.wmd</a> </td><td> 832K</td></tr> 

 <tr><td> Kidney Matching - 512 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000201.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000201.dat']);">MD-00001-00000201.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000202.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000202.wmd']);">MD-00001-00000202.wmd</a> </td><td> 832K</td></tr> 

 <tr><td> Kidney Matching - 512 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000202.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000202.dat']);">MD-00001-00000202.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000203.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000203.wmd']);">MD-00001-00000203.wmd</a> </td><td> 816K</td></tr> 

 <tr><td> Kidney Matching - 512 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000203.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000203.dat']);">MD-00001-00000203.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000204.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000204.wmd']);">MD-00001-00000204.wmd</a> </td><td> 796K</td></tr> 

 <tr><td> Kidney Matching - 512 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000204.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000204.dat']);">MD-00001-00000204.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000205.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000205.wmd']);">MD-00001-00000205.wmd</a> </td><td> 784K</td></tr> 

 <tr><td> Kidney Matching - 512 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000205.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000205.dat']);">MD-00001-00000205.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000206.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000206.wmd']);">MD-00001-00000206.wmd</a> </td><td> 780K</td></tr> 

 <tr><td> Kidney Matching - 512 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000206.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000206.dat']);">MD-00001-00000206.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000207.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000207.wmd']);">MD-00001-00000207.wmd</a> </td><td> 792K</td></tr> 

 <tr><td> Kidney Matching - 512 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000207.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000207.dat']);">MD-00001-00000207.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000208.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000208.wmd']);">MD-00001-00000208.wmd</a> </td><td> 752K</td></tr> 

 <tr><td> Kidney Matching - 512 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000208.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000208.dat']);">MD-00001-00000208.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000209.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000209.wmd']);">MD-00001-00000209.wmd</a> </td><td> 792K</td></tr> 

 <tr><td> Kidney Matching - 512 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000209.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000209.dat']);">MD-00001-00000209.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 25 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000210.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000210.wmd']);">MD-00001-00000210.wmd</a> </td><td> 780K</td></tr> 

 <tr><td> Kidney Matching - 512 with 25 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000210.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000210.dat']);">MD-00001-00000210.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000211.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000211.wmd']);">MD-00001-00000211.wmd</a> </td><td> 984K</td></tr> 

 <tr><td> Kidney Matching - 512 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000211.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000211.dat']);">MD-00001-00000211.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000212.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000212.wmd']);">MD-00001-00000212.wmd</a> </td><td> 956K</td></tr> 

 <tr><td> Kidney Matching - 512 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000212.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000212.dat']);">MD-00001-00000212.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000213.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000213.wmd']);">MD-00001-00000213.wmd</a> </td><td> 980K</td></tr> 

 <tr><td> Kidney Matching - 512 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000213.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000213.dat']);">MD-00001-00000213.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000214.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000214.wmd']);">MD-00001-00000214.wmd</a> </td><td> 944K</td></tr> 

 <tr><td> Kidney Matching - 512 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000214.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000214.dat']);">MD-00001-00000214.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000215.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000215.wmd']);">MD-00001-00000215.wmd</a> </td><td> 1004K</td></tr> 

 <tr><td> Kidney Matching - 512 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000215.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000215.dat']);">MD-00001-00000215.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000216.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000216.wmd']);">MD-00001-00000216.wmd</a> </td><td> 992K</td></tr> 

 <tr><td> Kidney Matching - 512 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000216.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000216.dat']);">MD-00001-00000216.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000217.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000217.wmd']);">MD-00001-00000217.wmd</a> </td><td> 992K</td></tr> 

 <tr><td> Kidney Matching - 512 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000217.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000217.dat']);">MD-00001-00000217.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000218.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000218.wmd']);">MD-00001-00000218.wmd</a> </td><td> 1.0M</td></tr> 

 <tr><td> Kidney Matching - 512 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000218.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000218.dat']);">MD-00001-00000218.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000219.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000219.wmd']);">MD-00001-00000219.wmd</a> </td><td> 1004K</td></tr> 

 <tr><td> Kidney Matching - 512 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000219.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000219.dat']);">MD-00001-00000219.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000220.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000220.wmd']);">MD-00001-00000220.wmd</a> </td><td> 964K</td></tr> 

 <tr><td> Kidney Matching - 512 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000220.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000220.dat']);">MD-00001-00000220.dat</a> </td><td> 12K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 76 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000221.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000221.wmd']);">MD-00001-00000221.wmd</a> </td><td> 1.1M</td></tr> 

 <tr><td> Kidney Matching - 512 with 76 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000221.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000221.dat']);">MD-00001-00000221.dat</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 76 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000222.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000222.wmd']);">MD-00001-00000222.wmd</a> </td><td> 1.1M</td></tr> 

 <tr><td> Kidney Matching - 512 with 76 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000222.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000222.dat']);">MD-00001-00000222.dat</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 76 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000223.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000223.wmd']);">MD-00001-00000223.wmd</a> </td><td> 1.1M</td></tr> 

 <tr><td> Kidney Matching - 512 with 76 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000223.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000223.dat']);">MD-00001-00000223.dat</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 76 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000224.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000224.wmd']);">MD-00001-00000224.wmd</a> </td><td> 1.2M</td></tr> 

 <tr><td> Kidney Matching - 512 with 76 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000224.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000224.dat']);">MD-00001-00000224.dat</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 76 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000225.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000225.wmd']);">MD-00001-00000225.wmd</a> </td><td> 1.1M</td></tr> 

 <tr><td> Kidney Matching - 512 with 76 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000225.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000225.dat']);">MD-00001-00000225.dat</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 76 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000226.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000226.wmd']);">MD-00001-00000226.wmd</a> </td><td> 1.1M</td></tr> 

 <tr><td> Kidney Matching - 512 with 76 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000226.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000226.dat']);">MD-00001-00000226.dat</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 76 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000227.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000227.wmd']);">MD-00001-00000227.wmd</a> </td><td> 1.1M</td></tr> 

 <tr><td> Kidney Matching - 512 with 76 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000227.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000227.dat']);">MD-00001-00000227.dat</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 76 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000228.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000228.wmd']);">MD-00001-00000228.wmd</a> </td><td> 1.1M</td></tr> 

 <tr><td> Kidney Matching - 512 with 76 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000228.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000228.dat']);">MD-00001-00000228.dat</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 76 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000229.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000229.wmd']);">MD-00001-00000229.wmd</a> </td><td> 1.2M</td></tr> 

 <tr><td> Kidney Matching - 512 with 76 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000229.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000229.dat']);">MD-00001-00000229.dat</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 512 pairs with 76 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000230.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000230.wmd']);">MD-00001-00000230.wmd</a> </td><td> 1.2M</td></tr> 

 <tr><td> Kidney Matching - 512 with 76 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000230.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000230.dat']);">MD-00001-00000230.dat</a> </td><td> 16K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000231.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000231.wmd']);">MD-00001-00000231.wmd</a> </td><td> 2.6M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000231.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000231.dat']);">MD-00001-00000231.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000232.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000232.wmd']);">MD-00001-00000232.wmd</a> </td><td> 2.5M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000232.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000232.dat']);">MD-00001-00000232.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000233.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000233.wmd']);">MD-00001-00000233.wmd</a> </td><td> 2.5M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000233.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000233.dat']);">MD-00001-00000233.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000234.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000234.wmd']);">MD-00001-00000234.wmd</a> </td><td> 2.4M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000234.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000234.dat']);">MD-00001-00000234.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000235.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000235.wmd']);">MD-00001-00000235.wmd</a> </td><td> 2.5M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000235.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000235.dat']);">MD-00001-00000235.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000236.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000236.wmd']);">MD-00001-00000236.wmd</a> </td><td> 2.5M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000236.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000236.dat']);">MD-00001-00000236.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000237.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000237.wmd']);">MD-00001-00000237.wmd</a> </td><td> 2.4M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000237.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000237.dat']);">MD-00001-00000237.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000238.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000238.wmd']);">MD-00001-00000238.wmd</a> </td><td> 2.5M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000238.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000238.dat']);">MD-00001-00000238.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000239.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000239.wmd']);">MD-00001-00000239.wmd</a> </td><td> 2.6M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000239.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000239.dat']);">MD-00001-00000239.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000240.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000240.wmd']);">MD-00001-00000240.wmd</a> </td><td> 2.4M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000240.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000240.dat']);">MD-00001-00000240.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000241.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000241.wmd']);">MD-00001-00000241.wmd</a> </td><td> 3.3M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000241.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000241.dat']);">MD-00001-00000241.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000242.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000242.wmd']);">MD-00001-00000242.wmd</a> </td><td> 3.1M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000242.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000242.dat']);">MD-00001-00000242.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000243.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000243.wmd']);">MD-00001-00000243.wmd</a> </td><td> 3.3M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000243.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000243.dat']);">MD-00001-00000243.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000244.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000244.wmd']);">MD-00001-00000244.wmd</a> </td><td> 3.3M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000244.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000244.dat']);">MD-00001-00000244.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000245.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000245.wmd']);">MD-00001-00000245.wmd</a> </td><td> 3.3M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000245.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000245.dat']);">MD-00001-00000245.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000246.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000246.wmd']);">MD-00001-00000246.wmd</a> </td><td> 3.3M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000246.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000246.dat']);">MD-00001-00000246.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000247.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000247.wmd']);">MD-00001-00000247.wmd</a> </td><td> 3.2M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000247.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000247.dat']);">MD-00001-00000247.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000248.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000248.wmd']);">MD-00001-00000248.wmd</a> </td><td> 3.2M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000248.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000248.dat']);">MD-00001-00000248.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000249.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000249.wmd']);">MD-00001-00000249.wmd</a> </td><td> 3.3M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000249.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000249.dat']);">MD-00001-00000249.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 51 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000250.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000250.wmd']);">MD-00001-00000250.wmd</a> </td><td> 3.3M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 51 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000250.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000250.dat']);">MD-00001-00000250.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000251.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000251.wmd']);">MD-00001-00000251.wmd</a> </td><td> 4.1M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000251.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000251.dat']);">MD-00001-00000251.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000252.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000252.wmd']);">MD-00001-00000252.wmd</a> </td><td> 4.1M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000252.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000252.dat']);">MD-00001-00000252.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000253.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000253.wmd']);">MD-00001-00000253.wmd</a> </td><td> 3.9M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000253.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000253.dat']);">MD-00001-00000253.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000254.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000254.wmd']);">MD-00001-00000254.wmd</a> </td><td> 4.1M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000254.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000254.dat']);">MD-00001-00000254.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000255.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000255.wmd']);">MD-00001-00000255.wmd</a> </td><td> 4.1M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000255.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000255.dat']);">MD-00001-00000255.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000256.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000256.wmd']);">MD-00001-00000256.wmd</a> </td><td> 4.2M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000256.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000256.dat']);">MD-00001-00000256.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000257.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000257.wmd']);">MD-00001-00000257.wmd</a> </td><td> 4.2M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000257.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000257.dat']);">MD-00001-00000257.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000258.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000258.wmd']);">MD-00001-00000258.wmd</a> </td><td> 4.1M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000258.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000258.dat']);">MD-00001-00000258.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000259.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000259.wmd']);">MD-00001-00000259.wmd</a> </td><td> 4.1M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000259.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000259.dat']);">MD-00001-00000259.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000260.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000260.wmd']);">MD-00001-00000260.wmd</a> </td><td> 4.0M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000260.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000260.dat']);">MD-00001-00000260.dat</a> </td><td> 24K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 153 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000261.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000261.wmd']);">MD-00001-00000261.wmd</a> </td><td> 5.0M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 153 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000261.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000261.dat']);">MD-00001-00000261.dat</a> </td><td> 28K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 153 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000262.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000262.wmd']);">MD-00001-00000262.wmd</a> </td><td> 4.8M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 153 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000262.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000262.dat']);">MD-00001-00000262.dat</a> </td><td> 28K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 153 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000263.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000263.wmd']);">MD-00001-00000263.wmd</a> </td><td> 4.9M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 153 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000263.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000263.dat']);">MD-00001-00000263.dat</a> </td><td> 28K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 153 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000264.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000264.wmd']);">MD-00001-00000264.wmd</a> </td><td> 5.0M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 153 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000264.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000264.dat']);">MD-00001-00000264.dat</a> </td><td> 28K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 153 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000265.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000265.wmd']);">MD-00001-00000265.wmd</a> </td><td> 4.8M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 153 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000265.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000265.dat']);">MD-00001-00000265.dat</a> </td><td> 28K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 153 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000266.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000266.wmd']);">MD-00001-00000266.wmd</a> </td><td> 4.8M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 153 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000266.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000266.dat']);">MD-00001-00000266.dat</a> </td><td> 28K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 153 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000267.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000267.wmd']);">MD-00001-00000267.wmd</a> </td><td> 4.8M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 153 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000267.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000267.dat']);">MD-00001-00000267.dat</a> </td><td> 28K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 153 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000268.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000268.wmd']);">MD-00001-00000268.wmd</a> </td><td> 4.9M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 153 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000268.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000268.dat']);">MD-00001-00000268.dat</a> </td><td> 28K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 153 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000269.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000269.wmd']);">MD-00001-00000269.wmd</a> </td><td> 4.9M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 153 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000269.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000269.dat']);">MD-00001-00000269.dat</a> </td><td> 28K</td></tr> 

 <tr><td> Kidney Matching - 1024 pairs with 153 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000270.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000270.wmd']);">MD-00001-00000270.wmd</a> </td><td> 4.8M</td></tr> 

 <tr><td> Kidney Matching - 1024 with 153 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000270.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000270.dat']);">MD-00001-00000270.dat</a> </td><td> 28K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000271.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000271.wmd']);">MD-00001-00000271.wmd</a> </td><td> 11M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000271.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000271.dat']);">MD-00001-00000271.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000272.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000272.wmd']);">MD-00001-00000272.wmd</a> </td><td> 11M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000272.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000272.dat']);">MD-00001-00000272.dat</a> </td><td> 44K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000273.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000273.wmd']);">MD-00001-00000273.wmd</a> </td><td> 10M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000273.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000273.dat']);">MD-00001-00000273.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000274.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000274.wmd']);">MD-00001-00000274.wmd</a> </td><td> 10M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000274.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000274.dat']);">MD-00001-00000274.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000275.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000275.wmd']);">MD-00001-00000275.wmd</a> </td><td> 11M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000275.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000275.dat']);">MD-00001-00000275.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000276.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000276.wmd']);">MD-00001-00000276.wmd</a> </td><td> 11M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000276.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000276.dat']);">MD-00001-00000276.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000277.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000277.wmd']);">MD-00001-00000277.wmd</a> </td><td> 11M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000277.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000277.dat']);">MD-00001-00000277.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000278.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000278.wmd']);">MD-00001-00000278.wmd</a> </td><td> 11M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000278.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000278.dat']);">MD-00001-00000278.dat</a> </td><td> 44K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000279.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000279.wmd']);">MD-00001-00000279.wmd</a> </td><td> 11M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000279.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000279.dat']);">MD-00001-00000279.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 0 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000280.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000280.wmd']);">MD-00001-00000280.wmd</a> </td><td> 11M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 0 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000280.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000280.dat']);">MD-00001-00000280.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000281.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000281.wmd']);">MD-00001-00000281.wmd</a> </td><td> 14M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000281.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000281.dat']);">MD-00001-00000281.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000282.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000282.wmd']);">MD-00001-00000282.wmd</a> </td><td> 14M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000282.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000282.dat']);">MD-00001-00000282.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000283.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000283.wmd']);">MD-00001-00000283.wmd</a> </td><td> 14M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000283.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000283.dat']);">MD-00001-00000283.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000284.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000284.wmd']);">MD-00001-00000284.wmd</a> </td><td> 14M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000284.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000284.dat']);">MD-00001-00000284.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000285.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000285.wmd']);">MD-00001-00000285.wmd</a> </td><td> 14M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000285.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000285.dat']);">MD-00001-00000285.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000286.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000286.wmd']);">MD-00001-00000286.wmd</a> </td><td> 14M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000286.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000286.dat']);">MD-00001-00000286.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000287.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000287.wmd']);">MD-00001-00000287.wmd</a> </td><td> 15M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000287.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000287.dat']);">MD-00001-00000287.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000288.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000288.wmd']);">MD-00001-00000288.wmd</a> </td><td> 14M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000288.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000288.dat']);">MD-00001-00000288.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000289.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000289.wmd']);">MD-00001-00000289.wmd</a> </td><td> 14M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000289.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000289.dat']);">MD-00001-00000289.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 102 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000290.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000290.wmd']);">MD-00001-00000290.wmd</a> </td><td> 14M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 102 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000290.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000290.dat']);">MD-00001-00000290.dat</a> </td><td> 48K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 204 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000291.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000291.wmd']);">MD-00001-00000291.wmd</a> </td><td> 18M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 204 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000291.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000291.dat']);">MD-00001-00000291.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 204 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000292.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000292.wmd']);">MD-00001-00000292.wmd</a> </td><td> 18M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 204 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000292.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000292.dat']);">MD-00001-00000292.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 204 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000293.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000293.wmd']);">MD-00001-00000293.wmd</a> </td><td> 18M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 204 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000293.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000293.dat']);">MD-00001-00000293.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 204 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000294.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000294.wmd']);">MD-00001-00000294.wmd</a> </td><td> 18M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 204 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000294.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000294.dat']);">MD-00001-00000294.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 204 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000295.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000295.wmd']);">MD-00001-00000295.wmd</a> </td><td> 18M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 204 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000295.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000295.dat']);">MD-00001-00000295.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 204 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000296.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000296.wmd']);">MD-00001-00000296.wmd</a> </td><td> 18M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 204 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000296.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000296.dat']);">MD-00001-00000296.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 204 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000297.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000297.wmd']);">MD-00001-00000297.wmd</a> </td><td> 17M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 204 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000297.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000297.dat']);">MD-00001-00000297.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 204 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000298.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000298.wmd']);">MD-00001-00000298.wmd</a> </td><td> 17M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 204 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000298.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000298.dat']);">MD-00001-00000298.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 204 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000299.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000299.wmd']);">MD-00001-00000299.wmd</a> </td><td> 18M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 204 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000299.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000299.dat']);">MD-00001-00000299.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 204 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000300.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000300.wmd']);">MD-00001-00000300.wmd</a> </td><td> 18M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 204 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000300.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000300.dat']);">MD-00001-00000300.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 307 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000301.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000301.wmd']);">MD-00001-00000301.wmd</a> </td><td> 21M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 307 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000301.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000301.dat']);">MD-00001-00000301.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 307 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000302.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000302.wmd']);">MD-00001-00000302.wmd</a> </td><td> 21M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 307 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000302.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000302.dat']);">MD-00001-00000302.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 307 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000303.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000303.wmd']);">MD-00001-00000303.wmd</a> </td><td> 21M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 307 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000303.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000303.dat']);">MD-00001-00000303.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 307 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000304.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000304.wmd']);">MD-00001-00000304.wmd</a> </td><td> 21M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 307 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000304.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000304.dat']);">MD-00001-00000304.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 307 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000305.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000305.wmd']);">MD-00001-00000305.wmd</a> </td><td> 21M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 307 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000305.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000305.dat']);">MD-00001-00000305.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 307 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000306.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000306.wmd']);">MD-00001-00000306.wmd</a> </td><td> 21M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 307 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000306.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000306.dat']);">MD-00001-00000306.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 307 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000307.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000307.wmd']);">MD-00001-00000307.wmd</a> </td><td> 21M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 307 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000307.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000307.dat']);">MD-00001-00000307.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 307 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000308.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000308.wmd']);">MD-00001-00000308.wmd</a> </td><td> 21M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 307 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000308.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000308.dat']);">MD-00001-00000308.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 307 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000309.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000309.wmd']);">MD-00001-00000309.wmd</a> </td><td> 21M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 307 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000309.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000309.dat']);">MD-00001-00000309.dat</a> </td><td> 52K</td></tr> 

 <tr><td> Kidney Matching - 2048 pairs with 307 alturists </td><td> <a href="/data/format.php#wmd">Weighted Matching Data</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000310.wmd" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000310.wmd']);">MD-00001-00000310.wmd</a> </td><td> 21M</td></tr> 

 <tr><td> Kidney Matching - 2048 with 307 </td><td> <a href="/data/format.php#data">Extra Data File (CSV)</a></td> <td> Synthetic </td> <td> <a href="/data/matching/kidney/MD-00001-00000310.dat" onClick="_gaq.push(['_trackEvent', 'Download', 'individual', 'MD-00001-00000310.dat']);">MD-00001-00000310.dat</a> </td><td> 52K</td></tr> 


		</table>
		</div>


			<!-- Break and Footer -->
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/foot.php'); ?>	
		</div>
	</body>
	</html>
	