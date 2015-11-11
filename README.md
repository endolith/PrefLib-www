# PrefLib-www
README.txt for PrefLib www (c) Nicholas Mattei and NICTA.

All code and scripts for creating the PrefLib website.  Currently the archive and data indexes are missing because GitHub is a bit strict on data sizes.  The website serves as a repository for the data at this point.

Please see www.PrefLib.org for more information about our project and a large library of real-world preference data For questions or comments please contact nsmattei@gmail.com or Nicholas.Mattei@nicta.com.au.

This code comes without warranty. Please use or distribute for research and academic uses only. Please use according to the citation and fair use requests on found at www.preflib.org.

** Big Note: ** I am not a web developer by trade or by training.  I am doing this as a service, please excuse any bad conventions. 

# Release Notes

## 0.0

Currently we are in beta, getting everything from the old site imported and updating it to make it more extensible and usable.

## OVERVIEW



## DETAILS

### Main Scripts:

- build_data_html.py: Recurses through the data directory of the PrefLib website and builds up (1) the /index.php page listing all data that is present, (2) the data/x/y file which is the listing for all the data from a particular group and (3) updates the /packs/index.php page and ensures that all zip files in the index match the requsite directories (not including the html, just the info .txt).

