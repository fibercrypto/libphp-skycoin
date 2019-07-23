
set -ex
sudo apt update
curl -sL -o ~/bin/gimme https://raw.githubusercontent.com/travis-ci/gimme/master/gimme
chmod +x ~/bin/gimme
sudo apt install gcc libpcre3-dev g++ php-dev pkg-php-tools php-pear -y

mkdir swig_build && cd swig_build && wget http://prdownloads.sourceforge.net/swig/swig-3.0.12.tar.gz && tar -zxf swig-3.0.12.tar.gz && cd swig-3.0.12 && sudo ./configure --prefix=/usr && sudo make && sudo make install && cd ../../ && sudo rm -rf swig_build

export PHP_INCLUDE="-I/usr/include/php/20151012 -I/usr/include/php/20151012/main -I/usr/include/php/20151012/TSRM -I/usr/include/php/20151012/Zend -I/usr/include/php/20151012/ext -I/usr/include/php/20151012/ext/date/lib"