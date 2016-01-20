get_requirements:
	sudo apt-get install php5-cli
	curl -s http://getcomposer.org/installer | php; sudo mv composer.phar /usr/local/bin/composer; bash

get_vendors:
	composer install

generate_assets:
	php bin/console assets:install

set_permissions:
	sudo chown -fR $(whoami):www-data *
	sudo chmod -fR 777 var app web

d_database_create:
	php bin/console doctrine:database:create -q -n

d_mapping_inf:
	php bin/console doctrine:mapping:info

d_schema_val:
	php bin/console doctrine:schema:validate

d_schema_up:
	php bin/console doctrine:schema:update --force

d_fixtures_load:
	php bin/console doctrine:fixtures:load

composer_autoload_optimize:
	composer dump-autoload --optimize

cc_dev:
	php bin/console cache:clear
	php bin/console cache:clear -e=admin_dev

cc_prod:
	php bin/console cache:clear --env=prod
	php bin/console cache:clear -e=admin

docker_build:
	docker build .

run_server:
	php bin/console server:start 127.0.0.1:7080 --force
