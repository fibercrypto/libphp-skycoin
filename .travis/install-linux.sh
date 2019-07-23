
set -ex
sudo apt update
sudo apt install  g++ gcc -y
curl -sL -o ~/bin/gimme https://raw.githubusercontent.com/travis-ci/gimme/master/gimme
chmod +x ~/bin/gimme
sudo apt install swig -y
