<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/head.php'); ?>
</head>

<body>
	<div class="container_12">
		<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/menu.php'); ?>
		
		<!-- Intro Material -->
		<div class="grid_7">
			<p> A reference library of preference data and links assembled by <a href="http://www.nickmattei.net">Nicholas Mattei</a> and <a href="http://www.cse.unsw.edu.au/~tw/">Toby Walsh</a>.  This site and library is proudly supported by the <a href="http://www.org.nicta.com.au">Optimization Research Group</a> at <a href="http://www.nicta.com.au">NICTA</a>. We currently house over 3,000 datasets for use by the community.</p>
			
			<p> We want to provide a comprehensive resource for the multuple research communities that deal with preferences, including computational social choice, recommender systems, data mining, machine learning, and combinatorial optimization, to name just a few.</p>

			<p> For more information on PrefLib and some helpful tips on using it, please see <a href="
			http://www.explore14.preflib.org/?page_id=11">Nick's Tutorial Slides and Code from EXPLORE 2014.</a></p>
			
			<p> Please see the <a href="/about.php">about</a> page for information about the site, contacting us, and our citation policy. We rely on the support of the community in order to grow the usefulness of this site.  To contribute, please contact <a href="http://www.nickmattei.net">Nicholas Mattei</a> at: nicholas<b>{dot}</b>mattei@nicta.com.au</p>
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
		
		<!-- News -->
		<div class="grid_8">
			<div class="news_box">
			<div class="news_icon"></div>
		    	<div class="news_content">
		        	<b>Dec. 23, 2015:</b>
		        	<p>Happy Holidays from Nick!  We have added over 70,000 new data sets to the site in the last couple of days!  These include real elections, bidding data from various conferences, and data from other real world preference domains.  This brings our total database size up to 5 GB!</p><p>In other news I completely overhauled the backend of the site (the part no one sees) and put the code up on <a href="https://github.com/nmattei/PrefLib-www">GitHub!  There has also been a small update to the PrefLib Tools, we have added a bunch of new papers to the links page as well as links to all the iterations of the EXPLORE conference.</p>
		        </div>
		    </div>
			
			<div class="news_box">
			<div class="news_icon"></div>
		    	<div class="news_content">
		        	<b>Dec. 10, 2015:</b>
		        	<p> We are hosting the 3rd Workshop on <a href="http://www.explore-2016.preflib.org/" target="_blank"> Exploring Beyond the Worst Case in Computational Social Choice (EXPLORE 2016)</a> at <a href="http://sis.smu.edu.sg/aamas2016" target="_blank">AAMAS 2016!</a>. Please check out the website for more information and we hope to see you in Singapore!.</p> 
		        </div>
		    </div>

			<div class="news_box">
			<div class="news_icon"></div>
		    	<div class="news_content">
		        	<b>June 1, 2015:</b>
		            <p> We have moved the devlopment and hosting of <a href="https://github.com/nmattei/PrefLib-Tools" target="_blank"> PrefLib Tools over to GitHub!</a>  Check out the current version and join us on expanding the capabilities of PrefLib!</p>
		        </div>
		    </div>

			<div class="news_box">
			<div class="news_icon"></div>
		       	<div class="news_content">
		            <b>Jan. 15, 2015:</b>
		            <p> We are hosting the 2nd workshop on <a href="http://www.explore-2015.preflib.org/">Exploring Beyond the Worst Case in Computational Social Choice</a> at <a href="http://www.aamas2015.com/en/">AAMAS 2015</a>.  Please check our workshop webpage for more details!</p>
		        </div>
		    </div>
			
			<div class="news_box">
			<div class="news_icon"></div>
		        <div class="news_content">
		            <b>Oct. 20, 2014:</b>
		            <p> Release of PrefLib v. 1.6, incorporating a substantial update of the library with 5 new data sources, many thanks to <a href="https://sites.google.com/site/jflaslierhomepage/">J-F Laslier</a>. There have been a few small bug fixes files from data sets ED-00015 and ED-00018.</p>
		                	
		            <p> There is also a significant update to the <a href="/tools/">Tools page.</a>We now have two community donated tool chains, many thanks to <a href="http://jpdickerson.com/">John Dickerson</a> and <a href="http://www.cs.huji.ac.il/~omerl/"> Omer Lev</a>.</p>
		        </div>
		    </div>

			<div class="news_box">
		    <div class="news_icon"></div>
		        <div class="news_content">
		            <b>June 20, 2014:</b>
		            <p> Massive site update sees a revamp of the top menu and the addition of the <a href="/archive/">Archive</a> page.</p>

					<p> We have added over 1,000 new data sets from over 10 new sources -- bringing the total library size to over 4,000 files! We have also revamped the <a href="/data/">data pages</a> to make them easier to navigate. A small change to the <a href="/data/format.php">file extensions</a> has been made for more clarity.</p>
		                	
		            <p> Finally there is a small update to the <a href="/tools/">Tools</a> library inclding a command line interface and functions to test for Single Peakedness.</p>
		        </div>   
		    </div>
			
			<div class="news_box">
	        <div class="news_icon"></div>
            	<div class="news_content">
                	<b>Dec. 10, 2013:</b>
                	<p> We are hosting a workshop at <a href="http://aamas2014.lip6.fr/">AAMAS 2014</a> on <a href="http://www.explore14.preflib.org/">Exploring Beyond the Worst Case in Computational Social Choice</a>.  Nick will give a talk about PrefLib!  Please consider joining us in Paris in the coming year.</p>
                </div>   
	    	</div>

			<div class="news_box">
	        <div class="news_icon"></div>
            	<div class="news_content">
                	<b>Nov. 6, 2013:</b>
                	<p> The first release of the tool suite is now available on the <a href="tools.php">Tools</a> page. Python3 scripts to read, write, and generate preference data in our formats!</p>
                </div>   
	    	</div>

			<div class="news_box">
	        <div class="news_icon"></div>
            	<div class="news_content">
                	<b>Sept. 3, 2013:</b><p> A big update today brings us over 3000 datasets hosted on the site with a full data archive over 7 GB!</p> <p> We have also added a <a href="/about.php">Thanks!!</a> section to recognize those individuals who have helped make PrefLib possible.</p>
                </div>
	        </div>

	        <div class="news_box">
	        	<div class="news_content">
	        		<p> For older news and site revisions please see the <a href="/archive/">Archive Page</a>.</p>
	            </div>
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