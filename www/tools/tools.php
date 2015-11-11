<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php include "./common/head.php"; ?>
</head>

<body>
	<div class="container_12">
		<?php include "./common/menu.php"; ?>

		<!-- Tools Intro -->
		<div class="grid_7"> 
			<h4> Support Tools </h4>
			<p> Empirical experiments with real data are becoming a more fundamental part of work in computational social choice.  In addition to a lightweight set of tools for working with data from PrefLib we also host documentation for several of these project.  Please contact Nick if you have code that you would like to share with the community.</p>

			<h5> PrefLib Tools </h5>
			<p> We have developed a small set of lightweight tools in Python3 for working with PrefLib and generating synthetic data.  Please download the current version of the tools below and check the README for full details. PrefLib tools are covered under the <a href="./tools/LICENSE.txt">BSD License</a> and is available at the <a href="https://github.com/nmattei/PrefLib-Tools" target="_blank">PrefLib-Tools GitHub Page!.</a></p>
			

			<h6>Version Comments and History:</h6>
			<p>
				<ul>
					<li> <a href="https://github.com/nmattei/PrefLib-Tools" target="_blank"> Download PrefLib Tools at GitHub!</a>

					<li> Release 0.2: Added a robust command line interface for generating data.  Now includes code to test for various domain restrictions such as single-peakedness.</li>

					<li> Release 0.1: Read and write the Election data and Matching data PrefLib formats. Generate synthetic datasets for any number of candidates and voters for: Mallows Mixture Models, Impartial Culture, Impartial Anonymous Culture, Urn Models, Single Peaked Impartial Culture.</li>
					
				</ul>
			</p>				
		</div> 

		<!-- Pictures and Links -->
		<div class="grid_5">
			<p>
			<img src="images/pref.png" alt="" title="" />

			<a href="http://www.nicta.com.au/category/research/optimisation/" class="center"> <h3>Supported By:</h3><img src="images/nicta.png" alt="" title="NICTA" /></a>
			</p>
		</div>

		<!-- Break Page... -->
		<div class="clear"></div>
		<div class="grid_12 spacer"></div>
		<div class="clear"></div>
		
		<!-- Contributed Tools -->
		<div class="grid_7">
			<h4 style=text-align:center> Contributed Tools </h4>

			<div class="news_box">
				<h6><a href="tools/ivs.php">Iterative Voting Simulator</a></h6>
				<p>This is a voting simulator built for the paper <a href="http://arxiv.org/abs/1404.4688">A Local-Dominance Theory of Voting Equilibria</a>. We are releasing its source code to be expanded and enhanced by the community. However, it is quite versatile in its current construction, and can be used for various simulations "as is".</p> 
			</div>

			<div class="news_box">
				<h6><a href="tools/kidney.php">Kidney Dataset Generator</a></h6>
				<p>Kidney failure is a life-threatening health issue that affects hundreds of thousands of people worldwide. In the US alone, the waitlist for a kidney transplant has over 100,000 patients. This list is growing: demand far outstrips supply.This codebase includes: structural elements of kidney exchange like "pools", "hospitals", and "pairs", a couple of kidney exchange graph generators, a couple of kidney exchange solvers (max weight, failure-aware, fairness-aware, individually rational), and a dynamic kidney exchange simulator.</p> 
			</div>
		</div>

		<!-- Links -->
		<div class="grid_1"><p>  &nbsp; </p></div>
		<div class="grid_4">
			<h5 style=text-align:center> Links </h5>
			<?php include "./common/links.php"; ?>
		</div>
	
		<!-- Break and Footer -->
		<?php include "./common/foot.php"; ?>
	</div> 
</body>
</html>
	