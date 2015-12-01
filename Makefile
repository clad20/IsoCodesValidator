cs:
	php-cs-fixer fix --verbose

test:
	alias
	phpunit -c phpunit.xml.dist --coverage-clover build/logs/clover.xml
