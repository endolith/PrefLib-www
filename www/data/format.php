<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/head.php'); ?>
</head>

<body>
	<div class="container_12">
		<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/menu.php'); ?>

		<!-- Formats  -->
		<div class="grid_7">
			<h5> Formats </h5>
				<p> We have attempted to unify the formatting of the data as much as possible.  Each format is as close to a comma separated format (CSV) as possible to improve portability. We currently have 10 types of data in 3 formats.</p>

			<h5> Data Categories</h5>
				<p>	Our data is separated into four broad categories:
				<ul>
					<li class='wide'><a href="/data/index.php#ed">Election Data (ED):</a> This category contains data that either was an election, or can be interpreted as election data.  Generally speaking the sets are preference relations (votes) over a set of objects (candidates).  We have data from actual elections, movie rankings, and competitor rankings from various sporting competitions.</li>

					<li class='wide'><a href="/data/index.php#md">Matching Data (MD):</a> This category contains data where agents express preference over items (and vise-verse) in order to pair agents to items.  We have synthetic data from organ and kidney matching in the USA as well as bidding data from large conferences.  We hope to obtain data in a variety of domains including two-sided matching markets such as residents bidding on hospitals and one-sided markets such as students bidding on dorm rooms.</li>

					<li class='wide'><a href="/data/index.php#cd">Rating and Combinatorial Preference Data (CD):</a> This category contains data from a broad set of domains that can be viewed as combinatorial and/or multidimensional.  This includes		multi-attribute ratings, CP-nets, GAI-nets and lexicographical preferences for multi-attribute objects.</li>

					<li class='wide'><a href="/data/index.php#od">Optimization Data (OD):</a> This category will contain data that is typically associated with optimization problems including SAT and CSP problems.  Currently we have no good data in this category and provide links to other libraries covering this type of data.</li>
				</p>

			<h5> Data Types </h5>
				<p> We currently have 10 distinct data types.  Please click on the appropriate one for complete mathematical details.
				<ul>
						<li> <a href="#soc">SOC - Strict Orders - Complete List</a>
						<li> <a href="#soi">SOI - Strict Orders - Incomplete List</a>
						<li> <a href="#toc">TOC - Orders with Ties - Complete List</a>
						<li> <a href="#toi">TOI - Orders with Ties - Incomplete List</a>
						<li> <a href="#tog">TOG - Tournament Graph</a>
						<li> <a href="#mjg">MJG - Majority Graph</a>
						<li> <a href="#wmg">WMG - Weighted Majority Graph</a>
						<li> <a href="#pwg">PWG - Pairwise Graph</a>
						<li> <a href="#wmd">WMD - Weighted Matching Data</a>
						<li> <a href="#dat">DAT - Extra Data File</a>
				</ul>
				</p>

			<h5> Data Format </h5>
				<p> We currently have 3 data formats.  Please click below for more details.
				<ul>
					<li> <a href="#election-data">Election Data</a>
					<li> <a href="#wmatching-data">Weighted Matching Data</a>
					<li> <a href="#data">Extra Data</a>
				</ul>
				</p>
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

		<!--- Details -->
		<div class="grid_8">
			<div class="news_box"><a name = "soc"></a>

		   		<h5>SOC - Strict Orders - Complete List</h5>

		       	<p>Each file with a <b>soc</b> extension contains a profile consisting of a complete, transitive, and asymmetric relation over a group of objects. These are written A,B,C; meaning that A is strictly preferred to B which is strictly preferred to C.  The strict relation is always denoted by use of a comma (,). <br><br> <a href="/data/packs/index.php#soc">Download all data files containing SOC data.</a> <br><br> <a href="#top">Top.</a> </p>
	        </div>

	       	<div class="news_box"><a name = "soi"></a>

	       		<h5>SOI - Strict Orders - Incomplete List</h5>

	       		<p> Each file with a <b>soi</b> extension contains a profile consisting of a transitive and asymmetric relation over a group of objects. These are written A,B,C; meaning that A is strictly preferred to B which is strictly preferred to C. The strict relation is always denoted by use of a comma (,) and unranked elements are not included in the list of a particular agent. <br><br> <a href="/data/packs/index.php#soi">Download all data files containing SOI data.</a> <br><br> <a href="#top">Top.</a> </p>
	       	</div>

	       	<div class="news_box"><a name = "toc"></a>

	       		<h5>TOC - Orders with Ties - Complete List</h5>

	       		<p> Each file with a <b>toc</b> extension contains a profile consisting of an transitive relation where all elements appear in every list. These written A,{B,C},D; meaning A is strictly preferred to {B,C}, while the voter is indifferent between B and C, with A,B, and C all preferred to D. The strict relation is always denoted by use of a comma (,) while elements that an agent is indifferent between are grouped in a curly brace ({}). <br><br> <a href="/data/packs/index.php#toc">Download all data files containing TOC data.</a> <br><br> <a href="#top">Top.</a> </p>
	       	</div>


	       	<div class="news_box"><a name = "toi"></a>

	       		<h5>TOI - Orders with Ties - Incomplete List</h5>

	       		<p> Each file with a <b>toi</b> extension contains a profile consisting of an transitive relation where not all elements appear in every list. These written A,{B,C},D; meaning A is strictly preferred to {B,C}, while the voter is indifferent between B and C, with A,B, and C all preferred to D. The strict relation is always denoted by use of a comma (,) while elements that an agent is indifferent between are grouped in a curly brace ({}). <br><br> <a href="/data/packs/index.php#toi">Download all data files containing TOI data.</a> <br><br> <a href="#top">Top.</a> </p>
	       	</div>

	       	<div class="news_box"><a name = "tog"></a>

	       		<h5>TOG - Tournament Graph </h5>

	       		<p> Files with a <b>tog</b> extension describe a tournament graph. A tournament graph is a complete directed graph over a set of alternatives.  In our formatting we simply state the list of pairwise relations that describe the tournament (A,B; B,C). The strict relation is always denoted by use of a comma (,).  Note that tournaments must be complete assignment of the strict preference relation, otherwise it is a majority graph (see below). <br><br> <a href="/data/packs/index.php#tog">Download all data files containing TOG data.</a> <br><br> <a href="#top">Top.</a> </p>
	       	</div>

	       	<div class="news_box"><a name = "mjg"></a>

	       		<h5>MJG - Majority Graph </h5>

	       		<p> Files with a <b>mjg</b> extension describe a majority graph (relation). A majority graph is a directed graph over a set of alternatives.  In our formatting we simply state the list of pairwise relations that described the majority graph (A,B; B,C). The strict relation is always denoted by use of a comma (,).  Note that majority graphs need not be complete, additionally there is no concept of a "tie" between two elements. <br><br> <a href="/data/packs/index.php#mjg">Download all data files containing MJG data.</a> <br><br> <a href="#top">Top.</a> </p>
	       	</div>

	       	<div class="news_box"><a name = "wmg"></a>

	       		<h5>WMG - Weighted Majority Graph </h5>

	       		<p> Files with a <b>wmg</b> extension describe a majority graph (relation) with weights. A majority graph is a directed graph over a set of alternatives.  In our formatting we simply state the list of pairwise relations that described the majority graph (A,B; B,C) along with the number of times the particular relation was listed (A,B) minus the number of times the reverse relation was listed (B,A). The strict relation is always denoted by use of a comma (,). Note that majority graphs need not be complete, additionally there is no concept of a "tie" between two elements. <br><br> <a href="/data/packs/index.php#wmg">Download all data files containing WMG data.</a> <br><br> <a href="#top">Top.</a> </p>
	       	</div>

	        <div class="news_box"><a name = "pwg"></a>

	       		<h5>PWG - Pairwise Graph</h5>

	       		<p> Files with a <b>pwg</b> extension describe a set of pairwise relations. Every possible pairwise comparison is listed (if it appears in the data set) along with the number of time it appears. For example: 61 A,B; 21 B,A. <br><br> <a href="/data/packs/index.php#pwg">Download all data files containing PWG data.</a> <br><br> <a href="#top">Top.</a> </p>
	       	</div>

	       	<div class="news_box"><a name = "wmd"></a>

	       		<h5>WMD - Weighted Matching Data</h5>

	       		<p> Files with a <b>wmd</b> extension describe a set of weighted matching data. These are directed graphs where source is linked to the sink with a specified weight. <br><br> <a href="/data/packs/index.php#wmd">Download all data files containing WMD data.</a> <br><br> <a href="#top">Top.</a> </p>
	       	</div>

	       	<div class="news_box"><a name = "dat"></a>

	       		<h5>DAT - Extra Data File</h5>

	       		<p> Files with a <b>dat</b> extension contain miscellaneous data for a given problem. Generally this is extra information that may be useful for some people. <br><br> <a href="#top">Top.</a> </p>
	       	</div>

			<div class="news_box"><a name="election-data"></a>

	       		<h5> Election Data Format</h5>

	       		<p> The format for all election data is (each element on a new line):
				<ul>
					<li>Number of Candidates
					<li>1, Candidate Name
					<li>2, Candidate Name
					<li> ...
					<li>Number of Voters, Sum of Vote Count, Number of Unique Orders
					<li>count, preference list. (12,1,2,{3,4}).  A strict ordering is indicated by a comma (,) and elements that are indifferent are grouped with a ({ }).
					<li>count, preference list. (12,1,2,3,4).  A strict ordering is indicated by a comma (,) and elements that are indifferent are grouped with a ({ }).
					<li>...
				</ul>

				Votes are sorted by count in the individual data files. The "Number of Voters" field is the number of actual ballots that were cast.  The "Sum of Vote Count" is the sum of weights.  In most cases the Number of Voters = Sum of Vote Count, except where for example, we have induced a relation like generating a pairwise graph from a set of linear orders.  In this case we would have some number n of voters over m alternatives but we would have n * m choose 2 as the sum of weights since each voter expresses a relation between each pair of elements. <br><br> <a href="/data/index.php#ed">See all the Election Data (ED) data sets.</a> <br><br> <a href="#top">Top.</a> </p>
	        </div>

	        <div class="news_box"><a name="wmatching-data"></a>

	       		<h5> Weighted Matching Data</h5>

	       		<p> The format for all weighted matching data is (each element on a new line):
				<ul>
					<li>Number of Nodes, Number of Edges
					<li>1, Name of Node
					<li>2, Name of Node
					<li> ...
					<li>Source, Destination, Weight
					<li>Source, Destination, Weight
					<li> ...
				</ul>

				The edges are sorted by source so that all edges starting from the same source are grouped together. <br><br> <a href="/data/index.php#md">See all the Matching Data (MD) data sets.</a> <br><br> <a href="#top">Top.</a> </p>
	        </div>

	        <div class="news_box"><a name="data"></a>

	       		<h5> Extra Data File</h5>
	       		<p> The format for miscellaneous data is always a simple CSV file.
				<ul>
					<li>Item 1 Name, Item 2 Name, Item 3 Name, ..., Item N Name
					<li>Item 1 Value, Item 2 Value, Item 3 Value, ..., Item N Value
				</ul>

				Files with a <b>dat</b> extension are generally paired with another file, providing more information than is expressible in the basic data formats. <br><br> <a href="#top">Top.</a> </p>
			</div>
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
