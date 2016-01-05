
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/head.php'); ?>
	</head>

	<body>
		<div class="container_12">
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/menu.php'); ?>
	
			<div class="grid_7">
				<h5> Data Sets</h5>
				<p> Our data is separated into four categories:
				<ul>
					<li> <a href="/data/index.php#ed">Election Data (ED):</a> Contains data that either was an election, or can be interpreted as election data. We have data from actual elections, movie rankings, and competitor rankings from various sporting competitions.</li>
					<li><a href="/data/index.php#md">Matching Data (MD):</a> Contains data where agents express preference over items (and vise-verse) in order to pair agents to items.  Currently, we only have synthetic data from organ and kidney matching in the USA.</li>
					<li><a href="/data/index.php#cd">Rating and Combinatorial Preference Data (CD):</a> Contains data from a broad set of domains that can be viewed as combinatorial and/or multidimensional including multi-attribute ratings, CP-nets, and GAI-nets. </li>
					<li><a href="/data/index.php#od">Optimization Data (OD):</a> Contain data that is typically associated with optimization problems including SAT and CSP problems.</li> 
				</p>

				<p> Each data file we host has a unique identifier in the format [XX]-#####-########.EXT.  These numbers are broken down as:
				<ul>
					<li>XX is a 2 letter category code from above. </li> 
					<li>##### is a 5 digit Series Code which specifies the source of the data. </li>
					<li>######## is an 8 digit Element Number for each individual file of a series.
					<li>EXT which is a unique <a href="./data/format.php">file extension</a> describing the type of data in the file.
				</ul>
				</p>

				<p> Each data file is labeled as either Original, Induced, or Imbued.
				<ul>
					<li><b>Original:</b> Data that has only been converted into our formatting.</li>
					<li><b>Induced:</b> Data that has been induced from another context.  For example, computing a pairwise relation form a set of strict total orders.  No assumptions have been made to create these files, just a change in the expression language.</li> 
					<li><b>Imbued:</b> Data that has been imbued with extra information.  For example, extending an incomplete partial order by placing all unranked candidates tied at the end.</li>
				</ul>
				We encourage you to understand some of the impacts that making these assumptions can have, see, e.g. <a href="http://scholar.google.com/scholar?as_q=A+Behavioral+Perspective+on+Social+Choice">A Behavioral Perspective on Social Choice.</a>  Anna Popova, Michel Regenwetter, and Nicholas Mattei.  Annals of Mathematics and Artificial Intelligence 68(1-3), 2013. 
				</p>
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
	


					<!-- Generated Content -->
					<div class="grid_8">

<h4 style=text-align:center> Election Data</h4><a name = "ed"></a>
<div class="news_box"><h6><a href=" /data/election/irish/ "> ED-00001: Irish Election Data</a></h6><p>The Dublin North, West, and Meath data sets contain a complete record of votes for two separate elections held in Dublin, Ireland in 2002.  The votes were posted <a href="http://www.dublincountyreturningofficer.com/">online</a> but have since been removed.</p></div>

<div class="news_box"><h6><a href=" /data/election/debian/ "> ED-00002: Debian Project Data</a></h6><p>The Debian Project Leader Elections are held yearly with most of the ballots available <a href="http://www.debian.org/vote/">online.</a></p></div>

<div class="news_box"><h6><a href=" /data/election/nasa/ "> ED-00003: Mariner Path Selection</a></h6><p>The Mariner Trajectory Selection Data Set is the votes cast by the various science teams responsible for selecting the trajectory for the 1977 interplanetary satellite.  There were a total of 10 science teams voting over 32 possible paths.  All these votes are complete but indifference was allowed between some of the objects.</p></div>

<div class="news_box"><h6><a href=" /data/election/netflix/ "> ED-00004: Netflix Prize Data</a></h6><p>The <a href="http://www.netflixprize.com/">Netflix Prize</a> was a competition devised by Netflix to improve the accuracy of its recommendation system.  To facilitate this Netflix released real ratings about movies from the users of the system.  Any set of movies can be transformed into an election via a process outlined by Mattei, Forshee, and Goldsmith (reference below).</p></div>

<div class="news_box"><h6><a href=" /data/election/burlington/ "> ED-00005: Burlington Election Data</a></h6><p>The <a href="http://rangevoting.org/Burlington.html">2009 Burlington, Vermont Mayoral Election Data is posted online at www.rangevoting.org.</a>  It contains a number of interesting features when evaluated with the IRV method.  Namely, the majority candidate in the first round does not emerge as the winner of the election.</p></div>

<div class="news_box"><h6><a href=" /data/election/skate/ "> ED-00006: Skate Data</a></h6><p>This dataset contains figure skating rankings from various competitions during the 1998 season including the World Juniors, World Championships, and the Olympics.  These data sets generally have 10-25 candidates (skaters) and 8-10 judges (voters).</p></div>

<div class="news_box"><h6><a href=" /data/election/ers/ "> ED-00007: Electorial Reform Society (ERS) Data</a></h6><p>This dataset contains the results of 86 separate elections of various elections held by non-profit orginizations, trade unions, and professional orginizations.  They were originally dontated by <a href="http://www.econ.vt.edu/faculty/facultybios/tidemanbio.htm">Nicolaus Tideman</a> who secured NSF funding to have the ballots tabulated.  The ballots are from elections held under various voting rules requiring incomplete strict orders.  The tabulated results were initially collected by the Electoral Reform Society in the UK in order to support the adoption of STV and other range voting methods.</p></div>

<div class="news_box"><h6><a href=" /data/election/glasgow/ "> ED-00008: Glasgow City Council</a></h6><p>This data set contains the results of the 2007 Glasgow City Council elections, seperated by Ward.  There are 21 wards, each with different candidates and voters.  These files report the results of all the Ward level elections which were origionally held under STV.  In this data set there is a maximum of 13 candidates and a minimum of 8 candidates.  The maximum number of voters is 12,744 and the minimum is 5,199.</p></div>

<div class="news_box"><h6><a href=" /data/election/agh/ "> ED-00009: AGH Course Selection</a></h6><p>This dataset contains the results of surveying students at <a href="http://www.agh.edu.pl/en/">AGU University of Science and Technology</a> about their course preferences.  Each student provided a rank ordering over all the courses with no missing elements.  There are 9 courses to choose from in 2003 and 7 in 2004.</p></div>

<div class="news_box"><h6><a href=" /data/election/f1/ "> ED-00010: F1 and Skiing</a></h6><p>This dataset contains the results of F1 Racing competitions between 1961 and 2008 as well as Cross Country Skiing and Ski Jumping results from the 2006-2009 World Championships.  This data is provided by <a href="http://robert.bredereck.info/">Robert Bredereck</a> at TU:Berlin.  Robert provides tools to compute Kemeny rankings on this data at his <a href="http://fpt.akt.tu-berlin.de/kconsens/README">website at TU Berlin</a>.</p></div>

<div class="news_box"><h6><a href=" /data/election/web/ "> ED-00011: Web Search</a></h6><p>This dataset contains the results of comparing websearches across Bing, Google, Yahoo, and Ask.  This data is provided by <a href="http://robert.bredereck.info/">Robert Bredereck</a> at TU:Berlin.  Robert provides tools to compute Kemeny rankings on this data at his <a href="http://fpt.akt.tu-berlin.de/kconsens/README">website at TU Berlin</a>.</p></div>

<div class="news_box"><h6><a href=" /data/election/shirt/ "> ED-00012: T Shirt</a></h6><p>This dataset contains complete rank orderings of T-Shirt designs voted on by members of the <a href="http://http://nicta.com.au/research/optimisation">Optimization Research Group</a> at <a href="http://www.nicta.com.au/">NICTA</a>.  There are 11 designs (candidates) and 30 votes about these deisgns.  Voters were required to submit complete strict orders.</p></div>

<div class="news_box"><h6><a href=" /data/election/anes/ "> ED-00013: American National Election Studies Data</a></h6><p>This dataset contains the results of the <a href="http://www.electionstudies.org/">American National Election Studies</a> thermometer polls taken between 1970 and 2008 (not including 2006).  The data presented here was derrived by datasets assembled by <a href="http://www.econ.vt.edu/faculty/facultybios/tidemanbio.htm">Nicolaus Tideman</a> and <a href="http://www2.binghamton.edu/economics/people/plassmann.html">Florenz Plassmann</a>.</p></div>

<div class="news_box"><h6><a href=" /data/election/sushi/ "> ED-00014: Sushi Data</a></h6><p>This dataset contains the results of a series of surveys conducted by <a href="http://www.kamishima.net/sushi/">Toshihiro Kamishima</a> asking 5000 individuals for their preferences about various kinds of sushi.  There are three different datasets that were elicited in different ways: <ul><li> <b>Element Series 00000001</b> contains 10 complete strict rank orders of 10 different kinds of sushi.</li> <li> <b>Element Series 00000002</b> contains individual's strict rank ordering of 100 different kinds of sushi (candidates). </li> <li> <b>Element Series 00000003</b> contains individual's scoring of sushi items on a scale of 0-4, with repeats allowed.</li> </ul>  This dataset contains 14 files in total including soc, soi, toi, and toc files.<br><br> <b>Note that the dataset was incorrectly converted, it has been fixed as of Jan 2016, please re-download.</b></p></div>

<div class="news_box"><h6><a href=" /data/election/cleanweb/ "> ED-00015: Clean Web Search</a></h6><p>This dataset contains the results of comparing websearches across Bing, Google, Yahoo, and Ask.  This data is provided by <a href="http://robert.bredereck.info/">Robert Bredereck</a> at TU:Berlin.  Robert provides tools to compute Kemeny rankings on this data at his <a href="http://fpt.akt.tu-berlin.de/kconsens/README">website at TU Berlin</a>.</p></div>

<div class="news_box"><h6><a href=" /data/election/aspen/ "> ED-00016: Aspen Election Data</a></h6><p>The 2009 Aspen Data contains the results from the mayoral and city council elections held in Aspen, CO in 2009. The data contains two different elections with about 2,500 votes each over 5 and 11 candidates.</p></div>

<div class="news_box"><h6><a href=" /data/election/berkley/ "> ED-00017: Berkley Election Data</a></h6><p>The 2010 Berkley Data contains the results from a city council election (District 7) in Berkley, CA. The set contains about 4,000 votes over 4 candidates.</p></div>

<div class="news_box"><h6><a href=" /data/election/minneapolis/ "> ED-00018: Minneapolis Election Data</a></h6><p>The 2009 Minneapolis Data contains the results from the election for the Parks and Rec Commissioner and Tax Assessor in Minneapolis, MN. The set contains about 30,000 votes over 7-400 candidates. The <b>full</b> data sets contain ballots along with write in candidates (Mikey Mouse and Yoda are well represented).  The <b>No Write In</b> files contain the same votes removing any write-ins and modifying the votes accordingly.</p></div>

<div class="news_box"><h6><a href=" /data/election/oakland/ "> ED-00019: Oakland Election Data</a></h6><p>The 2010 Oakland Data contains the results from the city council and mayoral elections held in Oakland, CA in 2010. The set contains 7 distinct elections with between 4 and 11 canddiates and 900 and 145,000 voters.</p></div>

<div class="news_box"><h6><a href=" /data/election/pierce/ "> ED-00020: Pierce Election Data</a></h6><p>The 2008 Pierce Data contains the results from several elections, including county executive, held in Pierce, WA in 2008. The set contains 4 distinct elections with between 4 and 7 canddiates and 40,000 and 300,000 voters.</p></div>

<div class="news_box"><h6><a href=" /data/election/sf/ "> ED-00021: San Francisco Election Data</a></h6><p>The San Francsico data contains the results from several elections, including board of supervisors, district attorny, and mayoral elections, held in San Francisco, CA between 2008 and 2012. The set contains 14 distinct elections with between 4 and 25 canddiates and 18,000 and 195,000 voters.</p></div>

<div class="news_box"><h6><a href=" /data/election/sl/ "> ED-00022: San Leandro Election Data</a></h6><p>The San Leandro data contains the results from several elections, including mayor and city council elections, held in San Leandro, CA between 2010 and 2012. The set contains 3 distinct elections with between 4 and 7 canddiates and about 25,000 voters each.</p></div>

<div class="news_box"><h6><a href=" /data/election/takomapark/ "> ED-00023: Takoma Park Election Data</a></h6><p>The Takoma Park Data contains the results from the 2007 Takoma Park, WA special election for city council. The set contains one elections with between 4 canddiates and about 400 voters.</p></div>

<div class="news_box"><h6><a href=" /data/election/dots/ "> ED-00024: Mechanical Turk Dots</a></h6><p>The Mechanical Turk Dots datasets come from <a href="http://www.andrewmao.net/">Andrew Mao</a> and were collected using Mechanical Turk.  These data sets each contain elections with 794-800 voters over 4 candidates.</p></div>

<div class="news_box"><h6><a href=" /data/election/puzzle/ "> ED-00025: Mechanical Turk Puzzle</a></h6><p>The Mechanical Turk Dots datasets come from <a href="http://www.andrewmao.net/">Andrew Mao</a> and were collected using Mechanical Turk.  These data sets each contain elections with 793-797 voters over 4 candidates.</p></div>

<div class="news_box"><h6><a href=" /data/election/frenchapproval/ "> ED-00026: 2002 French Presidental Election</a></h6><p> The 2002 French Presidental Election Dataset was collected by Jean-Francois Laslier and Karine Van der Straeten.  It consists of 2,597 approval ballots collected in parallel to the actual election in 6 different districts in France.</p></div>

<div class="news_box"><h6><a href=" /data/election/frenchrate/ "> ED-00027: Proto French Election</a></h6><p> This analog dataset to the 2002 French Presidential Election Dataset was collected by Jean-Francois Laslier, Karine Van der Straeten and Michel Balinski.  It consists of 398 approval ballots collected over potential candidates for the 2002 French Presidential election cast by students at Institut d’Etudes Politiques de Paris.</p></div>

<div class="news_box"><h6><a href=" /data/election/apa/ "> ED-00028: APA Election Data</a></h6><p>This dataset contains the results of the elections of the American Psychological Association between 1998 - 2009.  The voters are allowed to rank any number of the 5 candidates without ties.  Each of these elections have 5 candidates and between 13,318 and 20,239 voters.</p></div>

<div class="news_box"><h6><a href=" /data/election/netflix-noncondorcet/ "> ED-00029: Netflix Prize Data - No Condorcet Winners</a></h6><p>The <a href="http://www.netflixprize.com/">Netflix Prize</a> was a competition devised by Netflix to improve the accuracy of its recommendation system.  To facilitate this Netflix released real ratings about movies from the users of the system.  Any set of movies can be transformed into an election via a process outlined by Mattei, Forshee, and Goldsmith (reference below). This is a new slice of the Netflix Prize Dataset containing only those 71,943 instances that do not contain a Condorcet Winner.</p></div>

<div class="news_box"><h6><a href=" /data/election/uklabor/ "> ED-00030: UK Labor Party Leadership Vote</a></h6><p>The <a href="http://rangevoting.org/LabourUK2010.html">2010 UK Labor Party Leadership Vote is posted at www.rangevoting.org.</a>  This set contains the votes cast by all 266 MPs over the 5 leadership candidates.  The votes are incomplete strict orders which we have posted along with extensions placing all unranked candidates tied at the end and pairwise graphs.</p></div>



<div class="clear"></div> <div class="grid_8 spacer"></div>


<h4 style=text-align:center> Matching Data</h4><a name = "md"></a>
<div class="news_box"><h6><a href=" /data/matching/kidney/ "> MD-00001: Kidney Data</a></h6><p>This dataset contains 310 instances of synthetic kidney donor pools.  The data was generated using a state of the art donor pool generation method (described in Saidman et al., Increasing the opportunity of live kidney donation by matching for two-and three-way exchanges. Transplantation 81(5), 2006) and was donated by <a href="http://www.cs.cmu.edu/~dickerson">John Dickerson.</a>  John has recently posted his generation as well as his exchange solving code online; it is available <a href="https://github.com/JohnDickerson/KidneyExchange">here</a>.</p></div>

<div class="news_box"><h6><a href=" /data/matching/csconf/ "> MD-00002: Computer Science Conference Bidding Data</a></h6><p>This dataset contains the bidding data from 3 Computer Science Conferences.  This contains the bids of all reviewers (aside a small number of opt-outs) over a subset of papers at the conference.</p></div>

<div class="news_box"><h6><a href=" /data/matching/project/ "> MD-00003: Project Bidding Data</a></h6><p>This dataset contains bids of students over a set of projects for student/project allocations at the School of Computing Science, University of Glasgow.  Each project is supervised by an individual each with a maximum capacity of supervision.  There are 8 years worth of data in this set and with between 31 and 51 students and 56 and 155 projects. This data was kindly donated by <a href="http://www.dcs.gla.ac.uk/~davidm/">David Manlove</a> who collected this data.</p></div>

<div class="news_box"><h6><a href=" /data/matching/aamas/ "> MD-00004: AAMAS Bidding Data</a></h6><p>This dataset contains the bids of reviewers over papers from the <a href="http://www.aamas2015.com/en/">2015 Autonomous Agents and Multiagent Systems Conference</a>.  Inclusion in this data set was explicitly opt-in; it contains 9,817 bids of 201 reviewers over 613 papers; this represents about 40% of the actual 22,360 bids of 281 reviewers over 670 papers.</p></div>



<div class="clear"></div> <div class="grid_8 spacer"></div>


<h4 style=text-align:center> Rating and Combinatorial Preference Data</h4><a name = "cd"></a>
<div class="news_box"><h6><a href=" /data/combinatorial/trip/ "> CD-00001: Trip Advisor Data</a></h6><p>This dataset contains 675,069 reviews of 1,851 hotels across the world scraped from <a href="www.tripadvisor.com">Trip Advisor</a>.  The data was scraped and donated by <a href="http://sifaka.cs.uiuc.edu/~wang296/">Hongning Wang</a>.</p></div>

<div class="news_box"><h6><a href=" /data/combinatorial/frenchrate/ "> CD-00002: Proto French Election</a></h6><p> This analog dataset to the 2002 French Presidential Election Dataset was collected by Jean-Francois Laslier, Karine Van der Straeten and Michel Balinski.  It consists of 398 approval ballots and subjective ratings on a 20 point scale collected over potential candidates for the 2002 French Presidential election cast by students at Institut d’Etudes Politiques de Paris.</p></div>



<div class="clear"></div> <div class="grid_8 spacer"></div>


<h4 style=text-align:center> Optimization Data</h4><a name = "od"></a>


 <p style=text-align:center>No Sets Yet, Please Donate!</p>



<div class="clear"></div> <div class="grid_8 spacer"></div>


 </div> 
 
			<!-- Links -->
			<div class="grid_4">
				<h5 style=text-align:center> Links </h5>
				<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/links.php'); ?>
			</div>
	
			<!-- Break and Footer -->
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/foot.php'); ?>	
		</div>
	</body>
	</html>
	