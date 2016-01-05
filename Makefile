get_requirements:
	sudo apt-get install php5-cli
	curl -s http://getcomposer.org/installer | php; sudo mv composer.phar /usr/local/bin/composer; bash

get_vendors:
	composer install

generate_assets:
	php bin/console assets:install

set_permissions:
	sudo chown -fR $(whoami):www-data *
	sudo chmod -fR 777 app web

doctrine_database_create:
	php bin/console doctrine:database:create -q -n

doctrine_mapping_info:
	php bin/console doctrine:mapping:info

doctrine_schema_validate:
	php bin/console doctrine:schema:validate

cc:
	sudo rm -rf app/cache app/logs
	php bin/console doctrine:cache:clear-query

cc_dev:
	php bin/console cache:clear

cc_prod:
	php bin/console cache:clear --env=prod

docker_build:
	docker build .

run_server:
	php bin/console server:start 127.0.0.1:7070
