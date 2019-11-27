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
			<p><h4 style=text-align:center>CRISNER: A Qualitative Preference Reasoner for CP-nets, TCP-nets, CP-Theories</h4></p>

			<p> CRISNER stands for Conditional and Relative Importance Statement Network PrEference Reasoner. It can reason about ceteris paribus preference languages such as CP-nets, TCP-nets and CP-theories.	Given a preference specification (a set of preference statements) in one of these languages, CRISNER succinctly encodes its induced preference graph (IPG) into a Kripke structure model in the language of the NuSMV model checker. This Kripke model is reachability-equivalent to the induced preference graph. CRISNER generates the model only once, and then translates each query posed against this preference specification into a temporal logic formula in computation-tree temporal logic (CTL) such that the formula is verified in the Kripke model if and only if the query holds true according to the ceteris paribus semantics of the preference language. The model checker either affirms the query or returns with a counterexample. For answering queries related to equivalence and subsumption checking of two sets of preferences, CRISNER constructs a combined IPG and uses temporal queries in CTL to identify whether every dominance that holds in one also holds in the other, and vice-versa. </p>

			<p><h5>Versions and History</h5></p>
			<p><ul>
				<li>CRISNER's Website includes downloads, examples, and documentation on using the tool. <a href="http://www.ece.iastate.edu/~gsanthan/crisner.html">Current Release.</a></li>
				<li>Contact: <a href="mailto:gsanthan@iastate.edu">Ganesh Ram Santhanam at gsanthan@iastate.edu</a> for more information on usage, extensions and to report bugs.</li>
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

			<p><h5>Justification of Answers to Preference Queries</h5></p>
			 
			<p>CRISNER's reasoning is exact and provably correct for dominance, consistency, equivalence and subsumption queries. Because CRISNER uses a model checker for answering queries, CRISNER is also able to provide proofs or justifications to dominance of one outcome over another, inconsistency of a preference specifications, etc. CRISNER automatically builds proofs by collecting and examining the model checker output and producing a (flipping) sequence of preference statements.</p>

			<p><h5>Architecture</h5> </p>

			<p><img src="/images/crisner.png" alt=""  width="500" title="CRISNER"></p>
			
			<p>CRISNER is developed in pure Java and is domain-agnostic in the sense that any set of variables with any domain can be included in a preference specification, although it is optimized for variables with	binary domains (due to the use of BDDs by the model checker). It accepts preference specifications and queries in a XML format, which provides a common and generic syntax using which users can specify preferences for CP-languages. The results (answers and proofs) for the corresponding queries are also saved in the form XML, so that the results can be further transformed into vocabulary that is more easily understandable by domain users.</p>

			<p><h5>Required Citations</h5></p>
			<ul>
				<li> Ganesh Ram Santhanam, Samik Basu and Vasant Honavar. <a href="http://www.aaai.org/ocs/index.php/AAAI/AAAI10/paper/view/1844">Dominance Testing via Model Checking</a>. AAAI National Conference on Artificial Intelligence. Publisher: AAAI Press; pages: 357 - 362. 2010.</li>
				
				<li> Ganesh Ram Santhanam, Samik Basu and Vasant Honavar. <a href="http://link.springer.com/chapter/10.1007/978-3-642-41575-3_25#">Verifying Preferential Equivalence and Subsumption via Model Checking</a>. Algorithmic Decision Theory. Springer; pages: 324-335. 2013</li>
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