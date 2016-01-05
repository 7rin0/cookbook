get_requirements:
	sudo apt-get install php5-cli
	curl -s http://getcomposer.org/installer | php; sudo mv composer.phar /usr/local/bin/composer; bash

get_vendors:
	composer install

generate_assets:
	php bin/console assets:install
	php bin/console assetic:dump

set_permissions:
	sudo chown -fR $(USER):www-data *
	sudo chmod -fR 777 app web

doctrine_init_database:
	-php bin/console doctrine:database:create -q -n
	-php bin/console doctrine:phpcr:init:dbal --force -q -n
	php bin/console doctrine:phpcr:repository:init -n
	php bin/console fos:user:create seven_manager lfs.severino@gmail.com s7ven --super-admin -q
	php bin/console fos:user:create admin admin@admin.com admin --super-admin -q

doctrine_load_fixtures:
	php bin/console doctrine:phpcr:fixtures:load -n

doctrine_read_mapping:
	php bin/console doctrine:phpcr:mapping:info

doctrine_schema_validate:
	php bin/console doctrine:schema:validate

clear_cache:
	sudo rm -rf app/cache/* app/logs/*
	php bin/console doctrine:cache:clear-query

docker_build:
	docker build .

run_server:
	php bin/console server:start 127.0.0.1:7070
