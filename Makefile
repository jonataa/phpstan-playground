analyse:
	bin/phpstan analyse -c phpstan.neon --level 7 app
analyse-watch:
	watchman-make -p 'app/**/*.php' --make 'vendor/bin/phpstan analyse -c phpstan.neon --level 7 -c phpstan.neon' -t 'app'
run-with-php:
	php -d auto_prepend_file=vendor/autoload.php app/Examples.php