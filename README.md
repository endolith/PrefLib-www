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

The structure of the repository is:

|-archive\
|-combinatorial\
|-common\
|-css\
|-data\
|-
|

## DETAILS

### Main Scripts:

- alldata.py: Script to generate the alldata.php page.  This iterativly goes through the data\ directory and creates headings for each top level folder and then recurses through creating a link block for the particular page.

- datapages.py: Script to go through each of the sub folders and create a data page to go next to the plain text file for each of the data directories.
