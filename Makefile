env: ## Start required containers: postgres and ruby
	@docker compose up -d

up: env ## alias for env

build: ## Re-build ruby container (if Dockerfile changes)
	@docker compose build

.docker-build: docker/Dockerfile
	@docker compose build
	@touch $@

bundle: env
	@docker compose exec web bash -c "composer install"

db_prepare: env ## Ensure database is created, migrated, and seeded
	@docker compose exec web php artisan migrate

prepare_all: .docker-build env bundle db_prepare

s: ## Fast start bash shell without environment checks
	@docker compose exec -it web bash

shell: prepare_all s ## Ensure environment is up and running and drop into shell in ruby container

laravel: ## Start the rails server
	@docker compose exec web php artisan serve

start: prepare_all laravel ## Build and start full environment, run bundle install, ensure db is ready, and start rails server

c: ## Fast start the rails console without environment checks
	@docker compose exec -it web php artisan tinker

console: prepare_all c ## Ensure environment is running and spin up the rails console

down: ## Shut down containers
	@docker compose down

help: ## Print out this help message
	@egrep "^([a-zA-Z0-9_-]+):(.*)*##[[:blank:]]*(.*)" $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'
