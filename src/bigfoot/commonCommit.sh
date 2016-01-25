#!/bin/bash

# Use this script at root of desired folders
directories=$(ls -d */)
currwordir=$(pwd)

# Loop through every one and set same message commit
for dir in $directories
do
	cd $dir
	git pull origin
	git commit -am"$1"
	git push origin
	cd ../
#	echo $currwordir/$dir;
done