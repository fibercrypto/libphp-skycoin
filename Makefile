.PHONY: build


build:
	(cd lib/skyapi && composer install)


test:
	(cd lib/skyapi && vendor/bin/phpunit)
