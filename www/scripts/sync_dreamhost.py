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
import build_data_html

if __name__ == '__main__':
    #
    # Setup ARGPARSE for the above.
    #

    parser = argparse.ArgumentParser(description= \
    	'''
    	A wrapper around system calls to build the PrefLib webiste.
    	Requires that you have SSH Key access to the server at www.preflib.org and www.dev.preflib.org.
    	''')
    parser.add_argument('-rb', '--rebuild', action='store_true', default=False, dest='rebuild', help= '''Rebuild the index before doing anything.''')
    parser.add_argument('-m', '--main', action='store_true', default=False, dest='main', help='''Push to the main site.''')
    results = parser.parse_args()

    if results.rebuild:
      print(" *** Rebuilding Site Index *** \n\n")
      build_data_html.build_data_pages()

    # Sync EVERYTHING to DEV.
    print(" *** Pushing ENTIRE www directory to DEV@DREAMHOST *** ")
    os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="*.DS_Store" --exclude="*pycache*" /Users/mat320/repo/www-preflib.github/www/ koolkamel@www.preflib.org:~/dev.preflib.org''')


    # Do a main push but don't take the .htaccess and .htpassword
    if results.main:
      print(" *** Pushing ENTIRE www directory to PREFLIB@DREAMHOST *** ")
      os.system('''rsync --recursive --times --verbose --progress --compress --delete-after --exclude="*.DS_Store" --exclude=".htaccess" --exclude=".htpasswd" --exclude="*pycache*" /Users/mat320/repo/www-preflib.github/www/ koolkamel@www.preflib.org:~/preflib.org''')
