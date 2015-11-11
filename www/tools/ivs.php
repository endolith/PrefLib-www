
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<title>PrefLib.org: A Library for Preferences</title>
		<link rel="stylesheet" type="text/css" media="all" href="../css/reset.css" />
		<link rel="stylesheet" type="text/css" media="all" href="../css/text.css" />
		<link rel="stylesheet" type="text/css" media="all" href="../css/960.css" />
		<link rel="stylesheet" type="text/css" media="all" href="../css/style.css" />

		<script type="text/javascript">

			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-39177956-1']);
			  _gaq.push(['_trackPageview']);

			  (function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();

		</script>
	</head>


	<body>
		<div class="container_12">
			
			<div class="grid_12"><p><h1>{PrefLib}: A Library for Preferences</h1></p></div>

			<div class="clear"></div>
			
			<!-- Navbar -->
			<div class="grid_12" id="navbar">
				<ul id="nav" class="drop">
			  	<li><a href="../index.php">Main</a></li>
			  	<li><a href="../about.php">About</a></li>
			  	<li><a href="../papers.php">Papers</a></li>
			  	<li>Data
			    	<ul>
			    	  <li><a href="../format.php">Formats</a></li>
			    	  <li><a href="../source.php">All Data Sets</a></li>
			    	  <li><a href="../type.php">Data Grouped By Type</a></li>
			    	</ul>
			    </li>
			    <li><a href="../tools.php">Tools</a></li>
			    <li><a href="../archive.php">Archive</a></li>
			</div>

			
			<div class="clear"></div>

			<div class="grid_7"> 
				<p><h4 style=text-align:center>Iterative Voting Simulator</h4></p>
				
				<p><h5>What is this good for?</h5></p>

				<p>This is a voting simulator built for the paper <a href="http://arxiv.org/abs/1404.4688">A Local-Dominance Theory of Voting Equilibria</a>. We are releasing its source code to be expanded and enhanced by the community. However, it is quite versatile in its current construction, and can be used for various simulations "as is".</p>

				<p><h5>Versions and History</h5></p>
				<p><ul>
					<li> <a href="https://github.com/omerl/IterativeVotingSimulator"> Version 1.0</a>: Initial Release.  Code and files hosted on GitHub.</li>
				</ul></p>
			</div>

			<div class="grid_5">
				<p>
					<img src="../images/pref.png" alt="" title="" />
					<a href="http://www.nicta.com.au" class="center"> <h3>Supported By:</h3><img src="../images/nicta.png" alt="" title="NICTA" /></a>
				</p>
				
			</div>

			<div class="clear"></div>
				
			<div class="grid_12 spacer"></div>

			<div class="clear"></div>

			<div class="grid_7">

				<p><h5>Basic Model</h5></p>
				<p>The simulator deals with iterative voting schemes, i.e., voters which announce every turn whether they wish to change their votes. Once it has the voter preferences and requested settings (see below), it runs each game several times, each time stopping once an equilibrium has been reached or if a cycle has been found. It repeats this run again (usually reaching a different equilibrium), outputting finally statistics on each game it has run.</p>

				<p>The current version implements only best response voters, as well as voters using the local-dominance framework introduced in <a href="http://arxiv.org/abs/1404.4688">A Local-Dominance Theory of Voting Equilibria</a>. It also supports truth and lazy biased voters in the same framework.</p>

				<p><h5>How to use it out of the box</h5></p>
				<p>I warn that as we did not use it in this manner, the file handler is probably the most-error-prone area of the code. Bear with us as we slowly fix the problems. The first argument, if it is  a directory, is used to save the specific output files for each run (it's quite detailed, so can simply be omitted, and they won't be saved; End the directory name with a "/"), while the output analyzing each scenario would be saved in the same directory as the scenario description file, which is the 2nd (or 1st, if there is no need for the run-specific output) argument for the program, defining how and what it should run.</p>

				<p><h6>Without PrefLib Files</h6></p>
				The following syntax should be used:<br>
				<ul>
					<li><code>cands:&lt;number&gt;</code> Number of candidates.</li>
					<li><code>step:&lt;number&gt;</code> The maximal number of steps in a game, before it is halted.</li>
					<li><code>rounds:&lt;number&gt;</code> Number of times each preference list would be simulated. Remember that due to the iterative process, several rounds of the same situation need to be run to gather several Nash equilibria states.</li>
					<li><code>game:&lt;number&gt;</code> Number of different games (different sets of preference orders) that should be run. This is relevant when the games are extracted from a distribution, not when there are fixed preference orders that are used.</li>
				</ul>

				<p><u><b> Voter types</b></u></p>
				<p>The local dominance model uses a radius of uncertainty as well as, optionally, a radius of "hopelessness" (beyond which truth/lazy bias strategies come into play) which can use an additive or multiplicative metric. The simulator uses multiplicative values for radii, so a radius of 1 means an additive radius of n, the number of voters. By default, the simulator uses "basic" voters (i.e., not truth/lazy biased) with an l<sub>1</sub> additive metric uncertainty value of 0, and hopelessness value of 1 for all voters, but this can be changed by adding to the file the following information:</p>
				<ul>
					<li><code>voter type:&lt;text&gt;</code> If the word "lazy" appears on the line, the voter would be lazy biased. If the word "truth" is there, the voter would be truth biased. If the word "mult" appears there, the voter's metric function will not be additive, but multiplicative.

					<li><code>r:&lt;number&gt;</code> The local dominance radius for all voters. The scenario will be run again, with the different r values. To run it with several different values of r, separate r values with ",".</li>

					<li><code>k:&lt;number&gt;</code> The truth/lazy radius for all voters. The scenario will be run again, with the different k values. To run it with several different values of k, separate k values with ",". Every r value will be run with all valid k values (e.g. r:1/n,2/n;  k:1/n,2/n,3/n: the value sets (1/n,2/n), (1/n,3/n), (2/n,3/n) will be run).</li>

					<li><code>(r,k):&lt;number&gt;</code> The local-dominance + truth/lazy radius for all voters. The scenario will be run again, with the different (r,k) values.</li>
				
					<li><code>dist:&lt;text&gt;</code> The distribution for the votes (if their preference orders are not specified in the file). Currently the options here are "Uniform", "Peaked" (for single peaked), "Curved" (for single-curve), "Urn2" (for Polya-Eggenberger 2-urn model), "Urn3" (for Polya-Eggenberger 3-urn model), "Riffle" and "Luce" (for Placket-Luce). You can write several (they will run one after another) or just "all", for everything.</li>
				</ul>
				<p><em>Note the different ways of inputing radii are not mutually exclusive&mdash;all scenarios will be run.</em></p>

				<p><u><b>Voters</b></u>
				<ul>
					<li><code>voters:&lt;number&gt;</code> Number of voters.</li>
				</ul>
				
				In addition to setting the number of voters, users can set their own voters for participation in the simulation, if they do not wish to use a distribution. They can specify both their private (i.e., truthful) preferences, as well as their public opening preference (default is for them to be the same). A line for a voter should start by specifying its type, if not the same as the defaults ("basic" voter, additive l<sub>1</sub> metric): <code>true</code> (for truth bias), <code>lazy</code> (for lazy bias), and <code>mult</code> (for multiplicative and not additive l<sub>1</sub> metric).</p>

				<p>Following this, a preference order should be specified, using "&gt;" to delineate candidates. Any candidate name can be used, but be consistent&mdash;the checking of the input is minimal, and producing more candidates than defined will cause a crash. If you wish to separate public and private preferences use <code>private:</code> and <code>public:</code> before each preference order.</p>

				<p>By using <code>r:</code> and <code>k:</code>, users can set the radii of the voters.</p>

				<p><h6>With PrefLib files</h6></p>
				<p>Inputting a PrefLib file as input causes it to run in a simulation with default values: All votes are basic, use l<sub>1</sub> additive metric, starting from truthful position with a radius of 1. Each game will be run 100 times, and each run will be stopped after 1000 steps.</p>

				<p><h5>The Code&mdash;Short Overview</h5></p>
				<p>After constructing voters&mdash;either in <code>main.cpp</code> or in <code>VoteFileHandle.h/cpp</code>, an instance of <code>TestScenario</code> is created, which handles the actual running of the simulations.</p>

				<p>All games are derived from the abstract class <code>IterativeGame</code>, which includes abstract classes such as <code>IterativeScheduledGame</code>, which uses a scheduler that doesn't use a one-by-one system. In particular, every voting system (and tie-breaking rule) should set up a different game type, as the game is the mechanism informing the voters which candidate would win if they chose a certain strategy. Our code include regular games for plurality, Borda, and k-approval. In addition, we have classes for plurality in a concurrent scheduling scenario, as well as one with randomized starting points (i.e., non-truthful ones).</p>

				<p>A preference orders is a <code>PrefList</code> object. A voter object is derived from the <code>IterativeVoter</code> class, of which <code>IterativeBestResponseVoter</code> are derived (for the "classical" model, as shown <a href="https://dl.dropboxusercontent.com/u/57315415/full_papers/pluralityCOMSOC2010.pdf">here</a>, <a href="http://www.aamas-conference.org/Proceedings/aamas2012/papers/2D_2.pdf">here</a>, and <a href="http://www.cs.cmu.edu/~arielpro/comsoc-14/papers/RabinovichObraztsovaLevMarkakisRosenschein2014.pdf">here</a>). The local dominant voters are <code>IterativePluralityRangeVoter</code> for the l<sub>1</sub> additive metric and <code>IterativePluralityRangeMultVoter</code> for the l<sub>1</sub> multiplicative metric.</p>

				<p>Voter distributions are defined in <code>distributions.h/cpp</code>. Note that many properties of voters (e.g., their type) and the simulator in general are also mentioned in the <code>defs.h/cpp</code> file, and there are <code>enum</code>s there for almost all properties.</p>


				<p><h5>Participation & Acknowledgment</h5></p>
				<p>As this is hosted publicly on <a href="http://github.com">GitHub</a>, we urge you to download the code, play with it and add to it. We hope that should you enhance it, you will choose to contribute to the community by adding it to this GitHub project, so this framework will continue to thrive and benefit others.</p>

				<p>Should you use this code in your own research paper, we ask that you acknowledge <a href="http://dl.acm.org/citation.cfm?id=2600057.2602860">our work</a> and provide a reference to it.</p>

				<p><h5>Disclaimer</h5></p>
				<p>We offer this code "as is". We make no guarantees that it works as promised (hoped?), nor that it works at all... It certainly has bugs, errors and omissions, and should you find one, we urge you to fix it. If you believe you've found a significant error that puts the whole edifice in jeopardy, please <a href="mailto:omerl@cs.huji.ac.il">contact us</a> and let us know.</p>

			</div> 

			
			<div class="grid_5">
				<h6 style=text-align:center> Links </h6>
				<?php include "../links.php"; ?>
			</div>

								
				
			<div class="grid_12 spacer"></div>
			<div class="clear"></div>
				
			<div class="grid_12" id="footer">
				<div class="grid_4 alpha">
					PrefLib is supported by <a href="http://www.nicta.com.au">NICTA</a>.
					PrefLib was founded and is maintained by <a href="http://www.nickmattei.net">Nicholas Mattei</a> and <a href="http://www.cse.unsw.edu.au/~tw/">Toby Walsh</a>
				</div>
				<div class="grid_4">
					We rely on the support of the community in order to grow the usefulness of this site.  To contribute, please contact <a href="http://www.nickmattei.net">Nicholas Mattei</a> at: <h6>nicholas<b>{DOT}</b>mattei@nicta.com.au</h6>
				</div>
					
				<div class="grid_4 omega">
				</div>
			</div>
			<div class="clear"></div>
		</div> 
	</body>
</html>
	