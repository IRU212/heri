init:
	cp .env.example .env
	# cp src/.env.example src/.env
	docker-compose build
	docker-compose up -d
	docker-compose exec app composer install
	docker-compose exec app php artisan key:generate
	docker-compose exec app php artisan storage:link
	docker-compose exec app php artisan passport:keys
	docker-compose exec app chmod -R 777 storage bootstrap/cache
	docker-compose exec app php artisan migrate:fresh --seed
	docker-compose exec app yarn install
# docker
up:
	docker-compose up -d
build:
	docker-compose build
start:
	docker-compose start
stop:
	docker-compose stop
app:
	docker-compose exec app bash
next:
	docker-compose exec next bash
# laravel
watch:
	cd src && echo "start up now!🎉🎉🎉🎉🎉🎉🎉🎉🎉🎉🎉" && yarn watch
dev:
	cd src && echo "build now!🎉🎉🎉🎉🎉🎉🎉🎉🎉🎉🎉" && yarn dev
migrate:
	docker-compose exec app php artisan migrate
migrate-fresh:
	docker-compose exec app php artisan migrate:fresh
fresh:
	docker-compose exec app php artisan migrate:fresh --seed
seed:
	docker-compose exec app php artisan db:seed
test:
	docker-compose exec app php artisan test
cache:
	docker-compose exec app php artisan cache:clear
	docker-compose exec app php artisan config:clear
	docker-compose exec app php artisan route:clear
	docker-compose exec app php artisan view:clear
# next
