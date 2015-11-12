
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
					<li>EXT which is a unique <a href="./format.php">file extension</a> describing the type of data in the file.
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

<div class="news_box"><h6><a href=" /data/election/agh/ "> ED-00009: AGH Course Selection</a></h6><p>This dataset contains the results of surveying students at <a href="http://www.agh.edu.pl/en/">AGU University of Science and Technology</a> about their course preferences.  Each student provided a rank ordering over all the courses with no missing elements.  There are 9 courses to choose from in 2003 and 7 in 2004.</p></div>



<div class="clear"></div> <div class="grid_8 spacer"></div>


<h4 style=text-align:center> Matching Data</h4><a name = "md"></a>
<div class="news_box"><h6><a href=" /data/matching/kidney/ "> MD-00001: Kidney Data</a></h6><p>This dataset contains 310 instances of synthetic kidney donor pools.  The data was generated using a state of the art donor pool generation method (described in Saidman et al., Increasing the opportunity of live kidney donation by matching for two-and three-way exchanges. Transplantation 81(5), 2006) and was donated by <a href="http://www.cs.cmu.edu/~dickerson">John Dickerson.</a>  John has recently posted his generation as well as his exchange solving code online; it is available <a href="https://github.com/JohnDickerson/KidneyExchange">here</a>.</p></div>



<div class="clear"></div> <div class="grid_8 spacer"></div>


<h4 style=text-align:center> Rating and Combinatorial Preference Data</h4><a name = "cd"></a>


 <p style=text-align:center>No Sets Yet, Please Donate!</p>



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
	