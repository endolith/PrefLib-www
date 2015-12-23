# PrefLib-www
README.txt for PrefLib www (c) Nicholas Mattei and NICTA.

All code and scripts for creating the PrefLib website.  Currently the archive and data indexes are missing because GitHub is a bit strict on data sizes.  The website serves as a repository for the data at this point.

Please see www.PrefLib.org for more information about our project and a large library of real-world preference data For questions or comments please contact nsmattei@gmail.com or Nicholas.Mattei@nicta.com.au.

This code comes without warranty. Please use or distribute for research and academic uses only. Please use according to the citation and fair use requests on found at www.preflib.org.

** Big Note: ** I am not a web developer by trade or by training.  I am doing this as a service, please excuse any bad conventions. 

# Release Notes

## 2.0

Final version of the index and scripts for main site push on Dec. 23, 2015.

## 1.0

Everything seems to be working at this point for the scripting and site building.

## OVERVIEW

This is the scripts and main files necessary to build the PrefLib website.  We are not including the data here because GitHub doesn't want us to.  The directory structure is identical so downloading the Archive file and extracting the /data/ folder will allow for recreation of the site.

There are 7 top level folders:

- /archive/ - Zips of the entire archive including data. Updated periodically.

- /common/ - Files that are needed in multiple directories including the menu and footer php files.

- /css/ - Directory with the 960 css and other style-sheets for the website.

- /data/ - Main data directory and where everything is built from.  This contains a sub-directory for each of the data types on the site and an info.txt file for each directory.  Each data set is a self contained directory and can be modified independent of the entire site.  The page with formatting instructions and the /packs/ subdirectory sit here as well.

- /images/ - All images used on the site.

- /scripts/ - The two major python scripts used to build the site.  Details are below.

- /tools/ - The tools directory.  Contains an index page listing all the different tools and 1 page per tool.  Can also be used to store built tools but everyone else is hosting theirs elsewhere so no need at the moment.

There are an additional few files in the root directory that are self explanatory and correspond to the top level pages in the menu (index, about, etc.)


## DETAILS

### Main Scripts:

- build_data_html.py: Recurses through the data directory of the PrefLib website and builds up (1) the /index.php page listing all data that is present, (2) the data/x/y file which is the listing for all the data from a particular group and (3) updates the /packs/index.php page and ensures that all zip files in the index match the requsite directories (not including the html, just the info .txt) and (4) builds the papers page including links to Google scholar.

- sync_dreamhost.py: A wrapper around rsync to build the site and push everything to the remote host and make sure the local is the same as the remote.


