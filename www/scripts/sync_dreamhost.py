'''
	File: 	sync_dreamhost.py
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
	Just a wrapper around some system calls to update the site
	and make it match the local directories.  
	This has hooks to:
		-rb --rebuild: rebuild the index before anything else
		-m --main: push to the main site (pushes to dev by default).

	Running without -w or -d (or both) means nothing happens except a possible rebuild.

'''

import sys
import os
import argparse

if __name__ == '__main__':
	#
	# Setup ARGPARSE for the above.
	#

	parser = argparse.ArgumentParser(description= \
		'''
		A wrapper around system calls to build the PrefLib webiste.
		Requires that you have SSH Key access to the server at www.preflib.org and www.dev.preflib.org.
		'''

	parser.add_argument('-rb', '--rebuild', type=bool, default=False, dest='rebuild' help=\
																	'''
																	Rebuild the index before doing anything.
																	''')
	parser.add_argument('-m', '--main', type=bool, default=False, dest='main' help=\
																	'''
																	Push to the main site.
																	''')
	results = parser.parse_args()

	if results.rebuild:
		print(" *** Rebuilding Site Index *** ")
		os.system("./python3 build_data_html.py")

	# Sync EVERYTHING to DEV.
	rsync --recursive --times --verbose --progress --compress --delete-after --exclude="*.DS_Store" /Users/Nick/repo/github/PrefLib-www.git/www/ koolkamel@www.preflib.org:~/dev.preflib.org''')


	# Experiment Number
	parser.add_argument('-e', '--experiment', type=int, dest='experiment', \
		required=True, help="Experiment number to run. \n \
		(1) Time Samples ApproConcorde \n \
		(2) Time Samples SubsetConcorde \n \
		(3) Time Shapley Computation \n \
		(4) Error For Sample Number ApproConcorde\n \
		(5) Error For Sample Number SubsetConcorde\n ")

	# Number of locations to sweep.
	parser.add_argument('-ml', '--min_locations', type=int, dest='min_locations', default=2, help='Minimum number of agents in settings.')
	parser.add_argument('-Ml', '--max_locations', required=True, type=int, dest='max_locations', help='Maximum number of agents in settings.')

	# Seed value
	parser.add_argument('-sd', '--seed', type=int, default=-1, dest='random_seed', help='Random Seed, Default is time.')

	# Tracking results.
	parser.add_argument('-sa', '--samples', default=1000, type=int, dest='num_samples', help='Number of samples to run.')	
	parser.add_argument('-f', '--frequency', default=1, type=int, dest='write_frequency', help='Frequency with which to record timing/error samples.')
	parser.add_argument('-r', '--runs', default=1, type=int, dest='num_runs', help='Numer of times to repeat experiment step for jitter.')

	results = parser.parse_args()


	if(len(sys.argv) != 3):
		print("Use: " + str(sys.argv[0]) + " <-w (Website Only) | -d (Data Only) | -a (All)> <-m (Main) | -d (Dev)>\n")
		sys.exit()
		
	#Parse Args...
	switch = sys.argv[1]
	site = sys.argv[2]
	
	#Run the local commands in this order:
	# print("**** Updating Individual Data Pages **** \n\n")
	# os.system("python3 ./makedatapages.py")
	
	# print("**** Updating Data Packs **** \n\n")
	# os.system("python3 ./makedatapacks.py")
	
	# print("**** Updating Domain Page **** \n\n")
	# os.system("python3 ./makedomainpage.py")
	
	# print("**** Updating Public Link Pages **** \n\n")
	# os.system("python3 ./makepublinkpage.py")
	
	# c = input("\n\n\**** Go ADD the new stuff (if needed) in the GIT directories for WWW as it is automatically pushed for DEV!. ****")
	
	# Post Recieve hooks on data/www for Git auto-exports to the DEV site only.

	#If we got -a do a hard refresh of the www, data, and archive folder.
	if site == "-d" and switch == "-a":
		print("**** Pushing with --delete-after www and data directories to DEV ****")
		os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="data/*" --exclude="/archive/*" --exclude="*.DS_Store" --exclude=".git/" --exclude=".gitignore" /Users/Nick/repo/preflib/www/ koolkamel@www.preflib.org:~/dev.preflib.org''')
		os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="*.DS_Store" --exclude=".git/" --exclude=".gitignore" /Users/Nick/repo/preflib/database/ koolkamel@www.preflib.org:~/dev.preflib.org/data''')
		os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="*.DS_Store" --exclude=".git/" --exclude=".gitignore" /Users/Nick/repo/preflib/archive/ koolkamel@www.preflib.org:~/dev.preflib.org/archive''')

	#Hard refresh of the www directory.
	if site == "-d" and switch =="-w":
		print("**** Pushing WWW with --delete-after option to DEV ****")
		os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="data/*" --exclude="/archive/*" --exclude="*.DS_Store" --exclude=".git/" --exclude=".gitignore" /Users/Nick/repo/preflib/www/ koolkamel@www.preflib.org:~/dev.preflib.org''')
		os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="*.DS_Store" --exclude=".git/" --exclude=".gitignore" /Users/Nick/repo/preflib/archive/ koolkamel@www.preflib.org:~/dev.preflib.org/archive''')

	# If we are updating data on the dev site need to run the RSYNC:
	elif site == "-d" and switch == "-d":
		print("**** Pushing Current Data Directory to DEV ****")
		#try running with --delete-after to clean out extraneous files...
		#rsync -azvP --exclude="*.DS_Store" --exclude=".git/" --exclude=".gitignore" --delete-after ./data-PrefLib.git/ koolkamel@www.preflib.org:~/dev.preflib.org/data
		os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="*.DS_Store" --exclude=".git/" --exclude=".gitignore" /Users/Nick/Repo/PrefLib/data-PrefLib.git/ koolkamel@www.preflib.org:~/dev.preflib.org/data''')


	# For Main Site we need to make sure the ARCHIVE folder is synced and that we don't take the .htaccess folder from the www directory.
	elif site == "-m" and switch == "-a":
		print("**** Pushing with --delete-after www, data, and archive to MAIN ****")
		os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="beyond2014/" --exclude="data/*" --exclude="/archive/*" --exclude=".htaccess" --exclude="*.DS_Store" --exclude=".git/" --exclude=".gitignore" /Users/Nick/Repo/PrefLib/www-PrefLib.git/ koolkamel@www.preflib.org:~/preflib.org''')
		os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="*.DS_Store" --exclude=".git/" --exclude=".gitignore" /Users/Nick/Repo/PrefLib/data-PrefLib.git/ koolkamel@www.preflib.org:~/preflib.org/data''')
		os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="*.DS_Store" --exclude=".git/" --exclude=".gitignore" /Users/Nick/Repo/PrefLib/archive/ koolkamel@www.preflib.org:~/preflib.org/archive''')

	# For Main Site don't take the .htaccess folder with you.
	elif site == "-m" and switch == "-w":
		print("**** Pushing with --delete-after www to MAIN ****")
		os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="beyond2014/" --exclude="data/*" --exclude="/archive/*" --exclude=".htaccess" --exclude="*.DS_Store" --exclude=".git/" --exclude=".gitignore" /Users/Nick/Repo/PrefLib/www-PrefLib.git/ koolkamel@www.preflib.org:~/preflib.org''')

	# For Main Site we need to make sure the ARCHIVE folder is synced and that we don't take the .htaccess folder from the www directory.
	elif site == "-m" and switch == "-d":
		print("**** Pushing with --delete-after data, and archive to MAIN ****")
		os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="*.DS_Store" --exclude=".git/" --exclude=".gitignore" /Users/Nick/Repo/PrefLib/data-PrefLib.git/ koolkamel@www.preflib.org:~/preflib.org/data''')
		os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="*.DS_Store" --exclude=".git/" --exclude=".gitignore" /Users/Nick/Repo/PrefLib/archive/ koolkamel@www.preflib.org:~/preflib.org/archive''')
