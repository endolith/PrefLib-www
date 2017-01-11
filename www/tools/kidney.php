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
			<p><h4 style=text-align:center>Kidney Exchange</h4></p>
			
			<p>Kidney failure is a life-threatening health issue that affects hundreds of thousands of people worldwide. In the US alone, the waitlist for a kidney transplant has over 100,000 patients. This list is growing: demand far outstrips supply.This codebase includes: structural elements of kidney exchange like "pools", "hospitals", and "pairs", a couple of kidney exchange graph generators, a couple of kidney exchange solvers (max weight, failure-aware, fairness-aware, individually rational), and a dynamic kidney exchange simulator.</p>

			<p><h5>Versions and History</h5></p>
			<p><ul>
				<li> All code and data for this project, along with more detailed documentation can be fond on the <a href="https://github.com/JohnDickerson/KidneyExchange"> Kidney Exchange GitHub Page</a>.</li>
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

		<!-- Details of Tool -->
		<div class="grid_7">

			<p><h5>What is kidney exchange?</h5></p>

			<p>Kidney failure is a life-threatening health issue that affects hundreds of thousands of people worldwide. In the US alone, the waitlist for a kidney transplant has over 100,000 patients. This list is growing: demand far outstrips supply.</p>

			<p>A recent innovation, kidney exchange, allows patients to bring an (incompatible) donor to a large pool where they can swap donors with other patients.  As of 2012&ndash;2013, roughly 10% of US kidney transplants occurred through a variety of kidney exchanges.  Outside of the US, many countries (the UK, the Netherlands, Portugal, Israel, ...) are fielding exchanges.</p>

			<p><h5> What is this code? </h5></p>

			<p>This codebase includes: structural elements of kidney exchange like "pools", "hospitals", and "pairs", a couple of kidney exchange graph generators, a couple of kidney exchange solvers (max weight, failure-aware, fairness-aware, individually rational), and a dynamic kidney exchange simulator.</p>

			<p>If you use this codebase, please cite one of our recent papers like:
			<ul>
				<li>John P. Dickerson, Ariel D. Procaccia, and Tuomas Sandholm. 2014. Price of Fairness in Kidney Exchange. In _Proceedings of the 2014 International Conference on Autonomous Agents and Multi-agent Systems_ (AAMAS-2014).  Paris, France (pp. 1013&ndash;1020).</li>
			</ul>


			<p><b>**NOTE:**</b> This is _not_ the code used in the <a href="http://optn.transplant.hrsa.gov/resources/KPDPP.asp">UNOS Kidney Paired Donation Pilot Program (KPDPP)</a>.  The solvers here are meant to be accessible research code for the community and do not use branch-and-price, hopefully resulting in greater ease of use (at the cost of scalability).  Forks and pull requests welcome!</p>


			<p><h5>External Dependencies</h5></p>
			To use any of the solvers that inherit from <code>CPLEXSolver</code>, you will need to add <a href="http://www-01.ibm.com/software/commerce/optimization/cplex-optimizer/">cplex.jar</a> to <code>lib/</code>.  This will allow compilation; to run, you'll also need a VM argument like:<br><br>

				<code>-Djava.library.path=/path/to/CPLEX_Studio/cplex/bin/your-architecture/</code><br><br>

			IBM offers a free academic license for CPLEX as well as a 90-day free trial available on their website.</p>


			<p><h5>Related Research</h5></p>
			<ul>
				<li>FutureMatch: Combining Human Value Judgments and Machine Learning to Match in Dynamic Environments.  John P. Dickerson and Tuomas Sandholm.</li>

				<li><a href="http://jpdickerson.com/pubs/dickerson14multi.pdf">Multi-Organ Exchange: The Whole is Greater than the Sum of its Parts</a>.  John P. Dickerson and Tuomas Sandholm. <b>AAAI-2014</b>.</li>

				<li><a href="http://jpdickerson.com/pubs/dickerson14price.pdf">The Price of Fairness in Kidney Exchange</a>.  John P. Dickerson, Ariel D. Procaccia, Tuomas Sandholm.  <b>AAMAS-2014</b>.</li>

				<li><a href="http://jpdickerson.com/pubs/dickerson14empirical.pdf">The Empirical Price of Fairness in Failure-Aware Kidney Exchange</a>.  John P. Dickerson, Ariel D. Procaccia, Tuomas Sandholm.  <b>AAMAS-2014 Workshop on Healthcare and Algorithmic Game Theory</b>.</li>

				<li><a href="http://www.cs.cmu.edu/~sandholm/failure-aware%20kidney%20exchange.ec13.pdf">Failure-Aware Kidney Exchange</a>.  John P. Dickerson, Ariel D. Procaccia, Tuomas Sandholm.  <b>EC-2013</b>.</li>

				<li><a href="https://www.cs.cmu.edu/afs/cs.cmu.edu/Web/People/arielpro/papers/weights.aaai12.pdf">Dynamic Matching via Weighted Myopia with Application to Kidney Exchange</a>.  John P. Dickerson, Ariel D. Procaccia, Tuomas Sandholm. <b>AAAI-2012</b>.</li>

				<li><a href="http://www.cs.cmu.edu/afs/cs/Web/People/arielpro/papers/chains.aamas12.pdf">Optimizing Kidney Exchange with Transplant Chains: Theory and Reality</a>.  John P. Dickerson, Ariel D. Procaccia, Tuomas Sandholm. <b>AAMAS-2012</b>.</li>

				<li><a href="http://www.cs.cmu.edu/~dabraham/papers/abs07.pdf">Clearing Algorithms for Barter Exchange Markets: Enabling Nationwide Kidney Exchanges</a>.  David J. Abraham, Avrim Blum, Tuomas Sandholm.  <b>EC-2007</b>.</li>

				<li><a href="http://kuznets.fas.harvard.edu/~aroth/papers/SaidmanRothSonmezUnverDelmonico.Transplantation.2006.pdf">Increasing the Opportunity of Live Kidney Donation by Matching for Two and Three Way Exchanges</a>. S. L. Saidman, Alvin Roth, Tayfun S&ouml;nmez, Utku &Uuml;nver, Frank Delmonico.  <b>Transplantation, 2006</b>.</li>
			</ul>
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