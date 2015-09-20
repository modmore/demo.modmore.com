<?php

echo "Resetting to latest commit...\n";
echo `git reset --hard HEAD`;

echo "Making sure we're on master...\n";
echo `git checkout master`;

echo "Checking remote for new commits...\n";
echo `git pull origin master`;

echo "Creating DB backup...\n";
echo `Gitify backup before_reset --overwrite`;

echo "Downloading/updating packages...\n";
echo `Gitify package:install --all`;

echo "Force building from data...\n";
echo `Gitify build --force`;

echo "Done!\n";