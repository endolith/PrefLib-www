'''
	File: 	build_data_html.py
	Author:	Nicholas Mattei (nicholas.mattei@nicta.com.au)
	Date:	Nov. 11th 2015
	
  * Copyright (c) 2014/2015, Nicholas Mattei and NICTA
  * All rights reserved.
  *
  * Developed by: Nicholas Mattei
  *               NICTA
  *               http://www.nickmattei.net
  *               http://www.preflib.org
  *
  * Redistribution and use in source and binary forms, with or without
  * modification, are permitted provided that the following conditions are met:
  *     * Redistributions of source code must retain the above copyright
  *       notice, this list of conditions and the following disclaimer.
  *     * Redistributions in binary form must reproduce the above copyright
  *       notice, this list of conditions and the following disclaimer in the
  *       documentation and/or other materials provided with the distribution.
  *     * Neither the name of NICTA nor the
  *       names of its contributors may be used to endorse or promote products
  *       derived from this software without specific prior written permission.
  *
  * THIS SOFTWARE IS PROVIDED BY NICTA ''AS IS'' AND ANY
  * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
  * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
  * DISCLAIMED. IN NO EVENT SHALL NICTA BE LIABLE FOR ANY
  * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
  * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
  * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
  * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
  * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
  * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

About
--------------------
	This file recurses through the data directory of the PrefLib website
	and builds up (1) the /index.php page listing all data that is present,
	(2) the data/x/y file which is the listing for all the data from a
	particular group and (3) updates the /packs/index.php page and 
	ensures that all zip files in the index match the requsite directories
	(not including the html, just the info .txt)
	
'''

import glob
import os
import subprocess

#
# Reletive Paths.
#

DATA_ROOT = "../data/"
PACK_LOCATION = "packs/"
DATA_TYPES = ["election", "matching", "combinatorial", "optimization"]

EXTENSIONS = ["soc", "soi", "toc", "toi", "tog", "mjg", "wmg", "pwg", "wmd"]
NAMES = [	"Strict Order - Complete List", 
			"Strict Order - Incomplete List", 
			"Tied Order - Complete List", 
			"Tied Order - Incomplete List", 
			"Tournament Graph", "Majority Graph", 
			"Weighted Majority Graph", 
			"Pairwise Graph", 
			"Weighted Matching Data"]


#
# Page Pieces.
#

HEAD_AND_MENU = '''
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php include "../common/head.php"; ?>
</head>

<body>
	<div class="container_12">
		<?php include "../common/menu.php"; ?>
'''

BREAK_AND_FOOTER = '''
		<!-- Break and Footer -->
		<?php include "../common/foot.php"; ?>	
	</div>
</body>
</html>
'''



if __name__ == '__main__':

	#(1) Ensure Consistancy of Data Packs by file extension and also by directory.
	# Count Hash
	'''
	pack_counts = {x: 0 for x in EXTENSIONS}

	#use some wicked system calls to do this... note we are using the --filesync option so this will make the ZIPS EXACT!
	for ext in EXTENSIONS:
		count = os.system("find " + DATA_ROOT + " -type f -name '*." + ext + "' -print | zip --filesync --junk-paths " + DATA_ROOT + PACK_LOCATION + ext + " -@")
		cmdstr = "find " + DATA_ROOT + " -type f -name '*." + ext + "' -print | wc -l"
		
		c = subprocess.check_output([cmdstr], shell=True)
		c = str(c).strip().replace("\\n'", "")
		pack_counts[ext] = int(c.strip().split(" ")[len(c.strip().split(" "))-1])
		print(pack_counts)
	'''
	# Create an FS zip file for each one of the data directories.

	# Recurse through all the data directories and do something...
	for ctype in DATA_TYPES:
		for subdir in glob.glob(DATA_ROOT + ctype + "/*/"):
			#Somewhat hacky to include the info but not the .DS_Store.
			name = os.path.basename(os.path.normpath(subdir))
			os.system("zip --filesync --junk-paths " + subdir + name + ".zip " + subdir + "*")





	#(2) Make Individual Data Pages.
	#(3) Make Data index page.
