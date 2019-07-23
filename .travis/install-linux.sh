#!/bin/sh
set -ex
sudo apt-get update
sudo apt-get install php-dev swig php
curl -sL -o ~/bin/gimme https://raw.githubusercontent.com/travis-ci/gimme/master/gimme
chmod +x ~/bin/gimme