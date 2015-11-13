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
WEB_DATA_ROOT = "/data/"
PACK_LOCATION = "/packs/"
DATA_TYPES = ["election", "matching", "combinatorial", "optimization"]
DATA_NAMES = ["Election Data", "Matching Data", "Rating and Combinatorial Preference Data", "Optimization Data"]
LINK_NAMES = ['''<a name = "ed"></a>''', '''<a name = "md"></a>''', '''<a name = "cd"></a>''', '''<a name = "od"></a>''']

EXTENSIONS = ["soc", "soi", "toc", "toi", "tog", "mjg", "wmg", "pwg", "wmd"]

NAMES = [	"Strict Order - Complete List", 
			"Strict Order - Incomplete List", 
			"Tied Order - Complete List", 
			"Tied Order - Incomplete List", 
			"Tournament Graph", "Majority Graph", 
			"Weighted Majority Graph", 
			"Pairwise Graph", 
			"Weighted Matching Data"]

EXTENSION_LONG = { "soc":"Strict Order - Complete", 
                   "soi":"Strict Order - Incomplete",
                    "toc":"Order with Ties - Complete",
                    "toi":"Order with Ties - Incomplete",
                    "tog":"Tournament Graph",
                    "mjg":"Majority Graph", 
                    "wmg":"Weighted Majority Graph",
                    "pwg":"Pairwise Graph",
                    "wmd":"Weighted Matching Data",
                    "zip":"Zipped Data File",
                    "dat":"Extra Data File (CSV)"}

FORMAT_LINKS = {    "soc":"/data/format.php#soc", 
                    "soi":"/data/format.php#soi",
                    "toc":"/data/format.php#toc",
                    "toi":"/data/format.php#toi",
                    "tog":"/data/format.php#tog",
                    "mjg":"/data/format.php#mjg", 
                    "wmg":"/data/format.php#wmg",
                    "pwg":"/data/format.php#pwg",
                    "wmd":"/data/format.php#wmd",
                    "zip":"/data/format.php#data",
                    "dat":"/data/format.php#data"}




#
# Page Pieces.
#

HEAD_AND_MENU = \
	'''
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/head.php'); ?>
	</head>

	<body>
		<div class="container_12">
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/menu.php'); ?>
	'''

DATA_INDEX_INTRO = \
	'''
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
	'''

PICTURES_AND_LINKS = \
	'''
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
	'''

### Can only be used with a 8 width grid!!!
LINKS = \
	'''
			<!-- Links -->
			<div class="grid_4">
				<h5 style=text-align:center> Links </h5>
				<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/links.php'); ?>
			</div>
	'''

BREAK_AND_FOOTER = \
	'''
			<!-- Break and Footer -->
			<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/common/foot.php'); ?>	
		</div>
	</body>
	</html>
	'''


def make_listing_page(meta_data, file_list):
    """
  Generate a per dataset index file to sit alongside 
  the info.txt file.  All HTML is encoded in this 
  function.

  Parameters
  -----------
  meta_data: list
 	meta data for the dataset.
  	0: Name:
	1: Abbreviation:
	2: Extension:
	3: Series Number:
	4: Path:
	5: Description:
	6: Required Citations:
	7: Selected Studies:
			
  file_list: string
    Listing of the files for the dataset.
    0: description,status,file_name
	1: # -- File List -- CSV.


  Returns
  -----------
    None:

  Notes
  -----------
  	Writes HTML file to the same directory location as the 
  	info.txt file came from.
    """
    print("*** Writing " + meta_data[4])
    print(meta_data)
    print(file_list)
    
    html_page = HEAD_AND_MENU

    # Build Top Stuff.
    html_page += '''\n\n&nbsp;<div class="grid_7">\n'''
    html_page += '''<h5>''' + info[2] + "-" + info[3] + ": " + info[0] + '''</h5>\n'''

    # Description.
    html_page += info[5]

    # Required Citations
    html_page += '''\n\n<p><h6>Required Citations</h6> \n''' + info[6] + '''</p>\n\n'''

    # Selected Citations
    html_page += '''<p><h6>Selected Citations Using This Dataset</h6> \n''' + info[7] + '''</p>\n\n'''

    html_page += '''</div>'''
    html_page += PICTURES_AND_LINKS

    # Download All Section.
    # Get file size...
    #Grab file size...
    cmdstr = "du -h " + DATA_ROOT + info[4] + "/" + info[1] + ".zip"
    c = subprocess.check_output([cmdstr], shell=True)
    size = str(c.decode('ascii')).strip()
    size = size.split("\t")
    size = size[0].strip()
    
    html_page += '''\n\n<div class="grid_12"><p><ul><h5 style="text-align:center;"><a href=" ''' + "/data/" + info[4] + "/" + info[1] + ".zip" + ''' ">Download This Complete Dataset (''' + str(size) + ''').</a></h5></ul></p></div>'''

    html_page += '''\n\n<!-- Break Page... -->
                    <div class="clear"></div>
                    <div class="grid_12 spacer"></div>
                    <div class="clear"></div>
                '''

    # Make the Table...
    html_page += ''' 
                    <div class="grid_12">
                    <table class="DataTable">
                    <tr><th>Description</th><th>Type</th><th>Modification</th><th>File Name</th><th>File Size</th></tr>\n
                    '''
    file_list = file_list[1:]
    for cline in file_list:
        desc, status, fname = cline.strip().split(",")
        desc = desc.strip()
        status = status.strip()
        fname = fname.strip()

        link = "/data/" + info[4] + "/" + fname
        cmdstr = "du -h " + DATA_ROOT + info[4]  + "/" + fname
        c = subprocess.check_output([cmdstr], shell=True)
        size = str(c.decode('ascii')).strip()
        size = size.split("\t")
        size = size[0].strip()
        extension = fname.split(".")[1].strip()

        html_page += " <tr><td> " + desc + " </td><td> <a href=\"" + FORMAT_LINKS[extension] + "\">" + EXTENSION_LONG[extension] + "</a></td> <td> " +  status + ''' </td> <td> <a href="''' + link + "\" onClick=\"_gaq.push(['_trackEvent', 'Download', 'individual', '" + fname + "']);\">" + fname + "</a> </td><td> " + size + "</td></tr> \n\n"
                    

    html_page +=  '''
    </table>
    </div>\n\n'''


    #Bottom Stuff.
    html_page += BREAK_AND_FOOTER
    
    with open(DATA_ROOT+ meta_data[4] + "/index.php", 'w') as f:
        f.write(html_page)

if __name__ == '__main__':

	#(1) Ensure Consistancy of Data Packs by file extension and also by directory.
	# Count Hash
    print("\t\t *** Updating Data Pack Zips with --filesync *** ")
    pack_counts = {x: 0 for x in EXTENSIONS}

	#use some wicked system calls to do this... note we are using the --filesync option so this will make the ZIPS EXACT!
    for ext in EXTENSIONS:
        print(" *** Updating " + ext + " Pack *** ")
        count = os.system("find " + DATA_ROOT + " -type f -name '*." + ext + "' -print | zip --filesync --junk-paths " + DATA_ROOT + PACK_LOCATION + ext + " -@")
        cmdstr = "find " + DATA_ROOT + " -type f -name '*." + ext + "' -print | wc -l"
    	
        c = subprocess.check_output([cmdstr], shell=True)
        c = str(c).strip().replace("\\n'", "")
        pack_counts[ext] = int(c.strip().split(" ")[len(c.strip().split(" "))-1])

	# Recurse through all the data directories make sure there are up to date zips for each one.
    print("\n\n\t\t *** Updating Dataset Packs *** ")
    for ctype in DATA_TYPES:
    	for subdir in glob.glob(DATA_ROOT + ctype + "/*/"):
            print(" *** Checking " + subdir + " *** ")
    		#Somewhat hacky to include the info but not the .DS_Store.
            name = os.path.basename(os.path.normpath(subdir))
            os.system("zip --filesync --junk-paths " + subdir + name + ".zip " + subdir + "* -x *.php")

    #(2) Recurse the directories to build the index and the make the top level index page.
    print("\n\n\t\t *** Building Index Pages *** ")
    data_index_page = HEAD_AND_MENU + DATA_INDEX_INTRO + PICTURES_AND_LINKS + '''\n\n
    	<!-- Generated Content -->
    	<div class="grid_8">\n'''

    index = {x:{} for x in DATA_TYPES}
    for i,ctype in enumerate(DATA_TYPES):
    	for subdir in glob.glob(DATA_ROOT + ctype + "/*/"):
    		#Open the INFO file and extract information (blanks between each).
    		# Name:
    		# Abbreviation:
    		# Extension:
    		# Series Number:
    		# Path:
    		# Description:
    		# Required Citations:
    		# Selected Studies:
    		#description,status,file_name
    		# -- File List --

    		# Build a Hash NUMBER --> output statement.

    		with open(subdir+"info.txt", 'r') as f:
    			lines = list(filter(None, (line.strip() for line in f)))
    		# Extract and process info and listing
    		info = lines[:8]
    		listing = lines[8:]
    		info = [x.split(": ")[1].strip() for x in info]

    		#Call to make per directory index page.
    		make_listing_page(info, listing)

    		name = info[2] + "-" + info[3] + ": " + info[0]
    		link = WEB_DATA_ROOT + info[4] + "/"
    		desc = info[5].split("</p>")[0].strip() + "</p>"

    		#Build description string.
    		html = '''<div class="news_box"><h6><a href=" ''' + link + ''' "> ''' + name + '''</a></h6>'''+desc+'''</div>'''

    		# Add it to the index...
    		index[ctype][int(info[3])] = html

    	#Print the output to the index page in numerical order.
    	data_index_page += '''\n<h4 style=text-align:center> ''' + DATA_NAMES[i] + '''</h4>''' + LINK_NAMES[i] + '\n'
    	if len(index[ctype]) == 0:
    		data_index_page += '''\n\n <p style=text-align:center>No Sets Yet, Please Donate!</p>\n\n'''
    	else:
    		for k in sorted(index[ctype]):
    			data_index_page += index[ctype][k] + "\n\n"

    	#Clearing spacer between types..
    	data_index_page += '''\n\n<div class="clear"></div> <div class="grid_8 spacer"></div>\n\n'''

    data_index_page += '''\n </div> \n ''' + LINKS + BREAK_AND_FOOTER
    with open(DATA_ROOT+"index.php", 'w') as f:
    	f.write(data_index_page)
    print("*** Wrote /data/index.php")

    #(4) Make Pack Index Page.
    # TODO!
